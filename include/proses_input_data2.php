<?php
require_once('../admin/lib/config.php'); 
// Turn off all error reporting 
error_reporting(0);

		//kode alamat
		$query = "SELECT max(kode_alamat) as maxKode FROM data_alamat";
		$hasil = mysql_query($query) or die(mysql_error());
		$data  = mysql_fetch_array($hasil);
		$kodeAlamat = $data['maxKode'];

		$noUrut = (int) substr($kodeAlamat, 3, 3);

		$noUrut++;
		$char = "ALM";
		$alamatID = $char . sprintf("%08s", $noUrut);	
		//end kode alamat

		//kode alamat ayah
		$query88 = "SELECT max(kode_alamat) as maxKode88 FROM data_alamat";
		$hasil88 = mysql_query($query88) or die(mysql_error());
		$data88  = mysql_fetch_array($hasil88);
		$kodeAlamat88 = $data88['maxKode88'];

		$noUrut88 = (int) substr($kodeAlamat88, 3, 3);

		$noUrut88++;
		$char88 = "ALA";
		$alamatayahID = $char88 . sprintf("%08s", $noUrut88);	
		//end kode alamat ayah

		//kode alamat ibu
		$query99 = "SELECT max(kode_alamat) as maxKode99 FROM data_alamat";
		$hasil99 = mysql_query($query99) or die(mysql_error());
		$data99  = mysql_fetch_array($hasil99);
		$kodeAlamat99 = $data99['maxKode99'];

		$noUrut99 = (int) substr($kodeAlamat99, 3, 3);

		$noUrut99++;
		$char99 = "ALI";
		$alamatibuID = $char99 . sprintf("%08s", $noUrut99);	
		//end kode alamat ibu

		//kode pribadi
		$query1 = "SELECT max(kode_pribadi) as maxKode1 FROM data_pribadi";
		$hasil1 = mysql_query($query1) or die(mysql_error());
		$data1  = mysql_fetch_array($hasil1);
		$kodeAlamat1 = $data1['maxKode1'];

		$noUrut1 = (int) substr($kodeAlamat1, 3, 3);

		$noUrut1++;
		$char1 = "PRB";
		$pribadiID = $char1 . sprintf("%08s", $noUrut1);	
		//end kode pribadi

		//kode pendidikan ayah
		$query2 = "SELECT max(kode_pendidikan) as maxKode2 FROM data_riwayat_pendidikan";
		$hasil2 = mysql_query($query2) or die(mysql_error());
		$data2  = mysql_fetch_array($hasil2);
		$kodeAlamat2 = $data2['maxKode2'];

		$noUrut2 = (int) substr($kodeAlamat2, 3, 3);

		$noUrut2++;
		$char2 = "PEA";
		$pendidikanayahID = $char2 . sprintf("%08s", $noUrut2);	
		//end kode pendidikan ayah

		//kode pendidikan ibu
		$query22 = "SELECT max(kode_pendidikan) as maxKode22 FROM data_riwayat_pendidikan";
		$hasil22 = mysql_query($query22) or die(mysql_error());
		$data22  = mysql_fetch_array($hasil22);
		$kodeAlamat22 = $data22['maxKode22'];

		$noUrut22 = (int) substr($kodeAlamat22, 3, 3);

		$noUrut22++;
		$char22 = "PEI";
		$pendidikanibuID = $char22 . sprintf("%08s", $noUrut22);	
		//end kode pendidikan ibu

		//kode bank
		$query3 = "SELECT max(kode_bank) as maxKode3 FROM data_bank";
		$hasil3 = mysql_query($query3) or die(mysql_error());
		$data3  = mysql_fetch_array($hasil3);
		$kodeAlamat3 = $data3['maxKode3'];

		$noUrut3 = (int) substr($kodeAlamat3, 3, 3);

		$noUrut3++;
		$char3 = "BNK";
		$bankID = $char3 . sprintf("%08s", $noUrut3);	
		//end kode bank

		//kode prestasi
		$query4 = "SELECT max(kode_prestasi) as maxKode4 FROM data_prestasi";
		$hasil4 = mysql_query($query4) or die(mysql_error());
		$data4  = mysql_fetch_array($hasil4);
		$kodeAlamat4 = $data4['maxKode4'];

		$noUrut4 = (int) substr($kodeAlamat4, 3, 3);

		$noUrut4++;
		$char4 = "PRS";
		$prestasiID = $char4 . sprintf("%08s", $noUrut4);	
		//end kode prestasi

		//kode saudara
		$query5 = "SELECT max(kode_saudara) as maxKode5 FROM data_saudara_kandung";
		$hasil5 = mysql_query($query5) or die(mysql_error());
		$data5  = mysql_fetch_array($hasil5);
		$kodeAlamat5 = $data5['maxKode5'];

		$noUrut5 = (int) substr($kodeAlamat5, 3, 3);

		$noUrut5++;
		$char5 = "SAU";
		$saudaraID = $char5 . sprintf("%08s", $noUrut5);	
		//end kode saudara

		//kode sosial
		$query6 = "SELECT max(kode_sosial) as maxKode6 FROM data_sosial";
		$hasil6 = mysql_query($query6) or die(mysql_error());
		$data6  = mysql_fetch_array($hasil6);
		$kodeAlamat6 = $data6['maxKode6'];

		$noUrut6 = (int) substr($kodeAlamat6, 3, 3);

		$noUrut6++;
		$char6 = "SOS";
		$sosialID = $char6 . sprintf("%08s", $noUrut6);	
		//end kode sosial

		//kode pekerjaan ayah
		$query7 = "SELECT max(kode_pekerjaan) as maxKode7 FROM data_pekerjaan";
		$hasil7 = mysql_query($query7) or die(mysql_error());
		$data7  = mysql_fetch_array($hasil7);
		$kodeAlamat7 = $data7['maxKode7'];

		$noUrut7 = (int) substr($kodeAlamat7, 3, 3);

		$noUrut7++;
		$char7 = "JOA";
		$jobayahID = $char7 . sprintf("%08s", $noUrut7);	
		//end kode pekerjaan ayah

		//kode pekerjaan ibu
		$query77 = "SELECT max(kode_pekerjaan) as maxKode77 FROM data_pekerjaan";
		$hasil77 = mysql_query($query77) or die(mysql_error());
		$data77  = mysql_fetch_array($hasil77);
		$kodeAlamat77 = $data77['maxKode77'];

		$noUrut77 = (int) substr($kodeAlamat77, 3, 3);

		$noUrut77++;
		$char77 = "JOI";
		$jobibuID = $char77 . sprintf("%08s", $noUrut77);	
		//end kode pekerjaan ibu

		//kode keluarga
		$query8 = "SELECT max(kode_keluarga) as maxKode8 FROM data_keluarga";
		$hasil8 = mysql_query($query8) or die(mysql_error());
		$data8  = mysql_fetch_array($hasil8);
		$kodeAlamat8 = $data8['maxKode8'];

		$noUrut8 = (int) substr($kodeAlamat3, 3, 8);

		$noUrut8++;
		$char8 = "KLR";
		$keluargaID = $char8 . sprintf("%08s", $noUrut8);	
		//end kode keluarga

		//kode alamat surat
		$query9 = "SELECT max(kode_alamat_surat) as maxKode9 FROM data_alamat_surat";
		$hasil9 = mysql_query($query9) or die(mysql_error());
		$data9  = mysql_fetch_array($hasil9);
		$kodeAlamat9 = $data9['maxKode9'];

		$noUrut9 = (int) substr($kodeAlamat9, 3, 3);

		$noUrut9++;
		$char9 = "SRT";
		$suratID = $char9 . sprintf("%08s", $noUrut9);	
		//end kode alamat surat

		//kode esai
		$query0 = "SELECT max(kode_esai) as maxKode0 FROM data_esai";
		$hasil0 = mysql_query($query0) or die(mysql_error());
		$data0  = mysql_fetch_array($hasil0);
		$kodeAlamat0 = $data0['maxKode0'];

		$noUrut0 = (int) substr($kodeAlamat0, 3, 3);

		$noUrut0++;
		$char0 = "ESA";
		$esaiID = $char0 . sprintf("%08s", $noUrut0);	
		//end kode esai

		//kode ekskul
		$query11 = "SELECT max(kode_ekskul) as maxKode11 FROM data_ekskul";
		$hasil11 = mysql_query($query11) or die(mysql_error());
		$data11  = mysql_fetch_array($hasil11);
		$kodeAlamat11 = $data11['maxKode11'];

		$noUrut11 = (int) substr($kodeAlamat11, 3, 3);

		$noUrut11++;
		$char11 = "EKS";
		$ekskulID = $char11 . sprintf("%08s", $noUrut11);	
		//end kode ekskul

		//kode ayah
		$query12 = "SELECT max(kode_ayah) as maxKode12 FROM data_ayah";
		$hasil12 = mysql_query($query12) or die(mysql_error());
		$data12  = mysql_fetch_array($hasil12);
		$kodeAlamat12 = $data12['maxKode12'];

		$noUrut12 = (int) substr($kodeAlamat12, 3, 3);

		$noUrut12++;
		$char12 = "BPK";
		$ayahID = $char12 . sprintf("%08s", $noUrut12);	
		//end kode ayah

		//kode ibu
		$query13 = "SELECT max(kode_ibu) as maxKode13 FROM data_ibu";
		$hasil13 = mysql_query($query13) or die(mysql_error());
		$data13  = mysql_fetch_array($hasil13);
		$kodeAlamat13 = $data13['maxKode13'];

		$noUrut13 = (int) substr($kodeAlamat13, 3, 3);

		$noUrut13++;
		$char13 = "IBU";
		$ibuID = $char13 . sprintf("%08s", $noUrut13);	
		//end kode ibu

		//kode ibu
		$query130 = "SELECT max(kode_perguruan_tinggi) as maxKode130 FROM perguruan_tinggi";
		$hasil130 = mysql_query($query130) or die(mysql_error());
		$data130  = mysql_fetch_array($hasil130);
		$kodeAlamat130 = $data130['maxKode130'];

		$noUrut130 = (int) substr($kodeAlamat130, 3, 3);

		$noUrut130++;
		$char130 = "PET";
		$perguruanID = $char130 . sprintf("%08s", $noUrut130);	
		//end kode ibu

