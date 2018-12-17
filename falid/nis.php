<?php
require_once('fungsi/nis_valid.php'); 

if(isset($_GET['nis'])){
		$nis = $_GET['nis'];
	}else{
		$nis='';
	}
	$query=validasi_nis($nis);
	while($result = mysql_fetch_assoc($query)){
		$arrayjson[] = $result;
	}
	echo json_encode($arrayjson);
  //}
?>
