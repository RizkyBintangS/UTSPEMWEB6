<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Signup Seminar</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <h1 class="nav_logo">Halaman Login</h1>
      </nav>
    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container">
        <!-- Login From -->
        <div class="form login_form">
          <form action="" method="post">
            <h2>Login</h2>

            <div class="input_box">
              <input type="email" name="email" placeholder="Masukkan email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" name="password" placeholder="Masukkan password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <input type="submit" class="button" name="login" value="Login Now">

            <div class="login_signup">Don't have an account? <a href="signup.php">Signup</a></div>
          </form>
        </div>
      </div>
    </section>

    <script>
      const formOpenBtn = document.querySelector(".home"),
      formContainer = document.querySelector(".form_container"),
      pwShowHide = document.querySelectorAll(".pw_hide");

      formOpenBtn.addEventListener("click", () => home.classList.add("show"));
      formOpenBtn.addEventListener("click", () => home.classList.remove("show"));

      pwShowHide.forEach((icon) => {
        icon.addEventListener("click", () => {
          let getPwInput = icon.parentElement.querySelector("input");
          if (getPwInput.type === "password") {
            getPwInput.type = "text";
            icon.classList.replace("uil-eye-slash", "uil-eye");
          } else {
            getPwInput.type = "password";
            icon.classList.replace("uil-eye", "uil-eye-slash");
          }
        });
      });

      signupBtn.addEventListener("click", (e) => {
        e.preventDefault();
        formContainer.classList.add("active");
      });
      loginBtn.addEventListener("click", (e) => {
        e.preventDefault();
        formContainer.classList.remove("active");
      });
    </script>
    <?php

    @include 'config.php';
    $conn = mysqli_connect("localhost","root","","uts");


    session_start();

    if(isset($_POST['login'])){

      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $pass = md5($_POST['password']);

      $select = " SELECT * FROM login WHERE email = '$email' && password = '$pass' ";

      $result = mysqli_query($conn, $select);

      if (mysqli_num_rows($result) == 1) {
                  $_SESSION['email'] = $row['email'];
                  $_SESSION['password'] = $row['password'];
                  header("Location: /UTS/Dashboard/dashboard.php");
      }else{
                  echo "<script>alert('Email atau Password Salah')</script>";
      }
      
    };
    ?>
  </body>
</html>