<?php
require_once('../admin/lib/config.php'); 
require_once('../mail/kirim.php'); 
$nama=$_POST['nama'];
$tempat=$_POST['tempat'];
//$tgl=$_POST['tgl'];
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
if(isset($_POST['tgl'])){
  $tgl = $_POST['tgl'];
}else{
  $tgl = "";
}

$sql="INSERT INTO daftar VALUES ('$nama','$tempat','$tgl','$email','$pass1')";
$qry=mysql_query($sql) or die(mysql_error());

kirim($email);
?>
<script language="javascript"> 
	document.location.href='../index.html';
</script><?php  