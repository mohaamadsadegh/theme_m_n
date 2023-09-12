<?php
include "constants.php";
include "app/autoloader.php";
include "app/classes/class-widget.php";
add_action('after_setup_theme', 'initializer::setup');

add_filter( 'show_admin_bar', '__return_true' );