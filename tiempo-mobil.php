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

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
		'name'          => __( 'Publicidad No. 1', 'tmobil' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Tag 1.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Publicidad No. 2', 'tmobil' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Tag 2.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Publicidad No. 3', 'twentyfourteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Tag 3.', 'tmobil' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    register_sidebar( array(
		'name'          => __( 'Publicidad No. 4', 'twentyfourteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Taboola.', 'tmobil' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

if(!function_exists('tmobil_setup')){
    function tmobil_setup() {
        // This theme uses wp_nav_menu() in one location.
        register_nav_menu( 'tmobil_menu', __( 'Menú móvil, para la parte de arriba (menú principal). ', 'tmobil' ) );
    }
}

add_action( 'init', 'tmobil_setup' );

