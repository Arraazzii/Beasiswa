<?php
//inisialisasi session
if (!isset($_SESSION)) {
  session_start();
}
require_once('lib/antiinjection.php'); 
require_once('lib/config.php'); 
require_once('lib/func_user.php'); 
if ((isset($_POST['submit'])) && ($_POST['submit']=='Login')) {
  $username=anti_injection($_POST['username']);
  $password=anti_injection($_POST['password']);
  $cek=cek_admin($username,md5($password));
    if ($cek==TRUE) {
      $user=GetUserByUsername($username);
      $row_user=mysql_fetch_assoc($user);
      $_SESSION['IDUser']=base64_encode($row_user['id_user']);
      $_SESSION['Username']=base64_encode($username);
      ?>
      <script language="javascript"> alert("Selamat Datang!");
        document.location.href='conten/index.php'; </script>
    <?php
    } else {
      ?>
      <script language="javascript"> alert("Maaf, Akses tidak Dikenal!");
        document.location.href='index.php'; </script>
    <?php
    }
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include_once 'includes/header.php'; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link href="" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/animate.min.css">
<link href="../bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="../bpi.css" rel="stylesheet" type="text/css" />
</head>

<body background="../img/b.jpg" style="background-size:cover">

<div style="margin-top:5%" >
<div class="container" style="width:500px" >
<div id="warnabiru">
  <div class="row" id="warnafontputih">
  
  <form method="post" name="login_form" class="form" role="form">
  
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="E-mail" required="required">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
    
  </div>
  <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value="Login">
            
          
                 </form>
                  
  </div>
</div>
<div> 
<center>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="../bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>