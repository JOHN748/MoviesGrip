// Movies Slider

$(document).ready(function(){

$('.movies-slider').slick({

  centerMode: true,
  centerPadding: '300px',
  dots: false,
  arrows: false,
  autoplay: true,
  speed: 1800,
  autoplaySpeed: 1800,
  slidesToShow: 1,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '100px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '15px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '15px',
        slidesToShow: 1
      }
    }
  ]

  });
});
