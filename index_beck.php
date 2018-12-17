<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include_once 'includes/header.php'; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/animate.min.css">
<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="bpi.css" rel="stylesheet" type="text/css" />
</head>

<body background="img/b.jpg" style="background-size:cover">

<div class="glyphicon-align-center" style="margin-top:5%" >
<div class="container" style="width:500px" >
<div id="warnabiru">
  <div class="row" id="warnafontputih">
  
  <form action="includes/process_login.php" method="post" name="login_form" class="form" role="form">
  
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
    
  </div>
  <class="nav"><input name="LOGIN" onclick="formhash(this.form, this.form.password);" type="button" class="btn btn-primary btn-lg btn-block wow zoomIn" id="warnaabu2" value="LOGIN" /></a>
            
          
                 </form>
                  
  </div>
</div>
<div> 
<center>
<?php
                        if (isset($_GET['error'])) {
                           /*echo "<script>alert('Login Gagal!')</script>";*/
               ?>
                           <div class="alert alert-warning alert-dismissible wow shake" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Peringatan!</strong> Pastikan E-mail & Password anda sudah benar.
</div>
                           <?php
                        }
                    ?>
<?php
                    if (login_check($mysqli) == true) {
                        echo "<p class='text-lead'> Anda Log $logged  sebagai <strong>" .htmlentities($_SESSION['username']). "</strong></p>" ;
            ?>
                        <p> Apakah Anda Ingin Kembali Ke Aplikasi? Silahkan Klik!</p>
                        <a href="user/index.php"><input type="button" class="btn btn-primary btn-md wow fadeInDownBig" value="Home"/> </a>
                        <?php
                        echo "<p>Atau Apakah Anda Ingin Pindah Akun? Silahkan! <a href='includes/logout.php'>Log out</a>.</p>";
                    } else {
                        echo "<br>";
                        echo '<p>Lupa Pasword Silahkan Hubungi<br />Japfa Foundation<br /> WISMA MILLENIA lt.7<br /> Jl. M.T. Haryono Kav. 16, Jakarta 12810, Indonesia<br /> Telp. (021) 285 45680 (Hunting)</p>';                     
                    }
                    ?> 
</center>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>