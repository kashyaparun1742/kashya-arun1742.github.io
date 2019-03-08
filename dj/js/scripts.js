var appMaster = {

    

    scrollMenu: function(){
        var num = 50; //number of pixels before modifying styles
        if ($(window).scrollTop() > num) {
            $('nav').addClass('scrolled');
        }
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > num) {
                $('nav').addClass('scrolled');

            } else {
                $('nav').removeClass('scrolled');
            }
        });

        
        
    },
    placeHold: function(){
        // run Placeholdem on all elements with placeholders
        Placeholdem(document.querySelectorAll('[placeholder]'));
    }

}; // AppMaster


$(document).ready(function() {

   
    appMaster.scrollMenu();

    appMaster.placeHold();

});

$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".header").offset().top},"1000");return false})})