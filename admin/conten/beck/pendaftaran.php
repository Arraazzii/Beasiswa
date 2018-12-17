 <style>
		.datepicker{z-index:1151;}
	    </style>
        
<script>
		$(function(){
		    $("#tgl_la").datepicker({
			format:'dd-mm-yyyy'
		    });
			$("#tgl_la_anak").datepicker({
			format:'dd-mm-yyyy'
		    });
			$("#tgl_mulker").datepicker({
			format:'dd-mm-yyyy'
		    });
                });

$(document).ready(function(){
  $("#perusahaan").click()(function(){
    var peru = $("#perusahaan").val();
	var user = $("#username").val();
    $.ajax({
        url: "pendaftaran/ambilunit.php",
        data: "perusahaan="+peru+"&user="+user,
        cache: false,
        success: function(msg){
            $("#unit").html(msg);
        }
    });	
  });
  
  $("#perta2").change()(function(){
    var perta = $("#perta2").val();
	alert(perta);
	if(perta=="Y"){
		$.ajax({
			url: "pendaftaran/bertahun.php",
			data: "indi=Y",
			cache: false,
			success: function(msg){
				$("#view_Alasan").html(msg);
			}
    	});
	}else{
		$.ajax({
			url: "pendaftaran/bertahun.php",
			data: "indi=N",
			cache: false,
			success: function(msg){
				$("#view_Alasan").html(msg);
			}
    	});
	}
   
  });
});

	    </script>
<div class="row">
  <div class="col-md-6 col-lg-6">
		<table width="100%" border="0" align="center" cellspacing="0" class="table">
  <tr>
    <td colspan="2" align="center" class="headertabel" id="warnaabu2">FORMULIR  PERMOHONAN BANTUAN PENDIDIKAN INTERNAL JAPFA</td>
    </tr>
  <tr class="bgisitabel">
  <?php
  		$tahun = getdate();
  ?>
  <input type="hidden" name="username" id="username" value="<?php echo $semelekete; ?>" />
  <input type="hidden" name="tahunsekarang" id="tahunsekarang" value="<?php echo $tahun['year'];?>" />
    <td width="31%" id="warnafontputih" >Nama Perusahaan</td>
    <td width="69%" ><form id="form1" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="perusahaan" id="perusahaan" class="lebarisisan">
        <?php
		$sql_perusahaan = mysql_query("SELECT DISTINCT  a.id_perusahaan, a.nama_perusahaan From  perusahaan a, perun b  WHERE b.id_member= ".$semelekete." and a.id_perusahaan = b.id_perusahaan ORDER BY a.nama_perusahaan ASC");
		while($view_per=mysql_fetch_array($sql_perusahaan)){
		echo "<option value=\"$view_per[0]\" style='color:#000'>$view_per[1]</option>\n";
		}
		?>
      </select>
    </form></td>
  </tr>
  <tr class="bgisitabel">
    <td id="warnafontputih">Unit</td>
    <td><form id="form1" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="unit" id="unit" class="lebarisisan">
     	<?php $sql_perusahaan = mysql_query("SELECT DISTINCT  a.id_unit, a.nama_unit From  unit a, perun b  WHERE b.id_member= ".$semelekete." and a.id_unit = b.id_unit ORDER BY a.nama_unit ASC");
		while($view_per=mysql_fetch_array($sql_perusahaan)){
		echo "<option value=\"$view_per[0]\" style='color:#000'>$view_per[1]</option>\n";
		}
        ?>
      </select>
    </form></td>
  </tr>
  <tr>
    <td class="bgisitabelfooter1" id="warnafontputih">Bantuan Pendidikan</td>
    <td class="bgisitabelfooter2"><form id="form1" name="form1" method="post" action="">
      <label for="select"></label>
      <select name="bantuan_pendidikan" id="bantuan_pendidikan" class="lebarisisan">
        <?php
		$sql_pendidikan = mysql_query("SELECT id_pendidikan, nama_pendidikan FROM pendidikan WHERE st = 'Y' ORDER BY id_pendidikan");
		while($view_pendidikan=mysql_fetch_array($sql_pendidikan)){
		echo "<option value=\"$view_pendidikan[0]\" style='color:#000'>$view_pendidikan[1]</option>\n";
		}
		?>
      </select>
    </form></td>
  </tr>
    </table>
    
    <table width="99%" border="0" align="center" cellspacing="0" class="table">
  <tr>
    <td colspan="4" align="center" class="headertabel" id="warnaabu2">INFORMASI KARYAWAN</td>
    </tr>
  <tr class="bgisitabel">
    <td width="26%" valign="middle" id="warnafontputih">No. KTP</td>
    <td colspan="2"><form id="form2" name="form2" method="post" action="">
      <label for="textfield"></label>
      <input type="text" name="ktp" id="ktp" class="lebarisisan" style="height:25px" />
    </form></td>
    <td width="33%" valign="top"><button type="button" data-toggle="modal" data-target="#contact3" class="btn btn-default navbar-btn" style="height:28px" id="lebarisisan" onclick="tekan()">Cek</button></td>
  </tr>
  <tr class="bgisitabel">
    <td valign="middle" id="warnafontputih">Nama Karyawan</td>
    <td colspan="3" align="center"><input type="text" name="nama_karyawan" id="nama_karyawan" class="lebarisisan" style="height:25px" /></td>
    </tr>
  <tr class="bgisitabel">
    <td valign="middle" id="warnafontputih">Jenis Kelamin</td>
    <td width="28%"><select name="jk" id="jk" class="lebarisisan">
      <option>Laki-Laki</option>
      <option>Perempuan</option>
    </select></td>
    <td width="13%" align="center" id="warnafontputih">Tgl Lahir</td>
    <td>
            <input type="text"  id="tgl_la" name="tgl_la" class="lebarisisan" value="<?php echo date('d-m-Y');?>" />
