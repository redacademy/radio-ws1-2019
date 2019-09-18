jQuery(document).ready(function ($) {
  $('.artist-library').slick({
    centerMode: true,
    centerPadding: '100px',
    slidesToShow: 3,
    infinite: true,
    arrows: true,
    dots: true,
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