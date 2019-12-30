// // SET INITIAL STATE TO TOP NAVIGATION ON REFRESH
// jQuery(window).ready(function() {

//     // CHECK FOR FRONT PAGE
//     if (jQuery('body.home').length) {
//         jQuery('#nav').addClass('top-of-page');
//     }
// });

// CHECK FOR PAGE SCROLLING, THEN ADD/REMOVE STATE TO TOP NAVIGATION
jQuery(window).on("scroll", function() {
    var scrollPos = jQuery(window).scrollTop();

    // CHECK FOR FRONT PAGE
    if (jQuery('body.home').length) {
        if (scrollPos <= 0) {
            jQuery('#nav').addClass('top-of-page');
            jQuery('.logo').attr("src", "http://supernacular.local/wp-content/themes/Supernacular/assets/images/supernacular-logo-white.svg");
        } else {
            jQuery('#nav').removeClass('top-of-page');
            jQuery('.logo').attr("src", "http://supernacular.local/wp-content/themes/Supernacular/assets/images/supernacular-logo-full.svg");
        }
    }
});