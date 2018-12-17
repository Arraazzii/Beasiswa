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
<form method="post" action="index.php?conten=proses_bea">
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
    <div class="col-md-9 col-lg-9" >
  <div class="table-responsive">
  <table width="40%" border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" colspan="3">&nbsp;</td>
  </tr>
   <tr>
   <td class="bgisitabel" >Nomer Beasiswa</td>
    <td class="bgisitabel" align="left"><input type="text" style="color:#000" id="no_bea" name="no_bea" size="50"  value=""/></td>
   </tr>
   <tr>
      <td class="bgisitabel" >Tahun bea</td>
    <td class="bgisitabel" align="left">
    <select name="tahun_beasiswa" id="tahun_beasiswa">
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" >Nama Beasiswa</td>
    <td class="bgisitabel" align="left" colspan="3"><input type="text" style="color:#000" id="nama_bea" name="nama_bea" size="100"  value=""/></td>
   </tr>
   <tr>
    <td class="bgisitabel" >Jenis Pendididkan</td>
    <td class="bgisitabel" align="left" colspan="3">
      <select name="jenis_bea" id="jenis_bea" >
         <?php 
          $queryjenis=mysql_query("SELECT * FROM jenis where st= 'Y' order by nama_jenis");
          while ($datajenis=mysql_fetch_array($queryjenis)){
            echo '<option value="'.$datajenis['id_jenis'].'">'.$datajenis['nama_jenis'].'</option>';
          }
          ?>
      </select>
    </td>
   </tr>    
   <tr>
    <td class="bgisitabel" >Total Dana Beasiswa</td>
    <td class="bgisitabel" align="left" colspan="3">
        <input type="text" style="color:#000" id="total_dana_bea" name="total_dana_bea" size="50" value=""/></td>
   </tr>   
   <tr>
    <td class="bgisitabel" >Jumlah Beasiswa</td>
    <td class="bgisitabel" align="left" colspan="3">
        <input type="text" style="color:#000" id="jumlah_bea" name="jumlah_bea" size="50" value=""/></td>
   </tr>
   <tr>
    <td class="bgisitabel"  colspan="4">Keterangan</td>
   </tr>
   <tr>
    <td class="bgisitabel"  colspan="4">
      
      <textarea cols="130" rows="15" style="color:#000" name="ket_bea" id="ket_bea">
        
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
    
    <div class="col-md-9 col-lg-9" >
  <div class="table-responsive">
  <table width="40%" border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" colspan="3">&nbsp;</td>
  </tr>
   <tr>
   <td class="bgisitabel" >Pengumuman Beasiswa</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="pengu_beasiswa" name="pengu_beasiswa" size="30"  value=""/>
    </td>
    <td class="bgisitabel" >Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="wtf1" name="wtf1" size="30"  value=""/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" >Seleksi Administrasi</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="seleksi_admin" name="seleksi_admin" size="30"  value=""/>
    </td>
    <td class="bgisitabel" >Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd2" name="spd2" size="30"  value=""/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" >Pengumuman Seleksi Adminsitrasi</td>

    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="pengu_selad" name="pengu_selad" size="30"  value=""/>
    </td>
    <td class="bgisitabel" >Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd3" name="spd3" size="30"  value=""/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" >Seleksi Wawancara</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="seleksi_wawan" name="seleksi_wawan" size="30"  value=""/>
    </td>
    <td class="bgisitabel" >Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd4" name="spd4" size="30"  value=""/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" >Pengumuman Penerimaan Beasiswa</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="pengu_penbe" name="pengu_penbe" size="30"  value=""/>
    </td>
    <td class="bgisitabel" >Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd5" name="spd5" size="30"  value=""/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" >Daftar Ulang</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="daftar_ulang" name="daftar_ulang" size="30"  value=""/>
    </td>
    <td class="bgisitabel" >Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd6" name="spd6" size="30"  value=""/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" >Penerimaan Dana Beasiswa</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="pene_dabe" name="pene_dabe" size="30"  value=""/>
    </td>
    <td class="bgisitabel" >Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd7" name="spd7" size="30"  value=""/>
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
     <div class="col-md-13 col-lg-13" >
  <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua"> &nbsp; </td>
    <td class="lekukantabel2" id="warnaabutua" align="center" colspan="17">&nbsp;</td>
  </tr>
  <tr>
    <td class="bgisitabel"  align="left" colspan="2" >Jumlah Prestasi Akademis</td>
    <td class="bgisitabel"  align="left" colspan="17"><input type="text" style="color:#000" id="bts_lulus" name="bts_lulus" size="20"  value=""/></td>
  </tr>
  <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6" align="center">Nilai Rata-Rata Angka Raport Pengetahuan</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6" align="center">Jumlah Prestasi Akademis Lokal</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6" align="center">Jumlah Prestasi Non Akademis</td>
  </tr>
   
  <tr>
   <td class="bgisitabel" >Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index0" name="nr_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd0" name="nr_spd0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 0
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_nr_index0" name="po_nr_index0" size="5"  value=""/>
    </td>

    <td class="bgisitabel" >Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index0" name="jpalo_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd0" name="jpalo_spd0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 0
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_jpalo_index0" name="po_jpalo_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" >Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index0" name="jpakec_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd0" name="jpakec_spd0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 0
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_jpakec_index0" name="po_jpakec_index0" size="5"  value=""/>
    </td>
   </tr>

