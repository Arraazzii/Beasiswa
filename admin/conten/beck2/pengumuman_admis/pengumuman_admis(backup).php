<style type="text/css">

  #nomer{

    width: 70%;

    height:  = 30px;

  }

  #tahun{

    width: 40%;

    height:  = 30px;

  }

</style>

<center><h3> Pengumuman administrasi </h3></center>

<hr>

<div id="hasil_cari_data">

<div class="col-md-7 col-lg-7" >

  <div class="table-responsive">

  <table width="40%" border="0" align="center" class="table">

  <tr>

  	<td class="lekukantabel1" id="warnaabutua">Jenjang Pendidikan</td>

    <td class="lekukantabel2" id="warnaabutua" align="center">Nominal Anak</td>

  </tr>

   <tr>

  	<td class="bgisitabel" style="color:#FFF">Nomer Beasisiwa</td>

    <td class="bgisitabel" align="left">

    <select nama="nomer" id="nomer" >

        <option value="01">01</option>

        <option value="02">02</option>

        <option value="03">03</option>

      </select>

    </td>

   </tr> 

   <tr>

  	<td class="bgisitabel" style="color:#FFF">Tahun</td>

    <td class="bgisitabel" align="left">

    <select nama="tahun" id="tahun" >

        <option value="2016">2016</option>

        <option value="2017">2017</option>

        <option value="2018">2018</option>

      </select>

    </td>

   </tr>

   <tr>

  	<td class="bgisitabel" style="color:#FFF">Judul Pengumuman</td>

    <td class="bgisitabel" align="left"><input type="text" style="color:#000" id="nom" name="nom" size="80" 

    onkeyup="kuota()" value=""/></td>

   </tr>

   <tr>

  	<td class="bgisitabel" style="color:#FFF">Tanggal</td>

    <td class="bgisitabel" align="left"><input type="text" style="color:#000" id="nom" name="nom" 

    onkeyup="kuota()" value=""/></td>

   </tr>    

   <tr>

  	<td class="bgisitabel" style="color:#FFF">Upload File</td>

    <td class="bgisitabel" align="left"><input type="text" style="color:#000" id="nom" name="nom" size="50" 

    onkeyup="kuota()" value=""/>&nbsp;&nbsp;<button type="button" class="btn btn-warning" onclick="proses()" >&nbsp;&nbsp;Browse&nbsp;&nbsp;</button></td>

   </tr>  

    <tr>

  	<td  id="warnaabutua"></td>

    <td  id="warnaabutua" align="right"><button type="button" class="btn btn-warning" onclick="proses()" >&nbsp;&nbsp;Kirim&nbsp;&nbsp;</button>&nbsp;&nbsp;<button type="button" class="btn btn-warning" onclick="proses()" >&nbsp;&nbsp;Batal&nbsp;&nbsp;</button></td>

  </tr>

</table></div> 

</div>

</div>





<script>

