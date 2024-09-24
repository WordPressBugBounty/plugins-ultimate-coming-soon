<?php if (!defined('ABSPATH')) exit;
// Template Image
require_once('templates-image.php');

// Template Data
require_once('templates-data.php');

$activatedTemplateId = get_option('activated_template_id');
$proTemplateIds = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14, 15, 17, 18, 19, 20, 21, 22, 23, 24); // IDs of templates with "Pro" buttons
?>
<!-- Radio Tabs -->
<div class="ucsm-template-filter" style="text-align: center;">
    <div class="wpucs-radio-status-lite">
        <div class="wpucs-radio-box-lite">
            <div class="wpucs-radio-item-lite">
                <input type="radio" id="filter-all" name="template-filter" value="all" checked>
                <label for="filter-all">
                    <div class="wpucs-dot-icon-pro"></div>
                    <span><?php esc_html_e('All Templates', 'ultimate-coming-soon'); ?></span>
                </label>
            </div>
            <div class="wpucs-radio-item-lite">    
                <input type="radio" id="filter-available" name="template-filter" value="available">
                <label for="filter-available">
                    <div class="wpucs-dot-icon-pro"></div>
                    <span><?php esc_html_e('Free Templates', 'ultimate-coming-soon'); ?>
                    </span>
                </label>
            </div>
            <div class="wpucs-radio-item-lite">

                <input type="radio" id="filter-pro" name="template-filter" value="pro">
                <label for="filter-pro">
                    <div class="wpucs-dot-icon-pro"></div>
                    <span><?php esc_html_e('Pro Templates', 'ultimate-coming-soon'); ?></span>
                </label>
            </div> 
        </div> 
    </div>         
</div>

<!-- Template Grid -->
<div class="ucsm-template-grid-lite">
    <?php foreach ($templateData as $template): ?>
        <?php
        $templateId = $template['id'];
        $templateName = $template['name'];
        $templateImage = $template['image'];
        $isActive = $activatedTemplateId === $templateId;
        $isProTemplate = in_array($templateId, $proTemplateIds);
        ?>
        <div class="ucsm-template-grid-lite-item <?php echo $isActive ? 'active' : ''; ?> <?php echo $isProTemplate ? 'pro' : ''; ?>">
            <div class="thumb">
                <img src="<?php echo esc_url($templateImage); ?>" alt="<?php echo esc_attr($templateName); ?>">
            </div>
            <div class="content">
                <h2><?php echo esc_html($templateName); ?></h2>
                <div class="buttons">
                    <!-- Pro -->
                    <?php if ($isProTemplate): ?>
                        <a href="https://wpucs.com/" target="_blank" class="button-pro"><?php esc_html_e('Pro', 'ultimate-coming-soon'); ?></a>
                    <?php else: ?>
                        <!-- Settings -->
                        <?php if (!$isActive): ?>
                            <a href="#" class="button-active" data-template="<?php echo esc_attr($templateId); ?>"
                               data-template-name="<?php echo esc_attr($templateName); ?>"><?php esc_html_e('Activate', 'ultimate-coming-soon'); ?></a>
                        <?php endif; ?>
                        <!-- Preview -->
                        <a href="?page=ucsm-general-settings-lite&tab=dashboard-lite"
                           class="button-settings"><?php esc_html_e('Settings', 'ultimate-coming-soon'); ?></a>
                    <?php endif; ?>
                    <button class="button-preview"
                            data-image="<?php echo esc_url($templateImage); ?>"><?php esc_html_e('Preview', 'ultimate-coming-soon') ?></button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- End Template Grid -->

<!-- Modal -->
<div id="template-modal" class="ucsm-modal">
    <div class="modal-content-lite">
        <span class="close">
            <svg class="svg-icon" style="vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M777.856 280.192l-33.92-33.952-231.872 231.872-231.84-231.872-33.984 33.888 231.872 231.904-231.84 231.84 33.888 33.984 231.904-231.904 231.84 231.872 33.952-33.888-231.872-231.904z" />
            </svg>
        </span>
        <img id="modal-image" src="" alt="Preview Image">
    </div>
