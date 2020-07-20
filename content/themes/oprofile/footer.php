</main>
        <footer class="footer" id="contact">
            <div class="contact-form">
                <?php             
                    echo do_shortcode('[contact-form-7 id="36" title="Formulaire de contact footer"]')
                ?>
            </div>
            <address class="contact-info">
                <div class="contact-info__part">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <h4 class="contact-info__part__label">Email</h4>
                    <a href="mailto:coucou@oclock.io" class="content-info__part__content">coucou@oclock.io</a>
                </div>
                <div class="contact-info__part">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <h4 class="contact-info__part__label">Téléphone</h4>
                    <a href="tel:0169454545" class="content-info__part__content">+33 1 69 45 45 45</a>
                </div>
                <div class="contact-info__part">
                    <i class="fa fa-home
                    " aria-hidden="true"></i>
                    <h4 class="contact-info__part__label">Adresse</h4>
                    <p class="contact-info__part__content">
                        223 allée de la gare<br>
                        44000 Nantes
                    </p>
                </div>
            </address>
        </footer>
    </div>
       
    <?php get_template_part('template-parts/home/menu'); ?>

    <?php wp_footer(); ?>

</body>
</html>