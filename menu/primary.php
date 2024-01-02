<?php

/**
 * The Primary Site navigation
 *
 * @package ST
 */

use ST\Library\Menus\PrimaryMenuWalker;

?>

<div class="chicking"></div>

<?php

wp_nav_menu(
    [
        'theme_location'  => 'main-menu',
        'menu_class'      => 'navbar-nav',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'primary-menu',
        'fallback_cb'     => false,
        'depth'           => 2,
        'walker'          => new PrimaryMenuWalker()
    ]
);
