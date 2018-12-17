<?php
require_once ('PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->isSMTP();
//$mail->SMTPDebug = 1;
$mail->SMTPSecure = 'ssl';
$mail->Debugoutput = 'html';
$mail->Host = "japfafoundation.org";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "arfan@japfafoundation.org";
$mail->Password = "arfan123456";
$mail->setFrom('arfan@japfafoundation.org','Japfafoundation.org');
//tujuan
$mail->addAddress('arfanprayogo@gmail.com','User1');
$mail->addAddress('arfanprayogo@gmail.com','User2');
$mail->Subject = "coba kirim email dengan PHP";
$mail->msgHTML('tes kirim');
if (!$mail->send()) {
    echo "Email gagal dikirim";
} else {
    echo "Email terkirim";
}
?>
