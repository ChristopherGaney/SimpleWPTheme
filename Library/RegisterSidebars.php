<?php

namespace ST\Library;

use ST\Library\Interfaces\WordPressHooks;

/**
 * Class RegisterSidebars
 *
 * @package ST\Library
 */
class RegisterSidebars implements WordPressHooks
{

    /**
     * Add class hooks.
     */
    public function addHooks()
    {
        add_action('widgets_init', [$this, 'registerSidebars']);
    }

    /**
     * Load scripts for the front end.
     */
    public function registerSidebars() {
      $args = array(
        'name'          => 'Blog Post Sidebar',
        'id'            => 'blog-post-sidebar',
        'description'   => 'Used for blog page widgets',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>' 
      );
      register_sidebar( $args );
    }
}