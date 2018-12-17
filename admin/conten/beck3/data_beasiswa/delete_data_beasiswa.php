<?php 
include '../lib/config.php';
$id = $_GET['id'];

mysql_query("DELETE FROM info_beasiswa where no_beasiswa= '$id'");
mysql_query("DELETE FROM jadwal_beasiswa where no_beasiswa= '$id'");
mysql_query("DELETE FROM admis_nilai_ket where no_beasiswa= '$id'");
mysql_query("DELETE FROM admis_nilai_raport where no_beasiswa= '$id'");
mysql_query("DELETE FROM jpa where no_beasiswa= '$id'");
mysql_query("DELETE FROM jpna where no_beasiswa= '$id'");
mysql_query("DELETE FROM nilai_minimum where no_beasiswa= '$id'");
mysql_query("DELETE FROM wawan_nilkat1 where no_beasiswa= '$id'");
mysql_query("DELETE FROM wawan_nilkat2 where no_beasiswa= '$id'");
mysql_query("DELETE FROM wawan_nilkat3 where no_beasiswa= '$id'");
mysql_query("DELETE FROM wawan_nilkat4 where no_beasiswa= '$id'");
mysql_query("DELETE FROM wawan_nilkat5 where no_beasiswa= '$id'");
 ?>
 <script type="text/javascript">
 	window.alert("Data berhasil dihapus");
    window.location.href='index.php?conten=data_bea';
 </script>