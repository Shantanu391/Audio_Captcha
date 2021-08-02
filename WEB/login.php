<?php
if (isset($_POST['submit'])) {
  $username= $_POST['username'];
  $password= $_POST['password'];
  header("Location: audio.html");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="newcss.css">
  </head>
  <body>
    <div class="limiter">
      <div class="container">
        <div class="wrap">

          <div class="login-pic">
            <img src="img-01.png" alt="Loading...">
          </div>

          <form action="">
            ...
            <p class="thepot">
              <input type="text" name="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
            </p>
            ...
          </form>

            <form method="post" action="login.php" class="login-form">
              <span class="login-form-title">
               LOGIN
              </span>

              <div class="wrap-input">
                <input class="input" type="text" name="username" value="username" id="username" placeholder="Username" required/>
                <span class="symbol">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
              </div>
              <br>

              <div class="wrap-input">
                <input class="input" type="password" name="password" value="username" id="password" placeholder="Password" required/>
                <span class="symbol">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
              </div>
              <br>

              <!--<div class="container-btn">
                <button type="button" class="btn btn-block btn-primary" onclick="window.location.href='audio.html';">
                  Play Audio
                </button>

              </div>-->
              <div class="container-form-btn">
                <button class="login-form-btn" name = "submit">
                  Login
                </button>

            </form>

        </div>
      </div>
    </div>
  </body>
</html>
