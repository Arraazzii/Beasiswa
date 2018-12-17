<?php
require_once ('PHPMailerAutoload.php');
/*function kirim($email) { */
$mail = new PHPMailer;
$mail->isSMTP();
//$mail->SMTPDebug = 1;
$mail->SMTPSecure = 'ssl';
$mail->Debugoutput = 'html';
$mail->Host = "japfafoundation.org";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "beasiswa@japfafoundation.org";
$mail->Password = "langitbiru";
$mail->setFrom('beasiswa@japfafoundation.org','email.org');
//tujuan
$mail->addAddress('arfanprayogo@gmail.com','User1');
$mail->addAddress('bandungbambang9@gmail.com','User2');
$mail->Subject = "coba kirim email dengan PHP";
$mail->msgHTML('<h1>Testing kirim email</h1><p>Pesan dengan format HTML</p>
    <table border=2><tr><td>Kolom 1</td><td>Kolom 2</td></tr><tr><td>Isi 1</td><td>Isi 2</td></tr></table>');
if (!$mail->send()) {
    echo "Email gagal dikirim";
} else {
    echo "Email terkirim";
}
/*}*/
?>
