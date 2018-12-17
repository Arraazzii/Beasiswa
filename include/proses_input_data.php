<?php
require_once('../admin/lib/config.php'); 
//data siswa
$jenis_tingkat_bea=$_POST['jenis_tingkat_bea'];
$nama=$_POST['nama'];
$nisn=$_POST['nisn'];
//$bidang=$_POST['bidang'];
$bidang="";
$bidang_studi=$_POST['jenis_tingkat_nya'];
$kelas=$_POST['kelas'];
$tempat_la=$_POST['tempat_la'];
/*$tgl_la=$_POST['tgl_la'];*/
$alamat=$_POST['alamat'];
if(isset($_POST['prov'])){
  if($_POST['prov'] =="kosong" || $_POST['prov'] == ""){
    $prov = "";
  }else{
    $pecah_prov_sis=explode("&",$_POST['prov']);
    $prov = $pecah_prov_sis[1];
  }
}else{
  $prov = "";
}

if(isset($_POST['tgl_la'])){
  $tgl_la = $_POST['tgl_la'];
}else{
  $tgl_la = "";
}

if(isset($_POST['kab'])){
  if($_POST['kab'] =="kosong" || $_POST['kab'] == ""){
    $kab = "";
  }else{
    $pecah_kab_sis=explode("&",$_POST['kab']);
    $kab = $pecah_kab_sis[2];
  }
}else{
  $kab = "";
}

if(isset($_POST['kec'])){
  if($_POST['kec'] =="kosong" || $_POST['kec'] == ""){
    $kec = "";
  }else{
    $kec = $_POST['kec'];
  }
}else{
  $kec = "";
}
$nama_reg=$_POST['nama_reg'];
$bank=$_POST['bank'];
$no_reg=$_POST['no_reg'];
$cabang=$_POST['cabang'];

//data sekolah
$nama_sek=$_POST['nama_sek'];
$npsn=$_POST['npsn'];
$alamat_sek=$_POST['alamat_sek'];
$nama_wali_pena=$_POST['nama_wali_pena'];
$no_wali_pena=$_POST['no_wali_pena'];
/*$kec_sek=$_POST['kec_sek'];
$kab_sek=$_POST['kab_sek'];
$prov_sek=$_POST['prov_sek'];*/


if(isset($_POST['prov_sek'])){
  if($_POST['prov_sek'] =="kosong" || $_POST['prov_sek'] == ""){
    $prov_sek = "";
  }else{
    $pecah_prov_sek=explode("&",$_POST['prov_sek']);
    $prov_sek = $pecah_prov_sek[1];
  }
}else{
  $prov_sek = "";
}

if(isset($_POST['kab_sek'])){
  if($_POST['kab_sek'] =="kosong" || $_POST['kab_sek'] == ""){
    $kab_sek = "";
  }else{
    $pecah_kab_sek=explode("&",$_POST['kab_sek']);
  $kab_sek = $pecah_kab_sek[2];
  }
}else{
  $kab_sek = "";
}

if(isset($_POST['kec_sek'])){
  if($_POST['kec_sek'] =="kosong" || $_POST['kec_sek'] == ""){
    $kec_sek = "";
  }else{
    $kec_sek = $_POST['kec_sek'];
  }
}else{
  $kec_sek = "";
}

$pos_sek=$_POST['pos_sek'];
$telp_sek=$_POST['telp_sek'];
$fax_sek=$_POST['fax_sek'];
$email_sek=$_POST['email_sek'];

//data ortu
$nama_ortu=$_POST['nama_ortu'];
$alamat_ortu=$_POST['alamat_ortu'];
$peker_ortu=$_POST['peker_ortu'];
/*$kec_ortu=$_POST['kec_ortu'];
$kab_ortu=$_POST['kab_ortu'];
$prov_ortu=$_POST['prov_ortu'];*/

if(isset($_POST['prov_ortu'])){
  if($_POST['prov_ortu'] =="kosong" || $_POST['prov_ortu'] == ""){
    $prov_ortu = "";
  }else{
    $pecah_prov_ortu=explode("&",$_POST['prov_ortu']);
    $prov_ortu = $pecah_prov_ortu[1];
  }
}else{
  $prov_ortu = "";
}

if(isset($_POST['kab_ortu'])){
  if($_POST['kab_ortu'] =="kosong" || $_POST['kab_ortu'] == ""){
    $kab_ortu = "";
  }else{
     $pecah_kab_ortu=explode("&",$_POST['kab_ortu']);
     $kab_ortu = $pecah_kab_ortu[2];
  }
}else{
  $kab_ortu = "";
}

