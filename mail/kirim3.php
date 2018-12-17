<?php
require_once ('PHPMailerAutoload.php');
function kirim($email1=NULL) { 
$mail = new PHPMailer;
$mail->isSMTP();
//$mail->SMTPDebug = 1;
$mail->SMTPSecure = 'ssl';
//$mail->Debugoutput = 'html';
$mail->Host = "japfafoundation.org";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "beasiswa@japfafoundation.org";
$mail->Password = "langitbiru123456";
$mail->setFrom('beasiswa@japfafoundation.org','capek');
//tujuan
$mail->addAddress($email,'User1');
$mail->Subject = "coba kirim email dengan PHP";
$mail->msgHTML("<b>Klik link berikut untuk mengisi formulir pendaftaran beasiswa <a href='http://japfafoundation.org/beasiswa/input.php'>link form beasiswa</a></b>");
if (!$mail->send()) {
    return FALSE;
} else {
    return true;
}
}
?>
