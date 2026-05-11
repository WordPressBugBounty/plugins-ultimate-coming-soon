<?php

namespace ultimate_comming_soon\Handlers;

use ultimate_comming_soon\Classes\Singleton;
use ultimate_comming_soon\Handlers\Template_Loader_Handler;
use ultimate_comming_soon\Handlers\Ajax_Handler;
use ultimate_comming_soon\Handlers\Pages_Handler;
use ultimate_comming_soon\Handlers\Assets_Handler;
use ultimate_comming_soon\Handlers\Blocks_Handler;
use ultimate_comming_soon\Handlers\Utils_Handler;
use ultimate_comming_soon\Handlers\Extend_Block_Feature_Handler;

class Plugin_Boostrap extends Singleton
{
  protected function __construct()
  {
    $this->define_constant();
    $this->register_handlers();
  }

  private function define_constant()
  {
    define("UCS_VERSION", "1.1.4");
    define("UCS_ROOT_DIR", plugin_dir_path(UCS_ROOT_FILE));
    define("UCS_ROOT_URL", plugin_dir_url(UCS_ROOT_FILE));
    define("UCS_BASENAME", plugin_basename(UCS_ROOT_FILE));
  }

  private function register_handlers()
  {
    $handlers = [
      Template_Loader_Handler::class,
      Ajax_Handler::class,
      Pages_Handler::class,
      Assets_Handler::class,
      Utils_Handler::class,
      Blocks_Handler::class,
      Extend_Block_Feature_Handler::class
    ];

    foreach ($handlers as $handler) {
      $handler::getInstance();
    }
  }
}
