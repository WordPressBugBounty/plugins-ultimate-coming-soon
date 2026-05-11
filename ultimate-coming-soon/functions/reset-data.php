<?php if ( ! defined( 'ABSPATH' ) ) exit;

// Function to save the activated template ID
function save_activated_template_id($templateId) {
    $currentTemplateId = get_option('activated_template_id');

    // Check if the template ID has changed
    if ($templateId != $currentTemplateId) {
        // Template ID has changed, reset the defaults_set flag
        update_option('defaults_set', false);
    }

    // Update the activated template ID
    update_option('activated_template_id', $templateId);

    // After saving the template, update the default values based on the new template ID (only on the first run)
    update_default_values_based_on_template_once($templateId);
}

// Example usage when saving a template
$activatedTemplateId = get_option('activated_template_id');
// Replace with the actual template ID you want to save
save_activated_template_id($activatedTemplateId);

      //Reset Function

      // Function to reset options for the 'dashboard' tab
      function wpucs_reset_dashboard_tab_pro()
      {   
        
            $wpucs_dashboard_reset_nonce = wp_create_nonce('wpucs_dashboard_reset_nonce');
            $activatedTemplateId = get_option('activated_template_id');
            ?>
            <input type="hidden" name="wpucs_dashboard_reset_nonce_field" value="<?php echo esc_attr($wpucs_dashboard_reset_nonce); ?>">
            <?php
            // Update the options for the 'dashboard' tab here
      }

      // Function to reset options for the 'content' tab
      function wpucs_reset_content_tab_pro()
      {   
        
            $wpucs_content_reset_nonce = wp_create_nonce('wpucs_content_reset_nonce');
            $activatedTemplateId = get_option('activated_template_id');
            ?>
            <input type="hidden" name="wpucs_content_reset_nonce_field" value="<?php echo esc_attr($wpucs_content_reset_nonce); ?>">
            <?php
            // Update the options for the 'content' tab here
            
            update_option('wpucs_main_heading', 'We Are Coming');
            update_option('wpucs_sub_heading', 'Soon ! ');
            update_option('wpucs_main_description', 'We will let you know when we are Launching');

            if ($activatedTemplateId == 0) {
                  update_option('wpucs_main_heading', 'We Are');
                  update_option('wpucs_sub_heading', 'Coming Very Soon !');
                  
            }elseif ($activatedTemplateId == 1 ) { 
                  update_option('wpucs_main_heading', 'We Are Coming');
                  update_option('wpucs_sub_heading', 'Very Soon ! '); 
                  update_option('wpucs_main_description', 'All the lorem Ipsum generators on the Internet tend to repeat predefined necessary');
            }elseif ($activatedTemplateId == 4) {
                  update_option('wpucs_main_heading', 'We Are Coming');
                  update_option('wpucs_sub_heading', 'Very Soon ! ');
                  update_option('wpucs_main_description', 'All the lorem Ipsum generators on the Internet tend to repeat predefined necessary');
            }elseif ($activatedTemplateId == 5 ) {
                  update_option('wpucs_main_heading', 'We\'re Coming Soon');
            }elseif ( $activatedTemplateId == 6 ) {
                  update_option('wpucs_main_heading', 'We\'re Coming Soon');
            }elseif ($activatedTemplateId == 7  ) {
                  update_option('wpucs_main_heading', 'We\'re Coming Soon ');
                  update_option('wpucs_main_description', 'New Interior Design launching soon please reload after minutes');
            }elseif ($activatedTemplateId == 8) {
                  update_option('wpucs_main_heading', 'We are launching soon please reload after minutes');
                  update_option('wpucs_main_description', 'We are preparing something unique and exciting for you. Special surprise for our subscribers only.');     
            }elseif ( $activatedTemplateId == 9 ) {
                  update_option('wpucs_main_heading', 'We\'re Coming Soon');
            }elseif ($activatedTemplateId == 10) {
                  update_option('wpucs_main_description', 'We are preparing something unique and exciting for you, Special surprise for our subscribers only!');
            }elseif ($activatedTemplateId == 11 ) {
                  update_option('wpucs_main_heading', 'Coming Soon ');
                  update_option('wpucs_main_description', "We are preparing something unique and exciting for you, Special surprise for our subscribers only!");
            }elseif ( $activatedTemplateId == 12) {  
                  update_option('wpucs_main_description', 'All the lorem Ipsum generators on the Internet tend to repeat predefined necessary');
                  update_option('wpucs_sub_heading', 'Very Soon ! ');
            }elseif ( $activatedTemplateId == 13) {  
                  update_option('wpucs_main_heading', 'We\'re');
                  update_option('wpucs_sub_heading', 'Coming Soon !');      
            }elseif ($activatedTemplateId == 14 ) {
                  update_option('wpucs_main_heading', 'We\'re Coming Soon'); 
            }elseif ($activatedTemplateId == 15 ) {
                  update_option('wpucs_main_heading', 'We\'re Coming ');
                  update_option('wpucs_sub_heading', 'Soon ! ');  
            }elseif ($activatedTemplateId == 17) {
                  update_option('wpucs_main_heading', 'We\'re Coming Soon');   
            }elseif ($activatedTemplateId == 18) {
                  update_option('wpucs_main_heading', 'Coming Soon');
                  update_option('wpucs_main_description', "We are preparing something unique and exciting for you, Special surprise for our subscribers only!");
            }elseif ($activatedTemplateId == 19) {
                  update_option('wpucs_main_heading', 'Coming Soon');
                  update_option('wpucs_sub_heading', 'Our Website Is');
            }elseif ($activatedTemplateId == 20) {
                  update_option('wpucs_main_heading', 'We\'re Coming Soon');
                  update_option('wpucs_sub_heading', 'Digital Marketing Agency');
                  update_option('wpucs_main_description', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more.');
            }elseif ($activatedTemplateId == 21) {
                  update_option('wpucs_sub_heading', "Coming Soon 2023");
                  update_option('wpucs_main_heading', 'Discover authentic Japanese cuisine in the UK. ');
                  update_option('wpucs_main_heading1', 'Opening Soon! ');
                  update_option('wpucs_main_description', "Welcome to Esy, the newest addition to the vibrant Los Angeles dining scene! Our restaurant is dedicated to bringing you the most authentic and delicious Japanese cuisine.");
            }elseif ($activatedTemplateId == 22) {
                  update_option('wpucs_main_heading', 'Email marketing tool with built-in subscriptions');
                  update_option('wpucs_sub_heading', 'Coming Soon 2023');
                  update_option('wpucs_main_description', 'Email-Pulse is an all-in-one tool for email newsletters. It’s the perfect tool for bloggers, creatives, and artists. Join the waitlist to get early access to beta.');
            }elseif ($activatedTemplateId == 23) {
                  update_option('wpucs_sub_heading', 'We\'re Construction');
                  update_option('wpucs_main_heading', 'Coming Very Soon ');
                  update_option('wpucs_main_description', "We will come very quickly to offer you the best solution for your company.");
            }elseif ( $activatedTemplateId == 24) {
                  update_option('wpucs_main_heading', 'We’re Coming Soon');
            }elseif ($activatedTemplateId == 25) {
                  update_option('wpucs_main_heading', 'IS UNDER');
                  update_option('wpucs_sub_heading', 'CONSTRUCTION ');
                  update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
            }elseif ($activatedTemplateId == 26) {
                  update_option('wpucs_main_heading', 'Our Website Now');
                  update_option('wpucs_sub_heading', 'Under Construction ');
                  update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
            }elseif ($activatedTemplateId == 27) {
                  update_option('wpucs_main_heading', 'We\'re  Down For Maintenance ');
                  update_option('wpucs_main_description', 'We Will Be Back Soon');
            }elseif ( $activatedTemplateId == 28) {
                  update_option('wpucs_main_heading', 'Website Down For Maintenance ');
                  update_option('wpucs_sub_heading', 'We Will Be Back Soon');
                  update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
            }else {
                  
            }
      }
      // Function to reset options for the 'seo' tab
      function wpucs_reset_seo_tab_pro()
      {
            $wpucs_seo_reset_nonce = wp_create_nonce('wpucs_seo_reset_nonce');
            ?>
            <input type="hidden" name="wpucs_seo_reset_nonce_field" value="<?php echo esc_attr($wpucs_seo_reset_nonce); ?>">
            <?php
            // Update the options for the 'seo' tab here
            
      }
      // Function to reset options for the 'Design' tab
      function wpucs_reset_design_tab_pro()
      {
            $wpucs_design_reset_nonce = wp_create_nonce('wpucs_design_reset_nonce');
            $activatedTemplateId = get_option('activated_template_id');
            ?>
            <input type="hidden" name="wpucs_design_reset_nonce_field" value="<?php echo esc_attr($wpucs_design_reset_nonce); ?>">
            <?php
                  // Update the options for the 'design' tab here in individual activatedTemplateId
                  $site_favicon_url = get_site_icon_url();
                  $site_title = get_bloginfo('name');
                  $site_icon_url = get_site_icon_url();
                  update_option('wpucs_website_text_logo', $site_title);
                  update_option('wpucs_logo_setup', 'text');
                    
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo5.png');
                  }
                  // Website FAVICON
                  if ($site_favicon_url) {
                    update_option('wpucs_favicon', $site_favicon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_favicon', WPUCS_PLUGIN_URL.'assets/img/icon/favicon.png');
                  }
                  
                  update_option('wpucs_background_color', '#34787b');
                  update_option('wpucs_background_color_rgba', 'rgb(52, 120, 123)');
                  update_option('wpucs_main_heading_color', '#ffffff');
                  update_option('wpucs_main_description_color', '#ffffff');
                  update_option('wpucs_main_heading_font_size', 60);
                  update_option('wpucs_sub_heading_font_size', 60);
                  update_option('wpucs_main_description_font_size', 20);
                  update_option('wpucs_sub_heading_color', '#FFC75C' );
                  update_option('wpucs_sub_heading_color_rgba', 'rgb(255, 199, 92)');
                  update_option('wpucs_main_heading_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_main_description_color_rgba', 'rgb(255, 255, 255)');      
                  update_option('wpucs_box_container_size', '1000');
                  update_option('wpucs_background_overlay_color', '#FFF' );                  
                  update_option('wpucs_background_overlay_color_rgba', 'rgb(255, 255, 255,0)');
                  update_option('wpucs_website_text_logo_color', '#FFFFFF' );
                  update_option('wpucs_website_text_logo_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_website_text_logo_height', 60);

            if ($activatedTemplateId == 0) {
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-0.jpg');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo2.png');
                  } 
            }elseif ($activatedTemplateId == 1 ) {
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-1.jpg');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo14.png');
                  }

            }elseif ($activatedTemplateId == 2 ) {
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-2.jpg');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo1.png');
                  }
            }elseif ($activatedTemplateId == 3 ) {     
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-0.jpg');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo2.png');
                  }
            }elseif ($activatedTemplateId == 4) {
                  update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo4.png' );
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-4.jpg');
                  update_option('wpucs_shape_overlay', WPUCS_PLUGIN_URL . 'assets/img/background/shape-image.png');
                  update_option('wpucs_main_heading_color', '#1E3618');
                  update_option('wpucs_main_description_color', '#1E3618');
                  update_option('wpucs_main_heading_color_rgba', 'rgb(30, 54, 24)');
                  update_option('wpucs_main_description_color_rgba', 'rgba(30, 54, 24,0.8)');
                  update_option('wpucs_subscription_text_color', '#1E3618');
                  update_option('wpucs_subscription_text_color_rgba', 'rgb(30, 54, 24)'); 
            }elseif ($activatedTemplateId == 5 ) {
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-5.jpg');
                  update_option('wpucs_main_heading_font_size', 70);
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo14.png');
                  }
                  
            }elseif ($activatedTemplateId == 6 ) {
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo14.png');
                  }
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-6.jpg');
                  update_option('wpucs_main_heading_color', '#053643');
                  update_option('wpucs_main_description_color', '#053643');
                  update_option('wpucs_main_heading_font_size', 70);
                  update_option('wpucs_main_heading_color_rgba', 'rgb(5, 54, 61)');
                  update_option('wpucs_main_description_color_rgba', 'rgba(5, 54, 61, 0.8)');
                  update_option('wpucs_background_color', '#34787b');
                  update_option('wpucs_background_color_rgba', 'rgb(52, 120, 123)');
            }elseif ($activatedTemplateId == 7 ) {
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-7.jpg');
                  update_option('wpucs_main_heading_font_size', 100);
                  update_option('wpucs_main_description_font_size', 24);
                  
            }elseif ($activatedTemplateId == 8) {
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-8.jpg');
                  update_option('wpucs_main_description_color_rgba', 'rgba(255, 255, 255, 0.9)');
                  
            }elseif ($activatedTemplateId == 9) {
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-9.jpg');
                  
                  update_option('wpucs_main_heading_font_size', 100);
                  
            }elseif ($activatedTemplateId == 10) {
                  update_option('wpucs_background_image1', WPUCS_PLUGIN_URL . 'assets/img/background/background-10b.jpg');
                  update_option('wpucs_background_image2', WPUCS_PLUGIN_URL . 'assets/img/background/background-10c.jpg');
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-10a.jpg');
                  update_option('wpucs_main_heading_font_size', 70);
                  update_option('wpucs_sub_heading_font_size', 70);
                  update_option('wpucs_sub_heading_color', '#EF4222' );
                  update_option('wpucs_sub_heading_color_rgba', 'rgb(239, 66, 34)');
                  
            }elseif ($activatedTemplateId == 11 ) {
                  update_option('wpucs_main_heading_font_size', '150');
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-11.jpg');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo11.png');
                  }

            }elseif ($activatedTemplateId == 12 ) {
                  update_option('wpucs_sub_heading_color', '#31E6FF' );
                  update_option('wpucs_sub_heading_color_rgba', 'rgba(49, 230, 255, 1)');
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-12.jpg');
                  
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo9.png');
                  }

            }elseif ($activatedTemplateId == 13) {
                   
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-13.jpg');
                  update_option('wpucs_main_heading_font_size', 36);
                  update_option('wpucs_sub_heading_font_size', 100);
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo1.png');
                  }

            }elseif ($activatedTemplateId == 14) {
                  
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-14.jpg');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo7.png');
                  }
                  update_option('wpucs_sub_heading_color', '#FFA73B' );
                  update_option('wpucs_sub_heading_color_rgba', 'rgba(255, 167, 59, 1)');
                  update_option('wpucs_main_heading_color', '#000');
                  update_option('wpucs_main_description_color', '#2B2822');
                  update_option('wpucs_main_heading_color_rgba', 'rgb(0,0,0)');
                  update_option('wpucs_main_description_color_rgba', 'rgba(43, 40, 34, 0.8)');
                  update_option('wpucs_website_text_logo_color', '#000' );
                  update_option('wpucs_website_text_logo_color_rgba', 'rgb(0, 0, 0)');

            }elseif ($activatedTemplateId == 15) {
                  
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-15.jpg');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo3.png');
                  }
                  update_option('wpucs_main_heading_font_size', 70);
                  update_option('wpucs_main_description_color_rgba', 'rgba(255, 255, 255,0.8)'); 

            }elseif ($activatedTemplateId == 16) {
                  update_option('wpucs_sub_heading_color', '#f58b31' );
                  update_option('wpucs_sub_heading_color_rgba', 'rgb(245, 139, 49)');
                  update_option('wpucs_main_heading_font_size', 80);
                  update_option('wpucs_sub_heading_font_size', 80);
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-16.jpg');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo16.png');
                  }

            }elseif ($activatedTemplateId == 17) {
                  
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-17.jpg');
                  update_option('wpucs_main_heading_font_size', 70);
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo9.png');
                  }

            }elseif ($activatedTemplateId == 18) {
                  
                  update_option('wpucs_main_heading_font_size', '150');
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-18.jpg');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo.png');
                  }

            }elseif ($activatedTemplateId == 19) {
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-19b.jpg');
                  update_option('wpucs_background_image1', WPUCS_PLUGIN_URL . 'assets/img/background/background-19a.png');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo12.png');
                  }
                  update_option('wpucs_main_heading_font_size', 120);
                  update_option('wpucs_sub_heading_font_size', 20);
                  update_option('wpucs_sub_heading_color', '#EF4222');
                  update_option('wpucs_sub_heading_color_rgba', 'rgb(239, 64, 34)');
                  
            }elseif ($activatedTemplateId == 20) {    
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-20.jpg');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo17.png');
                  }
                  update_option('wpucs_main_heading_font_size', 80);
                  update_option('wpucs_sub_heading_font_size', 20);
                  update_option('wpucs_main_heading_color', '#01011F');
                  update_option('wpucs_main_description_color', '#020208');        
                  update_option('wpucs_main_heading_color_rgba', 'rgb(1, 1, 31)');
                  update_option('wpucs_main_description_color_rgba', 'rgba(2, 2, 8, 0.6)');  

            }elseif ($activatedTemplateId == 21) {
                  
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-21b.jpg');
                  update_option('wpucs_background_image1', WPUCS_PLUGIN_URL . 'assets/img/background/background-21a.jpg');
                  update_option('wpucs_main_heading_font_size', 48);
                  update_option('wpucs_sub_heading_font_size', 24);            
                  update_option('wpucs_sub_heading_color', '#DD4141' );     
                  update_option('wpucs_sub_heading_color_rgba', 'rgb(221,65,65)');
                  update_option('wpucs_main_heading_font_size1', 48);
                  update_option('wpucs_main_heading_color1', '#DD4141');
                  update_option('wpucs_main_heading1_color_rgba', 'rgb(221,65,65)');
            }elseif ($activatedTemplateId == 22) {
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-21b.jpg');
                  update_option('wpucs_background_image1', WPUCS_PLUGIN_URL . 'assets/img/background/background-22a.png');
                  update_option('wpucs_background_image2', WPUCS_PLUGIN_URL . 'assets/img/background/background-22c.png');
                  update_option('wpucs_main_heading_font_size', 48); 
                  update_option('wpucs_sub_heading_font_size', 24);
                  update_option('wpucs_sub_heading_color', '#DD4141' );      
                  update_option('wpucs_sub_heading_color_rgba', 'rgb(221, 65, 65)');

            }elseif ($activatedTemplateId == 23) {
                  update_option('wpucs_main_heading_color', '#0B0C1E');
                  update_option('wpucs_main_description_color', '#0B0C1E');
                  update_option('wpucs_sub_heading_color', '#0B0C1E' );
                  update_option('wpucs_sub_heading_color_rgba', 'rgb(11,12,30)');
                  update_option('wpucs_main_heading_color_rgba', 'rgb(11,12,30)');
                  update_option('wpucs_main_description_color_rgba', 'rgb(11,12,30)');
                  update_option('wpucs_sub_heading_font_size', '20');
                  update_option('wpucs_main_heading_font_size', '80');
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-23.jpg'); 
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo13.png');
                  }
            }elseif ($activatedTemplateId == 24) {
                  
                  update_option('wpucs_main_heading_color_rgba', 'rgb(15, 11, 2)');
                  update_option('wpucs_main_description_color_rgba', 'rgba(0, 0, 0,0.6)');
                  update_option('wpucs_main_heading_color', '#0F0B02' );
                  update_option('wpucs_main_description_color', '#000');
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-24b.jpg');
                  update_option('wpucs_background_image1', WPUCS_PLUGIN_URL . 'assets/img/background/background-24a.jpg');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo1.png');
                  }
                  
            }elseif ($activatedTemplateId == 25) {
                  
                  update_option('wpucs_main_heading_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_sub_heading_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_main_description_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_main_heading_color', '#fff' );
                  update_option('wpucs_main_description_color', '#fff');
                  update_option('wpucs_sub_heading_color', '#fff' );
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-25.jpg');
                  update_option('wpucs_shape_overlay', WPUCS_PLUGIN_URL . 'assets/img/background/shape-25.png');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo25.png');
                  }
                  
            }elseif ($activatedTemplateId == 26) {
                  
                  update_option('wpucs_main_heading_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_sub_heading_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_main_description_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_main_heading_color', '#fff' );
                  update_option('wpucs_main_description_color', '#fff');
                  update_option('wpucs_sub_heading_color', '#fff' );
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-26.jpg');
                  update_option('wpucs_shape_overlay', WPUCS_PLUGIN_URL . 'assets/img/background/shape-26.png');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo26.png');
                  }
                  
            }elseif ($activatedTemplateId == 27) {
                  
                  update_option('wpucs_main_heading_color_rgba', 'rgb(0, 0, 0)');
                  
                  update_option('wpucs_main_description_color_rgba', 'rgb(0, 0, 0)');
                  update_option('wpucs_main_heading_color', '#000' );
                  update_option('wpucs_main_description_color', '#000');
                  
                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-27.jpg');
                  update_option('wpucs_shape_overlay', WPUCS_PLUGIN_URL . 'assets/img/background/shape-27.png');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo27.png');
                  }
                  
            }elseif ($activatedTemplateId == 28) {
                  
                  update_option('wpucs_main_heading_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_sub_heading_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_main_description_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_main_heading_color', '#fff' );
                  update_option('wpucs_main_description_color', '#fff');
                  update_option('wpucs_sub_heading_color', '#fff' );

                  update_option('wpucs_background_image', WPUCS_PLUGIN_URL . 'assets/img/background/background-28.jpg');
                  update_option('wpucs_shape_overlay', WPUCS_PLUGIN_URL . 'assets/img/background/shape-28.png');
                  // Website Logo
                  if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                  } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', WPUCS_PLUGIN_URL . 'assets/img/icon/logo28.png');
                  }
                  
            } else{

            }
      }
      // Function to reset options for the 'social' tab
      function wpucs_reset_social_tab_pro()
      {
            $wpucs_social_reset_nonce = wp_create_nonce('wpucs_social_reset_nonce');
            $activatedTemplateId = get_option('activated_template_id');
            ?>
            <input type="hidden" name="wpucs_social_reset_nonce_field" value="<?php echo esc_attr($wpucs_social_reset_nonce); ?>">
            <?php

                  //social main color
                  update_option('wpucs_social_icon_color', '#FFFFFF');
                  update_option('wpucs_social_icon_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_social_icon_box_color', '#251481');
                  update_option('wpucs_social_icon_box_color_rgba', 'rgba(37, 20, 129, 0)');
                  update_option('wpucs_social_icon_boxborder_color', '#3e2e90');  
                  update_option('wpucs_social_icon_boxborder_color_rgba', 'rgb(62, 46, 144)');
                  //social hover color
                  update_option('wpucs_social_icon_hover_color', '#EF422');
                  update_option('wpucs_social_icon_hover_color_rgba', 'rgb(239, 66 ,34))');
                  update_option('wpucs_social_icon_hover_box_color', '#f5bf57');
                  update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(245, 191, 87)');
                  update_option('wpucs_social_icon_hover_boxborder_color', '#f5bf57 ');
                  update_option('wpucs_social_icon_hover_boxborder_color_rgba', 'rgb(245, 191, 87) ');
                  //social icon size
                  update_option('wpucs_social_iconbox_height', '40');
                  update_option('wpucs_social_iconbox_width', '40');
                  update_option('wpucs_social_icon_font_size', '18');
                  update_option('wpucs_social_icon_box_radius', '100');
                  update_option('wpucs_social_icon_box_border_width', '2');
                  // Update the options for the 'contact_info' tab here in individual activatedTemplateId     
                  if ($activatedTemplateId == 1 ) {
                        
                        update_option('wpucs_social_icon_color_rgba', 'rgb(255, 255, 255,0.8)');
                        update_option('wpucs_social_icon_box_color', '#FFFFFF');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgba(255, 255, 255, 0)');
                        update_option('wpucs_social_icon_boxborder_color', '#FFFFFF');  
                        update_option('wpucs_social_icon_boxborder_color_rgba', 'rgba(255, 255, 255,0.2)');
                        //social hover color
                        
                        update_option('wpucs_social_icon_hover_box_color', '#859f56');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(133, 159, 86)');
                        update_option('wpucs_social_icon_hover_boxborder_color', '#859f56 ');
                        update_option('wpucs_social_icon_hover_boxborder_color_rgba', 'rgb(133, 159, 86) ');
                  }elseif ($activatedTemplateId == 4 ) {
                        
                        update_option('wpucs_social_icon_color', '#1E3618');
                        update_option('wpucs_social_icon_color_rgba', 'rgba(30, 54, 24,0.8)');
                        update_option('wpucs_social_icon_box_color', '#1E3618');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgba(30, 54, 24, 0)');
                        update_option('wpucs_social_icon_boxborder_color', '#1E3618');  
                        update_option('wpucs_social_icon_boxborder_color_rgba', 'rgba(30, 54, 24,0.2)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_box_color', '#859f56');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(133, 159, 86)');
                        update_option('wpucs_social_icon_hover_boxborder_color', '#859f56 ');
                        update_option('wpucs_social_icon_hover_boxborder_color_rgba', 'rgb(133, 159, 86) ');
                  }   elseif ($activatedTemplateId == 5 ) {
                        
                        update_option('wpucs_social_icon_color', '#58781B');
                        update_option('wpucs_social_icon_color_rgba', 'rgb(88, 120, 27)');
                        update_option('wpucs_social_icon_box_color', '#F3F0FF');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgb(243, 240, 255)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#F3F0FF');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(243, 240, 255)');
                        update_option('wpucs_social_icon_hover_box_color', '#58781B');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(88, 120, 27)');
                        
                        //social icon size
                        
                        update_option('wpucs_social_icon_box_radius', '10');
                        update_option('wpucs_social_icon_box_border_width', '0');
                  }elseif ($activatedTemplateId == 7 ) {
                        
                        //social main color
                        update_option('wpucs_social_icon_color', '#FFFFFF');
                        update_option('wpucs_social_icon_color_rgba', 'rgba(255, 255, 255,0.8)');
                        update_option('wpucs_social_icon_box_color', '#FFFFFF');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgba(255, 255, 255, 0)');
                        update_option('wpucs_social_icon_boxborder_color', '#FFFFFF');  
                        update_option('wpucs_social_icon_boxborder_color_rgba', 'rgba(255, 255, 255,0.2)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#EF422');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(239, 66 ,34))');
                        update_option('wpucs_social_icon_hover_box_color', '#EF4222');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(239, 66 ,34)');
                        update_option('wpucs_social_icon_hover_boxborder_color', '#EF4222 ');
                        update_option('wpucs_social_icon_hover_boxborder_color_rgba', 'rgb(239, 66 ,34) ');
                  }elseif ($activatedTemplateId == 8 ) {
                        
                        update_option('wpucs_social_icon_color', '#FFFFFF');
                        update_option('wpucs_social_icon_color_rgba', 'rgba(255, 255, 255,0.8)');
                        
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#EF4222');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(239, 66 ,34)');
                        update_option('wpucs_social_icon_box_radius', '0');
                        update_option('wpucs_social_icon_box_border_width', '0');
                  }elseif ($activatedTemplateId == 9 ) {
                        
                        //social main color
                        update_option('wpucs_social_icon_color', '#FFFFFF');
                        update_option('wpucs_social_icon_color_rgba', 'rgba(255, 255, 255,0.8)');
                        update_option('wpucs_social_icon_box_color', '#FFFFFF');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgba(255, 255, 255, 0)');
                        update_option('wpucs_social_icon_boxborder_color', '#FFFFFF');  
                        update_option('wpucs_social_icon_boxborder_color_rgba', 'rgba(255, 255, 255,0.2)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#fff');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(255, 255, 255)');
                        update_option('wpucs_social_icon_hover_box_color', '#EF4222');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(239, 66 ,34)');
                        update_option('wpucs_social_icon_hover_boxborder_color', '#EF4222 ');
                        update_option('wpucs_social_icon_hover_boxborder_color_rgba', 'rgb(239, 66 ,34) ');
                  }elseif ($activatedTemplateId == 10 ) {
                        
                        update_option('wpucs_social_icon_hover_color', '#EF4222');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(239, 66 ,34)');

                  }elseif ($activatedTemplateId == 11 ) {
                        
                        //social
                        update_option('wpucs_social_icon_color', '#99a3b2');
                        update_option('wpucs_social_icon_color_rgba', 'rgb(153,163,178)');
                        update_option('wpucs_social_icon_box_color', '#fff');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgb(255, 255, 255)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#EF4222');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(239, 66 ,34)');
                        update_option('wpucs_social_icon_hover_box_color', '#fff');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(255,255,255)');
                        //social icon size
                        update_option('wpucs_social_icon_box_radius', '50');
                        update_option('wpucs_social_icon_box_border_width', '0');

                  } elseif ($activatedTemplateId == 12 ) {
                        update_option('wpucs_social_icon_color', '#FFFFFF');
                        update_option('wpucs_social_icon_color_rgba', 'rgba(255, 255, 255,0.8)');
                        update_option('wpucs_social_icon_box_color', '#FFFFFF');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgba(255, 255, 255, 0)');
                        update_option('wpucs_social_icon_boxborder_color', '#FFFFFF');  
                        update_option('wpucs_social_icon_boxborder_color_rgba', 'rgba(255, 255, 255,0.2)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#fff');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(255, 255, 255)');
                        update_option('wpucs_social_icon_hover_box_color', '#31E6FF');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgba(49, 230, 255, 1)');
                        update_option('wpucs_social_icon_hover_boxborder_color', '#31E6FF ');
                        update_option('wpucs_social_icon_hover_boxborder_color_rgba', 'rgba(49, 230, 255, 1) ');

                  }elseif ($activatedTemplateId == 13 ) {
                        update_option('wpucs_social_icon_boxborder_color', '#fff');  
                        update_option('wpucs_social_icon_boxborder_color_rgba', 'rgba(255, 255, 255, 0.2)');
                  }elseif ($activatedTemplateId == 14 ) {
                        update_option('wpucs_social_icon_color', '#F58C31');
                        update_option('wpucs_social_icon_color_rgba', 'rgba(245, 140, 49, 1)');
                        update_option('wpucs_social_icon_box_color', '#F58C31');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgba(245, 140, 49, 0)');
                        update_option('wpucs_social_icon_boxborder_color', '#F58C31');  
                        update_option('wpucs_social_icon_boxborder_color_rgba', 'rgba(245, 140, 49, .2)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#fff');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(255, 255, 255)');
                        update_option('wpucs_social_icon_hover_box_color', '#F58C31');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgba(245, 140, 49, 1)');
                        update_option('wpucs_social_icon_hover_boxborder_color', '#F58C31 ');
                        update_option('wpucs_social_icon_hover_boxborder_color_rgba', 'rgba(245, 140, 49, 1) ');

                  }elseif ($activatedTemplateId == 15 ) {
                        // social
                        update_option('wpucs_social_icon_color', '#BF0D1E');
                        update_option('wpucs_social_icon_color_rgba', 'rgb(191, 13, 30)');
                        update_option('wpucs_social_icon_box_color', '#fff');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgb(255, 255, 255)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#fff');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(255, 255, 255)');
                        update_option('wpucs_social_icon_hover_box_color', '#BF0D1E');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(191, 13, 30)');
                        //social icon size
                        update_option('wpucs_social_icon_box_radius', '10');
                        update_option('wpucs_social_icon_box_border_width', '0');
                        
                  }elseif ($activatedTemplateId == 17 ) {
                        // social
                        update_option('wpucs_social_icon_color', '#206a7c');
                        update_option('wpucs_social_icon_color_rgba', 'rgb(23,84,98)');
                        update_option('wpucs_social_icon_box_color', '#fff');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgb(255, 255, 255)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#fff');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(255, 255, 255)');
                        update_option('wpucs_social_icon_hover_box_color', '#206a7c');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(23,84,98)');
                        //social icon size
                        update_option('wpucs_social_icon_box_radius', '10');
                        update_option('wpucs_social_icon_box_border_width', '0');
                        
                  }elseif ($activatedTemplateId == 18 ) {
                        // social
                        update_option('wpucs_social_icon_color', '#99a3b2');
                        update_option('wpucs_social_icon_color_rgba', 'rgb(153,163,178)');
                        update_option('wpucs_social_icon_box_color', '#fff');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgb(255, 255, 255)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#3489fd');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(52,138,253)');
                        update_option('wpucs_social_icon_hover_box_color', '#fff');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(255,255,255)');
                        //social icon size
                        update_option('wpucs_social_icon_box_radius', '50');
                        update_option('wpucs_social_icon_box_border_width', '0');
                        
                  }elseif ($activatedTemplateId == 19 ) {
                        // social
                        update_option('wpucs_social_icon_hover_color', '#EF4222');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(239, 66 ,34)');
                        update_option('wpucs_social_icon_font_size', '17');
                        
                  }elseif ($activatedTemplateId == 21 ) {
                        //social main color
                        update_option('wpucs_social_icon_color', '#FFFFFF');
                        update_option('wpucs_social_icon_color_rgba', 'rgba(255, 255, 255,0.8)');
                        update_option('wpucs_social_icon_box_color', '#FFFFFF');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgba(255, 255, 255, 0)');
                        update_option('wpucs_social_icon_boxborder_color', '#FFFFFF');  
                        update_option('wpucs_social_icon_boxborder_color_rgba', 'rgba(255, 255, 255,0.2)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#fff');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(255, 255, 255)');
                        update_option('wpucs_social_icon_hover_box_color', '#EF4222');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(239, 66 ,34)');
                        update_option('wpucs_social_icon_hover_boxborder_color', '#EF4222 ');
                        update_option('wpucs_social_icon_hover_boxborder_color_rgba', 'rgb(239, 66 ,34) ');
                        
                  } elseif ($activatedTemplateId == 6 || $activatedTemplateId == 24 ) {
                        update_option('wpucs_social_icon_color', '#513DE8');
                        update_option('wpucs_social_icon_color_rgba', 'rgb(81, 61, 232)');
                        update_option('wpucs_social_icon_box_color', '#F3F0FF');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgb(243, 240, 255)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#F3F0FF');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(243, 240, 255)');
                        update_option('wpucs_social_icon_hover_box_color', '#513DE8');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(81, 61, 232)');
                        //social icon size
                        update_option('wpucs_social_icon_box_radius', '10');
                        update_option('wpucs_social_icon_box_border_width', '0');

                  } elseif ( $activatedTemplateId == 23 ) {
                        //social main color
                        update_option('wpucs_social_icon_color', '#000');
                        update_option('wpucs_social_icon_color_rgba', 'rgba(0, 0, 0, 1)');
                        update_option('wpucs_social_icon_box_color', '#000');
                        update_option('wpucs_social_icon_box_color_rgba', 'rgba(0, 0, 0, 0)');
                        update_option('wpucs_social_icon_boxborder_color', '#000');  
                        update_option('wpucs_social_icon_boxborder_color_rgba', 'rgba(0, 0, 0, 0)');
                        //social hover color
                        update_option('wpucs_social_icon_hover_color', '#fff');
                        update_option('wpucs_social_icon_hover_color_rgba', 'rgb(255, 255, 255)');
                        update_option('wpucs_social_icon_hover_box_color', '#000');
                        update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(0, 0, 0)');
                        update_option('wpucs_social_icon_hover_boxborder_color', '#000 ');
                        update_option('wpucs_social_icon_hover_boxborder_color_rgba', 'rgb(0, 0, 0) ');
                        //social icon size
                        update_option('wpucs_social_icon_box_radius', '2');
                        update_option('wpucs_social_icon_box_border_width', '0');

                  }else{
                  }
      }
      // Function to reset options for the 'Contact Info' tab
      function wpucs_reset_contact_info_tab_pro()
      {   
            $wpucs_contact_info_reset_nonce = wp_create_nonce('wpucs_contact_info_reset_nonce');
            $activatedTemplateId = get_option('activated_template_id');
            ?>
            <input type="hidden" name="wpucs_contact_info_reset_nonce_field" value="<?php echo esc_attr($wpucs_contact_info_reset_nonce); ?>">
            <?php
                  // Update the options for the 'contact_info' tab here
                  update_option('wpucs_cf_address', '19 Broklyn Golden Street. NY');
                  update_option('wpucs_cf_contact_no', '+00 9800 7804');
                  update_option('wpucs_cf_email_address', 'support@wpucs.com');
                  update_option('wpucs_cf_opening_hours', 'Mon – Tue 08:00AM – 05:00PM ');
                  update_option('wpucs_contact_info_height', '16');
                  update_option('wpucs_contact_info_color', '#fff');
                  update_option('wpucs_contact_info_fontawesome_color', '#fff');
                  update_option('wpucs_contact_info_color_rgba', 'rgb(255,255,255)');
                  update_option('wpucs_contact_info_fontawesome_color_rgba', 'rgb(255,255,255)');
                  update_option('wpucs_contact_info_border_color', '#fff');
                  update_option('wpucs_contact_info_border_color_rgba', 'rgba(255,255,255,0.1)');

            // Update the options for the 'contact_info' tab here in individual activatedTemplateId     
            if ($activatedTemplateId == 16  ) {
                  update_option('wpucs_contact_info_fontawesome_color', '#f78d30');    
                  update_option('wpucs_contact_info_fontawesome_color_rgba', 'rgb(247,141,48)');
                  update_option('wpucs_contact_info_border_color', '#f78d30');
                  update_option('wpucs_contact_info_border_color_rgba', 'rgba(247,141,48,0.1)');
                  
            } elseif ($activatedTemplateId == 4 || $activatedTemplateId == 6 || $activatedTemplateId == 20  ) {
                  update_option('wpucs_contact_info_color', '#053643');
                  update_option('wpucs_contact_info_fontawesome_color', '#053643');
                  update_option('wpucs_contact_info_color_rgba', 'rgba(5, 54, 67,0.8)');
                  update_option('wpucs_contact_info_fontawesome_color_rgba', 'rgba(5, 54, 67,0.8)');
                  update_option('wpucs_contact_info_border_color', '#053643');
                  update_option('wpucs_contact_info_border_color_rgba', 'rgba(5, 54, 67,0.1)');
            } elseif ($activatedTemplateId == 14 ) {
                  update_option('wpucs_contact_info_color', '#606060');
                  update_option('wpucs_contact_info_fontawesome_color', '#606060');
                  update_option('wpucs_contact_info_color_rgba', 'rgba(96, 96, 96, 1)');
                  update_option('wpucs_contact_info_fontawesome_color_rgba', 'rgba(96, 96, 96, 1)');
                  update_option('wpucs_contact_info_border_color', '#1E3618');
                  update_option('wpucs_contact_info_border_color_rgba', 'rgba(30, 54, 24, 0.1)');
                  
            }  elseif ($activatedTemplateId == 17 ) {
                  update_option('wpucs_contact_info_border_color_rgba', 'rgba(255,255,255,1)');

                  
            }elseif ($activatedTemplateId == 18 ) {
                  update_option('wpucs_contact_info_fontawesome_color', '#3489fd'); 
                  update_option('wpucs_contact_info_fontawesome_color_rgba', 'rgb(52,138,253)');
                  update_option('wpucs_contact_info_border_color', '#3489fd');
                  update_option('wpucs_contact_info_border_color_rgba', 'rgba(52,138,253,0.1)');
                  
            } elseif ($activatedTemplateId == 19 ) {
                  update_option('wpucs_contact_info_fontawesome_color', '#EF4222');
                  update_option('wpucs_contact_info_fontawesome_color_rgba', 'rgb(239, 64, 34)');
                  
            } elseif ($activatedTemplateId == 20 ) {
                  update_option('wpucs_contact_info_color', '#090404');
                  update_option('wpucs_contact_info_fontawesome_color', '#090404');
                  update_option('wpucs_contact_info_color_rgba', 'rgba(9, 4, 4,0.6)');
                  update_option('wpucs_contact_info_fontawesome_color_rgba', 'rgba(9, 4, 4,0.6)');
                  update_option('wpucs_contact_info_border_color', '#090404');
                  update_option('wpucs_contact_info_border_color_rgba', 'rgba(9, 4, 4,0.6)');
            }elseif ($activatedTemplateId == 21 ) {
                  update_option('wpucs_cf_address', '123 Vine Street,  Los Angeles, California 90028');
                  update_option('wpucs_cf_contact_no', '(999) 999-9999');
                  update_option('wpucs_cf_email_address', 'info@esy-uk.com');
            }elseif ($activatedTemplateId == 23 ) {
                  //contact
                  update_option('wpucs_contact_info_color', '#000');
                  update_option('wpucs_contact_info_fontawesome_color', '#000');
                  update_option('wpucs_contact_info_color_rgba', 'rgba(0,0,0)');
                  update_option('wpucs_contact_info_fontawesome_color_rgba', 'rgba(0,0,0,0.6)');
                  update_option('wpucs_contact_info_border_color', '#000');
                  update_option('wpucs_contact_info_border_color_rgba', 'rgba(0,0,0,0.6)');
            } elseif ($activatedTemplateId == 24 ) {
                  update_option('wpucs_contact_info_color', '#000');
                  update_option('wpucs_contact_info_fontawesome_color', '#000');
                  update_option('wpucs_contact_info_color_rgba', 'rgba(0,0,0,0.6)');
                  update_option('wpucs_contact_info_fontawesome_color_rgba', 'rgba(0,0,0,0.6)');
                  update_option('wpucs_contact_info_border_color', '#000');
                  update_option('wpucs_contact_info_border_color_rgba', 'rgba(0,0,0,0.1)');
            }else{
            }
      }
      // Function to reset options for the 'CountDown Timer' tab
      function wpucs_reset_countdown_timer_tab_pro()
      {
            $wpucs_countdown_timer_reset_nonce = wp_create_nonce('wpucs_countdown_timer_reset_nonce');
            $activatedTemplateId = get_option('activated_template_id');
            ?>
            <input type="hidden" name="wpucs_countdown_timer_reset_nonce_field" value="<?php echo esc_attr($wpucs_countdown_timer_reset_nonce); ?>">
            <?php
                  // Update the options for the 'countdown_timer' tab here
                  update_option('wpucs_countdown_timer_status', 'on');
                  update_option('wpucs_countdown_date', '2026-02-28T12:00');
                  update_option('wpucs_countdown_days_text', 'Days');
                  update_option('wpucs_countdown_hours_text', 'Hours');
                  update_option('wpucs_countdown_minutes_text', 'Minutes');
                  update_option('wpucs_countdown_seconds_text', 'Seconds');
                  update_option('wpucs_countdown_days_timervalue_color', '#fff');
                  update_option('wpucs_countdown_days_timerlevel_color', '#fff');
                  update_option('wpucs_countdown_hours_timervalue_color', '#fff');
                  update_option('wpucs_countdown_hours_timerlevel_color', '#fff');
                  update_option('wpucs_countdown_minutes_timervalue_color', '#fff');
                  update_option('wpucs_countdown_minutes_timerlevel_color', '#fff');  
                  update_option('wpucs_countdown_seconds_timervalue_color', '#fff');
                  update_option('wpucs_countdown_seconds_timerlevel_color', '#fff');
                  update_option('wpucs_countdown_days_timervalue_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_countdown_hours_timervalue_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_countdown_minutes_timervalue_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_countdown_seconds_timervalue_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgb(255, 255, 255) ');
                  update_option('wpucs_countdown_timerlevel_fontsize', '15');
                  update_option('wpucs_countdown_timervalue_fontsize', '50');
                  update_option('wpucs_inner_box_height', '120');
                  update_option('wpucs_inner_box_width', '120');
                  update_option('wpucs_inner_box_border_radius', '20');
                  update_option('wpucs_countdown_days_innerbox_color', '#EF4222');
                  update_option('wpucs_countdown_hours_innerbox_color', '#F58C31');  
                  update_option('wpucs_countdown_minutes_innerbox_color', '#2DB456');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#2966D1');
                  update_option('wpucs_countdown_days_innerbox_color_rgba', 'rgb(239, 66, 34)');
                  update_option('wpucs_countdown_hours_innerbox_color_rgba', 'rgb(245, 140, 49)');
                  update_option('wpucs_countdown_minutes_innerbox_color_rgba', 'rgb(45, 180, 86)');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgb(41, 102, 209) ');
            // Update the options for the 'countdown_timer ' tab here in individual activatedTemplateId
            if ($activatedTemplateId == 0) {
                  
                  update_option('wpucs_inner_box_border_radius', '5');
                            
            }elseif ($activatedTemplateId == 1 ) {
                   
                  update_option('wpucs_countdown_seconds_innerbox_color', '#859F56');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgb(133, 159, 86) ');
                  update_option('wpucs_inner_box_border_radius', '50');

            }elseif ( $activatedTemplateId == 12) {
                   
                  update_option('wpucs_countdown_seconds_innerbox_color', '#859F56');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgb(133, 159, 86) ');

            }elseif ($activatedTemplateId == 2  ) {
                  
                  update_option('wpucs_countdown_timerlevel_fontsize', '24');
                  update_option('wpucs_inner_box_border_radius', '10');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.62)');                
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.62)');                
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.62)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.62) ');
                  update_option('wpucs_countdown_days_innerbox_color', '#fff');
                  update_option('wpucs_countdown_hours_innerbox_color', '#fff');  
                  update_option('wpucs_countdown_minutes_innerbox_color', '#fff');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#fff');
                  update_option('wpucs_countdown_days_innerbox_color_rgba', 'rgba(255, 255, 255, 0.05)');
                  update_option('wpucs_countdown_hours_innerbox_color_rgba', 'rgba(255, 255, 255, 0.05)');
                  update_option('wpucs_countdown_minutes_innerbox_color_rgba', 'rgba(255, 255, 255, 0.05)');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgba(255, 255, 255, 0.05) ');

            } elseif ($activatedTemplateId == 4) {
                  update_option('wpucs_inner_box_border_radius', '50');
                  update_option('wpucs_countdown_days_timerlevel_color', '#1e3618');
                  update_option('wpucs_countdown_hours_timerlevel_color', '#1e3618');
                  update_option('wpucs_countdown_minutes_timerlevel_color', '#1e3618');  
                  update_option('wpucs_countdown_seconds_timerlevel_color', '#1e3618');      
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(30,54,24,0.6)');
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(30,54,24,0.6)');
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(30,54,24,0.6)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(30,54,24,0.6) ');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#859F56');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgb(133, 159, 86)'); 
                  
            }elseif ($activatedTemplateId == 5 ) { 
                    
                  update_option('wpucs_countdown_timervalue_fontsize', '54');
                  update_option('wpucs_inner_box_height', '100');
                  update_option('wpucs_inner_box_width', '100'); 
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)'); 
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)'); 
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)');
                  update_option('wpucs_countdown_days_innerbox_color', '#8E774B');
                  update_option('wpucs_countdown_hours_innerbox_color', '#357575');  
                  update_option('wpucs_countdown_minutes_innerbox_color', '#53613A');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#65881C');
                  update_option('wpucs_countdown_days_innerbox_color_rgba', 'rgb(142, 119, 75)');
                  update_option('wpucs_countdown_hours_innerbox_color_rgba', 'rgb(53, 117, 117)');
                  update_option('wpucs_countdown_minutes_innerbox_color_rgba', 'rgb(83, 97, 58) ');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgba(101, 136, 28,0.8) ');

            }elseif ($activatedTemplateId == 6 ) {
                  
                  
                  update_option('wpucs_countdown_days_timerlevel_color', '#053643');
                  update_option('wpucs_countdown_hours_timerlevel_color', '#053643'); 
                  update_option('wpucs_countdown_minutes_timerlevel_color', '#053643');  
                  update_option('wpucs_countdown_seconds_timerlevel_color', '#053643');
                  update_option('wpucs_countdown_timervalue_fontsize', '54');
                  update_option('wpucs_inner_box_height', '100');
                  update_option('wpucs_inner_box_width', '100');
                  update_option('wpucs_inner_box_border_radius', '10');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(5, 54, 67, 0.6)');
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(5, 54, 67, 0.6)');
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(5, 54, 67, 0.6)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(5, 54, 67, 0.6)');
                  update_option('wpucs_countdown_days_innerbox_color', '#866d70');
                  update_option('wpucs_countdown_hours_innerbox_color', '#3C4F6D');  
                  update_option('wpucs_countdown_minutes_innerbox_color', '#475234');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#4D78B2');
                  update_option('wpucs_countdown_days_innerbox_color_rgba', 'rgb(134, 109, 112)');
                  update_option('wpucs_countdown_hours_innerbox_color_rgba', 'rgb(60, 79, 109)');
                  update_option('wpucs_countdown_minutes_innerbox_color_rgba', 'rgb(71, 82, 52) ');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgb(77, 120, 178) ');
                  
            }elseif ($activatedTemplateId == 7 ) { 

                  update_option('wpucs_countdown_timerlevel_fontsize', '24');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.6)');
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.6)');
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.6)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.6)');

            }elseif ($activatedTemplateId == 8) { 
                  
                  update_option('wpucs_countdown_hours_timervalue_color', '#F64343');
                  update_option('wpucs_countdown_minutes_timervalue_color', '#04FFC3');
                  update_option('wpucs_countdown_seconds_timervalue_color', '#F5BF57');
                  update_option('wpucs_countdown_timervalue_fontsize', '80');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');
                  update_option('wpucs_countdown_hours_timervalue_color_rgba', 'rgb(246, 67, 67)');
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');
                  update_option('wpucs_countdown_minutes_timervalue_color_rgba', 'rgb(4, 255, 195)');
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');
                  update_option('wpucs_countdown_seconds_timervalue_color_rgba', 'rgb(245, 191, 87)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');

            }elseif ($activatedTemplateId == 9){
                  
                  update_option('wpucs_countdown_days_timervalue_color', '#ef4222');
                  update_option('wpucs_countdown_days_text', 'Days to Launch');
                  update_option('wpucs_countdown_timerlevel_fontsize', '30');
                  update_option('wpucs_countdown_timervalue_fontsize', '30');
                  update_option('wpucs_countdown_days_timervalue_color_rgba', 'rgb(239, 66, 34)');
                  update_option('wpucs_countdown_days_innerbox_color', '#fff');
                  update_option('wpucs_countdown_days_innerbox_color_rgba', 'rgb(255, 255, 255)');

            }elseif ($activatedTemplateId == 10){

                  update_option('wpucs_countdown_timervalue_fontsize', '80');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');     
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');         
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');    
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');
                  update_option('wpucs_countdown_text', 'Upcoming Dates');
                  update_option('wpucs_countdown_text_color', '#fff');
                  update_option('wpucs_countdown_text_font_size', '55');
                  update_option('wpucs_countdown_text_color_rgba', 'rgba(255, 255, 255, 0.2)');

            }elseif ( $activatedTemplateId == 12) { 
                  update_option('wpucs_countdown_days_innerbox_color', '#4440F8');
                  update_option('wpucs_countdown_hours_innerbox_color', '#7A84FE');  
                  update_option('wpucs_countdown_minutes_innerbox_color', '#15AFF7');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#00A59B');
                  update_option('wpucs_countdown_days_innerbox_color_rgba', 'rgba(68, 64, 248, 1)');
                  update_option('wpucs_countdown_hours_innerbox_color_rgba', 'rgba(122, 132, 254, 1)');
                  update_option('wpucs_countdown_minutes_innerbox_color_rgba', 'rgba(21, 175, 247, 1)');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgba(0, 165, 155, 1) ');
                  
                  update_option('wpucs_inner_box_border_radius', '50');

            }elseif ( $activatedTemplateId == 13) { 
                  update_option('wpucs_countdown_timerlevel_fontsize', '24');
                  update_option('wpucs_inner_box_border_radius', '50');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.62)');                
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.62)');                
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.62)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.62) ');
                  update_option('wpucs_countdown_days_innerbox_color', '#fff');
                  update_option('wpucs_countdown_hours_innerbox_color', '#fff');  
                  update_option('wpucs_countdown_minutes_innerbox_color', '#fff');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#fff');
                  update_option('wpucs_countdown_days_innerbox_color_rgba', 'rgba(255, 255, 255, 0.1)');
                  update_option('wpucs_countdown_hours_innerbox_color_rgba', 'rgba(255, 255, 255, 0.1)');
                  update_option('wpucs_countdown_minutes_innerbox_color_rgba', 'rgba(255, 255, 255, 0.1)');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgba(255, 255, 255, 0.1) ');

            }elseif ( $activatedTemplateId == 14) { 
                  update_option('wpucs_inner_box_border_radius', '50');
                  update_option('wpucs_countdown_days_innerbox_color', '#4E78EE');
                  update_option('wpucs_countdown_hours_innerbox_color', '#F58C31');  
                  update_option('wpucs_countdown_minutes_innerbox_color', '#9C2A2A');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#DB4326');
                  update_option('wpucs_countdown_days_innerbox_color_rgba', 'rgba(78, 120, 238, 1)');
                  update_option('wpucs_countdown_hours_innerbox_color_rgba', 'rgba(245, 140, 49, 1)');
                  update_option('wpucs_countdown_minutes_innerbox_color_rgba', 'rgba(156, 42, 42, 1)');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgba(219, 67, 38, 1) ');
                  update_option('wpucs_countdown_days_timerlevel_color', '#1e3618');
                  update_option('wpucs_countdown_hours_timerlevel_color', '#1e3618');
                  update_option('wpucs_countdown_minutes_timerlevel_color', '#1e3618');  
                  update_option('wpucs_countdown_seconds_timerlevel_color', '#1e3618');      
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(30,54,24,0.6)');
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(30,54,24,0.6)');
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(30,54,24,0.6)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(30,54,24,0.6) ');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#859F56');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgb(133, 159, 86)'); 

            }elseif ( $activatedTemplateId == 15) { 
                  update_option('wpucs_countdown_timervalue_fontsize', '54');
                  update_option('wpucs_inner_box_height', '100');
                  update_option('wpucs_inner_box_width', '100'); 
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)'); 
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)'); 
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)');

                  update_option('wpucs_countdown_days_innerbox_color', '#9C312A');
                  update_option('wpucs_countdown_hours_innerbox_color', '#8F5426');  
                  update_option('wpucs_countdown_minutes_innerbox_color', '#A8774F');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#7A3D0C');
                  update_option('wpucs_countdown_days_innerbox_color_rgba', 'rgba(156, 49, 42, 1)');
                  update_option('wpucs_countdown_hours_innerbox_color_rgba', 'rgba(143, 84, 38, 1)');
                  update_option('wpucs_countdown_minutes_innerbox_color_rgba', 'rgba(168, 119, 79, 1) ');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgba(122, 61, 12, 1) ');

                  update_option('wpucs_inner_box_border_radius', '10');

            }elseif ($activatedTemplateId == 16){

                  update_option('wpucs_countdown_timervalue_fontsize', '54');
                  update_option('wpucs_inner_box_height', '100');
                  update_option('wpucs_inner_box_width', '100');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)'); 
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)'); 
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)');
                  update_option('wpucs_countdown_days_innerbox_color', '#9C312A');
                  update_option('wpucs_countdown_hours_innerbox_color', '#8F5426');  
                  update_option('wpucs_countdown_minutes_innerbox_color', '#A8774F');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#7A3D0C');
                  update_option('wpucs_countdown_days_innerbox_color_rgba', 'rgba(156, 49, 42, 1)');
                  update_option('wpucs_countdown_hours_innerbox_color_rgba', 'rgba(143, 84, 38, 1)');
                  update_option('wpucs_countdown_minutes_innerbox_color_rgba', 'rgba(168, 119, 79, 1) ');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgba(122, 61, 12, 1) ');
                  update_option('wpucs_inner_box_border_radius', '10');

            }elseif ($activatedTemplateId == 17){

                  update_option('wpucs_countdown_timervalue_fontsize', '54');
                  update_option('wpucs_inner_box_height', '120');
                  update_option('wpucs_inner_box_width', '120');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)'); 
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)'); 
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(255, 255, 255,0.8)');
                  update_option('wpucs_countdown_days_innerbox_color', '#206a7c');
                  update_option('wpucs_countdown_hours_innerbox_color', '#3c4f6b');  
                  update_option('wpucs_countdown_minutes_innerbox_color', '#2a534f');
                  update_option('wpucs_countdown_seconds_innerbox_color', '#255b96');
                  update_option('wpucs_countdown_days_innerbox_color_rgba', 'rgba(23, 84, 98, 1)');
                  update_option('wpucs_countdown_hours_innerbox_color_rgba', 'rgba(60, 79, 80, 1)');
                  update_option('wpucs_countdown_minutes_innerbox_color_rgba', 'rgba(42, 83, 80, 1) ');
                  update_option('wpucs_countdown_seconds_innerbox_color_rgba', 'rgba(42,95,155, 1) ');
                  update_option('wpucs_inner_box_border_radius', '10');

            }elseif ($activatedTemplateId == 19){

                  update_option('wpucs_countdown_hours_timervalue_color', '#F64343'); 
                  update_option('wpucs_countdown_minutes_timervalue_color', '#04FFC3');
                  update_option('wpucs_countdown_seconds_timervalue_color', '#F5BF57');
                  update_option('wpucs_countdown_timerlevel_fontsize', '16');
                  update_option('wpucs_countdown_timervalue_fontsize', '80');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');
                  update_option('wpucs_countdown_hours_timervalue_color_rgba', 'rgb(246, 67, 67)');
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');
                  update_option('wpucs_countdown_minutes_timervalue_color_rgba', 'rgb(4, 255, 195)');
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');
                  update_option('wpucs_countdown_seconds_timervalue_color_rgba', 'rgb(245, 191, 87)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(255, 255, 255, 0.8)');
                  
            }elseif ($activatedTemplateId == 23){
                  update_option('wpucs_countdown_days_timervalue_color', '#0B0C1E');
                  update_option('wpucs_countdown_days_timerlevel_color', '#0B0C1E');
                  update_option('wpucs_countdown_hours_timervalue_color', '#000');
                  update_option('wpucs_countdown_hours_timerlevel_color', '#000');
                  update_option('wpucs_countdown_minutes_timervalue_color', '#000');
                  update_option('wpucs_countdown_minutes_timerlevel_color', '#000');  
                  update_option('wpucs_countdown_seconds_timervalue_color', '#000');
                  update_option('wpucs_countdown_seconds_timerlevel_color', '#000');
                  update_option('wpucs_countdown_days_timervalue_color_rgba', 'rgb(11,12,30)');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgb(11,12,30)');       
                  update_option('wpucs_countdown_timervalue_fontsize', '60');   
                  update_option('wpucs_countdown_hours_timervalue_color_rgba', 'rgb(0,0,0)');
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgb(0,0,0)');
                  update_option('wpucs_countdown_minutes_timervalue_color_rgba', 'rgb(0,0,0)');
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgba(0,0,0, 0.7)');
                  update_option('wpucs_countdown_seconds_timervalue_color_rgba', 'rgb(0,0,0)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgba(0,0,0, 0.7)');
                  update_option('wpucs_countdown_dayvalue_font_size', '90');
                  
            }elseif ($activatedTemplateId == 24){
                 
                  update_option('wpucs_countdown_days_timervalue_color', '#4F74F7');
                  update_option('wpucs_countdown_days_timerlevel_color', '#000');
                  update_option('wpucs_countdown_hours_timervalue_color', '#F64343');
                  update_option('wpucs_countdown_hours_timerlevel_color', '#000');
                  update_option('wpucs_countdown_minutes_timervalue_color', '#04FFC3');
                  update_option('wpucs_countdown_minutes_timerlevel_color', '#000');  
                  update_option('wpucs_countdown_seconds_timervalue_color', '#13ADC5');
                  update_option('wpucs_countdown_seconds_timerlevel_color', '#000');
                  update_option('wpucs_countdown_timerlevel_fontsize', '16');
                  update_option('wpucs_countdown_timervalue_fontsize', '80');
                  update_option('wpucs_countdown_days_timervalue_color_rgba', 'rgb(79, 116, 247)');
                  update_option('wpucs_countdown_days_timerlevel_color_rgba', 'rgb(0,0,0)');
                  update_option('wpucs_countdown_hours_timervalue_color_rgba', 'rgb(246, 67, 67)');
                  update_option('wpucs_countdown_hours_timerlevel_color_rgba', 'rgb(0,0,0)');
                  update_option('wpucs_countdown_minutes_timervalue_color_rgba', 'rgb(4, 255, 195)');
                  update_option('wpucs_countdown_minutes_timerlevel_color_rgba', 'rgb(0,0,0)');
                  update_option('wpucs_countdown_seconds_timervalue_color_rgba', 'rgb(19, 173, 197)');
                  update_option('wpucs_countdown_seconds_timerlevel_color_rgba', 'rgb(0,0,0)');       

            }else{
            }             
      }
      // Function to reset options for the 'Newsletter' tab
      function wpucs_reset_newsletter_tab_pro()
      {
            $wpucs_newsletter_nonce = wp_create_nonce('wpucs_newsletter_nonce');
            $activatedTemplateId = get_option('activated_template_id');
            ?>
            <input type="hidden" name="wpucs_newsletter_nonce_field" value="<?php echo esc_attr($wpucs_newsletter_nonce); ?>">
            <?php
                  // Update the options for the 'countdown_timer' tab here
                  update_option('wpucs_notify', 'Notify Me');
                  update_option('wpucs_subscribe', 'Subscribe');
                  update_option('wpucs_newsletter_status', 'on');
                  update_option('wpucs_client_name', '0');
                  update_option('wpucs_client_mobile', '0');
                  update_option('wpucs_client_message', '0');
                  update_option('wpucs_client_email', '1');
                  update_option('wpucs_subscription_text', 'We will let you know when we are Launching');
                  update_option('wpucs_subscription_text_color', '#FFFFFF');
                  update_option('wpucs_subscription_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_text_height', '20');
                  update_option('wpucs_subscription_button_text_color', '#fff');
                  update_option('wpucs_subscription_button_background_color', '#EF4222');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_color', '#FFC75C');  
                  update_option('wpucs_subscription_button_text_hover_color', '#FFC75C');
                  update_option('wpucs_subscription_button_background_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(255, 199, 92)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(255, 199, 92)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgb(255, 255, 255) ');

                  update_option('wpucs_subscription_button_border_style', '');
                  update_option('wpucs_subscription_button_border_color', '');
                  update_option('wpucs_subscription_button_border_color_rgba', '');
                  update_option('wpucs_subscription_button_border_hover_color_rgba', '');
                  update_option('wpucs_subscription_button_border_hover_color', '');
                  update_option('wpucs_subscription_button_border_size', '');
                  update_option('wpucs_subscription_button_border_radius', '');

                  update_option('wpucs_form_field_text_color', '');
                  update_option('wpucs_form_field_text_color_rgba', '');
                  update_option('wpucs_form_field_background_color', '');
                  update_option('wpucs_form_field_background_color_rgba', '');
                  update_option('wpucs_form_field_placeholder_color', '');
                  update_option('wpucs_form_field_placeholder_color_rgba', '');
                  update_option('wpucs_form_field_border_color', '');
                  update_option('wpucs_form_field_border_color_rgba', '');

                  update_option('wpucs_form_field_border_style', '');
                  update_option('wpucs_form_field_border_width', '');
                  update_option('wpucs_form_field_border_radius', '');

            if ($activatedTemplateId == 1 ) {
                  
                  update_option('wpucs_subscription_button_text_color', '#FFC75C');
                  update_option('wpucs_subscription_button_background_color', '#fff');  
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 199, 92)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgba(255, 255, 255, 0.07)');
                  update_option('wpucs_subscription_button_background_hover_color', '#859f56');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgb(133, 159, 86) ');
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(255, 255, 255)');
                  
            }elseif ($activatedTemplateId == 4) {
                  update_option('wpucs_subscription_button_background_color', '#F58C31');
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#F58C31');        
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(245, 140, 49)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(255, 255, 255, .9)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(245, 140, 49,0.58) '); 
                  update_option('wpucs_subscription_text_color', '#1E3618');
                  update_option('wpucs_subscription_text_color_rgba', 'rgba(30, 54, 24,0.8)');

            }elseif ($activatedTemplateId == 6 ) {    

                  update_option('wpucs_subscription_button_background_color', '#F5BF57');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#F5BF57');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(245, 191, 87)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(255, 255, 255, .8)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(245, 191, 87, .8) ');

            }elseif ($activatedTemplateId == 7 ) {
                  update_option('wpucs_subscription_button_background_color', '#EF4222');  
                  update_option('wpucs_subscription_button_text_hover_color', '#EF4222');
                  update_option('wpucs_subscription_button_background_hover_color', '#fff');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(239, 66 ,34)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(239, 66 ,34)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgb(255, 255, 255) ');
                  update_option('wpucs_client_name', '1');
                  update_option('wpucs_client_mobile', '1');
                  
            }elseif ($activatedTemplateId == 8) {
                  update_option('wpucs_subscription_button_background_color', '#EF4222');  
                  update_option('wpucs_subscription_button_text_hover_color', '#EF4222');
                  update_option('wpucs_subscription_button_background_hover_color', '#fff');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(239, 66 ,34)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(239, 66 ,34)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgb(255, 255, 255) ');
                  update_option('wpucs_client_name', '1');
                  update_option('wpucs_client_mobile', '1');
                  update_option('wpucs_client_message', '1');
                  update_option('wpucs_subscription_text', 'Get in Touch');
                  update_option('wpucs_subscription_text_height', '36');
                  
            }elseif ($activatedTemplateId == 9 ) {

                  //social main color
                  update_option('wpucs_social_icon_color', '#FFFFFF');
                  update_option('wpucs_social_icon_color_rgba', 'rgba(255, 255, 255,0.8)');
                  update_option('wpucs_social_icon_box_color', '#FFFFFF');
                  update_option('wpucs_social_icon_box_color_rgba', 'rgba(255, 255, 255, 0)');
                  update_option('wpucs_social_icon_boxborder_color', '#FFFFFF');  
                  update_option('wpucs_social_icon_boxborder_color_rgba', 'rgba(255, 255, 255,0.2)');
                  //social hover color
                  update_option('wpucs_social_icon_hover_color', '#fff');
                  update_option('wpucs_social_icon_hover_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_social_icon_hover_box_color', '#EF4222');
                  update_option('wpucs_social_icon_hover_box_color_rgba', 'rgb(239, 66 ,34)');
                  update_option('wpucs_social_icon_hover_boxborder_color', '#EF4222 ');
                  update_option('wpucs_social_icon_hover_boxborder_color_rgba', 'rgb(239, 66 ,34) ');

            } elseif ( $activatedTemplateId == 10) {

                  update_option('wpucs_subscription_button_background_color', '#EF4222');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#EF4222');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(239, 66 ,34)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(239, 66 ,34,0.8) ');

            }elseif ($activatedTemplateId == 11 ) {    

                  update_option('wpucs_subscription_button_background_color', '#EF4222');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#EF4222');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(239, 66 ,34)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(255,255,255)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(239, 66 ,34,0.8) ');

            }elseif ($activatedTemplateId == 12) {    

                  update_option('wpucs_subscription_button_text_color', '#31E6FF');
                  update_option('wpucs_subscription_button_background_color', '#31E6FF');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#31E6FF');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgba(49, 230, 255, 1)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgba(49, 230, 255, 0.07)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(49, 230, 255, 1) ');

            } elseif($activatedTemplateId == 13){
                  update_option('wpucs_form_field_border_style', 'solid');
            }
            elseif ($activatedTemplateId == 14) {    

                  update_option('wpucs_subscription_button_background_color', '#F58C31');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#df7111');        
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(245, 140, 49)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(255, 255, 255, .9)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(223, 113, 17,1) '); 
                  update_option('wpucs_subscription_text_color', '#2B2822');
                  update_option('wpucs_subscription_text_color_rgba', 'rgba(43, 40, 34, 0.8)');

            }elseif ($activatedTemplateId == 15) {    

                  update_option('wpucs_subscription_button_text_color', '#fff');
                  update_option('wpucs_subscription_button_background_color', '#BF0D1E');  
                  update_option('wpucs_subscription_button_text_hover_color', '#BF0D1E');
                  update_option('wpucs_subscription_button_background_hover_color', '#fff');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(191, 13, 30)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(191, 13, 30)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgb(255, 255, 255) ');

            }elseif ($activatedTemplateId == 16) {    

                  update_option('wpucs_subscription_button_text_color', '#fff');
                  update_option('wpucs_subscription_button_background_color', '#f38c2f');  
                  update_option('wpucs_subscription_button_text_hover_color', '#f38c2f');
                  update_option('wpucs_subscription_button_background_hover_color', '#fff');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(243,140,47)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(243,140,47)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgb(255, 255, 255) ');

            }elseif ($activatedTemplateId == 17) {    

                  update_option('wpucs_subscription_button_text_color', '#206a7c');
                  update_option('wpucs_subscription_button_background_color', '#fff');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#206a7c');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(23,84,98)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(255,255,255)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(255,255,255)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgb(23,84,98) ');

            }elseif ($activatedTemplateId == 18) {    

                  update_option('wpucs_subscription_button_background_color', '#3489fd');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#3489fd');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(52,138,253)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(52,138,253,0.8) ');
                  update_option('wpucs_subscription_text', 'We respect your privacy and promise to never spam.');

            }elseif ($activatedTemplateId == 19) {
                  
                  update_option('wpucs_subscription_text', 'We are preparing something unique and exciting for you, Special surprise for our subscribers only!');
                  update_option('wpucs_subscription_text_color_rgba', 'rgba(255, 255, 255,0.8)');
                  update_option('wpucs_subscription_button_background_color', '#EF4222');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#EF4222');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(239, 66 ,34)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(239, 66 ,34,0.8) ');

            }elseif ($activatedTemplateId == 20) {
                  
                  update_option('wpucs_subscription_button_background_color', '#EF4222');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#EF4222');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(239, 66 ,34)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(239, 66 ,34,0.8) ');

            }elseif ($activatedTemplateId == 21) {
                  
                  update_option('wpucs_subscription_button_background_color', '#EF4222');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#EF4222');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(239, 66 ,34)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(239, 66 ,34,0.8) ');

            }elseif ($activatedTemplateId == 22) {
                  update_option('wpucs_subscription_button_text_color', '#fff');
                  update_option('wpucs_subscription_button_background_color', '#EF4222');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#EF4222');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(239, 66 ,34)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(239, 66 ,34,0.8) ');
                  update_option('wpucs_subscription_text', 'Join 39k other creatives');
                  update_option('wpucs_subscription_text_color_rgba', 'rgba(255, 255, 255,0.8)');
                  update_option('wpucs_subscription_text_height', '16');
                  
            }elseif ($activatedTemplateId == 23) {   
                  update_option('wpucs_subscription_button_text_color', '#fff');
                  update_option('wpucs_subscription_button_background_color', '#000');  
                  update_option('wpucs_subscription_button_text_hover_color', '#000');
                  update_option('wpucs_subscription_button_background_hover_color', '#fff');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgb(0,0,0)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(0,0,0)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgb(255,255,255) ');

            }elseif ($activatedTemplateId == 24) {   
                  update_option('wpucs_subscribe', 'Subscribe Now');
                  update_option('wpucs_subscription_button_text_color', '#fff');
                  update_option('wpucs_subscription_button_background_color', '#E2A839');  
                  update_option('wpucs_subscription_button_text_hover_color', '#fff');
                  update_option('wpucs_subscription_button_background_hover_color', '#E2A839');
                  update_option('wpucs_subscription_button_text_color_rgba', 'rgb(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_color_rgba', 'rgba(226,168,57,1)');
                  update_option('wpucs_subscription_button_text_hover_color_rgba', 'rgba(255, 255, 255)');
                  update_option('wpucs_subscription_button_background_hover_color_rgba', 'rgba(226,168,57,.8) ');

            }else{

            }
      }     
      // Function to reset options for the 'Translation' tab
      function wpucs_reset_translation_tab_pro()
      {
            $wpucs_translation_nonce = wp_create_nonce('wpucs_translation_nonce');
            $activatedTemplateId = get_option('activated_template_id');
            ?>
            <input type="hidden" name="wpucs_translation_nonce_field" value="<?php echo esc_attr($wpucs_translation_nonce); ?>">
            <?php
                  // Update the options for the 'countdown_timer' tab here
                  update_option('wpucs_countdown_days_text', 'Days');
                  update_option('wpucs_countdown_hours_text', 'Hours');
                  update_option('wpucs_countdown_minutes_text', 'Minutes');
                  update_option('wpucs_countdown_seconds_text', 'Seconds');
                  update_option('wpucs_email_address_insert', 'Email Address');
                  update_option('wpucs_your_message', 'Your Message');
                  update_option('wpucs_phone_number', 'Phone Number');
                  update_option('wpucs_full_name', 'Full Name');
                  update_option('wpucs_email_address_list', 'Oops! This email address is already on our list.');
                  update_option('wpucs_email_address_valid', 'Oops! We need a valid email address. Please try again.');
                  update_option('wpucs_email_address_successful', 'Thank you! Your sign up request was successful.');
                  update_option('wpucs_notify', 'Notify Me');
                  update_option('wpucs_subscribe', 'Subscribe');
                  update_option('wpucs_terms', 'You must agree with our Terms and Conditions');
                  update_option('wpucs_email_empty', 'Oops! Email is empty.'); 

            if ($activatedTemplateId == 24 ) {
                  update_option('wpucs_subscribe', 'Subscribe Now');
                  
                  
            }   else{

            }
      }