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



<center><h3> Data Beasisiwa</h3>

  <p>&nbsp;</p>

</center>

<hr>

<div class="col-md-5 col-lg-5" >

  <div class="table-responsive">

  <form method="POST" action="index.php?conten=cari_bea">
  <table width="30%" border="0" align="center" class="table"  >
  <tr>
  	<td bgcolor="#FFFFFF"  class="lekukantabel3" id="warnaabutua">
    <table class="table-responsive">
  <tr>
    <td width="10%">Nomer Beasiswa</td>
    <td width="20%">
        <select name="id_bea" id="id_bea" style="width:100%;">
        <?php
          $result_nomer = mysql_query("SELECT DISTINCT no_beasiswa FROM info_beasiswa");  
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
      <select name="th_bea" id="th_bea" style="width:100%;">
        <?php
          $result_nomer = mysql_query("SELECT DISTINCT tahun FROM info_beasiswa");  
          while ($row_nomer = mysql_fetch_array($result_nomer))  
          {
            echo"<option value='$row_nomer[0]'>$row_nomer[0]</option>";
          }  
        ?>
      </select>
    </td>
   </td>
  </tr>
  <tr>
    <td width="180"></td>
    <td>
    <input style="height:35px; float:right; margin-top:5px;" type="submit" value="Cari" class="btn btn-warning">
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

    <td width="5%"  valign="middle" align="center" class="lekukantabel1" id="warnaabutua">No Beasiswa</td>

    <td width="24%" valign="middle" id="warnaabutua">Nama Beasiswa</td>

    <td width="10%" id="warnaabutua">Tahun</td>

    <td width="10%" id="warnaabutua">Jenjang</td>

    <td width="10%" id="warnaabutua">Total Dana</td>

    <td width="10%" id="warnaabutua">Jumlah Beasiswa</td>

    <td width="5%" id="warnaabutua">Status</td>

    <td width="15%" class="lekukantabel2" id="warnaabutua">DETAIL</td>

  </tr>

  <?php 



$result = mysql_query("select * from info_beasiswa");  
$i=0;
while ($row = mysql_fetch_array($result))  

{  
  $st ="";
  if($row['7']=='Y'){
    $st ="Aktif";
  }else{
    $st ="Non Aktif";
  }
  if($i%2==1){ 
      $bg = '#CCCCCC';
    }else{ 
      $bg = '#FFFFFF';
    }

echo"

<tr style='background-color: #FFFFFF'>

    <td width='5%'  valign='middle' align='center'  bgcolor=\"$bg\" >".$row['0']."</td>

    <td width='24%' valign='middle' bgcolor=\"$bg\" >".$row['2']."</td>

    <td width='10%' bgcolor=\"$bg\">".$row['1']."</td>

    <td width='10%' bgcolor=\"$bg\" >".$row['3']."</td>

    <td width='10%' bgcolor=\"$bg\">".$row['4']."</td>

    <td width='10%' bgcolor=\"$bg\">".$row['5']."</td>

    <td width='5%' bgcolor=\"$bg\">".$st."</td>

    <td width='15%' bgcolor=\"$bg\">

    <a href='index.php?conten=edit_bea&id=".$row['0']."'><button class='btn btn-warning'> Edit</button></a> <a href='index.php?conten=delete_bea&id=".$row['0']."'><button class='btn btn-warning'> Delete</button></a> <a href='index.php?conten=aktif_bea&id=".$row['0']."'><button class='btn btn-warning'>Aktif</button></a> </td>

  </tr> 

  ";
  $i++;

} 

   ?>