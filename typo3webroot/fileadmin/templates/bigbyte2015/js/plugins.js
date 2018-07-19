// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

$(document).ready(function() {


        //show more option
          var size_item = $('.listing').length;
          var v=3;
          $('.listing').hide(); // hide all divs with class `listing`
          $('.listing:lt('+v+')').show();
          $('#load_more').click(function () {
              v= (v+2 <= size_item) ? v+2 : size_item;
              $('.listing:lt('+v+')').show();
              // hide load more button if all items are visible
              if($(".listing:visible").length >= size_item ){ $("#load_more").hide(); }
          });

    /* MENÜ */

    $( '#dl-menu' ).dlmenu({
        animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' },
        backLabel: 'back',
        useActiveItemAsLink: false,
        maxWidth: 1008
    });

    /* FANCYBOX */

    $('.fancybox').fancybox();

    /*$('.fancybox-inline').fancybox({
        maxWidth    : 800,
        maxHeight   : 600,
        fitToView   : false,
        width       : '70%',
        autoSize    : true,
        closeClick  : false
    });*/

    /* SLICK SLIDER */

    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        fade: true,
        speed: 1000
    });

      /* FILTER */
   /* $('#selectoptions').on('change', function() {
        var url = $(this).val(); // get selected value
        if (url) { 
        window.location = url; 
        }
        return false;
    });*/

    
    /* SMOOTH SCROLL */

    $('a.anchor-link[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 800, 'swing');
    });

    /* SIDEBAR */
    
    if ( $( '#sidebarTabs' ).length > 0 ) {
        $( '.sidemenu' ).click(function() {
            $( '.cbp-spmenu-right' ).toggleClass('cbp-spmenu-open');
        });
        
        new CBPFWTabs( document.getElementById( 'sidebarTabs' ) );
    }

});