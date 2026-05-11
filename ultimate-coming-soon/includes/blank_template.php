<?php
function _ucs_post_content_buffer()
{
  $template = get_query_var("ultimate_comming_soon");
  ob_start();
  if (empty($template["template_id"]) || empty(get_post($template["template_id"]))) {
    echo "No template.";
  } else {
    $page = get_post($template["template_id"], OBJECT);
    echo  apply_filters('the_content', do_blocks($page->post_content));
  }
  return ob_get_clean();
}

//generate post content 1st. because do_blocks fn register css,js and inline-css in wp_enqueue_scripts
//and wp_enqueue_scripts run at wp_head() fn. so if we call the _ucs_post_content_buffer in body then 
//wp_head fn is already run and wp_enqueue_scripts already fired. so those script that do_blocks registered
//never print. so 1st call do_blocks then run wp_head. But dont echo, just buffer it and echo inside body;
$buffer = _ucs_post_content_buffer();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
	<?php
		//if this blank template is loading then force the default.min.css to load
		//does not matter which theme or plugin load the style directly
	?>
	<link rel="stylesheet" href="<?php echo esc_url(UCS_ROOT_URL . 'assets/css/default.min.css'); ?>"/>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php echo $buffer; ?>
  <?php wp_footer(); ?>
</body>

</html>
