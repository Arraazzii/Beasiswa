<?php 
 require_once('../config/config.php'); 
class daftar{
	function proses_input(){
		$data = mysql_query("select * from user");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
}