<?php

class Lechuguilla_Ayar {

    public $liste_tipleri = array(
        'yeni-filmler' => 'Yeni Filmler',
        'populer-filmler' => 'Popüler Filmler',
        'kategori' => 'Kategori'
    );

    function __construct() {
        add_action('admin_menu', array($this, 'add_plugin_page'));
        add_action('admin_init', array($this, 'page_init'));
    }

    function add_plugin_page() {
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

    function page_init() {
        register_setting('lechuguilla-ayar-grup', 'liste-tip');        
        register_setting('lechuguilla-ayar-grup', 'liste-sayi');        
    }

    function lechuguilla_ayar_sayfasi() { ?>

        <div id="lechuguilla_ayar" class="wrap">
            <h2>Lechuguilla Ayar Sayfası</h2>           
            <form method="post" action="options.php">
            <?php 
                settings_fields('lechuguilla-ayar-grup'); 
                do_settings_sections('lechuguilla-ayar-grup');

                $tipler = get_option('liste-tip');
                $sayilar = get_option('liste-sayi');
            ?>
            <h3>Anasayfa</h3>

            <div id="anasayfa">

                <?php foreach ($tipler as $sira => $tip) : ?>
                    <div class="liste">
                        <div class="liste-ust">
                            <?php echo $this->liste_tipleri[$tip] ?>
                            <div class="liste-toggle"></div>
                        </div>
                        <div class="liste-icerik">
                            <div>
                            <label>
                                Liste tipi
                                <select name="liste-tip[]">
                                    <?php foreach ($this->liste_tipleri as $key => $value) {
                                        echo '<option '.($key == $tip ? 'selected' : '').' value="'.$key.'">'.$value.'</option>';
                                    } ?>
                                </select>
                            </label>
                            </div>
                            
                            <div>
                            <label>
                                Kaç film gösterilsin
                                <input type="text" name="liste-sayi[]" value="<?php echo $sayilar[$sira]; ?>">
                            </label>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
       
            </div>

            <?php
                submit_button('Kaydet'); 
            ?>
            </form>
        </div>
        <?php
    }

    
}