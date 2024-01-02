<?php

namespace ST\Library;

use ST\Library\Interfaces\WordPressHooks;

/**
 * Class Navigation
 *
 * @package ST\Library
 */
class Navigation implements WordPressHooks
{

    /**
     * Add class hooks.
     */
    public function addHooks()
    {
        add_action('init', [$this, 'registerMenu']);
    }

    /**
     * Load scripts for the front end.
     */
    public function registerMenu() {
      register_nav_menus(
        array(
          'main-menu' => __( 'Main Menu' ),
          'footer-menu' => __( 'Footer Menu' )
        )
      );
    }
}


