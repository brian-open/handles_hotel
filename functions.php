<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'NAKED_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add Post Thumbnails
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' ); 

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'main'	=>	__( 'main', 'handels' ),
        'nav-column-1'	=>	__( 'nav-column-1', 'handels' ),
        'nav-column-2'	=>	__( 'nav-column-2', 'handels' ),
        'social'	=>	__( 'social', 'handels' ),
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);
/*-----------------------------------------------------------------------------------*/
/* ACF Options Page
/*-----------------------------------------------------------------------------------*/
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
    acf_add_options_sub_page('Contact');
	acf_add_options_sub_page('Footer');

}

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
		// just change the values of id and name to another word/name
	));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function theme_scripts()  { 
    
    // Foundation
	wp_enqueue_style('foundation.css', get_stylesheet_directory_uri() . '/assets/dist/css/foundation.css'); 

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/assets/dist/css/main.css');    
	
    // Vendor
	wp_enqueue_script( 'vendor-js', get_stylesheet_directory_uri() . '/assets/dist/js/vendor.min.js', array(), null, true );  
    
    // Main
	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/dist/js/main.min.js', array(), null, true );        
  
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header


/*-----------------------------------------------------------------------------------*/
/* Stop images Wrapping in p tags
/*-----------------------------------------------------------------------------------*/

function so226099_filter_p_tags_on_images( $content ) {
    $content = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '\1', $content);

    return $content;
}
add_filter('the_content', 'so226099_filter_p_tags_on_images');