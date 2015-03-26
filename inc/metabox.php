<?php

class Lechuguilla_Metabox {

	public function __construct() {
		add_action('add_meta_boxes', array($this, 'add_meta_box'));
		add_action('save_post', array($this, 'save'));
	}

	public function add_meta_box() {
		add_meta_box(
			'lechuguilla_film_detay',
			'Film Detay',
			array($this, 'render_meta_box'),
			'post',
			'advanced',
			'high'
		);
	}

	public function save( $post_id ) {

		if (!isset($_POST['lechuguilla_film_detay_nonce']))
			return $post_id;

		$nonce = $_POST['lechuguilla_film_detay_nonce'];

		if (!wp_verify_nonce($nonce, 'lechuguilla_film_detay'))
			return $post_id;

		if (defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) 
			return $post_id;

		if (!current_user_can('edit_post', $post_id))
			return $post_id;
		
		update_post_meta($post_id, 'yapim_yili', sanitize_text_field($_POST['yapim_yili']));
		update_post_meta($post_id, 'sure', sanitize_text_field($_POST['sure']));
		update_post_meta($post_id, 'puan', sanitize_text_field($_POST['puan']));
	}

	public function render_meta_box($post) {
	
		wp_nonce_field('lechuguilla_film_detay', 'lechuguilla_film_detay_nonce');

		$yapim_yili = get_post_meta( $post->ID, 'yapim_yili', true ); 
		$sure = get_post_meta( $post->ID, 'sure', true ); 
		$puan = get_post_meta( $post->ID, 'puan', true );

		?>

		<label style="display:block;width:100%;" for="yapim_yili">Yapım Yılı</label>
		<input style="display:block;width:100%;" type="text" id="yapim_yili" name="yapim_yili" value="<?php echo esc_attr($yapim_yili); ?>" />

		<label style="display:block;width:100%;" for="sure">Süre</label>
		<input style="display:block;width:100%;" type="text" id="sure" name="sure" value="<?php echo esc_attr($sure); ?>" />

		<label style="display:block;width:100%;" for="puan">Puan</label>
		<input style="display:block;width:100%;" type="text" id="puan" name="puan" value="<?php echo esc_attr($puan); ?>" />
	
	<?php }
}