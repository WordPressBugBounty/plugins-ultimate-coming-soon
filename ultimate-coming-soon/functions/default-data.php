<?php if (! defined('ABSPATH')) exit;

function ucs_set_default_data_based_on_template($activatedTemplateId, $root_url)
{
  // Update options based on the active template ID
  //Dashboard
  update_option('ucsm_mode', 'coming_soon');
  update_option('ucsm_page_setup', 'whole-website');

  update_option('wpucs_logo_setup', 'graphic');
  update_option('wpucs_main_heading', 'We Are Coming');
  update_option('wpucs_sub_heading', 'Soon ! ');
  update_option('wpucs_main_description', 'We will let you know when we are Launching');
  //SEO
  $site_title = get_bloginfo('name');
  $site_icon_url = get_site_icon_url();
  $site_favicon_url = get_site_icon_url();
  $site_seo_url = get_site_icon_url();
  update_option('wpucs_website_text_logo', $site_title);

  // Website Logo
  if ($site_icon_url) {
    update_option('wpucs_website_logo', $site_icon_url);
  } else {
    // If no site icon is set, you can set a default or handle accordingly
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo5.png');
  }

  // Website FAVICON
  if ($site_favicon_url) {
    update_option('wpucs_favicon', $site_favicon_url);
  } else {
    // If no site icon is set, you can set a default or handle accordingly
    update_option('wpucs_favicon', $root_url . 'assets/img/icon/favicon.png');
  }

  // Website SEO Image
  if ($site_seo_url) {
    update_option('wpucs_seo_img', $site_seo_url);
  } else {
    // If no site icon is set, you can set a default or handle accordingly
    update_option('wpucs_seo_img', $root_url . 'assets/img/icon/favicon.png');
  }
  //Design
  update_option('wpucs_background_image', $root_url . 'assets/img/background/background-0.jpg');
  update_option('wpucs_background_color', 'rgb(52, 120, 123)');
  update_option('wpucs_main_heading_color', 'rgb(255, 255, 255)');
  update_option('wpucs_main_description_color', 'rgb(255, 255, 255)');
  update_option('wpucs_main_heading_font_size', 60);
  update_option('wpucs_sub_heading_font_size', 60);
  update_option('wpucs_main_description_font_size', 20);
  update_option('wpucs_sub_heading_color', 'rgb(255, 199, 92)');
  update_option('wpucs_background_overlay_color', 'rgb(255, 255, 255,0)');
  update_option('wpucs_box_container_size', '1000');
  update_option('wpucs_website_text_logo_height', 60);
  update_option('wpucs_website_text_logo_color', 'rgb(255, 255, 255)');
  update_option('wpucs_heading_line_height', '1.3');
  update_option('wpucs_sub_heading_line_height', '1.3');
  update_option('wpucs_main_description_line_height', '1.3');

  //Contact Info
  update_option('wpucs_contact_info_height', '16');
  update_option('wpucs_contact_info_color', 'rgb(255,255,255)');
  update_option('wpucs_contact_info_fontawesome_color', 'rgb(255,255,255)');
  update_option('wpucs_contact_info_border_color', 'rgba(255,255,255,0.1)');
  //countdown
  update_option('wpucs_countdown_timer_status', 'on');
  // update_option('wpucs_countdown_date', '2026-02-28T12:00');
  update_option('wpucs_countdown_message_status', 'on');
  update_option('wpucs_countdown_finishing_text', 'Stay tuned for updates!');
  update_option('wpucs_countdown_days_text', 'Days');
  update_option('wpucs_countdown_hours_text', 'Hours');
  update_option('wpucs_countdown_minutes_text', 'Minutes');
  update_option('wpucs_countdown_seconds_text', 'Seconds');
  update_option('wpucs_countdown_days_timervalue_color', 'rgb(255, 255, 255)');
  update_option('wpucs_countdown_days_timerlevel_color', 'rgb(255, 255, 255)');
  update_option('wpucs_countdown_hours_timervalue_color', 'rgb(255, 255, 255)');
  update_option('wpucs_countdown_hours_timerlevel_color', 'rgb(255, 255, 255)');
  update_option('wpucs_countdown_minutes_timervalue_color', 'rgb(255, 255, 255)');
  update_option('wpucs_countdown_minutes_timerlevel_color', 'rgb(255, 255, 255)');
  update_option('wpucs_countdown_seconds_timervalue_color', 'rgb(255, 255, 255)');
  update_option('wpucs_countdown_seconds_timerlevel_color', 'rgb(255, 255, 255) ');
  update_option('wpucs_countdown_message_color', 'rgb(255, 255, 255) ');
  update_option('wpucs_countdown_timerlevel_fontsize', '15');
  update_option('wpucs_countdown_timervalue_fontsize', '50');
  update_option('wpucs_countdown_message_fontsize', '20');
  update_option('wpucs_inner_box_height', '120');
  update_option('wpucs_inner_box_width', '120');
  update_option('wpucs_inner_box_border_radius', '10');
  update_option('wpucs_countdown_days_innerbox_color', 'rgb(239, 66, 34)');
  update_option('wpucs_countdown_hours_innerbox_color', 'rgb(245, 140, 49)');
  update_option('wpucs_countdown_minutes_innerbox_color', 'rgb(45, 180, 86)');
  update_option('wpucs_countdown_seconds_innerbox_color', 'rgb(41, 102, 209) ');
  //Nwesletter
  update_option('wpucs_notify', 'Notify Me');
  update_option('wpucs_subscribe', 'Subscribe');
  update_option('wpucs_newsletter_status', 'on');
  update_option('wpucs_client_name', '0');
  update_option('wpucs_client_mobile', '0');
  update_option('wpucs_client_message', '0');
  update_option('wpucs_client_email', '1');
  update_option('wpucs_subscription_text', 'We will let you know when we are Launching');
  update_option('wpucs_subscription_text_color', 'rgb(255, 255, 255)');
  update_option('wpucs_subscription_text_height', '20');
  update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
  update_option('wpucs_subscription_button_background_color', 'rgb(255, 199, 92)');
  update_option('wpucs_subscription_button_text_hover_color', 'rgba(255, 199, 92)');
  update_option('wpucs_subscription_button_background_hover_color', 'rgb(255, 255, 255) ');
  //Translation
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

  //social main color
  update_option('wpucs_social_icon_color', 'rgb(255, 255, 255)');
  update_option('wpucs_social_icon_box_color', 'rgba(37, 20, 129, 0)');
  update_option('wpucs_social_icon_boxborder_color', 'rgb(62, 46, 144)');
  //social hover color
  update_option('wpucs_social_icon_hover_color', 'rgb(239, 66 ,34)');
  update_option('wpucs_social_icon_hover_box_color', 'rgb(245, 191, 87)');
  update_option('wpucs_social_icon_hover_boxborder_color', 'rgb(245, 191, 87) ');
  update_option('wpucs_cbg_background_overlay_color', 'rgb(245, 191, 87) ');
  //social icon size
  update_option('wpucs_social_iconbox_height', '40');
  update_option('wpucs_social_iconbox_width', '40');
  update_option('wpucs_social_icon_font_size', '18');
  update_option('wpucs_social_icon_box_radius', '100');
  update_option('wpucs_social_icon_box_border_width', '2');
  update_option('ucsm_graphic_background_setup', 'default_media');
  update_option('ucsm_graphic_video_setup', 'media');
  update_option('wpucs_background_blur_amount', '0');

  if ($activatedTemplateId == 0) {
    // update_option('wpucs_enable_mode', '0');
    // update_option('ucsm_mode', 'coming_soon');
    // update_option('ucsm_page_setup', 'whole-website');
    update_option('wpucs_main_heading', 'We Are');
    update_option('wpucs_sub_heading', 'Coming Very Soon !');
    update_option('wpucs_inner_box_border_radius', '5');
    update_option('wpucs_box_container_size', '680');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-0.jpg');
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo2.png');
  } elseif ($activatedTemplateId == 1) {
    update_option('wpucs_main_heading', 'We Are Coming');
    update_option('wpucs_sub_heading', 'Very Soon ! ');
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo14.png');
    update_option('wpucs_box_container_size', '750');
    update_option('wpucs_main_description', 'All the lorem Ipsum generators on the Internet tend to repeat predefined necessary');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-1.jpg');

    //countdown
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgb(133, 159, 86) ');
    update_option('wpucs_inner_box_border_radius', '50');

    //newsletter
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 199, 92)');
    update_option('wpucs_subscription_button_background_color', 'rgba(255, 255, 255, 0.07)');


    update_option('wpucs_subscription_button_background_hover_color', 'rgb(133, 159, 86) ');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(255, 255, 255)');


    //social main color
    update_option('wpucs_social_icon_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_social_icon_box_color', 'rgba(255, 255, 255, 0)');
    update_option('wpucs_social_icon_boxborder_color', 'rgba(255, 255, 255,0.2)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(133, 159, 86)');
    update_option('wpucs_social_icon_hover_boxborder_color', 'rgb(133, 159, 86) ');
  } elseif ($activatedTemplateId == 2) {

    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo1.png');

    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-2.jpg');
    //countdown
    update_option('wpucs_countdown_timerlevel_fontsize', '24');
    update_option('wpucs_inner_box_border_radius', '10');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(255, 255, 255, 0.62)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(255, 255, 255, 0.62)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(255, 255, 255, 0.62)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(255, 255, 255, 0.62) ');
    update_option('wpucs_countdown_days_innerbox_color', 'rgba(255, 255, 255, 0.05)');
    update_option('wpucs_countdown_hours_innerbox_color', 'rgba(255, 255, 255, 0.05)');
    update_option('wpucs_countdown_minutes_innerbox_color', 'rgba(255, 255, 255, 0.05)');
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgba(255, 255, 255, 0.05) ');
  } elseif ($activatedTemplateId == 3) {

    update_option('wpucs_inner_box_border_radius', '50');
    update_option('wpucs_box_container_size', '750');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-0.jpg');
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo2.png');
  } elseif ($activatedTemplateId == 4) {
    update_option('wpucs_main_heading', 'We Are Coming');
    update_option('wpucs_sub_heading', 'Very Soon ! ');
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo4.png');
    update_option('wpucs_main_description', 'All the lorem Ipsum generators on the Internet tend to repeat predefined necessary');

    //design
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-4.jpg');
    update_option('wpucs_shape_overlay', $root_url . 'assets/img/background/shape-image.png');
    update_option('wpucs_main_heading_color', 'rgb(30, 54, 24)');
    update_option('wpucs_main_description_color', 'rgba(30, 54, 24, 0.8)');

    //contact
    update_option('wpucs_contact_info_color', 'rgba(5, 54, 67,0.8)');
    update_option('wpucs_contact_info_fontawesome_color', 'rgba(5, 54, 67,0.8)');
    update_option('wpucs_contact_info_border_color', 'rgba(5, 54, 67,0.1)');

    //countdown
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(30,54,24,0.6)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(30,54,24,0.6)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(30,54,24,0.6)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(30,54,24,0.6) ');
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgb(133, 159, 86)');
    update_option('wpucs_inner_box_border_radius', '50');

    //newsletter
    update_option('wpucs_subscription_button_background_color', 'rgb(245, 140, 49)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(255, 255, 255, .9)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(245, 140, 49,0.58) ');
    update_option('wpucs_subscription_text_color', 'rgba(30, 54, 24,0.8)');

    //social
    update_option('wpucs_social_icon_color', 'rgba(30, 54, 24,0.8)');
    update_option('wpucs_social_icon_box_color', 'rgba(30, 54, 24, 0)');
    update_option('wpucs_social_icon_boxborder_color', 'rgba(30, 54, 24,0.2)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(133, 159, 86)');
    update_option('wpucs_social_icon_hover_boxborder_color', 'rgb(133, 159, 86) ');
  } elseif ($activatedTemplateId == 5) {

    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo14.png');
    update_option('wpucs_main_heading', 'We\'re Coming Soon');

    //design
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-5.jpg');
    update_option('wpucs_main_heading_font_size', 70);

    //countdown
    update_option('wpucs_countdown_timervalue_fontsize', '60');
    update_option('wpucs_inner_box_height', '100');
    update_option('wpucs_inner_box_width', '100');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_days_innerbox_color', 'rgb(142, 119, 75)');
    update_option('wpucs_countdown_hours_innerbox_color', 'rgb(53, 117, 117)');
    update_option('wpucs_countdown_minutes_innerbox_color', 'rgb(83, 97, 58) ');
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgba(101, 136, 28,0.8) ');
    update_option('wpucs_inner_box_border_radius', '10');

    //social
    update_option('wpucs_social_icon_color', 'rgb(88, 120, 27)');
    update_option('wpucs_social_icon_box_color', 'rgb(243, 240, 255)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(243, 240, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(88, 120, 27)');
    //social icon size
    update_option('wpucs_social_icon_box_radius', '10');
    update_option('wpucs_social_icon_box_border_width', '0');
  } elseif ($activatedTemplateId == 6) {

    //dashboard
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo4.png');

    update_option('wpucs_main_heading', 'We\'re Coming Soon');

    //design
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-6.jpg');
    update_option('wpucs_main_heading_color', 'rgb(5, 54, 61)');
    update_option('wpucs_main_description_color', 'rgba(5, 54, 61, 0.8)');
    update_option('wpucs_main_heading_font_size', 70);
    update_option('wpucs_background_color', 'rgb(52, 120, 123)');

    //contact
    update_option('wpucs_contact_info_color', 'rgb(5, 54, 67)');
    update_option('wpucs_contact_info_fontawesome_color', 'rgb(5, 54, 67)');
    update_option('wpucs_contact_info_border_color', 'rgba(5, 54, 67,0.1)');

    //countdown
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(5, 54, 67, 0.6)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(5, 54, 67, 0.6)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(5, 54, 67, 0.6)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(5, 54, 67, 0.6)');
    update_option('wpucs_countdown_timervalue_fontsize', '54');
    update_option('wpucs_inner_box_height', '100');
    update_option('wpucs_inner_box_width', '100');
    update_option('wpucs_countdown_days_innerbox_color', 'rgb(134, 109, 112)');
    update_option('wpucs_countdown_hours_innerbox_color', 'rgb(60, 79, 109)');
    update_option('wpucs_countdown_minutes_innerbox_color', 'rgb(71, 82, 52) ');
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgb(77, 120, 178) ');

    //newsletter
    update_option('wpucs_subscription_button_background_color', 'rgb(245, 191, 87)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(255, 255, 255, .8)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(245, 191, 87, .8) ');
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');

    // social
    update_option('wpucs_social_icon_color', 'rgb(81, 61, 232)');
    update_option('wpucs_social_icon_box_color', 'rgb(243, 240, 255)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(243, 240, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(81, 61, 232)');
    //social icon size
    update_option('wpucs_social_icon_box_radius', '10');
    update_option('wpucs_social_icon_box_border_width', '0');
  } elseif ($activatedTemplateId == 7) {

    //Dashboard
    update_option('wpucs_main_heading', 'We\'re Coming Soon ');
    update_option('wpucs_main_description', 'New Interior Design launching soon please reload after minutes');

    //design
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-7.jpg');

    update_option('wpucs_main_heading_font_size', 100);
    update_option('wpucs_main_description_font_size', 24);

    //countdown
    update_option('wpucs_countdown_timerlevel_fontsize', '24');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(255, 255, 255, 0.6)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(255, 255, 255, 0.6)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(255, 255, 255, 0.6)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(255, 255, 255, 0.6)');

    //newsletter
    update_option('wpucs_subscription_button_background_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(239, 66 ,34)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgb(255, 255, 255) ');
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
    update_option('wpucs_client_name', '1');
    update_option('wpucs_client_mobile', '1');

    //social main color
    update_option('wpucs_social_icon_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_social_icon_box_color', 'rgba(255, 255, 255, 0)');
    update_option('wpucs_social_icon_boxborder_color', 'rgba(255, 255, 255,0.2)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_social_icon_hover_boxborder_color', 'rgb(239, 66 ,34) ');
  } elseif ($activatedTemplateId == 8) {

    update_option('wpucs_main_heading', 'We are launching soon please reload after minutes ');
    update_option('wpucs_main_description', "We are preparing something unique and exciting for you. Special surprise for our subscribers only.");
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-8.jpg');
    update_option('wpucs_main_description_color', 'rgba(255, 255, 255, 0.9)');
    // countdown
    update_option('wpucs_countdown_hours_timervalue_color', 'rgb(246, 67, 67)');
    update_option('wpucs_countdown_minutes_timervalue_color', 'rgb(4, 255, 195)');
    update_option('wpucs_countdown_seconds_timervalue_color', 'rgb(245, 191, 87)');
    update_option('wpucs_countdown_timervalue_fontsize', '80');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(255, 255, 255, 0.8)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(255, 255, 255, 0.8)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(255, 255, 255, 0.8)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(255, 255, 255, 0.8)');

    //newsletter
    update_option('wpucs_subscription_button_background_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(239, 66 ,34)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgb(255, 255, 255) ');
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_text', 'Get in Touch');
    update_option('wpucs_subscription_text_height', '36');
    update_option('wpucs_client_name', '1');
    update_option('wpucs_client_mobile', '1');
    update_option('wpucs_client_message', '1');

    //social main color
    update_option('wpucs_social_icon_color', 'rgba(255, 255, 255,0.8)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_social_icon_box_radius', '0');
    update_option('wpucs_social_icon_box_border_width', '0');
  } elseif ($activatedTemplateId == 9) {

    //dashboard
    update_option('wpucs_main_heading', 'We\'re Coming  Soon!');

    //design
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-9.jpg');
    update_option('wpucs_main_heading_font_size', 100);

    //countdown
    update_option('wpucs_countdown_days_timervalue_color', 'rgb(239, 66, 34)');
    update_option('wpucs_countdown_days_text', 'Days to Launch');
    update_option('wpucs_countdown_timerlevel_fontsize', '30');
    update_option('wpucs_countdown_timervalue_fontsize', '30');
    update_option('wpucs_countdown_days_innerbox_color', 'rgb(255, 255, 255)');

    // newsletter
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(255, 255, 255)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgb(67, 111, 156) ');

    //social main color
    update_option('wpucs_social_icon_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_social_icon_box_color', 'rgba(255, 255, 255, 0)');
    update_option('wpucs_social_icon_boxborder_color', 'rgba(255, 255, 255,0.2)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_social_icon_hover_boxborder_color', 'rgb(239, 66 ,34) ');
  } elseif ($activatedTemplateId == 10) {

    update_option('wpucs_main_description', "We are preparing something unique and exciting for you, Special surprise for our subscribers only!");
    //design
    update_option('wpucs_background_image1', $root_url . 'assets/img/background/background-10b.jpg');
    update_option('wpucs_background_image2', $root_url . 'assets/img/background/background-10c.jpg');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-10a.jpg');
    update_option('wpucs_main_heading_font_size', 70);
    update_option('wpucs_sub_heading_font_size', 70);
    update_option('wpucs_sub_heading_color', 'rgb(239, 66, 34)');

    //countdown
    update_option('wpucs_countdown_timervalue_fontsize', '80');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(255, 255, 255, 0.8)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(255, 255, 255, 0.8)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(255, 255, 255, 0.8)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(255, 255, 255, 0.8)');
    update_option('wpucs_countdown_text', 'Upcoming Dates');
    update_option('wpucs_countdown_text_color', 'rgba(255, 255, 255, 0.2)');
    update_option('wpucs_countdown_text_font_size', '55');
    //newsletter
    update_option('wpucs_subscription_button_background_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(255,255,255)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(239, 66 ,34,0.8) ');

    //social
    update_option('wpucs_social_icon_hover_color', 'rgb(239, 66 ,34)');
  } elseif ($activatedTemplateId == 11) {

    //dashboard
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo11.png');
    update_option('wpucs_main_heading', 'Coming Soon ');
    update_option('wpucs_main_description', "We are preparing something unique and exciting for you, Special surprise for our subscribers only!");

    //design
    update_option('wpucs_main_heading_font_size', '150');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-11.jpg');

    //newsletter
    update_option('wpucs_subscription_button_background_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(239, 66 ,34,0.8) ');
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');

    //social
    update_option('wpucs_social_icon_color', 'rgb(153,163,178)');
    update_option('wpucs_social_icon_box_color', 'rgb(255, 255, 255)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(255,255,255)');
    //social icon size
    update_option('wpucs_social_icon_box_radius', '50');
    update_option('wpucs_social_icon_box_border_width', '0');
  } elseif ($activatedTemplateId == 12) {
    //dashborad
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo9.png');
    update_option('wpucs_main_heading', 'We are coming');
    update_option('wpucs_sub_heading', 'Very Soon!');
    update_option('wpucs_main_description', 'All the lorem Ipsum generators on the Internet tend to repeat predefined necessary');

    // design
    update_option('wpucs_sub_heading_color', 'rgba(49, 230, 255, 1)');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-12.jpg');
    update_option('wpucs_box_container_size', '850');
    //countdown
    update_option('wpucs_countdown_days_innerbox_color', 'rgba(68, 64, 248, 1)');
    update_option('wpucs_countdown_hours_innerbox_color', 'rgba(122, 132, 254, 1)');
    update_option('wpucs_countdown_minutes_innerbox_color', 'rgba(21, 175, 247, 1)');
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgba(0, 165, 155, 1) ');

    update_option('wpucs_inner_box_border_radius', '50');
    //newsletter
    update_option('wpucs_subscription_button_text_color', 'rgba(49, 230, 255, 1)');
    update_option('wpucs_subscription_button_background_color', 'rgba(49, 230, 255, 0.07)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(255, 255, 255)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(49, 230, 255, 1) ');

    //social
    update_option('wpucs_social_icon_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_social_icon_box_color', 'rgba(255, 255, 255, 0)');
    update_option('wpucs_social_icon_boxborder_color', 'rgba(255, 255, 255,0.2)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgba(49, 230, 255, 1)');
    update_option('wpucs_social_icon_hover_boxborder_color', 'rgba(49, 230, 255, 1) ');
  } elseif ($activatedTemplateId == 13) {
    //dashborad
    update_option('wpucs_main_heading', 'We\'re');
    update_option('wpucs_sub_heading', 'Coming Soon !');
    update_option('wpucs_main_description', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined necessary');
    update_option('wpucs_box_container_size', '750');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-13.jpg');
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo1.png');
    update_option('wpucs_main_heading_font_size', 36);
    update_option('wpucs_sub_heading_font_size', 100);
    update_option('wpucs_box_container_size', '1050');

    // countdown
    update_option('wpucs_countdown_timerlevel_fontsize', '24');
    update_option('wpucs_inner_box_border_radius', '20');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(255, 255, 255, 0.62)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(255, 255, 255, 0.62)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(255, 255, 255, 0.62)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(255, 255, 255, 0.62) ');
    update_option('wpucs_countdown_days_innerbox_color', 'rgba(255, 255, 255, 0.1)');
    update_option('wpucs_countdown_hours_innerbox_color', 'rgba(255, 255, 255, 0.1)');
    update_option('wpucs_countdown_minutes_innerbox_color', 'rgba(255, 255, 255, 0.1)');
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgba(255, 255, 255, 0.1) ');

    // social
    update_option('wpucs_form_field_border_style', 'solid');
    update_option('wpucs_social_icon_boxborder_color', 'rgba(255, 255, 255, 0.2)');
  } elseif ($activatedTemplateId == 14) {

    //dashboard
    update_option('wpucs_main_heading', 'We Are Coming');
    update_option('wpucs_sub_heading', 'Soon  ');
    update_option('wpucs_main_description', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined necessary');
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo7.png');

    //dashboard
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-14.jpg');
    update_option('wpucs_sub_heading_color', 'rgba(255, 167, 59, 1)');
    update_option('wpucs_main_heading_color', 'rgb(0,0,0)');
    update_option('wpucs_main_description_color', 'rgba(43, 40, 34, 0.8)');

    //contact
    update_option('wpucs_contact_info_color', 'rgba(96, 96, 96, 1)');
    update_option('wpucs_contact_info_fontawesome_color', 'rgba(96, 96, 96, 1)');
    update_option('wpucs_contact_info_border_color', 'rgba(30, 54, 24, 0.1)');

    //countdown
    update_option('wpucs_inner_box_border_radius', '50');
    update_option('wpucs_countdown_days_innerbox_color', 'rgba(78, 120, 238, 1)');
    update_option('wpucs_countdown_hours_innerbox_color', 'rgba(245, 140, 49, 1)');
    update_option('wpucs_countdown_minutes_innerbox_color', 'rgba(156, 42, 42, 1)');
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgba(219, 67, 38, 1) ');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(30,54,24,0.6)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(30,54,24,0.6)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(30,54,24,0.6)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(30,54,24,0.6) ');
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgb(133, 159, 86)');

    //newsletter
    update_option('wpucs_subscription_button_background_color', 'rgb(245, 140, 49)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(255, 255, 255, .9)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(245, 140, 49,0.9) ');
    update_option('wpucs_subscription_text_color', 'rgba(43, 40, 34, 0.8)');

    //social
    update_option('wpucs_social_icon_color', 'rgba(245, 140, 49, 1)');
    update_option('wpucs_social_icon_box_color', 'rgba(245, 140, 49, 0)');
    update_option('wpucs_social_icon_boxborder_color', 'rgba(245, 140, 49, .2)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgba(245, 140, 49, 1)');
    update_option('wpucs_social_icon_hover_boxborder_color', 'rgba(245, 140, 49, 1) ');
  } elseif ($activatedTemplateId == 15) {

    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-15.jpg');
    update_option('wpucs_main_heading', 'We\'re Coming Soon');
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo3.png');

    update_option('wpucs_main_heading_font_size', 70);
    update_option('wpucs_main_description_color', 'rgba(255, 255, 255,0.8)');

    //countdown
    update_option('wpucs_countdown_timervalue_fontsize', '54');
    update_option('wpucs_inner_box_height', '100');
    update_option('wpucs_inner_box_width', '100');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_days_innerbox_color', 'rgba(156, 49, 42, 1)');
    update_option('wpucs_countdown_hours_innerbox_color', 'rgba(143, 84, 38, 1)');
    update_option('wpucs_countdown_minutes_innerbox_color', 'rgba(168, 119, 79, 1) ');
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgba(122, 61, 12, 1) ');
    update_option('wpucs_inner_box_border_radius', '10');

    //newsletter
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_color', 'rgb(191, 13, 30)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(191, 13, 30)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgb(255, 255, 255) ');

    // social
    update_option('wpucs_social_icon_color', 'rgb(191, 13, 30)');
    update_option('wpucs_social_icon_box_color', 'rgb(255, 255, 255)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(191, 13, 30)');
    //social icon size
    update_option('wpucs_social_icon_box_radius', '10');
    update_option('wpucs_social_icon_box_border_width', '0');
  } elseif ($activatedTemplateId == 16) {

    update_option('wpucs_main_heading', 'WE ARE COMING');
    update_option('wpucs_sub_heading', 'Soon ! ');
    // design
    update_option('wpucs_main_heading_font_size', 80);
    update_option('wpucs_sub_heading_font_size', 80);

    update_option('wpucs_sub_heading_color', 'rgb(245, 139, 49)');

    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-16.jpg');
    // dashborad
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo16.png');
    //contact
    update_option('wpucs_contact_info_fontawesome_color', 'rgb(247,141,48)');
    update_option('wpucs_contact_info_border_color', 'rgba(247,141,48,0.1)');
    //countdown
    update_option('wpucs_countdown_timervalue_fontsize', '54');
    update_option('wpucs_inner_box_height', '100');
    update_option('wpucs_inner_box_width', '100');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_days_innerbox_color', 'rgba(156, 49, 42, 1)');
    update_option('wpucs_countdown_hours_innerbox_color', 'rgba(143, 84, 38, 1)');
    update_option('wpucs_countdown_minutes_innerbox_color', 'rgba(168, 119, 79, 1) ');
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgba(122, 61, 12, 1) ');
    update_option('wpucs_inner_box_border_radius', '5');

    //newsletter
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_color', 'rgb(243,140,47)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(243,140,47)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgb(255, 255, 255) ');
  } elseif ($activatedTemplateId == 17) {
    //design
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-17.jpg');
    update_option('wpucs_main_heading', 'We\'re Coming Soon');
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo9.png');
    update_option('wpucs_main_heading_font_size', 70);
    update_option('wpucs_contact_info_border_color', 'rgba(255,255,255,1)');
    //countdown
    update_option('wpucs_countdown_timervalue_fontsize', '54');
    update_option('wpucs_inner_box_height', '120');
    update_option('wpucs_inner_box_width', '120');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_countdown_days_innerbox_color', 'rgba(23, 84, 98, 1)');
    update_option('wpucs_countdown_hours_innerbox_color', 'rgba(60, 79, 80, 1)');
    update_option('wpucs_countdown_minutes_innerbox_color', 'rgba(42, 83, 80, 1) ');
    update_option('wpucs_countdown_seconds_innerbox_color', 'rgba(42,95,155, 1) ');
    update_option('wpucs_inner_box_border_radius', '10');
    // newsletter
    update_option('wpucs_subscription_button_text_color', 'rgb(23,84,98)');
    update_option('wpucs_subscription_button_background_color', 'rgb(255,255,255)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(255,255,255)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgb(23,84,98) ');
    //social
    update_option('wpucs_social_icon_color', 'rgb(23,84,98)');
    update_option('wpucs_social_icon_box_color', 'rgb(255, 255, 255)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(23,84,98)');
    //social icon size
    update_option('wpucs_social_icon_box_radius', '10');
    update_option('wpucs_social_icon_box_border_width', '0');
  } elseif ($activatedTemplateId == 18) {
    //dashboard
    update_option('wpucs_main_heading', 'Coming Soon ');
    update_option('wpucs_main_description', "We are preparing something unique and exciting for you, Special surprise for our subscribers only.");
    update_option('wpucs_subscription_text', 'We respect your privacy and promise to never spam.');
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo.png');
    //design
    update_option('wpucs_main_heading_font_size', '150');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-18.jpg');
    //newsletter
    update_option('wpucs_subscription_button_background_color', 'rgb(52,138,253)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(52,138,253,0.8) ');
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
    //contact
    update_option('wpucs_contact_info_fontawesome_color', 'rgb(52,138,253)');
    update_option('wpucs_contact_info_border_color', 'rgba(52,138,253,0.1)');
    //social
    update_option('wpucs_social_icon_color', 'rgb(153,163,178)');
    update_option('wpucs_social_icon_box_color', 'rgb(255, 255, 255)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(52,138,253)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(255,255,255)');
    //social icon size
    update_option('wpucs_social_icon_box_radius', '50');
    update_option('wpucs_social_icon_box_border_width', '0');
  } elseif ($activatedTemplateId == 19) {

    //dashboard
    update_option('wpucs_main_heading', 'Coming Soon');
    update_option('wpucs_sub_heading', 'Our Website Is');
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo12.png');
    //design
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-19b.jpg');
    update_option('wpucs_background_image1', $root_url . 'assets/img/background/background-19a.png');
    update_option('wpucs_main_heading_font_size', 120);
    update_option('wpucs_sub_heading_font_size', 20);
    update_option('wpucs_sub_heading_color', 'rgb(239, 64, 34)');
    //contact
    update_option('wpucs_contact_info_fontawesome_color', 'rgb(239, 64, 34)');
    //countdown
    update_option('wpucs_countdown_hours_timervalue_color', 'rgb(246, 67, 67)');
    update_option('wpucs_countdown_minutes_timervalue_color', 'rgb(4, 255, 195)');
    update_option('wpucs_countdown_seconds_timervalue_color', 'rgb(245, 191, 87)');
    update_option('wpucs_countdown_timerlevel_fontsize', '16');
    update_option('wpucs_countdown_timervalue_fontsize', '80');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgba(255, 255, 255, 0.8)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgba(255, 255, 255, 0.8)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(255, 255, 255, 0.8)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(255, 255, 255, 0.8)');
    //newsletter
    update_option('wpucs_subscription_button_background_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(239, 66 ,34,0.8) ');
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_text', 'We are preparing something unique and exciting for you, Special surprise for our subscribers only!');
    update_option('wpucs_subscription_text_color', 'rgba(255, 255, 255,0.8)');
    //social
    update_option('wpucs_social_icon_hover_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_social_icon_font_size', '17');
  } elseif ($activatedTemplateId == 20) {

    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo17.png');
    update_option('wpucs_main_heading', 'We\'re Coming Soon');
    update_option('wpucs_sub_heading', 'Digital Marketing Agency');
    update_option('wpucs_main_description', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more.');
    //design
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-20.jpg');
    update_option('wpucs_main_heading_font_size', 80);
    update_option('wpucs_sub_heading_font_size', 20);
    update_option('wpucs_main_heading_color', 'rgb(1, 1, 31)');
    update_option('wpucs_main_description_color', 'rgba(2, 2, 8, 0.6)');
    //contact
    update_option('wpucs_contact_info_color', 'rgb(5, 54, 67)');
    update_option('wpucs_contact_info_fontawesome_color', 'rgb(5, 54, 67)');
    update_option('wpucs_contact_info_border_color', 'rgba(5, 54, 67,0.1)');
    //newsletter
    update_option('wpucs_subscription_button_background_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(239, 66 ,34,0.8) ');
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
  } elseif ($activatedTemplateId == 21) {

    //dashboard
    update_option('wpucs_sub_heading', "Coming Soon 2023");
    update_option('wpucs_main_heading', 'Discover authentic Japanese cuisine in the UK. ');
    update_option('wpucs_main_heading1', 'Opening Soon! ');
    update_option('wpucs_main_description', "Welcome to Esy, the newest addition to the vibrant Los Angeles dining scene! Our restaurant is dedicated to bringing you the most authentic and delicious Japanese cuisine.");
    //design
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-21b.jpg');
    update_option('wpucs_background_image1', $root_url . 'assets/img/background/background-21a.jpg');
    update_option('wpucs_main_heading_font_size', 48);
    update_option('wpucs_sub_heading_font_size', 24);
    update_option('wpucs_sub_heading_color', 'rgb(221,65,65)');
    update_option('wpucs_main_heading_font_size1', 48);
    update_option('wpucs_main_heading_color1', '#DD4141');
    update_option('wpucs_main_heading1_color', 'rgb(221,65,65)');
    //newsletter
    update_option('wpucs_subscription_button_background_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(239, 66 ,34,0.8) ');
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
    update_option('wpucs_cf_address', '123 Vine Street, Los Angeles, California 90028');
    update_option('wpucs_cf_contact_no', '(999) 999-9999');
    update_option('wpucs_cf_email_address', 'info@esy-uk.com');
    //social main color
    update_option('wpucs_social_icon_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_social_icon_box_color', 'rgba(255, 255, 255, 0)');
    update_option('wpucs_social_icon_boxborder_color', 'rgba(255, 255, 255,0.2)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_social_icon_hover_boxborder_color', 'rgb(239, 66 ,34) ');
  } elseif ($activatedTemplateId == 22) {

    update_option('wpucs_main_heading', 'Email marketing tool with built-in subscriptions');
    update_option('wpucs_sub_heading', 'Coming Soon 2023');
    update_option('wpucs_main_description', "Email-Pulse is an all-in-one tool for email newsletters. It's the perfect tool for bloggers, creatives, and artists. Join the waitlist to get early access to beta.");
    //design
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-21b.jpg');
    update_option('wpucs_background_image1', $root_url . 'assets/img/background/background-22a.png');
    update_option('wpucs_background_image2', $root_url . 'assets/img/background/background-22c.png');
    update_option('wpucs_main_heading_font_size', 48);
    update_option('wpucs_sub_heading_font_size', 24);
    update_option('wpucs_sub_heading_color', 'rgb(221, 65, 65)');

    //newsletter
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_color', 'rgb(239, 66 ,34)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(239, 66 ,34,0.8) ');
    update_option('wpucs_subscription_text', 'Join 39k other creatives');
    update_option('wpucs_subscription_text_color', 'rgba(255, 255, 255,0.8)');
    update_option('wpucs_subscription_text_height', '16');
  } elseif ($activatedTemplateId == 23) {

    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo13.png');
    update_option('wpucs_sub_heading', 'We\'re Construction');
    update_option('wpucs_main_heading', 'Coming Very Soon ');
    update_option('wpucs_main_description', "We will come very quickly to offer you the best solution for your company.");
    //design
    update_option('wpucs_main_heading_color', 'rgb(11,12,30)');
    update_option('wpucs_main_description_color', 'rgb(11,12,30)');
    update_option('wpucs_sub_heading_color', 'rgb(11,12,30)');
    update_option('wpucs_sub_heading_font_size', '20');
    update_option('wpucs_main_heading_font_size', '80');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-23.jpg'); //countdown
    update_option('wpucs_countdown_days_timervalue_color', 'rgb(11,12,30)');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgb(11,12,30)');
    update_option('wpucs_countdown_hours_timervalue_color', 'rgb(0,0,0)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgb(0,0,0)');
    update_option('wpucs_countdown_minutes_timervalue_color', 'rgb(0,0,0)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgba(0,0,0, 0.7)');
    update_option('wpucs_countdown_seconds_timervalue_color', 'rgb(0,0,0)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgba(0,0,0, 0.7)');
    update_option('wpucs_countdown_timervalue_fontsize', '60');
    update_option('wpucs_countdown_dayvalue_font_size', '90');
    //newsletter
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_color', 'rgb(0,0,0)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(0,0,0)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgb(255,255,255) ');
    //contact
    update_option('wpucs_contact_info_color', 'rgba(0,0,0)');
    update_option('wpucs_contact_info_fontawesome_color', 'rgba(0,0,0,0.6)');
    update_option('wpucs_contact_info_border_color', 'rgba(0,0,0,0.6)');
    //social main color
    update_option('wpucs_social_icon_color', 'rgba(0, 0, 0, 1)');
    update_option('wpucs_social_icon_box_color', 'rgba(0, 0, 0, 0)');
    update_option('wpucs_social_icon_boxborder_color', 'rgba(0, 0, 0, 0)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(255, 255, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(0, 0, 0)');
    update_option('wpucs_social_icon_hover_boxborder_color', 'rgb(0, 0, 0) ');
    //social icon size
    update_option('wpucs_social_icon_box_radius', '2');
    update_option('wpucs_social_icon_box_border_width', '0');
  } elseif ($activatedTemplateId == 24) {

    //DASHBOARD
    update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo1.png');
    update_option('wpucs_main_heading', 'We\'re Coming Soon');
    update_option('wpucs_main_heading_color', 'rgb(15, 11, 2)');
    update_option('wpucs_main_description_color', 'rgba(0, 0, 0,0.6)');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-24b.jpg');
    update_option('wpucs_background_image1', $root_url . 'assets/img/background/background-24a.jpg');
    //contact
    update_option('wpucs_contact_info_color', 'rgba(0,0,0,0.6)');
    update_option('wpucs_contact_info_fontawesome_color', 'rgba(0,0,0,0.6)');
    update_option('wpucs_contact_info_border_color', 'rgba(0,0,0,0.1)');
    //countdown
    update_option('wpucs_countdown_days_timervalue_color', 'rgb(79, 116, 247)');
    update_option('wpucs_countdown_days_timerlevel_color', 'rgb(0,0,0)');
    update_option('wpucs_countdown_hours_timervalue_color', 'rgb(246, 67, 67)');
    update_option('wpucs_countdown_hours_timerlevel_color', 'rgb(0,0,0)');
    update_option('wpucs_countdown_minutes_timervalue_color', 'rgb(4, 255, 195)');
    update_option('wpucs_countdown_minutes_timerlevel_color', 'rgb(0,0,0)');
    update_option('wpucs_countdown_seconds_timervalue_color', 'rgb(19, 173, 197)');
    update_option('wpucs_countdown_seconds_timerlevel_color', 'rgb(0,0,0)');
    update_option('wpucs_countdown_timerlevel_fontsize', '16');
    update_option('wpucs_countdown_timervalue_fontsize', '80');
    //social
    update_option('wpucs_social_icon_color', 'rgb(81, 61, 232)');
    update_option('wpucs_social_icon_box_color', 'rgb(243, 240, 255)');
    //social hover color
    update_option('wpucs_social_icon_hover_color', 'rgb(243, 240, 255)');
    update_option('wpucs_social_icon_hover_box_color', 'rgb(81, 61, 232)');
    //social icon size
    update_option('wpucs_social_icon_box_radius', '10');
    update_option('wpucs_social_icon_box_border_width', '0');
    update_option('wpucs_subscribe', 'Subscribe Now');
    update_option('wpucs_subscription_button_text_color', 'rgb(255, 255, 255)');
    update_option('wpucs_subscription_button_background_color', 'rgba(226,168,57,1)');
    update_option('wpucs_subscription_button_text_hover_color', 'rgba(255, 255, 255)');
    update_option('wpucs_subscription_button_background_hover_color', 'rgba(226,168,57,.8) ');
  } elseif ($activatedTemplateId == 25) {

    update_option('wpucs_main_heading', 'IS UNDER');
    update_option('wpucs_sub_heading', 'CONSTRUCTION ');
    update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
    // design

    update_option('wpucs_background_color', 'rgb(79, 34, 11)');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-25.jpg');
    update_option('wpucs_shape_overlay', $root_url . 'assets/img/background/shape-25.png');
    update_option('wpucs_main_heading_color', 'rgb(255, 255, 255)');
    update_option('wpucs_main_description_color', 'rgb(255, 255, 255)');
    update_option('wpucs_sub_heading_color', 'rgb(255, 255, 255)');

    // Website Logo
    if ($site_icon_url) {
      update_option('wpucs_website_logo', $site_icon_url);
    } else {
      // If no site icon is set, you can set a default or handle accordingly
      update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo25.png');
    }
  } elseif ($activatedTemplateId == 26) {

    update_option('wpucs_main_heading', 'Our Website Now');
    update_option('wpucs_sub_heading', 'Under Construction ');
    update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
    // design
    update_option('wpucs_main_heading_color', 'rgb(255, 255, 255)');
    update_option('wpucs_main_description_color', 'rgb(255, 255, 255)');
    update_option('wpucs_sub_heading_color', 'rgb(255, 255, 255)');
    update_option('wpucs_background_color', 'rgb(79, 34, 11)');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-26.jpg');
    update_option('wpucs_shape_overlay', $root_url . 'assets/img/background/shape-26.png');

    // Website Logo
    if ($site_icon_url) {
      update_option('wpucs_website_logo', $site_icon_url);
    } else {
      // If no site icon is set, you can set a default or handle accordingly
      update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo26.png');
    }
  } elseif ($activatedTemplateId == 27) {

    update_option('wpucs_main_heading', 'We\'re  Down For Maintenance ');

    update_option('wpucs_main_description', 'We Will Be Back Soon');
    // design

    update_option('wpucs_background_color', 'rgb(79, 34, 11)');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-27.jpg');
    update_option('wpucs_shape_overlay', $root_url . 'assets/img/background/shape-27.png');
    update_option('wpucs_main_heading_color', 'rgb(0, 0, 0)');
    update_option('wpucs_main_description_color', 'rgb(0, 0, 0)');
    // Website Logo
    if ($site_icon_url) {
      update_option('wpucs_website_logo', $site_icon_url);
    } else {
      // If no site icon is set, you can set a default or handle accordingly
      update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo27.png');
    }
  } elseif ($activatedTemplateId == 28) {

    update_option('wpucs_main_heading', 'Website Down For Maintenance ');
    update_option('wpucs_sub_heading', 'We Will Be Back Soon');
    update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
    // design
    update_option('wpucs_background_color', 'rgb(79, 34, 11)');
    update_option('wpucs_main_heading_color', 'rgb(255, 255, 255)');
    update_option('wpucs_main_description_color', 'rgb(255, 255, 255)');
    update_option('wpucs_sub_heading_color', 'rgb(255, 255, 255)');
    update_option('wpucs_background_image', $root_url . 'assets/img/background/background-28.jpg');
    update_option('wpucs_shape_overlay', $root_url . 'assets/img/background/shape-28.png');

    // Website Logo
    if ($site_icon_url) {
      update_option('wpucs_website_logo', $site_icon_url);
    } else {
      // If no site icon is set, you can set a default or handle accordingly
      update_option('wpucs_website_logo', $root_url . 'assets/img/icon/logo28.png');
    }
  } else {
    // Handle other templates or provide a default option
    // You can add logic here for handling other template IDs
  }
}
