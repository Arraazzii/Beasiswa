<?php 
include '../lib/config.php';
$id = $_GET['id'];


	
 ?>

 <style type='text/css'>
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
  
    $( '#pengu_beasiswa' ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

     $( '#wtf1' ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( '#seleksi_admin' ).datepicker({
       changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( '#pengu_selad' ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( '#spd2' ).datepicker({
    changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( '#seleksi_wawan' ).datepicker({
     changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( '#spd3' ).datepicker({
     changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( '#pengu_penbe' ).datepicker({
       changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( '#spd4' ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( '#daftar_ulang' ).datepicker({
       changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( '#spd5' ).datepicker({
     changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( '#pene_dabe' ).datepicker({
    changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

    $( '#spd6' ).datepicker({
     changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd' 
    });

    $( '#spd7' ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

  });
  </script>

  <?php 
 $hasil = mysql_query("SELECT
a.no_beasiswa,
a.tahun,
a.nama_beasiswa,
a.jenjang,
a.total_dana,
a.jumlah_beasiswa,
a.keterangan,
b.no_beasiswa,
b.pengumuman,
b.spd1,
b.seleksi,
b.spd2,
b.pengumuman_seleksi,
b.spd3,
b.seleksi_wawancara,
b.spd4,
b.pengumuman_penerima,
b.spd5,
b.daftar_ulang,
b.spd6,
b.penerimaan_dana,
b.spd7,
c.no_beasiswa,
c.index0,
c.spd0,
c.index1,
c.spd1,
c.index2,
c.spd2,
c.index3,
c.spd3,
d.no_beasiswa,
d.index0,
d.spd0,
d.index1,
d.spd1,
d.index2,
d.spd2,
d.index3,
d.spd3,
e.no_beasiswa,
e.index0,
e.spd0,
e.index1,
e.spd1,
e.index2,
e.spd2,
e.index3,
e.spd3,
f.no_beasiswa,
f.index0,
f.spd0,
f.index1,
f.spd1,
f.index2,
f.spd2,
f.index3,
f.spd3,
g.no_beasiswa,
g.index0,
g.spd0,
g.index1,
g.spd1,
g.index2,
g.spd2,
g.index3,
g.spd3,
h.no_beasiswa,
h.index0,
h.spd0,
h.index1,
h.spd1,
h.index2,
h.spd2,
h.index3,
h.spd3,
i.no_beasiswa,
i.index0,
i.spd0,
i.index1,
i.spd1,
i.index2,
i.spd2,
i.index3,
i.spd3,
j.no_beasiswa,
j.index0,
j.spd0,
j.index1,
j.spd1,
j.index2,
j.spd2,
j.index3,
j.spd3,
k.no_beasiswa,
k.index0,
k.spd0,
k.index1,
k.spd1,
k.index2,
k.spd2,
k.index3,
k.spd3,
l.no_beasiswa,
l.index0,
l.spd0,
l.index1,
l.spd1,
l.index2,
l.spd2,
l.index3,
l.spd3,
m.no_beasiswa,
m.seleksi_admin,
m.seleksi_wawancara,
n.no_beasiswa,
n.index0,
n.spd0,
n.index1,
n.spd1,
n.index2,
n.spd2,
n.index3,
n.spd3,
o.no_beasiswa,
o.index0,
o.spd0,
o.index1,
o.spd1,
o.index2,
o.spd2,
o.index3,
o.spd3,
p.no_beasiswa,
p.index0,
p.spd0,
p.index1,
p.spd1,
p.index2,
p.spd2,
p.index3,
p.spd3,
q.no_beasiswa,
q.index0,
q.spd0,
q.index1,
q.spd1,
q.index2,
q.spd2,
q.index3,
q.spd3,
r.no_beasiswa,
r.index0,
r.spd0,
r.index1,
r.spd1,
r.index2,
r.spd2,
r.index3,
r.spd3,
s.no_beasiswa,
s.index0,
s.spd0,
s.index1,
s.spd1,
s.index2,
s.spd2,
s.index3,
s.spd3
FROM
info_beasiswa AS a ,
jadwal_beasiswa AS b ,
admis_nilai_ipk AS c ,
admis_nilai_raport AS d ,
jpa_lokal AS e ,
jpa_daerah AS f ,
jpa_nas AS g ,
jpa_inter AS h ,
jpna_lokal AS i ,
jpna_daerah AS j ,
jpna_nas AS k ,
jpna_inter AS l ,
nilai_minimum AS m ,
wawan_nilkat1 AS n ,
wawan_nilkat2 AS o ,
wawan_nilkat3 AS p ,
wawan_nilkat4 AS q ,
wawan_nilkat5 AS r ,
wawan_nilkat6 AS s
WHERE
a.no_beasiswa = b.no_beasiswa AND
b.no_beasiswa = c.no_beasiswa AND
c.no_beasiswa = d.no_beasiswa AND
d.no_beasiswa = e.no_beasiswa AND
e.no_beasiswa = f.no_beasiswa AND
f.no_beasiswa = g.no_beasiswa AND
g.no_beasiswa = h.no_beasiswa AND
h.no_beasiswa = i.no_beasiswa AND
i.no_beasiswa = j.no_beasiswa AND
j.no_beasiswa = k.no_beasiswa AND
k.no_beasiswa = l.no_beasiswa AND
l.no_beasiswa = m.no_beasiswa AND
m.no_beasiswa = n.no_beasiswa AND
n.no_beasiswa = o.no_beasiswa AND
o.no_beasiswa = p.no_beasiswa AND
p.no_beasiswa = q.no_beasiswa AND
q.no_beasiswa = r.no_beasiswa AND
r.no_beasiswa = s.no_beasiswa AND
s.no_beasiswa = ".$id."
ORDER BY
a.no_beasiswa ASC

");

while($r= mysql_fetch_array($hasil))
{

?>
<form method="post" action="index.php?conten=proses_edit_bea">
<input type="hidden" name="id" id="id" value="<?php echo "$id"; ?>">
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
    <td class="bgisitabel" align="left"><input type="text" style="color:#000" id="no_bea" name="no_bea" size="50"  value=" <?php echo $r['0']; ?> " /></td>
   </tr>
   <tr>
      <td class="bgisitabel" style="color:#FFF">Tahun bea</td>
    <td class="bgisitabel" align="left">
    <select name="tahun_beasiswa" id="tahun_beasiswa">
        <option selected value=" <?php echo $r['1']; ?>"> <?php echo $r['1']; ?></option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>
    </td>
   </tr>
   <tr>
    <td class="bgisitabel" style="color:#FFF">Nama Beasiswa</td>
    <td class="bgisitabel" align="left" colspan="3"><input type="text" style="color:#000" id="nama_bea" name="nama_bea" size="120"  value=" <?php echo $r['2']; ?>"/></td>
   </tr>
   <tr>
    <td class="bgisitabel" style="color:#FFF">Jenis Pendididkan</td>
    <td class="bgisitabel" align="left" colspan="3">
      <select name="jenis_bea" id="jenis_bea" >
       <option selected value="<?php echo $r['3']; ?>"><?php echo $r['3']; ?></option>
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
        <input type="text" style="color:#000" id="total_dana_bea" name="total_dana_bea" size="50" value="<?php echo $r['4']; ?>"/></td>
   </tr>   
   <tr>
    <td class="bgisitabel" style="color:#FFF">Jumlah Beasiswa</td>
    <td class="bgisitabel" align="left" colspan="3">
        <input type="text" style="color:#000" id="jumlah_bea" name="jumlah_bea" size="50" value="<?php echo $r['5']; ?>"/></td>
   </tr>
   <tr>
    <td class="bgisitabel" style="color:#FFF" colspan="4">Keterangan</td>
   </tr>
   <tr>
    <td class="bgisitabel" style="color:#FFF" colspan="4">
      
      <textarea cols="145" rows="15" style="color:#000" name="ket_bea" id="ket_bea">
        <?php echo $r['6']; ?>
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
        <input type="text" style="color:#000" id="pengu_beasiswa" name="pengu_beasiswa" size="30"  value="<?php echo $r['8']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="wtf1" name="wtf1" size="30"  value="<?php echo $r['9']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Seleksi Administrasi</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="seleksi_admin" name="seleksi_admin" size="30"  value="<?php echo $r['10']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd2" name="spd2" size="30"  value="<?php echo $r['11']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Pengumuman Seleksi Adminsitrasi</td>

    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="pengu_selad" name="pengu_selad" size="30"  value="<?php echo $r['12']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd3" name="spd3" size="30"  value="<?php echo $r['13']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Seleksi Wawancara</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="seleksi_wawan" name="seleksi_wawan" size="30"  value="<?php echo $r['14']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd4" name="spd4" size="30"  value="<?php echo $r['15']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Pengumuman Penerimaan Beasiswa</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="pengu_penbe" name="pengu_penbe" size="30"  value="<?php echo $r['16']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd5" name="spd5" size="30"  value="<?php echo $r['17']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Daftar Ulang</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="daftar_ulang" name="daftar_ulang" size="30"  value="<?php echo $r['18']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd6" name="spd6" size="30"  value="<?php echo $r['19']; ?>"/>
    </td>
   </tr>
   <tr>
   <td class="bgisitabel" style="color:#FFF">Penerimaan Dana Beasiswa</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="pene_dabe" name="pene_dabe" size="30"  value="<?php echo $r['20']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Sampai dengan</td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="spd7" name="spd7" size="30"  value="<?php echo $r['21']; ?>"/>
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
    <td class="bgisitabel"  align="left" colspan="2" style="color:#FFF">Batas Minimum Kelulusan</td>
    <td class="bgisitabel"  align="left" colspan="10"><input type="text" style="color:#000" id="bts_lulus" name="bts_lulus" size="20"  value="<?php echo $r['113']; ?>"/></td>
  </tr>
  <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Nilai Raport</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Jumlah Prestasi Akademis Lokal</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Jumlah Prestasi Akademis Kecamatan/Kabupaten</td>
  </tr>
   
  <tr>
   <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index0" name="nr_index0" size="10"  value="<?php echo $r['32']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd0" name="nr_spd0" size="10"  value="<?php echo $r['33']; ?>"/>
    </td>

    <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index0" name="jpalo_index0" size="10"  value="<?php echo $r['41']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd0" name="jpalo_spd0" size="10"  value="<?php echo $r['42']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index0" name="jpakec_index0" size="10"  value="<?php echo $r['50']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd0" name="jpakec_spd0" size="10"  value="<?php echo $r['51']; ?>"/>
    </td>
   </tr>

<tr>
   <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index1" name="nr_index1" size="10"  value="<?php echo $r['34']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd1" name="nr_spd1" size="10"  value="<?php echo $r['35']; ?>"/>
    </td>

    <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index1" name="jpalo_index1" size="10"  value="<?php echo $r['43']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd1" name="jpalo_spd1" size="10"  value="<?php echo $r['44']; ?>"/>
    </td>
    

    <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index1" name="jpakec_index1" size="10"  value="<?php echo $r['52']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd1" name="jpakec_spd1" size="10"  value="<?php echo $r['53']; ?>"/>
    </td>
  
   </tr>

   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index2" name="nr_index2" size="10"  value="<?php echo $r['36']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd2" name="nr_spd2" size="10"  value="<?php echo $r['37']; ?>"/>
    </td>
   

    <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index2" name="jpalo_index2" size="10"  value="<?php echo $r['45']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd2" name="jpalo_spd2" size="10"  value="<?php echo $r['46']; ?>"/>
    </td>

    

    <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index2" name="jpakec_index2" size="10"  value="<?php echo $r['54']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd2" name="jpakec_spd2" size="10"  value="<?php echo $r['55']; ?>"/>
    </td>
 

   </tr>

<tr>
   <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="nr_index3" name="nr_index3" size="10"  value="<?php echo $r['38']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="nr_spd3" name="nr_spd3" size="10"  value="<?php echo $r['39']; ?>"/>
    </td>
  

    <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpalo_index3" name="jpalo_index3" size="10"  value="<?php echo $r['47']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpalo_spd3" name="jpalo_spd3" size="10"  value="<?php echo $r['48']; ?>"/>
    </td>

    

    <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpakec_index3" name="jpakec_index3" size="10"  value="<?php echo $r['56']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpakec_spd3" name="jpakec_spd3" size="10"  value="<?php echo $r['57']; ?>"/>
    </td>
    
   </tr>
  <tr>
    <td class="bgisitabel"  align="left" colspan="4">&nbsp;</td>
    <td class="bgisitabel"  align="left" colspan="4">&nbsp;</td>
    <td class="bgisitabel"  align="left" colspan="4">&nbsp;</td>
  </tr>

   <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Nilai Ipk</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Jumlah Prestasi Akademis Nasional</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Jumlah Prestasi Akademis Internasional</td>
  </tr>

  <tr>
   <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index0" name="ni_index0" size="10"  value="<?php echo $r['23']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ni_spd0" name="ni_spd0" size="10"  value="<?php echo $r['24']; ?>"/>
    </td>

    

<td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpanas_index0" name="jpanas_index0" size="10"  value="<?php echo $r['59']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpanas_spd0" name="jpanas_spd0" size="10"  value="<?php echo $r['60']; ?>"/>
    </td>

   

    <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpaint_index0" name="jpaint_index0" size="10"  value="<?php echo $r['68']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpaint_spd0" name="jpaint_spd0" size="10"  value="<?php echo $r['69']; ?>"/>
    </td>
   </tr>

  

<tr>
   <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index1" name="ni_index1" size="10"  value="<?php echo $r['25']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ni_spd1" name="ni_spd1" size="10"  value="<?php echo $r['26']; ?>"/>
    </td>
   <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpanas_index1" name="jpanas_index1" size="10"  value="<?php echo $r['61']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpanas_spd1" name="jpanas_spd1" size="10"  value="<?php echo $r['62']; ?>"/>
    </td>

 <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpaint_index1" name="jpaint_index1" size="10"  value="<?php echo $r['70']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpaint_spd1" name="jpaint_spd1" size="10"  value="<?php echo $r['71']; ?>"/>
    </td>

   </tr>   

    
<tr>
   <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index2" name="ni_index2" size="10"  value="<?php echo $r['27']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ni_spd2" name="ni_spd2" size="10"  value="<?php echo $r['28']; ?>"/>
    </td>
   

 <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpanas_index2" name="jpanas_index2" size="10"  value="<?php echo $r['63']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpanas_spd2" name="jpanas_spd2" size="10"  value="<?php echo $r['64']; ?>"/>
    </td>

    

    <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpaint_index2" name="jpaint_index2" size="10"  value="<?php echo $r['72']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpaint_spd2" name="jpaint_spd2" size="10"  value="<?php echo $r['73']; ?>"/>
    </td>
   </tr>

 
<tr>
   <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="ni_index3" name="ni_index3" size="10"  value="<?php echo $r['29']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="ni_spd3" name="ni_spd3" size="10"  value="<?php echo $r['30']; ?>"/>
    </td>

  
<td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpanas_index3" name="jpanas_index3" size="10"  value="<?php echo $r['65']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpanas_spd3" name="jpanas_spd3" size="10"  value="<?php echo $r['66']; ?>"/>
    </td>

   

<td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpaint_index3" name="jpaint_index3" size="10"  value="<?php echo $r['74']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpaint_spd3" name="jpaint_spd3" size="10"  value="<?php echo $r['75']; ?>"/>
    </td>
   </tr>

   <!-- =========================================  -->

  <!--  ==========================================-->
    <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4"></td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Jumlah Prestasi Non Akademis Lokal</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Jumlah Prestasi Non Akademis Kecamatan/Kabupaten</td>
  </tr>
<tr>
   <td class="bgisitabel" style="color:#FFF"></td>
    <td class="bgisitabel" align="left">
        
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        
    </td>
    <td class="bgisitabel" align="left">
      
    </td>

    <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnalo_index0" name="jpnalo_index0" size="10"  value="<?php echo $r['77']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnalo_spd0" name="jpnalo_spd0" size="10"  value="<?php echo $r['78']; ?>"/>
    </td>
    <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnakec_index0" name="jpnakec_index0" size="10"  value="<?php echo $r['86']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnakec_spd0" name="jpnakec_spd0" size="10"  value="<?php echo $r['87']; ?>"/>
    </td>
   </tr>
n
<tr>
   <td class="bgisitabel" style="color:#FFF"></td>
    <td class="bgisitabel" align="left">
       
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
       
    </td>
    <td class="bgisitabel" align="left">
      
    </td>

    <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnalo_index1" name="jpnalo_index1" size="10"  value="<?php echo $r['79']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnalo_spd1" name="jpnalo_spd1" size="10"  value="<?php echo $r['80']; ?>"/>
    </td>
    

    <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnakec_index1" name="jpnakec_index1" size="10"  value="<?php echo $r['88']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnakec_spd1" name="jpnakec_spd1" size="10"  value="<?php echo $r['89']; ?>"/>
    </td>
  
   </tr>

   <tr>
   <td class="bgisitabel" style="color:#FFF"></td>
    <td class="bgisitabel" align="left">
        
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        
    </td>
    <td class="bgisitabel" align="left">
      
    </td>
   

    <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnalo_index2" name="jpnalo_index2" size="10"  value="<?php echo $r['81']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnalo_spd2" name="jpnalo_spd2" size="10"  value="<?php echo $r['82']; ?>"/>
    </td>

    

    <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnakec_index2" name="jpnakec_index2" size="10"  value="<?php echo $r['90']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnakec_spd2" name="jpnakec_spd2" size="10"  value="<?php echo $r['91']; ?>"/>
    </td>
 

   </tr>

<tr>
   <td class="bgisitabel" style="color:#FFF"></td>
    <td class="bgisitabel" align="left">
      
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
      
    </td>
    <td class="bgisitabel" align="left">
      
    </td>
  

    <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnalo_index3" name="jpnalo_index3" size="10"  value="<?php echo $r['83']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnalo_spd3" name="jpnalo_spd3" size="10"  value="<?php echo $r['84']; ?>"/>
    </td>

    

    <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnakec_index3" name="jpnakec_index3" size="10"  value="<?php echo $r['92']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnakec_spd3" name="jpnakec_spd3" size="10"  value="<?php echo $r['93']; ?>"/>
    </td>
    
   </tr>
  

   <!-- ==================================== -->
     <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4"></td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Jumlah Prestasi Non Akademis Nasional</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Jumlah Prestasi Non Akademis Internasional</td>
  </tr>

  <tr>
   <td class="bgisitabel" style="color:#FFF"></td>
    <td class="bgisitabel" align="left">
        
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        
    </td>
    <td class="bgisitabel" align="left">
      
    </td>

    

<td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnanas_index0" name="jpnanas_index0" size="10"  value="<?php echo $r['95']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnanas_spd0" name="jpnanas_spd0" size="10"  value="<?php echo $r['96']; ?>"/>
    </td>

   

    <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnaint_index0" name="jpnaint_index0" size="10"  value="<?php echo $r['104']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnaint_spd0" name="jpnaint_spd0" size="10"  value="<?php echo $r['105']; ?>"/>
    </td>
   </tr>

  

<tr>
   <td class="bgisitabel" style="color:#FFF"></td>
    <td class="bgisitabel" align="left">
        
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        
    </td>
    <td class="bgisitabel" align="left">
      
    </td>
   <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnanas_index1" name="jpnanas_index1" size="10"  value="<?php echo $r['97']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnanas_spd1" name="jpnanas_spd1" size="10"  value="<?php echo $r['98']; ?>"/>
    </td>

 <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnaint_index1" name="jpnaint_index1" size="10"  value="<?php echo $r['106']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnaint_spd1" name="jpnaint_spd1" size="10"  value="<?php echo $r['107']; ?>"/>
    </td>

   </tr>   

    
<tr>
   <td class="bgisitabel" style="color:#FFF"></td>
    <td class="bgisitabel" align="left">
       
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
       
    </td>
    <td class="bgisitabel" align="left">
      
    </td>
   

 <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnanas_index2" name="jpnanas_index2" size="10"  value="<?php echo $r['99']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnanas_spd2" name="jpnanas_spd2" size="10"  value="<?php echo $r['100']; ?>"/>
    </td>

    

    <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnaint_index2" name="jpnaint_index2" size="10"  value="<?php echo $r['108']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnaint_spd2" name="jpnaint_spd2" size="10"  value="<?php echo $r['109']; ?>"/>
    </td>
   </tr>

 
<tr>
   <td class="bgisitabel" style="color:#FFF"></td>
    <td class="bgisitabel" align="left">
        
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        
    </td>
    <td class="bgisitabel" align="left">
      
    </td>

  
<td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnanas_index3" name="jpnanas_index3" size="10"  value="<?php echo $r['101']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnanas_spd3" name="jpnanas_spd3" size="10"  value="<?php echo $r['102']; ?>"/>
    </td>

   

<td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="jpnaint_index3" name="jpnaint_index3" size="10"  value="<?php echo $r['110']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="jpnaint_spd3" name="jpnaint_spd3" size="10"  value="<?php echo $r['111']; ?>"/>
    </td>
   </tr>
   <!-- ==================================== -->
  
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
    <td class="bgisitabel"  align="left" colspan="10"><input type="text" style="color:#000" id="batas_lulus_wawancara" name="batas_lulus_wawancara" size="20"  value="<?php echo $r['114']; ?>"/></td>
  </tr>
  <tr>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Kategori 1</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Kategori 2</td>
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Kategori 3</td>
  </tr>
   
   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index0" name="kt1_index0" size="10"  value="<?php echo $r['116']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd0" name="kt1_spd0" size="10"  value="<?php echo $r['117']; ?>"/>
    </td>
    

<td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index0" name="kt2_index0" size="10"  value="<?php echo $r['125']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd0" name="kt2_spd0" size="10"  value="<?php echo $r['126']; ?>"/>
    </td>

   

    <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index0" name="kt3_index0" size="10"  value="<?php echo $r['134']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd0" name="kt3_spd0" size="10"  value="<?php echo $r['135']; ?>"/>
    </td>
   </tr>

   

<tr>
   <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index1" name="kt1_index1" size="10"  value="<?php echo $r['118']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd1" name="kt1_spd1" size="10"  value="<?php echo $r['119']; ?>"/>
    </td>

<td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index1" name="kt2_index1" size="10"  value="<?php echo $r['127']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd1" name="kt2_spd1" size="10"  value="<?php echo $r['128']; ?>"/>
    </td>

    <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index1" name="kt3_index1" size="10"  value="<?php echo $r['136']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd1" name="kt3_spd1" size="10"  value="<?php echo $r['137']; ?>"/>
    </td>
   
   </tr>

   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index2" name="kt1_index2" size="10"  value="<?php echo $r['120']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd2" name="kt1_spd2" size="10"  value="<?php echo $r['121']; ?>"/>
    </td>

   

<td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index2" name="kt2_index2" size="10"  value="<?php echo $r['129']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd2" name="kt2_spd2" size="10"  value="<?php echo $r['130']; ?>"/>
    </td>

   

    <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index2" name="kt3_index2" size="10"  value="<?php echo $r['138']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd2" name="kt3_spd2" size="10"  value="<?php echo $r['139']; ?>"/>
    </td>
   
   </tr>

   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt1_index3" name="kt1_index3" size="10"  value="<?php echo $r['122']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt1_spd3" name="kt1_spd3" size="10"  value="<?php echo $r['123']; ?>"/>
    </td>
 

<td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt2_index3" name="kt2_index3" size="10"  value="<?php echo $r['131']; ?>"/>
    </td>
    <td class="bgisitabel" align="leftr" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt2_spd3" name="kt2_spd3" size="10"  value="<?php echo $r['132']; ?>"/>
    </td>
 

    <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt3_index3" name="kt3_index3" size="10"  value="<?php echo $r['140']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt3_spd3" name="kt3_spd3" size="10"  value="<?php echo $r['141']; ?>"/>
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
    <td class="bgisitabel" id="warnaabutua" align="left" colspan="4">Kategori 6</td>
  </tr>

  <tr>
   <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index0" name="kt4_index0" size="10"  value="<?php echo $r['143']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd0" name="kt4_spd0" size="10"  value="<?php echo $r['144']; ?>"/>
    </td>
  

<td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index0" name="kt5_index0" size="10"  value="<?php echo $r['152']; ?>"/>
    </td>
    <td class="bgisitabel" align="leftr" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt5_spd0" name="kt5_spd0" size="10"  value="<?php echo $r['153']; ?>"/>
    </td>


    <td class="bgisitabel" style="color:#FFF">Index 0</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt6_index0" name="kt6_index0" size="10"  value="<?php echo $r['161']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt6_spd0" name="kt6_spd0" size="10"  value="<?php echo $r['162']; ?>"/>
    </td>
   </tr>

   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index1" name="kt4_index1" size="10"  value="<?php echo $r['145']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd1" name="kt4_spd1" size="10"  value="<?php echo $r['146']; ?>"/>
    </td>
    

<td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index1" name="kt5_index1" size="10"  value="<?php echo $r['154']; ?>"/>
    </td>
    <td class="bgisitabel" align="leftr" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt5_spd1" name="kt5_spd1" size="10"  value="<?php echo $r['155']; ?>"/>
    </td>
   

    <td class="bgisitabel" style="color:#FFF">Index 1</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt6_index1" name="kt6_index1" size="10"  value="<?php echo $r['163']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt6_spd1" name="kt6_spd1" size="10"  value="<?php echo $r['164']; ?>"/>
    </td>
  
   </tr>

   <tr>
   <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index2" name="kt4_index2" size="10"  value="<?php echo $r['147']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd2" name="kt4_spd2" size="10"  value="<?php echo $r['148']; ?>"/>
    </td>
    

<td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index2" name="kt5_index2" size="10"  value="<?php echo $r['156']; ?>"/>
    </td>
    <td class="bgisitabel" align="leftr" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt5_spd2" name="kt5_spd2" size="10"  value="<?php echo $r['157']; ?>"/>
    </td>
    

    <td class="bgisitabel" style="color:#FFF">Index 2</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt6_index2" name="kt6_index2" size="10"  value="<?php echo $r['165']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt6_spd2" name="kt6_spd2" size="10"  value="<?php echo $r['166']; ?>"/>
    </td>
   
   </tr>

<tr>
   <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt4_index3" name="kt4_index3" size="10"  value="<?php echo $r['149']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt4_spd3" name="kt4_spd3" size="10"  value="<?php echo $r['150']; ?>"/>
    </td>

<td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt5_index3" name="kt5_index3" size="10"  value="<?php echo $r['158']; ?>"/>
    </td>
    <td class="bgisitabel" align="leftr" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt5_spd3" name="kt5_spd3" size="10"  value="<?php echo $r['159']; ?>"/>
    </td>

    <td class="bgisitabel" style="color:#FFF">Index 3</td>
    <td class="bgisitabel" align="left">
        <input type="text" style="color:#000" id="kt6_index3" name="kt6_index3" size="10"  value="<?php echo $r['167']; ?>"/>
    </td>
    <td class="bgisitabel" align="left" style="color:#FFF">
        s/d
    </td>
    <td class="bgisitabel" align="left">
      <input type="text" style="color:#000" id="kt6_spd3" name="kt6_spd3" size="10"  value="<?php echo $r['168']; ?>"/>
    </td>
 
   </tr>

   <tr>
    <td  id="warnaabutua"></td>
    <td  id="warnaabutua" align="right" colspan="11">&nbsp;</td>
  </tr>   

   <td colspan="11"></td>
       <!-- <td  colspan="2" align="center" id="BG_menu_data_Calon_Penerima" style="padding-top:10px"><button type="button" class="btn btn-warning" onclick="simpan()">&nbsp;Simpan&nbsp;</button>
       <button type="button" class="btn btn-warning" onclick="simpan()">&nbsp;Batal&nbsp;</button></td> -->
       <td> <input type="submit" align="right" class="btn btn-warning" value="Simpan"></td>
     </tr> 
</table></div> 
</div>
  </div>
</div>
</form>
<?php 
}
?>