//data siswa
$jenis_tingkat_bea	=	$_POST['jenis_tingkat_bea'];
$nisn				=	$_POST['nisn'];
$nama 				=	$_POST['nama'];
$tmpt_la 			=	$_POST['tempat_la'];
$tgl_la				=	$_POST['tgl_la'];
$jk	   				=	$_POST['jk'];
$alamat 			=	$_POST['alamat'];
$prov 				=	$_POST['prov'];
$kab 				=	$_POST['kab'];
$kec  				=	$_POST['kec'];
$kode_pos 			=   $_POST['kode_pos'];
$no_telp 			=	$_POST['telp_tetap'];
$alamat_surat 		=	$_POST['alamat_surat'];
$prov_surat 		=	$_POST['prov_surat'];
$kab_surat			=	$_POST['kab_surat'];
$kec_surat 			=	$_POST['kec_surat'];
$kode_pos_surat 	=	$_POST['kode_pos_surat'];
$no_telp_surat 		=	$_POST['telp_surat'];
$email 				=	$_POST['email'];
$hp 				=	$_POST['hp'];
$q1 				=	$_POST['q1'];
$q2 				=	$_POST['q2'];
$id_card 			=	$_POST['id_card'];
$basi 				=	$_POST['basi'];

//data bank
$nama_reg 		=	$_POST['nama_reg'];
$no_reg			=	$_POST['no_reg'];
$bank 			=	$_POST['bank'];
$cabang			=	$_POST['cabang'];      		

