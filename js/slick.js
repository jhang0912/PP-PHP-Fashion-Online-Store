$(document).ready(function(){
  $('.slick').slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 2000,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
  });
});