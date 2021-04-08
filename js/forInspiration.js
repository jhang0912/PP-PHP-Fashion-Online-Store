$(document).ready(function () {
  /* 輪播效果*/
  $('.forInspiration').slick({
    arrows: true,
    infinite: true,
    autoplay: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    speed: 1000,
    prevArrow: $('.prev2'),
    nextArrow: $('.next2'),
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1
        }
      },
    ]
  });
});
/* 元件動態陰影效果 */
$('.for-card').on('mouseover', function () {
  $(this).removeClass('shadow-sm');
  $(this).addClass('shadow');
})
$('.for-card').on('mouseout', function () {
  $(this).removeClass('shadow');
  $(this).addClass('shadow-sm');
})