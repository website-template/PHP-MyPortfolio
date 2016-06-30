(function($) {
  "use strict";

    // Up - go to top
    $('.up').click(function(){
        $('html, body').animate({scrollTop:0}, 1000);
    });

    // Contact button - go to contact
    $('.top-contact').click(function(){
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 1000);
    });

    // Menu button - toggle
    $('.top-menu').click(function(){
        $('nav').fadeToggle(300);
    });
    
    // Dark theme button
    $('.top-dark').click(function(){
        $('head').append("<link id='dark' href='css/dark.css' type='text/css' rel='stylesheet' />");
        $('.settings .btn').removeClass('active');
        $('.top-dark').addClass('active');
    });
    
    // White theme button
    $('.top-white').click(function(){
        $('#dark').remove();
        $('.settings .btn').removeClass('active');
        $('.top-white').addClass('active');
    });

    // Tooltip 
    $('[data-toggle="tooltip"]').tooltip('hide');

    // Progress bar
    $('.progress .progress-bar').progressbar();
    
    


})(jQuery);