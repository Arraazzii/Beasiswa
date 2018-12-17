<?php  
include '../lib/config.php';

$no_bea = $_POST['no_bea'];
$nama_bea = $_POST['nama_bea'];
$tahun_beasiswa = $_POST['tahun_beasiswa'];
$jenis_bea = $_POST['jenis_bea'];
$total_dana_bea = $_POST['total_dana_bea'];
$jumlah_bea = $_POST['jumlah_bea'];
$ket_bea = $_POST['ket_bea'];


// echo "$no_bea";
// echo "$nama_bea";
// echo "$tahun_beasiswa";
// echo "$jenis_bea";
// echo "$total_dana_bea";
// echo "$jumlah_bea";
// echo "$ket_bea";

$query="INSERT INTO info_beasiswa SET no_beasiswa='$no_bea', nama_beasiswa='$nama_bea', tahun='$tahun_beasiswa', jenjang='$jenis_bea', total_dana='$total_dana_bea', jumlah_beasiswa='$jumlah_bea', keterangan='$ket_bea' ";
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

$query1="INSERT INTO jadwal_beasiswa SET no_beasiswa='$no_bea',pengumuman='$pengu_beasiswa', spd1='$wtf1',
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
spd7='$spd7'";
mysql_query($query1);


$bts_lulus = $_POST['bts_lulus'];
$batas_lulus_wawancara = $_POST['batas_lulus_wawancara'];

// echo "$bts_lulus";

