<?php
require_once('../admin/lib/config.php'); 
//data siswa
$nama=$_POST['nama'];
$nisn=$_POST['nisn'];
$bidang=$_POST['bidang'];
$bidang_studi=$_POST['bidang_studi'];
$kelas=$_POST['kelas'];
$tempat_la=$_POST['tempat_la'];
$tgl_la=$_POST['tgl_la'];
$alamat=$_POST['alamat'];
$kec=$_POST['kec'];
$kab=$_POST['kab'];
$prov=$_POST['prov'];
$nama_reg=$_POST['nama_reg'];
$bank=$_POST['bank'];
$no_reg=$_POST['no_reg'];
$cabang=$_POST['cabang'];

//data sekolah
$nama_sek=$_POST['nama_sek'];
$npsn=$_POST['npsn'];
$alamat_sek=$_POST['alamat_sek'];
$kec_sek=$_POST['kec_sek'];
$kab_sek=$_POST['kab_sek'];
$prov_sek=$_POST['prov_sek'];
$pos_sek=$_POST['pos_sek'];
$telp_sek=$_POST['telp_sek'];
$fax_sek=$_POST['fax_sek'];
$email_sek=$_POST['email_sek'];

//data ortu
$nama_ortu=$_POST['nama_ortu'];
$alamat_ortu=$_POST['alamat_ortu'];
$peker_ortu=$_POST['peker_ortu'];
$kec_ortu=$_POST['kec_ortu'];
$kab_ortu=$_POST['kab_ortu'];
$prov_ortu=$_POST['prov_ortu'];
$telp_ortu=$_POST['telp_ortu'];

//esai
/*$esai=$_POST['esai'];*/
$data_email = $_POST['data_email'];
$pecah_data = explode('-', $data_email);

date_default_timezone_set("Asia/Jakarta");
$tanggal = date("Y-m-d");
$waktu = date("h:i:sa");



$sql="INSERT INTO data_pendaftar VALUES ('$nisn','$nama','$bidang','$bidang_studi','$kelas','$tempat_la','$tgl_la','$alamat','$kec','$kab','$prov','$nama_reg','$no_reg','$bank','$cabang','foto','$esai', '".$pecah_data[0]."','N','$tanggal','$waktu')";
$qry=mysql_query($sql) or die(mysql_error());


$sql_ortu="INSERT INTO data_ortu VALUES ('$nisn','$nama_ortu','$peker_ortu','alamat_ortu','$kec_ortu','$kab_ortu','$prov_ortu','$telp_ortu')";
$qry_ortu=mysql_query($sql_ortu) or die(mysql_error());

$sql_sekolah="INSERT INTO data_sekolah VALUES ('$nisn','$nama_sek','$npsn','alamat_sek','$kec_sek','$kab_sek','$prov_sek','$pos_sek','$telp_sek','$fax_sek','$email_sek')";
$qry_sekolah=mysql_query($sql_sekolah) or die(mysql_error());

$sql_daftar="UPDATE daftar SET st = 'Y' WHERE email = '".$pecah_data[0]."' AND pass = '".$pecah_data[1]."'   ";
$qry_daftar=mysql_query($sql_daftar) or die(mysql_error());

//kirim($email);
?>
<script language="javascript"> 
	document.location.href='../index.html';
</script><?php  