</div>
<!-- End Modal -->

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        const activateButtons = document.querySelectorAll('.button-active');
        const proButtons = document.querySelectorAll('.button-pro');

        activateButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const templateId = button.getAttribute('data-template');
                const clickedTemplateName = button.getAttribute('data-template-name');
                if (templateId) {
                    const activationUrl = <?php echo wp_json_encode(admin_url('admin-ajax.php')); ?> +
                        '?action=activate_template&templateId=' + templateId;

                    fetch(activationUrl)
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                activateButtons.forEach(btn => {
                                    btn.classList.remove('active');
                                    btn.style.display = 'inline-block';
                                    const templateItem = btn.closest('.ucsm-template-grid-lite-item');
                                    const settingsButton = templateItem.querySelector('.button-settings');
                                    if (settingsButton) {
                                        settingsButton.style.display = 'none'; // Hide the Settings button
                                    }
                                });
                                button.classList.add('active');
                                button.style.display = 'none';
                                // Change the page's URL and reload it
                                const newURL = '?page=ucsm-general-settings-lite&tab=templates-lite';
                                window.location.href = newURL;

                                const templateItem = button.closest('.ucsm-template-grid-lite-item');
                                const settingsButton = templateItem.querySelector('.button-settings');
                                if (settingsButton) {
                                    settingsButton.style.display = 'inline-block'; // Show the Settings button
                                }
                                alert(data.data);
                                localStorage.setItem('activated_template', templateId);
                                localStorage.setItem('settings_button_visible', 'true'); // Store the state of the Settings button visibility
                                // Update the template name in the database
                                if (clickedTemplateName) {
                                    updateTemplateName(templateId, clickedTemplateName);
                                }
                            } else {
                                alert(data.data);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }
            });
        });

        const previousActivated = localStorage.getItem('activated_template');
        if (previousActivated) {
            const templateButton = document.querySelector(`.button-active[data-template="${previousActivated}"]`);
            if (templateButton) {
                templateButton.classList.add('active');
                templateButton.style.display = 'none';
                const templateItem = templateButton.closest('.ucsm-template-grid-lite-item');
                const settingsButton = templateItem.querySelector('.button-settings');
                if (settingsButton) {
                    const settingsButtonVisible = localStorage.getItem('settings_button_visible');
                    if (settingsButtonVisible === 'true') {
                        settingsButton.style.display = 'inline-block'; // Show the Settings button for previously activated template
                    } else {
                        settingsButton.style.display = 'none'; // Hide the Settings button for previously activated template
                    }
                }
            }
        }

        // Function to update template name using AJAX
        function updateTemplateName(templateId, templateName) {
            const updateTemplateNameUrl = <?php echo wp_json_encode(admin_url('admin-ajax.php')); ?> +
                '?action=update_template_name&templateId=' + templateId + '&templateName=' + encodeURIComponent(templateName);

            fetch(updateTemplateNameUrl)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Handle successful update if needed
                    } else {
                        // Handle update failure if needed
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        const modal = document.getElementById('template-modal');
        const modalContent = document.querySelector('.modal-content-lite');
        const modalImage = document.getElementById('modal-image');
        const closeBtn = document.querySelector('.close');
        const previewButtons = document.querySelectorAll('.button-preview');

        let scale = .5;
        let zoomedPixelX = 0;
        let zoomedPixelY = 0;
        let zoomEnabled = true;

        previewButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const imageUrl = button.getAttribute('data-image');
                modalImage.src = imageUrl;
                scale = 1;
                zoomedPixelX = 0;
                zoomedPixelY = 0;
                zoomEnabled = true; // Enable zoom on image open
                updateImageScale();
                modal.style.display = 'block';
            });
        });

        function updateImageScale() {
            modalImage.style.transform = `scale(${scale})`;
            modalImage.style.transformOrigin = `${zoomedPixelX}px ${zoomedPixelY}px`;
            modalImage.style.transform += ` translate(${-(zoomedPixelX * scale - zoomedPixelX)}px, ${-(zoomedPixelY * scale - zoomedPixelY)}px)`;
        }

        modalContent.addEventListener('wheel', function(event) {
            if (!zoomEnabled) return;
            event.preventDefault();
            if (event.deltaY < 0) {
                scale += 0.0; // Zoom in
            } else {
                scale -= -0.0; // Zoom out, with minimum scale limit
            }
            zoomEnabled = false; // Disable zoom after the first interaction
            updateImageScale();
        });

        modalImage.addEventListener('click', function(event) {
            if (!zoomEnabled) return;
            const imageRect = modalImage.getBoundingClientRect();
            const offsetX = event.clientX - imageRect.left;
            const offsetY = event.clientY - imageRect.top;

            zoomedPixelX = offsetX / scale;
            zoomedPixelY = offsetY / scale;

            zoomEnabled = false; // Disable zoom after the first interaction
            updateImageScale();
        });

        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });

        // Filtering logic
        const filterAll = document.getElementById('filter-all');
        const filterAvailable = document.getElementById('filter-available');
        const filterPro = document.getElementById('filter-pro');
        const templateItems = document.querySelectorAll('.ucsm-template-grid-lite-item');

        function filterTemplates() {
            const filterValue = document.querySelector('input[name="template-filter"]:checked').value;
            templateItems.forEach(item => {
                const isActive = item.classList.contains('active');
                const isPro = item.classList.contains('pro');
                if (filterValue === 'all') {
                    item.style.display = 'block';
                } else if (filterValue === 'available') {
                    item.style.display = !isPro ? 'block' : 'none';
                } else if (filterValue === 'pro') {
                    item.style.display = isPro ? 'block' : 'none';
                }
            });
        }

        filterAll.addEventListener('change', filterTemplates);
        filterAvailable.addEventListener('change', filterTemplates);
        filterPro.addEventListener('change', filterTemplates);

        filterTemplates(); // Initial call to set the correct filter state on page load
    });
</script>
