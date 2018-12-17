<?php  
include '../lib/config.php';

$no_bea = $_POST['no_bea'];
$nama_bea = $_POST['nama_bea'];
$tahun_beasiswa = $_POST['tahun_beasiswa'];
$jenis_bea = $_POST['jenis_bea'];
$total_dana_bea = $_POST['total_dana_bea'];
$jumlah_bea = $_POST['jumlah_bea'];
$ket_bea = $_POST['ket_bea'];


$query_update="UPDATE info_beasiswa SET  st = 'N' ";
mysql_query($query_update);

$query="UPDATE info_beasiswa SET nama_beasiswa='$nama_bea', tahun='$tahun_beasiswa', jenjang='$jenis_bea', total_dana='$total_dana_bea', jumlah_beasiswa='$jumlah_bea', keterangan='$ket_bea' , st = 'Y' where no_beasiswa = '$no_bea' ";
mysql_query($query);

$pengu_beasiswa = $_POST['pengu_beasiswa'];
$wtf1 = $_POST['wtf1'];
$seleksi_admin = $_POST['seleksi_admin'];
$spd2 = $_POST['spd2'];
$pengu_selad = $_POST['pengu_selad'];
$spd3 = $_POST['spd3'];
$seleksi_wawan = $_POST['seleksi_wawan'];
$spd4 = $_POST['spd4'];
$pengu_penbe = $_POST['pengu_penbe'];
$spd5 = $_POST['spd5'];
$daftar_ulang = $_POST['daftar_ulang'];
$spd6 = $_POST['spd6'];
$pene_dabe = $_POST['pene_dabe'];
$spd7 = $_POST['spd7'];

$query1="UPDATE jadwal_beasiswa SET pengumuman='$pengu_beasiswa', spd1='$wtf1',
seleksi='$seleksi_admin',
spd2='$spd2',
pengumuman_seleksi='$pengu_selad',
spd3='$spd3',
seleksi_wawancara='$seleksi_wawan',
spd4='$spd4',
pengumuman_penerima='$pengu_penbe',
spd5='$spd5',
daftar_ulang='$daftar_ulang',
spd6='$spd6',
penerimaan_dana='$pene_dabe',
spd7='$spd7' where no_beasiswa = '$no_bea'";
mysql_query($query1);


$bts_lulus = $_POST['bts_lulus'];
$batas_lulus_wawancara = $_POST['batas_lulus_wawancara'];

mysql_query("UPDATE nilai_minimum SET  seleksi_wawancara = '$batas_lulus_wawancara', seleksi_admin = '$bts_lulus' where no_beasiswa = '$no_bea'");


$nr_index0 = $_POST['nr_index0'];
$nr_spd0 = $_POST['nr_spd0'];
$nr_index1 = $_POST['nr_index1'];
$nr_spd1 = $_POST['nr_spd1'];
$nr_index2 = $_POST['nr_index2'];
$nr_spd2 = $_POST['nr_spd2'];
$nr_index3 = $_POST['nr_index3'];
$nr_spd3 = $_POST['nr_spd3'];

