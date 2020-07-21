    </main>
        <?php if (get_theme_mod('oprofile_footer_active')) : ?>
            <footer class="footer" id="contact" style="background-color:<?php echo get_theme_mod('oprofile_footer_bgcolor'); ?>">
                <div class="contact-form">
                    <?php             
                        echo do_shortcode('[contact-form-7 id="36" title="Formulaire de contact footer"]')
                    ?>
                </div>
                <address class="contact-info">
                <?php if (get_theme_mod('oprofile_footer_email')) : ?>
                    <div class="contact-info__part">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h4 class="contact-info__part__label">Email</h4>
                        <a href="mailto:<?php echo get_theme_mod('oprofile_footer_email'); ?>" class="content-info__part__content"><?php echo get_theme_mod('oprofile_footer_email'); ?></a>
                    </div>
                <?php endif; ?>
                <?php if (get_theme_mod('oprofile_footer_num')) : ?>
                    <div class="contact-info__part">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4 class="contact-info__part__label">Téléphone</h4>
                        <a href="tel:<?php echo get_theme_mod('oprofile_footer_num'); ?>" class="content-info__part__content"><?php echo get_theme_mod('oprofile_footer_num'); ?></a>
                    </div>
                <?php endif; ?>
                <?php if (get_theme_mod('oprofile_footer_address')) : ?>
                    <div class="contact-info__part">
                        <i class="fa fa-home
                        " aria-hidden="true"></i>
                        <h4 class="contact-info__part__label">Adresse</h4>
                        <p class="contact-info__part__content">
                        <?php  echo nl2br(get_theme_mod('oprofile_footer_address')); ?>
                        </p>
                    </div>
                <?php endif; ?>
                </address>
            </footer>
        <?php endif; ?>
</div>
       
    <?php get_template_part('template-parts/home/menu'); ?>

    <?php wp_footer(); ?>

</body>
</html>