jQuery(document).ready(function ($) {
  $('.artist-library').slick({
    centerMode: true,
    slidesToShow: 3,
    infinite: true,
    arrows: false,
    centerPadding: '0',
    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 1,
          dots: true,
        }
      }
    ]
  });

  $('.training-core-main').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: false,
    dots: true,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 500,
        settings: 'unslick'
      }
    ]
  });
});
