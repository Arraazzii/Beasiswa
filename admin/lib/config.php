<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$hostname= "localhost";
$database = "bpi";
$username = "root";
$password = "";
$config = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database);
//home URL
$url = "http://localhost/";
?>
