<?php

class Lechuguilla_Ayar {

    private $options;

    public function __construct() {
        add_action('admin_menu', array($this, 'add_plugin_page'));
        add_action('admin_init', array($this, 'page_init'));
    }

    public function add_plugin_page() {
        $hook = add_menu_page(
            'Lechuguilla Ayar Sayfası',
            'Lechuguilla',
            'manage_options',
            'lechuguilla-ayar',
            array($this, 'lechuguilla_ayar_sayfasi'),
            get_template_directory_uri() . '/images/ayar-ikon.png',
            81
        );

        add_action('load-'.$hook, function() {
            wp_enqueue_script(
                'lechuguilla-panel-js',
                get_template_directory_uri() . '/scripts/panel.js',
                array('jquery', 'jquery-ui-sortable')
            );

            wp_enqueue_style(
                'lechuguilla-panel-css',
                get_template_directory_uri() . '/styles/panel.css'
            );
        });
    }

    public function lechuguilla_ayar_sayfasi() {
        // Set class property
        $this->options = get_option( 'my_option_name' );
        var_dump($this->options);
        
        ?>
        <div id="lechuguilla_ayar" class="wrap">
            <h2>Lechuguilla Ayar Sayfası</h2>           
            <form method="post" action="options.php">
            
            <h3>Anasayfa</h3>

            <div id="anasayfa">
                <div class="liste">
                    <div class="liste-ust">
                        Yeni Filmler
                        <div class="liste-toggle"></div>
                    </div>
                    <div class="liste-icerik">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga consectetur nobis repellat nostrum, voluptate, esse rerum omnis, doloremque ratione, doloribus error. Corporis sequi excepturi sed repellat eum dolorem eveniet, hic.
                    </div>
                </div>

                <div class="liste">
                    <div class="liste-ust">
                        Yeni Filmler
                        <div class="liste-toggle"></div>
                    </div>
                    <div class="liste-icerik">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga consectetur nobis repellat nostrum, voluptate, esse rerum omnis, doloremque ratione, doloribus error. Corporis sequi excepturi sed repellat eum dolorem eveniet, hic.
                    </div>
                </div>

                <div class="liste">
                    <div class="liste-ust">
                        Yeni Filmler
                        <div class="liste-toggle"></div>
                    </div>
                    <div class="liste-icerik">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga consectetur nobis repellat nostrum, voluptate, esse rerum omnis, doloremque ratione, doloribus error. Corporis sequi excepturi sed repellat eum dolorem eveniet, hic.
                    </div>
                </div>

                <div class="liste">
                    <div class="liste-ust">
                        Yeni Filmler
                        <div class="liste-toggle"></div>
                    </div>
                    <div class="liste-icerik">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga consectetur nobis repellat nostrum, voluptate, esse rerum omnis, doloremque ratione, doloribus error. Corporis sequi excepturi sed repellat eum dolorem eveniet, hic.
                    </div>
                </div>
            </div>


            <?php
                // This prints out all hidden setting fields
                settings_fields('my_option_group');   
                do_settings_sections('my-setting-admin');
                submit_button('Kaydet'); 
            ?>
            </form>
        </div>
        <?php
    }

    public function page_init() {
        register_setting(
            'my_option_group', // Option group
            'my_option_name', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'setting_section_id', // ID
            'My Custom Settings', // Title
            array( $this, 'print_section_info' ), // Callback
            'my-setting-admin' // Page
        );  

        add_settings_field(
            'id_number', // ID
            'ID Number', // Title 
            array( $this, 'id_number_callback' ), // Callback
            'my-setting-admin', // Page
            'setting_section_id' // Section           
        );      

        add_settings_field(
            'title', 
            'Title', 
            array( $this, 'title_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        );
    }

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize( $input )
    {
        $new_input = array();
        if( isset( $input['id_number'] ) )
            $new_input['id_number'] = absint( $input['id_number'] );

        if( isset( $input['title'] ) )
            $new_input['title'] = sanitize_text_field( $input['title'] );

        return $new_input;
    }

    /** 
     * Print the Section text
     */
    public function print_section_info()
    {
        print 'Enter your settings below:';
    }

    /** 
     * Get the settings option array and print one of its values
     */
    public function id_number_callback()
    {
        printf(
            '<input type="text" id="id_number" name="my_option_name[id_number]" value="%s" />',
            isset( $this->options['id_number'] ) ? esc_attr( $this->options['id_number']) : ''
        );
    }

    /** 
     * Get the settings option array and print one of its values
     */
    public function title_callback()
    {
        printf(
            '<input type="text" id="title" name="my_option_name[title]" value="%s" />',
            isset( $this->options['title'] ) ? esc_attr( $this->options['title']) : ''
        );
    }
}