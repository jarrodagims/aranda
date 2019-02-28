<?php
	
if ( ! function_exists( 'agi_navigation_menus' ) ) {

// Register Navigation Menus
function agi_navigation_menus() {

	$locations = array(
		'primary'	   => __( 'Primary Menu (EN) - top of page', 'sherpa' ),
		'primary_es'   => __( 'Primary Menu (ES) - top of page', 'sherpa' ),
		'footer'	   => __( 'Footer Menu (EN) - Bottom of page', 'sherpa' ),
		'footer_es'    => __( 'Footer Menu (ES) - Bottom of page', 'sherpa' ),
	);
	register_nav_menus( $locations );

}

// Hook into the 'init' action
add_action( 'init', 'agi_navigation_menus' );

}	
	
?>