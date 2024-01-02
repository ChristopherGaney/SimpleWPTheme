<?php

namespace ST\Library;

use ST\Library\Interfaces\WordPressHooks;

/**
 * Class Scripts
 *
 * @package ST\Library
 */
class Scripts implements WordPressHooks
{

    /**
     * Add class hooks.
     */
    public function addHooks()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
        add_action('wp_enqueue_scripts', [$this, 'enqueueStyles']);
    }

    /**
     * Load scripts for the front end.
     */
    public function enqueueScripts()
    {
        wp_enqueue_script(
            'simple-theme',
            get_template_directory_uri() . "/build/scripts/theme-scripts.min.js",
            [],
            THEME_VERSION,
            true
        );

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

    /**
     * Load stylesheets for the front end.
     */
    public function enqueueStyles()
    {
        wp_enqueue_style(
            'simple-styles',
            get_template_directory_uri() . '/dist/css/app.css',
            [],
            THEME_VERSION
        );
    }
}


