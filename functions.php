<?php
// function registers menus
function register_my_menu() {
	register_nav_menus('header-menu', _( 'Header Menu' ));
	register_nav_menus('footer-menu', _( 'Footer Menu' ));
}
add_action('init', 'register_my_menus');

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => _('Header Menus'),
			'footer-menu' => _('Footer Menu')
		)
	);
}

add_action('init', 'register_my_menus');

// function to add feature image
add_theme_support('post-thumbnails');

// Creates a custom logo
function themename_custom_logo_setup(){
	$defaults = array(
		'height' => 125,
		'wedth' => 125,
		'header-text' => array('site-title', 'site-description'),
	);

	add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'themename_custom_logo_setup');
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

/* Registers widget area */
function blank_widgets_init() {
	register_sidebar (array(
		'name' => ('Home page hero image'),
		'id' => 'home-hero`-image',
		'description' => 'This widget is for the hero image that shows up on the home page',
		'before_widget' => '<div class="hero-image">',
		'after_widget' => '</div>',
		'before-title' => '<h1>',
		'after-title' => '</h1>'
		));
	
		register_sidebar (array(
			'name' => ('About us section on home page'),
			'id' => 'about-us-home',
			'description' => 'This widget is for the about us section that shows up on the home page',
			'before_widget' => '<div class="about-us-home">',
			'after_widget' => '</div>',
			'before-title' => '<h2>',
			'after-title' => '</h2>'
			));
	
		register_sidebar (array(
			'name' => ('Left block on home page'),
			'id' => 'left-block',
			'description' => 'This widget is for the left block that shows up on the home page',
			'before_widget' => '<div class="left-block">',
			'after_widget' => '</div>',
			'before-title' => '<h3>',
			'after-title' => '</h3>'
			));
	
			register_sidebar (array(
				'name' => ('Middle block on home page'),
				'id' => 'middle-block',
				'description' => 'This widget is for the middle block that shows up on the home page',
				'before_widget' => '<div class="middle-block">',
				'after_widget' => '</div>',
				'before-title' => '<h3>',
				'after-title' => '</h3>'
				));
				
			register_sidebar (array(
				'name' => ('Right block on home page'),
				'id' => 'right-block',
				'description' => 'This widget is for the right block that shows up on the home page',
				'before_widget' => '<div class="right-block-home">',
				'after_widget' => '</div>',
				'before-title' => '<h3>',
				'after-title' => '</h3>'
				));

				
			register_sidebar (array(
				'name' => ('Left Footer'),
				'id' => 'left-footer',
				'description' => 'This widget is for the left footer',
				'before_widget' => '<div class="left-footer">',
				'after_widget' => '</div>',
				'before-title' => '<h5>',
				'after-title' => '</h5>'
				));			
			
			register_sidebar (array(
				'name' => ('Right Footer'),
				'id' => 'right-footer',
				'description' => 'This widget is for the right footer',
				'before_widget' => '<div class="right-footer">',
				'after_widget' => '</div>',
				'before-title' => '<h5>',
				'after-title' => '</h5>'
				));					
}

add_action('widgets_init', 'blank_widgets_init');

?>