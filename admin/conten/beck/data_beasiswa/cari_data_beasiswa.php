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

<p>&nbsp;</p>
<div id="hasil_cari_data">
<div class="col-md-12 col-lg-12" >
<center>
<a href="index.php?conten=data_bea"><button class="btn btn-warning" style="margin-bottom: 10px">Batal</button></a>
</center>
<div class="table-responsive">
  <table width="100%" border="0" align="center" class="table" >
  <tr>
    <td width="5%"  valign="middle" align="center" class="lekukantabel1" id="warnaabutua">No Beasiswa</td>
    <td width="24%" valign="middle" id="warnaabutua">Nama Beasiswa</td>
    <td width="10%" id="warnaabutua">Tahun</td>
    <td width="10%" id="warnaabutua">Jenjang</td>
    <td width="10%" id="warnaabutua">Total Dana</td>
    <td width="10%" id="warnaabutua">Jumlah Beasiswa</td>
    <td  width="20%" id="warnaabutua" class="lekukantabel2">DETAIL</td>
  </tr>
  <?php 
$id_bea = $_POST['id_bea'];
$th_bea = $_POST['th_bea'];
$result = mysql_query("select * from info_beasiswa where no_beasiswa = '$id_bea' and tahun = '$th_bea'");  
while ($row = mysql_fetch_array($result))  
{  
echo"
<tr style='background-color: #FFFFFF'>
    <td width='5%'  valign='middle' align='center' >".$row['0']."</td>
    <td width='24%' valign='middle' >".$row['2']."</td>
    <td width='10%' >".$row['1']."</td>
    <td width='10%' >".$row['3']."</td>
    <td width='10%' >".$row['4']."</td>
    <td width='10%' >".$row['5']."</td>
    <td width='20%' >
    <a href='index.php?conten=edit_bea&id=".$row['0']."'><button class='btn btn-warning'> Edit</button></a> <a href='index.php?conten=delete_bea&id=".$row['0']."'><button class='btn btn-warning'> Delete</button></a> <a href='index.php?conten=view_bea&id=".$row['0']."'><button class='btn btn-warning'> View</button></a> </td>
  </tr> 
  ";
} 
   ?>