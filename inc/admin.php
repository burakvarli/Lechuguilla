<?php

require get_template_directory().'/inc/panel.php';
require get_template_directory().'/inc/metabox.php';

//admin paneli
new Lechuguilla_Ayar;

//yazı ekleme&düzenleme sayfası için özel kutular
add_action('load-post.php', 'metabox');
add_action('load-post-new.php', 'metabox');

function metabox() {
	new Lechuguilla_Metabox;
}