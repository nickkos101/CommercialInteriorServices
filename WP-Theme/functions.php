<?php

include 'autocracy/autocracy.php';

function cis_scripts() {
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'function', get_template_directory_uri() . '/function.js', array('jquery', 'slick', 'thickbox'), '1.0.0', true );
	
	wp_register_style( 'normalize', get_template_directory_uri() . '/normalize.css' );
	wp_enqueue_style( 'normalize' );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/responsive.css' );
	wp_enqueue_style( 'responsive' );
	wp_register_style( 'slick', get_template_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'slick' );
	wp_enqueue_style('thickbox');
}
add_action( 'wp_enqueue_scripts', 'cis_scripts' );


function cis_create_post_types() {
	register_post_type('services', array(
		'labels' => array(
			'name' => __('Services'),
			'singular_name' => __('Service')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'service'),
		'menu_icon' => 'dashicons-format-image',
		'supports' => array('title','editor','thumbnail')
		)
	);
	register_post_type('portfolio', array(
		'labels' => array(
			'name' => __('Portfolio'),
			'singular_name' => __('Portfolio')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'portfolio'),
		'menu_icon' => 'dashicons-format-image',
		'supports' => array('title','editor','thumbnail')
		)
	);
}
add_action('init', 'cis_create_post_types');


add_theme_support( 'menus' );
register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
	) );

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support( 'woocommerce' );

// Unhook Woocommerce
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'woocommerce_wrapper_end', 10);

// Remove Product Tabs 

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

// Add Full Description in summary area

function woocommerce_template_product_description() {
	woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );

function woocommerce_wrapper_start() {
	echo '<main><div class="white-wrap col-wrap"><div class="mini-container">';
}

function woocommerce_wrapper_end() {
	echo '</div></div></main>';
}

function get_featured_url() {
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];
	return $thumb_url;
}

// Unhook Woocommerce
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

//Modify Woocommerce Store Notice
/**
 * Add an icon in the store notice.
 */
function wc_custom_store_notice_freeship( $text ) {
	return str_replace( '<p class="demo_store">', '<p class="demo_store"><i class="fa fa-bookmark"></i>', $text );
}
add_filter( 'woocommerce_demo_store', 'wc_custom_store_notice_freeship' );

?>