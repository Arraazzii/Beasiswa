<?php
    require_once "../lib/func_tingkat.php";
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
    if(isset($_GET['indi'])){
        $indi = $_GET['indi'];
    }else{
        $indi='';
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
    if(isset($_GET['lv_data'])){
        $lv_data = $_GET['lv_data'];
    }else{
        $lv_data='';
    }

    //delete data 
    if(isset($_GET['nisn_data_del'])){
        $nisn_data_del = $_GET['nisn_data_del'];
    }else{
        $nisn_data_del='';
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
    if(isset($_GET['lv_data_in'])){
        $lv_data_in = $_GET['lv_data_in'];
    }else{
        $lv_data_in='';
    }


    $query = "";
    if($indi=="cari"){
        $query=caritingkat($kunci, $kategori);
         while($result = mysql_fetch_assoc($query)){
                $arrayjson[] = $result;
        }
        echo json_encode($arrayjson);
    }else if($indi=="refresh"){
        $query=alltingkat();
         while($result = mysql_fetch_assoc($query)){
                $arrayjson[] = $result;
            }
        echo json_encode($arrayjson);
    }else if($indi=="edit"){
         $query=editprov($nisn_data, $nama_data, $st_data);
         if($query){
                echo json_encode("Edit data berhasil!");
         }else{
                echo json_encode("Edit data gagal!");
         }
    }else if($indi=="del"){
         $query=deltingkat($nisn_data_del);
         if($query){
                echo json_encode("Delete data berhasil!");
         }else{
                echo json_encode("Delete data gagal!");
         }
    }else if($indi=="input_data"){
         $query=inputTingkat($nama_data_in, $st_data_in, $lv_data_in);
         $id = tingnilmax();
         //echo json_encode($query);
         if($query){
                echo json_encode("Tambah data berhasil!-".$id);
         }else{
                echo json_encode("Tambah data gagal!-".$id);
         }
    }else{
         $query=editTingkat($nisn_data, $nama_data, $st_data, $lv_data);
         if($query){
                echo json_encode("Edit data berhasil!");
         }else{
                echo json_encode("Edit data gagal!");
         }
    }
    
   /* while($result = mysql_fetch_assoc($query)){
        $arrayjson[] = $result;
    }
    echo json_encode($arrayjson);*/
?>