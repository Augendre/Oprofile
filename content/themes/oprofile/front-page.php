<?php get_header(); ?>

<?php 

if(have_posts()): while(have_posts()) : the_post();
    get_template_part('template-parts/home/banner');
endwhile; endif ;

?>
            
<section class="posts" id="posts">
    
    <?php 

    // boucle pour aller chercher les articles
    // 1. Arguments pour la boucle custom
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => 'ASC',
        'category__not_in' => 2
    ];

    //2. Instanciation WP_Query avecles arguments
    $wpqueryArticles = new WP_Query($args);

    //3. Boucle custom
    if($wpqueryArticles->have_posts()) : while($wpqueryArticles->have_posts()) : $wpqueryArticles->the_post();
        get_template_part('template-parts/home/post-excerpt');
    endwhile; endif ;

    ?>

</section>

<section class="grid" id="grid">
    
    <?php

    // boucle pour aller chercher les skills
    // 1. Arguments pour la boucle custom
    $args = [
        'category_name' => 'skill',
        'posts_per_page' => 6,
        'orderby' => 'ASC'
    ];

    //2. Instanciation WP_Query avecles arguments
    $wpquerySkills = new WP_Query($args);

    //3. Boucle custom
    if($wpquerySkills->have_posts()) : while($wpquerySkills->have_posts()) : $wpquerySkills->the_post();
        get_template_part('template-parts/home/skill');
    endwhile; endif ;




    ?>
</section>

<?php get_footer(); ?>