if(isset($_POST['kec_ortu'])){
  if($_POST['kec_ortu'] =="kosong" || $_POST['kec_ortu'] == ""){
    $kec_ortu = "";
  }else{
     $kec_ortu = $_POST['kec_ortu'];
  }
  
}else{
  $kec_ortu = "";
}

$telp_ortu=$_POST['telp_ortu'];

$jum_pres=$_POST['jum_pres'];
$rapot=$_POST['rapot'];
$rapot_ket=$_POST['rapot_ket'];

$esai=$_POST['esai'];
$esai2=$_POST['esai2'];

$hasil1 = 0;
$hasil2 = 0;
$jpa = 0;
$jpna = 0;
$ak = 0;
$rat = 0;
$point1 = 0;
$point2 = 0;

if($jum_pres==1){
  if(isset($_POST["presta1"])){
      $presta1 = $_POST["presta1"];
  }else{
      $presta1="";
  }
  
  if(isset($_POST["nama_presta1"])){
      $nama_presta1 = $_POST["nama_presta1"];
  }else{
      $nama_presta1="";
  }

  if(isset($_POST["tingkat_presta1"])){
      $tingkat_presta1 = $_POST["tingkat_presta1"];
  }else{
      $tingkat_presta1="";
  }
  if($nama_presta1!=""){
      $gabunga="'".$presta1."', '".$nama_presta1."', '".$tingkat_presta1;
      $sql_pendaftar2="INSERT INTO prestasi VALUES ('".$nisn."','".$presta1."','".$nama_presta1."','".$tingkat_presta1."') " ;
      $qry_pendaftar2=mysql_query($sql_pendaftar2) or die(mysql_error());
    }
  if($presta1 == "akademik"){
      $hasil1 ++;
  }

  if($presta1 == "non akademik"){
      $hasil2 ++;
  }
}else{
$a = 1;
while ($a <= $jum_pres) {
  if(isset($_POST["presta$a"])){
      $data1 = $_POST["presta$a"];
  }else{
      $data1="";
  }
  
  if(isset($_POST["nama_presta$a"])){
      $data2 = $_POST["nama_presta$a"];
  }else{
      $data2="";
  }

  if(isset($_POST["tingkat_presta$a"])){
      $data3 = $_POST["tingkat_presta$a"];
  }else{
      $data3="";
  }
  
  if($data2!=""){
    $sql_pendaftar="INSERT INTO prestasi VALUES ('".$nisn."','".$data1."','".$data2."','".$data3."') " ;
    $qry_pendaftar=mysql_query($sql_pendaftar) or die(mysql_error());
    if($data1 == "akademik"){
        $hasil1 ++;
    }

    if($data1 == "non akademik"){
        $hasil2 ++;
    }
  }
  $a++;
}

}

//mengambil beasiswa yang akit
$sql_nobea="SELECT * FROM info_beasiswa WHere st = 'Y'";
$qry_nobea=mysql_query($sql_nobea) or die(mysql_error());
$nilai_nobea = mysql_fetch_array($qry_nobea);

$point1 = $rapot; 
$point2 = $rapot_ket; 
//if ($nilai_ket[7]<=$rapot_ket &&  $nilai_ket[8]>=$rapot_ket)

$sql_jpa="SELECT * FROM jpa WHERE no_beasiswa = '".$nilai_nobea['no_beasiswa']."' " ;
$qry_jpa=mysql_query($sql_jpa) or die(mysql_error());
$nilai_jpa = mysql_fetch_array($qry_jpa);

if ($nilai_jpa[1]<=$hasil1 &&  $nilai_jpa[2]>=$hasil1){
    $jpa = $nilai_jpa['poin1']; 
}
else if ($nilai_jpa[3]<=$hasil1 &&  $nilai_jpa[4]>=$hasil1){
    $jpa = $nilai_jpa['poin2']; 
}
else if ($nilai_jpa[5]<=$hasil1 &&  $nilai_jpa[6]>=$hasil1){
    $jpa = $nilai_jpa['poin3'];
}
else {
    $jpa = $nilai_jpa['poin3'];
}
//if ($nilai_jpa[7]<=$hasil1 &&  $nilai_jpa[8]>=$hasil1)

$sql_jpna="SELECT * FROM jpna WHERE no_beasiswa = '".$nilai_nobea['no_beasiswa']."' " ;
$qry_jpna=mysql_query($sql_jpna) or die(mysql_error());
$nilai_jpna = mysql_fetch_array($qry_jpna);

