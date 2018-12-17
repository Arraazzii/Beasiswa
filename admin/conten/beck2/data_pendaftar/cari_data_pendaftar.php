<?php include '../lib/config.php'; ?>

<style type="text/css">
  #nomer{
    width: 100%;
    height:  = 30px;
  }
  #tahun{
    width: 40%;
    height:  = 30px;
  }
</style>

<center><h3> Data Pendaftar Beasisiwa</h3>
  <p>&nbsp;</p>
</center>
<hr>
<div class="col-md-4 col-lg-4" >
  <div class="table-responsive">
  <form method="POST" action="index.php?conten=cari_daftar">
  <table width="34%" border="0" align="center" class="table"  >
  <tr>
    <td bgcolor="#FFFFFF"  class="lekukantabel3" id="warnaabutua">
    <table class="table-responsive">
  <tr>
    <td width="12%">Nomer Beasiswa</td>
    <td width="22%">
      <select name="id_daf" id="id_daf" style="width:100%;">
        <?php
          $result_nomer = mysql_query("SELECT no_beasiswa FROM info_beasiswa ORDER BY no_beasiswa ASC ");  
          while ($row_nomer = mysql_fetch_array($result_nomer))  
          {
            echo"<option value='$row_nomer[0]'>$row_nomer[0]</option>";
          }  
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tahun</td>
    <td >
     <select name="th_daf" id="th_daf" style="width:100%;">
        <?php
          $result_nomer = mysql_query("SELECT DISTINCT YEAR(tgl_daftar)
FROM
data_pendaftar ");  
          while ($row_nomer = mysql_fetch_array($result_nomer))  
          {
            echo"<option value='$row_nomer[0]'>$row_nomer[0]</option>";
          }  
        ?>
    </td>
   </td>
  </tr>
  <tr>
    <td width="180"></td>
    <td align="right"> <input style="height:35px; float:right; margin-top:5px; margin-left: 5px" type="submit" value="Cari" class="btn btn-warning">
    <input style="height:35px; float:right; margin-top:5px;" type="button" value="Refresh" class="btn btn-warning" onclick="window.location.href='index.php?conten=data_pendaftar'"></td></td>
  </tr>
</table>
   </td>
  </tr>
  
</table>
</form>
</div> 
</div>
<p>&nbsp;</p>
<div id="hasil_cari_data">
<div class="col-md-12 col-lg-12" >
<div class="table-responsive">
  <table width="100%" border="0" align="center" class="table" >
  <tr>
    <td width="2%"  valign="middle" align="center" class="lekukantabel1" id="warnaabutua">Nisn</td>
    <td width="15%" valign="middle" id="warnaabutua">Nama Lengkap</td>
    <td width="10%" id="warnaabutua">Tgl Lahir</td>
    <td width="10%" id="warnaabutua">Kecamatan</td>
    <td width="10%" id="warnaabutua">Kabupaten</td>
    <td width="10%" id="warnaabutua">Provinsi</td>
    <td width="10%" id="warnaabutua">Nama Sekolah</td>
    <td width="10%" id="warnaabutua">Email</td>
    <td width="10%" id="warnaabutua" >Status</td>
    <td width="10%" colspan="2" id="warnaabutua" align="center" class="lekukantabel2">Detail</td>
  </tr>

  <?php 
$id_daf = $_POST['id_daf'];
$th_daf = $_POST['th_daf'];
$tampung_nilai =0;
$q = mysql_query("SELECT
a.nin,
a.nama,
a.tgl_la,
a.kec,
a.kab,
a.prov,
b.nama_sekolah,
b.email,
a.st_admis,
a.nilai_ak,
a.nilai_ket,
a.nilai_jpa,
a.nilai_jpna
FROM
data_pendaftar AS a ,
data_sekolah AS b
WHERE
a.no_beasiswa = '".$id_daf."'
AND
a.nin = b.nin
and 
YEAR(a.tgl_daftar) = '".$th_daf."' ");

while ($qq= mysql_fetch_array($q)) {

 if ($qq['8']== 'Y') {
  $qst = "Lulus";
 }
 else{
  $qst = "Tidak Lulus";
 }
 $tampung_nilai = $qq[9]+$qq[10]+$qq[11]+$qq[12];
 echo " <tr style='background-color: #FFFFFF'>
    <td >".$qq['0']."</td>
    <td >".$qq['1']."</td>
    <td >".$qq['2']."</td>
    <td >".$qq['3']."</td>
    <td >".$qq['4']."</td>
    <td >".$qq['5']."</td>
    <td >".$qq['6']."</td>
    <td >".$qq['7']."</td>
    <td >".$tampung_nilai."</td>
   <td align='center' >
    <a href='index.php?conten=detail_daf&id=".$qq['0']."'><button class='btn btn-warning'> View</button></a>
    </td>
    <td align='left'>
    <form action='data_pendaftar/pendaftaran_export_excel.php' method='post'>
    <input type='hidden' id='di_daf' name='di_daf' value='".$qq['0']."'>
       <input type='submit' value='Export Excell' class='btn btn-warning'>
       </form>
    </td>
    </tr>"; 
}

   ?>       
</table>

</div> 
</div>
</div>