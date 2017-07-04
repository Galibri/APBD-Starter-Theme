jQuery(function($) {
    
    $(window).ready(function(){
        $('a.apbd-menu-btn').on('click', function(e){
            e.preventDefault();
            $('#mobile-menu').toggle('slow');
        });
        
        $('a.remove-menu').on('click', function(e){
            e.preventDefault();
            $('.block-page-menu').hide();
            $('a.remove-menu').hide();
            $('ul#fullpage-menu').css('position', 'static');
        });
        
        $('a.expand-block-menu').on('click', function(e){
            e.preventDefault();
            $('.block-page-menu').show();
            $('a.remove-menu').show();
            var menuHeight = $('ul#fullpage-menu').innerHeight();
            $('ul#fullpage-menu').css('height', menuHeight);
            $('ul#fullpage-menu').css('position', 'fixed');
        });
    });
    
});