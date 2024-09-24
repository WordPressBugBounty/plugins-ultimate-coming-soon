<?php if ( ! defined( 'ABSPATH' ) ) exit;

function ucsm_display_page_lite() {
    global $wp;

    $wpucs_enable_mode = get_option('wpucs_enable_mode', '');
    $ucsm_mode = get_option('ucsm_mode', '');
    $ucsm_page_setup = get_option('ucsm_page_setup', 'whole-website'); // Default to 'whole-website' if not set

    if ($wpucs_enable_mode && !current_user_can('manage_options')) {
        // Check if it's 'whole-website' mode
        if ($ucsm_page_setup === 'whole-website' && ($ucsm_mode === 'maintenance' || $ucsm_mode === 'coming_soon')) {
            $activated_template_id = get_option('activated_template_id', false);
            $template_dir = UCSM_PLUGIN_DIR_LITE . 'templates/comingsoon';

            if ($activated_template_id) {
                $template_file = $template_dir . $activated_template_id . '/index.php';

                if (file_exists($template_file)) {
                    include($template_file);
                    exit();
                }
            } else {
                $default_template_file = $template_dir . '0/index.php';

                if (file_exists($default_template_file)) {
                    include($default_template_file);
                    exit();
                }
            }
        }

        // Check if it's 'homepage' mode
        if ($ucsm_page_setup === 'homepage' && is_front_page() && ($ucsm_mode === 'maintenance' || $ucsm_mode === 'coming_soon')) {
            $activated_template_id = get_option('activated_template_id', false);
            $template_dir = UCSM_PLUGIN_DIR_LITE . 'templates/comingsoon';

            if ($activated_template_id) {
                $template_file = $template_dir . $activated_template_id . '/index.php';

                if (file_exists($template_file)) {
                    include($template_file);
                    exit();
                }
            } else {
                $default_template_file = $template_dir . '0/index.php';

                if (file_exists($default_template_file)) {
                    include($default_template_file);
                    exit();
                }
            }
        }
    }
}

add_action('template_redirect', 'ucsm_display_page_lite');

function ucsm_display_page_lite_PRO() {
    global $wp;

    $wpucs_enable_mode = get_option('wpucs_enable_mode', '');
    $wpucs_redirect_mode_url = get_option('wpucs_redirect_mode_url', '');
    $ucsm_mode = get_option('ucsm_mode', '');
    $ucsm_page_setup = get_option('ucsm_page_setup', 'whole-website'); // Default to 'whole-website' if not set

    if ($wpucs_enable_mode && !current_user_can('manage_options') && $ucsm_mode === 'redirect') {
        if (!empty($wpucs_redirect_mode_url)) {
            $redirect_url = esc_url($wpucs_redirect_mode_url);
        } else {
            // Set a default redirect URL here
            $redirect_url = home_url(); // Redirect to the homepage as an example
        }

        // Get the current URL
        $current_url = home_url(add_query_arg(array(), $wp->request));

        // Check if the current URL is different from the redirect URL to prevent a loop
        if ($current_url !== $redirect_url) {
            // Handle redirection logic based on 'whole-website' or 'homepage'
            if ($ucsm_page_setup === 'whole-website' || ($ucsm_page_setup === 'homepage' && is_front_page())) {
                safe_redirect($redirect_url);
                exit();
            }
        }
    }
}

add_action('template_redirect', 'ucsm_display_page_lite_PRO');

function safe_redirect($url, $status = 302) {
    if (!headers_sent()) {
        // Use wp_redirect() if headers are not yet sent
        wp_redirect($url, $status);
    } else {
        // Use JavaScript-based redirect as a fallback if headers are already sent
        echo "<script>window.location.href='" . esc_url($url) . "';</script>";
    }
    exit();
}



// Active individual template
function ucsm_activate_lite_template_lite() {
    if (isset($_GET['templateId'])) {
        $templateId = $_GET['templateId'];

        // Retrieve the template data
        include UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/templates/backend-part/templates-data.php';

        $activatedTemplateName = '';
        foreach ($templateData as $template) {
            if ($template['id'] == $templateId) {
                $activatedTemplateName = $template['name'];
                break;
            }
        }

        if ($activatedTemplateName !== '') {
            // Store the activated template ID in an option
            update_option('activated_template_id', $templateId);

            // Send a success response with the activated template name
            wp_send_json_success("'$activatedTemplateName' Template activated successfully");
        } else {
            // Send an error response if templateId is not found in templateData
            wp_send_json_error('Template ID not found');
        }
    } else {
        // Send an error response if templateId is not set
        wp_send_json_error('Template ID is missing');
    }
}
add_action('wp_ajax_activate_template', 'ucsm_activate_lite_template_lite');
add_action('wp_ajax_nopriv_activate_template', 'ucsm_activate_lite_template_lite'); // For non-logged-in users

// Update Template Name function
function ucsm_update_template_name_lite() {
    if (isset($_GET['templateId']) && isset($_GET['templateName'])) {
        $templateId = $_GET['templateId'];
        $templateName = sanitize_text_field($_GET['templateName']);

        update_option('template_name_' . $templateId, $templateName);

        wp_send_json_success();
    } else {
        wp_send_json_error();
    }
}
add_action('wp_ajax_update_template_name', 'ucsm_update_template_name_lite');