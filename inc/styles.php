<?php

// Register Style
function sherpa_styles() {

	// We are going to defer loading our styles until after WooCommerce has loaded its styles IF WooCommerce exists
	if(function_exists('is_woocommerce')) {
		$main_css_deps = array('woocommerce-layout');
	} else {
		$main_css_deps = FALSE;
	}
	
	/* Uncomment for Testing purposes */
	
	/*
	if($_SERVER['REMOTE_ADDR'] == '68.201.140.52'):
	    $main_style = '/css/style-dev.css';
	else:
	    $main_style = '/css/style.css';
	endif;
	*/
	
	// Comment out if not testing purposes
	$main_style = '/css/style.css';
	
	wp_register_style( 'main_css', get_stylesheet_directory_uri() . $main_style, $main_css_deps, time(), 'all' );
	wp_enqueue_style( 'main_css' );

	wp_register_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', false, '4.6.3', 'all' );
	wp_enqueue_style( 'font_awesome' );
	
	wp_register_style( 'libre_baskerville', 'https://fonts.googleapis.com/css?family=Libre+Baskerville', false, '1.0', 'all' );
	wp_enqueue_style( 'libre_baskerville' );
	
	wp_register_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700', false, '1.0', 'all' );
	wp_enqueue_style( 'roboto' );
	
	wp_register_style('additional', THEMEURL . '/style.css', array('main_css'), time(), 'all');
	wp_enqueue_style('additional');
}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'sherpa_styles' );
	
?>
