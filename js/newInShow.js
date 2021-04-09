/* 箭頭按鈕動態效果 */
$('.new-card').on('mouseover',function(e){
  let target = $(this).children('.new-card-content');
  let target2 = $(target).children('.newcard-arrowR')
  // console.log(target2)
  $(target2).removeClass('animate__fadeOutRight');
  $(target2).addClass('animate__fadeInLeft');
})

$('.new-card').on('mouseout',function(e){
  $('.newcard-arrowR').removeClass('animate__fadeInLeft');
})