<tr>
   <td class="bgisitabel" >Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index1" name="nr_index1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd1" name="nr_spd1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 1
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_nr_index1" name="po_nr_index1" size="5"  value=""/>
    </td>

    <td class="bgisitabel" >Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index1" name="jpalo_index1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd1" name="jpalo_spd1" size="5"  value=""/>
    </td>
     <td class="bgisitabel" align="left" >
        Point 1
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_jpalo_index1" name="po_jpalo_index1" size="5"  value=""/>
    </td>
    

    <td class="bgisitabel" >Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index1" name="jpakec_index1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd1" name="jpakec_spd1" size="5"  value=""/>
    </td>
       <td class="bgisitabel" align="left" >
        Point 1
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_jpakec_index1" name="po_jpakec_index1" size="5"  value=""/>
    </td>
  
   </tr>

   <tr>
   <td class="bgisitabel" >Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index2" name="nr_index2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd2" name="nr_spd2" size="5"  value=""/>
    </td>
     <td class="bgisitabel" align="left" >
        Point 2
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_nr_index2" name="po_nr_index2" size="5"  value=""/>
    </td>
   

    <td class="bgisitabel" >Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index2" name="jpalo_index2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd2" name="jpalo_spd2" size="5"  value=""/>
    </td>
      <td class="bgisitabel" align="left" >
        Point 2
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_jpalo_index2" name="po_jpalo_index2" size="5"  value=""/>
    </td>

    

    <td class="bgisitabel" >Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index2" name="jpakec_index2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd2" name="jpakec_spd2" size="5"  value=""/>
    </td>
      <td class="bgisitabel" align="left" >
        Point 2
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_jpakec_index2" name="po_jpakec_index2" size="5"  value=""/>
    </td> 

   </tr>

<tr>
   <td class="bgisitabel" >Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index3" name="nr_index3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd3" name="nr_spd3" size="5"  value=""/>
    </td>
<td class="bgisitabel" align="left" >
        Point 3
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_nr_index3" name="po_nr_index3" size="5"  value=""/>
    </td>   

    <td class="bgisitabel" >Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index3" name="jpalo_index3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd3" name="jpalo_spd3" size="5"  value=""/>
    </td>
<td class="bgisitabel" align="left" >
        Point 3
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_jpalo_index3" name="po_jpalo_index3" size="5"  value=""/>
    </td>
    

    <td class="bgisitabel" >Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index3" name="jpakec_index3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd3" name="jpakec_spd3" size="5"  value=""/>
    </td>
