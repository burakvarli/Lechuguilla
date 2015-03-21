<?php

add_action('after_switch_theme', function(){
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action('admin_notices', 'lechuguilla_upgrade_notice');
});

function lechuguilla_upgrade_notice() {
	echo "<div class='error'><p>Lechuguilla teması sadece 4.1 ve üstü sürümlerde çalışabilir. Sizin sürümünüz {$GLOBALS['wp_version']}. Lütfen WordPress'i güncelleyip tekrar deneyin.</p></div>";
}

add_action('load-customize.php', function(){
	wp_die("<div class='error'><p>Lechuguilla teması sadece 4.1 ve üstü sürümlerde çalışabilir. Sizin sürümünüz {$GLOBALS['wp_version']}. Lütfen WordPress'i güncelleyip tekrar deneyin.</p></div>", '', array('back_link' => true));
});


add_action('template_redirect', function(){
	if(isset($_GET['preview'])) {
		wp_die("<div class='error'><p>Lechuguilla teması sadece 4.1 ve üstü sürümlerde çalışabilir. Sizin sürümünüz {$GLOBALS['wp_version']}. Lütfen WordPress'i güncelleyip tekrar deneyin.</p></div>");
	}
});

