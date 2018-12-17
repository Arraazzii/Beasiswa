<script language="javascript">
</SCRIPT>
<?php 
$id_jenis = "";
if(isset($_GET['data'])){
  $id_jenis = $_GET['data'];
  }else{
    $id_jenis ="";
}
  ?>
<input type="hidden" id="id_jenis" name="id_jenis" value="<?php echo $id_jenis;?>">     
<center><h3> Tambah Jurusan/Bidang Keahlian/program keahlian</h3>
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
    <td width="10%">Tingkat Pendidikan</td>
    <td width="30%">
        <select name="kategori" id="kategori" style="color:#000; width:100%;" class="form-control">
            <option value="a.nama_tingkat">Nama</option>
            <option value="a.id_tingkat">Id</option>
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
    <input style="height:35px; float:right; margin-top:5px;" type="button" value="Kembali" class="btn btn-warning" data-toggle="modal" data-target="#myModal_input" onclick="window.location.href='index.php?conten=jenis'"> 
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
<form id="form1" name="form2">
  <table width="100%" border="0" align="center" class="table" id="mytable">
  <tr>
    <td width="5%"  valign="middle" align="center" class="lekukantabel1" id="warnaabutua">No</td>
    <td width="10%" valign="middle" id="warnaabutua">Id</td>
    <td width="50%" id="warnaabutua">Nama</td>
    <td width="10%" id="warnaabutua" align="center">Level</td>
    <td width="10%" id="warnaabutua"  align="center">Status</td>
    <td width="10%" id="warnaabutua" align="center">Aksi<!-- &nbsp;&nbsp;&nbsp;<input type="checkbox" id="selectall"/> --> </td>
  </tr>
  <tbody id="tampil_data">
  <?php
 	$i=1;
    $result = mysql_query("SELECT a.id_tingkat AS id_tingkat, a.nama_tingkat AS nama_tingkat, a.level AS level, a.st AS st, (SELECT COUNT(*) FROM jenis_det AS b WHERE b.id_jenis = '".$id_jenis."' AND b.id_tingkat = a.id_tingkat) AS jum FROM tingkat AS a  ORDER BY a.nama_tingkat ");
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
	<td bgcolor=\"$bg\"align=\"center\">"; 
      if($row[4]==0){
        echo"<input type=\"checkbox\" class=\"name\" name=\"name$row[0]\" id='name$row[0]'' value=\"$row[0]\" onclick=\"cekbox(this.value)\"\/>";
      }else{
        echo"<input type=\"checkbox\" class=\"name\" name=\"name$row[0]\" id='name$row[0]'' value=\"$row[0]\" onclick=\"cekbox(this.value)\"\ checked/>";
      }  
  echo"</td>
  </tr>";	
  $i++;	
}
?>
</tbody>
<input type="hidden" id="nomernya" name="nomernya" value="<?php echo $i;?>">      
</table>
</form>
 <?php
		
		?>
</div> 
</div>
</div>
<!--- TUTUP MODAL TAMBAH NILAI WAWANCARA -->
<script>
var objRow;
var cked ="";


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


function cekbox(data) {
  var id = data;
  var id_jenis = $('#id_jenis').val();
  //alert(id+","+id_jenis);
  var nama = "name"+id;
  var indi2 = '';
   url_all = $('#url').val();
   url = url_all+'jenis/proses_jenis.php';
  if(document.getElementById(nama).checked==true){
    //ketika dicek
    indi2 = 'check';
    $.getJSON(url, { id : id, id_jenis : id_jenis, indi2 : indi2 }, function(data) {
       alert(data);
    });
  }else{
    //ketika cek dihilangkan
    indi2 = 'uncheck';
    $.getJSON(url, { id : id, id_jenis : id_jenis, indi2 : indi2 }, function(data) {
       alert(data);
    });
  }
}
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
          lvnya  = "P";
       }
       $('#txt_st').val(stnya);
       $('#txt_lv').val(lvnya);
      objRow = obj.parent().parent();
}

</script>

<script type="text/javascript">
  function tampil() {
  // alert('tampil');
    var kategori = $('#kategori').val();
     kunci = $('#kunci').val();
     tampung="";
     cked = "";
     indi2 = 'cari';
     url_all = $('#url').val();
     url = url_all+'jenis/proses_jenis.php';
     id_jenis = $('#id_jenis').val();

      $.getJSON(url, { kategori : kategori, kunci : kunci, id_jenis : id_jenis,  indi2 : indi2 }, function(data) {
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

tampung += "<tr  style='background-color: #FFFFFF'><td class='id' bgcolor='"+warna+"' align='center'>"+nomer+"</td><td class='nisn' bgcolor='"+warna+"'>"+element.id_tingkat+"</td><td bgcolor='"+warna+"' class='nama'>"+element.nama_tingkat+"</td><td bgcolor='"+warna+"' align='center' class='lev'>"+lv+"</td><td bgcolor='"+warna+"' align='center' class='st'>"+st+"</td><td bgcolor='"+warna+"' align='center'>"; 

  if(element.jum=='0'){
    cked ="";
  }else{
    cked ="checked";
  }
 tampung += "<input type='checkbox' class='name' name='name"+element.id_tingkat+"' id='name"+element.id_tingkat+"' value='"+element.id_tingkat+"' onclick='cekbox(this.value)' "+cked+"/>";

tampung += "</td></tr>";

  nomer++; 
        });
/* alert(st);*/
      $('#tampil_data').html(tampung);
      $('#refresh').show();
    });
  }

   function reresh() {
  /*alert('tampil');*/
    var indi2 = 'refresh';
    var tampung="";
    var url_all = $('#url').val();
    var cked = "";
    var id_jenis = $('#id_jenis').val();
    var url = url_all+'jenis/proses_jenis.php';
      $.getJSON(url, { id_jenis : id_jenis, indi2 : indi2 }, function(data) {
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

tampung += "<tr  style='background-color: #FFFFFF'><td class='id' bgcolor='"+warna+"' align='center'>"+nomer+"</td><td class='nisn' bgcolor='"+warna+"'>"+element.id_tingkat+"</td><td bgcolor='"+warna+"' class='nama'>"+element.nama_tingkat+"</td><td bgcolor='"+warna+"' align='center' class='lev'>"+lv+"</td><td bgcolor='"+warna+"' align='center' class='st'>"+st+"</td><td bgcolor='"+warna+"' align='center'>"; 

  if(element.jum=='0'){
    cked ="";
  }else{
    cked ="checked";
  }
 tampung += "<input type='checkbox' class='name' name='name"+element.id_tingkat+"' id='name"+element.id_tingkat+"' value='"+element.id_tingkat+"' onclick='cekbox(this.value)' "+cked+"/>";

tampung += "</td></tr>";
  nomer++; 
        });
/* alert(st);*/
      $('#tampil_data').html(tampung);
      $('#refresh').hide();
    });
  }
</script>
