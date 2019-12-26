// CHECK FOR PAGE SCROLLING, ADD/REMOVE CLASS TO TOP NAVIGATION

jQuery(window).on("scroll", function() {
    var scrollPos = jQuery(window).scrollTop();
    if (scrollPos <= 0) {
        jQuery('#nav').addClass('top-of-page');
    } else {
        jQuery('#nav').removeClass('top-of-page');
    }
});