mysql_query("

INSERT INTO nilai_minimum SET no_beasiswa = '$no_bea', seleksi_wawancara = '$batas_lulus_wawancara', seleksi_admin = '$bts_lulus'");


$nr_index0 = $_POST['nr_index0'];
$nr_spd0 = $_POST['nr_spd0'];
$nr_index1 = $_POST['nr_index1'];
$nr_spd1 = $_POST['nr_spd1'];
$nr_index2 = $_POST['nr_index2'];
$nr_spd2 = $_POST['nr_spd2'];
$nr_index3 = $_POST['nr_index3'];
$nr_spd3 = $_POST['nr_spd3'];

mysql_query("

INSERT INTO admis_nilai_raport SET no_beasiswa = '$no_bea', 
index0='$nr_index0',
spd0='$nr_spd0',
index1='$nr_index1',
spd1='$nr_spd1',
index2='$nr_index2',
spd2='$nr_spd2',
index3='$nr_index3',
spd3='$nr_spd3'

");

$jpalo_index0 = $_POST['jpalo_index0'];
$jpalo_spd0 = $_POST['jpalo_spd0'];
$jpalo_index1 = $_POST['jpalo_index1'];
$jpalo_spd1 = $_POST['jpalo_spd1'];
$jpalo_index2 = $_POST['jpalo_index2'];
$jpalo_spd2 = $_POST['jpalo_spd2'];
$jpalo_index3 = $_POST['jpalo_index3'];
$jpalo_spd3 = $_POST['jpalo_spd3'];

mysql_query("

INSERT INTO jpa_lokal SET no_beasiswa = '$no_bea', 
index0='$jpalo_index0',
spd0='$jpalo_spd0',
index1='$jpalo_index1',
spd1='$jpalo_spd1',
index2='$jpalo_index2',
spd2='$jpalo_spd2',
index3='$jpalo_index3',
spd3='$jpalo_spd3'
");

$jpakec_index0 = $_POST['jpakec_index0'];
$jpakec_spd0 = $_POST['jpakec_spd0'];
$jpakec_index1 = $_POST['jpakec_index1'];
$jpakec_spd1 = $_POST['jpakec_spd1'];
$jpakec_index2 = $_POST['jpakec_index2'];
$jpakec_spd2 = $_POST['jpakec_spd2'];
$jpakec_index3 = $_POST['jpakec_index3'];
$jpakec_spd3 = $_POST['jpakec_spd3'];

mysql_query("

INSERT INTO jpa_daerah SET no_beasiswa = '$no_bea', 
index0='$jpakec_index0',
spd0='$jpakec_spd0',
index1='$jpakec_index1',
spd1='$jpakec_spd1',
index2='$jpakec_index2',
spd2='$jpakec_spd2',
index3='$jpakec_index3',
spd3='$jpakec_spd3'
");

$jpanas_index0 = $_POST['jpanas_index0'];
$jpanas_spd0 = $_POST['jpanas_spd0'];
$jpanas_index1 = $_POST['jpanas_index1'];
$jpanas_spd1 = $_POST['jpanas_spd1'];
$jpanas_index2 = $_POST['jpanas_index2'];
$jpanas_spd2 = $_POST['jpanas_spd2'];
$jpanas_index3 = $_POST['jpanas_index3'];
$jpanas_spd3 = $_POST['jpanas_spd3'];

mysql_query("

INSERT INTO jpa_nas SET no_beasiswa = '$no_bea', 
index0='$jpanas_index0',
spd0='$jpanas_spd0',
index1='$jpanas_index1',
spd1='$jpanas_spd1',
index2='$jpanas_index2',
spd2='$jpanas_spd2',
index3='$jpanas_index3',
spd3='$jpanas_spd3'
");

$jpaint_index0 = $_POST['jpaint_index0'];
$jpaint_spd0 = $_POST['jpaint_spd0'];
$jpaint_index1 = $_POST['jpaint_index1'];
$jpaint_spd1 = $_POST['jpaint_spd1'];
$jpaint_index2 = $_POST['jpaint_index2'];
$jpaint_spd2 = $_POST['jpaint_spd2'];
$jpaint_index3 = $_POST['jpaint_index3'];
$jpaint_spd3 = $_POST['jpaint_spd3'];

mysql_query("

INSERT INTO jpa_inter SET no_beasiswa = '$no_bea', 
index0='$jpaint_index0',
spd0='$jpaint_spd0',
index1='$jpaint_index1',
spd1='$jpaint_spd1',
index2='$jpaint_index2',
spd2='$jpaint_spd2',
index3='$jpaint_index3',
spd3='$jpaint_spd3'
");

$jpnalo_index0 = $_POST['jpnalo_index0'];
$jpnalo_spd0 = $_POST['jpnalo_spd0'];
$jpnalo_index1 = $_POST['jpnalo_index1'];
$jpnalo_spd1 = $_POST['jpnalo_spd1'];
$jpnalo_index2 = $_POST['jpnalo_index2'];
$jpnalo_spd2 = $_POST['jpnalo_spd2'];
$jpnalo_index3 = $_POST['jpnalo_index3'];
$jpnalo_spd3 = $_POST['jpnalo_spd3'];

mysql_query("

INSERT INTO jpna_lokal SET no_beasiswa = '$no_bea', 
index0='$jpnalo_index0',
spd0='$jpnalo_spd0',
index1='$jpnalo_index1',
spd1='$jpnalo_spd1',
index2='$jpnalo_index2',
spd2='$jpnalo_spd2',
index3='$jpnalo_index3',
spd3='$jpnalo_spd3'
");

$jpnakec_index0 = $_POST['jpnakec_index0'];
$jpnakec_spd0 = $_POST['jpnakec_spd0'];
$jpnakec_index1 = $_POST['jpnakec_index1'];
$jpnakec_spd1 = $_POST['jpnakec_spd1'];
$jpnakec_index2 = $_POST['jpnakec_index2'];
$jpnakec_spd2 = $_POST['jpnakec_spd2'];
$jpnakec_index3 = $_POST['jpnakec_index3'];
$jpnakec_spd3 = $_POST['jpnakec_spd3'];

mysql_query("

INSERT INTO jpna_daerah SET no_beasiswa = '$no_bea', 
index0='$jpnakec_index0',
spd0='$jpnakec_spd0',
index1='$jpnakec_index1',
spd1='$jpnakec_spd1',
index2='$jpnakec_index2',
spd2='$jpnakec_spd2',
index3='$jpnakec_index3',
spd3='$jpnakec_spd3'
");

$jpnanas_index0 = $_POST['jpnanas_index0'];
$jpnanas_spd0 = $_POST['jpnanas_spd0'];
$jpnanas_index1 = $_POST['jpnanas_index1'];
$jpnanas_spd1 = $_POST['jpnanas_spd1'];
$jpnanas_index2 = $_POST['jpnanas_index2'];
$jpnanas_spd2 = $_POST['jpnanas_spd2'];
$jpnanas_index3 = $_POST['jpnanas_index3'];
$jpnanas_spd3 = $_POST['jpnanas_spd3'];

mysql_query("

INSERT INTO jpna_nas SET no_beasiswa = '$no_bea', 
index0='$jpnanas_index0',
spd0='$jpnanas_spd0',
index1='$jpnanas_index1',
spd1='$jpnanas_spd1',
index2='$jpnanas_index2',
spd2='$jpnanas_spd2',
index3='$jpnanas_index3',
spd3='$jpnanas_spd3'
");

$jpnaint_index0 = $_POST['jpnaint_index0'];
$jpnaint_spd0 = $_POST['jpnaint_spd0'];
$jpnaint_index1 = $_POST['jpnaint_index1'];
$jpnaint_spd1 = $_POST['jpnaint_spd1'];
$jpnaint_index2 = $_POST['jpnaint_index2'];
$jpnaint_spd2 = $_POST['jpnaint_spd2'];
$jpnaint_index3 = $_POST['jpnaint_index3'];
$jpnaint_spd3 = $_POST['jpnaint_spd3'];

mysql_query("

INSERT INTO jpna_inter SET no_beasiswa = '$no_bea', 
index0='$jpnaint_index0',
spd0='$jpnaint_spd0',
index1='$jpnaint_index1',
spd1='$jpnaint_spd1',
index2='$jpnaint_index2',
spd2='$jpnaint_spd2',
index3='$jpnaint_index3',
spd3='$jpnaint_spd3'
");


$ni_index0 = $_POST['ni_index0'];
$ni_spd0 = $_POST['ni_spd0'];
$ni_index1 = $_POST['ni_index1'];
$ni_spd1 = $_POST['ni_spd1'];
$ni_index2 = $_POST['ni_index2'];
$ni_spd2 = $_POST['ni_spd2'];
$ni_index3 = $_POST['ni_index3'];
$ni_spd3 = $_POST['ni_spd3'];

mysql_query("

INSERT INTO admis_nilai_ipk SET no_beasiswa = '$no_bea', 
index0='$ni_index0',
spd0='$ni_spd0',
index1='$ni_index1',
spd1='$ni_spd1',
index2='$ni_index2',
spd2='$ni_spd2',
index3='$ni_index3',
spd3='$ni_spd3'
");

$tpa_index0 = $_POST['tpa_index0'];
$tpa_index1 = $_POST['tpa_index1'];
$tpa_index2 = $_POST['tpa_index2'];
$tpa_index3 = $_POST['tpa_index3'];

mysql_query("

INSERT INTO tingkat_pres_akademis SET no_beasiswa = '$no_bea', 
index0='$tpa_index0',

index1='$tpa_index1',

index2='$tpa_index2',

index3='$tpa_index3'
");

$tpna_index0 = $_POST['tpna_index0'];
$tpna_index1 = $_POST['tpna_index1'];
$tpna_index2 = $_POST['tpna_index2'];
$tpna_index3 = $_POST['tpna_index3'];

mysql_query("

INSERT INTO tingkat_presnon_akademis SET no_beasiswa = '$no_bea', 
index0='$tpna_index0',

index1='$tpna_index1',

index2='$tpna_index2',

index3='$tpna_index3'
");

$kt1_index0 = $_POST['kt1_index0'];
$kt1_spd0 = $_POST['kt1_spd0'];
$kt1_index1 = $_POST['kt1_index1'];
$kt1_spd1 = $_POST['kt1_spd1'];
$kt1_index2 = $_POST['kt1_index2'];
$kt1_spd2 = $_POST['kt1_spd2'];
$kt1_index3 = $_POST['kt1_index3'];
$kt1_spd3 = $_POST['kt1_spd3'];

mysql_query("

INSERT INTO wawan_nilkat1 SET no_beasiswa = '$no_bea', 
index0='$kt1_index0',
spd0='$kt1_spd0',
index1='$kt1_index1',
spd1='$kt1_spd1',
index2='$kt1_index2',
spd2='$kt1_spd2',
index3='$kt1_index3',
spd3='$kt1_spd3'
");

$kt2_index0 = $_POST['kt2_index0'];
$kt2_spd0 = $_POST['kt2_spd0'];
$kt2_index1 = $_POST['kt2_index1'];
$kt2_spd1 = $_POST['kt2_spd1'];
$kt2_index2 = $_POST['kt2_index2'];
$kt2_spd2 = $_POST['kt2_spd2'];
$kt2_index3 = $_POST['kt2_index3'];
$kt2_spd3 = $_POST['kt2_spd3'];

mysql_query("

INSERT INTO wawan_nilkat2 SET no_beasiswa = '$no_bea', 
index0='$kt2_index0',
spd0='$kt2_spd0',
index1='$kt2_index1',
spd1='$kt2_spd1',
index2='$kt2_index2',
spd2='$kt2_spd2',
index3='$kt2_index3',
spd3='$kt2_spd3'
");

$kt3_index0 = $_POST['kt3_index0'];
$kt3_spd0 = $_POST['kt3_spd0'];
$kt3_index1 = $_POST['kt3_index1'];
$kt3_spd1 = $_POST['kt3_spd1'];
$kt3_index2 = $_POST['kt3_index2'];
$kt3_spd2 = $_POST['kt3_spd2'];
$kt3_index3 = $_POST['kt3_index3'];
$kt3_spd3 = $_POST['kt3_spd3'];
mysql_query("

INSERT INTO wawan_nilkat3 SET no_beasiswa = '$no_bea', 
index0='$kt3_index0',
spd0='$kt3_spd0',
index1='$kt3_index1',
spd1='$kt3_spd1',
index2='$kt3_index2',
spd2='$kt3_spd2',
index3='$kt3_index3',
spd3='$kt3_spd3'
");

$kt4_index0 = $_POST['kt4_index0'];
$kt4_spd0 = $_POST['kt4_spd0'];
$kt4_index1 = $_POST['kt4_index1'];
$kt4_spd1 = $_POST['kt4_spd1'];
$kt4_index2 = $_POST['kt4_index2'];
$kt4_spd2 = $_POST['kt4_spd2'];
$kt4_index3 = $_POST['kt4_index3'];
$kt4_spd3 = $_POST['kt4_spd3'];
mysql_query("

INSERT INTO wawan_nilkat4 SET no_beasiswa = '$no_bea', 
index0='$kt4_index0',
spd0='$kt4_spd0',
index1='$kt4_index1',
spd1='$kt4_spd1',
index2='$kt4_index2',
spd2='$kt4_spd2',
index3='$kt4_index3',
spd3='$kt4_spd3'
");

$kt5_index0 = $_POST['kt5_index0'];
$kt5_spd0 = $_POST['kt5_spd0'];
$kt5_index1 = $_POST['kt5_index1'];
$kt5_spd1 = $_POST['kt5_spd1'];
$kt5_index2 = $_POST['kt5_index2'];
$kt5_spd2 = $_POST['kt5_spd2'];
$kt5_index3 = $_POST['kt5_index3'];
$kt5_spd3 = $_POST['kt5_spd3'];
mysql_query("

INSERT INTO wawan_nilkat5 SET no_beasiswa = '$no_bea', 
index0='$kt5_index0',
spd0='$kt5_spd0',
index1='$kt5_index1',
spd1='$kt5_spd1',
index2='$kt5_index2',
spd2='$kt5_spd2',
index3='$kt5_index3',
spd3='$kt5_spd3'
");

$kt6_index0 = $_POST['kt6_index0'];
$kt6_spd0 = $_POST['kt6_spd0'];
$kt6_index1 = $_POST['kt6_index1'];
$kt6_spd1 = $_POST['kt6_spd1'];
$kt6_index2 = $_POST['kt6_index2'];
$kt6_spd2 = $_POST['kt6_spd2'];
$kt6_index3 = $_POST['kt6_index3'];
$kt6_spd3 = $_POST['kt6_spd3'];
mysql_query("

INSERT INTO wawan_nilkat6 SET no_beasiswa = '$no_bea', 
index0='$kt6_index0',
spd0='$kt6_spd0',
index1='$kt6_index1',
spd1='$kt6_spd1',
index2='$kt6_index2',
spd2='$kt6_spd2',
index3='$kt6_index3',
spd3='$kt6_spd3'
");
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data Berhasil Ditambahkan')
    window.location.href='index.php?conten=input_bea';
    </SCRIPT>");
?>




