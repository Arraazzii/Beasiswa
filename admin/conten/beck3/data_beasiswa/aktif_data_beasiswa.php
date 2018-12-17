<?php 
include '../lib/config.php';
$id = $_GET['id'];

mysql_query("UPDATE info_beasiswa set  st = 'N'");
mysql_query("UPDATE info_beasiswa set  st = 'Y' WHERE no_beasiswa= '$id'");
 ?>
 <script type="text/javascript">
 	window.alert("Data berhasil diaktifkan");
    window.location.href='index.php?conten=data_bea';
 </script>