//data perguruan tinggi
$perguruan_t	=	$_POST['perguruan_t'];
$fakultas		=	$_POST['fakultas'];
$program_studi 	=	$_POST['program_studi'];
$strata			=	$_POST['strata'];

//data ayah
$nama_ayah		=	$_POST['nama_ayah'];
$tgl_la_ayah	=	$_POST['tgl_la_ayah'];
$hp_ayah		=	$_POST['hp_ayah'];
$alamat_ayah	=	$_POST['alamat_ayah'];
$prov_ayah		=	$_POST['prov_ortu'];
$kab_ayah		=	$_POST['kab_ortu'];
$kec_ayah		=	$_POST['kec_ortu'];
$telp_ayah		=	$_POST['telp_ayah'];
$pend_ayah		=	$_POST['pend_ayah'];
$institusi_ayah =	$_POST['institusi_ayah'];
$alamat_in_ayah = 	$_POST['alamat_institusi_ayah'];
$kehidupan_ayah	=	$_POST['kehidupan_ayah'];
$pekerjaan_ayah =	$_POST['pekerjaan_ayah'];
$peru_ayah 		=	$_POST['perusahaan_ayah'];
$telp_peru_ayah =	$_POST['telp_perusahaan_ayah'];
$jabatan_ayah 	=	$_POST['jabatan_ayah'];
$gaji_ayah		=	$_POST['gaji_ayah'];

