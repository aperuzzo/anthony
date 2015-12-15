
//set up the slideshow on front page
function rotateImages(){
    $current = jQuery('#slideshow li.current');
    $next = ($current.next().length > 0) ? $current.next() : jQuery('#slideshow li:first');

    $current.removeClass('current').addClass('previous');
    $next.css('opacity', 0).addClass('current').animate({opacity: 1}, 1300, function(){
      $current.removeClass('previous');
      })
  }

//pulsing link
function pulse() {
    jQuery('#dn').delay(2000);
    jQuery('#dn').animate({
       'top': '5%'
    }, 150, function() {
        jQuery('#dn').animate({
            'top': '2%'
        }, 90, function(){
            jQuery('#dn').animate({
               'top': '5%'
            }, 150, function() {
                jQuery('#dn').animate({
                    'top': '3%'
                }, 50, function(){
                    jQuery('#dn').delay(4000);
                    pulse();
                });
            });
        });
    });
     
}

function animateLoad() {
    jQuery('#cir-outer').fadeIn(900, function() {
        jQuery('#cir').fadeIn(900, function() {
            jQuery('#cir img').fadeIn(900, function() {
                jQuery('#cir img').hide();
                jQuery('#cir').hide();
                jQuery('#cir-outer').hide();
                jQuery('#cir-outer').delay(600);
                animateLoad();
            });
        });
    });
}
animateLoad();

jQuery( window ).load(function() {
  jQuery('#load-wrap').fadeOut();
});  

jQuery(document).ready(function($) { 
    
    //number of background images for front page carousel
    var pictures = ["picture-1", "picture-2", "picture-3", "picture-4"];
    // set the background image css for list items
    for(var i = 0; i < pictures.length; i++){
        $('#' + pictures[i]).css({'background': "url('wp-content/themes/anthony/images/" + pictures[i] + ".jpg') top",
                                    'background-attachment': 'fixed',
                                    'background-size': 'cover'
                                });
    }
   
    setInterval('rotateImages()', 5000);// interval time for slideshow on front page

    /* Scroll to specific section on front page via wordpress menu*/
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

    //scroll to gallery section
    $('#dn').click(function(){
        $('html, body').animate({scrollTop: $('#web').offset().top 
        }, 600);
    })
    
    //make .contain full size of window
    $('.contain').height(function(){
            return $(window).height() * 0.9;
        });

    $(window).resize(function(){
        $('.contain').height(function(){
            return $(window).height() * 0.9;
        });

    });

    pulse();

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