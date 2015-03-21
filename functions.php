<?php

//versiyon 4.1'den küçükse hata ver
if (version_compare($GLOBALS['wp_version'], '4.1-alpha', '<')) {
	require get_template_directory().'/inc/dusuk-versiyon.php';
}

//tema ayarları
if(!function_exists('lechuguilla_setup')):

	function lechuguilla_setup() {
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(348, 200);
		register_nav_menu('ust-menu', 'Üst Menü');
		add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
	}

endif;

add_action('after_setup_theme', 'lechuguilla_setup');

//javascript ve css dosyalarını ekle
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('lechuguilla-font', 'http://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin-ext');
	wp_enqueue_style('lechuguilla-style', get_template_directory_uri() . '/styles/main.css');

	wp_enqueue_script('lechuguilla-script', get_template_directory_uri() . '/scripts/main.js', null, '1.0', true);
});