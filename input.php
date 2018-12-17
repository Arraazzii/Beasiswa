<?php require_once('admin/lib/config.php');
session_start();
if (empty($_SESSION['data'])){?>
 <script language="javascript"> 
  document.location.href="http://japfafoundation.org";
</script>
<?php }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulir Pendaftaran Beasiswa Prestasi SMK</title>
<!-- <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> -->
<script type="text/javascript" src="js/ajax_kota.js"></script>
<link href="" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/animate.min.css">
<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="bpi.css" rel="stylesheet" type="text/css" />
<link href="themes/base/jquery.ui.all.css" rel="stylesheet" type="text/css" />

</head>

<body background="img/b.jpg" style="background-size:cover">

<style type="text/css">
  #nomer{
    width: 70%;
    height:  = 30px;
  }
  #tahun{
    width: 60%;
    height:  = 30px;

  }
  
</style>

<script>
  $(function() {
    /*$( "#pengu_bea" ).datepicker({
      changeMonth: true,
      changeYear: true 
    });*/

  });
  </script>


<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">A. DATA PRIBADI</a></li>
  <li><a data-toggle="tab" href="#menu1">B. DATA SEKOLAH</a></li>
  <li><a data-toggle="tab" href="#menu2">C. DATA ORANG TUA SISWA</a></li>
  <li><a data-toggle="tab" href="#menu3">D. ESAI</a></li>
</ul>
 <?php 
/* if(isset($_GET['data'])){
  $data = $_GET['data'];
 }else{*/
  $data = $_SESSION['data'];

 //}
     $queryall=mysql_query("SELECT * FROM info_beasiswa where st= 'Y'");
     $dataall=mysql_fetch_array($queryall);
  ?>
<form class="form-horizontal" method="POST" action="include/proses_input_data.php" id="myForm" name="myForm" enctype="multipart/form-data" onsubmit="return validateForm()">
<!--Tab 1 -->
<input type="hidden" name="id_no_beasiswa" id="id_no_beasiswa" value="<?php echo $dataall[0]; ?>">
<input type="hidden" name="jenis_tingkat_bea" id="jenis_tingkat_bea" value="">
<input type="hidden" name="jenis_tingkat_nya" id="jenis_tingkat_nya" value="">
<div class="tab-content">
  <div id="home" class="tab-pane fade in active bg_tab">
    <p><h3>&nbsp;&nbsp;A. DATA PRIBADI</h3></p>
    <div class="col-md-6 col-lg-6" >
  <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nomer Induk Siswa /NIP/NIM </font></label>
    <input type="text" name="nisn" id="nisn" class="form-control"  value="">
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <input type="hidden" name="data_email" id="data_email" value="<?php echo $data; ?>">
    <label for="exampleInputEmail1"><font color="#FFF">Nama Lengkap Siswa</font></label>
    <input type="text" name="nama" id="nama" class="form-control"  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Bidang Keahlian/Jurusan</font></label>
     <select class="form-control" name="pendidikan_tingkat" id="pendidikan_tingkat" onchange="jenis_pendidikan(this.value)">
       <?php 
          $querytingkat=mysql_query("SELECT a.id_tingkat AS id_tingkat, a.level AS level, a.nama_tingkat AS nama_tingkat FROM tingkat AS a, jenis_det b where a.id_tingkat = b.id_tingkat  AND b.id_jenis = '".$dataall['jenjang']."' AND a.st= 'Y' order by nama_tingkat");
          while ($datatingkat=mysql_fetch_array($querytingkat)){
            echo '<option value="'.$datatingkat['id_tingkat'].'-'.$datatingkat['level'].'">'.$datatingkat['nama_tingkat'].'</option>';
          }
          ?>
     </select>
    </td>
   </tr>
