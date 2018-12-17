<?php require_once('admin/lib/config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=-1">
    <title>Formulir Pendaftaran Beasiswa Prestasi D3 dan S1 Dalam Negeri</title>
    <!-- <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> -->
    <script type="text/javascript" src="js/ajax_kota.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/animate.min.css">
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="bpi.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <style type="text/css">
    #nomer {
        width: 70%;
        height: =30px;
    }

    #tahun {
        width: 60%;
        height: =30px;
    }
    </style>
    <!-- <script>
    $(function() {
        /*$( "#pengu_bea" ).datepicker({
          changeMonth: true,
          changeYear: true 
        });*/

    });
    </script> -->
    <div class="navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/Yayasan-Japfa2.png" style="width:105px;height: 50px;margin-top: -15px"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a data-toggle="tab" href="#home" class="">A. DATA DIRI</a></li>
                        <li><a data-toggle="tab" href="#menu1" class="">B. FAKULTAS DAN PERGURUAN TINGGI</a></li>
                        <li><a data-toggle="tab" href="#menu2" class="">C. RIWAYAT KELUARGA</a></li>
                        <li><a data-toggle="tab" href="#menu3" class="">D. PERTANYAAN ESSAY</a></li>
                        <li><a data-toggle="tab" href="#menu4" class="">E. PERNYATAAN PRIBADI</a></li>
                        <li><a data-toggle="tab" href="#menu5" class="">F. BERKAS LAINNYA</a></li>
                        <li><a data-toggle="tab" href="#menu6" class="">G. PENYELESAIAN</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--     <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">A. INFORMASI PRIBADI</a></li>
        <li><a data-toggle="tab" href="#menu1">B. FAKULTAS DAN PERGURUAN TINGGI</a></li>
        <li><a data-toggle="tab" href="#menu2">C. RIWAYAT KELUARGA</a></li>
        <li><a data-toggle="tab" href="#menu3">D. PERTANYAAN ESSAY</a></li>
        <li><a data-toggle="tab" href="#menu4">E. PERNYATAAN PRIBADI</a></li>
        <li><a data-toggle="tab" href="#menu5">F. BERKAS LAINNYA</a></li>
        <li><a data-toggle="tab" href="#menu6">G. PENYELESAIAN</a></li>
    </ul> -->
    <?php 
 if(isset($_GET['data'])){
  $data = $_GET['data'];
 }else{
  $data = '';
 }
  ?>
    <main style="margin-top: 50px">
        <form class="form-horizontal" method="POST" action="include/proses_input_data2.php" id="myForm" name="myForm" enctype="multipart/form-data" onsubmit="return validateForm()">
            <!--Tab 1 -->
            <input type="hidden" name="id_no_beasiswa" id="id_no_beasiswa" value="<?php echo $dataall[0]; ?>">
            <input type="hidden" name="jenis_tingkat_bea" id="jenis_tingkat_bea" value="">
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active bg_tab">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <table border="0" align="center" class="table">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Nomer Induk Siswa Nasional(NIP/NIM)
                                    </label>
                                    <input type="text" name="nisn" id="nisn" class="form-control" value="">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <input type="hidden" name="data_email" id="data_email" value="<?php echo $data; ?>">
                                    <label for="exampleInputEmail1">
                                        Nama Lengkap Siswa
                                    </label>
                                    <input type="text" name="nama" id="nama" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Tempat Lahir
                                    </label>
                                    <input type="text" name="tempat_la" id="tempat_la" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Tanggal Lahir
                                    </label>
                                    <!--   <input type="text" name="tgl_la" id="tgl_la" class="form-control"  > -->
                                    <input type="date" name="tgl_la" id="tgl_la" class="form-control" placeholder="YYYY/MM/DD">
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Jenis Kelamin
                                    </label>
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="" hidden>-Pilih-</option>
                                        <option value="l">Laki-laki</option>
                                        <option value="p">Perempuan</option>
                                    </select>
                                    <!-- <input type="text" name="kab" id="kab" class="form-control"  > -->
                                </td>
                            </tr>
                            <!--    <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1">Bidang Keahlian/Jurusan</label>
    <input type="text" name="bidang" id="bidang" class="form-control"  >
    </td>
   </tr> -->
                            <!-- <tr>
    <td class="bgisitabel" align="left" colspan="2">
    <label for="exampleInputEmail1">Program Keahlian</label>
    <input type="text" name="bidang_studi" id="bidang_studi" class="form-control"  >
    </td>
   </tr> -->
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Alamat Tetap
                                    </label>
                                    <input type="text" name="alamat" id="alamat" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Provinsi
                                    </label>
                                    <select class="form-control" name="prov" id="prov" onchange="ajaxkota(this.value)">
                                        <option value="">Pilih Provinsi</option>
                                        <?php 
          $queryProvinsi=mysql_query("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
          while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
            echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'&'.$dataProvinsi['lokasi_nama'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
          }
          ?>
                                        <select>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Kabupaten
                                    </label>
                                    <select name="kab" id="kab" onchange="ajaxkec(this.value)" class="form-control">
                                        <option value="">Pilih Kota</option>
                                    </select>
                                    <!-- <input type="text" name="kab" id="kab" class="form-control"  > -->
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Kecamatan
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <select name="kec" id="kec" class="form-control">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Kode Pos
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <input type="number" name="kode_pos" id="kode_pos" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        No. Telepon/Faksimili Alamat Tetap
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <input type="number" name="telp_tetap" id="telp_tetap" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Alamat Surat Menyurat
                                    </label>
                                    <input type="text" name="alamat_surat" id="alamat_surat" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Provinsi
                                    </label>
                                    <select class="form-control" name="prov_surat" id="prov_surat" onchange="ajaxkota_surat(this.value)">
                                        <option value="">Pilih Provinsi</option>
                                        <?php 
          $queryProvinsi=mysql_query("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
          while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
            echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'&'.$dataProvinsi['lokasi_nama'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
          }
          ?>
                                        <select>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Kabupaten
                                    </label>
                                    <select name="kab_surat" id="kab_surat" onchange="ajaxkec_surat(this.value)" class="form-control">
                                        <option value="">Pilih Kota</option>
                                    </select>
                                    <!-- <input type="text" name="kab" id="kab" class="form-control"  > -->
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Kecamatan
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <select name="kec_surat" id="kec_surat" class="form-control">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Kode Pos
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <input type="number" name="kode_pos_surat" id="kode_pos_surat" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        No. Telepon/Faksimili Alamat Surat Menyurat
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <input type="number" name="telp_surat" id="telp_surat" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Email
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <input type="text" name="email" id="email" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        No. Hp
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <input type="number" name="hp" id="hp" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Apakah Anda Warga Negara Indonesia?
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <select name="q1" id="q1" class="form-control">
                                        <option value="" hidden>-Pilih-</option>
                                        <option value="y">YA</option>
                                        <option value="n">TIDAK</option>
                                    </select>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Apakah Anda Penerima Beasiswa JAPFA Foundation?
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <select name="q2" id="q2" class="form-control">
                                        <option value="" hidden>-Pilih-</option>
                                        <option value="y">YA</option>
                                        <option value="n">TIDAK</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        No. KTP/Passport
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <input type="number" name="id_card" id="id_card" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Tanggal Kadaluwarsa
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <input type="date" name="basi" id="basi" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right" colspan="">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                    <!--tab1 table2 -->
                    <div class="col-sm-12  col-md-12 col-lg-6">
                        <table border="0" align="center" class="table">
                            <tbody>
                                <tr>
                                    <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
                                    <td class="lekukantabel2" id="warnaabutua" align="center">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="bgisitabel" align="left" colspan="2">
                                        <label>
                                            Upload Photo
                                        </label>
                                        <br>
                                        <input id="uploadFile" placeholder="Pilih Gambar..." disabled="disabled" />
                                        <div class="fileUpload btn btn-lg btn-primary">
                                            <span>Pilih Gambar</span>
                                            <input id="uploadBtn" type="file" class="upload" name="myFile" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bgisitabel" align="left" colspan="2">
                                        <label for="exampleInputEmail1">
                                            * Upload Gambar Dengan Ukuran 4x4, Size/kapasitas gambar max 1Mb dengan jenis file jpg atau png
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="warnaabutua"></td>
                                    <td id="warnaabutua" align="right" colspan="">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <!--tab1 table3 -->
                        <table border="0" align="center" class="table">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Nama Pemilik Rekening
                                    </label>
                                    <input type="text" name="nama_reg" id="nama_reg" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Nomer Rekening bank
                                    </label>
                                    <input type="text" name="no_reg" id="no_reg" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Nama Bank
                                    </label>
                                    <input type="text" name="bank" id="bank" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Cabang
                                    </label>
                                    <input type="text" name="cabang" id="cabang" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Apabila belum memiliki Rekening Pribadi, Harap mencantumkan rekening orang tua/wali
                                    </label>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right" colspan="">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--Tab 1 akhir -->
                <!--Tab 2 -->
                <div id="menu1" class="tab-pane fade bg_tab">
                    <div class="col-md-12 col-lg-12">
                        <table border="0" align="center" class="table">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Perguruan Tinggi
                                    </label>
                                    <input type="text" name="perguruan_t" id="perguruan_t" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Fakultas
                                    </label>
                                    <!-- <input type="text" name="kec_sek" id="kec_sek" class="form-control"  > -->
                                    <select name="fakultas" id="fakultas" class="form-control">
                                        <option value="" hidden>-Pilih-</option>
                                        <option value="kedokteran hewan">Kedokteran Hewan</option>
                                        <option value="peternakan">Peternakan</option>
                                        <option value="pertanian">Pertanian</option>
                                        <option value="ekonomi">Ekonomi</option>
                                    </select>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Program Studi
                                    </label>
                                    <input type="text" name="program_studi" id="program_studi" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Strata Pendidikan
                                    </label>
                                    <!-- <input type="text" name="kec_sek" id="kec_sek" class="form-control"  > -->
                                    <select name="strata" id="strata" class="form-control">
                                        <option value="" hidden>-Pilih-</option>
                                        <option value="d3">D3</option>
                                        <option value="s1">S1</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right" colspan="">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--Tab 3 -->
                <div id="menu2" class="tab-pane fade bg_tab">
                    <!-- Ayah -->
                    <div class="col-md-12 col-lg-6">
                        <table border="0" align="center" class="table">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Nama Ayah
                                    </label>
                                    <input type="text" name="nama_ayah" id="nama_ayah" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Tanggal Lahir
                                    </label>
                                    <!--   <input type="text" name="tgl_la" id="tgl_la" class="form-control"  > -->
                                    <input type="date" name="tgl_la_ayah" id="tgl_la_ayah" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        No. Hp
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <input type="number" name="hp_ayah" id="hp_ayah" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Alamat Tinggal Ayah
                                    </label>
                                    <input type="text" name="alamat_ayah" id="alamat_ayah" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Provinsi
                                    </label>
                                    <!-- <input type="text" name="prov_ortu" id="prov_ortu" class="form-control"  > -->
                                    <select class="form-control" name="prov_ortu" id="prov_ortu" onchange="ajaxkota_ortu(this.value)">
                                        <option value="">Pilih Provinsi</option>
                                        <?php 
          $queryProvinsi=mysql_query("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
          while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
            echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'&'.$dataProvinsi['lokasi_nama'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
          }
          ?>
                                        <select>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Kabupaten
                                    </label>
                                    <!-- <input type="text" name="kec_ortu" id="kec_ortu" class="form-control"  > -->
                                    <select name="kab_ortu" id="kab_ortu" onchange="ajaxkec_ortu(this.value)" class="form-control">
                                        <option value="">Pilih Kota</option>
                                    </select>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Kecamatan
                                    </label>
                                    <!-- <input type="text" name="kab_ortu" id="kab_ortu" class="form-control"  > -->
                                    <select name="kec_ortu" id="kec_ortu" class="form-control">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Telepon Rumah Ayah
                                    </label>
                                    <input type="text" name="telp_ayah" id="telp_ayah" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Pendidikan Terakhir
                                    </label>
                                    <!-- <input type="text" name="kec_ortu" id="kec_ortu" class="form-control"  > -->
                                    <select name="pend_ayah" id="pend_ayah" class="form-control">
                                        <option value="" hidden>-Pilih-</option>
                                        <option value="s3">S3</option>
                                        <option value="s2">S2</option>
                                        <option value="s1">S1</option>
                                        <option value="d3">D3</option>
                                        <option value="d2">D2</option>
                                        <option value="d1">D1</option>
                                        <option value="smk">SMA/K</option>
                                        <option value="smp">SMP</option>
                                        <option value="sd">SD</option>
                                    </select>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Nama Institusi
                                    </label>
                                    <!-- <input type="text" name="kab_ortu" id="kab_ortu" class="form-control"  > -->
                                    <input type="text" name="institusi_ayah" id="institusi_ayah" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Lokasi Institusi Pendidikan
                                    </label>
                                    <input type="text" name="alamat_institusi_ayah" id="alamat_institusi_ayah" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Keadaan Ayah
                                    </label>
                                    <select name="kehidupan_ayah" id="kehidupan_ayah" class="form-control">
                                        <option value="" hidden>-Pilih-</option>
                                        <option value="hidup">Hidup</option>
                                        <option value="meninggal">Meninggal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Pekerjaan Ayah
                                    </label>
                                    <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Nama Perusahaan
                                    </label>
                                    <input type="text" name="perusahaan_ayah" id="perusahaan_ayah " class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        No. Telepon Perusahaan
                                    </label>
                                    <input type="text" name="telp_perusahaan_ayah" id="telp_perusahaan_ayah" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Jabatan
                                    </label>
                                    <input type="text" name="jabatan_ayah" id="jabatan_ayah  " class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Pendapatan Ayah
                                    </label>
                                    <!-- <input type="text" name="kec_ortu" id="kec_ortu" class="form-control"  > -->
                                    <select name="gaji_ayah" id="gaji_ayah" class="form-control">
                                        <option value="" hidden>-Pilih-</option>
                                        <option value="<1jt">
                                            < 1Jt</option>
                                                <option value="1jt-10jt">1Jt - 10Jt</option>
                                                <option value=">10jt">> 10Jt</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right" colspan="">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Ibu -->
                    <div class="col-md-12 col-lg-6">
                        <table border="0" align="center" class="table">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Nama Ibu
                                    </label>
                                    <input type="text" name="nama_ibu" id="nama_ibu" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Tanggal Lahir
                                    </label>
                                    <!--   <input type="text" name="tgl_la" id="tgl_la" class="form-control"  > -->
                                    <input type="date" name="tgl_la_ibu" id="tgl_la_ibu" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        No. Hp
                                    </label>
                                    <!-- <input type="text" name="kec" id="kec" class="form-control"  > -->
                                    <input type="number" name="hp_ibu" id="hp_ibu" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Alamat Tinggal Ibu
                                    </label>
                                    <input type="text" name="alamat_ibu" id="alamat_ibu" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Provinsi
                                    </label>
                                    <!-- <input type="text" name="prov_ortu" id="prov_ortu" class="form-control"  > -->
                                    <select class="form-control" name="prov_ibu" id="prov_ibu" onchange="ajaxkota_ibu(this.value)">
                                        <option value="">Pilih Provinsi</option>
                                        <?php 
          $queryProvinsi=mysql_query("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
          while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
            echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'&'.$dataProvinsi['lokasi_nama'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
          }
          ?>
                                        <select>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Kabupaten
                                    </label>
                                    <!-- <input type="text" name="kec_ortu" id="kec_ortu" class="form-control"  > -->
                                    <select name="kab_ibu" id="kab_ibu" onchange="ajaxkec_ibu(this.value)" class="form-control">
                                        <option value="">Pilih Kota</option>
                                    </select>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Kecamatan
                                    </label>
                                    <!-- <input type="text" name="kab_ortu" id="kab_ortu" class="form-control"  > -->
                                    <select name="kec_ibu" id="kec_ibu" class="form-control">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Telepon Rumah Ibu
                                    </label>
                                    <input type="text" name="telp_ibu" id="telp_ibu" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Pendidikan Terakhir
                                    </label>
                                    <!-- <input type="text" name="kec_ortu" id="kec_ortu" class="form-control"  > -->
                                    <select name="pend_ibu" id="pend_ibu" class="form-control">
                                        <option value="" hidden>-Pilih-</option>
                                        <option value="s3">S3</option>
                                        <option value="s2">S2</option>
                                        <option value="s1">S1</option>
                                        <option value="d3">D3</option>
                                        <option value="d2">D2</option>
                                        <option value="d1">D1</option>
                                        <option value="smk">SMA/K</option>
                                        <option value="smp">SMP</option>
                                        <option value="sd">SD</option>
                                    </select>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Nama Institusi
                                    </label>
                                    <!-- <input type="text" name="kab_ortu" id="kab_ortu" class="form-control"  > -->
                                    <input type="text" name="institusi_ibu" id="institusi_ibu" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Lokasi Institusi Pendidikan
                                    </label>
                                    <input type="text" name="alamat_institusi_ibu" id="alamat_institusi_ibu" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Keadaan Ibu
                                    </label>
                                    <select name="kehidupan_ibu" id="kehidupan_ibu" class="form-control">
                                        <option value="" hidden>-Pilih-</option>
                                        <option value="hidup">Hidup</option>
                                        <option value="meninggal">Meninggal</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Pekerjaan Ibu
                                    </label>
                                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Nama Perusahaan
                                    </label>
                                    <input type="text" name="perusahaan_ibu" id="perusahaan_ibu" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        No. Telepon Perusahaan
                                    </label>
                                    <input type="text" name="telp_perusahaan_ibu" id="telp_perusahaan_ibu" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Jabatan
                                    </label>
                                    <input type="text" name="jabatan_ibu" id="jabatan_ibu" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Pendapatan ibu
                                    </label>
                                    <!-- <input type="text" name="kec_ortu" id="kec_ortu" class="form-control"  > -->
                                    <select name="gaji_ibu" id="gaji_ibu" class="form-control">
                                        <option value="" hidden>-Pilih-</option>
                                        <option value="<1jt">
                                            < 1Jt</option>
                                                <option value="1jt-10jt">1Jt - 10Jt</option>
                                                <option value=">10jt">> 10Jt</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right" colspan="">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12 col-lg-12 table-responsive">
                        <table border="0" align="center" class="table">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua" colspan="6">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Nama Saudara Kandung
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Usia
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Pendidikan Terakhir
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Nama Sekolah/Perguruan Tinggi
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Lokasi Sekolah/Perguruan Tinggi
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Pekerjaan Saat Ini
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Nama Perusahaan/Lembaga Tempat Bekerja
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="saudara_kandung[]" id="saudara_kandung" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="usia_s[]" id="usia_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="pendidikan_s[]" id="pendidikan_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="kola_s[]" id="kola_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="tempat_kola_s[]" id="tempat_kola_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="gawe_s[]" id="gawe_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="tempat_gawe[]" id="tempat_gawe" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="saudara_kandung[]" id="saudara_kandung" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="usia_s[]" id="usia_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="pendidikan_s[]" id="pendidikan_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="kola_s[]" id="kola_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="tempat_kola_s[]" id="tempat_kola_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="gawe_s[]" id="gawe_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="tempat_gawe[]" id="tempat_gawe" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="saudara_kandung[]" id="saudara_kandung" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="usia_s[]" id="usia_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="pendidikan_s[]" id="pendidikan_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="kola_s[]" id="kola_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="tempat_kola_s[]" id="tempat_kola_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="gawe_s[]" id="gawe_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="tempat_gawe[]" id="tempat_gawe" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="saudara_kandung[]" id="saudara_kandung" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="usia_s[]" id="usia_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="pendidikan_s[]" id="pendidikan_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="kola_s[]" id="kola_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="tempat_kola_s[]" id="tempat_kola_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="gawe_s[]" id="gawe_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="tempat_gawe[]" id="tempat_gawe" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="saudara_kandung[]" id="saudara_kandung" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="usia_s[]" id="usia_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="pendidikan_s[]" id="pendidikan_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="kola_s[]" id="kola_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="tempat_kola_s[]" id="tempat_kola_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="gawe_s[]" id="gawe_s" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="tempat_gawe[]" id="tempat_gawe" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right " colspan="7">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--Tab 4 -->
                <div id="menu3" class="tab-pane fade bg_tab">
                    <div class="col-md-12 col-lg-12">
                        <table border="0" align="center" class="table">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        Mohon jawab pertanyaan dibawah ini secara singkat dalam Bahasa Inggris (tidak lebih dari 250 karakter).
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        1.What do you think about agriculture in Indonesia?
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <textarea name="esai" id="esai" cols="30" rows="10" class="form-control" maxlength="250 "></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <label for="exampleInputEmail1 ">
                                        2.What Skills and knowledge do you hope to achieve at your proposed study?
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <textarea name="esay" id="esay" cols="30" rows="10" class="form-control" maxlength="250"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right " colspan="">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Tab 5 -->
                <div id="menu4" class="tab-pane fade bg_tab ">
                    <div class="col-md-12 col-lg-12 ">
                        <table border="0 " align="center " class="table ">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <label for="exampleInputEmail1 ">
                                        Mohon jawab pertanyaan dibawah ini secara singkat dalam Bahasa Indonesia (tidak lebih dari 250 karakter untuk setiap pertanyaan).
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <label for="exampleInputEmail1 ">
                                        <h3>A. UMUM</h3>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <label for="exampleInputEmail1 ">
                                        1.Mengapa anda berhak menerima beasiswa JAPFA Foundation?
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <textarea name="prib" id="prib " cols="30 " rows="10 " class="form-control " maxlength="250 "></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <label for="exampleInputEmail1 ">
                                        2. Menurut anda bdang profesi apa yang perlu dikembangkan di Indonesia?
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <textarea name="prib2" id="prib2 " cols="30 " rows="10 " class="form-control " maxlength="250 "></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <label for="exampleInputEmail1 ">
                                        <h3>B. KEMAMPUAN SOSIAL</h3>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <label for="exampleInputEmail1 ">
                                        3. Beri penjelasan tentanng aktifitas/kegiatan sosial yang pernah anda lakukan
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <label for="exampleInputEmail1 ">
                                        a. Jelaskan kegiatan sosial tersebut berkaitan dengan jenis kegiatan, periode kegiatan sosial, dan kelompok penerima manfaat!
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <textarea name="prib3" id="prib3" cols="30 " rows="10 " class="form-control " maxlength="250 "></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <label for="exampleInputEmail1 ">
                                        b. Apa tugas dan tanggung jawab anda?
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <textarea name="prib4" id="prib4 " cols="30 " rows="10 " class="form-control " maxlength="250 "></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <label for="exampleInputEmail1 ">
                                        c. Apa hasil dari kegiatan tersebut?
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="2 ">
                                    <textarea name="prib5" id="prib5 " cols="30 " rows="10 " class="form-control " maxlength="250 "></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right " colspan="2 ">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--Tab 6 -->
                <div id="menu5" class="tab-pane fade bg_tab">
                    <div class="col-md-12 col-lg-12">
                        <table border="0" align="center" class="table">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua" colspan="5">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="6">
                                    <label for="exampleInputEmail1 ">
                                        <h3>A. KEGIATAN EKSTRAKULIKULER</h3>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="6">
                                    <label for="exampleInputEmail1">
                                        Mohon sertakan kegiatan tambahan atau organisasi yang dimana anda terlibat didalamnya. Mulai lah dari yang paling baru.
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Nama Organisasi
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Tanggal Masuk
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Tanggal Keluar
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Jabatan
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Lokasi
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Aktifitas
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="ekskul[]" id="ekskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="date" name="tgl_masuk_eskul[]" id="tgl_masuk_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="date" name="tgl_keluar_eskul[]" id="tgl_keluar_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="jbtn_eskul[]" id="jbtn_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="lokasi_eskul[]" id="lokasi_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <textarea name="aktifitas_eskul[]" id="aktifitas_eskul" cols="30" rows="5" class="form-control" maxlength="1000"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="ekskul[]" id="ekskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="date" name="tgl_masuk_eskul[]" id="tgl_masuk_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="date" name="tgl_keluar_eskul[]" id="tgl_keluar_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="jbtn_eskul[]" id="jbtn_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="lokasi_eskul[]" id="lokasi_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <textarea name="aktifitas_eskul[]" id="aktifitas_eskul" cols="30" rows="5" class="form-control" maxlength="1000"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="ekskul[]" id="ekskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="date" name="tgl_masuk_eskul[]" id="tgl_masuk_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="date" name="tgl_keluar_eskul[]" id="tgl_keluar_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="jbtn_eskul[]" id="jbtn_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="lokasi_eskul[]" id="lokasi_eskul" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <textarea name="aktifitas_eskul[]" id="aktifitas_eskul" cols="30" rows="5" class="form-control" maxlength="1000"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right " colspan="6">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <table border="0" align="center" class="table">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua" colspan="2">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="3">
                                    <label for="exampleInputEmail1 ">
                                        <h3>B. PENGHARGAAN/PENCAPAIAN KHUSUS</h3>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="3">
                                    <label for="exampleInputEmail1">
                                        Mohon sertakan informasi apabila anda pernah mendapatkan penghargaan khusus atau pencapaian lainnya, Jelaskan secara singkat. Mulailah dari penghargaan yang paling terbaru beserta tahunnya.
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Nama Institusi
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Tanggal Penghargaan Diterima
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Deskripsi Penghargaan
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="peng[]" id="peng" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="date" name="tgl_peng[]" id="tgl_peng" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <textarea name="desc_peng[]" id="desc_peng" cols="30" rows="5" class="form-control" maxlength="1000"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="peng[]" id="peng" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="date" name="tgl_peng[]" id="tgl_peng" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <textarea name="desc_peng[]" id="desc_peng" cols="30" rows="5" class="form-control" maxlength="1000"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="peng[]" id="peng" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="date" name="tgl_peng[]" id="tgl_peng" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <textarea name="desc_peng[]" id="desc_peng" cols="30" rows="5" class="form-control" maxlength="1000"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="peng[]" id="peng" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="date" name="tgl_peng[]" id="tgl_peng" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <textarea name="desc_peng[]" id="desc_peng" cols="30" rows="5" class="form-control" maxlength="1000"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right " colspan="4">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <table border="0" align="center" class="table">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua" colspan="2">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel " align="left " colspan="3">
                                    <label for="exampleInputEmail1 ">
                                        <h3>C. AKTIVITAS SOSIAL DAN MASYARAKAT</h3>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="3">
                                    <label for="exampleInputEmail1">
                                        Mohon sertakan informasi apabila anda pernah ikut serta dalam kegiatan sosial dan pelayanan masyarakat selama program sarjana.
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Nama/Jenis Aktivitas Sosial
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Tahun
                                    </label>
                                </td>
                                <td class="bgisitabel" align="left">
                                    <label for="exampleInputEmail1">
                                        Lokasi Kegiatan
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="nama_keg[]" id="nama_keg" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="number" min="1900" max="2100" value="2018" name="thn_keg[]" id="thn_keg" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <textarea name="lokasi_keg[]" id="lokasi_keg" cols="30" rows="5" class="form-control" maxlength="1000"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="nama_keg[]" id="nama_keg" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="number" min="1900" max="2100" value="2018" name="thn_keg[]" id="thn_keg" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <textarea name="lokasi_keg[]" id="lokasi_keg" cols="30" rows="5" class="form-control" maxlength="1000"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="nama_keg[]" id="nama_keg" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="number" min="1900" max="2100" value="2018" name="thn_keg[]" id="thn_keg" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <textarea name="lokasi_keg[]" id="lokasi_keg" cols="30" rows="5" class="form-control" maxlength="1000"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left">
                                    <input type="text" name="nama_keg[]" id="nama_keg" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <input type="number" min="1900" max="2100" value="2018" name="thn_keg[]" id="thn_keg" class="form-control">
                                </td>
                                <td class="bgisitabel" align="left">
                                    <textarea name="lokasi_keg[]" id="lokasi_keg" cols="30" rows="5" class="form-control" maxlength="1000"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right " colspan="3">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--Tab 7 -->
                <div id="menu6" class="tab-pane fade bg_tab">
                    <div class="col-md-12 col-lg-12">
                        <table border="0" align="center" class="table">
                            <tr>
                                <td class="lekukantabel1" id="warnaabutua">&nbsp;</td>
                                <td class="lekukantabel2" id="warnaabutua" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        <h3>Dengan ini saya menyatakan kebenaran seluruh informasi yang telah diberikan dalam pendaftaran ini. Saya mengerti sepenuhnya akan sanksi diskualifikasi dan tidak akan mendapatkan beasiswa JAPFA Foundation apabila telah memberikan informasi yang tidak benar. Saya mengerti sepenuhnya akan sanksi penghentian beasiswa apabila ternyata telah memberikan informasi yang tidak benar. Saya bersedia menanggung seluruh konsekuensi yang telah tercantum di dalam surat perjanjian beasiswa</h3>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="left" colspan="2">
                                    <label for="exampleInputEmail1">
                                        <input type="checkbox" name="agree" required/> Saya menyutujui bahwa JAPFA Foundation dapat menggunakan informasi pendaftaran dan seluruh dokumen yang menyertainnya untuk evaluasi dan pemberian beasiswa.
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bgisitabel" align="center" colspan="2">
                                    <button type="submit" class="btn btn-primary">&nbsp;Kirim Formulir Pendaftaran&nbsp;</button>
                                </td>
                            </tr>
                            <tr>
                                <td id="warnaabutua"></td>
                                <td id="warnaabutua" align="right" colspan="">&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js "></script>
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js "></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript"></script>
    <script>
    document.getElementById("uploadBtn").onchange = function() {
        document.getElementById("uploadFile").value = this.value;
    };
    </script>
    <script>
    function validateForm() {

        // data siswa
        var input1 = document.forms["myForm"]["nisn"].value;
        var input2 = document.forms["myForm"]["nama"].value;
        var input3 = document.forms["myForm"]["tempat_la"].value;
        var input4 = document.forms["myForm"]["tgl_la"].value;
        var input5 = document.forms["myForm"]["jk"].value;
        var input6 = document.forms["myForm"]["alamat"].value;
        var input7 = document.forms["myForm"]["prov"].value;
        var input8 = document.forms["myForm"]["kab"].value;
        var input9 = document.forms["myForm"]["kec"].value;
        var input10 = document.forms["myForm"]["kode_pos"].value;
        var input11 = document.forms["myForm"]["telp"].value;
        var input12 = document.forms["myForm"]["alamat_surat"].value;
        var input13 = document.forms["myForm"]["prov_surat"].value;
        var input14 = document.forms["myForm"]["kab_surat"].value;
        var input15 = document.forms["myForm"]["kec_surat"].value;
        var input16 = document.forms["myForm"]["kode_pos_surat"].value;
        var input17 = document.forms["myForm"]["telp_surat"].value;
        var input18 = document.forms["myForm"]["email"].value;
        var input19 = document.forms["myForm"]["hp"].value;
        var input20 = document.forms["myForm"]["q1"].value;
        var input21 = document.forms["myForm"]["q2"].value;
        var input22 = document.forms["myForm"]["id_card"].value;
        var input23 = document.forms["myForm"]["basi"].value;
        var input24 = document.forms["myForm"]["nama_reg"].value;
        var input25 = document.forms["myForm"]["no_reg"].value;
        var input26 = document.forms["myForm"]["bank"].value;
        var input27 = document.forms["myForm"]["cabang"].value;

        //data PT
        var input28 = document.forms["myForm"]["perguruan_t"].value;
        var input29 = document.forms["myForm"]["fakultas"].value;
        var input30 = document.forms["myForm"]["program_studi"].value;
        var input31 = document.forms["myForm"]["strata"].value;

        //orang tua
        var input_ortu1 = document.forms["myForm"]["nama_ayah"].value;
        var input_ortu2 = document.forms["myForm"]["tgl_la_ayah"].value;
        var input_ortu3 = document.forms["myForm"]["hp_ayah"].value;
        var input_ortu4 = document.forms["myForm"]["alamat_ayah"].value;
        var input_ortu5 = document.forms["myForm"]["prov_ortu"].value;
        var input_ortu6 = document.forms["myForm"]["kab_ortu"].value;
        var input_ortu7 = document.forms["myForm"]["kec_ortu"].value;
        var input_ortu8 = document.forms["myForm"]["telp_ayah"].value;
        var input_ortu9 = document.forms["myForm"]["pend_ayah"].value;
        var input_ortu10 = document.forms["myForm"]["institusi_ayah"].value;
        var input_ortu11 = document.forms["myForm"]["alamat_institusi_ayah"].value;
        var input_ortu12 = document.forms["myForm"]["kehidupan_ayah"].value;
        var input_ortu13 = document.forms["myForm"]["pekerjaan_ayah"].value;
        var input_ortu14 = document.forms["myForm"]["perusahaan_ayah"].value;
        var input_ortu15 = document.forms["myForm"]["telp_perusahaan_ayah"].value;
        var input_ortu16 = document.forms["myForm"]["jabatan_ayah"].value;
        var input_ortu17 = document.forms["myForm"]["pendapatan_ayah"].value;
        var input_ortu18 = document.forms["myForm"]["nama_ibu"].value;
        var input_ortu19 = document.forms["myForm"]["tgl_la_ibu"].value;
        var input_ortu20 = document.forms["myForm"]["hp_ibu"].value;
        var input_ortu21 = document.forms["myForm"]["alamat_ibu"].value;
        var input_ortu22 = document.forms["myForm"]["prov_ibu"].value;
        var input_ortu23 = document.forms["myForm"]["kab_ibu"].value;
        var input_ortu24 = document.forms["myForm"]["kec_ibu"].value;
        var input_ortu25 = document.forms["myForm"]["telp_ibu"].value;
        var input_ortu26 = document.forms["myForm"]["pend_ibu"].value;
        var input_ortu27 = document.forms["myForm"]["institusi_ibu"].value;
        var input_ortu28 = document.forms["myForm"]["alamat_institusi_ibu"].value;
        var input_ortu29 = document.forms["myForm"]["kehidupan_ibu"].value;
        var input_ortu30 = document.forms["myForm"]["pekerjaan_ibu"].value;
        var input_ortu31 = document.forms["myForm"]["perusahaan_ibu"].value;
        var input_ortu32 = document.forms["myForm"]["telp_perusahaan_ibu"].value;
        var input_ortu33 = document.forms["myForm"]["jabatan_ibu"].value;
        var input_ortu34 = document.forms["myForm"]["pendapatan_ibu"].value;

        //esai
        var input_esai = document.forms["myForm"]["esai"].value;
        var input_esay = document.forms["myForm"]["esay"].value;

        //pribadi
        var input_pribadi = document.forms["myForm"]["prib"].value;
        var input_pribadi2 = document.forms["myForm"]["prib2"].value;
        var input_pribadi3 = document.forms["myForm"]["prib3"].value;
        var input_pribadi4 = document.forms["myForm"]["prib4"].value;
        var input_pribadi5 = document.forms["myForm"]["prib5"].value;


        //valid siswa
        if (input1 == null || input1 == "") {
            alert("Nisn pada menu tab A. data siswa wajib diisi!");
            $('#nama').focus();
            return false;
        } else if (input2 == null || input2 == "") {
            alert("Nama pada menu tab A. data siswa wajib diisi!");
            $('#nisn').focus();
            return false;
        } else if (input3 == null || input3 == "") {
            alert("Tempat lahir pada menu tab A. data siswa wajib diisi!");
            $('#bidang').focus();
            return false;
        } else if (input4 == null || input4 == "") {
            alert("Tanggal lahir Keahlian pada menu tab A. data siswa wajib diisi!");
            $('#bidang_studi').focus();
            return false;
        } else if (input5 == null || input5 == "") {
            alert("Jenis Kelamin pada menu tab A. data siswa wajib diisi!");
            $('#bidang_studi').focus();
            return false;
        } else if (input6 == null || input6 == "") {
            alert("Alamat pada menu tab A. data siswa wajib diisi!");
            $('#tempat_la').focus();
            return false;
        } else if (input7 == null || input7 == "") {
            alert("Provinsi pada menu tab A. data siswa wajib diisi!");
            $('#tgl_la').focus();
            return false;
        } else if (input8 == null || input8 == "") {
            alert("Kabupaten/Kota pada menu tab A. data siswa wajib diisi!");
            $('#alamat').focus();
            return false;
        } else if (input9 == null || input9 == "") {
            alert("Kecamatan pada menu tab A. data siswa wajib diisi!");
            $('#kec').focus();
            return false;
        } else if (input10 == null || input10 == "") {
            alert("Kode Pos pada menu tab A. data siswa wajib diisi!");
            $('#kab').focus();
            return false;
        } else if (input18 == null || input18 == "") {
            alert("email pada menu tab A. data siswa wajib diisi!");
            $('#email').focus();
            return false;
        } else if (input19 == null || input19 == "") {
            alert("No. Hape pada menu tab A. data siswa wajib diisi!");
            $('#hp').focus();
            return false;
        } else if (input20 == null || input20 == "") {
            alert("Pertanyaan pada menu tab A. data siswa wajib diisi!");
            $('#q1').focus();
            return false;
        } else if (input21 == null || input21 == "") {
            alert("Pertanyaan pada menu tab A. data siswa wajib diisi!");
            $('#q2').focus();
            return false;
        } else if (input22 == null || input22 == "") {
            alert("Kartu Identitas pada menu tab A. data siswa wajib diisi!");
            $('#id_card').focus();
            return false;
        } else if (input28 == null || input28 == "") {
            alert("Perguruan pada menu tab B. Fakultas dan Perguruan Tinggi wajib diisi!");
            $('#perguruan_t').focus();
            return false;
        } else if (input29 == null || input29 == "") {
            alert("Fakultas pada menu tab B. Fakultas dan Perguruan Tinggi wajib diisi!");
            $('#fakultas').focus();
            return false;
        } else if (input30 == null || input30 == "") {
            alert("Program Studi pada menu tab B. Fakultas dan Perguruan Tinggi wajib diisi!");
            $('#program_studi').focus();
            return false;
        } else if (input31 == null || input31 == "") {
            alert("Strata pada menu tab B. Fakultas dan Perguruan Tinggi wajib diisi!");
            $('#strata').focus();
            return false;
        } else if (input_ortu1 == null || input_ortu1 == "") {
            alert("Nama Ayah pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#nama_ayah').focus();
            return false;
        } else if (input_ortu2 == null || input_ortu2 == "") {
            alert("Tanggal Lahir Ayah pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#tgl_la_ayah').focus();
            return false;
        } else if (input_ortu4 == null || input_ortu4 == "") {
            alert("Alamat Ayah pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#alamat_ayah').focus();
            return false;
        } else if (input_ortu5 == null || input_ortu5 == "") {
            alert("Provinsi Ayah pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#prov_ortu').focus();
            return false;
        } else if (input_ortu6 == null || input_ortu6 == "") {
            alert("Kabupaten Ayah pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#kab_ortu').focus();
            return false;
        } else if (input_ortu7 == null || input_ortu7 == "") {
            alert("Kecamatan Ayah pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#kec_ortu').focus();
            return false;
        } else if (input_ortu9 == null || input_ortu9 == "") {
            alert("Pendidikan Ayah pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#pend_ayah').focus();
            return false;
        } else if (input_ortu10 == null || input_ortu10 == "") {
            alert("Institusi Ayah pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#institusi_ayah').focus();
            return false;
        } else if (input_ortu11 == null || input_ortu11 == "") {
            alert("Alamat Institusi Ayah pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#alamat_institusi_ayah').focus();
            return false;
        } else if (input_ortu12 == null || input_ortu12 == "") {
            alert("Kehidupan Ayah pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#kehidupan_ayah').focus();
            return false;
        } else if (input_ortu18 == null || input_ortu18 == "") {
            alert("Nama Ibu pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#nama_ibu').focus();
            return false;
        } else if (input_ortu19 == null || input_ortu19 == "") {
            alert("TAnggal Lahir Ibu pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#tgl_la_ibu').focus();
            return false;
        } else if (input_ortu21 == null || input_ortu21 == "") {
            alert("Alamat Ibu pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#nama_ibu').focus();
            return false;
        } else if (input_ortu22 == null || input_ortu22 == "") {
            alert("Provinsi Ibu pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#prov_ibu').focus();
            return false;
        } else if (input_ortu23 == null || input_ortu23 == "") {
            alert("Kabupaten Ibu pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#kab_ibu').focus();
            return false;
        } else if (input_ortu24 == null || input_ortu24 == "") {
            alert("Kecamatan Ibu pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#kec_ibu').focus();
            return false;
        } else if (input_ortu26 == null || input_ortu26 == "") {
            alert("Pendidikan Ibu pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#pend_ibu').focus();
            return false;
        } else if (input_ortu27 == null || input_ortu27 == "") {
            alert("Insitusi Ibu pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#institusi_ibu').focus();
            return false;
        } else if (input_ortu28 == null || input_ortu28 == "") {
            alert("Alamat Institusi Ibu pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#alamat_institusi_ibu').focus();
            return false;
        } else if (input_ortu29 == null || input_ortu29 == "") {
            alert("Keadaan Ibu pada menu tab C. Riwayat Keluarga wajib diisi!");
            $('#kehidupan_ibu').focus();
            return false;
        } else {
            send();
            return false;
        }
    }
    </script>
    <script type="text/javascript">
    var jum = 2;



    function myFunction() {
        var table = document.getElementById("myTable");
        var row = table.insertRow(1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var isi1 = "<label for='exampleInputEmail1'><font color='#FFF'>Prestasi</label><select name='presta" + jum + "' id='presta" + jum + "' class='form-control'><option value='akademik'>akademik</option><option value='non akademik'>non akademik</option></select>";
        var isi2 = "<label for='exampleInputEmail1'><font color='#FFF'>Uraian</label><input type='text' name='nama_presta" + jum + "' id='nama_presta" + jum + "' class='form-control' id='exampleInputEmail1' value = '' >";
        var isi3 = "<label for='exampleInputEmail1'><font color='#FFF'>Tingkat Prestasi</label><select name='tingkat_presta" + jum + "' id='tingkat_presta" + jum + "' class='form-control'> <option value='lokal'>lokal</option><option value='kecamatan/kabupaten'>kecamatan/kabupaten</option><option value='nasional'>nasional</option><option value='inter nasional'>inter nasional</option></select>";
        cell1.innerHTML = isi1;
        cell2.innerHTML = isi2;
        cell3.innerHTML = isi3;
        $('#jum_pres').val(jum);
        jum++;
    }
    </script>
</body>

</html>