<td class="bgisitabel" align="left" >
        Point 3
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_jpakec_index3" name="po_jpakec_index3" size="5"  value=""/>
    </td>

    
   </tr>
  <tr>
    <td class="bgisitabel"  align="left" colspan="6">&nbsp;</td>
    <td class="bgisitabel"  align="left" colspan="6">&nbsp;</td>
    <td class="bgisitabel"  align="left" colspan="6">&nbsp;</td>
  </tr>

   <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6" align="center">Nilai Rata-Rata Angka Raport Keterampilan</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6" align="center">Nilai IPK</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6" align="center">Nilai IPK Keterampilan</td>
  </tr>

  <tr> 
   <td class="bgisitabel" >Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index0" name="ni_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ni_spd0" name="ni_spd0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 0
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ni_index0" name="po_ni_index0" size="5"  value=""/>
    </td> 

     <td class="bgisitabel" >Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ipk_index0" name="ipk_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ipk_spd0" name="ipk_spd0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 0
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ipk_index0" name="po_ipk_index0" size="5"  value=""/>
    </td> 

  <td class="bgisitabel" >Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ipkket_index0" name="ipkket_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ipkket_spd0" name="ipkket_spd0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 0
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ipkket_index0" name="po_ipkket_index0" size="5"  value=""/>
    </td> 
</tr>
<tr>
   <td class="bgisitabel" >Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index1" name="ni_index1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ni_spd1" name="ni_spd1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 1
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ni_index1" name="po_ni_index1" size="5"  value=""/>
    </td> 

    <td class="bgisitabel" >Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ipk_index1" name="ipk_index1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ipk_spd1" name="ipk_spd1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 1
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ipk_index1" name="po_ipk_index1" size="5"  value=""/>
    </td> 

  <td class="bgisitabel" >Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ipkket_index1" name="ipkket_index1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ipkket_spd1" name="ipkket_spd1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 1
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ipkket_index1" name="po_ipkket_index1" size="5"  value=""/>
    </td> 
   </tr>   

    
<tr>
   <td class="bgisitabel" >Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index2" name="ni_index2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ni_spd2" name="ni_spd2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 2
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ni_index2" name="po_ni_index2" size="5"  value=""/>
    </td>
  <td class="bgisitabel" >Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ipk_index2" name="ipk_index2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ipk_spd2" name="ipk_spd2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 2
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ipk_index2" name="po_ipk_index2" size="5"  value=""/>
    </td> 

  <td class="bgisitabel" >Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ipkket_index2" name="ipkket_index2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ipkket_spd2" name="ipkket_spd2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 2
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ipkket_index2" name="po_ipkket_index2" size="5"  value=""/>
    </td> 
   </tr>

 
<tr>
   <td class="bgisitabel" >Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index3" name="ni_index3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ni_spd3" name="ni_spd3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 3
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ni_index3" name="po_ni_index3" size="5"  value=""/>
    </td>

    <td class="bgisitabel" >Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ipk_index3" name="ipk_index3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ipk_spd3" name="ipk_spd3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 3
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ipk_index3" name="po_ipk_index3" size="5"  value=""/>
    </td> 

  <td class="bgisitabel" >Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ipkket_index3" name="ipkket_index3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ipkket_spd3" name="ipkket_spd3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 3
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_ipkket_index3" name="po_ipkket_index3" size="5"  value=""/>
    </td> 
   </tr>

  
   <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="17">&nbsp;</td>
  </tr>    
