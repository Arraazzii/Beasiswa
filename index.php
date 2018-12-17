<!DOCTYPE html>
<html lang="en">
<?php
require_once('admin/lib/antiinjection.php'); 
require_once('admin/lib/config.php'); 
require_once('admin/lib/func_user.php'); 
if ((isset($_POST['submit'])) && ($_POST['submit']=='Formulir')) {
  $username=anti_injection($_POST['username']);
  $password=anti_injection($_POST['password']);
  $data = $username."-".$password;
  $cek=cek_email($username,$password);
    if ($cek==TRUE) {
      header("location:ses.php?data=".$data."");
     } else {
      ?>
    <script language="javascript">
    alert("Gagal!");
    document.location.href = 'register_from.php';
    </script>
    <?php
    }
  }
?>

        <head>
            <title>Login V3</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/util.css">
            <link rel="stylesheet" type="text/css" href="css/main.css">
            <!--===============================================================================================-->
        </head>

        <body>
            <div class="row">
                <div class="limiter">
                    <div class="container-login100" style="background-image: url('images/bg-03.jpg');">
                        <div class="wrap-login100 col-lg-3" style="margin-top: -10px;">
                            <form class="login100-form validate-form" method="post" name="login_form" action="register_from.php" role="form">
                                <span class="login100-form-logo">
                            <img src="img/Yayasan-japfa2.png">
                        </span>
                                <br><br>
                                <div class="wrap-input100 validate-input" data-validate="Enter username">
                                    <input class="input100" type="text" name="username" id="username" placeholder="Username">
                                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100" type="password" name="password" id="password" placeholder="Password">
                                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                </div>
                                <div class="contact100-form-checkbox">
                                    <div class="txt1">
                                        Belum Punya Akun?
                                        <a class="txt1" href="register_from.php">
                              &nbspRegister
            </a></div>
                                </div>
                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn" type="submit" name="submit">
                                        Login
                                    </button>
                                </div>
                                <div class="text-center p-t-90">
                                    <a class="txt1" href="#">

            </a>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-8"></div>
                    </div>
                </div>
            </div>
            <div id="dropDownSelect1"></div>
            <!--===============================================================================================-->
            <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
            <script src="vendor/animsition/js/animsition.min.js"></script>
            <!--===============================================================================================-->
            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
            <script src="vendor/select2/select2.min.js"></script>
            <!--===============================================================================================-->
            <script src="vendor/daterangepicker/moment.min.js"></script>
            <script src="vendor/daterangepicker/daterangepicker.js"></script>
            <!--===============================================================================================-->
            <script src="vendor/countdowntime/countdowntime.js"></script>
            <!--===============================================================================================-->
            <script src="js/main.js"></script>
        </body>

</html>