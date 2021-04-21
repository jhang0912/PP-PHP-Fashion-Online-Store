/* toTop button */
$(window).on('scroll', function () {
  let Y = $(window).scrollTop()
  let windowH = $(window).height()
  if (Y >= (windowH / 3)) {
    $('.toTop').css({
      opacity: '1'
    })
    $('.toTop').fadeIn(500)
  }
  if (Y <= (windowH / 3)) {
    $('.toTop').fadeOut(500)
  }
})
/* ready */
$(document).ready(function () {
  $('.toTop').hide()

  //點擊按鈕後返回頁面最上面
  $('.toTop').on('click', function (e) {
    e.preventDefault();
    $(window).scrollTop(0);
  });
})