</td>
  </tr>
  <tr class="bgisitabel">
    <td valign="middle" id="warnafontputih">Alamat Tempat Tinggal</td>
    <td colspan="3"><input type="text" name="alamat_tinggal" id="alamat_tinggal" class="lebarisisan" style="height:50px" /></td>
    </tr>
  <tr class="bgisitabel">
    <td valign="middle" id="warnafontputih">Propinsi</td>
    <td><select name="prov" id="prov" class="lebarisisan">
      <?php
		$sql_prov = mysql_query("SELECT id_prov, nama_prov FROM prov ORDER BY nama_prov");
		while($view_prov=mysql_fetch_array($sql_prov)){
		echo "<option value=\"$view_prov[0]\" style='color:#000'>$view_prov[1]</option>\n";
		}
		?>
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="bgisitabel">
    <td valign="middle" id="warnafontputih">Level Karyawan</td>
    <td colspan="3"><select name="level_karyawan" id="level_karyawan" class="lebarisisan">
      <?php
		$sql_lev = mysql_query("SELECT id_lev, nama_lev FROM level WHERE st = 'Y' ORDER BY nama_lev");
		while($view_lev=mysql_fetch_array($sql_lev)){
		echo "<option value=\"$view_lev[0]\" style='color:#000'>$view_lev[1]</option>\n";
		}
		?>
    </select></td>
    </tr>
  <tr>
    <td valign="middle" id="warnafontputih" class="bgisitabelfooter1">Tanggal Mulai Bekerja</td>
    <td class="bgisitabel"><!--<span class="input-group date">
      <div class="input-group date" data-provide="datepicker" >-->
    <input type="text" class="form-control" nama = "tgl_mulker" id ="tgl_mulker" style="height:25px" value="<?php echo date('d-m-Y');?>">
  <!--  <div class="input-group-addon" >
        <span class="glyphicon glyphicon-th" style="height:10px"></span>
    </div>
    </span>--></td>
    <td align="center" id="warnafontputih" class="bgisitabel">Jumlah Tanggungan</td>
    <td class="bgisitabelfooter2"><select name="jumlah_tangung" id="jumlah_tangung" class="lebarisisan">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
    </select></td>
  </tr>
</table>

<table width="100%" border="0" align="center" cellspacing="0" class="table">
  <tr>
    <td colspan="2" align="center" class="headertabel" id="warnaabu2">INFORMASI ANAK</td>
    </tr>
  <tr class="bgisitabel">
    <td width="31%" id="warnafontputih" >Nama Anak</td>
    <td width="69%" ><form id="form1" name="form1" method="post" action="">
      <label for="select"></label>
      <input type="text" name="nama_anak" id="nama_anak" class="lebarisisan" style="height:25px" />
    </form></td>
  </tr>
  <tr>
    <td class="bgisitabelfooter1" id="warnafontputih">Tanggal Lahir</td>
    <td class="bgisitabelfooter2" id="warnafontputih">
  <!--  <div class="input-group date" data-provide="datepicker" >-->
    <input type="text" class="form-control" nama = "tgl_la_anak" id="tgl_la_anak" style="height:25px" value="<?php echo date('d-m-Y');?>">
   <!-- <div class="input-group-addon" >
        <span class="glyphicon glyphicon-th" style="height:10px"></span>
    </div>-->
