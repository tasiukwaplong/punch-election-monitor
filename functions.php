<?php
function punch_monitor_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'custom-theme')
    ));
}
add_action('after_setup_theme', 'punch_monitor_setup');
