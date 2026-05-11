<?php

namespace ultimate_comming_soon\Handlers;

use ultimate_comming_soon\Classes\Singleton;

class Blocks_Handler extends Singleton
{

  private $blocks_dir = UCS_ROOT_DIR . "assets/build/gutenberg/";
  function __construct()
  {
    add_action("init", [$this, "register_block_collection"]);
  }

  function register_block_collection()
  {
    wp_register_block_metadata_collection($this->blocks_dir, $this->blocks_dir . "blocks-manifest.php");
    wp_register_block_types_from_metadata_collection($this->blocks_dir);
  }
}
