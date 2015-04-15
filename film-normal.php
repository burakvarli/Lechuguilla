<?php $postmeta = get_post_custom(get_the_ID()); ?>
<article class="film">
    <?php gorsel($postmeta, get_the_ID(), get_the_title(), get_the_permalink()); ?>
    <?php kategoriler(get_the_ID()); ?>
    <div class="alt">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="bilgi"><?php bilgi($postmeta); ?></p>
    </div>
</article>