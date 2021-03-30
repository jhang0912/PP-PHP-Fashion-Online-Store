$(document).ready(function(){
  /* 輪播效果*/
  $('.slick').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 6000,
    speed: 2000,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
  });

});

/* 箭頭按鈕動態效果 */
$('.button').on('mouseover',function(){
  $('.arrowR').removeClass('animate__fadeOutRight');
  $('.arrowR').addClass('animate__fadeInLeft');
})

$('.button').on('mouseout',function(){
  $('.arrowR').removeClass('animate__fadeInLeft');
})

$('.button2').on('mouseover',function(){
  $('.arrowR').removeClass('animate__fadeOutRight');
  $('.arrowR').addClass('animate__fadeInLeft');
})

$('.button2').on('mouseout',function(){
  $('.arrowR').removeClass('animate__fadeInLeft');
})




