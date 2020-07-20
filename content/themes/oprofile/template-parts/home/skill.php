<div class="grid__item">

<?php
if(get_field(('icone_font_awesome'))) : ?>
    <i class="fa <?php the_field('icone_font_awesome'); ?> grid__item__icon" aria-hidden="true" style="background-color:<?php the_field('icon_color'); ?>"></i>
<?php endif; ?>
    <h3 class="grid__item__title"><?php the_title() ; ?></h3>
    <p class="grid__item_content">
        <?= get_the_content() ; ?>
    </p>
</div>