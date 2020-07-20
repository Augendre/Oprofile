</main>
        <footer class="footer" id="contact">
            <form action="" class="contact-form">
                <div class="field is-half">
                    <label for="name">Nom</label>
                    <input type="text" name="name">
                </div>
                <div class="field is-half">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message"></textarea>
                </div>
                <div class="field">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
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