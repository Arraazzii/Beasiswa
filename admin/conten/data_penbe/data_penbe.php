<style type="text/css">
#nomer {
    width: 100%;
    height: =30px;
}

#tahun {
    width: 40%;
    height: =30px;
}
</style>
<center>
    <h3>Data Penerima Beasiswa</h3>
    <p>&nbsp;</p>
</center>
<hr>
<div class="col-md-5 col-lg-5">
    <div class="table-responsive">
        <form method="POST" action="index.php?conten=cari_penbe">
            <table width="34%" border="0" align="center" class="table">
                <tr>
                    <td bgcolor="#FFFFFF" class="lekukantabel3" id="warnaabutua">
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
                                <td>
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
                        <td align="right">
                            <input style="height:35px; float:right; margin-top:5px;" type="submit" value="Cari" class="btn btn-warning">
                        </td>
                    </tr>
                    </table>
                    </td>
                </tr>
            </table>
        </form>
        </td>
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
    <div class="col-md-12 col-lg-12">
        <div class="table-responsive">
            <table width="100%" border="0" align="center" class="table">
                <tr>
                    <td width="5%" valign="middle" align="center" class="lekukantabel1" id="warnaabutua">NO</td>
                    <td width="5%" valign="middle" align="center" id="warnaabutua">Nisn</td>
                    <td width="15%" valign="middle" id="warnaabutua">Nama Lengkap</td>
                    <td width="10%" id="warnaabutua">Tgl Lahir</td>
                    <td width="10%" id="warnaabutua">Kabupaten</td>
                    <td width="10%" id="warnaabutua">Provinsi</td>
                    <td width="10%" id="warnaabutua">Nama Sekolah</td>
                    <td width="10%" id="warnaabutua">Kabupaten</td>
                    <td width="10%" id="warnaabutua">Total Admin</td>
                    <td width="10%" id="warnaabutua">Total Wawancara</td>
                    <td width="10%" id="warnaabutua">Status</td>
                </tr>
                <?php
      
     /*$i = $posisi+1;
  $id_daf = $_POST['id_daf'];
$th_daf = $_POST['th_daf'];*/
$i=1;
/* if(isset($_GET['tahun_dana'])){
     $tahun = $_GET['tahun_dana'];
    
   }else{*/
     $tahun=date('Y');
   //}  
    $sql_perusahaan = mysql_query("SELECT
a.nin,
a.nama,
a.tgl_la,
a.kec,
a.kab,
a.prov,
b.nama_sekolah,
b.kab,
b.prov,
b.email,
a.st_admis,
a.nilai_ak,
a.nilai_ket,
a.nilai_jpa,
a.nilai_jpna,
a.nilai_wa1,
a.nilai_wa2,
a.nilai_wa3,
a.nilai_wa4,
a.nilai_wa5,
a.st_wawan
FROM
data_pendaftar AS a ,
data_sekolah AS b
WHERE
a.nin = b.nin AND a.st_admis = 'Y' AND a.st_wawan = 'Y' ");  
    while($view_per=mysql_fetch_array($sql_perusahaan)){
      if($i%2==0){ 
      $bg = '#CCCCCC';
    }else{ 
      $bg = '#FFFFFF';
    }
    $total_admins = $view_per[11] + $view_per[12] + $view_per[13] + $view_per[14];
    $total_akad = $view_per[15] + $view_per[16] + $view_per[17] + $view_per[18] + $view_per[19]; 
    echo"<tr>
  <td bgcolor=\"$bg\" class='fcjen' id='fcjen' name='fcjen'>$i</td>
    <td bgcolor=\"$bg\" class='fcnm' id='fcnm' name='fcnm'>$view_per[0]</td>
    <td bgcolor=\"$bg\" class='un'>$view_per[1]</td>
    <td bgcolor=\"$bg\" class='bp'>$view_per[2]</td>
    <td bgcolor=\"$bg\" class='not'>$view_per[4]</td>
    <td bgcolor=\"$bg\" class='na'>$view_per[5]</td>
    <td bgcolor=\"$bg\" class='na'>$view_per[6]</td>
    <td bgcolor=\"$bg\" class='na'>$view_per[7]</td>
    <td bgcolor=\"$bg\" class='na'>$total_admins</td>
    <td bgcolor=\"$bg\" class='na'>$total_akad</td>
  <td bgcolor=\"$bg\">";
  ?>
                    <?php
   if($view_per[10]=='Y'){ 
      $st = 'Lulus';
    }else{ 
      $st = 'Tidak Lulus';
    }
    echo $st;?>
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
                            <td id="warnaabutua"></td>
                        </tr>
                        <tr>
                            <td colspan="9"></td>
                            <td colspan="2" align="center" id="BG_menu_data_Calon_Penerima" style="padding-top:10px">
                                <form action="data_penbe/penbe_export_excel_all.php" method="post">
                                    <input type="submit" value="Excell All" class="btn btn-warning">
                                </form>
                            </td>
                        </tr>
            </table>
            <?php
    
    ?>
        </div>
    </div>
</div>
<div class="modal fade" id="contact_det" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:auto">
    <div class="modal-dialog" style="width:auto">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Daftar Nama Penerima BPI</h4>
            </div>
            <div class="modal-body" id="hasil_modal">
            </div>
            <div id="waiting">
                <img src="../../img/loader.gif" /> Prosesing data...
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


    function cek() {
        $("#contact_det").hide();
    }

    function cari() {
        var tahun = $('#tahun_dana').val();
        waitingDialog.show('Pencarian !');
        $.ajax({
            type: "get",
            url: "acc/cari_awal.php",
            data: 'tahun=' + tahun,
            success: function(data) {
                waitingDialog.hide();
                $("#hasil_cari_data").html(data);
            }
        });
    }

    function det(obj) {
        var n0 = obj.parent().parent().find(".nipCell").html();
    }

    $("#waiting").show();

    function det(obj) {

        var id = obj.parent().parent().find(".fcjen").html();
        var user = $('#username').val();
        $("#waiting").show();
        $.ajax({
            type: 'POST',
            url: 'acc/detailacc.php',
            data: 'id=' + id + '&user=' + user,
            success: function(response) {

                $("#hasil_modal").html(response);
                $("#waiting").hide();

            }

        });
        objRow = obj.parent().parent();

    }
    </script>