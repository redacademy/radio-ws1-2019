//                                 
//                                 
// Header changing class on scroll 
//                                 
//                                 

jQuery(function({url}) {
    let header = jQuery('.banner--transparent');
    let main = jQuery('main');
    let logoLink = jQuery('.banner__logo-link');
    const logoUrl = `${WP_GLOBALS.url}`;
    
    main.scroll(function() {
        let scroll = main.scrollTop();
        if (scroll >= 1) {
            header.removeClass('banner--transparent').addClass('banner--light');
            logoLink.empty().append('<img src='+logoUrl+'/images/logo-light.png '+'alt="co-op radio logo">');
        } else {
            header.removeClass('banner--light').addClass('banner--transparent');
            logoLink.empty().append('<img src='+logoUrl+'/images/logo-dark.png '+'alt="co-op radio logo">');
        }
    })
})(WP_GLOBALS)