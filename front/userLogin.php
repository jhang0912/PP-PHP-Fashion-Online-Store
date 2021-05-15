<div class="signin_register d-flex justify-content-center align-items-start animate__animated animate__fadeIn p-3">
  <div class="login-con border bg-light shadow m-2 p-4">
    <div class="sign_in container text-start h5 m-0 p-3">Sign In</div>
    <div class="sign_in_text container text-start p-3">Please enter your email and password below to access your account</div>
    <form action="./api/" method="post">
      <div class="form_con container-fluid d-flex flex-wrap justify-content-center align-item-center p-3">
        <div class="Email container mb-4 p-0">
          <label for="signIn_email" class="h6 m-0">Email</label>
          <input type="email" name="signIn_email" class="form-control border-secondary rounded-0" id="signIn_email" required>
        </div>

        <div class="password container mb-4 p-0">
          <label for="signIn_password" class="h6 m-0">Password</label>
          <input type="signIn_password" name="pass" class="form-control border-secondary rounded-0" id="signIn_password" required>
        </div>

        <div class="submit container mt-4 p-0">
          <input type="submit" class="sub_button w-50 btn btn-lg rounded-0 float-end text-light" value="Sign In">
        </div>
      </div>
    </form>
  </div>


  <div class="sign_up-con border bg-light shadow m-2 p-4">
    <div class="sign_up container text-start h5 m-0 p-3">REGISTER</div>
    <div class="sign_up_text container text-start p-3">Please register below to create an account</div>
    <form id="register" action="./api/register.php" method="post">
      <div class="form_con container-fluid d-flex flex-wrap justify-content-center align-item-center p-3">
        <div class="Email container mb-4 p-0">
          <label for="title" class="h6 m-0">Title</label>
          <select class="form-select border-secondary rounded-0" aria-label="Default select example" id="title" name="title">
            <option value="Mr.">Mr.</option>
            <option value="Ms.">Ms.</option>
          </select>
        </div>

        <div class="name container mb-4 p-0">
          <label for="name" class="h6 m-0">Name&ensp;<span class="rule">(letters and chinese)</span></label>
          <input type="text" name="name" class="form-control border-secondary rounded-0" id="name" required>
        </div>

        <div class="phone container mb-4 p-0">
          <label for="phone" class="h6 m-0">Phone&ensp;<span class="rule">(numbers)</span></label>
          <input type="text" name="phone" class="form-control border-secondary rounded-0" id="phone" required>
        </div>

        <div class="Email container mb-4 p-0">
          <label for="email" class="h6 m-0">Email</label>
          <input type="email" name="email" class="form-control border-secondary rounded-0" id="email" required>
        </div>

        <div class="password container mb-4 p-0">
          <label for="password" class="h6 m-0">Password&ensp;<span class="rule">(letters and numbers)</span></label>
          <input type="password" name="password" class="form-control border-secondary rounded-0" id="password" required>
        </div>
        <div class="submit container mt-4 p-0">
          <input type="submit" class="sub_button w-50 btn btn-lg rounded-0 float-end text-light" value="Register">
        </div>
      </div>
    </form>
  </div>
</div>