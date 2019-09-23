//                                 
//                                 
// Header changing class on scroll 
//                                 
//                                 

jQuery(function() {
    let header = jQuery('.banner--transparent');
    let main = jQuery('main');
    
    main.scroll(function() {
        let scroll = main.scrollTop();
        if (scroll >= 1) {
            header.removeClass('banner--transparent').addClass('banner--light');
        } else {
            header.removeClass('banner--light').addClass('banner--transparent');
        }
    })
})