<center><h3>Jurusan/Bidang Keahlian/program keahlian</h3>
  <p>&nbsp;</p>
</center>
<hr>
<div class="col-md-4 col-lg-4" >
  <div class="table-responsive">
  <form id="form1" name="form1">
  <!--<form method="get" action="index.php?conten=acc">-->
  <table width="40%" border="0" align="center" class="table"  >
  <tr>
  	<td bgcolor="#FFFFFF"  class="lekukantabel3" id="warnaabutua">
    <table class="table-responsive">
  <tr>
    <td width="10%">Kategori</td>
    <td width="30%">
        <select name="kategori" id="kategori" style="color:#000; width:100%;" class="form-control">
            <option value="nama_tingkat">Nama</option>
            <option value="id_tingkat">Id</option>
        </select>
    </td>
  </tr>
  <tr>
    <td width="10%">Kata Kunci</td>
    <td width="30%">
        <input type="text" style="color:#000; width:100%;" id="kunci" name="kunci"  value=""/ class="form-control">
    </td>
   </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" height="50px">
    <input style="height:35px; float:right; margin-top:5px;" type="button" value="Tambah Data" class="btn btn-warning" data-toggle="modal" data-target="#myModal_input" onclick="view_input($(this))"> 
    <input style="height:35px; float:right; margin-top:5px;" type="button" value="Cari" class="btn btn-warning" onclick="tampil()">
    <input style="height:35px; float:right; margin-top:5px;" type="button" value="Refresh" class="btn btn-warning" id="refresh" name="refresh" onclick="reresh()">
    </td>
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
  <table width="100%" border="0" align="center" class="table" id="mytable">
  <tr>
    <td width="5%"  valign="middle" align="center" class="lekukantabel1" id="warnaabutua">No</td>
    <td width="10%" valign="middle" id="warnaabutua">Id</td>
    <td width="20%" id="warnaabutua">Nama</td>
    <td width="10%" id="warnaabutua" align="center">Level</td>
    <td width="10%" id="warnaabutua"  align="center">Status</td>
    <td width="40%" id="warnaabutua" align="center">Aksi</td>
  </tr>
  <tbody id="tampil_data">
  <?php
 	$i=1;
    $result = mysql_query("SELECT * FROM tingkat  ORDER BY nama_tingkat ");
while ($row = mysql_fetch_array($result))  

{  
      if($i%2==1){ 
      $bg = '#CCCCCC';
    }else{ 
      $bg = '#FFFFFF';
    }
    if($row[3]=='Y'){ 
      $st = 'AKTIF';
    }else{ 
      $st = 'NON AKTIF';
    }
    if($row[2]=='S'){ 
      $st2 = 'Sekolah';
    }else{ 
      $st2 = 'Perguruan Tinggi';
    }
		echo"<tr  style='background-color: #FFFFFF'>
	  <td class=\"id\" bgcolor=\"$bg\" align=\"center\">$i</td>
    <td class=\"nisn\" bgcolor=\"$bg\">$row[0]</td>
    <td class=\"nama\" bgcolor=\"$bg\">$row[1]</td>
    <td class=\"lev\"  bgcolor=\"$bg\" align=\"center\">$st2</td>
    <td class=\"st\"  bgcolor=\"$bg\" align=\"center\">$st</td>
	<td bgcolor=\"$bg\"align=\"center\"> 
    <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal_del\" onclick=\"view_del($(this))\">Delete</button>
    <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"wawan($(this))\">Edit</button>
  </td>
  </tr>";	
  $i++;	
}
?>
</tbody>
<input type="hidden" id="nomernya" name="nomernya" value="<?php echo $i;?>">      
</table>
 <?php
		
		?>
</div> 
</div>
</div>

<!-- modal edit -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Edit Data Jurusan/Bidang Keahlian/program keahlian</b></h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
        <div class="col-xs-12" style="padding-bottom: 10px;">
        <hr />
        <b>
        <font size="5%;">Id : <b id="txt_id">123456787654323</b></font><br>
    </b>
    <hr />
        </div>
      <form id="myForm" class="form-horizontal" >
    <div class="form-group">
        <label class="col-xs-3 control-label">Nama :</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="txt_nama" id="txt_nama" placeholder="100" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Level :</label>
        <div class="col-xs-5">
             <select name="txt_lv" id="txt_lv" style="color:#000; width:100%;" class="form-control">
            <option value="S">Sekolah</option>
            <option value="T">Perguruan Tingkat</option>
        </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Status :</label>
        <div class="col-xs-5">
             <select name="txt_st" id="txt_st" style="color:#000; width:100%;" class="form-control">
            <option value="Y">AKTIF</option>
            <option value="N">NON AKTIF</option>
        </select>
        </div>
    </div>


        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="edit()">Simpan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
          </form>
        </div>
      </div>

    </div>
  </div>