</table></div> 
</div>
  </div>
  <!--Tab 4 -->
  <div id="menu3" class="tab-pane fade bg_tab">
    <h3>Seleksi Wawancara</h3>
    <div class="col-md-13 col-lg-13" >
  <div class="table-responsive">
  <table border="0" align="center" class="table">
  <tr>
    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
    <td class="lekukantabel2" id="warnaabutua" align="center" colspan="17">&nbsp;</td>
  </tr>
  <tr>
    <td class="bgisitabel"  align="left" colspan="2" >Batas Minimum Kelulusan</td>
    <td class="bgisitabel"  align="left" colspan="16"><input type="text" style="color:#000" id="batas_lulus_wawancara" name="batas_lulus_wawancara" size="20"  value=""/></td>
  </tr>
  <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6">Kategori 1</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6">Kategori 2</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6">Kategori 3</td>
  </tr>
   
   <tr>
   <td class="bgisitabel" >Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index0" name="kt1_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd0" name="kt1_spd0" size="5"  value=""/>
    </td>
 <td class="bgisitabel" align="left" >
        Point 0
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt1_index0" name="po_kt1_index0" size="5"  value=""/>
    </td>

    

<td class="bgisitabel" >Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index0" name="kt2_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd0" name="kt2_spd0" size="5"  value=""/>
    </td>
 <td class="bgisitabel" align="left" >
        Point 0
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt2_index0" name="po_kt2_index0" size="5"  value=""/>
    </td>
   

    <td class="bgisitabel" >Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index0" name="kt3_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd0" name="kt3_spd0" size="5"  value=""/>
    </td>
 <td class="bgisitabel" align="left" >
        Point 0
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt3_index0" name="po_kt3_index0" size="5"  value=""/>
    </td>
   </tr>

<tr>
   <td class="bgisitabel" >Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index1" name="kt1_index1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd1" name="kt1_spd1" size="5"  value=""/>
    </td>
<td class="bgisitabel" align="left" >
        Point 1
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt1_index1" name="po_kt1_index1" size="5"  value=""/>
    </td>

<td class="bgisitabel" >Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index1" name="kt2_index1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd1" name="kt2_spd1" size="5"  value=""/>
    </td>
<td class="bgisitabel" align="left" >
        Point 1
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt2_index1" name="po_kt2_index1" size="5"  value=""/>
    </td>


    <td class="bgisitabel" >Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index1" name="kt3_index1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd1" name="kt3_spd1" size="5"  value=""/>
    </td>
<td class="bgisitabel" align="left" >
        Point 1
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt3_index1" name="po_kt3_index1" size="5"  value=""/>
    </td>
   
   </tr>

   <tr>
   <td class="bgisitabel" >Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index2" name="kt1_index2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd2" name="kt1_spd2" size="5"  value=""/>
<td class="bgisitabel" align="left" >
        Point 2
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt1_index2" name="po_kt1_index2" size="5"  value=""/>
    </td>
   

<td class="bgisitabel" >Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index2" name="kt2_index2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd2" name="kt2_spd2" size="5"  value=""/>
    </td>
<td class="bgisitabel" align="left" >
        Point 2
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt2_index2" name="po_kt2_index2" size="5"  value=""/>
    </td>
   

    <td class="bgisitabel" >Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index2" name="kt3_index2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd2" name="kt3_spd2" size="5"  value=""/>
    </td>
<td class="bgisitabel" align="left" >
        Point 2
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt3_index2" name="po_kt3_index2" size="5"  value=""/>
    </td>
   
   </tr>

   <tr>
   <td class="bgisitabel" >Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index3" name="kt1_index3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd3" name="kt1_spd3" size="5"  value=""/>
    </td>
 <td class="bgisitabel" align="left" >
        Point 3
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt1_index3" name="po_kt1_index3" size="5"  value=""/>
    </td>

<td class="bgisitabel" >Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index3" name="kt2_index3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="leftr" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd3" name="kt2_spd3" size="5"  value=""/>
    </td>
<td class="bgisitabel" align="left" >
        Point 3
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt2_index3" name="po_kt2_index3" size="5"  value=""/>
    </td>
 

    <td class="bgisitabel" >Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index3" name="kt3_index3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd3" name="kt3_spd3" size="5"  value=""/>
    </td>
