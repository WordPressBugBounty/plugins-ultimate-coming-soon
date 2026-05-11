<?php

namespace ultimate_comming_soon\Handlers;

use ultimate_comming_soon\Classes\Singleton;

class Pages_Handler extends Singleton
{
  private $menu_icon = UCS_ROOT_URL . 'assets/img/wpucs-menu.png';
  private $main_menu_slug = "ultimate-coming-soon-dashboard";

  function __construct()
  {
    add_action("admin_menu", [$this, "register_menus"]);
  }

  function register_menus()
  {
    add_menu_page(
      esc_html__("Ultimate Coming", "ultimate-coming-soon"),
      esc_html__("Ultimate Coming", "ultimate-coming-soon"),
      "manage_options",
      $this->main_menu_slug,
      [$this, "render_root"],
      $this->menu_icon,
      30
    );

    $submenus = apply_filters("ucs_menus_list", [
      [__("Templates", "ultimate-coming-soon"), "templates"],
      [__("Content", "ultimate-coming-soon"), "content"],
      [__("Appearance", "ultimate-coming-soon"), "appearance"],
      [__("Social", "ultimate-coming-soon"), "social"],
      [__("Contact", "ultimate-coming-soon"), "contact"],
      [__("Newsletter", "ultimate-coming-soon"), "newsletter"],
      [__("Countdown", "ultimate-coming-soon"), "countdown"],
      [__("SEO", "ultimate-coming-soon"), "seo"],
      [__("Advanced Settings", "ultimate-coming-soon"), "advance_settings"],
      [__("Translation", "ultimate-coming-soon"), "translation"],
    ]);

    foreach ($submenus as $menu) {
      add_submenu_page(
        $this->main_menu_slug,
        $menu[0],
        $menu[0],
        "manage_options",
        $this->main_menu_slug . "#{$menu[1]}",
        function () {}
      );
    }
  }

  function render_root()
  {
    echo "<div id='root'></div>";
  }
}