/*function kunciu(sek){

	var jenis = sek.value;

	

	var noma_sd =0;

	var noma_smp =0;

	var noma_sma =0;

	var noma_univ =0;

	var penye_sd =0;

	var penye_smp =0;

	var penye_sma =0;

	var penye_univ =0;

	var tot_sd = 0;

	var tot_smp = 0;

	var tot_sma = 0;

	var tot_univ = 0;

	var tampung_tot = 0;

	if(jenis=="SD"){

		noma_sd =$("#unoma_SD").val();

		penye_sd =$("#upenye_SD").val();

		var total_nom_sd = penye_sd * noma_sd;

		$("#utot_SD").val(total_nom_sd);

		tot_sd = $("#utot_SD").val();

		tot_smp = $("#utot_SMP").val();

		tot_sma = $("#utot_SMA").val();

		tot_univ = $("#utot_UNIVERSITAS").val();

		tampung_tot= Number(tot_sd) + Number(tot_smp) + Number(tot_sma) + Number(tot_univ);

		$("#utotal_nom").val(tampung_tot);

	} else if(jenis=="SMP"){

		noma_smp =$("#unoma_SMP").val();

		penye_smp =$("#upenye_SMP").val();

		var total_nom_smp = penye_smp * noma_smp;

		$("#utot_SMP").val(total_nom_smp);

		tot_sd = $("#utot_SD").val();

		tot_smp = $("#utot_SMP").val();

		tot_sma = $("#tot_SMA").val();

		tot_univ = $("#utot_UNIVERSITAS").val();

		tampung_tot= Number(tot_sd) + Number(tot_smp) + Number(tot_sma) + Number(tot_univ);

		$("#utotal_nom").val(tampung_tot);

	} else if(jenis=="SMA"){

		noma_sma =$("#unoma_SMA").val();

		penye_sma =$("#upenye_SMA").val();

		var total_nom_sma = penye_sma * noma_sma;

		$("#utot_SMA").val(total_nom_sma);

		tot_sd = $("#utot_SD").val();

		tot_smp = $("#utot_SMP").val();

		tot_sma = $("#utot_SMA").val();

		tot_univ = $("#utot_UNIVERSITAS").val();

		tampung_tot= Number(tot_sd) + Number(tot_smp) + Number(tot_sma) + Number(tot_univ);

		$("#utotal_nom").val(tampung_tot);

	} else if(jenis=="UNIVERSITAS"){

		noma_univ =$("#unoma_UNIVERSITAS").val();

		penye_univ =$("#upenye_UNIVERSITAS").val();

		var total_nom_univ = penye_univ * noma_univ;

		$("#utot_UNIVERSITAS").val(total_nom_univ);

		tot_sd = $("#utot_SD").val();

		tot_smp = $("#utot_SMP").val();

		tot_sma = $("#utot_SMA").val();

		tot_univ = $("#utot_UNIVERSITAS").val();

		tampung_tot= Number(tot_sd) + Number(tot_smp) + Number(tot_sma) + Number(tot_univ);

		$("#utotal_nom").val(tampung_tot);

	}

}

function kunci(sek){

	var jenis = sek.value;

	

	var noma_sd =0;

	var noma_smp =0;

	var noma_sma =0;

	var noma_univ =0;

	var penye_sd =0;

	var penye_smp =0;

	var penye_sma =0;

	var penye_univ =0;

	var tot_sd = 0;

	var tot_smp = 0;

	var tot_sma = 0;

	var tot_univ = 0;

	var tampung_tot = 0;

	if(jenis=="SD"){

		noma_sd =$("#noma_SD").val();

		penye_sd =$("#penye_SD").val();

		var total_nom_sd = penye_sd * noma_sd;

		$("#tot_SD").val(total_nom_sd);

		tot_sd = $("#tot_SD").val();

		tot_smp = $("#tot_SMP").val();

		tot_sma = $("#tot_SMA").val();

		tot_univ = $("#tot_UNIVERSITAS").val();

		tampung_tot= Number(tot_sd) + Number(tot_smp) + Number(tot_sma) + Number(tot_univ);

		$("#total_nom").val(tampung_tot);

	} else if(jenis=="SMP"){

		noma_smp =$("#noma_SMP").val();

		penye_smp =$("#penye_SMP").val();

		var total_nom_smp = penye_smp * noma_smp;

		$("#tot_SMP").val(total_nom_smp);

		tot_sd = $("#tot_SD").val();

		tot_smp = $("#tot_SMP").val();

		tot_sma = $("#tot_SMA").val();

		tot_univ = $("#tot_UNIVERSITAS").val();

		tampung_tot= Number(tot_sd) + Number(tot_smp) + Number(tot_sma) + Number(tot_univ);

		$("#total_nom").val(tampung_tot);

	} else if(jenis=="SMA"){

		noma_sma =$("#noma_SMA").val();

		penye_sma =$("#penye_SMA").val();

		var total_nom_sma = penye_sma * noma_sma;

		$("#tot_SMA").val(total_nom_sma);

		tot_sd = $("#tot_SD").val();

		tot_smp = $("#tot_SMP").val();

		tot_sma = $("#tot_SMA").val();

		tot_univ = $("#tot_UNIVERSITAS").val();

		tampung_tot= Number(tot_sd) + Number(tot_smp) + Number(tot_sma) + Number(tot_univ);

		$("#total_nom").val(tampung_tot);

	} else if(jenis=="UNIVERSITAS"){

		noma_univ =$("#noma_UNIVERSITAS").val();

		penye_univ =$("#penye_UNIVERSITAS").val();

		var total_nom_univ = penye_univ * noma_univ;

		$("#tot_UNIVERSITAS").val(total_nom_univ);

		tot_sd = $("#tot_SD").val();

		tot_smp = $("#tot_SMP").val();

		tot_sma = $("#tot_SMA").val();

		tot_univ = $("#tot_UNIVERSITAS").val();

		tampung_tot= Number(tot_sd) + Number(tot_smp) + Number(tot_sma) + Number(tot_univ);

		$("#total_nom").val(tampung_tot);

	}

}

	function proses(){

	waitingDialog.show('Proses!');

	var total_dana =$("#total_dana").val();

	var tampung_kuota = 0;

	var tampung_tot = 0;

	

	

	var nom_sd =$("#nom_SD").val();

	var nom_smp =$("#nom_SMP").val();

	var nom_sma =$("#nom_SMA").val();

	var nom_univ =$("#nom_UNIVERSITAS").val();





	var presen_sd =$("#presen1_SD").val();

	var presen_smp =$("#presen1_SMP").val();

	var presen_sma =$("#presen1_SMA").val();

	var presen_univ =$("#presen1_UNIVERSITAS").val();	

	

		

	//nominal/anak

	$("#noma_SD").val(nom_sd);

	$("#noma_SMP").val(nom_smp);

	$("#noma_SMA").val(nom_sma);

	$("#noma_UNIVERSITAS").val(nom_univ);

	

	var noma_sd =$("#noma_SD").val();

	var noma_smp =$("#noma_SMP").val();

	var noma_sma =$("#noma_SMA").val();

	var noma_univ =$("#noma_UNIVERSITAS").val();

	

	//proses kuota

	var pecah_sd = presen_sd.split("%");

	var kuota_sd = ((Number(pecah_sd[0])/100)*total_dana)/noma_sd;

	var desi_sd =  Math.round(kuota_sd);

	$("#kuot_SD").val(desi_sd);

	$("#penye_SD").val(desi_sd);

	tampung_kuota += desi_sd;

	

	var pecah_smp = presen_smp.split("%");

	var kuota_smp = ((Number(pecah_smp[0])/100)*Number(total_dana))/Number(noma_smp);

	var desi_smp =  Math.round(kuota_smp);

	$("#kuot_SMP").val(desi_smp);

	$("#penye_SMP").val(desi_smp);

	tampung_kuota += desi_smp;

	



	var pecah_sma = presen_sma.split("%");

	var kuota_sma = ((Number(pecah_sma[0])/100)*Number(total_dana))/Number(noma_sma);

	var desi_sma =  Math.round(kuota_sma);

	$("#kuot_SMA").val(desi_sma);

	$("#penye_SMA").val(desi_sma);

	tampung_kuota += desi_sma;

	

	var pecah_univ = presen_univ.split("%");

	var kuota_univ = ((Number(pecah_univ[0])/100)*Number(total_dana))/Number(noma_univ);

	var desi_univ =  Math.round(kuota_univ);

	$("#kuot_UNIVERSITAS").val(desi_univ);

	$("#penye_UNIVERSITAS").val(desi_univ);

	tampung_kuota += desi_univ;

	

	$("#total_kuota").val(tampung_kuota);

	$("#total_penye").val(tampung_kuota);

	

	var penye_sd =$("#penye_SD").val();

	var penye_smp =$("#penye_SMP").val();

	var penye_sma =$("#penye_SMA").val();

	var penye_univ =$("#penye_UNIVERSITAS").val();

	

	var total_nom_sd = penye_sd * noma_sd;

	$("#tot_SD").val(total_nom_sd);

	tampung_tot += total_nom_sd;

	

	var total_nom_smp = penye_smp * noma_smp;

	$("#tot_SMP").val(total_nom_smp);

	tampung_tot += total_nom_smp;

	

	var total_nom_sma = penye_sma * noma_sma;

	$("#tot_SMA").val(total_nom_sma);

	tampung_tot += total_nom_sma;

	

	var total_nom_univ = penye_univ * noma_univ;

	$("#tot_UNIVERSITAS").val(total_nom_univ);

	tampung_tot += total_nom_univ;	

	

	waitingDialog.hide(); 

	$("#total_nom").val(tampung_tot);

	

}



function prosesu(){

	waitingDialog.show('Proses!');

	var total_dana =$("#utotal_dana").val();

	

	var tampung_kuota = 0;

	var tampung_tot = 0;

	

	

	var nom_sd =$("#unom_SD").val();

	var nom_smp =$("#unom_SMP").val();

	var nom_sma =$("#unom_SMA").val();

	var nom_univ =$("#unom_UNIVERSITAS").val();





	var presen_sd =$("#upresen1_SD").val();

	var presen_smp =$("#upresen1_SMP").val();

	var presen_sma =$("#upresen1_SMA").val();

	var presen_univ =$("#upresen1_UNIVERSITAS").val();	

	

		

	//nominal/anak

	$("#unoma_SD").val(nom_sd);

	$("#unoma_SMP").val(nom_smp);

	$("#unoma_SMA").val(nom_sma);

	$("#unoma_UNIVERSITAS").val(nom_univ);

	

	var noma_sd =$("#unoma_SD").val();

	var noma_smp =$("#unoma_SMP").val();

	var noma_sma =$("#unoma_SMA").val();

	var noma_univ =$("#unoma_UNIVERSITAS").val();

	

	//proses kuota

	var pecah_sd = presen_sd.split("%");

	var kuota_sd = ((Number(pecah_sd[0])/100)*total_dana)/noma_sd;

	var desi_sd =  Math.round(kuota_sd);

	$("#ukuot_SD").val(desi_sd);

	$("#upenye_SD").val(desi_sd);

	tampung_kuota += desi_sd;

	

	var pecah_smp = presen_smp.split("%");

	var kuota_smp = ((Number(pecah_smp[0])/100)*Number(total_dana))/Number(noma_smp);

	var desi_smp =  Math.round(kuota_smp);

	$("#ukuot_SMP").val(desi_smp);

	$("#upenye_SMP").val(desi_smp);

	tampung_kuota += desi_smp;

	



	var pecah_sma = presen_sma.split("%");

	var kuota_sma = ((Number(pecah_sma[0])/100)*Number(total_dana))/Number(noma_sma);

	var desi_sma =  Math.round(kuota_sma);

	$("#ukuot_SMA").val(desi_sma);

	$("#upenye_SMA").val(desi_sma);

	tampung_kuota += desi_sma;

	

	var pecah_univ = presen_univ.split("%");

	var kuota_univ = ((Number(pecah_univ[0])/100)*Number(total_dana))/Number(noma_univ);

	var desi_univ =  Math.round(kuota_univ);

	$("#ukuot_UNIVERSITAS").val(desi_univ);

	$("#upenye_UNIVERSITAS").val(desi_univ);

	tampung_kuota += desi_univ;

	

	$("#utotal_kuota").val(tampung_kuota);

	$("#utotal_penye").val(tampung_kuota);

	

	var penye_sd =$("#upenye_SD").val();

	var penye_smp =$("#upenye_SMP").val();

	var penye_sma =$("#upenye_SMA").val();

	var penye_univ =$("#upenye_UNIVERSITAS").val();

	

	var total_nom_sd = penye_sd * noma_sd;

	$("#utot_SD").val(total_nom_sd);

	tampung_tot += total_nom_sd;

	

	var total_nom_smp = penye_smp * noma_smp;

	$("#utot_SMP").val(total_nom_smp);

	tampung_tot += total_nom_smp;

	

	var total_nom_sma = penye_sma * noma_sma;

	$("#utot_SMA").val(total_nom_sma);

	tampung_tot += total_nom_sma;

	

	var total_nom_univ = penye_univ * noma_univ;

	$("#utot_UNIVERSITAS").val(total_nom_univ);

	tampung_tot += total_nom_univ;	
	waitingDialog.hide(); 

	$("#utotal_nom").val(tampung_tot);

	

}





function batal(){

	waitingDialog.show('Proses!');

	$("#nom_SD").val("");

	$("#nom_SMP").val("");

	$("#nom_SMA").val("");

	$("#nom_UNIVERSITAS").val("");

	 

	$("#noma_SD").val("");

	$("#noma_SMP").val("");

	$("#noma_SMA").val("");

	$("#noma_UNIVERSITAS").val("");

	

	$("#kuot_SD").val("");

	$("#kuot_SMP").val("");

	$("#kuot_SMA").val("");

	$("#kuot_UNIVERSITAS").val("");

	

	$("#penye_SD").val("0");

	$("#penye_SMP").val("0");

	$("#penye_SMA").val("0");

	$("#penye_UNIVERSITAS").val("0");

	

	$("#tot_SD").val("");

	$("#tot_SMP").val("");

	$("#tot_SMA").val("");

	$("#tot_UNIVERSITAS").val("");

	

	$("#total_dana").val("");

	$("#tahun_dana").val("");

	$("#total_nom").val("");

	$("#total_kuota").val("");

	$("#total_penye").val("0");

	

	waitingDialog.hide(); 

	$("#tahun_dana").focus();	

}



function simpan(){

waitingDialog.show('Proses Simpan Data !');	

	var nom_sd = $("#nom_SD").val();

	var nom_smp = $("#nom_SMP").val();

	var nom_sma = $("#nom_SMA").val();

	var nom_univ = $("#nom_UNIVERSITAS").val();

	 

	var noma_sd = $("#noma_SD").val();

	var noma_smp = $("#noma_SMP").val();

	var noma_sma = $("#noma_SMA").val();

	var noma_univ = $("#noma_UNIVERSITAS").val();

	

	var kuot_sd = $("#kuot_SD").val();

	var kuot_smp = $("#kuot_SMP").val();

	var kuot_sma = $("#kuot_SMA").val();

	var kuot_univ = $("#kuot_UNIVERSITAS").val();

	

	var penye_sd = $("#penye_SD").val();

	var penye_smp = $("#penye_SMP").val();

	var penye_sma = $("#penye_SMA").val();

	var penye_univ = $("#penye_UNIVERSITAS").val();

	

	var tot_sd = $("#tot_SD").val();

	var tot_smp = $("#tot_SMP").val();

	var tot_sma = $("#tot_SMA").val();

	var tot_univ = $("#tot_UNIVERSITAS").val();

	

	var presen_sd =$("#presen1_SD").val();

	var presen_smp =$("#presen1_SMP").val();

	var presen_sma =$("#presen1_SMA").val();

	var presen_univ =$("#presen1_UNIVERSITAS").val();	

	
	var total_dana = $("#total_dana").val();

	var tahun_dana = $("#tahun_dana").val();

	var total_nom = $("#total_nom").val();

	var total_kuota = $("#total_kuota").val();

	var total_penye = $("#total_penye").val();

	

	aact= 'insert';

		$.ajax({

				type: "POST", 

				url: "kuota/add.php",

				data: {"nom_sd":nom_sd,"nom_smp":nom_smp,"nom_sma":nom_sma,"nom_univ":nom_univ,"noma_sd":noma_sd,"noma_smp":noma_smp,"noma_sma":noma_sma,"noma_univ":noma_univ,"kuot_sd":kuot_sd,"kuot_smp":kuot_smp,"kuot_sma":kuot_sma,"kuot_univ":kuot_univ,"penye_sd":penye_sd,"penye_smp":penye_smp,"penye_sma":penye_sma,"penye_univ":penye_univ,"tot_sd":tot_sd,"tot_smp":tot_smp,"tot_sma":tot_sma,"tot_univ":tot_univ,"total_dana":total_dana,"tahun_dana":tahun_dana,"total_nom":total_nom,"total_kuota":total_kuota,"total_penye":total_penye,"presen_sd":presen_sd,"presen_smp":presen_smp,"presen_sma":presen_sma,"presen_univ":presen_univ,"act":aact},

				timeout: 200000,

				beforeSend: function(){},

				complete: function(){},

				cache: false, 

				success: function(result){ 

					if (result=='success'){ 

					waitingDialog.hide(); 

					alert("Proses simpan berhasil!");

					}else{alert(result);}

				},

				error: function(error){alert('request timeout, please try again.');$( this ).dialog( "close" );} //event yang akan diseksekusi pada saat error berlangsung

				}

			);



}



function update(){

waitingDialog.show('Proses Simpan Data!');	

	var nom_sd = $("#unom_SD").val();

	var nom_smp = $("#unom_SMP").val();

	var nom_sma = $("#unom_SMA").val();

	var nom_univ = $("#unom_UNIVERSITAS").val();

	 

	var noma_sd = $("#unoma_SD").val();

	var noma_smp = $("#unoma_SMP").val();

	var noma_sma = $("#unoma_SMA").val();

	var noma_univ = $("#unoma_UNIVERSITAS").val();

	

	var kuot_sd = $("#ukuot_SD").val();

	var kuot_smp = $("#ukuot_SMP").val();

	var kuot_sma = $("#ukuot_SMA").val();

	var kuot_univ = $("#ukuot_UNIVERSITAS").val();

	

	var penye_sd = $("#upenye_SD").val();

	var penye_smp = $("#upenye_SMP").val();

	var penye_sma = $("#upenye_SMA").val();

	var penye_univ = $("#upenye_UNIVERSITAS").val();

	

	var tot_sd = $("#utot_SD").val();

	var tot_smp = $("#utot_SMP").val();

	var tot_sma = $("#utot_SMA").val();

	var tot_univ = $("#utot_UNIVERSITAS").val();

	

	var presen_sd =$("#upresen1_SD").val();

	var presen_smp =$("#upresen1_SMP").val();

	var presen_sma =$("#upresen1_SMA").val();

	var presen_univ =$("#upresen1_UNIVERSITAS").val();	

	

	var total_dana = $("#utotal_dana").val();

	var tahun_dana = $("#tahun_dana").val();

	var total_nom = $("#utotal_nom").val();

	var total_kuota = $("#utotal_kuota").val();

	var total_penye = $("#utotal_penye").val();

	

	aact= 'insert';

		$.ajax({

				type: "POST", 

				url: "kuota/update.php",

				data: {"nom_sd":nom_sd,"nom_smp":nom_smp,"nom_sma":nom_sma,"nom_univ":nom_univ,"noma_sd":noma_sd,"noma_smp":noma_smp,"noma_sma":noma_sma,"noma_univ":noma_univ,"kuot_sd":kuot_sd,"kuot_smp":kuot_smp,"kuot_sma":kuot_sma,"kuot_univ":kuot_univ,"penye_sd":penye_sd,"penye_smp":penye_smp,"penye_sma":penye_sma,"penye_univ":penye_univ,"tot_sd":tot_sd,"tot_smp":tot_smp,"tot_sma":tot_sma,"tot_univ":tot_univ,"total_dana":total_dana,"tahun_dana":tahun_dana,"total_nom":total_nom,"total_kuota":total_kuota,"total_penye":total_penye,"presen_sd":presen_sd,"presen_smp":presen_smp,"presen_sma":presen_sma,"presen_univ":presen_univ,"act":aact},

				timeout: 200000,

				beforeSend: function(){},

				complete: function(){},

				cache: false, 

				success: function(result){ 

					if (result=='success'){

						waitingDialog.hide();  

					alert("Proses simpan berhasil!");

					}else{alert(result);}

				},

				error: function(error){alert('request timeout, please try again.');$( this ).dialog( "close" );} //event yang akan diseksekusi pada saat error berlangsung

				}

			);



}





function cek(){

	var tahun_dana = $("#tahun_dana").val();

	if(tahun_dana==""){

		alert("Anda harus mengisikan tahun terlebih dahulu!");

		$("#tahun_dana").focus();

	}else{

	waitingDialog.show('Cek Kuota Pendidikan Tahun '+tahun_dana+'!');

	$.ajax({

				type: "POST", 

				url: "kuota/cek.php",

				data: {"tahun_dana":tahun_dana},

				timeout: 100000,

				beforeSend: function(){},

				complete: function(){},

				cache: false, 

				success: function(result){ 

					if (result==0){

						waitingDialog.hide();

						alert("Kuota Belum Ada!");						

						var tahun = $("#tahun_dana").val();

						var indi = "tidak";

						$.ajax({

						type: "POST", 

						url: "kuota/dana.php",

						data: {"tahun":tahun,"indi":indi},

						timeout: 10000,

						beforeSend: function(){},

						complete: function(){},

						cache: false, 

						success: function(result){ 

							$("#hasil_cari_dana").html(result);

						},

						error: function(error){alert('request timeout, please try again.');$( this ).dialog( "close" );} 

						}

						);

						

						$.ajax({

						type: "POST", 

						url: "kuota/tidak.php",

						data: {"tahun":tahun},

						timeout: 10000,

						beforeSend: function(){},

						complete: function(){},

						cache: false, 

						success: function(result){ 

							$("#hasil_cari_data").html(result);

						},

						error: function(error){alert('request timeout, please try again.');$( this ).dialog( "close" );} 

						}

						);		

					}else{

						waitingDialog.hide(); 

						alert("Kuota Sudah Ada!");

						var tahun = $("#tahun_dana").val();

						var indi = "ada";

						$.ajax({

						type: "POST", 

						url: "kuota/dana.php",

						data: {"tahun":tahun,"indi":indi},

						timeout: 10000,

						beforeSend: function(){},

						complete: function(){},

						cache: false, 

						success: function(result){ 

							$("#hasil_cari_dana").html(result);

						},

						error: function(error){alert('request timeout, please try again.');$( this ).dialog( "close" );} 

						}

						);

						$.ajax({

						type: "POST", 

						url: "kuota/ada.php",

						data: {"tahun":tahun},

						timeout: 10000,

						beforeSend: function(){},

						complete: function(){},

						cache: false, 

						success: function(result){ 

							$("#hasil_cari_data").html(result);

						},

						error: function(error){alert('request timeout, please try again.');$( this ).dialog( "close" );} 

						}

						);						

					}

				},

				error: function(error){alert('request timeout, please try again.');$( this ).dialog( "close" );} //event yang akan diseksekusi pada saat error berlangsung

				}

			);

	}

}*/

</script>

