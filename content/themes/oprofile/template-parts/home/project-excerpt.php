<article class="post" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <h2 class="post__title"><?php the_title(); ?></h2>
    <?php the_excerpt(); ?>
    <div style="padding-top:1em;text-decoration:underline;">
        <a href="<?php the_permalink(); ?>">Voir le projet</a>
    </div>
</article>