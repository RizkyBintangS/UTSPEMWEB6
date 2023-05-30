<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Signup Seminar</title>
    <link rel="stylesheet" href="stylesg.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
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
        <!-- Signup From -->
        <div class="form signup_form">
          <form action="" method="post">
            <h2>Signup</h2>
            <div class="input_box">
              <input type="email" name="email" placeholder="Masukkan email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" name="password" placeholder="Masukkan password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password" name="cpassword" placeholder="Konfirmasi password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <input type="submit" class="button" name="signup" value="Signup Now">

            <div class="login_signup">Already have an account? <a href="index.php">Login</a></div>
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

    include 'config.php';

    $conn = mysqli_connect("localhost","root","","uts");

    if(isset($_POST['signup'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    
    $u = "SELECT email FROM login WHERE email='$email'";
    $uu = mysqli_query($conn, $u);
    
    if(mysqli_num_rows($uu) > 0){

        echo "<script>alert('Email Sudah Terdaftar')</script>";

    }else{

        if($pass != $cpass){
            echo "<script>alert('Password Tidak Sama')</script>";
        }else{
            $insert = "INSERT INTO login(email, password) VALUES('$email','$pass')";
            mysqli_query($conn, $insert);
            header('location:index.php');
        }
    }

    };
    ?>
  </body>
</html>