<!--    <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Bidang Keahlian/Jurusan</font></label>
    <input type="text" name="bidang" id="bidang" class="form-control"  >
    </td>
   </tr> -->
   <!-- <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Program Keahlian</font></label>
    <input type="text" name="bidang_studi" id="bidang_studi" class="form-control"  >
    </td>
   </tr> -->
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Kelas/Semester</font></label>
    <input type="text" name="kelas" id="kelas" class="form-control"  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Tempat Lahir</font></label>
    <input type="text" name="tempat_la" id="tempat_la" class="form-control"  >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Tanggal Lahir</font></label>
  <!--   <input type="text" name="tgl_la" id="tgl_la" class="form-control"  > -->
    <input type="text" name="tgl_la" id="tgl_la" class="form-control" placeholder="DD/MM/YY">
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Alamat Tinggal Siswa</font></label>
    <input type="text" name="alamat" id="alamat" class="form-control"  >
    </td>
    </tr>
    <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Provinsi</font></label>
    <select class="form-control" name="prov" id="prov" onchange="ajaxkota(this.value)">
          <option value="kosong">Pilih Provinsi</option>
          <?php 
          $queryProvinsi=mysql_query("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
          while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
            echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'&'.$dataProvinsi['lokasi_nama'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
          }
          ?>
        <select>
    </td>
   </tr>
    <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kabupaten</font></label>
    <select name="kab" id="kab" onchange="ajaxkec(this.value)" class="form-control"  >
          <option value="kosong">Pilih Kota</option>
        </select>
    <!-- <input type="text" name="kab" id="kab" class="form-control"  > -->
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kecamatan</font></label>
    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
    <select name="kec" id="kec" class="form-control"  >
          <option value="kosong">Pilih Kecamatan</option>
        </select>
    </td>
   </tr>
    <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="">&nbsp;</td>
  </tr>
</table>
</div>
  </div>
  <!--tab1 table2 -->
  <div class="col-md-6 col-lg-6" >
  <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>
  </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nama Pemilik Rekening</font></label>
    <input type="text" name="nama_reg" id="nama_reg" class="form-control"  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nomer Rekening bank</font></label>
    <input type="text" name="no_reg" id="no_reg" class="form-control"  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nama Bank</font></label>
    <input type="text" name="bank" id="bank" class="form-control"  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Cabang</font></label>
    <input type="text" name="cabang" id="cabang" class="form-control"  >
    </td>
    </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Apabila belum memiliki Rekening Pribadi, Harap mencantumkan rekening orang tua/wali</font></label>
    </td>
    </tr>
   </tr>
    <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="">&nbsp;</td>
  </tr>
</table>
</div>
  <!--tab1 table3 -->
<div class="table-responsive">
  <table border="0" align="center" class="table">
  <tbody><tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center">&nbsp;</td>
  </tr>
    <tr><td class="bgisitabel" align="left" colspan="2">
   <label><font color="#FFF">Upload Photo</font></label><br>
          <input id="uploadFile" placeholder="Pilih Gambar..." disabled="disabled" />
<div class="fileUpload btn btn-lg btn-primary">
    <span>Pilih Gambar</span>
    <input id="uploadBtn" type="file" class="upload" name="myFile" />
</div>
    </td>
    </tr>
     <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">* Upload Gambar Dengan Ukuran 4x4, Size/kapasitas gambar max 1Mb dengan jenis file jpg atau png </font></label>
    </td>
    </tr>
    <tr>
    <td id="warnaabutua"></td>
    <td id="warnaabutua" align="right" colspan="">&nbsp;</td>
  </tr>
</tbody>
</table>
</div>

  </div>
  </div>


  <!--Tab 1 akhir -->
  <!--Tab 2 -->
  <div id="menu1" class="tab-pane fade bg_tab">
    <h3>&nbsp;&nbsp;B. DATA SEKOLAH</h3>
    <div class="col-md-6 col-lg-6" >
  <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>
  </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nama Sekolah</font></label>
    <input type="text" name="nama_sek" id="nama_sek" class="form-control"  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">No Pokok Statistik Nasional</font></label>
    <input type="text" name="npsn" id="npsn" class="form-control"  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Alamat Sekolah</font></label>
    <input type="text" name="alamat_sek" id="alamat_sek" class="form-control"  >
    </td>
    </tr>
    <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Provinsi</font></label>
    <!-- <input type="text" name="prov_sek" id="rov_sek" class="form-control"  > -->
    <select class="form-control" name="prov_sek" id="prov_sek" onchange="ajaxkota_sek(this.value)">
          <option value="kosong">Pilih Provinsi</option>
          <?php 
          $queryProvinsi=mysql_query("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
          while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
            echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'&'.$dataProvinsi['lokasi_nama'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
          }
          ?>
        <select>
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kabupaten</font></label>
    <!-- <input type="text" name="kab_sek" id="kab_sek" class="form-control"  > -->
     <select name="kab_sek" id="kab_sek" onchange="ajaxkec_sek(this.value)" class="form-control"  >
          <option value="kosong">Pilih Kota</option>
        </select>
    </td>
   </tr>
  <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kecamatan</font></label>
    <!-- <input type="text" name="kec_sek" id="kec_sek" class="form-control"  > -->
    <select name="kec_sek" id="kec_sek" class="form-control"  >
          <option value="kosong">Pilih Kecamatan</option>
        </select>

    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kode Pos :</font></label>
    <input type="text" name="pos_sek" id="pos_sek" class="form-control"  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Telepon Sekolah</font></label>
    <input type="text" name="telp_sek" id="telp_sek" class="form-control"  >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Fax Sekolah :</font></label>
    <input type="text" name="fax_sek" id="fax_sek" class="form-control"  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Email Sekolah</font></label>
    <input type="text" name="email_sek" id="email_sek" class="form-control"  >
    </td>
    </tr>
    <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="">&nbsp;</td>
  </tr>
</table>
</div>
  </div>
    <div class="col-md-6 col-lg-6" >
  <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>
  </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nama Wali Kelas/ Penasehat Akademik</font></label>
    <input type="text" name="nama_wali_pena" id="nama_wali_pena" class="form-control"  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nomer Hp :</font></label>
    <input type="text" name="no_wali_pena" id="no_wali_pena" class="form-control"  >
    </td>
   </tr>
    <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="">&nbsp;</td>
  </tr>
</table>
</div>
</div>
  </div>
  <!--Tab 3 -->
  <div id="menu2" class="tab-pane fade bg_tab">
    <h3>&nbsp;&nbsp;C. DATA ORANG TUA SISWA</h3>
    <div class="col-md-6 col-lg-6" >
  <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>
  </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nama Orang Tua</font></label>
    <input type="text" name="nama_ortu" id="nama_ortu" class="form-control" >
    </td>
   </tr>
    <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Pekerjaan Orang Tua</font></label>
    <input type="text" name="peker_ortu" id="peker_ortu" class="form-control" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Alamat Tinggal Orang Tua</font></label>
    <input type="text" name="alamat_ortu" id="alamat_ortu" class="form-control" >
    </td>
   </tr>
     <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Provinsi</font></label>
    <!-- <input type="text" name="prov_ortu" id="prov_ortu" class="form-control"  > -->
    <select class="form-control" name="prov_ortu" id="prov_ortu" onchange="ajaxkota_ortu(this.value)">
          <option value="kosong">Pilih Provinsi</option>
          <?php 
          $queryProvinsi=mysql_query("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
          while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
            echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'&'.$dataProvinsi['lokasi_nama'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
          }
          ?>
        <select>
    </td>
   </tr>
    <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kabupaten</font></label>
    <!-- <input type="text" name="kec_ortu" id="kec_ortu" class="form-control"  > -->
    <select name="kab_ortu" id="kab_ortu" onchange="ajaxkec_ortu(this.value)" class="form-control"  >
          <option value="kosong">Pilih Kota</option>
        </select>
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kabupaten</font></label>
    <!-- <input type="text" name="kab_ortu" id="kab_ortu" class="form-control"  > -->
    <select name="kec_ortu" id="kec_ortu" class="form-control"  >
          <option value="kosong">Pilih Kecamatan</option>
        </select>
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Telepon Orang Tua</font></label>
    <input type="text" name="telp_ortu" id="telp_ortu" class="form-control"  >
    </td>
    </tr>
    <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="">&nbsp;</td>
  </tr>
</table>
</div>
  </div>
  </div>
  <!--Tab 4 -->

  <div id="menu3" class="tab-pane fade bg_tab">
    <div class="col-md-6 col-lg-6" >
    <h3>&nbsp;&nbsp;D. Nilai Raport/NEM/IPK</h3>
      <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>
  </tr>
 <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nilai Rata - Rata Angka Pengetahuan/Umum/Ipk</font></label>
        <select class="form-control" name="rapot" id="rapot">
      <?php 
          $querypoint=mysql_query("SELECT a.no_beasiswa AS no_beasiswa, a.index0 AS index0, a.spd0 AS spd0, a.index1 AS index1, a.spd1 AS spd1, a.index2 AS index2, a.spd2 AS spd2, a.index3 AS index3, a.spd3 AS spd3, a.poin1 AS poin1, a.poin2 AS poin2, a.poin3 AS poin3, a.poin4 AS poin4  FROM admis_nilai_raport a, info_beasiswa b where b.st= 'Y' AND a.no_beasiswa = b.no_beasiswa");
          $datapoint=mysql_fetch_array($querypoint);
            echo '<option value="'.$datapoint['poin1'].'">'.$datapoint['index0'].'-'.$datapoint['spd0'].'</option>';

             echo '<option value="'.$datapoint['poin2'].'">'.$datapoint['index1'].'-'.$datapoint['spd1'].'</option>';

              echo '<option value="'.$datapoint['poin3'].'">'.$datapoint['index2'].'-'.$datapoint['spd2'].'</option>';

               echo '<option value="'.$datapoint['poin4'].'">'.$datapoint['index3'].'-'.$datapoint['spd3'].'</option>';
          ?>
     </select>
    </td>
   </tr>
   <tr id="baris_ketrampilan">
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nilai Rata - Rata Angka Raport Katerampilan/Khusus</font></label>
    <select class="form-control" name="rapot_ket" id="rapot_ket">
      <?php 
          $querypoint=mysql_query("SELECT a.no_beasiswa AS no_beasiswa, a.index0 AS index0, a.spd0 AS spd0, a.index1 AS index1, a.spd1 AS spd1, a.index2 AS index2, a.spd2 AS spd2, a.index3 AS index3, a.spd3 AS spd3, a.poin1 AS poin1, a.poin2 AS poin2, a.poin3 AS poin3, a.poin4 AS poin4  FROM admis_nilai_ket a, info_beasiswa b where b.st= 'Y' AND a.no_beasiswa = b.no_beasiswa");
          $datapoint=mysql_fetch_array($querypoint);
            echo '<option value="'.$datapoint['poin1'].'">'.$datapoint['index0'].'-'.$datapoint['spd0'].'</option>';

             echo '<option value="'.$datapoint['poin2'].'">'.$datapoint['index1'].'-'.$datapoint['spd1'].'</option>';

              echo '<option value="'.$datapoint['poin3'].'">'.$datapoint['index2'].'-'.$datapoint['spd2'].'</option>';

               echo '<option value="'.$datapoint['poin4'].'">'.$datapoint['index3'].'-'.$datapoint['spd3'].'</option>';
          ?>
     </select>
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF"><b>Keterangan : <br> Nilai Rata - Rata = total jumlah nilai / jumlah mata pelajaran</b></font></label>
    </td>
   </tr>

  <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="">&nbsp;</td>
  </tr>
</table>
</div>

<h3>&nbsp;&nbsp;D. Prestasi</h3>
<input type="hidden" name="jum_pres" id="jum_pres" class="form-control" id="exampleInputEmail1" value="1" >
<div class="btn btn-primary" style=" padding:10px 20px 10px 20px; margin-bottom:10px;"> 
  <a href="#" onclick="myFunction()" ><font color="#FFF">Tambah Prestasi</font></a>
  </div>
 <div class="table-responsive">
  <table border="0" align="center" class="table" id="myTable">
<tr>
    <td class="lekukantabel1" id="warnaabutua" colspan="2">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>

  </tr>
  
 <tr>
    <td align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Prestasi</font></label>
     <select name="presta1" id="presta1" class="form-control">
        <option value="akademik">akademik</option>
        <option value="non akademik">non akademik</option>
      </select>
    </td>
    <td  align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Uraian</font></label>
    <input type="text" name="nama_presta1" id="nama_presta1" class="form-control" id="exampleInputEmail1" >
    </td>
    <td align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Tingkat Prestasi</font></label>
    <select name="tingkat_presta1" id="tingkat_presta1" class="form-control">
        <option value="lokal">lokal</option>
        <option value="kecamatan/kabupaten">kecamatan/kabupaten</option>
        <option value="nasional">nasional</option>
        <option value="inter nasional">inter nasional</option>
      </select>
    </td>
  </tr>
  <tr>
    <td  id="warnaabutua" colspan="2"></td>
    <td  id="warnaabutua" align="right" colspan="">&nbsp;</td>
  </tr>
</table>
</div>

  </div>

<h3>&nbsp;&nbsp;D. ESAI</h3>
    <div class="col-md-6 col-lg-6" >
<div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <label for="exampleInputEmail1"><font color="#FFF">1. Ceritakan prestasi tertinggi di sekolah yang pernah atau sudah anda capai.</font></label>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <textarea class="form-control" rows="5" id="esai" name="esai"></textarea>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <label for="exampleInputEmail1"><font color="#FFF">2. Perubahan apa yang sudah anda lakukan di rumah dan di sekolah? Jelaskan.</font></label>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <textarea class="form-control" rows="5" id="esai2" name="esai2"></textarea>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <label for="exampleInputEmail1"><font color="#FFF">3. Rencana seperti apa yang akan anda lakukan apabila anda terpilih sebagai penerima beasiswa JAPFA Foundation? Jelaskan</font></label>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <textarea class="form-control" rows="5" id="esai3" name="esai3"></textarea>
    </td>
  </tr>
  <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="">&nbsp;</td>
  </tr>
  <tr>
       <td  colspan="3" align="center" id="BG_menu_data_Calon_Penerima" style="padding-top:10px"><button type="submit" class="btn btn-warning" >&nbsp;Kirim Formulir Pendaftaran&nbsp;</button></td>
     </tr>
</table>
</div>
</div>
  </div>
  </div>
</div>
</form>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="js/bootstrap2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script> 
<script src="js/jquery-1.7.2.js"></script>
<script src="ui/jquery.ui.core.js"></script>
<script src="ui/jquery.ui.widget.js"></script>
<script src="ui/jquery.ui.datepicker.js"></script>
<script src="include/ckeditor/ckeditor.js"></script>
 <script type="text/javascript">
var url2 ="http://localhost/beasiswa3/include/jenis.php"; 
            $(document).ready(function () {
              $('#tgl_la').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'yy-mm-dd'
                });
                $('#baris_ketrampilan').show();

                var data_tingkat = $('#pendidikan_tingkat').val();
                var no_bea = $('#id_no_beasiswa').val();
                var stringBaru = data_tingkat.split("-");
                var indi2 = stringBaru[1];
                $('#jenis_tingkat_nya').val(stringBaru[0]);
                 if(indi2=='T'){
                       $('#baris_ketrampilan').hide();
                       $('#jenis_tingkat_bea').val('T');
                }else{
                      $('#baris_ketrampilan').show();
                      $('#jenis_tingkat_bea').val('S');
                }
                  var tampung ="";
                      $.getJSON(url2, {no_bea : no_bea, indi2 : indi2}, function(data2) {
                             $.each(data2, function(index, element) {
                             tampung +="<option value='"+element.poin1+"'>"+element.index0+"-"+element.spd0+"</option>";
                             tampung +="<option value='"+element.poin2+"'>"+element.index1+"-"+element.spd1+"</option>";
                             tampung +="<option value='"+element.poin3+"'>"+element.index2+"-"+element.spd2+"</option>";
                             tampung +="<option value='"+element.poin4+"'>"+element.index3+"-"+element.spd3+"</option>";
                         
                        });
                           $('#rapot').html(tampung);
                      });
            });

function jenis_pendidikan(data) {
  var id =  data;
  var no_bea = $('#id_no_beasiswa').val();
  var stringBaru = id.split("-");
  var indi2 = stringBaru[1];
  $('#jenis_tingkat_nya').val(stringBaru[0]);
  if(indi2=='T'){
      $('#baris_ketrampilan').hide();
      $('#jenis_tingkat_bea').val('T');
  }else{
      $('#baris_ketrampilan').show();
      $('#jenis_tingkat_bea').val('S');
  }
  var tampung ="";
      $.getJSON(url2, {no_bea : no_bea, indi2 : indi2}, function(data2) {
             $.each(data2, function(index, element) {
             tampung +="<option value='"+element.poin1+"'>"+element.index0+"-"+element.spd0+"</option>";
             tampung +="<option value='"+element.poin2+"'>"+element.index1+"-"+element.spd1+"</option>";
             tampung +="<option value='"+element.poin3+"'>"+element.index2+"-"+element.spd2+"</option>";
             tampung +="<option value='"+element.poin4+"'>"+element.index3+"-"+element.spd3+"</option>";
         
        });
           $('#rapot').html(tampung);
      });
 }

document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};

