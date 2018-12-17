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
<center><h3> Pengumuman Beasiswa </h3></center>
<hr>
<div id="hasil_cari_data">
  <div style="padding-left: 1%;padding-right: 1%;">
  <form class="form-horizontal" method="post" action="index.php?conten=pengube_in&add" id="myForm" name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
  <table width="100%" border="0" align="center" class="table">
  <tr>
  	<td class="lekukantabel1" id="warnaabutua">&nbsp;&nbsp;&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center">&nbsp;&nbsp;&nbsp;</td>
  </tr>
   <tr>
  	<td class="bgisitabel" style="color:#FFF">Nomer Beasisiwa</td>
    <td class="bgisitabel" align="left">
    <select name="nomer" id="nomer" class="form-control">
    <?php 
    	$sql="SELECT no_beasiswa FROM info_beasiswa ORDER BY  no_beasiswa ASC ";
		$qry=mysql_query($sql);
		while ($data = mysql_fetch_array($qry)) {
			echo"<option value='$data[0]'>$data[0]</option>";
		}
    ?>
      </select>
    </td>
   </tr> 
   <tr>
  	<td class="bgisitabel" style="color:#FFF">Tahun</td>
    <td class="bgisitabel" align="left">
    <select name="tahun" id="tahun" class="form-control">
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>
    </td>
   </tr>
   <tr>
  	<td class="bgisitabel" style="color:#FFF">Judul Pengumuman</td>
    <td class="bgisitabel" align="left">
    		<input type="text" class="form-control" style="color:#000" id="judul" name="judul" size="120" value=""/></td>
   </tr>
   <tr>
  	<td class="bgisitabel" style="color:#FFF">Tanggal</td>
    <td class="bgisitabel" align="left">
    		<input type="text" class="form-control" style="color:#000; width:150px;" id="tgl" name="tgl" value=""/></td>
   </tr>    
   <tr>
  	<td class="bgisitabel" style="color:#FFF">Input Dokumen</td>
    <td class="bgisitabel" align="left">
    
   <textarea  rows="20" cols="10" id="dokumen" name="dokumen"></textarea> 

<!-- <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea> -->
</td>
   </tr>  
    <tr>
  	<td class="lekukantabel5" id="warnaabutua"></td>
    <td class="lekukantabel6" id="warnaabutua" align="right"><button type="submit" class="btn btn-warning" onclick="proses()" >&nbsp;&nbsp;Kirim&nbsp;&nbsp;</button>&nbsp;&nbsp;<button type="button" class="btn btn-warning" onclick="proses()" >&nbsp;&nbsp;Batal&nbsp;&nbsp;</button></td>
  </tr>
</table></div> 
</div>
<script type="text/javascript">


if ( typeof CKEDITOR == 'undefined' )
{
  document.write('CKEditor not found');
}
else
{
  var editor = CKEDITOR.replace( 'dokumen' ); 

  
  CKFinder.setupCKEditor( editor, '' ) ;

  
}
</script>
<script>

document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
</script>
<script>
function validateForm() {
  // data siswa
    var input1 = document.forms["myForm"]["nomer"].value;
    var input2 = document.forms["myForm"]["tahun"].value;
    var input3 = document.forms["myForm"]["judul"].value;
    var input4 = document.forms["myForm"]["tgl"].value;
    var input5 = document.forms["myForm"]["file"].value;
    //valid siswa
    if (input1 == null || input1 == "") {
        alert("User wajib memilih nomer beasisiwa!");
        $('#nomer').focus();
        return false;
    }else if (input2 == null || input2 == "") {
        alert("User wajib memilih tahun beasisiwa!");
        $('#tahun').focus();
        return false;
    }else if (input3 == null || input3 == "") {
        alert("Judul pengumuman wajib  diisi!");
        $('#judul').focus();
        return false;
    }else if (input4 == null || input4 == "") {
        alert("Tahun wajib  diisi!");
        $('#tahun').focus();
        return false;
    }else{
      send();
      return false;
    }
}
</script>

