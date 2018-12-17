<center><h3> Input Hasil Wawancara</h3>
  <p>&nbsp;</p>
</center>
<hr>
<div class="col-md-4 col-lg-4" >
  <div class="table-responsive">
  <form method="POST" action="index.php?conten=cari_in_hawa">
  <!--<form method="get" action="index.php?conten=acc">-->
  <table width="40%" border="0" align="center" class="table"  >
  <tr>
  	<td bgcolor="#FFFFFF"  class="lekukantabel3" id="warnaabutua">
    <table class="table-responsive">
  <tr>
    <td width="10%">NISN</td>
    <td width="30%">
        <input type="text" style="color:#000; width:100%;" id="nisn" name="nisn"  value=""/>
    </td>
  </tr>
  <tr>
    <td width="10%">Nama Peserta</td>
    <td width="30%">
        <input type="text" style="color:#000; width:100%;" id="nama" name="nama"  value=""/>
    </td>
   </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" height="50px"> 
     <input style="height:35px; float:right; margin-top:5px;" type="button" value="Refresh" class="btn btn-warning" onclick="window.location.href='index.php?conten=in_hawa'">
     <input style="height:35px; float:right; margin-top:5px;" type="submit" value="Cari" class="btn btn-warning"></td>
  </tr>
</table>
   </td>
  </tr>
  
</table>
</form>
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
    <td width="15%" valign="middle" id="warnaabutua">Nama Lengkap</td>
    <td width="10%" id="warnaabutua">Tgl Lahir</td>
    <td width="10%" id="warnaabutua">Kabupaten</td>
    <td width="10%" id="warnaabutua">Provinsi</td>
    <td width="10%" id="warnaabutua">Nama Sekolah</td>
    <td width="10%" id="warnaabutua">Kabupaten</td>
    <td width="10%" id="warnaabutua">Provinsi</td>
    <td width="15%" id="warnaabutua">Email</td>
    <td width="15%" id="warnaabutua">Status</td>
  </tr>
  <?php
 	$i=1;
      if(isset($_POST['nisn'])){
        $nisn = $_POST['nisn'];
    }else{
        $nisn ='';
    }
    if(isset($_POST['nama'])){
        $nama = $_POST['nama'];
    }else{
        $nama ='';
    }
    $result = mysql_query("SELECT a.nin, a.nama, a.tgl_la, a.kab, a.prov, b.nama_sekolah, b.kab, b.prov, a.email FROM data_pendaftar AS a, data_sekolah AS b WHERE a.nin = b.nin ANd a.st_admis = 'Y' AND a.st_wawan = 'N'  AND a.nin LIKE '%".$nisn."%' AND a.nama LIKE '%".$nama."%'");
while ($row = mysql_fetch_array($result))  

{  
		echo"<tr  style='background-color: #FFFFFF'>
	  <td class=\"nisn\">$row[0]</td>
    <td class=\"nama\">$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
    <td>$row[6]</td>
    <td>$row[7]</td>
    <td>$row[8]</td>
	<td> <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"wawan($(this))\">Wawancara</button>
  </td>
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




<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nilai Wawancara</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
        <div class="col-xs-12" style="padding-bottom: 10px;">
        <hr />
        <b>
        <font size="5%;">NISN : <b id="rubah_nis">123456787654323</b></font><br>  
    <font size="5%;">Nama :  <b id="rubah_nama">Didin Tri Anggoro</b></font>
    </b>
    <hr />
        </div>


      
      <form id="myForm" class="form-horizontal" method="POST" action="index.php?conten=proses_wawancara">
      <input type="hidden" class="form-control" name="id" id="id" placeholder="100" />
    <div class="form-group">
        <label class="col-xs-3 control-label">Nilai Kategori 1 :</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="nil_1" id="nil_1" placeholder="100" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Nilai Kategori 2 :</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="nil_2" id="nil_2" placeholder="100" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Nilai Kategori 3 :</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="nil_3" id="nil_3" placeholder="100" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Nilai Kategori 4 :</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="nil_4" id="nil_4" placeholder="100" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Nilai Kategori 5 :</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="nil_5" id="nil_5" placeholder="100" />
        </div>
    </div>
<!--     <div class="form-group">
        <label class="col-xs-3 control-label">Total Nilai :</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="total_nil" placeholder="500" />
        </div>
    </div> -->


        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
          </form>
        </div>
      </div>

    </div>
  </div>
<!--- TUTUP MODAL TAMBAH NILAI WAWANCARA -->
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

$(document).ready (function() {
  $('#myForm').formValidation({
    framework: 'bootstrap',
    excluded: 'disabled',

    icon: {
      valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        nil_1: {
                validators: {
                    notEmpty: {
                        message: '*Nilai Belum Diisi'
                    },
                    numeric: {
                        message: '* Hanya Diperbolehkan Angka'
                    }
                }
            },
            nil_2: {
                validators: {
                    notEmpty: {
                        message: '*Nilai Belum Diisi'
                    },
                    numeric: {
                        message: '* Hanya Diperbolehkan Angka'
                    }
                }
            },
            nil_3: {
                validators: {
                    notEmpty: {
                        message: '*Nilai Belum Diisi'
                    },
                    numeric: {
                        message: '* Hanya Diperbolehkan Angka'
                    }
                }
            },
            nil_4: {
                validators: {
                    notEmpty: {
                        message: '*Nilai Belum Diisi'
                    },
                    numeric: {
                        message: '* Hanya Diperbolehkan Angka'
                    }
                }
            },
            nil_5: {
                validators: {
                    notEmpty: {
                        message: '*Nilai Belum Diisi'
                    },
                    numeric: {
                        message: '* Hanya Diperbolehkan Angka'
                    }
                }
            },
            total_nil: {
                validators: {
                    notEmpty: {
                        message: '*Nilai Belum Diisi'
                    },
                    numeric: {
                        message: '* Hanya Diperbolehkan Angka'
                    }
                }
            }
    }
  })
});

function wawan(obj) {
        var id =obj.parent().parent().find(".nisn").html();
        var nama =obj.parent().parent().find(".nama").html();
       $('#rubah_nis').html(id);
       $('#rubah_nama').html(nama);
       $('#id').val(id);
      objRow = obj.parent().parent();
}

/*function proses_wawan(){
        var id = $('#rubah_nis').html();
        var idnya = $('#id').html();
        var nil_1 = $('#nil_1').val();
        var nil_2 = $('#nil_2').val();
        var nil_3 = $('#nil_3').val();
        var nil_4 = $('#nil_4').val();
        var nil_5 = $('#nil_5').val();
        //waitingDialog.show('Pencarian !');
        $.ajax({
                type: "POST",
                url: "in_hawa/proses_wawan.php",
                data: {"id":id,"nil_1":nil_1,"nil_2":nil_2,"nil_3":nil_3,"nil_4":nil_4,"nil_5":nil_5},
                timeout: 10000,
                beforeSend: function(){},
                complete: function(){},
                cache: false,
                success: function(result){
                    if (result=='Y'){
                       // waitingDialog.hide();
                       alert('Lulus');
                    }else{
                        lert('Tidak Lulus');

                    }
                    
                }
        });
}*/
</script>
