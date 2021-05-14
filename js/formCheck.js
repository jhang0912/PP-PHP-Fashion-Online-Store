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
    email_register: {
      required: true,
      email: true,
    },
    password_register: {
      required: true,
      pattern: "^[A-Za-z0-9]{8,16}$",
    },
  },
  messages: {//錯誤訊息
    name: "Please complete this field",
    phone: {
      required: "Please complete this field",
      pattern: "Please check your phone number is correct"
    },
    email_register: {
      required: "Please complete this field",
      email: "Please check your email is correct",
    },
    password_register: {
      required: "Please complete this field",
      pattern: "Please use a stronger password. It might be helpful to think of a memorable word or phrase."
    }
  }
})