<?php

namespace ST\Library;

use ST\Library\Interfaces\WordPressHooks;

/**
 * Class Options
 *
 * @package ST\Library
 */
class Options implements WordPressHooks
{

    /**
     * Add class hooks.
     */
    public function addHooks()
    {
        add_action('init', [$this, 'addOptionsPage']);
    }

    /**
     * Load scripts for the front end.
     */
    public function addOptionsPage() {
      if( function_exists('acf_add_age') ) {

        acf_add_options_page(array(
            'page_title'  => 'Framework Settings',
            'menu_title'  => 'Framework Settings',
            'menu_slug'   => 'framework-settings',
            'capability'  => 'edit_posts',
            'redirect'    => false
          ));
         
        }
    }
}
