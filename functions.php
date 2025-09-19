
<?php
function maryland_theme_setup() {
    register_nav_menus(array(
        'main-menu' => 'منوی اصلی'
    ));
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'maryland_theme_setup');
?>
