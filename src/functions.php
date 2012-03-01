<?php

add_action( 'after_setup_theme', 'register_my_menus' );

function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
}

?>