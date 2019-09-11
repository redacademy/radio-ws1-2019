jQuery(function() {
$(document).ready(function(){
    console.log('slick');
    $('.artist-search').slick({
        centerMode: true,
        centerPadding: '100px',
        slidesToShow: 1,
        infinite: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
  });
});