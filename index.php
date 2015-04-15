<?php get_header(); ?>
<main id="ana">

    <section id="yeni-filmler">
        <header>
            <h2>Yeni Filmler</h2> <?php tumune_git('yeni-filmler'); ?>
        </header>

        <div class="filmler">
      
            <?php
            $yeni_filmler_query = new WP_Query('posts_per_page=10');

            if($yeni_filmler_query->have_posts()):
                while($yeni_filmler_query->have_posts()):
                    $yeni_filmler_query->the_post();                     
                    get_template_part('film', 'normal');                    
                endwhile; wp_reset_postdata();
            else:
                echo '<p>Üzgünüz, sistemde kayıtlı film bulunamadı :(</p>';
            endif; ?>  

        </div>

        <!-- <nav class="sayfalama">
            <ul>
                <li class="geri"><a href="#">&laquo; Geri</a></li>
                <li><a href="#">1</a></li>
                <li class="aktif"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li>...</li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li class="ileri"><a href="#">İleri &raquo;</a></li>
            </ul>
        </nav> -->

    </section><!--#yeni-filmler-->
    
    <hr/>
    
    <?php
    $populer_filmler_query = new WP_Query(array(
        'posts_per_page' => 6,
        'orderby'        => 'meta_value_num',
        'meta_key'       => 'izlenme',
        'order'          => 'DESC'
    ));


    if($populer_filmler_query->have_posts()): ?>

    <section id="populer-filmler">
        <header>
            <h2>Popüler Filmler</h2> <?php tumune_git('populer-filmler'); ?>
        </header>

        <div class="filmler buyuk">

        <?php while($populer_filmler_query->have_posts()):
            $populer_filmler_query->the_post();                     
            get_template_part('film', 'buyuk');                    
        endwhile; wp_reset_postdata(); ?>

        </div>
    </section><!--#populer-filmler-->
    
    <hr/>

    <?php endif; ?>        

    <div class="orta-banner">
        768x90 Reklam Alanı
    </div>

    <hr/>
    
    <div id="digerleri">
        <section id="odullu-filmler" class="tek">
            <header>
                <h2>Ödüllü Filmler</h2>
            </header>

            <div class="filmler buyuk">

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/abeautifulmind.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori dram"><a href="#">Dram</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">A Beautiful Mind</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/pirates.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                        <span class="kategori macera"><a href="#">Macera</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">Pirates of Caribbean</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/expendables.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">The Expendables</a></h3>
                        <p class="bilgi">2011 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/scarn.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">Threat Level Midnight</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>

            </div>

        </section><!--#odullu-filmler-->

        <section id="bizim-onerdiklerimiz" class="tek">
            <header>
                <h2>Bizim Önerdiklerimiz</h2>
            </header>

            <div class="filmler buyuk">

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/pirates.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                        <span class="kategori macera"><a href="#">Macera</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">Pirates of Caribbean</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/scarn.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">Threat Level Midnight</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/hobbit.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori macera"><a href="#">Macera</a></span>
                        <span class="kategori dram"><a href="#">Dram</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">The Hobbit: Unexpected Journey</a></h3>
                        <p class="bilgi">2011 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/abeautifulmind.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori dram"><a href="#">Dram</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">A Beautiful Mind</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>
            </div>

        </section><!--#bizim-onerdiklerimiz-->

        <section id="yuksek-puanli-filmler" class="tek">
            <header>
                <h2>Yüksek Puanlı Filmler</h2>
            </header>

            <div class="filmler buyuk">

                 <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/abeautifulmind.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori dram"><a href="#">Dram</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">A Beautiful Mind</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/pirates.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                        <span class="kategori macera"><a href="#">Macera</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">Pirates of Caribbean</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/expendables.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">The Expendables</a></h3>
                        <p class="bilgi">2011 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/scarn.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">Threat Level Midnight</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>

            </div>

        </section><!--#yuksek-puanli-filmler-->

        <section id="aksiyon-filmleri" class="tek">
            <header>
                <h2>Aksiyon Filmleri</h2>
            </header>

            <div class="filmler buyuk">

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/pirates.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                        <span class="kategori macera"><a href="#">Macera</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">Pirates of Caribbean</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/scarn.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">Threat Level Midnight</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/hobbit.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori macera"><a href="#">Macera</a></span>
                        <span class="kategori dram"><a href="#">Dram</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">The Hobbit: Unexpected Journey</a></h3>
                        <p class="bilgi">2011 · 128dk · 8.7/10</p>
                    </div>
                </article>

                <article class="film">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/abeautifulmind.png" alt="Interstellar" class="poster">
                    <div class="kategoriler">
                        <span class="kategori dram"><a href="#">Dram</a></span>
                    </div>
                    <div class="alt">
                        <h3><a href="#">A Beautiful Mind</a></h3>
                        <p class="bilgi">2009 · 128dk · 8.7/10</p>
                    </div>
                </article>

            </div>

        </section><!--#aksiyon-filmleri-->
    </div><!--#digerleri-->

</main><!--#ana-->
<?php get_footer(); ?>