<!-- modal input -->
<div id="myModal_input" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Tambah Data Jurusan/Bidang Keahlian/program keahlian</b></h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
        <div class="col-xs-12" style="padding-bottom: 10px;">
        <hr />
    <hr />
        </div>
      <form id="myForm" class="form-horizontal" >
    <div class="form-group">
        <label class="col-xs-3 control-label">Nama :</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="txt_nama_in" id="txt_nama_in" placeholder="Nama" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Level :</label>
        <div class="col-xs-5">
             <select name="txt_lv_in" id="txt_lv_in" style="color:#000; width:100%;" class="form-control">
            <option value="S">Sekolah</option>
            <option value="T">Perguruan Tingkat</option>
        </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Status :</label>
        <div class="col-xs-5">
             <select name="txt_st_in" id="txt_st_in" style="color:#000; width:100%;" class="form-control">
            <option value="Y">AKTIF</option>
            <option value="N">NON AKTIF</option>
        </select>
        </div>
    </div>


        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="input_data()">Simpan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
          </form>
        </div>
      </div>

    </div>
  </div>


<!-- modal delete -->
  <div id="myModal_del" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Hapus Data Jurusan/Bidang Keahlian/program keahlian</b></h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
        <div class="col-xs-12" style="padding-bottom: 10px;">
        <hr />
        <b>
        <font size="5%;">Apakah anda yakin akan menghapus data dengan : <b id="txt_id_del">123456787654323</b></font><br>
    </b>
    <hr />
        </div>


      
      <!-- <form id="myForm" class="form-horizontal" >-->
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="delete_data()">Delete</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
          <!-- </form> -->
        </div>
      </div>

    </div>
  </div>
<!--- TUTUP MODAL TAMBAH NILAI WAWANCARA -->
<script>
var objRow;



