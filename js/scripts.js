jQuery('document').ready(function ($) {
    var menuIcon = $('.menu-icon'), menuNav = $('.navegador2 ul'), menuBusca = $('.navegador-buscador');

    menuIcon.click(function () {
        if(menuNav.hasClass('show') && menuBusca.hasClass('show')){
            menuNav.removeClass('show');
            menuBusca.removeClass('show');
        }else{
            menuNav.addClass('show');
            menuBusca.addClass('show');
        }
    });

    var menuIconSesion = $('.dropdown'), menuNavSesion = $('.dropdown-menu');
    menuIconSesion.click(function () {
        if(menuNavSesion.hasClass('show')){
            menuNavSesion.removeClass('show');
        }else{
            menuNavSesion.addClass('show');
        }
    });
});