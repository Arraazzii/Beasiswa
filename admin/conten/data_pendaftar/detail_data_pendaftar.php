<?php include '../lib/config.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulir Pendaftaran Beasiswa Prestasi SMK</title>
<link href="" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/animate.min.css">
<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="bpi.css" rel="stylesheet" type="text/css" />
</head>

<body background="img/b.jpg" style="background-size:cover">
<div align="center"><h1>Detail Data Pendaftar</h1></div>
<br>
<center>
<a href="index.php?conten=data_pendaftar"><button type='button' class='btn btn-warning'><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button></a>
</center>
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
<?php 
$id = $_GET['id'];

$h = mysql_query("
SELECT
a.nin,
a.no_beasiswa,
a.tgl_daftar,
a.nama,
a.bidang_keahlian,
a.program_studi,
a.kls,
a.tempat,
a.tgl_la,
a.alamat,
a.kec,
a.kab,
a.prov,
a.pemil_rek,
a.no_rek,
a.nama_bank,
a.cabang,
a.foto,
a.esai1,
a.esai2,
a.esai3,
a.email,
a.`status`,
a.jam_daftar,
a.nilai_ak,
a.nilai_ket,
a.nilai_jpa,
a.nilai_jpna,
a.st_admis,
a.st_wawan,
a.nilai_wa1,
a.nilai_wa2,
a.nilai_wa3,
a.nilai_wa4,
a.nilai_wa5,
b.nin,
b.nama_sekolah,
b.npsn,
b.alamat,
b.kec,
b.kab,
b.prov,
b.kode_pos,
b.telp,
b.fax,
b.email,
c.nin,
c.nama,
c.pekerjaan,
c.alamat,
c.kec,
c.kab,
c.prov,
c.telp
FROM
data_pendaftar AS a ,
data_sekolah AS b ,
data_ortu AS c
WHERE
a.nin = b.nin AND
a.nin = c.nin AND
c.nin = ".$id."
  ");
while ( $hh = mysql_fetch_array($h)) {
?>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">A. DATA SISWA</a></li>
  <li><a data-toggle="tab" href="#menu1">B. DATA SEKOLAH</a></li>
  <li><a data-toggle="tab" href="#menu2">C. DATA ORANG TUA SIAWA</a></li>
  <li><a data-toggle="tab" href="#menu3">D. ESAI</a></li>
</ul>

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
    <input type="hidden" name="data_email" id="data_email">
    <label for="exampleInputEmail1"><font color="#FFF">Nama Lengkap Siswa</font></label>
    <input type="text" name="nama" id="nama" value="<?php echo $hh['3']; ?>" disabled class="form-control"  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nomer Induk Siswa Nasional</font></label>
    <input type="text" name="nisn" id="nisn" class="form-control" value="<?php echo $hh['0']; ?>" disabled>
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Bidang Keahlian</font></label>
    <input type="text" name="bidang" id="bidang" class="form-control" value="<?php echo $hh['4']; ?>" disabled>
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Program Keahlian</font></label>
    <input type="text" name="bidang_studi" id="bidang_studi" class="form-control" value="<?php echo $hh['5']; ?>" disabled >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Kelas</font></label>
    <input type="text" name="kelas" id="kelas" class="form-control" value="<?php echo $hh['6']; ?>" disabled  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Tempat Lahir</font></label>
    <input type="text" name="tempat_la" id="tempat_la" class="form-control" value="<?php echo $hh['7']; ?>" disabled >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Tanggal Lahir</font></label>
    <input type="text" name="tgl_la" id="tgl_la" class="form-control" value="<?php echo $hh['8']; ?>" disabled  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Alamat Tinggal Siswa</font></label>
    <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $hh['9']; ?>" disabled >
    </td>
    </tr>
    <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kecamatan</font></label>
    <input type="text" name="kec" id="kec" class="form-control"  value="<?php echo $hh['10']; ?>" disabled>
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kabupaten</font></label>
    <input type="text" name="kab" id="kab" class="form-control" value="<?php echo $hh['11']; ?>" disabled >
    </td>
   </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Provinsi</font></label>
    <input type="text" name="prov" id="prov" class="form-control"  value="<?php echo $hh['12']; ?>" disabled>
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
    <input type="text" name="nama_reg" id="nama_reg" class="form-control" value="<?php echo $hh['13']; ?>" disabled >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nomer Rekening bank</font></label>
    <input type="text" name="no_reg" id="no_reg" class="form-control" value="<?php echo $hh['14']; ?>" disabled  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nama Bank</font></label>
    <input type="text" name="bank" id="bank" class="form-control" value="<?php echo $hh['15']; ?>" disabled  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Cabang</font></label>
    <input type="text" name="cabang" id="cabang" class="form-control" value="<?php echo $hh['16']; ?>" disabled >
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
    <center>
<img height="400px" width="400px" src="../../img/profil/<?php echo $hh['17']; ?>" >
</center>
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
    <input type="text" name="nama_sek" id="nama_sek" class="form-control" value="<?php echo $hh['36']; ?>" disabled >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">No Pokok Statistik Nasional</font></label>
    <input type="text" name="npsn" id="npsn" class="form-control" value="<?php echo $hh['37']; ?>" disabled  >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Alamat Sekolah</font></label>
    <input type="text" name="alamat_sek" id="alamat_sek" class="form-control" value="<?php echo $hh['38']; ?>" disabled >
    </td>
    </tr>
    <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kecamatan</font></label>
    <input type="text" name="kec_sek" id="kec_sek" class="form-control" value="<?php echo $hh['39']; ?>" disabled >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kabupaten</font></label>
    <input type="text" name="kab_sek" id="kab_sek" class="form-control" value="<?php echo $hh['40']; ?>" disabled >
    </td>
   </tr>
  <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Provinsi</font></label>
    <input type="text" name="prov_sek" id="rov_sek" class="form-control" value="<?php echo $hh['41']; ?>" disabled >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kode Pos :</font></label>
    <input type="text" name="pos_sek" id="pos_sek" class="form-control"  value="<?php echo $hh['42']; ?>" disabled>
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Telepon Sekolah</font></label>
    <input type="text" name="telp_sek" id="telp_sek" class="form-control" value="<?php echo $hh['43']; ?>" disabled >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Fax Sekolah :</font></label>
    <input type="text" name="fax_sek" id="fax_sek" class="form-control" value="<?php echo $hh['44']; ?>" disabled >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Email Sekolah</font></label>
    <input type="text" name="email_sek" id="email_sek" class="form-control"  value="<?php echo $hh['45']; ?>" disabled>
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
    <input type="text" name="nama_ortu" id="nama_ortu" class="form-control" value="<?php echo $hh['47']; ?>" disabled>
    </td>
   </tr>
    <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Pekerjaan Orang Tua</font></label>
    <input type="text" name="peker_ortu" id="peker_ortu" class="form-control" value="<?php echo $hh['48']; ?>" disabled>
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Alamat Tinggal Orang Tua</font></label>
    <input type="text" name="alamat_ortu" id="alamat_ortu" class="form-control" value="<?php echo $hh['49']; ?>" disabled>
    </td>
   </tr>
    <tr>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kecamatan</font></label>
    <input type="text" name="kec_ortu" id="kec_ortu" class="form-control" value="<?php echo $hh['50']; ?>" disabled >
    </td>
    <td class="bgisitabel" align="left">
    <label for="exampleInputEmail1"><font color="#FFF">Kabupaten</font></label>
    <input type="text" name="kab_ortu" id="kab_ortu" class="form-control" value="<?php echo $hh['51']; ?>" disabled >
    </td>
   </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Provinsi</font></label>
    <input type="text" name="prov_ortu" id="prov_ortu" class="form-control" value="<?php echo $hh['52']; ?>" disabled >
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Telepon Orang Tua</font></label>
    <input type="text" name="telp_ortu" id="telp_ortu" class="form-control"  value="<?php echo $hh['53']; ?>" disabled>
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
    <h3>&nbsp;&nbsp;D. Nilai Raport</h3>
      <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>
  </tr>
 <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nilai Rata - Rata Angka Raport Pengetahuan</font></label>
    <input type="text" name="rapot" id="rapot" class="form-control"  value="<?php echo $hh['24']; ?>" disabled>
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1"><font color="#FFF">Nilai Rata - Rata Angka Raport Katerampilan</font></label>
     <input type="text" name="rapot_ket" id="rapot_ket" class="form-control"  value="<?php echo $hh['25']; ?>" disabled>
    
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
 <div class="table-responsive">
  <table border="0" align="center" class="table" id="myTable">
<tr>
    <td class="lekukantabel1" id="warnaabutua" colspan="2">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" >&nbsp;</td>

  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="3">
    <label for="exampleInputEmail1"><font color="#FFF">Nilai Rata - Rata Jumlah Prestasi Akademik</font></label>
    <input type="text" name="rapot" id="rapot" class="form-control"  value="<?php echo $hh['26']; ?>" disabled>
    </td>
   </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="3">
    <label for="exampleInputEmail1"><font color="#FFF">Nilai Rata - Rata Jumlah Non Prestasi Akademik</font></label>
    <input type="text" name="rapot" id="rapot" class="form-control"  value="<?php echo $hh['27']; ?>" disabled>
    </td>
   </tr>
  <tr>
    <td  id="warnaabutua" colspan="2"></td>
    <td  id="warnaabutua" align="right" colspan="">&nbsp;</td>
  </tr>
</table>
</div>

  </div>

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
      <label for="exampleInputEmail1"><font color="#FFF">1. Ceritakan prestasi tertinggi di sekolah yang pernah atau sudah anda capai.</font></label>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <textarea class="form-control" rows="5" id="esai" name="esai" disabled><?php echo $hh['18']; ?></textarea>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <label for="exampleInputEmail1"><font color="#FFF">2. Perubahan apa yang sudah anda lakukan di rumah dan di sekolah? Jelaskan.</font></label>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <textarea class="form-control" rows="5" id="esai2" name="esai2" disabled="disabled"><?php echo $hh['19']; ?></textarea>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <label for="exampleInputEmail1"><font color="#FFF">3. Rencana seperti apa yang akan anda lakukan apabila anda terpilih sebagai penerima beasiswa JAPFA Foundation? Jelaskan</font></label>
    </td>
  </tr>
  <tr>
    <td class="bgisitabel" align="left" colspan="2">
      <textarea class="form-control" rows="5" id="esai3" name="esai3" disabled="disabled"><?php echo $hh['20']; ?></textarea>
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
  </div>
</div>
</form>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
</script>   
<?php }?>
</body>
</html>