<?php

function cek_admin($user,$pass) {
	$qry="SELECT * FROM user WHERE username='$user' AND password='$pass'";
	$cek=mysql_query($qry) or die(msyql_error());
	$num_cek=mysql_num_rows($cek);
	if ($num_cek>0) {
		return TRUE;
	} else {
		return FALSE;
	}
}

function UpdateUser($id,$username,$password,$email,$pic) {
	$qry="UPDATE user SET username='$username', password='$password', email='$email', pic='$pic' WHERE id_user='$id'";
	$data=mysql_query($qry) or die(msyql_error());
}

function UpdateUserNoImg($id,$username,$password,$email) {
	$qry="UPDATE user SET username='$username', password='$password', email='$email' WHERE id_user='$id'";
	$data=mysql_query($qry) or die(msyql_error());
}

function GetUserByUsername($username){
	$qry="SELECT * FROM user WHERE username='$username'";
	$data=mysql_query($qry) or die(msyql_error());
	return $data;
}

function GetUserByID($id){
	$qry="SELECT * FROM user WHERE id_user='$id'";
	$data=mysql_query($qry) or die(msyql_error());
	return $data;
}
?>