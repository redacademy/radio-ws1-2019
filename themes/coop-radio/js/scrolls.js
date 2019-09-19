jQuery(document).ready(function ($) {
  $('.artist-library').slick({
    centerMode: true,
    centerPadding: '100px',
    slidesToShow: 3,
    infinite: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 600,
        settings: {
          dots: true,
          centerPadding: '40px',
        }
      }
    ]
  });

  $('.training-core-main').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    arrows: true,
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
