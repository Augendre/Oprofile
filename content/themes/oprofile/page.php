<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>

<section class="banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div class="intro">
        <h1 class="intro__title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</section>

<?php endwhile; endif;

get_footer();