//data ibu
$nama_ibu		=	$_POST['nama_ibu'];
$tgl_la_ibu		=	$_POST['tgl_la_ibu'];
$hp_ibu			=	$_POST['hp_ibu'];
$alamat_ibu		=	$_POST['alamat_ibu'];
$prov_ibu		=	$_POST['prov_ibu'];
$kab_ibu		=	$_POST['kab_ibu'];
$kec_ibu		=	$_POST['kec_ibu'];
$telp_ibu		=	$_POST['telp_ibu'];
$pend_ibu		=	$_POST['pend_ibu'];
$institusi_ibu 	=	$_POST['institusi_ibu'];
$alamat_in_ibu 	= 	$_POST['alamat_institusi_ibu'];
$kehidupan_ibu	=	$_POST['kehidupan_ibu'];
$pekerjaan_ibu 	=	$_POST['pekerjaan_ibu'];
$peru_ibu 		=	$_POST['perusahaan_ibu'];
$telp_peru_ibu 	=	$_POST['telp_perusahaan_ibu'];
$jabatan_ibu   	=	$_POST['jabatan_ibu'];
$gaji_ibu		=	$_POST['gaji_ibu'];

//data saudara
$saudara		=	$_POST['saudara_kandung'];
$usia_s 		=	$_POST['usia_s'];
$pendidikan_s	=	$_POST['pendidikan_s'];
$kola_s			=	$_POST['kola_s'];
$tempat_kola_s 	=	$_POST['tempat_kola_s'];
$gawe_s 		=	$_POST['gawe_s'];
$tempat_gawe 	=	$_POST['tempat_gawe'];

//data esai
$esai			=	$_POST['esai'];
$esay 			=   $_POST['esay'];

//data pribadi 
$pribadi		=	$_POST['prib'];
$pribadi2		=	$_POST['prib2'];
$pribadi3		=	$_POST['prib3'];
$pribadi4		=	$_POST['prib4'];
$pribadi5		=	$_POST['prib5'];

//data ekskul
$ekskul 			=	$_POST['ekskul'];
$tgl_masuk_ekskul	=	$_POST['tgl_masuk_eskul'];
$tgl_keluar_ekskul  =	$_POST['tgl_keluar_eskul'];
$jabatan_ekskul		=	$_POST['jbtn_eskul'];
$lokasi_ekskul 		=	$_POST['lokasi_eskul'];
$aktifitas_ekskul 	=	$_POST['aktifitas_eskul'];

//data prestasi
$peng 			=	$_POST['peng'];
$tgl_peng 		=	$_POST['tgl_peng'];
$desc_peng 		=	$_POST['desc_peng'];

