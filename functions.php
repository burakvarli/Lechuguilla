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

//admin'e özel dosyalar yükle
if(is_admin()) {
	require get_template_directory().'/inc/admin.php';
}

//
add_action('init', function(){
	
	remove_post_type_support('post', 'editor');
	add_post_type_support('post', 'excerpt');

});

//javascript ve css dosyalarını ekle
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('lechuguilla-font', 'http://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin-ext');
	wp_enqueue_style('lechuguilla-style', get_template_directory_uri() . '/styles/main.css');

	wp_enqueue_script('lechuguilla-script', get_template_directory_uri() . '/scripts/main.js', null, '1.0', true);
});

/**
 * yardımcı fonksiyonlar
 */

//tümünü git
function tumune_git($sayfa) {
	
	if(!get_page_by_path($sayfa))
		return;

	var_dump(get_page_by_path($sayfa));

	return '<span class="tumu"><a href="#">Tümü <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="5px" height="9px" fill="#C6C6C6" viewBox="0 0 5 9" version="1.1"><g stroke="none" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"><g sketch:type="MSArtboardGroup" transform="translate(-233.000000, -128.000000)"><g sketch:type="MSLayerGroup" transform="translate(28.000000, 116.000000)"><g sketch:type="MSShapeGroup"><g><path d="M205 12.5 L205.5 12 L210 16.5 L205.5 21 L205 20.5 L208.9 16.5 L205 12.5 Z"/></g></g></g></g></g></svg></a></span>';
}

//film görseli
function gorsel($postmeta, $postID, $alt, $permalink, $boyut = 'kucuk_gorsel'){

	if(isset($postmeta[$boyut][0]) && trim($postmeta[$boyut][0]) != '') {
		$link = $postmeta[$boyut][0];
	} elseif(has_post_thumbnail($postID)) {
		$link = wp_get_attachment_url(get_post_thumbnail_id($postID));
	}
	
	echo "<a title='$alt' href='$permalink'><img src='$link' alt='$alt' title='$alt' class='poster'></a>";
}

//film bilgisi
function bilgi($postmeta){
	$bilgi = array();

	array_walk($postmeta, function($value, $key) use(&$bilgi){
		if(in_array($key, array('sure', 'yapim_yili', 'puan')) && isset($value[0]) && trim($value[0]) != '') {
			$bilgi[] = $value[0];
		}
	});

	echo implode(' · ', $bilgi);
}

//kategoriler
function kategoriler($postID){
	echo '<div class="kategoriler">';

	array_map(function($kategori){
		echo "<span class='kategori {$kategori->slug}'><a href='".get_category_link($kategori->term_id)."'>{$kategori->name}</a></span>\n";
	}, get_the_category($postID));

	echo '</div>';
}