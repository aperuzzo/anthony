jQuery(document).ready(function($) { 

    /* Scroll to specific section on front page */
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: (target.offset().top - 49)
                    }, 500);
                    return false;
                }
            }
        });
    });


/* gallery thumbnail rollovers */
   $('.gallery-item').hover( function() {
        $(this).find('.img-title').fadeIn(300);
    }, function() {
        $(this).find('.img-title').fadeOut(100);
    });

   $('.gallery-item').hover( function() {
        $(this).find('.img-title-ill').fadeIn(300);
    }, function() {
        $(this).find('.img-title-ill').fadeOut(100);
    });

});