</div>
    </td>
  </tr>
    </table>
    
<table width="99%" border="0" align="center" cellspacing="0" class="table">
  <tr>
    <td colspan="4" align="center" class="headertabel" id="warnaabu2">INFORMASI SEKOLAH/PERGURUAN TINGGI</td>
    </tr>
  <tr class="bgisitabel">
    <td width="26%" valign="middle" id="warnafontputih">Tingkat Pendidikan</td>
    <td colspan="2"><form id="form2" name="form2" method="post" action="">
      <label for="textfield"></label>
      <select name="tingkat_pendidikan" id="tingkat_pendidikan" class="lebarisisan">
        <?php
		$sql_pendidikan = mysql_query("SELECT id_pendidikan, nama_pendidikan FROM pendidikan WHERE st = 'Y' ORDER BY id_pendidikan");
		while($view_pendidikan=mysql_fetch_array($sql_pendidikan)){
		echo "<option value=\"$view_pendidikan[0]\" style='color:#000'>$view_pendidikan[1]</option>\n";
		}
		?>
      </select>
    </form></td>
    <td width="33%" valign="top"></td>
  </tr>
  <tr class="bgisitabel">
    <td valign="middle" id="warnafontputih">Nama Sekolah/PT</td>
    <td colspan="3" align="center"><input type="text" name="nama_sekolah" id="nama_sekolah" class="lebarisisan" style="height:25px" /></td>
    </tr>
  
  <tr class="bgisitabel">
    <td valign="middle" id="warnafontputih" >Alamat Sekolah/PT</td>
    <td colspan="3"><input type="text" name="alamat_sekolah" id="alamat_sekolah" class="lebarisisan" style="height:50px" /></td>
    </tr>
  <tr >
    <td valign="middle" id="warnafontputih" class="bgisitabelfooter1">Nilai Rata-Rata</td>
    <td class="bgisitabel"><input type="text" name="nilai_rata" id="nilai_rata" class="lebarisisan" style="height:25px" />
    </td>
    <td class="bgisitabel"></td>
    <td class="bgisitabelfooter2"> <font color="#FFFFFF">Harap menggunakan simbol Titik (.)</font></td>
  </tr>
  <tr class="bgisitabel">
    
  </tr>
</table>
    
  </div>
  <div class="col-md-6 col-lg-6">
	<table width="99%" border="0" align="center" cellspacing="0" class="table">
  <tr>
    <td colspan="3" align="center" class="headertabel" id="warnaabu2">INFORMASI PRESTASI ANAK</td>
    </tr>
  <tr class="bgisitabel">
    <td width="28%" align="center" id="warnafontputih">Prestasi</td>
    <td width="44%" align="center" id="warnafontputih">Nama Prestasi</td>
    <td width="28%" align="center" id="warnafontputih">Tingkat Prestasi</td>
  </tr>
  <tr class="bgisitabel">
    <td class="bg"><select name="prestasi1" id="prestasi1" class="lebarisisan">
      <option>Sekolah</option>
      <option>Luar Sekolah</option>
    </select></td>
    <td><input type="text" name="nama_prestasi1" id="nama_prestasi1" class="lebarisisan" style="height:20px" /></td>
    <td><select name="tingkat_prestasi1" id="tingkat_prestasi1" class="lebarisisan">
      <option>Kelurahan/Kecamatan</option>
      <option>Kabupaten/Kota</option>
      <option>Propinsi/Nasional</option>
      <option>Internasional</option>
    </select></td>
  </tr>
  <tr class="bgisitabel">
    <td><span class="bg">
      <select name="prestasi2" id="prestasi2" class="lebarisisan">
        <option>Sekolah</option>
        <option>Luar Sekolah</option>
      </select>
    </span></td>
    <td><input type="text" name="nama_prestasi2" id="namaprestasi2" class="lebarisisan" style="height:20px" /></td>
    <td><select name="tingkat_prestasi2" id="tingkat_prestasi2" class="lebarisisan">
      <option>Kelurahan/Kecamatan</option>
      <option>Kabupaten/Kota</option>
      <option>Propinsi/Nasional</option>
      <option>Internasional</option>
    </select></td>
  </tr>
  <tr class="bgisitabel">
    <td><span class="bg">
      <select name="prestasi3" id="prestasi3" class="lebarisisan">
        <option>Sekolah</option>
        <option>Luar Sekolah</option>
      </select>
    </span></td>
    <td><input type="text" name="nama_prestasi3" id="namaprestasi3" class="lebarisisan" style="height:20px" /></td>
    <td><select name="tingkat_prestasi3" id="tingkat_prestasi3" class="lebarisisan">
      <option>Kelurahan/Kecamatan</option>
      <option>Kabupaten/Kota</option>
      <option>Propinsi/Nasional</option>
      <option>Internasional</option>
    </select></td>
  </tr>
  <tr class="bgisitabel">
    <td><span class="bg">
      <select name="prestasi4" id="prestasi4" class="lebarisisan">
        <option>Sekolah</option>
        <option>Luar Sekolah</option>
      </select>
    </span></td>
    <td><input type="text" name="nama_prestasi4" id="namaprestasi4" class="lebarisisan" style="height:20px" /></td>
    <td><select name="tingkat_prestasi4" id="tingkat_prestasi4" class="lebarisisan">
      <option>Kelurahan/Kecamatan</option>
      <option>Kabupaten/Kota</option>
      <option>Propinsi/Nasional</option>
      <option>Internasional</option>
    </select></td>
  </tr>
  <tr class="bgisitabel">
    <td><span class="bg">
      <select name="prestasi5" id="prestasi5" class="lebarisisan">
        <option>Sekolah</option>
        <option>Luar Sekolah</option>
      </select>
    </span></td>
    <td><input type="text" name="nama_prestasi5" id="namaprestasi5" class="lebarisisan" style="height:20px" /></td>
    <td><select name="tingkat_prestasi5" id="tingkat_prestasi5" class="lebarisisan">
      <option>Kelurahan/Kecamatan</option>
      <option>Kabupaten/Kota</option>
      <option>Propinsi/Nasional</option>
      <option>Internasional</option>
    </select></td>
  </tr>
