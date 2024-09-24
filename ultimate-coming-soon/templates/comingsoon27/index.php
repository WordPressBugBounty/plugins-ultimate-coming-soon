<?php if ( ! defined( 'ABSPATH' ) ) exit;
    require_once UCSM_PLUGIN_DIR_LITE .'backend/essential-variables.php';
    // Get the plugin version
    $plugin_version = defined('UCSM_VERSION_LITE') ? UCSM_VERSION_LITE : '1.0.0';
    $social_links = get_option('wpucs_social_links', array());
    $social_links_order = get_option('wpucs_social_links_order', array());

    // Define an array of social platforms with their respective Remix icons
    $platforms = array(
        'facebook' => 'facebook-fill',
        'twitter' => 'twitter-fill',
        'instagram' => 'instagram-fill',
        'youtube' => 'youtube-fill',
        'linkedin' => 'linkedin-fill',
        'pinterest' => 'pinterest-fill',
        'snapchat' => 'snapchat-fill',
        'tiktok' => 'tiktok-fill',
        'reddit' => 'reddit-fill',
        'tumblr' => 'tumblr-fill',
        'whatsapp' => 'whatsapp-fill',
        'telegram' => 'telegram-fill',
        'wechat' => 'wechat-fill',
        'flickr' => 'flickr-fill',
        'behance' => 'behance-fill',
        'dribbble' => 'dribbble-fill',
        'vimeo' => 'vimeo-fill',
        'soundcloud' => 'soundcloud-fill',
        'xing' => 'xing-fill',
        'github' => 'github-fill',
        'spotify' => 'spotify-fill',
        'wordpress' => 'wordpress-fill',
        'discord' => 'discord-fill',
        'twitch' => 'twitch-fill',
        'line' => 'line-fill',
    );
?>
<!-- HTML -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- Head -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if (!empty($wpucs_seo_title)): ?><!-- Meta Title -->
    <meta property="og:title" content="<?php echo wp_kses_post($wpucs_seo_title); ?>" />
    <?php endif; ?>
    
    <?php if (!empty($wpucs_seo_description)): ?><!-- Meta Description -->
    <meta property="og:description" content="<?php echo wp_kses_post($wpucs_seo_description); ?>" >
    <meta name="description" content="<?php echo wp_kses_post($wpucs_seo_description); ?>">   
    <?php endif; ?>

    <?php if (!empty($wpucs_favicon)): ?><!-- Thumbnail -->
    <meta name="thumbnail" content="<?php echo esc_url($wpucs_favicon); ?>">
    <?php endif; ?>
    
    <?php if (!empty($wpucs_seo_img)): ?><!-- Meta Image -->
    <meta property="og:image" content="<?php echo esc_url($wpucs_seo_img); ?>">
    <?php endif; ?>

    <?php if (!empty($wpucs_seo_meta_keywords)): ?><!-- Meta KeyWords -->
    <meta name="keywords" content="<?php echo wp_kses_post($wpucs_seo_meta_keywords); ?>">
    <?php endif; ?>

    <?php if ($ucsm_mode === 'maintenance') : ?><!-- Maintenance Mode Meta Robots -->
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>

    <!-- Including scripts and styles added by plugins -->
    <link rel="stylesheet" href="<?php echo esc_url(UCSM_PLUGIN_URL_LITE . 'templates/comingsoon27/style.css?v=' . esc_attr($plugin_version)); ?>" /> 
    <link rel="stylesheet" href="<?php echo esc_url(UCSM_PLUGIN_URL_LITE.'assets/css/wpucs_font_family_frontend.css?v=' . esc_attr($plugin_version)); ?>" />  
    <link rel="stylesheet" href="<?php echo UCSM_PLUGIN_URL_LITE.'assets/css/remixicon.css'; ?>" /> 

    <?php if (!empty($wpucs_google_analytics)): ?><!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($wpucs_google_analytics); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo htmlspecialchars($wpucs_google_analytics); ?>');
    </script>
    <?php endif; ?>
</head>
<!-- End Head -->
<!-- Body -->

<body>
    <!--  Container    -->
    <div class="ucsm-container"
        style=" background-color: <?php echo wp_kses_post($wpucs_background_color_rgba); ?>;  background-image: url('<?php echo esc_url($wpucs_background_image); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh; ">
        <!-- Header Top Bar -->
        <div class="ucsm-header-top-bar-pro">
            <!-- Logo Setup -->
            <?php if ($wpucs_logo_setup === 'text') { ?>
            <div class="ucsm-header-textlogo-lite">
                <a href="<?php echo esc_url($wpucs_website_url); ?>"
                    style="color: #66b6ff;font-weight: 700; text-decoration: none; font-size: 60px;font-family: 'inter-bold';">
                    <?php echo wp_kses_post($wpucs_website_text_logo); ?>
                </a>
            </div>
            <?php } ?>
            <?php if ($wpucs_logo_setup === 'graphic') { ?>
            <div class="ucsm-header-logo-lite">
                <a href="<?php echo esc_url($wpucs_website_url); ?>"><img src="<?php echo wp_kses_post($wpucs_website_logo); ?>" alt="Coming Soon Image">
                </a>
            </div>
            <?php } ?>
            <?php if ($wpucs_logo_setup === 'disabled') { ?>
            <div class="ucsm-header-logo-lite">

            </div>
            <?php } ?>
            <!-- End Logo Setup -->

        </div>
        <!-- End Header Top Bar -->
        <!-- Main Content -->
        <div class="ucsm-content">
            <!-- Heading Text -->
            <h1 class="ucsm-heading" style="color: #000000 ;font-family: 'urbanist-extrabold';">
                <?php echo wp_kses_post($wpucs_main_heading); ?> 
            </h1>
            <!--End Heading Text -->
            <!-- Description Text -->
            <p class="ucsm-description" style="color: #000000; font-size: 50px; line-height:36px; ;font-family: 'urbanist-bold';">
                <?php echo wp_kses_post($wpucs_main_description); ?>   
            </p>
            <!-- End Description Text -->
            <!-- Social -->
            <div class="ucsm-header-social-lite">
                <ul>
                    <?php foreach ($social_links_order as $platform) : ?>
                        <?php if (!empty($social_links[$platform]) && isset($platforms[$platform])) : ?>
                            <li>
                                <a href="<?php echo esc_url($social_links[$platform]); ?>" >
                                    <i class="ri-<?php echo esc_attr($platforms[$platform]); ?>" style=" color: #000 ; font-size: 20px;"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- End Social -->
        </div>
        <!-- End Main Content -->
        <div class="shape-image">
            <img src="<?php echo esc_url($wpucs_shape_overlay); ?>" alt="">
        </div>
        <div class="ucsm-copyright">
            <p>Powered By <a target="__blank" href="https://rstheme.com/">RSTheme</a></p>
        </div>

    </div>
    <!-- Full Container    -->


</body>
<!-- End Body -->

</html>
<!-- End Html -->