function validateForm() {
  // data siswa
    var input1 = document.forms["myForm"]["nama"].value;
    var input2 = document.forms["myForm"]["nisn"].value;
/*    var input3 = document.forms["myForm"]["bidang"].value;*/
    var input4 = document.forms["myForm"]["pendidikan_tingkat"].value;
    var input5 = document.forms["myForm"]["kelas"].value;
    var input6 = document.forms["myForm"]["tempat_la"].value;
    var input7 = document.forms["myForm"]["tgl_la"].value;
    var input8 = document.forms["myForm"]["alamat"].value;
    var input9 = document.forms["myForm"]["kec"].value;
    var input10 = document.forms["myForm"]["kab"].value;
    var input11 = document.forms["myForm"]["prov"].value;
    var input12 = document.forms["myForm"]["nama_reg"].value;
    var input13 = document.forms["myForm"]["no_reg"].value;
    var input14 = document.forms["myForm"]["bank"].value;
    var input15 = document.forms["myForm"]["cabang"].value;

    //data sekolah
    var input_sek1 = document.forms["myForm"]["nama_sek"].value;
    var input_sek2 = document.forms["myForm"]["npsn"].value;
    var input_sek3 = document.forms["myForm"]["alamat_sek"].value;
    var input_sek4 = document.forms["myForm"]["kec_sek"].value;
    var input_sek5 = document.forms["myForm"]["kab_sek"].value;
    var input_sek6 = document.forms["myForm"]["prov_sek"].value;
    var input_sek7 = document.forms["myForm"]["pos_sek"].value;
    var input_sek8 = document.forms["myForm"]["telp_sek"].value;
    var input_sek9 = document.forms["myForm"]["email_sek"].value;
    var input_sek10 = document.forms["myForm"]["nama_wali_pena"].value;
    var input_sek11 = document.forms["myForm"]["no_wali_pena"].value;


    //orang tua
    var input_ortu1 = document.forms["myForm"]["nama_ortu"].value;
    var input_ortu2 = document.forms["myForm"]["alamat_ortu"].value;
    var input_ortu3 = document.forms["myForm"]["kec_ortu"].value;
    var input_ortu4 = document.forms["myForm"]["kab_ortu"].value;
    var input_ortu5 = document.forms["myForm"]["prov_ortu"].value;
    var input_ortu6 = document.forms["myForm"]["telp_ortu"].value;
     //rapot
    var input_esai = document.forms["myForm"]["esai"].value;
    //esai
    var input_esai2 = document.forms["myForm"]["esai2"].value;
    var input_esai3 = document.forms["myForm"]["esai3"].value;

    //valid siswa
    if (input1 == null || input1 == "") {
        alert("Name pada menu tab A. data siswa wajib diisi!");
        $('#nama').focus();
        return false;
    }else if (input2 == null || input2 == "") {
        alert("Nomer induk sisiwa nasional pada menu tab A. data siswa wajib diisi!");
        $('#nisn').focus();
        return false;
    }/*else if (input3 == null || input3 == "") {
        alert("Bidang Keahlian pada menu tab A. data siswa wajib diisi!");
        $('#bidang').focus();
        return false;
    }*/else if (input4 == null || input4 == "") {
        alert("Bidang Keahlian/Jurusan Keahlian pada menu tab A. data siswa wajib diisi!");
        $('#bidang_studi').focus();
        return false;
    }else if (input5 == null || input5 == "") {
        alert("Kelas pada menu tab A. data siswa wajib diisi!");
        $('#bidang_studi').focus();
        return false;
    }else if (input6 == null || input6 == "") {
        alert("Tempat Lahir pada menu tab A. data siswa wajib diisi!");
        $('#tempat_la').focus();
        return false;
    }else if (input7 == null || input7 == "") {
        alert("Tanggal Lahir pada menu tab A. data siswa wajib diisi!");
        $('#tgl_la').focus();
        return false;
    }else if (input8 == null || input8 == "") {
        alert("Alamat pada menu tab A. data siswa wajib diisi!");
        $('#alamat').focus();
        return false;
    }else if (input9 == null || input9 == ""   || input9=="kosong") {
        alert("Kecamatan pada menu tab A. data siswa wajib diisi!");
        $('#kec').focus();
        return false;
    }else if (input10 == null || input10 == ""  || input10=="kosong") {
        alert("Kabupaten pada menu tab A. data siswa wajib diisi!");
        $('#kab').focus();
        return false;
    }else if (input11 == null || input11 == ""  || input11=="kosong") {
        alert("Provinsi pada menu tab A. data siswa wajib diisi!");
        $('#prov').focus();
        return false;
    }else if (input12 == null || input12 == "") {
        alert("Nama Pemilik Rekening pada menu tab A. data siswa wajib diisi!");
        $('#nama_reg').focus();
        return false;
    }else if (input13 == null || input13 == "") {
        alert("Nomer Rekening Bank pada menu tab A. data siswa wajib diisi!");
        $('#no_reg').focus();
        return false;
    }else if (input14 == null || input14 == "") {
        alert("Bank pada menu tab A. data siswa wajib diisi!");
        $('#bank').focus();
        return false;
    }else if (input15 == null || input15 == "") {
        alert("Cabang pada menu tab A. data siswa wajib diisi!");
        $('#cabang').focus();
        return false;
    }else if (input_sek1 == null || input_sek1 == "") {
        alert("Nama Sekolah pada menu tab B. data sekolah wajib diisi!");
        $('#nama_sek').focus();
        return false;
    }else if (input_sek2 == null || input_sek2 == "") {
        alert("No. Pokok Statistik Nasional pada menu tab B. data sekolah wajib diisi!");
        $('#npsn').focus();
        return false;
    }else if (input_sek3 == null || input_sek3 == "") {
        alert("Alamat Sekolah pada menu tab B. data sekolah wajib diisi!");
        $('#alamat_sek').focus();
        return false;
    }else if (input_sek2 == null || input_sek2 == "") {
        alert("No. Pokok Statistik Nasional pada menu tab B. data sekolah wajib diisi!");
        $('#npsn').focus();
        return false;
    }else if (input_sek3 == null || input_sek3 == "") {
        alert("Alamat Sekolah pada menu tab B. data sekolah wajib diisi!");
        $('#npsn').focus();
        return false;
    }else if (input_sek4 == null || input_sek4 == ""  || input_sek4=="kosong") {
        alert("Kecamatan pada menu tab B. data sekolah wajib diisi!");
        $('#kec_sek').focus();
        return false;
    }else if (input_sek5 == null || input_sek5 == ""  || input_sek5=="kosong") {
        alert("Kabupaten pada menu tab B. data sekolah wajib diisi!");
        $('#kec_sek').focus();
        return false;
    }else if (input_sek6 == null || input_sek6 == ""  || input_sek6=="kosong") {
        alert("Provinsi pada menu tab B. data sekolah wajib diisi!");
        $('#prov_sek').focus();
        return false;
    }else if (input_sek7 == null || input_sek7 == "") {
        alert("Kode Pos pada menu tab B. data sekolah wajib diisi!");
        $('#pos_sek').focus();
        return false;
    }else if (input_sek8 == null || input_sek8 == "") {
        alert("Telepon Sekolah Pos pada menu tab B. data sekolah wajib diisi!");
        $('#telp_sek').focus();
        return false;
    }else if (input_sek9 == null || input_sek9 == "") {
        alert("Email pada menu tab B. data sekolah wajib diisi!");
        $('#email_sek').focus();
        return false;
    }else if (input_sek10 == null || input_sek10 == "") {
        alert(" Nama Wali Kelas/ Penasehat Akademik pada menu tab B. data sekolah wajib diisi!");
        $('#nama_wali_pena').focus();
        return false;
    }else if (input_sek11 == null || input_sek11 == "") {
        alert(" No Wali Kelas/ Penasehat Akademik pada menu tab B. data sekolah wajib diisi!");
        $('#no_wali_pena').focus();
        return false;
    }else if (input_ortu1 == null || input_ortu1 == "") {
        alert("Nama Orang Tua pada menu tab C. data Orang Tua Siswa wajib diisi!");
        $('#nama_ortu').focus();
        return false;
    }else if (input_ortu2 == null || input_ortu2 == "") {
        alert("Alamat Tinggal pada menu tab C. data Orang Tua Siswa wajib diisi!");
        $('#alamat_ortu').focus();
        return false;
    }else if (input_ortu3 == null || input_ortu3 == "" || input_ortu3=="kosong") {
        alert("Kecamatan pada menu tab C. data Orang Tua Siswa wajib diisi!");
        $('#kec_ortu').focus();
        return false;
    }else if (input_ortu4 == null || input_ortu4 == "" || input_ortu4=="kosong") {
        alert("Kabupaten pada menu tab C. data Orang Tua Siswa wajib diisi!");
        $('#kab_ortu').focus();
        return false;
    }else if (input_ortu5 == null || input_ortu5 == "" || input_ortu5=="kosong") {
        alert("Provinsi pada menu tab C. data Orang Tua Siswa wajib diisi!");
        $('#prov_ortu').focus();
        return false;
    }else if (input_ortu6 == null || input_ortu6 == "") {
        alert("Telepon pada menu tab C. data Orang Tua Siswa wajib diisi!");
        $('#telp_ortu').focus();
        return false;
    }else if (input_esai == null || input_esai == "") {
        alert("Esai pada menu tab D.Esai wajib diisi!");
        $('#telp_ortu').focus();
        return false;
    }else if (input_esai.length > 1000) {
        alert("Esai 1 pada menu tab D.Esai tidak boleh lebih dari 1000 karakter!");
        $('#esai').focus();
        return false;
    }else if (input_esai2.length > 1000) {
        alert("Esai 2 pada menu tab D.Esai tidak boleh lebih dari 1000 karakter!");
        $('#esai2').focus();
        return false;
    }else if (input_esai3.length > 1000) {
        alert("Esai 3 pada menu tab D.Esai tidak boleh lebih dari 1000 karakter!");
        $('#esai3').focus();
        return false;
    }else if (input2 != null || input2 != ""){
      alert(url2);
      var indi2 = 'cek';
      var no_bea= input2;
      var tampung ="";
          $.getJSON(url2, {no_bea : no_bea, indi2 : indi2}, function(data2) {
             if(data2=='0'){
                send();
                return false;
             }else{

                alert('Nomer Induk Siswa /NIP/NIM Telah tefdaftar!');
                 $('#nisn').focus();
                return false;
             }
          });
    }
}
</script>
<script type="text/javascript">
 var jum = 2;
 

 
function myFunction() {
   var table = document.getElementById("myTable");
    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var isi1 = "<label for='exampleInputEmail1'><font color='#FFF'>Prestasi</font></label><select name='presta"+jum+"' id='presta"+jum+"' class='form-control'><option value='akademik'>akademik</option><option value='non akademik'>non akademik</option></select>";
    var isi2 = "<label for='exampleInputEmail1'><font color='#FFF'>Uraian</font></label><input type='text' name='nama_presta"+jum+"' id='nama_presta"+jum+"' class='form-control' id='exampleInputEmail1' value = '' >";
    var isi3 = "<label for='exampleInputEmail1'><font color='#FFF'>Tingkat Prestasi</font></label><select name='tingkat_presta"+jum+"' id='tingkat_presta"+jum+"' class='form-control'> <option value='lokal'>lokal</option><option value='kecamatan/kabupaten'>kecamatan/kabupaten</option><option value='nasional'>nasional</option><option value='inter nasional'>inter nasional</option></select>";
    cell1.innerHTML = isi1;
    cell2.innerHTML = isi2;
    cell3.innerHTML = isi3;
    $('#jum_pres').val(jum);
    jum++;
}
</script>
</body>
</html>