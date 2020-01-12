//Add google analytics to Contact Form 7 for both front-page and contact page
document.addEventListener( 'wpcf7mailsent', function( event ) {
    ga( 'send', 'event', 'Contact Form', 'submit' );
}, false );