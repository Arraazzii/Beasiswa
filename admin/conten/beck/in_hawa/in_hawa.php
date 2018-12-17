<center><h3> Input Hasil Wawancara</h3>
  <p>&nbsp;</p>
</center>
<hr>
<div class="col-md-4 col-lg-4" >
  <div class="table-responsive">
  <!--<form method="get" action="index.php?conten=acc">-->
  <table width="40%" border="0" align="center" class="table"  >
  <tr>
  	<td bgcolor="#FFFFFF"  class="lekukantabel3" id="warnaabutua">
    <table class="table-responsive">
  <tr>
    <td width="10%">NISN</td>
    <td width="30%">
        <input type="text" style="color:#000; width:100%;" id="nom" name="nom"  value=""/>
    </td>
  </tr>
  <tr>
    <td width="10%">Nama Peserta</td>
    <td width="30%">
        <input type="text" style="color:#000; width:100%;" id="nom" name="nom"  value=""/>
    </td>
   </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" height="50px"><button type="button" class="btn btn-warning" style="height:35px" onclick="cari()"><span class=" glyphicon glyphicon-search"></span> &nbsp;&nbsp;&nbsp;Cari&nbsp;&nbsp;&nbsp;</button>&nbsp;&nbsp;<button type="button" class="btn btn-warning" style="height:35px" onclick="cari()"> &nbsp;&nbsp;&nbsp;Batal&nbsp;&nbsp;&nbsp;</button> </td>
  </tr>
</table>
   </td>
  </tr>
  
</table>
<!--</form>-->
</div> 
</div>
<p>&nbsp;</p>
<div id="hasil_cari_data">
<div class="col-md-12 col-lg-12" >
<div class="table-responsive">
  <table width="100%" border="0" align="center" class="table" >
  <tr>
    <td width="5%"  valign="middle" align="center" class="lekukantabel1" id="warnaabutua">Nisn</td>
    <td width="24%" valign="middle" id="warnaabutua">Nama Lengkap</td>
    <td width="10%" id="warnaabutua">Tgl Lahir</td>
    <td width="10%" id="warnaabutua">Kabupaten</td>
    <td width="10%" id="warnaabutua">Provinsi</td>
    <td width="10%" id="warnaabutua">Nama Sekolah</td>
    <td width="20%" id="warnaabutua">Kabupaten</td>
    <td width="10%" id="warnaabutua">Provinsi</td>
    <td width="10%" id="warnaabutua">Email</td>
    <td width="10%" id="warnaabutua">Status</td>
  </tr>
  <?php
 			
     $i = $posisi+1;
	 $tampung_sd = 0;
	 $tampung_smp = 0;
	 $tampung_sma = 0;
	 $tampung_univ = 0;
	 $tampung_tot = 0;
/* if(isset($_GET['tahun_dana'])){
		 $tahun = $_GET['tahun_dana'];
		
	 }else{*/
		 $tahun=date('Y');
	 //}	
		$sql_perusahaan = mysql_query("SELECT  a.id, a.username,(
    SELECT COUNT(id)
    FROM   data_pemohon  WHERE id_member = a.id AND id_bantudik = 'SD' AND st = 'N'  AND tahun_daftar = '".$tahun."'  
    ) AS sd,
    (
    SELECT COUNT(id)
    FROM   data_pemohon WHERE id_member = a.id AND id_bantudik = 'SMP' AND st = 'N'  AND tahun_daftar = '".$tahun."' 
    ) AS smp,
    (
    SELECT COUNT(id)
    FROM   data_pemohon WHERE id_member = a.id AND id_bantudik = 'SMA' AND st = 'N'  AND tahun_daftar = '".$tahun."'
    ) AS sma1,
(SELECT COUNT(id)
    FROM   data_pemohon WHERE id_member = a.id AND id_bantudik = 'UNIVERSITAS' AND st = 'N' AND tahun_daftar = '".$tahun."'
    ) AS univ1,
(SELECT COUNT(id)
    FROM   data_pemohon WHERE id_member = a.id  AND st = 'N' AND tahun_daftar = '".$tahun."'
    ) AS tot1

