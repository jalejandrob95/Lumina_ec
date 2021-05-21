jQuery('document').ready(function ($) {
    var menuIconEnsam = $('.menu-icon-resumen'), menuNavEnsam = $('.container-resumen');

    menuIconEnsam.click(function () {
        if(menuNavEnsam.hasClass('show')){
            menuNavEnsam.removeClass('show');
        }else{
            menuNavEnsam.addClass('show');
        }
    });
    
});

