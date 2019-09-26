//                                 
//                                 
// Header changing class on scroll 
//                                 
//                                 

jQuery(function() {
    let header = jQuery('.banner--transparent');
    let search = jQuery('.search-icon-black');
    let backTopIcon = jQuery('.back-top');
    let main = jQuery('main');
    
    main.scroll(function() {
        let scroll = main.scrollTop();
        if (scroll >= 1) {
            header.removeClass('banner--transparent').addClass('banner--light');
            search.removeClass('search-icon-black').addClass('search-icon-white');
            backTopIcon.addClass('back-top');
        } else {
            header.removeClass('banner--light').addClass('banner--transparent');
            search.removeClass('search-icon-white').addClass('search-icon-black');
            backTopIcon.removeClass();
        }
    })
})