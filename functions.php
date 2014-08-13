<?php

register_nav_menus( array('primary' => 'Primary Menu') );
register_sidebar( array('name' => 'Sidebar') );

add_theme_support( 'automatic-feed-links' );

function my_init_method() {
  if(!is_admin()) {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'global', get_bloginfo('template_directory') . '/css/global.css');
    wp_enqueue_style( 'global' );
  }
}
add_action('init', 'my_init_method');

function redirect_after_logout( $logout_url, $redirect = null ) {
	return $logout_url . '&amp;redirect_to=' . 'http://wordpress.pack.co.nz/wp-login.php';
}
add_filter('logout_url', 'redirect_after_logout');

?>
