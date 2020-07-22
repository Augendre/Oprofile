<?php

get_header();

?>

<section class="posts" id="posts">

<?php

if (have_posts()) : while (have_posts()) : the_post();

    get_template_part('template-parts/archive/detail');

endwhile; endif;

?>

</section>

<?php
get_footer();