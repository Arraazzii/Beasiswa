<?php
require_once('config.php');

function GetUserByID($id){
	$qry="SELECT * FROM user WHERE id_user='$id'";
	$data=mysql_query($qry) or die(msyql_error());
	return $data;
}

?>