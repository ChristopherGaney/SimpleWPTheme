<?php

/**
 * Functions and definitions
 *
 * @package ST
 */

use ST\Library\Core\Init;
use ST\Library\Scripts;
use ST\Library\Navigation;
// use ST\Library\Options;
use ST\Library\RegisterSidebars;
// use ST\Library\CustomPostType;
// use ST\Library\AjaxEndpoint;

/**
 * Define Theme Version
 * Define Theme directories
 */
define('THEME_VERSION', '1.00');
define('ST_THEME_DIR', trailingslashit(get_template_directory()));
define('ST_THEME_PATH_URL', trailingslashit(get_template_directory_uri()));

require __DIR__ . '/constants.php';

// Require Autoloader
require_once ST_THEME_DIR . 'vendor/autoload.php';

/**
 * Theme Setup
 */
add_action('after_setup_theme', function () {

    (new Init())
        ->add(new Scripts())
        ->add(new Navigation())
        // ->add(new Options())
        ->add(new RegisterSidebars())
        // ->add(new CustomPostType())
        // ->add(new AjaxEndpoint())
        ->initialize();

    // Translation setup
    load_theme_textdomain('simple-theme', ST_THEME_DIR . '/languages');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Add automatic feed links in header
    add_theme_support('automatic-feed-links');

    // Add Post Thumbnail Image sizes and support
    add_theme_support('post-thumbnails');

    // Switch default core markup to output valid HTML5.
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ]);
});