//data sosial
$nama_keg 		=	$_POST['nama_keg'];
$thn_keg 		=	$_POST['thn_keg'];
$lokasi_keg 	=	$_POST['lokasi_keg'];

//mengambil beasiswa yang aktif
$sql_nobea		=	"SELECT * FROM info_beasiswa WHERE st = 'Y'";
$qry_nobea		=	mysql_query($sql_nobea) or die(mysql_error());
$nilai_nobea 	= 	mysql_fetch_array($qry_nobea);

$data_email = $_POST['data_email'];
$pecah_data = explode('-', $data_email);

date_default_timezone_set("Asia/Jakarta");
$tanggal = date("Y-m-d");
$waktu = date("h:i:sa");

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

if(isset($_POST['prov_ibu'])){
  if($_POST['prov_ibu'] =="kosong" || $_POST['prov_ibu'] == ""){
    $prov_ibu = "";
  }else{
    $pecah_prov_ibu=explode("&",$_POST['prov_ibu']);
    $prov_ibu = $pecah_prov_ibu[1];
  }
}else{
  $prov_ibu = "";
}

if(isset($_POST['kab_ibu'])){
  if($_POST['kab_ibu'] =="kosong" || $_POST['kab_ibu'] == ""){
    $kab_ibu = "";
  }else{
    $pecah_kab_ibu=explode("&",$_POST['kab_ibu']);
  $kab_ibu = $pecah_kab_ibu[2];
  }
}else{
  $kab_ibu = "";
}

if(isset($_POST['kec_ibu'])){
  if($_POST['kec_ibu'] =="kosong" || $_POST['kec_ibu'] == ""){
    $kec_ibu = "";
  }else{
    $kec_ibu = $_POST['kec_ibu'];
  }
}else{
  $kec_ibu = "";
}

if(isset($_POST['prov_ortu'])){
  if($_POST['prov_ortu'] =="kosong" || $_POST['prov_ortu'] == ""){
    $prov_ayah = "";
  }else{
    $pecah_prov_ayah=explode("&",$_POST['prov_ortu']);
    $prov_ayah = $pecah_prov_ayah[1];
  }
}else{
  $prov_ayah = "";
}

if(isset($_POST['kab_ortu'])){
  if($_POST['kab_ortu'] =="kosong" || $_POST['kab_ortu'] == ""){
    $kab_ayah = "";
  }else{
     $pecah_kab_ayah=explode("&",$_POST['kab_ortu']);
     $kab_ayah = $pecah_kab_ayah[2];
  }
}else{
  $kab_ayah = "";
}

if(isset($_POST['kec_ortu'])){
  if($_POST['kec_ortu'] =="kosong" || $_POST['kec_ortu'] == ""){
    $kec_ayah = "";
  }else{
     $kec_ayah = $_POST['kec_ortu'];
  }
  
}else{
  $kec_ayah = "";
}

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

$sql="INSERT INTO data_pendaftar VALUES ('$nisn','".$nilai_nobea['no_beasiswa']."','$nama','$tmpt_la','$tgl_la','$jk','$email','$hp','$q1','$q2','$id_card','$basi','$name_foto','N','$waktu','$tanggal','$keluargaID','$alamatID', '$suratID','$bankID','$ekskulID','$prestasiID','$sosialID','$esaiID','$pribadiID','$perguruanID')";
$qry=mysql_query($sql) or die(mysql_error());

$sql1="INSERT INTO data_bank VALUES ('$bankID','$nama_reg','$no_reg','$bank','$cabang')";
$qry1=mysql_query($sql1) or die(mysql_error());

$sql2="INSERT INTO perguruan_tinggi VALUES ('$perguruanID','$perguruan_t','$fakultas','$program_studi','$strata')";
$qry2=mysql_query($sql2) or die(mysql_error());

$sql3="INSERT INTO data_ayah VALUES ('$ayahID','$nama_ayah','$tgl_la_ayah','$hp_ayah','$kehidupan_ayah','$alamatayahID','$pendidikanayahID','$jobayahID')";
$qry3=mysql_query($sql3) or die(mysql_error());

