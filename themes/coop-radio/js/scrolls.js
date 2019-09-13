jQuery(function() {
$(document).ready(function(){
    $('.artist-search').slick({
        centerMode: true,
        centerPadding: '100px',
        slidesToShow: 3,
        infinite: true,
        arrows: true,
        dots:true,
        responsive: [
          {
            breakpoint: 400,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          }
        ]
      });
  });
});