<style type="text/css">
  #nomer{
    width: 70%;
    height:  = 30px;
  }
  #tahun{
    width: 60%;
    height:  = 30px;
  }
</style>

<script>
  $(function() {
  
    $( "#pengu_beasiswa" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

     $( "#wtf1" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( "#seleksi_admin" ).datepicker({
       changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( "#pengu_selad" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( "#spd2" ).datepicker({
    changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( "#seleksi_wawan" ).datepicker({
     changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( "#spd3" ).datepicker({
     changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( "#pengu_penbe" ).datepicker({
       changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( "#spd4" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( "#daftar_ulang" ).datepicker({
       changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( "#spd5" ).datepicker({
     changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( "#pene_dabe" ).datepicker({
    changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( "#spd6" ).datepicker({
     changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd' 
    });

    $( "#spd7" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

  });
</script>

<?php
  include '../lib/config.php';
  $id_beasiswa = "";
  if(isset($_GET['id'])){
      $id_beasiswa = $_GET['id'];
      $sql_info="SELECT * FROM info_beasiswa WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_info=mysql_query($sql_info) or die(mysql_error());
      $data_info = mysql_fetch_array($qry_info);

      $sql_jadwal = "SELECT * FROM jadwal_beasiswa WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_jadwal = mysql_query($sql_jadwal) or die(mysql_error());
      $data_jadwal = mysql_fetch_array($qry_jadwal);

      $sql_nilai = "SELECT * FROM nilai_minimum WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_nilai = mysql_query($sql_nilai) or die(mysql_error());
      $data_nilai = mysql_fetch_array($qry_nilai);

      $sql_nilai_raport = "SELECT * FROM admis_nilai_raport WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_nilai_raport = mysql_query($sql_nilai_raport) or die(mysql_error());
      $data_nilai_raport = mysql_fetch_array($qry_nilai_raport);

      $sql_nilai_ket = "SELECT * FROM admis_nilai_ket WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_nilai_ket = mysql_query($sql_nilai_ket) or die(mysql_error());
      $data_nilai_ket = mysql_fetch_array($qry_nilai_ket);

      $sql_jpa = "SELECT * FROM jpa WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_jpa = mysql_query($sql_jpa) or die(mysql_error());
      $data_jpa = mysql_fetch_array($qry_jpa);

      $sql_jpna = "SELECT * FROM jpna WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_jpna = mysql_query($sql_jpna) or die(mysql_error());
      $data_jpna = mysql_fetch_array($qry_jpna);  

      $sql_wawan1 = "SELECT * FROM wawan_nilkat1 WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_wawan1 = mysql_query($sql_wawan1) or die(mysql_error());
      $data_wawan1 = mysql_fetch_array($qry_wawan1); 

      $sql_wawan2 = "SELECT * FROM wawan_nilkat2 WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_wawan2 = mysql_query($sql_wawan2) or die(mysql_error());
      $data_wawan2 = mysql_fetch_array($qry_wawan2);      

      $sql_wawan3 = "SELECT * FROM wawan_nilkat3 WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_wawan3 = mysql_query($sql_wawan3) or die(mysql_error());
      $data_wawan3 = mysql_fetch_array($qry_wawan3); 

      $sql_wawan4 = "SELECT * FROM wawan_nilkat4 WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_wawan4 = mysql_query($sql_wawan4) or die(mysql_error());
      $data_wawan4 = mysql_fetch_array($qry_wawan4);

      $sql_wawan5 = "SELECT * FROM wawan_nilkat5 WHERE no_beasiswa = '".$id_beasiswa."' ";
      $qry_wawan5 = mysql_query($sql_wawan5) or die(mysql_error());
      $data_wawan5 = mysql_fetch_array($qry_wawan5);  

  }else{?>
      <script language="javascript"> 
        alert("Proses pengiriman berhasil");
        document.location.href='../index.php?conten=home';
      </script>
<?php 
  }
?>
<form method="post" action="index.php?conten=proses_edit_bea">
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Info Beasiswa</a></li>
  <li><a data-toggle="tab" href="#menu1">Jadwal Beasiswa</a></li>
  <li><a data-toggle="tab" href="#menu2">Seleksi Administrasi</a></li>
  <li><a data-toggle="tab" href="#menu3">Seleksi Wawancara</a></li>
</ul>
<!--Tab 1 -->
<div class="tab-content">
  <div id="home" class="tab-pane fade in active bg_tab">
    <p><h3>&nbsp;&nbsp;Info Beasiswa</h3></p>
    <div class="col-md-7 col-lg-7" >
  <div class="table-responsive">
  <table width="40%" border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" colspan="3">&nbsp;</td>
  </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Nomer Beasiswa</td>
    <td class="bgisitabel" align="left" style="color:#FFF"><?php echo $data_info['no_beasiswa']; ?><input type="hidden" style="color:#000" id="no_bea" name="no_bea" size="50" value="<?php echo $data_info['no_beasiswa']; ?>"/></td>
   </tr>
   <tr>
      <td class="bgisitabel" style="color:#FFF">Tahun bea</td>
    <td class="bgisitabel" align="left">
    <select name="tahun_beasiswa" id="tahun_beasiswa">
        <option value="<?php echo $data_info['tahun']; ?>"><?php echo $data_info['tahun']; ?></option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" style="color:#FFF">Nama Beasiswa</td>
    <td class="bgisitabel" align="left" colspan="3"><input type="text" style="color:#000" id="nama_bea" name="nama_bea" size="120"  value="<?php echo $data_info['nama_beasiswa']; ?>"/></td>
   </tr>
   <tr>
    <td class="bgisitabel" style="color:#FFF">Jenis Pendididkan</td>
    <td class="bgisitabel" align="left" colspan="3">
      <select name="jenis_bea" id="jenis_bea" >
        <option value="<?php echo $data_info['jenjang']; ?>"><?php echo $data_info['jenjang']; ?></option>
        <option value="Umum">Umum</option>
        <option value="SD">SD dan Sederajat</option>
        <option value="SMP">SMP dan Sederajat</option>
        <option value="SMA">SMA dan Sederajat</option>
        <option value="D3">D3</option>
        <option value="D4">D4</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
      </select>
    </td>
   </tr>    
   <tr>
    <td class="bgisitabel" style="color:#FFF">Total Dana Beasiswa</td>
    <td class="bgisitabel" align="left" colspan="3">
        <input type="text" style="color:#000" id="total_dana_bea" name="total_dana_bea" size="50" value="<?php echo $data_info['total_dana']; ?>"/></td>
   </tr>   
   <tr>
    <td class="bgisitabel" style="color:#FFF">Jumlah Beasiswa</td>
    <td class="bgisitabel" align="left" colspan="3">
        <input type="text" style="color:#000" id="jumlah_bea" name="jumlah_bea" size="50" value="<?php echo $data_info['jumlah_beasiswa']; ?>"/></td>
   </tr>
   <tr>
    <td class="bgisitabel" style="color:#FFF" colspan="4">Keterangan</td>
   </tr>
   <tr>
    <td class="bgisitabel" style="color:#FFF" colspan="4">
      
      <textarea cols="145" rows="15" style="color:#000" name="ket_bea" id="ket_bea">
      <?php echo $data_info['keterangan']; ?>
      </textarea>
    </td>
   </tr> 
    <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="3">&nbsp;</td>
  </tr>
</table></div> 
</div>
  </div>
  <!--Tab 1 akhir -->
  <!--Tab 2 -->
  <div id="menu1" class="tab-pane fade bg_tab">
    <h3>&nbsp;&nbsp;Jadwal Beasiswa</h3>
    
    <div class="col-md-7 col-lg-7" >
  <div class="table-responsive">
  <table width="40%" border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" colspan="3">&nbsp;</td>
  </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Pengumuman Beasiswa</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="pengu_beasiswa" name="pengu_beasiswa" size="30"  value="<?php echo $data_jadwal['pengumuman']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="wtf1" name="wtf1" size="30"  value="<?php echo $data_jadwal['spd1']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Seleksi Administrasi</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="seleksi_admin" name="seleksi_admin" size="30"  value="<?php echo $data_jadwal['seleksi']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd2" name="spd2" size="30"  value="<?php echo $data_jadwal['spd2']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Pengumuman Seleksi Adminsitrasi</td>

    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="pengu_selad" name="pengu_selad" size="30"  value="<?php echo $data_jadwal['pengumuman_seleksi']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd3" name="spd3" size="30"  value="<?php echo $data_jadwal['spd3']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Seleksi Wawancara</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="seleksi_wawan" name="seleksi_wawan" size="30"  value="<?php echo $data_jadwal['seleksi_wawancara']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd4" name="spd4" size="30"  value="<?php echo $data_jadwal['spd4']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Pengumuman Penerimaan Beasiswa</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="pengu_penbe" name="pengu_penbe" size="30"  value="<?php echo $data_jadwal['pengumuman_penerima']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd5" name="spd5" size="30"  value="<?php echo $data_jadwal['spd5']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Daftar Ulang</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="daftar_ulang" name="daftar_ulang" size="30"  value="<?php echo $data_jadwal['daftar_ulang']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd6" name="spd6" size="30"  value="<?php echo $data_jadwal['spd6']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Penerimaan Dana Beasiswa</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="pene_dabe" name="pene_dabe" size="30"  value="<?php echo $data_jadwal['penerimaan_dana']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd7" name="spd7" size="30"  value="<?php echo $data_jadwal['spd7']; ?>"/>
    </td>
   </tr>
   <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="3">&nbsp;</td>
  </tr>    
</table></div> 
</div>
  </div>
  <!--Tab 3 -->
  <div id="menu2" class="tab-pane fade bg_tab">
    <h3>&nbsp;&nbsp;Seleksi Adminstrasi</h3>
     <div class="col-md-12 col-lg-12" >
  <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua"> &nbsp; </td>
    <td class="lekukantabel2" id="warnaabutua" align="center" colspan="11">&nbsp;</td>
  </tr>
  <tr>
    <td class="bgisitabel"  align="left" colspan="2" style="color:#FFF">Jumlah Prestasi Akademis</td>
    <td class="bgisitabel"  align="left" colspan="10"><input type="text" style="color:#000" id="bts_lulus" name="bts_lulus" size="20"  value="<?php echo $data_nilai['seleksi_admin']; ?>"/></td>
  </tr>
  <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Nilai Rata-Rata Angka Raport Pengetahuan</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Jumlah Prestasi Akademis</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Jumlah Prestasi Non Akademis</td>
  </tr>
   
  <tr>
   <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index0" name="nr_index0" size="10"  value="<?php echo $data_nilai_raport['index0']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd0" name="nr_spd0" size="10"  value="<?php echo $data_nilai_raport['spd0']; ?>"/>
    </td>

    <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index0" name="jpalo_index0" size="10"  value="<?php echo $data_jpa['index0']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd0" name="jpalo_spd0" size="10"  value="<?php echo $data_jpa['spd0']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index0" name="jpakec_index0" size="10"  value="<?php echo $data_jpna['index0']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd0" name="jpakec_spd0" size="10"  value="<?php echo $data_jpna['spd0']; ?>"/>
    </td>
   </tr>

<tr>
   <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index1" name="nr_index1" size="10"  value="<?php echo $data_nilai_raport['index1']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd1" name="nr_spd1" size="10"  value="<?php echo $data_nilai_raport['spd1']; ?>"/>
    </td>

    <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index1" name="jpalo_index1" size="10"  value="<?php echo $data_jpa['index1']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd1" name="jpalo_spd1" size="10"  value="<?php echo $data_jpa['spd1']; ?>"/>
    </td>
    

    <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index1" name="jpakec_index1" size="10"  value="<?php echo $data_jpna['index1']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd1" name="jpakec_spd1" size="10"  value="<?php echo $data_jpna['spd1']; ?>"/>
    </td>
  
   </tr>

   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index2" name="nr_index2" size="10"  value="<?php echo $data_nilai_raport['index2']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd2" name="nr_spd2" size="10"  value="<?php echo $data_nilai_raport['spd2']; ?>"/>
    </td>
   

    <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index2" name="jpalo_index2" size="10"  value="<?php echo $data_jpa['index2']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd2" name="jpalo_spd2" size="10"  value="<?php echo $data_jpa['spd2']; ?>"/>
    </td>

    

    <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index2" name="jpakec_index2" size="10"  value="<?php echo $data_jpna['index2']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd2" name="jpakec_spd2" size="10"  value="<?php echo $data_jpna['spd2']; ?>"/>
    </td>
 

   </tr>

<tr>
   <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index3" name="nr_index3" size="10"  value="<?php echo $data_nilai_raport['index3']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd3" name="nr_spd3" size="10"  value="<?php echo $data_nilai_raport['spd3']; ?>"/>
    </td>
  

    <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index3" name="jpalo_index3" size="10"  value="<?php echo $data_jpa['index3']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd3" name="jpalo_spd3" size="10"  value="<?php echo $data_jpa['spd3']; ?>"/>
    </td>

    

    <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index3" name="jpakec_index3" size="10"  value="<?php echo $data_jpna['index3']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd3" name="jpakec_spd3" size="10"  value="<?php echo $data_jpna['index3']; ?>"/>
    </td>
    
   </tr>
  <tr>
    <td class="bgisitabel"  align="left" colspan="4">&nbsp;</td>
    <td class="bgisitabel"  align="left" colspan="4">&nbsp;</td>
    <td class="bgisitabel"  align="left" colspan="4">&nbsp;</td>
  </tr>

   <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Nilai Rata-Rata Angka Raport Keterampilan</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">&nbsp;</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">&nbsp;</td>
  </tr>

  <tr>
   <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index0" name="ni_index0" size="10"  value="<?php echo $data_nilai_ket['index0']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left" colspan="9">
      <input type="text" style="color:#000" id="ni_spd0" name="ni_spd0" size="10"  value="<?php echo $data_nilai_ket['spd0']; ?>"/>
    </td>
   </tr>

  

<tr>
   <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index1" name="ni_index1" size="10"  value="<?php echo $data_nilai_ket['index1']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left" colspan="9">
      <input type="text" style="color:#000" id="ni_spd1" name="ni_spd1" size="10"  value="<?php echo $data_nilai_ket['spd1']; ?>"/>
    </td>
   </tr>   

    
<tr>
   <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index2" name="ni_index2" size="10"  value="<?php echo $data_nilai_ket['index2']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left" colspan="9">
      <input type="text" style="color:#000" id="ni_spd2" name="ni_spd2" size="10"  value="<?php echo $data_nilai_ket['spd2']; ?>"/>
    </td>
  
   </tr>

 
<tr>
   <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index3" name="ni_index3" size="10"  value="<?php echo $data_nilai_ket['index3']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left" colspan="9">
      <input type="text" style="color:#000" id="ni_spd3" name="ni_spd3" size="10"  value="<?php echo $data_nilai_ket['spd3']; ?>"/>
    </td>
   </tr>

  
   <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="11">&nbsp;</td>
  </tr>    
</table></div> 
</div>
  </div>
  <!--Tab 4 -->
  <div id="menu3" class="tab-pane fade bg_tab">
    <h3>Seleksi Wawancara</h3>
    <div class="col-md-10 col-lg-10" >
  <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" colspan="11">&nbsp;</td>
  </tr>
  <tr>
    <td class="bgisitabel"  align="left" colspan="2" style="color:#FFF">Batas Minimum Kelulusan</td>
    <td class="bgisitabel"  align="left" colspan="10"><input type="text" style="color:#000" id="batas_lulus_wawancara" name="batas_lulus_wawancara" size="20"  value="<?php echo $data_nilai['seleksi_wawancara']; ?>"/></td>
  </tr>
  <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Kategori 1</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Kategori 2</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Kategori 3</td>
  </tr>
   
   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index0" name="kt1_index0" size="10"  value="<?php echo $data_wawan1['index0']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd0" name="kt1_spd0" size="10"  value="<?php echo $data_wawan1['spd0']; ?>"/>
    </td>
    

<td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index0" name="kt2_index0" size="10"  value="<?php echo $data_wawan2['index0']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd0" name="kt2_spd0" size="10"  value="<?php echo $data_wawan2['index0']; ?>"/>
    </td>

   

    <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index0" name="kt3_index0" size="10"  value="<?php echo $data_wawan3['index0']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd0" name="kt3_spd0" size="10"  value="<?php echo $data_wawan3['index0']; ?>"/>
    </td>
   </tr>

   

<tr>
   <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index1" name="kt1_index1" size="10"  value="<?php echo $data_wawan1['index1']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd1" name="kt1_spd1" size="10"  value="<?php echo $data_wawan1['index1']; ?>"/>
    </td>

<td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index1" name="kt2_index1" size="10"  value="<?php echo $data_wawan2['index1']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd1" name="kt2_spd1" size="10"  value="<?php echo $data_wawan2['spd1']; ?>"/>
    </td>

    <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index1" name="kt3_index1" size="10"  value="<?php echo $data_wawan3['index1']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd1" name="kt3_spd1" size="10"  value="<?php echo $data_wawan3['spd1']; ?>"/>
    </td>
   
   </tr>

   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index2" name="kt1_index2" size="10"  value="<?php echo $data_wawan1['index2']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd2" name="kt1_spd2" size="10"  value="<?php echo $data_wawan1['spd2']; ?>"/>
    </td>

   

<td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index2" name="kt2_index2" size="10"  value="<?php echo $data_wawan2['index2']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd2" name="kt2_spd2" size="10"  value="<?php echo $data_wawan2['spd2']; ?>"/>
    </td>

   

    <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index2" name="kt3_index2" size="10"  value="<?php echo $data_wawan3['index2']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd2" name="kt3_spd2" size="10"  value="<?php echo $data_wawan3['spd2']; ?>"/>
    </td>
   
   </tr>

   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index3" name="kt1_index3" size="10"  value="<?php echo $data_wawan1['index3']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd3" name="kt1_spd3" size="10"  value="<?php echo $data_wawan1['spd3']; ?>"/>
    </td>
 

<td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index3" name="kt2_index3" size="10"  value="<?php echo $data_wawan2['index3']; ?>"/>
    </td>
    <td class="bgisitabel" align="leftr" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd3" name="kt2_spd3" size="10"  value="<?php echo $data_wawan2['spd3']; ?>"/>
    </td>
 

    <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index3" name="kt3_index3" size="10"  value="<?php echo $data_wawan3['index3']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd3" name="kt3_spd3" size="10"  value="<?php echo $data_wawan3['spd3']; ?>"/>
    </td>

   </tr>

  <tr>
    <td class="bgisitabel"  align="left" colspan="4">&nbsp;</td>
    <td class="bgisitabel"  align="left" colspan="4">&nbsp;</td>
    <td class="bgisitabel"  align="left" colspan="4">&nbsp;</td>
  </tr>

   <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Kategori 4</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Kategori 5</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">&nbsp;</td>
  </tr>

  <tr>
   <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index0" name="kt4_index0" size="10"  value="<?php echo $data_wawan4['index0']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd0" name="kt4_spd0" size="10"  value="<?php echo $data_wawan4['spd0']; ?>"/>
    </td>
  

<td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index0" name="kt5_index0" size="10"  value="<?php echo $data_wawan5['index0']; ?>"/>
    </td>
    <td class="bgisitabel" align="leftr" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left" colspan="5">
      <input type="text" style="color:#000" id="kt5_spd0" name="kt5_spd0" size="10"  value="<?php echo $data_wawan5['spd0']; ?>"/>
    </td>

   </tr>

   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index1" name="kt4_index1" size="10"  value="<?php echo $data_wawan4['index1']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd1" name="kt4_spd1" size="10"  value="<?php echo $data_wawan4['spd1']; ?>"/>
    </td>
    

<td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index1" name="kt5_index1" size="10"  value="<?php echo $data_wawan5['index1']; ?>"/>
    </td>
    <td class="bgisitabel" align="leftr" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left" colspan="5">
      <input type="text" style="color:#000" id="kt5_spd1" name="kt5_spd1" size="10"  value="<?php echo $data_wawan5['spd1']; ?>"/>
    </td>
     
   </tr>

   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index2" name="kt4_index2" size="10"  value="<?php echo $data_wawan4['index2']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd2" name="kt4_spd2" size="10"  value="<?php echo $data_wawan4['spd2']; ?>"/>
    </td>
    

<td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index2" name="kt5_index2" size="10"  value="<?php echo $data_wawan5['index2']; ?>"/>
    </td>
    <td class="bgisitabel" align="leftr" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left" colspan="5">
      <input type="text" style="color:#000" id="kt5_spd2" name="kt5_spd2" size="10"  value="<?php echo $data_wawan5['spd2']; ?>"/>
    </td>
    
   </tr>

<tr>
   <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index3" name="kt4_index3" size="10"  value="<?php echo $data_wawan4['index3']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd3" name="kt4_spd3" size="10"  value="<?php echo $data_wawan4['spd3']; ?>"/>
    </td>

<td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index3" name="kt5_index3" size="10"  value="<?php echo $data_wawan5['index3']; ?>"/>
    </td>
    <td class="bgisitabel" align="leftr" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left" colspan="5">
      <input type="text" style="color:#000" id="kt5_spd3" name="kt5_spd3" size="10"  value="<?php echo $data_wawan5['index3']; ?>"/>
    </td>
   </tr>

   <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="11">&nbsp;</td>
  </tr>   

   <td colspan="11"></td>
        <td> <input type="submit" align="right" class="btn btn-warning" value="Simpan"></td>
     </tr> 
</table></div> 
</div>
  </div>
</div>
</form>