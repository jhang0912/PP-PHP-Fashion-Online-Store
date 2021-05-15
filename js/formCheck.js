/* 登入會員 */
$('#signIn').validate({
  rules: {
    signIn_email: {
      required: true,
      email: true,
    },
    signIn_password: {
      required: true,
      pattern: "[A-Za-z0-9]+",
      minlength: 8,
      maxlength: 16
    },
  },
  messages: {//錯誤訊息
    signIn_email: {
      required: "Please complete this field",
      email: "Please check your email is correct",
    },
    signIn_password: {
      required: "Please complete this field",
      pattern: "Please check your phone number is correct",
      minlength: "Your password must be 8 - 16 characters",
      maxlength: "Your password must be 8 - 16 characters",
    }
  }
})
/*註冊會員 */
$('#register').validate({
  rules: {
    title: {
      required: true
    },
    name: {
      required: true,
      pattern: "[\u4e00-\u9fa5|a-zA-Z]+"
    },
    phone: {
      required: true,
      pattern: "^09[0-9]{8}$"
    },
    email: {
      required: true,
      email: true,
    },
    password: {
      required: true,
      pattern: "[A-Za-z0-9]+",
      minlength: 8,
      maxlength: 16
    },
  },
  messages: {//錯誤訊息
    name: {
      required: "Please complete this field",
      pattern: "Please check your name is correct"
    },
    phone: {
      required: "Please complete this field",
      pattern: "Please check your phone number is correct"
    },
    email: {
      required: "Please complete this field",
      email: "Please check your email is correct",
    },
    password: {
      required: "Please complete this field",
      pattern: "Please check your phone number is correct",
      minlength: "Your password must be 8 - 16 characters",
      maxlength: "Your password must be 8 - 16 characters",
    }
  }
})