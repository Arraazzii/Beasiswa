<?php 
require_once('../lib/config.php'); 
require_once('../lib/restricted.php'); 
require_once('../lib/func_user.php'); 
//INISIALISASI SESSION
$username=base64_decode($_SESSION['Username']);
$user=GetUserByUsername($username);
$row_user=mysql_fetch_assoc($user);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include_once '../includes/header.php'; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Beranda</title>
<link href="" rel="stylesheet" type="text/css" />
<link href="../../bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../../bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="../../bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="../../themes/base/jquery.ui.all.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<link href="../../bpi.css" rel="stylesheet" type="text/css" />


<script src="../../js/bootstrap2.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="../../js/jquery.js"></script> 
<script src="../../ui/jquery.ui.core.js"></script>
<script src="../../ui/jquery.ui.widget.js"></script>
<script src="../../ui/jquery.ui.datepicker.js"></script>
<script src="../../include/ckeditor/ckeditor.js"></script>

<!-- DATA TABLE-->


	
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<!-- DATA TABLE-->


  <!--CSS TAMBAHAN-->
    <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
    <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
    <!--/CSS TAMBAHAN-->
<script type="text/javascript">
            $(document).ready(function () {
                $('#tgl').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true,
                    orientation: "bottom left"
                });
              
            });
  //var table = $('#rekap').DataTable();
//var buttons = new $.fn.dataTable.Buttons(table, {
     //buttons: [
        // {
                //extend: 'excelHtml5',
                //title: 'Data Rekapitulasi'
            //},
            //{
                //extend: 'pdfHtml5',
                //title: 'Data Rekapitulasi',
                //orientation: 'landscape',
                //pageSize: 'LEGAL'
            //},{
                //extend: 'csvHtml5',
                //title: 'Data Rekapitulasi'
            //},{
                //extend: 'print',
                //title: 'Data Rekapitulasi'
            //}
    //]
//}).container().appendTo($('#button_now'));
        </script>

</head>

<!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>	
	<script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>-->
<body>


<nav class="navbar navbar-default" id="warnaabu">
  <div class="container-fluid" id="shadow" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="Admin.html">Home</a> </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Beasisiwa<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li ><a href="index.php?conten=input_bea">Input Beasisiwa</a></li>
           <li ><a href="index.php?conten=data_bea">Data Beasisiwa</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seleksi Admin<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li ><a href="index.php?conten=data_pendaftar">Data Pendaftar</a></li>
           <li ><a href="index.php?conten=data_lusad">Data Lulus Administrasi</a></li>
           <li ><a href="index.php?conten=penguad">Pengumuman Administrasi</a></li>
          </ul>
        </li>
         
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Selekasi Wawancara<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li ><a href="index.php?conten=in_hawa">Input Hasil Wawancara</a></li>     
          <li ><a href="index.php?conten=data_hawa">Data Hasil Wawancara</a></li>
          <li ><a href="index.php?conten=data_luwa">Data Lulus Wawancara</a></li>
          <li ><a href="index.php?conten=penguwa">Pengumuman Wawancara</a></li> 
          </ul>
        </li>     
       
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rekapitulasi Beasisiwa<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li ><a href="index.php?conten=data_rekap">Data Rekapitulasi</a></li>
           <li ><a href="index.php?conten=data_penbe">Data Penerima Beasisiwa</a></li>
           <li ><a href="index.php?conten=pengube">Pengumuman Beasisiwa</a></li>
          </ul>
        </li>  
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li ><a href="index.php?conten=daerah">Data Daerah</a></li>
           <li ><a href="index.php?conten=tingkat">Data Jurusan/Bidang Keahlian/program keahlian</a></li>
           <li ><a href="index.php?conten=jenis">Data Jenis Beasiswa</a></li>
          </ul>
        </li>  
       <li ><a href="logout.php">Keluar</a></li>     

      </ul>
     
    </div>
  </div>
</nav>
<?php
	include("content.php");
?>
</body>

</html>
