<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'vacatures',
    array(
      'labels' => array(
        'name' => __( 'Vacatures' ),
        'singular_name' => __( 'Vacatures' )
      ),
      'public' => true,
      'has_archive' => true,
    'menu_position' => 4,
    )
  );


  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Portfolio' )
      ),
      'taxonomies' => array('category'),
      'public' => true,
      'has_archive' => true,
    'menu_position' => 5,
    )
  );

  register_post_type( 'penguins',
    array(
      'labels' => array(
        'name' => __( 'Penguins' ),
        'singular_name' => __( 'Penguins' )
      ),
      'public' => true,
      'has_archive' => false,
    'menu_position' => 6,
    )
  );
}

?>
