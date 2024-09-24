<?php if ( ! defined( 'ABSPATH' ) ) exit;

require_once UCSM_PLUGIN_DIR_LITE .'functions/default-data.php';

$active_tab = isset( $_GET['tab'] ) ? sanitize_text_field( wp_unslash( $_GET['tab'] ) ) : 'dashboard-lite';

if (isset($_POST['ucsm_display_activation_notice_lite'])) {
$active_tab = isset( $_POST['active_tab'] ) ? sanitize_text_field( wp_unslash( $_POST['active_tab'] ) ) : $active_tab;

    switch ($active_tab) {

        case 'dashboard-lite':

            // Verify the nonce for security
            if (isset($_POST['wpucs_dashboard_nonce_field']) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['wpucs_dashboard_nonce_field'])), 'wpucs_dashboard_nonce')) {
                
                
                if (isset($_POST['wpucs_enable_mode']) && $_POST['wpucs_enable_mode'] === 'checked') {
                    update_option('wpucs_enable_mode', true);

                    update_option('ucsm_mode', sanitize_text_field($_POST['ucsm_mode']));  
                    update_option('ucsm_page_setup', sanitize_text_field($_POST['ucsm_page_setup'])); 
                    if ($_POST['ucsm_mode'] === 'redirect'){
                    
                        update_option('wpucs_redirect_mode_url', sanitize_text_field($_POST['wpucs_redirect_mode_url'])); 
                    }

                } else {
                    update_option('wpucs_enable_mode', false);
                }    
                
                  
            } else {
                // Nonce verification failed. You can handle the error or log it.
                // Display an error message or take appropriate action.
                echo '<div class="notice notice-error"><p>' . esc_html__('Nonce verification failed. Your request cannot be processed.', 'ultimate-coming-soon') . '</p></div>';
            }

        break;

        case 'content-lite':

            // Verify the nonce for security
            if (isset($_POST['wpucs_content_nonce_field']) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['wpucs_content_nonce_field'])), 'wpucs_content_nonce')) {
                
                update_option('wpucs_main_heading', sanitize_text_field($_POST['wpucs_main_heading']));
                update_option('wpucs_main_description', sanitize_text_field($_POST['wpucs_main_description']));
                if ( $activatedTemplateId == 0 || $activatedTemplateId == 13 || $activatedTemplateId == 16 || $activatedTemplateId == 25 || $activatedTemplateId == 26  || $activatedTemplateId == 28)  {
                    update_option('wpucs_sub_heading', sanitize_text_field($_POST['wpucs_sub_heading']));
                } else {
                    // Handle fields for other templates if needed
                }

            } else {
                // Nonce verification failed. You can handle the error or log it.
                // Display an error message or take appropriate action.
                echo '<div class="notice notice-error"><p>' . esc_html__('Nonce verification failed. Your request cannot be processed.', 'ultimate-coming-soon') . '</p></div>';
            }

        break;

        case 'seo-lite':

            // Verify the nonce for security
            
            if (isset($_POST['wpucs_seo_nonce_field']) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['wpucs_seo_nonce_field'])), 'wpucs_seo_nonce')) {    
                
                // Update the 'wpucs_seo_title' option
                update_option('wpucs_seo_title', sanitize_text_field($_POST['wpucs_seo_title']));
                // Update the 'wpucs_seo_description' option
                update_option('wpucs_seo_description', sanitize_text_field($_POST['wpucs_seo_description']));
                update_option('wpucs_seo_img', esc_url(sanitize_text_field(wp_unslash($_POST['wpucs_seo_img']))));
                update_option('wpucs_seo_meta_keywords', sanitize_text_field($_POST['wpucs_seo_meta_keywords'])); 
                update_option('wpucs_google_analytics', sanitize_text_field($_POST['wpucs_google_analytics'])); 

            } else {
                // Nonce verification failed. You can handle the error or log it.
                // Display an error message or take appropriate action.
                echo '<div class="notice notice-error"><p>' . esc_html__('Nonce verification failed. Your request cannot be processed.', 'ultimate-coming-soon') . '</p></div>';
            }
                       
        break;

        case 'design-lite':
            // Verify the nonce for security
            
            if (isset($_POST['wpucs_design_nonce_field']) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['wpucs_design_nonce_field'])), 'wpucs_design_nonce')) {    
                
                update_option('wpucs_logo_setup', sanitize_text_field($_POST['wpucs_logo_setup']));

                if ($_POST['wpucs_logo_setup'] === 'text'){
                    update_option('wpucs_website_text_logo', sanitize_text_field($_POST['wpucs_website_text_logo']));  
                }

                if ($_POST['wpucs_logo_setup'] === 'graphic'){
                    
                    update_option('wpucs_website_logo', esc_url(sanitize_text_field(wp_unslash($_POST['wpucs_website_logo']))));  
                }
                update_option('wpucs_favicon', esc_url(sanitize_text_field(wp_unslash($_POST['wpucs_favicon']))));
                update_option('wpucs_background_image', sanitize_text_field($_POST['wpucs_background_image']));

                if ( $activatedTemplateId == 25 || $activatedTemplateId == 26 || $activatedTemplateId == 27 || $activatedTemplateId == 28) {
                    update_option('wpucs_shape_overlay', sanitize_text_field($_POST['wpucs_shape_overlay']));
                } else {
                    // Handle fields for other templates if needed
                }
                
                update_option('wpucs_background_color', sanitize_text_field($_POST['wpucs_background_color']));
                update_option('wpucs_background_color_rgba', sanitize_text_field($_POST['wpucs_background_color_rgba']));
            } else {
                // Nonce verification failed. You can handle the error or log it.
                // Display an error message or take appropriate action.
                echo '<div class="notice notice-error"><p>' . esc_html__('Nonce verification failed. Your request cannot be processed.', 'ultimate-coming-soon') . '</p></div>';
            }

        break;

        case 'social-lite':
            // Verify the nonce for security            
            if (isset($_POST['wpucs_social_nonce_field']) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['wpucs_social_nonce_field'])), 'wpucs_social_nonce')) {    
                $social_links = array();
                $platforms = array('facebook', 'twitter', 'instagram', 'youtube', 'linkedin', 'pinterest', 'snapchat', 'tiktok', 'reddit', 'tumblr', 'whatsapp', 'telegram', 'wechat', 'flickr', 'behance', 'dribbble', 'vimeo', 'soundcloud', 'xing', 'github', 'spotify', 'wordpress','discord','twitch','line');
                foreach ($platforms as $platform) {
                    if (!empty($_POST["wpucs_social_$platform"])) {
                        $social_links[$platform] = sanitize_text_field($_POST["wpucs_social_$platform"]);
                    }
                }
                update_option('wpucs_social_links', $social_links);

                // Save the order of the platforms
                if (!empty($_POST['social_links_order'])) {
                    $social_links_order = array_map('sanitize_text_field', explode(',', $_POST['social_links_order']));
                    update_option('wpucs_social_links_order', $social_links_order);
                }


            } else {
                // Nonce verification failed. You can handle the error or log it.
                // Display an error message or take appropriate action.
                echo '<div class="notice notice-error"><p>' . esc_html__('Nonce verification failed. Your request cannot be processed.', 'ultimate-coming-soon') . '</p></div>';
            }

        break;
        case 'contact_info-lite':
            // Verify the nonce for security
            
            if (isset($_POST['wpucs_contact_info_nonce_field']) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['wpucs_contact_info_nonce_field'])), 'wpucs_contact_info_nonce')) {    
                
                if ($activatedTemplateId == 0  || $activatedTemplateId == 16 ) {
                    update_option('wpucs_cf_opening_hours', sanitize_text_field($_POST['wpucs_cf_opening_hours']));
                } else {
                    // Handle fields for other templates if needed
                }
                if ($activatedTemplateId == 0  || $activatedTemplateId == 16 ) {
                    update_option('wpucs_cf_address', sanitize_text_field($_POST['wpucs_cf_address']));
                } else {
                    // Handle fields for other templates if needed
                }
                if ($activatedTemplateId == 0  || $activatedTemplateId == 16 ) {
                    update_option('wpucs_cf_email_address', sanitize_text_field($_POST['wpucs_cf_email_address']));
                } else {
                    // Handle fields for other templates if needed
                }
                if ($activatedTemplateId == 0  || $activatedTemplateId == 13 || $activatedTemplateId == 16) {
                    update_option('wpucs_cf_contact_no', sanitize_text_field($_POST['wpucs_cf_contact_no']));
                } else {
                    // Handle fields for other templates if needed
                }
                         
            } else {
                 // Nonce verification failed. You can handle the error or log it.
                // Display an error message or take appropriate action.
                echo '<div class="notice notice-error"><p>' . esc_html__('Nonce verification failed. Your request cannot be processed.', 'ultimate-coming-soon') . '</p></div>';
            }

        break;
     
        case 'countdown_timer-lite':
            // Verify the nonce for security
            
            if (isset($_POST['wpucs_countdown_timer_settings_nonce_field']) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['wpucs_countdown_timer_settings_nonce_field'])), 'wpucs_countdown_timer_settings_nonce')) {    
                
                // Update the countdown timer status option
                update_option('wpucs_countdown_timer_status', sanitize_text_field($_POST['wpucs_countdown_timer_status']));
                update_option('wpucs_countdown_date', sanitize_text_field($_POST['wpucs_countdown_date']));

            } else {
                // Nonce verification failed. You can handle the error or log it.
                // Display an error message or take appropriate action.
                echo '<div class="notice notice-error"><p>' . esc_html__('Nonce verification failed. Your request cannot be processed.', 'ultimate-coming-soon') . '</p></div>';
            }

        break;  

        case 'newsletter-lite':
            // Verify the nonce for security
            
            if (isset($_POST['wpucs_newsletter_nonce_field']) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['wpucs_newsletter_nonce_field'])), 'wpucs_newsletter_nonce')) {    
                // Update the newsletter status option
               
                update_option('wpucs_newsletter_status', sanitize_text_field($_POST['wpucs_newsletter_status']));

            } else {
                // Nonce verification failed. You can handle the error or log it.
                // Display an error message or take appropriate action.
                echo '<div class="notice notice-error"><p>' . esc_html__('Nonce verification failed. Your request cannot be processed.', 'ultimate-coming-soon') . '</p></div>';
            }
        break;            
    }
   
    ?>

    <div class="row">
        <div class="col-md-12">
            <div class="wpucsnotice-lite wpucsnotice-success is-dismissible">
                <p>
                    <?php esc_html_e('Settings saved.', 'ultimate-coming-soon'); ?>
                </p>
                <button type="button" class="wpucsnotice-dismiss">
                    <span class="screen-reader-text"><?php esc_html_e('Dismiss this notice.', 'ultimate-coming-soon'); ?>
                        
                    </span>
                </button>
            </div>
        </div>
    </div>

    <?php

}
// After saving settings, check if the reset button was clicked
if (isset($_POST['ucsm_settings_reset_tab_lite'])) {
    $active_tab = isset( $_POST['active_tab'] ) ? sanitize_text_field( wp_unslash( $_POST['active_tab'] ) ) : $active_tab;

    // Call the appropriate reset function based on the active tab
    switch ($active_tab) {
        case 'dashboard-lite':
            ucsm_reset_dashboard_tab_lite();
            break;

        case 'content-lite':
            ucsm_reset_content_tab_lite();
            break;

        case 'seo-lite':
            ucsm_reset_seo_tab_lite();
            break;

        case 'design-lite':
            ucsm_reset_design_tab_lite();
            break;

        case 'social-lite':
            ucsm_reset_social_tab_lite();
            break;

        case 'contact_info-lite':
            ucsm_reset_contact_info_tab_lite();
            break;

        case 'countdown_timer-lite':
            ucsm_reset_countdown_timer_tab_lite();
            break;
        case 'newsletter-lite':
            ucsm_reset_newsletter_tab_lite();
            break; 
          
    }

    // Provide a success message for the reset
    
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="wpucsnotice-lite wpucsnotice-success is-dismissible">
                <p><?php esc_html_e('Settings reset to default.', 'ultimate-coming-soon'); ?></p>
                <button type="button" class="wpucsnotice-dismiss">
                    <span class="screen-reader-text"><?php esc_html_e('Dismiss this notice.', 'ultimate-coming-soon'); ?></span>
                </button>
            </div>
        </div>
    </div>
    <?php
}

// Retrieve the current enable/disable status from the database


 $form_action_url = add_query_arg(array('tab' => $active_tab), esc_url(sanitize_text_field($_SERVER['REQUEST_URI'])));
 require_once('essential-variables.php'); 
?>
