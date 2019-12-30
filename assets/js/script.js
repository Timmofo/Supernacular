// // SET INITIAL STATE TO TOP NAVIGATION ON REFRESH
// jQuery(window).ready(function() {

//     // CHECK FOR FRONT PAGE
//     if (jQuery('body.home').length) {
//         jQuery('#nav').addClass('top-of-page');
//     }
// });


function expand() {
    document.getElementById("nav-side").style.width = "250px";
}
  
function collapse() {
    document.getElementById("nav-side").style.width = "0";
}

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

// ACCORDION

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "flex") {
      content.style.display = "none";
    } else {
      content.style.display = "flex";
    }
  });
}