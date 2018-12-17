<?php
    require_once "../lib/func_jenis.php";
    if(isset($_GET['kunci'])){
        $kunci = $_GET['kunci'];
    }else{
        $kunci='';
    }
    if(isset($_GET['kategori'])){
        $kategori = $_GET['kategori'];
    }else{
        $kategori='';
    }

    if(isset($_GET['indi2'])){
        $indi2 = $_GET['indi2'];
    }else{
        $indi2='';
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id='';
    }
    if(isset($_GET['id_jenis'])){
        $id_jenis = $_GET['id_jenis'];
    }else{
        $id_jenis='';
    }

    //input data 
    if(isset($_GET['nama_data_in'])){
        $nama_data_in = $_GET['nama_data_in'];
    }else{
        $nama_data_in='';
    }
    if(isset($_GET['st_data_in'])){
        $st_data_in = $_GET['st_data_in'];
    }else{
        $st_data_in='';
    }

    //edit data
    if(isset($_GET['nisn_data'])){
        $nisn_data = $_GET['nisn_data'];
    }else{
        $nisn_data='';
    }
    if(isset($_GET['nama_data'])){
        $nama_data = $_GET['nama_data'];
    }else{
        $nama_data='';
    }
    if(isset($_GET['st_data'])){
        $st_data = $_GET['st_data'];
    }else{
        $st_data='';
    }

    //delete
    if(isset($_GET['nisn_data_del'])){
        $nisn_data_del = $_GET['nisn_data_del'];
    }else{
        $nisn_data_del='';
    }


    $query = "";
    if($indi2=="check"){
        $query=check($id, $id_jenis);
         if($query){
                echo json_encode("data berhasil dipilih!");
         }else{
                echo json_encode("data gagal dipilih!");
         }
    } else if($indi2=="uncheck"){
        $query=uncheck($id, $id_jenis);
         if($query){
                echo json_encode("data berhasil un dipilih!");
         }else{
                echo json_encode("data gagal un dipilih!");
         }
    }else if($indi2=="cari"){
        $query=caritingkat($kunci, $kategori,$id_jenis);
         while($result = mysql_fetch_assoc($query)){
                $arrayjson[] = $result;
        }
        echo json_encode($arrayjson);
    }else if($indi2=="cari_jenis"){
        $query=cariJenis($kunci, $kategori);
         while($result = mysql_fetch_assoc($query)){
                $arrayjson[] = $result;
        }
        echo json_encode($arrayjson);
    }else if($indi2=="refresh"){
        $query=alltingkat($id_jenis);
         while($result = mysql_fetch_assoc($query)){
                $arrayjson[] = $result;
        }
        echo json_encode($arrayjson);
    }else if($indi2=="refresh_jenis"){
        $query=alljenis();
         while($result = mysql_fetch_assoc($query)){
                $arrayjson[] = $result;
        }
        echo json_encode($arrayjson);
    }else if($indi2=="input_data"){
         $query=inputJenis($nama_data_in, $st_data_in);
         $id = jenismax();
         //echo json_encode($query);
         if($query){
                echo json_encode("Tambah data berhasil,Silahkan isi tingkat pendidikan!-".$id);
         }else{
                echo json_encode("Tambah data gagal!-".$id);
         }
    }else if($indi2=="del"){
         $query=delJenis($nisn_data_del);
         if($query){
                echo json_encode("Delete data berhasil!");
         }else{
                echo json_encode("Delete data gagal!");
         }
    }else{
         $query=editJenis($nisn_data, $nama_data, $st_data);
         if($query){
                echo json_encode("Edit data berhasil!");
         }else{
                echo json_encode("Edit data gagal!");
         }
    }
?>