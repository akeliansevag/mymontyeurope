<?php

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.1.6');
}

function mymontyeurope_setup()
{

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'mymontyeurope'),
		)
	);


	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'mymontyeurope_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
}
add_action('after_setup_theme', 'mymontyeurope_setup');

/**
 * Enqueue scripts and styles.
 */
function mymontyeurope_scripts()
{
	wp_enqueue_style('mymontyeurope-style', get_template_directory_uri() . "/build/output.css", array(), _S_VERSION);

	//wp_enqueue_script('mymontyeurope-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'mymontyeurope_scripts');


function enqueue_custom_scripts()
{
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
