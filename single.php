<?php get_header(); while (have_posts()) : the_post(); ?>
<main id="film">
	
    <?php get_template_part('film', 'ic'); ?>

    <hr/>

    <?php var_dump(izlenme(get_the_ID())); ?>

    <div class="orta-banner">
        768x90 Reklam Alanı
    </div>

    <hr/>

    <section id="yorum">

        <div class="yorumlar">
             <h2>Yorumlar</h2>

            <div class="yorum">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae expedita quisquam voluptatem, maxime adipisci harum, commodi omnis, tempore est, veniam fugit officia! A itaque, amet repellat, ut aliquid sunt minima!
                <p class="yazan"><strong>Burak Varlı</strong> · 2 gün önce</p>
            </div>

            <div class="yorum">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae expedita quisquam voluptatem, maxime adipisci harum, commodi omnis, tempore est, veniam fugit officia! A itaque, amet repellat, ut aliquid sunt minima!
                <p class="yazan"><strong>Burak Varlı</strong> · 2 gün önce</p>
            </div>

            <div class="yorum">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae expedita quisquam voluptatem, maxime adipisci harum, commodi omnis, tempore est, veniam fugit officia! A itaque, amet repellat, ut aliquid sunt minima!
                <p class="yazan"><strong>Burak Varlı</strong> · 2 gün önce</p>
            </div>

            <div class="yorum">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae expedita quisquam voluptatem, maxime adipisci harum, commodi omnis, tempore est, veniam fugit officia! A itaque, amet repellat, ut aliquid sunt minima!
                <p class="yazan"><strong>Burak Varlı</strong> · 2 gün önce</p>
            </div>

            <div class="yorum">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae expedita quisquam voluptatem, maxime adipisci harum, commodi omnis, tempore est, veniam fugit officia! A itaque, amet repellat, ut aliquid sunt minima!
                <p class="yazan"><strong>Burak Varlı</strong> · 2 gün önce</p>
            </div>

            <div class="yorum">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae expedita quisquam voluptatem, maxime adipisci harum, commodi omnis, tempore est, veniam fugit officia! A itaque, amet repellat, ut aliquid sunt minima!
                <p class="yazan"><strong>Burak Varlı</strong> · 2 gün önce</p>
            </div>
        </div>

        <div class="yorum-yap">
            <h2>Yorum Yap</h2>

            <form action="#">
                <textarea name="yorumm" id="yorumm" placeholder="Yorum Yap"></textarea>
                <input type="submit" id="gonder" value="Gönder">
            </form>
        </div>
    </section><!--#yorum-->

</main><!--#ana-->

<?php endwhile; get_footer(); ?>