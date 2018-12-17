<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/animate.min.css">
<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="bpi.css" rel="stylesheet" type="text/css" />
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
  <li class="active"><a data-toggle="tab" href="#home">A. DATA SISWA</a></li>
  <li><a data-toggle="tab" href="#menu1">B. DATA SEKOLAH</a></li>
  <li><a data-toggle="tab" href="#menu2">C. DATA ORANG TUA SIAWA</a></li>
  <li><a data-toggle="tab" href="#menu3">D. ESAI</a></li>
</ul>
<form class="form-horizontal" method="post" action="include/proses_input_data.php" id="myForm" name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
<!--Tab 1 -->
<div class="tab-content">
  <div id="home" class="tab-pane fade in active bg_tab">
    <p><h3>&nbsp;&nbsp;A. DATA SISWA</h3></p>
    <div class="col-md-6 col-lg-6" >
  <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>
  </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <?php $data = $_GET['data']; ?>
    <input type="hidden" name="data_email" id="data_email" value="<?php echo $data; ?>">
    <label for="exampleInputEmail1"><font color="#FFF">Nama Lengkap Siswa</font></label>
    <input type="text" name="nama" id="nama" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">No Induk Siswa Nasional</font></label>
    <input type="text" name="nisn" id="nisn" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Bidang Keahlian</font></label>
    <input type="text" name="bidang" id="bidang" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Bidang Studi Keahlian</font></label>
    <input type="text" name="bidang_studi" id="bidang_studi" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Kelas</font></label>
    <input type="text" name="kelas" id="kelas" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Tempat Lahir</font></label>
    <input type="text" name="tempat_la" id="tempat_la" class="form-control" id="exampleInputEmail1" >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Tanggal Lahir</font></label>
    <input type="text" name="tgl_la" id="tgl_la" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Alamat Tinggal Siswa</font></label>
    <input type="text" name="alamat" id="alamat" class="form-control" id="exampleInputEmail1" >
    </td>
    </tr>
    <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kecamatan</font></label>
    <input type="text" name="kec" id="kec" class="form-control" id="exampleInputEmail1" >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kabupaten</font></label>
    <input type="text" name="kab" id="kab" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Provinsi</font></label>
    <input type="text" name="prov" id="prov" class="form-control" id="exampleInputEmail1" >
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
    <input type="text" name="nama_reg" id="nama_reg" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nomer Rekening bank</font></label>
    <input type="text" name="no_reg" id="no_reg" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nama Bank</font></label>
    <input type="text" name="bank" id="bank" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Cabang</font></label>
    <input type="text" name="cabang" id="cabang" class="form-control" id="exampleInputEmail1" >
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
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>
  </tr>
    <td class="bgisitabel" align="left" colspan="2">
   <label><font color="#FFF">Upload Photo</font></label>
    <input type="file" name="pic" class="form-control" style="width:50%;"accept="image/gif,image/jpeg" />
<small style="color:white;"> * Upload Gambar Dengan Ukuran 4x4 </small>
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
    <input type="text" name="nama_sek" id="nama_sek" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">No Pokok Statistik Nasional</font></label>
    <input type="text" name="npsn" id="npsn" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Alamat Sekolah</font></label>
    <input type="text" name="alamat_sek" id="alamat_sek" class="form-control" id="exampleInputEmail1" >
    </td>
    </tr>
    <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kecamatan</font></label>
    <input type="text" name="kec_sek" id="kec_sek" class="form-control" id="exampleInputEmail1" >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kabupaten</font></label>
    <input type="text" name="kab_sek" id="kab_sek" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
  <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Provinsi</font></label>
    <input type="text" name="prov_sek" id="rov_sek" class="form-control" id="exampleInputEmail1" >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kode Pos :</font></label>
    <input type="text" name="pos_sek" id="pos_sek" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Telepon Sekolah</font></label>
    <input type="text" name="telp_sek" id="telp_sek" class="form-control" id="exampleInputEmail1" >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Fax Sekolah :</font></label>
    <input type="text" name="fax_sek" id="fax_sek" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Email Sekolah</font></label>
    <input type="text" name="email_sek" id="email_sek" class="form-control" id="exampleInputEmail1" >
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
    <input type="text" name="nama_ortu" id="nama_ortu" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Alamat Tinggal Orang Tua</font></label>
    <input type="text" name="alamat_ortu" id="alamat_ortu" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
    <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kecamatan</font></label>
    <input type="text" name="kec_ortu" id="kec_ortu" class="form-control" id="exampleInputEmail1" >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kabupaten</font></label>
    <input type="text" name="kab_ortu" id="kab_ortu" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Provinsi</font></label>
    <input type="text" name="prov_ortu" id="prov_ortu" class="form-control" id="exampleInputEmail1" >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Telepon Orang Tua</font></label>
    <input type="text" name="telp_ortu" id="telp_ortu" class="form-control" id="exampleInputEmail1" >
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
    <h3>&nbsp;&nbsp;D. ESAI (tidak lebih dari 1000 karakter)</h3>
    <div class="col-md-6 col-lg-6" >
  <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <label for="exampleInputEmail1"><font color="#FFF">1. Ceritakan secara singkat latar belakang keluarga Anda.</font></label>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <label for="exampleInputEmail1"><font color="#FFF">2. Mengapa Anda tertarik untuk mengikuti Program Beasiswa Prestasi JAPFA Foundation - SMK?</font></label>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <label for="exampleInputEmail1"><font color="#FFF">3. Mengapa Anda memilih untuk bersekolah di Sekolah Menegah Kejuruan di bidang Agribisnis dan Agroteknologi?</font></label>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <textarea class="form-control" rows="5" id="esai" name="esai"></textarea>
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
</body>
</html>