if ($nilai_jpna[1]<=$hasil2 &&  $nilai_jpna[2]>=$hasil2){
    $jpna = $nilai_jpna['poin1']; 
}
else if ($nilai_jpna[3]<=$hasil2 &&  $nilai_jpna[4]>=$hasil2){
    $jpna = $nilai_jpna['poin2']; 
}
else if ($nilai_jpna[5]<=$hasil2 &&  $nilai_jpna[6]>=$hasil2){
    $jpna = $nilai_jpna['poin3'];
}
else{
    $jpna = $nilai_jpna['poin4'];
}
//if ($nilai_jpna[7]<=$hasil2 &&  $nilai_jpna[8]>=$hasil2)
//$point2 = $rapot_ket * 40;
if($jenis_tingkat_bea=="S"){
  $total = $jpa + $jpna + $point1 + $point2;  
}else{
  $total = $jpa + $jpna + $point1;
}
 

$sql3="SELECT a.seleksi_admin, a.seleksi_wawancara FROM nilai_minimum a, info_beasiswa b WHERE a.no_beasiswa = '".$nilai_nobea['no_beasiswa']."' AND a.no_beasiswa = b.no_beasiswa AND st = 'Y' ";
$qry3=mysql_query($sql3) or die(mysql_error());
$nilai2 = mysql_fetch_array($qry3);
$sta="";

if($total <= $nilai2[0]){
  $sta = "N";
}else{
  $sta = "Y";
}

$data_email = $_POST['data_email'];
$pecah_data = explode('-', $data_email);

date_default_timezone_set("Asia/Jakarta");
$tanggal = date("Y-m-d");
$waktu = date("h:i:sa");
$nama_foto = "";
//upload
define("UPLOAD_DIR", "../img/profil/");
if (!empty($_FILES['myFile']['name'])||$_FILES['myFile']['name']!="") {
  // verifikasi file gambar (GIF, JPEG, atau PNG)
 /* $fileType = exif_imagetype($_FILES['myFile']['tmp_name'][0]);
  $allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
  if (!in_array($fileType, $allowed)) {
    echo "hanya diijinkan untuk meng-upload file gambar (gif, jpg, atau png)";
  }
  else{*/
    $myFile = $_FILES['myFile'];
    // ubah paksa nama file yg mengandung selain huruf, angka, ".", "_", dan "-" dengan regex
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile['name']);
    // periksa ekstensi file
    $parts = pathinfo($name);       
    if (isset($parts['extension'])) {
      $ext = $parts['extension'];      
      if ($ext !== 'jpg' && $ext !== 'gif' && $ext !== 'png')
        $ext = "jpg";     
    $name_foto = $nisn . '.' . $ext;
      }        
      else { // jika file tidak memiliki ekstensi maka berikan ekstensi .jpg
        $ext = 'jpg';
    $name_foto = $nisn . '.jpg';
      }   
      // simpan file
      move_uploaded_file($myFile['tmp_name'], UPLOAD_DIR . $name_foto);
  //}
}
else{
  $name_foto = '';
}
$sql_sekolah="INSERT INTO data_sekolah VALUES ('$nisn','$nama_sek','$npsn','$alamat_sek','$kec_sek','$kab_sek','$prov_sek','$pos_sek','$telp_sek','$fax_sek','$email_sek','$nama_wali_pena','$no_wali_pena')";
$qry_sekolah=mysql_query($sql_sekolah) or die(mysql_error());


$sql2="INSERT INTO data_pendaftar VALUES ('$nisn','".$nilai_nobea['no_beasiswa']."','$nama','$bidang','$bidang_studi','$kelas','$tempat_la','$tgl_la','$alamat','$kec','$kab','$prov','$nama_reg','$no_reg','$bank','$cabang','$name_foto','$esai','$esai2','$esai3', '".$pecah_data[0]."','N','$tanggal','$waktu','$point1','$point2','$jpa','$jpna','$sta','N','0','0','0','0','0','$rapot','$rapot_ket','$jenis_tingkat_bea')";
$qry2=mysql_query($sql2) or die(mysql_error());


$sql_ortu="INSERT INTO data_ortu VALUES ('$nisn','$nama_ortu','$peker_ortu','$alamat_ortu','$kec_ortu','$kab_ortu','$prov_ortu','$telp_ortu')";
$qry_ortu=mysql_query($sql_ortu) or die(mysql_error());


$sql_daftar="UPDATE daftar SET st = 'Y' WHERE email = '".$pecah_data[0]."' AND pass = '".$pecah_data[1]."'   ";
$qry_daftar=mysql_query($sql_daftar) or die(mysql_error());

$sql_nilai="INSERT INTO nilai_wawancara VALUES ('$nisn','0','0','0','0','0')";
$qry_nilai=mysql_query($sql_nilai) or die(mysql_error());

session_start(); 
session_unset();
session_destroy();
//kirim($email);
?>
<script language="javascript"> 
alert("Proses pengiriman berhasil");
	document.location.href='http://japfafoundation.org/';
</script>