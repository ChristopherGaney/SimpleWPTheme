<?php

namespace ST\Library;

use ST\Library\Interfaces\WordPressHooks;

/**
 * Class CustomPostType
 *
 * @package ST\Library
 */
class CustomPostType implements WordPressHooks
{

    /**
     * Add class hooks.
     */
    public function addHooks()
    {
        add_action('init', [$this, 'createPosttype']);
    }

    /**
     * Load scripts for the front end.
     */
    public function createPosttype() {
      register_post_type( 'customized-posts',
        array(
          'labels' => array(
            'name' => __( 'Customized-Posts' ),
            'singular_name' => __( 'Customized-Post' )
          ),
          'public' => true,
          'rewrite' => array('slug' => 'customized-posts'),
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'show_ui'             => true,
            'show_in_admin_bar'   => true,
            'capability_type'     => 'post',
            'menu_position'       => 5,
            'has_archive'         => 'customized-posts',
            'query_var'           => 'customized-posts',
            'map_meta_cap'        => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'author',
                'comments',
                'trackbacks',
                'custom-fields',
                'revisions',
                'page-attributes',
                'post-formats',
            ),
        )
      );
    }
}
