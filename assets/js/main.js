$(document).ready(function() {


    $('#cookies ').fadeIn();



    /* Every time the window is scrolled ... */
    $(window).scroll(function() {

        /* Check the location of each desired element */
        $('#cards').each(function(i) {

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if (bottom_of_window > bottom_of_object) {

                $(this).animate({ 'opacity': '1', 'margin-top': '50px' }, 500);


            }

        });

    });

});

(function($) {
    $(document).ready(function() {

        // hide .navbar first
        $("#hidenav").hide();

        // fade in .navbar
        $(function() {
            $(window).scroll(function() {

                // set distance user needs to scroll before we start fadeIn
                if ($(this).scrollTop() > 200) {
                    $('#hidenav').fadeIn();
                } else {
                    $('#hidenav').fadeOut();
                }
            });
        });

    });
}(jQuery));


$(document).ready(function() {
    $('#shutdown').click(function() {
        $('#welcome').css('animation', 'none').css('text-shadow', 'none')



    });


});