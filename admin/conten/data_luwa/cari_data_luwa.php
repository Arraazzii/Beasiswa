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

<center><h3> Data Hasil Wawancara</h3>
  <p>&nbsp;</p>
</center>
<hr>
<div class="col-md-4 col-lg-4" >
  <div class="table-responsive">
  <form method="POST" action="index.php?conten=cari_luwa">
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
          $result_nomer = mysql_query("SELECT DISTINCT tahun FROM info_beasiswa ");  
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

    <input style="height:35px; float:right; margin-top:5px;" type="button" value="Refresh" class="btn btn-warning" onclick="window.location.href='index.php?conten=data_luwa'"></td>
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
     <td width="2%"  valign="middle" align="center" class="lekukantabel1" id="warnaabutua">No</td>
    <td width="2%" valign="middle" id="warnaabutua">Nisn</td>
    <td width="15%" valign="middle" id="warnaabutua">Nama Lengkap</td>
    <td width="5%" id="warnaabutua">Tgl Lahir</td>
    <td width="5%" id="warnaabutua">Kecamatan</td>
    <td width="10%" id="warnaabutua">Kabupaten</td>
    <td width="10%" id="warnaabutua">Provinsi</td>
    <td width="10%" id="warnaabutua">Nama Sekolah</td>
    <td width="8%" id="warnaabutua">Email</td>
    <td width="10%" id="warnaabutua">Total Wawancara</td>
    <td width="10%" id="warnaabutua" >Status</td>
    <td width="10%" colspan="2" id="warnaabutua" class="lekukantabel2">Detail</td>
  </tr>
  <?php 
$id_daf = $_POST['id_daf'];
$th_daf = $_POST['th_daf'];
$i=1;
$q = mysql_query("SELECT
a.nin,
a.nama,
a.tgl_la,
b.kec,
b.kab,
b.prov,
b.nama_sekolah,
b.email,
a.st_wawan,
a.nilai_wa1,
a.nilai_wa2,
a.nilai_wa3,
a.nilai_wa4,
a.nilai_wa5
FROM
data_pendaftar AS a ,
data_sekolah AS b
WHERE
a.nin = b.nin AND
a.st_admis = 'Y' AND st_wawan = 'Y' AND a.no_beasiswa = '".$id_daf."' AND YEAR(a.tgl_daftar) = '".$th_daf."'  ORDER BY  a.nama 
");

while ($qq= mysql_fetch_array($q)) {

 if ($qq['8']== 'Y') {
  $qst = "Lulus";
 }
 else{
  $qst = "Tidak Lulus";
 }
     if($i%2==0){ 
      $bg = '#CCCCCC';
    }else{ 
      $bg = '#FFFFFF';
    }
 $tampung_nilai = $qq[9]+$qq[10]+$qq[11]+$qq[12];
 echo " <tr style='background-color: #FFFFFF'>
    <td bgcolor=\"$bg\" >".$i."</td>
    <td bgcolor=\"$bg\" >".$qq['0']."</td>
    <td bgcolor=\"$bg\" >".$qq['1']."</td>
    <td bgcolor=\"$bg\" >".$qq['2']."</td>
    <td bgcolor=\"$bg\" >".$qq['3']."</td>
    <td bgcolor=\"$bg\" >".$qq['4']."</td>
    <td bgcolor=\"$bg\" >".$qq['5']."</td>
    <td bgcolor=\"$bg\" >".$qq['6']."</td>
    <td bgcolor=\"$bg\" >".$qq['7']."</td>
     <td bgcolor=\"$bg\" >". $tampung_nilai."</td>
    <td bgcolor=\"$bg\" >".$qst."</td>
    <td align='center' bgcolor=\"$bg\" >
    <a href='index.php?conten=detail_luwa&id=".$qq['0']."'><button class='btn btn-warning'> View</button></a>
    </td>
    <td align='left' bgcolor=\"$bg\">
    <form action='data_luwa/luwa_export_excel.php' method='post'>
    <input type='hidden' id='di_daf' name='di_daf' value='".$qq['0']."'>
       <input type='submit' value='Export Excell' class='btn btn-warning'>
       </form>
    </td>
    </tr>"; 
    $i++;
}

   ?>
 
 <tr><td></td></tr>
    <tr>
    <td colspan="9"></td>
       <td  colspan="2" align="center" id="BG_menu_data_Calon_Penerima" style="padding-top: 9px">
       <form action="data_luwa/luwa_export_excel_all.php" method="post">
       <input type="submit" value="Excell All" class="btn btn-warning">
       </form>
     </tr>
       
</table>

</div> 
</div>
</div>