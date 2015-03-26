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
                while($yeni_filmler_query->have_posts()): $yeni_filmler_query->the_post(); $postmeta = get_post_custom(get_the_ID());?>

                    <article class="film">
                        <?php gorsel($postmeta, get_the_ID(), get_the_title(), get_the_permalink()); ?>
                        <?php kategoriler(get_the_ID()); ?>
                        <div class="alt">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="bilgi"><?php bilgi($postmeta); ?></p>
                        </div>
                    </article>

                <?php endwhile; wp_reset_postdata();
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

    <section id="populer-filmler">
        <header>
            <h2>Popüler Filmler</h2> <span class="tumu"><a href="#">Tümü <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="5px" height="9px" fill="#C6C6C6" viewBox="0 0 5 9" version="1.1"><g stroke="none" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"><g sketch:type="MSArtboardGroup" transform="translate(-233.000000, -128.000000)"><g sketch:type="MSLayerGroup" transform="translate(28.000000, 116.000000)"><g sketch:type="MSShapeGroup"><g><path d="M205 12.5 L205.5 12 L210 16.5 L205.5 21 L205 20.5 L208.9 16.5 L205 12.5 Z"/></g></g></g></g></g></svg></a></span>
        </header>

        <div class="filmler buyuk">

            <article class="film">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/sherlock.png" alt="Interstellar" class="poster">
                <div class="kategoriler">
                    <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                </div>
                <div class="alt">
                    <h3><a href="#">Sherlock Holmes</a></h3>
                    <p class="bilgi">2009 · 128dk · 8.7/10</p>
                </div>
            </article>

            <article class="film">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/salt.png" alt="Interstellar" class="poster">
                <div class="kategoriler">
                    <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                </div>
                <div class="alt">
                    <h3><a href="#">Salt</a></h3>
                    <p class="bilgi">2010 · 128dk · 8.7/10</p>
                </div>
            </article>

            <article class="film">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/entourage.png" alt="Interstellar" class="poster">
                <div class="kategoriler">
                    <span class="kategori komedi"><a href="#">Komedi</a></span>
                </div>
                <div class="alt">
                    <h3><a href="#">Entourage: The Movie</a></h3>
                    <p class="bilgi">2015 · 128dk · 8.7/10</p>
                </div>
            </article>

            <article class="film">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/avangers.png" alt="Interstellar" class="poster">
                <div class="kategoriler">
                    <span class="kategori aksiyon"><a href="#">Aksiyon</a></span>
                </div>
                <div class="alt">
                    <h3><a href="#">The Avangers</a></h3>
                    <p class="bilgi">2014 · 128dk · 8.7/10</p>
                </div>
            </article>

            <article class="film">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/fury.png" alt="Interstellar" class="poster">
                <div class="kategoriler">
                    <span class="kategori dram"><a href="#">Dram</a></span>
                </div>
                <div class="alt">
                    <h3><a href="#">Fury</a></h3>
                    <p class="bilgi">2014 · 128dk · 8.7/10</p>
                </div>
            </article>

            <article class="film">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gecici/farm.png" alt="Interstellar" class="poster">
                <div class="kategoriler">
                    <span class="kategori komedi"><a href="#">Komedi</a></span>
                    <span class="kategori dram"><a href="#">Dram</a></span>
                </div>
                <div class="alt">
                    <h3><a href="#">The Farm</a></h3>
                    <p class="bilgi">2013 · 128dk · 8.7/10</p>
                </div>
            </article>

        </div>
    </section><!--#populer-filmler-->
    
    <hr/>

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