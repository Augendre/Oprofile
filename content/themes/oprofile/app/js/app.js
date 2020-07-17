require('jquery.scrollex');

var app = {
    
    init: function() {

        console.log('init');

        // Ciblage des éléments
        app.$body = $('body');
        app.$banner = $('.banner');
        app.$header = $('.header');
        
        // On écoute l'évènement 'click' sur les éléments 'ui-button"
        $('.ui-button').on('click', app.handleToggleMenu);

        // Methode pour gérer le header
        app.enableScrollex();

    },

    handleToggleMenu: function(event) {

        // Annulation comportement par défaut
        event.preventDefault();
        console.log('Ouverture ou fermeture du menu');

        app.$body.toggleClass('menu-visible');

    },

    enableScrollex: function() {

        app.$banner.scrollex({
            leave: app.setHeaderFixed,
            enter: app.setHeaderUnfixed
        });

    },

    setHeaderFixed: function() {

        console.log('on fixe le header');
        // Ajout de la class 'fixed'
        app.$header.addClass('fixed');

    },

    setHeaderUnfixed: function() {

        console.log('on défixe le header');
        // On retire la classe 'fixed' du header
        app.$header.removeClass('fixed');

    }
};

$(app.init);
