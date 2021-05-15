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
              alert('註冊成功');
              location.href="http://220.128.133.15/s1090408/portfolio/fashionOnlineStore/";
            } else {//顯示註冊失敗
              $('#unsuccessful').show();
            }
          })
        } else {//顯示email已經存在的錯誤訊息
          let error = `
          <label id='email-error' class='error' for='email' >This email already exists</label>
          `;
          $('#email').after(error);
        }
      })
    }
  });
});