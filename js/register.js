$(document).ready(function () {
  $("#register").submit(function (e) {
    e.preventDefault();//停止送出表單

    let title = $('#title').val();
    let name = $('#name').val();
    let phone = $('#phone').val();
    let email = $('#email').val();
    let password = $('#password').val();

    if (name != '' && phone != '' && email != '' && password != '') {//檢查全部欄位是否為空值
      $.post('./api/checkEmail.php', { email }, function (res) {
        if (res == true) {
          $.post('./api/register.php', { title, name, phone, email, password }, function (res2) {
            if (res2 !== false) {
              for (let index = 3; index < 7; index++) {//清空表單資料
                $('input').eq(index).val('');
              }
              let targetH = $('#Content').offset().top;
              $(window).scrollTop(targetH);
              $('.unsuccessful').hide();
              $('.successful').fadeIn(500);
            } else {//顯示註冊失敗
              $('.unsuccessful').eq(0).show();
            }
          })
        } else {//顯示email已經存在的錯誤訊息
          $('.unsuccessful').eq(1).show();
        }
      })
    }
  });

});


$('.successful-btn').on('click', function () {
  $('.successful').fadeOut(500)
})