$(function() {

    $('.sidemenu').hide();


    $('.nav-toggle').click(function() {
        $('.sidemenu').fadeIn(500);
        $('.title').fadeOut(400);


    });

    $('.nav-hide').click(function() {
        $('.sidemenu').fadeOut(500);
        $('.title').fadeIn(400);


    });


})