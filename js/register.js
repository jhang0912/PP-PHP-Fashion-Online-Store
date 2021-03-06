$(document).ready(function () {
  $("#register").submit(function (e) {
    e.preventDefault();//停止送出表單

    $('.unsuccessful').hide();//清空所有錯誤訊息
    

    let title = $('#title').val();
    let name = $('#name').val();
    let phone = $('#phone').val();
    let email = $('#email').val();
    let password = $('#password').val();
    let data = [name, phone, email, password];

    if (name != '' && phone != '' && email != '' && password != '') {//檢查全部欄位是否為空值
      $.post('./api/checkForm.php', { data, email }, function (res3) {
        if (res3 == 1) {
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
                  $('.unsuccessful').eq(0).fadeIn(300);
                }
              })
            } else {//顯示email已經存在的錯誤訊息
              $('.unsuccessful').eq(4).fadeIn(300);
            }
          })
        }else{//資料格式不合格，顯示哪一個資料沒通過
          if(res3=='password'){
            $('#'+res3+'-error').text('Please check your '+res3+' is correct, your password must be 8 - 16 characters');
          }else{
            $('#'+res3+'-error').text('Please check your '+res3+' is correct');
          }
          $('#'+res3+'-error').fadeIn(300);
        }
      })
    } else {//有任一表單沒填寫就顯示錯誤訊息
      $('.unsuccessful').eq(2).fadeIn(300);
    }
  });

});


$('.successful-btn').on('click', function () {
  $('.successful').fadeOut(500)
})