</table>
 
 <table width="99%" border="0" align="center" cellspacing="0" class="table">
  <tr>
    <td colspan="2" align="center" class="headertabel" id="warnaabu2">REFERENSI PGA</td>
    </tr>
  <tr class="bgisitabel">
    <td width="69%" id="warnafontputih">Prestasi Karyawan Tahun Lalu</td>
    <td width="31%"><select name="prestasi_karyawan_talu" id="prestasi_karyawan_talu" class="lebarisisan">
      <?php
		$sql_perusahaan = mysql_query("SELECT nama_preslu From  preslu ORDER BY id_preslu ASC");
		while($view_per=mysql_fetch_array($sql_perusahaan)){
		echo "<option value=\"$view_per[0]\" style='color:#000'>$view_per[0]</option>\n";
		}
		?>
    </select></td>
  </tr>
  <tr  class="bgisitabel">
    <td id="warnafontputih">Apakah Karyawan Mendapatkan Rekomendasi Oleh PGA</td>
    <td><select name="perta1" id="perta1" class="lebarisisan">
      <option value="Y">Ya</option>
      <option value="N">Tidak</option>
    </select></td>
  </tr>
  <tr  class="bgisitabel">
    <td id="warnafontputih">Apakah Karyawan Pernah Mendapatkan Bantuan Pendidikan</td>
    <td><select name="perta2" id="perta2" class="lebarisisan" onchange="alasan()">
      <option value="Y">Ya</option>
      <option value="N">Tidak</option>
    </select></td>
  </tr>
  <tr>
    <td id="warnafontputih" class="bgisitabelfooter1">Jika Ya, Tahun Berapa</td>
    <td class="bgisitabelfooter2"><div id="view_Alasan"><input type="text" name="alasan" id="alasan" class="lebarisisan" style="height:20px" /></div></td>
  </tr>