mysql_query("UPDATE admis_nilai_raport SET
index0='$nr_index0',
spd0='$nr_spd0',
index1='$nr_index1',
spd1='$nr_spd1',
index2='$nr_index2',
spd2='$nr_spd2',
index3='$nr_index3',
spd3='$nr_spd3' where no_beasiswa = '$no_bea'");


$jpalo_index0 = $_POST['jpalo_index0'];
$jpalo_spd0 = $_POST['jpalo_spd0'];
$jpalo_index1 = $_POST['jpalo_index1'];
$jpalo_spd1 = $_POST['jpalo_spd1'];
$jpalo_index2 = $_POST['jpalo_index2'];
$jpalo_spd2 = $_POST['jpalo_spd2'];
$jpalo_index3 = $_POST['jpalo_index3'];
$jpalo_spd3 = $_POST['jpalo_spd3'];

mysql_query("UPDATE jpa SET 
index0='$jpalo_index0',
spd0='$jpalo_spd0',
index1='$jpalo_index1',
spd1='$jpalo_spd1',
index2='$jpalo_index2',
spd2='$jpalo_spd2',
index3='$jpalo_index3',
spd3='$jpalo_spd3' where no_beasiswa = '$no_bea'");

$jpakec_index0 = $_POST['jpakec_index0'];
$jpakec_spd0 = $_POST['jpakec_spd0'];
$jpakec_index1 = $_POST['jpakec_index1'];
$jpakec_spd1 = $_POST['jpakec_spd1'];
$jpakec_index2 = $_POST['jpakec_index2'];
$jpakec_spd2 = $_POST['jpakec_spd2'];
$jpakec_index3 = $_POST['jpakec_index3'];
$jpakec_spd3 = $_POST['jpakec_spd3'];

mysql_query("UPDATE jpna SET 
index0='$jpakec_index0',
spd0='$jpakec_spd0',
index1='$jpakec_index1',
spd1='$jpakec_spd1',
index2='$jpakec_index2',
spd2='$jpakec_spd2',
index3='$jpakec_index3',
spd3='$jpakec_spd3' where no_beasiswa = '$no_bea'");




$ni_index0 = $_POST['ni_index0'];
$ni_spd0 = $_POST['ni_spd0'];
$ni_index1 = $_POST['ni_index1'];
$ni_spd1 = $_POST['ni_spd1'];
$ni_index2 = $_POST['ni_index2'];
$ni_spd2 = $_POST['ni_spd2'];
$ni_index3 = $_POST['ni_index3'];
$ni_spd3 = $_POST['ni_spd3'];

mysql_query("UPDATE admis_nilai_ket SET  
index0='$ni_index0',
spd0='$ni_spd0',
index1='$ni_index1',
spd1='$ni_spd1',
index2='$ni_index2',
spd2='$ni_spd2',
index3='$ni_index3',
spd3='$ni_spd3' where no_beasiswa = '$no_bea'");

/**/

$kt1_index0 = $_POST['kt1_index0'];
$kt1_spd0 = $_POST['kt1_spd0'];
$kt1_index1 = $_POST['kt1_index1'];
$kt1_spd1 = $_POST['kt1_spd1'];
$kt1_index2 = $_POST['kt1_index2'];
$kt1_spd2 = $_POST['kt1_spd2'];
$kt1_index3 = $_POST['kt1_index3'];
$kt1_spd3 = $_POST['kt1_spd3'];

mysql_query("UPDATE wawan_nilkat1 SET  
index0='$kt1_index0',
spd0='$kt1_spd0',
index1='$kt1_index1',
spd1='$kt1_spd1',
index2='$kt1_index2',
spd2='$kt1_spd2',
index3='$kt1_index3',
spd3='$kt1_spd3' where no_beasiswa = '$no_bea' ");

$kt2_index0 = $_POST['kt2_index0'];
$kt2_spd0 = $_POST['kt2_spd0'];
$kt2_index1 = $_POST['kt2_index1'];
$kt2_spd1 = $_POST['kt2_spd1'];
$kt2_index2 = $_POST['kt2_index2'];
$kt2_spd2 = $_POST['kt2_spd2'];
$kt2_index3 = $_POST['kt2_index3'];
$kt2_spd3 = $_POST['kt2_spd3'];

mysql_query(" UPDATE wawan_nilkat2 SET  
index0='$kt2_index0',
spd0='$kt2_spd0',
index1='$kt2_index1',
spd1='$kt2_spd1',
index2='$kt2_index2',
spd2='$kt2_spd2',
index3='$kt2_index3',
spd3='$kt2_spd3' where no_beasiswa = '$no_bea' ");

$kt3_index0 = $_POST['kt3_index0'];
$kt3_spd0 = $_POST['kt3_spd0'];
$kt3_index1 = $_POST['kt3_index1'];
$kt3_spd1 = $_POST['kt3_spd1'];
$kt3_index2 = $_POST['kt3_index2'];
$kt3_spd2 = $_POST['kt3_spd2'];
$kt3_index3 = $_POST['kt3_index3'];
$kt3_spd3 = $_POST['kt3_spd3'];
mysql_query("UPDATE wawan_nilkat3 SET  
index0='$kt3_index0',
spd0='$kt3_spd0',
index1='$kt3_index1',
spd1='$kt3_spd1',
index2='$kt3_index2',
spd2='$kt3_spd2',
index3='$kt3_index3',
spd3='$kt3_spd3' where no_beasiswa = '$no_bea'");

$kt4_index0 = $_POST['kt4_index0'];
$kt4_spd0 = $_POST['kt4_spd0'];
$kt4_index1 = $_POST['kt4_index1'];
$kt4_spd1 = $_POST['kt4_spd1'];
$kt4_index2 = $_POST['kt4_index2'];
$kt4_spd2 = $_POST['kt4_spd2'];
$kt4_index3 = $_POST['kt4_index3'];
$kt4_spd3 = $_POST['kt4_spd3'];
mysql_query("UPDATE wawan_nilkat4 SET  
index0='$kt4_index0',
spd0='$kt4_spd0',
index1='$kt4_index1',
spd1='$kt4_spd1',
index2='$kt4_index2',
spd2='$kt4_spd2',
index3='$kt4_index3',
spd3='$kt4_spd3'");

$kt5_index0 = $_POST['kt5_index0'];
$kt5_spd0 = $_POST['kt5_spd0'];
$kt5_index1 = $_POST['kt5_index1'];
$kt5_spd1 = $_POST['kt5_spd1'];
$kt5_index2 = $_POST['kt5_index2'];
$kt5_spd2 = $_POST['kt5_spd2'];
$kt5_index3 = $_POST['kt5_index3'];
$kt5_spd3 = $_POST['kt5_spd3'];
mysql_query("UPDATE wawan_nilkat5 SET 
index0='$kt5_index0',
spd0='$kt5_spd0',
index1='$kt5_index1',
spd1='$kt5_spd1',
index2='$kt5_index2',
spd2='$kt5_spd2',
index3='$kt5_index3',
spd3='$kt5_spd3' where no_beasiswa = '$no_bea' ");

?>

<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Proses ubah data')
    window.location.href='index.php?conten=data_bea';
    </SCRIPT>");