$(document).ready (function() {
  $('#refresh').hide();
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
        var st =obj.parent().parent().find(".st").html();
        var lv =obj.parent().parent().find(".lev").html();
        var stnya ="";
        var lvnya ="";
       $('#txt_id').html(id);
       $('#txt_nama').val(nama);
       if(st == 'AKTIF'){
          stnya  = "Y";
       }else{
          stnya  = "N";
       }

       if(lv == 'Sekolah'){
          lvnya  = "S";
       }else{
          lvnya  = "T";
       }
       $('#txt_st').val(stnya);
       $('#txt_lv').val(lvnya);
      objRow = obj.parent().parent();
}
function view_del(obj) {
        var id =obj.parent().parent().find(".nisn").html();
        $('#txt_id_del').html(id);
      objRow = obj.parent().parent();
}
zxcfsdf
function view_input() {
       $('#txt_nama_in').val('');
       $('#txt_st_in').val('Y');
      objRow = obj.parent().parent();
}
</script>

<script type="text/javascript">
  function tampil() {
  // alert('tampil');
    var kategori = $('#kategori').val();
     kunci = $('#kunci').val();
     tampung="";
     indi = 'cari';
     url_all = $('#url').val();
     url = url_all+'tingkat/proses_tingkat.php';

      $.getJSON(url, { kategori : kategori, kunci : kunci, indi : indi }, function(data) {
     //ambil data 
     var nomer = 1;
     var st ="";
     var lv = "";
     var warna = "#CCCCCC";

        $.each(data, function(index, element) {
          if(nomer %2==1 ){
            warna = '#CCCCCC';
          }else{ 
            warna = '#FFFFFF';
          }
          if(element.st=='Y'){ 
            st = 'AKTIF';
          }else{ 
            st = 'NON AKTIF';
          }

          if(element.level=='S'){ 
            lv = 'Sekolah';
          }else{ 
            lv = 'Perguruan Tinggi';
          }
tampung += "<tr  style='background-color: #FFFFFF'><td class='id' bgcolor='"+warna+"' align='center'>"+nomer+"</td><td class='nisn' bgcolor='"+warna+"'>"+element.id_tingkat+"</td><td bgcolor='"+warna+"' class='nama'>"+element.nama_tingkat+"</td><td bgcolor='"+warna+"' align='center' class='lev'>"+lv+"</td><td bgcolor='"+warna+"' align='center' class='st'>"+st+"</td><td bgcolor='"+warna+"' align='center'><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal_del' onclick='view_del($(this))'>Delete</button><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal' onclick='wawan($(this))'>Edit</button></td></tr>";
  nomer++; 
        });
/* alert(st);*/
      $('#tampil_data').html(tampung);
      $('#refresh').show();
    });
  }

   function reresh() {
  /*alert('tampil');*/
    var indi = 'refresh';
    var tampung="";
    var url_all = $('#url').val();
    var url = url_all+'tingkat/proses_tingkat.php';
      $.getJSON(url, { indi : indi }, function(data) {
     //ambil data 
     var nomer = 1;
     var st ="";
     var lv ="";
     var warna = "#CCCCCC";

        $.each(data, function(index, element) {
          if(nomer %2==1 ){
            warna = '#CCCCCC';
          }else{ 
            warna = '#FFFFFF';
          }
          if(element.st=='Y'){ 
            st = 'AKTIF';
          }else{ 
            st = 'NON AKTIF';
          }

          if(element.level=='S'){ 
            lv = 'Sekolah';
          }else{ 
            lv = 'Perguruan Tinggi';
          }
tampung += "<tr  style='background-color: #FFFFFF'><td class='id' bgcolor='"+warna+"' align='center'>"+nomer+"</td><td class='nisn' bgcolor='"+warna+"'>"+element.id_tingkat+"</td><td bgcolor='"+warna+"' class='nama'>"+element.nama_tingkat+"</td><td bgcolor='"+warna+"' align='center' class='lev'>"+lv+"</td><td bgcolor='"+warna+"' align='center' class='st'>"+st+"</td><td bgcolor='"+warna+"' align='center'><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal_del' onclick='view_del($(this))'>Delete</button><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal' onclick='wawan($(this))'>Edit</button></td></tr>";
  nomer++; 
        });
/* alert(st);*/
      $('#tampil_data').html(tampung);
      $('#refresh').hide();
    });
  }

  function edit() {
  var nisn_data = $('#txt_id').html();
   var indi2 = "edit";
  var nama_data = $('#txt_nama').val();
  var st_data = $('#txt_st').val();
  var lv_data = $('#txt_lv').val();
  var url_all = $('#url').val();
  var url = url_all+'tingkat/proses_tingkat.php';
  var stnya ="";
  var lvnya ="";
 
  //alert(nama_data+','+st_data+','+lv_data+','+url+','+indi2);
   $.getJSON(url, { nisn_data : nisn_data, nama_data : nama_data, st_data : st_data, lv_data : lv_data}, function(data) {
    //alert('oke');
       alert(data);
       objRow.find(".nama").html(nama_data);
       if(st_data=='Y'){
          stnya = 'AKTIF';
        }else{ 
          stnya = 'NON AKTIF';
        }
        objRow.find(".st").html(stnya);
        if(lv_data=='S'){
          lvnya = 'Sekolah';
        }else{ 
          lvnya = 'Perguruan Tinggi';
        }
        objRow.find(".lev").html(lvnya);
    });
}

  function delete_data() {
  var nisn_data_del = $('#txt_id_del').html();
  var url_all = $('#url').val();
  var url = url_all+'tingkat/proses_tingkat.php';
  var indi = 'del';
   $.getJSON(url, { nisn_data_del : nisn_data_del, indi : indi }, function(data) {
       alert(data);
        objRow.remove();  
    });
}

function input_data() {
  //alert('oke');
  var nama_data_in = $('#txt_nama_in').val();
  var st_data_in = $('#txt_st_in').val();
  var lv_data_in = $('#txt_lv_in').val();
  var nomer = $('#nomernya').val();
  var jumlah = Number(nomer) + 1;
  var tampung="";
  var url_all = $('#url').val();
    var url = url_all+'tingkat/proses_tingkat.php';
  var indi = 'input_data';

  var st ="";
  var lv ="";
  var warna = "#CCCCCC"; 

  if(nomer %2==1 ){
     warna = '#CCCCCC';
  }else{ 
     warna = '#FFFFFF';
  }
  if(st_data_in=='Y'){ 
     st = 'AKTIF';
  }else{ 
     st = 'NON AKTIF';
  }

  if(lv_data_in=='P'){ 
     lv = 'Perguruan Tinggi';
  }else{ 
     lv = 'Sekolah';
  }
//alert(nama_data_in+','+st_data_in+','+lv_data_in+','+url);
 $.getJSON(url, { nama_data_in : nama_data_in, st_data_in : st_data_in, lv_data_in : lv_data_in, indi : indi }, function(data) {
  var stringBaru = data.split("-");
      //alert(stringBaru[0]);
      var stringid = stringBaru[1].split(".");
       tampung = "<tr  style='background-color: #FFFFFF'><td class='id' bgcolor='"+warna+"' align='center'>"+jumlah+"</td><td class='nisn' bgcolor='"+warna+"'>"+stringBaru[1]+"</td><td bgcolor='"+warna+"' class='nama'>"+nama_data_in+"</td><td bgcolor='"+warna+"' align='center' class='lev'>"+lv+"</td><td bgcolor='"+warna+"' align='center' class='st'>"+st+"</td><td bgcolor='"+warna+"' align='center'><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal_del' onclick='view_del($(this))'>Delete</button><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal' onclick='wawan($(this))'>Edit</button></td></tr>";
        $('#nomernya').val(jumlah); 
        $('#mytable > tbody:last').append(tampung);
    });
}
</script>