<td class="bgisitabel" align="left" >
        Point 3
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt3_index3" name="po_kt3_index3" size="5"  value=""/>
    </td>
   </tr>

  <tr>
    <td class="bgisitabel"  align="left" colspan="6">&nbsp;</td>
    <td class="bgisitabel"  align="left" colspan="6">&nbsp;</td>
    <td class="bgisitabel"  align="left" colspan="6">&nbsp;</td>
  </tr>

   <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6">Kategori 4</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6">Katgeori 5</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="6s">&nbsp;</td>
  </tr>

  <tr>
   <td class="bgisitabel" >Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index0" name="kt4_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd0" name="kt4_spd0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        Point 0
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt4_index0" name="po_kt4_index0" size="5"  value=""/>
    </td>
  

<td class="bgisitabel" >Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index0" name="kt5_index0" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="leftr" >
        s/d
    </td>
    <td class="bgisitabel" align="left" >
      <input type="text" style="color:#000" id="kt5_spd0" name="kt5_spd0" size="5"  value=""/>
    </td>
  <td class="bgisitabel" align="left" >
        Point 0
    </td>
    <td class="bgisitabel" align="left" colspan="7">
      <input type="text" style="color:#000" id="po_kt5_index0" name="po_kt5_index0" size="5"  value=""/>
    </td>

   </tr>

   <tr>
   <td class="bgisitabel" >Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index1" name="kt4_index1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd1" name="kt4_spd1" size="5"  value=""/>
    </td>
   <td class="bgisitabel" align="left" >
        Point 1
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt4_index1" name="po_kt4_index1" size="5"  value=""/>
    </td> 

<td class="bgisitabel" >Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index1" name="kt5_index1" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="leftr" >
        s/d
    </td>
    <td class="bgisitabel" align="left" >
      <input type="text" style="color:#000" id="kt5_spd1" name="kt5_spd1" size="5"  value=""/>
    </td>
     <td class="bgisitabel" align="left" >
        Point 1
    </td>
    <td class="bgisitabel" align="left" colspan="7">
      <input type="text" style="color:#000" id="po_kt5_index1" name="po_kt5_index1" size="5"  value=""/>
    </td> 
     
   </tr>

   <tr>
   <td class="bgisitabel" >Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index2" name="kt4_index2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd2" name="kt4_spd2" size="5"  value=""/>
    </td>
     <td class="bgisitabel" align="left" >
        Point 2
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt4_index2" name="po_kt4_index2" size="5"  value=""/>
    </td> 
    

<td class="bgisitabel" >Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index2" name="kt5_index2" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="leftr" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt5_spd2" name="kt5_spd2" size="5"  value=""/>
    </td>

  <td class="bgisitabel" align="left" >
        Point 2
    </td>
    <td class="bgisitabel" align="left" colspan="7">
      <input type="text" style="color:#000" id="po_kt5_index2" name="po_kt5_index2" size="5"  value=""/>
    </td> 
    
   </tr>

<tr>
   <td class="bgisitabel" >Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index3" name="kt4_index3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="left" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd3" name="kt4_spd3" size="5"  value=""/>
    </td>
     <td class="bgisitabel" align="left" >
        Point 3
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="po_kt4_index3" name="po_kt4_index3" size="5"  value=""/>
    </td> 

<td class="bgisitabel" >Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index3" name="kt5_index3" size="5"  value=""/>
    </td>
    <td class="bgisitabel" align="leftr" >
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt5_spd3" name="kt5_spd3" size="5"  value=""/>
    </td>
         <td class="bgisitabel" align="left" >
        Point 3
    </td>
    <td class="bgisitabel" align="left" colspan="7">
      <input type="text" style="color:#000" id="po_kt5_index3" name="po_kt5_index3" size="5"  value=""/>
    </td> 
   </tr>

   <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="17">&nbsp;</td>
  </tr>   

   <td colspan="17"></td>
        <td> <input type="submit" align="right" class="btn btn-warning" value="Simpan"></td>
     </tr> 
</table></div> 
</div>
  </div>
</div>
</form>