FROM members AS a  WHERE a.presen != '0'");	 
		while($view_per=mysql_fetch_array($sql_perusahaan)){
			if($i%2==0){ 
			$bg = '#CCCCCC';
		}else{ 
			$bg = '#FFFFFF';
		}
		echo"<tr>
	<td bgcolor=\"$bg\" class='fcjen' id='fcjen' name='fcjen'>$view_per[0]</td>
    <td bgcolor=\"$bg\" class='fcnm' id='fcnm' name='fcnm'>$view_per[1]</td>
    <td bgcolor=\"$bg\" class='un'>$view_per[2]</td>
    <td bgcolor=\"$bg\" class='bp'>$view_per[3]</td>
    <td bgcolor=\"$bg\" class='not'>$view_per[4]</td>
    <td bgcolor=\"$bg\" class='na'>$view_per[5]</td>
    <td bgcolor=\"$bg\" class='na'>$view_per[5]</td>
    <td bgcolor=\"$bg\" class='na'>$view_per[5]</td>
    <td bgcolor=\"$bg\" class='na'>$view_per[5]</td>
	<td bgcolor=\"$bg\">";
	$tampung_sd += $view_per[2];
	$tampung_smp += $view_per[3];
	$tampung_sma += $view_per[4];
	$tampung_univ += $view_per[5];
	$tampung_tot += $view_per[6];
	?>
   <?php
    echo "<a href='index.php?conten=accdet&tahun=$tahun&id=$view_per[0]'><input type='button' value='Detail' class='btn btn-default'> </button></a>";?>
    <!--<button type="button" data-toggle="modal" data-target="#contact_det"  onclick="det($(this))" id="lebarisisan" >Detail</button>-->
	<?php echo"</td>
	
  </tr>";	
  $i++;	
	  }
		?>
  <tr>
    <td id="warnaabutua"></td>
    <td id="warnaabutua"></td>
    <td id="warnaabutua"></td>
    <td id="warnaabutua"></td>
    <td id="warnaabutua"></td>
    <td id="warnaabutua"></td>
    <td id="warnaabutua"></td>
    <td id="warnaabutua"></td>
    <td id="warnaabutua"></td>
    <td id="warnaabutua"></td>    
    </tr>

    <tr>
    <td colspan="8"></td>
       <td  colspan="2" align="center" id="BG_menu_data_Calon_Penerima" style="padding-top:10px"><button type="button" class="btn btn-warning" onclick="simpan()">&nbsp;Simpan&nbsp;</button></td>
     </tr>
       
</table>
 <?php
		
		?>
</div> 
</div>
</div>


<div class="modal fade" id="contact_det" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:auto">
  <div class="modal-dialog" style="width:auto" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Daftar Nama Penerima BPI</h4>
      </div>
      <div class="modal-body" id="hasil_modal">
      	  
      </div>
        <div id="waiting">
						<img src="../../img/loader.gif"/> Prosesing data...
						</div>
                        
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal" id="keluar" onclick="lulus()">LULUS</button>
      <button type="button" class="btn btn-default" data-dismiss="modal" id="keluar" onclick="tdk_lulus()">TIDAK LULUS</button>
      <button type="button" class="btn btn-default" data-dismiss="modal" id="keluar">Keluar</button>
    </div>
  </div>
</div>

<script>
var objRow;


function cek(){
	$("#contact_det").hide();
}

function cari(){
		var tahun = $('#tahun_dana').val();
		waitingDialog.show('Pencarian !');
		$.ajax({
				type:"get",
				url:"acc/cari_awal.php",
				data:'tahun='+ tahun,
				success: function(data){
					waitingDialog.hide();
					$("#hasil_cari_data").html(data);
				}
			});
}
function det(obj){
		var n0=obj.parent().parent().find(".nipCell").html();	
}

$("#waiting").show();
function det(obj){

	var id = obj.parent().parent().find(".fcjen").html();
	var user = $('#username').val();
	$("#waiting").show();	
	$.ajax({
			type: 'POST',
			url: 'acc/detailacc.php',
			data: 'id=' + id+'&user=' + user , 
			success: function(response) { 
				
				$("#hasil_modal").html(response);
				$("#waiting").hide();
				
			}
			
		});
		objRow = obj.parent().parent();
		
}
</script>
