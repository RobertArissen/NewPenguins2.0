<?php

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

  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' )
      ),
      'public' => true,
      'has_archive' => false,
    'menu_position' => 7,
    )
  );
}

add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {
	add_options_page('Contact Gegevens', 'Contact Gegevens', '8', 'functions', 'editglobalcustomfields');
}

function editglobalcustomfields() {
	?>
	<div class='wrap'>
	<h2>Contact Gegevens</h2>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Bezoekadres:</strong><br />
	<input type="text" name="global_bezoekadres" size="60" value="<?php echo get_option('global_bezoekadres'); ?>" /></p>

  <p><strong>Postadres:</strong><br />
	<input type="text" name="global_postadres" size="60" value="<?php echo get_option('global_postadres'); ?>" /></p>

	<p><strong>Email</strong><br />
	<input type="text" name="global_email" size="60" value="<?php echo get_option('global_email'); ?>" /></p>

	<p><strong>Telefoon:</strong><br />
	<input type="text" name="global_telefoon" size="60" value="<?php echo get_option('global_telefoon'); ?>" /></p>

	<p><input type="submit" name="Submit" value="Update Options" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="global_bezoekadres,global_postadres,global_email,global_telefoon" />

	</form>
	</div>
	<?php
}


?>