</table>

 
 <table width="100%" border="0" align="center" cellspacing="0" class="table">
  <tr>
    <td colspan="2" align="center" class="headertabel" id="warnaabu2">DOKUMEN PENDUKUNG</td>
    </tr>
  <tr class="bgisitabel">
    <td width="58%" id="warnafontputih">KTP</td>
    <td width="42%"><select name="dokumen_ktp" id="dokumen_ktp" style="width:40%">
      <option value="Y">Ada</option>
      <option value="N">Tidak ada</option>
    </select></td>
  </tr>
  <tr class="bgisitabel">
    <td id="warnafontputih">Kartu Keluarga</td>
    <td><select name="dokumen_kk" id="dokumen_kk" style="width:40%">
      <option value="Y">Ada</option>
      <option value="N">Tidak ada</option>
    </select></td>
  </tr>
  <tr class="bgisitabel">
    <td id="warnafontputih">Raport / IPK</td>
    <td><select name="dokumen_rapipk" id="dokumen_rapipk" style="width:40%">
      <option value="Y">Ada</option>
      <option value="N">Tidak ada</option>
    </select></td>
  </tr>
  <tr class="bgisitabel">
    <td id="warnafontputih">Piagam</td>
    <td><select name="dokumen_piagam" id="dokumen_piagam" style="width:40%">
      <option value="Y">Ada</option>
      <option value="N">Tidak ada</option>
    </select></td>
  </tr>
  <tr>
    <td class="bgisitabelfooter1" id="warnafontputih">Surat Keterangan Peserta Didik</td>
    <td class="bgisitabelfooter2"><select name="dokumen_ketpresdik" id="dokumen_ketpresdik" style="width:40%">
      <option value="Y">Ada</option>
      <option value="N">Tidak ada</option>
    </select></td>
  </tr>
</table>

<table width="100%" border="0" align="center" cellspacing="0" class="table" id="warnaabu3" >
  <tr>
    <td align="center">
    <button type="button" class="btn btn-warning" style="height:35px" onclick="AddNew()">SIMPAN</button>
    <button type="button" class="btn btn-warning" style="height:35px" onclick="batal()">BATAL</button>
    </td>
  </tr>
</table>
  </div>
</div>
<div class="modal fade" id="contact3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Cek Data Ktp Pemohon</h4>
      </div>
     
      <div class="modal-body" id="hasil_modal">
      	  
      </div>
        <div id="waiting">
						<img src="../img/loader.gif"/> Prosesing data...
						</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
      </div>
    </div>
  </div>
</div>


<script>
$("#waiting").show();

function alasan(){
    var perta = $("#perta2").val();
	if(perta=="Y"){
		$.ajax({
			url: "pendaftaran/bertahun.php",
			data: "indi=Y",
			cache: false,
			success: function(msg){
				$("#view_Alasan").html(msg);
			}
    	});
	}else{
		$.ajax({
			url: "pendaftaran/bertahun.php",
			data: "indi=N",
			cache: false,
			success: function(msg){
				$("#view_Alasan").html(msg);
			}
    	});
	}
}
function tekan(){
	var ktp = $("#ktp").val();
	$("#waiting").show();	
	$.ajax({
			type: 'POST',
			url: 'pendaftaran/cek_data.php',
			data: 'ktp=' + ktp , 
			success: function(response) { 
				
				$("#hasil_modal").html('Ktp dengan nomer : '+ktp+response);
				$("#waiting").hide();
				
			}
			
		});
		
}
function batal(){
						$("#bantuan_pendidikan").val('0001');
						//info karyawan
						$("input#ktp").val('');
						$("input#nama_karyawan").val('');
						$("#jk").val('Laki-Laki');
						$("input#alamat_tinggal").val('');
						$("#prov").val('11');
						$("#level_karyawan").val('0001');
						$("#jumlah_tangung").val('1');
						
						//info anak
						$("input#nama_anak").val('');
						
						//info sekolah
						$("#tingkat_pendidikan").val('0001');
						$("input#nama_sekolah").val('');
						$("input#alamat_sekolah").val('');
						$("input#nilai_rata").val('');
							
						
						//info prestasi anak
						prestasi1=$("#prestasi1").val('Sekolah');
						nama_pres1=$("input#nama_prestasi1").val('');
						tingkat_pres1=$("#tingkat_prestasi1").val('Kelurahan/Kecamatan');
						prestasi2=$("#prestasi2").val('Sekolah');
						nama_pres2=$("input#namaprestasi2").val('');
						tingkat_pres2=$("#tingkat_prestasi2").val('Kelurahan/Kecamatan');
					prestasi3=$("#prestasi3").val('Sekolah');
						nama_pres3=$("input#namaprestasi3").val('');
						tingkat_pres3=$("#tingkat_prestasi3").val('Kelurahan/Kecamatan');
						prestasi4=$("#prestasi4").val('Sekolah');
						nama_pres4=$("input#namaprestasi4").val('');
						tingkat_pres4=$("#tingkat_prestasi4").val('Kelurahan/Kecamatan');
						prestasi5=$("#prestasi5").val('Sekolah');
						nama_pres5=$("input#namaprestasi5").val('');
						tingkat_pres5=$("#tingkat_prestasi5").val('Kelurahan/Kecamatan');		
						
						//referensi PGA
						prestasi_talu=$("#prestasi_karyawan_talu").val('LS');
						perta1=$("#perta1").val('Y');
						perta2=$("#perta2").val('Y');
						alasan=$("input#alasan").val('');		
						
						//dokumen pendukung
						doku_ktp=$("#dokumen_ktp").val('Y');
						doku_kk=$("#dokumen_kk").val('Y');
						doku_rapipk=$("#dokumen_rapipk").val('Y');
						doku_piagam=$("#dokumen_piagam").val('Y');
						doku_ketpresdik=$("#dokumen_ketpresdik").val('Y');															
						$("#perusahaan").focus();
}

