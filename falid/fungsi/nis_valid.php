<?php
//require_once ('PHPMailerAutoload.php');
require_once('../../admin/lib/config.php'); 
function validasi_nis($nis) {
        $sql="SELECT * FROM tb_universitas WHERE idkampus = '".$id."' ";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}
?>
