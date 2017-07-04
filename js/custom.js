jQuery(function($) {
        $window = $(window);
        var navOffset=jQuery("nav").offset().top;        
           $window.on('load scroll resize orientationchange', function () {
            var viewportWidth = $window.width();
            if (viewportWidth > 767) {
              $scroll_position = $window.scrollTop();
                if ($scroll_position > 0) { // if body is scrolled down by 70 pixels
                    $('.sticky-on').addClass('sticky');
                    // to get rid of jerk
                    header_height = $('.header').innerHeight();
                    //header_height += 40;
                    $('body').css('padding-top' , header_height);
                } else {
                    $('body').css('padding-top' , '0');
                    $('.sticky-on').removeClass('sticky');
                }
            }
        });
    
});