function AddNew(){
	var
				//formulir permohonana
				
				peru=$("#perusahaan").val();
				unt=$("#unit").val();
				bantu=$("#bantuan_pendidikan").val();
				
				//informasi karyawan
				ktp=$("input#ktp").val();
				nama_kar=$("input#nama_karyawan").val();
				jk=$("#jk").val();
				tgl_la=$("input#tgl_la").val();
				alamat_tinggal=$("input#alamat_tinggal").val();
				prov=$("#prov").val();
				level_kar=$("#level_karyawan").val();
				tgl_mulker=$("input#tgl_mulker").val();
				jum_tangunggan=$("#jumlah_tangung").val();
				
				//informasi anak
				nama_anak=$("input#nama_anak").val();
				tgl_la_anak=$("input#tgl_la_anak").val();
				
				//informasi sekolah/perguruan tinggi
				tingkat_pendidikan = $("#tingkat_pendidikan").val();
				nama_sekolah = $("input#nama_sekolah").val();
				alamat_sekolah = $("input#alamat_sekolah").val();
				nilai_rata = $("input#nilai_rata").val();
				
				//info prestasi anak
				prestasi1=$("#prestasi1").val();
				nama_pres1=$("input#nama_prestasi1").val();
				tingkat_pres1=$("#tingkat_prestasi1").val();
				prestasi2=$("#prestasi2").val();
				nama_pres2=$("input#namaprestasi2").val();
				tingkat_pres2=$("#tingkat_prestasi2").val();
				prestasi3=$("#prestasi3").val();
				nama_pres3=$("input#namaprestasi3").val();
				tingkat_pres3=$("#tingkat_prestasi3").val();
				prestasi4=$("#prestasi4").val();
				nama_pres4=$("input#namaprestasi4").val();
				tingkat_pres4=$("#tingkat_prestasi4").val();
				prestasi5=$("#prestasi5").val();
				nama_pres5=$("input#namaprestasi5").val();
				tingkat_pres5=$("#tingkat_prestasi5").val();
				
				//referensi PGA
				prestasi_talu=$("#prestasi_karyawan_talu").val();
				perta1=$("#perta1").val();
				perta2=$("#perta2").val();
				alasan=$("input#alasan").val();
				
				//dokumen pendukung
				doku_ktp=$("#dokumen_ktp").val();
				doku_kk=$("#dokumen_kk").val();
				doku_rapipk=$("#dokumen_rapipk").val();
				doku_piagam=$("#dokumen_piagam").val();
				doku_ketpresdik=$("#dokumen_ketpresdik").val();
				aact= 'insert';
			if(ktp==""){
				alert('No KTP beluam terisi!');
				$("input#ktp").focus();
			}else{
				if(nama_kar==""){
					alert('Nama Karyawan beluam terisi!');
					$("input#nama_karyawan").focus();
				}else{
					if(alamat_tinggal==""){
						alert('Alamat Karyawan beluam terisi!');
						$("input#alamat_tinggal").focus();
					}else{
						if(nama_anak==""){
							alert('Nama anak beluam terisi!');
							$("input#nama_anak").focus();
						}else{
							if(nama_sekolah==""){
								alert('Nama sekolah beluam terisi!');
								$("input#nama_sekolah").focus();
							}else{
								if(alamat_sekolah==""){
									alert('Alamat sekolah beluam terisi!');
									$("input#alamat_sekolah").focus();
								}else{
									if(nilai_rata==""){
										alert('Nilai rata - rata beluam terisi!');
										$("input#nilai_rata").focus();
									}else{
										if(alasan!=""){
											var tahun_sekarang = $("#tahunsekarang").val();
											var hasil ="";
												hasil = Number(alasan)+3;
												if(tahun_sekarang>hasil){
													$.ajax({
													type: "POST", 
													url: "pendaftaran/add.php",
													data: {"peru":peru,"unt":unt,"bantu":bantu,"ktp":ktp,"nama_kar":nama_kar,"jk":jk,"tgl_la":tgl_la,"alamat_tinggal":alamat_tinggal,"prov":prov,"level_kar":level_kar,"tgl_mulker":tgl_mulker,"jum_tangunggan":jum_tangunggan,"nama_anak":nama_anak,"tgl_la_anak":tgl_la_anak,"tingkat_pendidikan":tingkat_pendidikan,"nama_sekolah":nama_sekolah,"alamat_sekolah":alamat_sekolah,"nilai_rata":nilai_rata,"prestasi1":prestasi1,"nama_pres1":nama_pres1,"tingkat_pres1":tingkat_pres1,"prestasi2":prestasi2,"nama_pres2":nama_pres2,"tingkat_pres2":tingkat_pres2,"prestasi3":prestasi3,"nama_pres3":nama_pres3,"tingkat_pres3":tingkat_pres3,"prestasi4":prestasi4,"nama_pres4":nama_pres4,"tingkat_pres4":tingkat_pres4,"prestasi5":prestasi5,"nama_pres5":nama_pres5,"tingkat_pres5":tingkat_pres5,"prestasi_talu":prestasi_talu,"perta1":perta1,"perta2":perta2,"alasan":alasan,"doku_ktp":doku_ktp,"doku_kk":doku_kk,"doku_rapipk":doku_rapipk,"doku_piagam":doku_piagam,"doku_ketpresdik":doku_ketpresdik,"act":aact},
													timeout: 10000,
													beforeSend: function(){},
													complete: function(){},
													cache: false, 
													success: function(result){ 
														if (result=='success'){ 
														alert("Data Anda Berhasil Disimpan");
														//info permohonana
														$("#bantuan_pendidikan").val('0001');
														//info karyawan
														$("input#ktp").val('');
														$("input#nama_karyawan").val('');
														$("#jk").val('Laki-Laki');
														$("input#alamat_tinggal").val('');
														$("#prov").val('11');
														$("#level_karyawan").val('0001');
														$("#jumlah_tangung").val('1');
														
														//info anak
														$("input#nama_anak").val('');
														
														//info sekolah
														$("#tingkat_pendidikan").val('0001');
														$("input#nama_sekolah").val('');
														$("input#alamat_sekolah").val('');
														$("input#nilai_rata").val('');
															
														
														//info prestasi anak
														prestasi1=$("#prestasi1").val('Sekolah');
														nama_pres1=$("input#nama_prestasi1").val('');
														tingkat_pres1=$("#tingkat_prestasi1").val('Kelurahan/Kecamatan');
														prestasi2=$("#prestasi2").val('Sekolah');
														nama_pres2=$("input#namaprestasi2").val('');
														tingkat_pres2=$("#tingkat_prestasi2").val('Kelurahan/Kecamatan');
														prestasi3=$("#prestasi3").val('Sekolah');
														nama_pres3=$("input#namaprestasi3").val('');
														tingkat_pres3=$("#tingkat_prestasi3").val('Kelurahan/Kecamatan');
														prestasi4=$("#prestasi4").val('Sekolah');
														nama_pres4=$("input#namaprestasi4").val('');
														tingkat_pres4=$("#tingkat_prestasi4").val('Kelurahan/Kecamatan');
														prestasi5=$("#prestasi5").val('Sekolah');
														nama_pres5=$("input#namaprestasi5").val('');
														tingkat_pres5=$("#tingkat_prestasi5").val('Kelurahan/Kecamatan');		
														
														//referensi PGA
														prestasi_talu=$("#prestasi_karyawan_talu").val('LS');
														perta1=$("#perta1").val('Y');
														perta2=$("#perta2").val('Y');
														alasan=$("input#alasan").val('');		
														
														//dokumen pendukung
														doku_ktp=$("#dokumen_ktp").val('Y');
														doku_kk=$("#dokumen_kk").val('Y');
														doku_rapipk=$("#dokumen_rapipk").val('Y');
														doku_piagam=$("#dokumen_piagam").val('Y');
														doku_ketpresdik=$("#dokumen_ketpresdik").val('Y');															
														$("#perusahaan").focus();
														
														}else{alert(result);}
													},
													error: function(error){alert('request timeout, please try again.');$( this ).dialog( "close" );} //event yang akan diseksekusi pada saat error berlangsung
													}
												);		
												}else{
													alert('masa tengan beasiswa anda belum habis!');
													$("input#alasan").focus();
												}
										}else{		
												$.ajax({
													type: "POST", 
													url: "pendaftaran/add.php",
													data: {"peru":peru,"unt":unt,"bantu":bantu,"ktp":ktp,"nama_kar":nama_kar,"jk":jk,"tgl_la":tgl_la,"alamat_tinggal":alamat_tinggal,"prov":prov,"level_kar":level_kar,"tgl_mulker":tgl_mulker,"jum_tangunggan":jum_tangunggan,"nama_anak":nama_anak,"tgl_la_anak":tgl_la_anak,"tingkat_pendidikan":tingkat_pendidikan,"nama_sekolah":nama_sekolah,"alamat_sekolah":alamat_sekolah,"nilai_rata":nilai_rata,"prestasi1":prestasi1,"nama_pres1":nama_pres1,"tingkat_pres1":tingkat_pres1,"prestasi2":prestasi2,"nama_pres2":nama_pres2,"tingkat_pres2":tingkat_pres2,"prestasi3":prestasi3,"nama_pres3":nama_pres3,"tingkat_pres3":tingkat_pres3,"prestasi4":prestasi4,"nama_pres4":nama_pres4,"tingkat_pres4":tingkat_pres4,"prestasi5":prestasi5,"nama_pres5":nama_pres5,"tingkat_pres5":tingkat_pres5,"prestasi_talu":prestasi_talu,"perta1":perta1,"perta2":perta2,"alasan":alasan,"doku_ktp":doku_ktp,"doku_kk":doku_kk,"doku_rapipk":doku_rapipk,"doku_piagam":doku_piagam,"doku_ketpresdik":doku_ketpresdik,"act":aact},
													timeout: 10000,
													beforeSend: function(){},
													complete: function(){},
													cache: false, 
													success: function(result){ 
														if (result=='success'){ 
														alert("Data Anda Berhasil Disimpan");
														//info permohonana
														$("#bantuan_pendidikan").val('0001');
														//info karyawan
														$("input#ktp").val('');
														$("input#nama_karyawan").val('');
														$("#jk").val('Laki-Laki');
														$("input#alamat_tinggal").val('');
														$("#prov").val('11');
														$("#level_karyawan").val('0001');
														$("#jumlah_tangung").val('1');
														
														//info anak
														$("input#nama_anak").val('');
														
														//info sekolah
														$("#tingkat_pendidikan").val('0001');
														$("input#nama_sekolah").val('');
														$("input#alamat_sekolah").val('');
														$("input#nilai_rata").val('');
															
														
														//info prestasi anak
														prestasi1=$("#prestasi1").val('Sekolah');
														nama_pres1=$("input#nama_prestasi1").val('');
														tingkat_pres1=$("#tingkat_prestasi1").val('Kelurahan/Kecamatan');
														prestasi2=$("#prestasi2").val('Sekolah');
														nama_pres2=$("input#namaprestasi2").val('');
														tingkat_pres2=$("#tingkat_prestasi2").val('Kelurahan/Kecamatan');
														prestasi3=$("#prestasi3").val('Sekolah');
														nama_pres3=$("input#namaprestasi3").val('');
														tingkat_pres3=$("#tingkat_prestasi3").val('Kelurahan/Kecamatan');
														prestasi4=$("#prestasi4").val('Sekolah');
														nama_pres4=$("input#namaprestasi4").val('');
														tingkat_pres4=$("#tingkat_prestasi4").val('Kelurahan/Kecamatan');
														prestasi5=$("#prestasi5").val('Sekolah');
														nama_pres5=$("input#namaprestasi5").val('');
														tingkat_pres5=$("#tingkat_prestasi5").val('Kelurahan/Kecamatan');		
														
														//referensi PGA
														prestasi_talu=$("#prestasi_karyawan_talu").val('LS');
														perta1=$("#perta1").val('Y');
														perta2=$("#perta2").val('Y');
														alasan=$("input#alasan").val('');		
														
														//dokumen pendukung
														doku_ktp=$("#dokumen_ktp").val('Y');
														doku_kk=$("#dokumen_kk").val('Y');
														doku_rapipk=$("#dokumen_rapipk").val('Y');
														doku_piagam=$("#dokumen_piagam").val('Y');
														doku_ketpresdik=$("#dokumen_ketpresdik").val('Y');															
														$("#perusahaan").focus();
														
														}else{alert(result);}
													},
													error: function(error){alert('request timeout, please try again.');$( this ).dialog( "close" );} //event yang akan diseksekusi pada saat error berlangsung
													}
												);				
										}					
									}					
								}											
							}	
						}				
					}					
				}	
			}
	}
	</script>
    
    

