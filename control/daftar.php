<?php
//require_once ('PHPMailerAutoload.php');
require_once('../model/modal_daftar.php'); 
$nama=$_POST['nama'];
$tempat=$_POST['tempat'];
$tgl=$_POST['tgl'];
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];


date_default_timezone_set("Asia/Jakarta");
$tanggal = date("Y-m-d");
$waktu = date("h:i:sa");

$data = $email."-".$pass1;
/*$mail = new PHPMailer;
$mail->isSMTP();*/
//$mail->SMTPDebug = 1;
// ssl ora onok
// $mail->SMTPSecure = 'ssl';
//$mail->Debugoutput = 'html';
//$mail->Host = "japfafoundation.org";
// $mail->Port = 465;
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = "beasiswa@japfafoundation.org";
$mail->Password = "langitbiru";
$mail->setFrom('beasiswa@japfafoundation.org','japfafoundation.org');
//tujuan
$mail->addAddress($email,'User1');
$mail->Subject = "japfafoundation";
$mail->msgHTML("<b> Klik link berikut untuk mengisi formulir pendaftaran beasiswa <a href='http://japfafoundation.org/beasiswa/input.php?data=$data'>link form beasiswa</a></b>");
if (!$mail->send()) { ?>
    <script language="javascript"> 
    alert("Pengiriman gagal;");
	document.location.href="../index.html";
</script>
<?php  } else { */

$sql_daftar="INSERT INTO daftar VALUES ('$nama','$tempat','$tgl','$email','$pass1','N','$tanggal','$waktu')";
$qry_daftar=mysql_query($sql_daftar) or die(mysql_error());
	?>
    <script language="javascript"> 
	document.location.href="../index.html";
</script><?php  
  //}
?>
