<?php
/**
 * Plugin Name:  Tiempo Mobil
 * Plugin URI:  http://honduraswebmedia.com/
 * Description: Tema especialmente desarrollado para tiempo.hn
 * Author: Fernando López Moreno
 * Author URI: http://honduraswebmedia.com/
 * Version: 0.1.0
 * License: Tiempo Mobil is Licensed under GPLv2
 * Text Domain: tiempo-mobil
 */
require_once('core/config.php');
require_once('core/class-tmobil.php');

/**
 * Used to load the required files on the plugins_loaded hook, instead of immediately.
 */
function tmobil_frontend_init() {
    require_once('frontend/class-application.php');
    new TMOBIL_Application();
}

add_action('plugins_loaded', 'tmobil_frontend_init');
add_image_size( 'home-thumbnail', 160, 130, true );