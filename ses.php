<?php
require_once('admin/lib/config.php');
 
  if(isset($_GET['data'])){
  $data = $_GET['data'];
 }else{
  $data = '';
 }
$pecah = explode("-", $data);
  $queryall=mysql_query("SELECT * FROM daftar where email = '".$pecah[0]."' AND pass = '".$pecah[1]."' AND st= 'N'");
     $dataall=mysql_num_rows($queryall);
     if($dataall==0){
header('location : http://japfafoundation.org/');
     }else{
      session_start();
 
       $_SESSION['data'] = $data;
      header('location: input2.php');
     }
 
?>