$sql4="INSERT INTO data_ibu VALUES ('$ibuID','$nama_ibu','$tgl_la_ibu','$hp_ibu','$kehidupan_ibu','$alamatibuID','$pendidikanibuID','$jobibuID')";
$qry4=mysql_query($sql4) or die(mysql_error());

$sql5="INSERT INTO data_esai VALUES ('$esaiID','$esai','$esay')";
$qry5=mysql_query($sql5) or die(mysql_error());

$sql6="INSERT INTO data_pribadi VALUES ('$pribadiID','$pribadi','$pribadi2','$pribadi3','$pribadi4','$pribadi5')";
$qry6=mysql_query($sql6) or die(mysql_error());

$sql7="INSERT INTO data_alamat_surat VALUES ('$suratID','$alamat_surat','$prov_surat','$kab_surat','$kec_surat','$kode_pos_surat','$no_telp_surat')";
$qry7=mysql_query($sql7) or die(mysql_error());

$sql8="INSERT INTO data_alamat VALUES 
('$alamatID','$alamat','$prov','$kab','$kec','$kode_pos','$no_telp'),
('$alamatayahID','$alamat_ayah','$prov_ayah','$kab_ayah','$kec_ayah','NULL','$telp_ayah'),
('$alamatibuID','$alamat_ibu','$prov_ibu','$kab_ibu','$kec_ibu','NULL','$telp_ibu')";
$qry8=mysql_query($sql8) or die(mysql_error());

$sql9="INSERT INTO data_pekerjaan VALUES
('$jobayahID','$pekerjaan_ayah','$peru_ayah','$telp_peru_ayah','$jabatan_ayah','$gaji_ayah'),
('$jobibuID','$pekerjaan_ibu','$peru_ibu','$telp_peru_ibu','$jabatan_ibu','$gaji_ibu')";
$qry9=mysql_query($sql9) or die(mysql_error());

$sql10="INSERT INTO data_riwayat_pendidikan VALUES
('$pendidikanayahID','$pend_ayah','$institusi_ayah','$alamat_in_ayah'),
('$pendidikanibuID','$pend_ibu','$institusi_ibu','$alamat_in_ibu')";
$qry10=mysql_query($sql10) or die(mysql_error());

$sql11="INSERT INTO data_keluarga VALUES ('$keluargaID','$ayahID','$ibuID','$saudaraID')";
$qry11=mysql_query($sql11) or die(mysql_error());

for ($x = 0; $x <= 5; $x++) {
    $sql12="INSERT INTO data_saudara_kandung VALUES ('','$saudaraID','$saudara[$x]','$usia_s[$x]','$pendidikan_s[$x]','$kola_s[$x]','$tempat_kola_s[$x]','$gawe_s[$x]','$tempat_gawe[$x]')";
	$qry12=mysql_query($sql12) or die(mysql_error());

	$sql13="INSERT INTO data_ekskul VALUES ('','$ekskulID','$ekskul[$x]','$tgl_masuk_ekskul[$x]','$tgl_keluar_ekskul[$x]','$jabatan_ekskul[$x]','$lokasi_ekskul[$x]','$aktifitas_ekskul[$x]')";
	$qry13=mysql_query($sql13) or die(mysql_error());

	$sql14="INSERT INTO data_prestasi VALUES ('','$prestasiID','$peng[$x]','$tgl_peng[$x]','$desc_peng[$x]')";
	$qry14=mysql_query($sql14) or die(mysql_error());

	$sql15="INSERT INTO data_sosial VALUES ('','$sosialID','$nama_keg[$x]','$thn_keg[$x]','$lokasi_keg[$x]')";
	$qry15=mysql_query($sql15) or die(mysql_error());
} 


$sql_daftar="UPDATE daftar SET st = 'Y' WHERE email = '".$pecah_data[0]."' AND pass = '".$pecah_data[1]."'";
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