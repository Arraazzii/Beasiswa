<?php
    require_once "../lib/func_kec.php";
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
    if(isset($_GET['lokasi_propinsi'])){
        $lokasi_propinsi = $_GET['lokasi_propinsi'];
    }else{
        $lokasi_propinsi='';
    }
    if(isset($_GET['lokasi_kab'])){
        $lokasi_kab = $_GET['lokasi_kab'];
    }else{
        $lokasi_kab='';
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


    $query = "";
    if($indi=="cari"){
        $query=carikec($lokasi_kab, $lokasi_propinsi, $kunci, $kategori);
         while($result = mysql_fetch_assoc($query)){
                $arrayjson[] = $result;
        }
        echo json_encode($arrayjson);
    }else if($indi=="refresh"){
        $query=allkec($lokasi_kab, $lokasi_propinsi);
         while($result = mysql_fetch_assoc($query)){
                $arrayjson[] = $result;
            }
        echo json_encode($arrayjson);
    }else if($indi=="edit"){
         $query=editkec($nisn_data, $nama_data, $st_data);
         if($query){
                echo json_encode("Edit data berhasil!");
         }else{
                echo json_encode("Edit data gagal!");
         }
    }else if($indi=="del"){
         $query=delkec($nisn_data_del);
         if($query){
                echo json_encode("Delete data berhasil!");
         }else{
                echo json_encode("Delete data gagal!");
         }
    }else if($indi=="input_data"){
         $query=inputkec($lokasi_kab, $lokasi_propinsi, $nama_data_in, $st_data_in);
         $id = kecnilmax($lokasi_kab, $lokasi_propinsi);
         //echo json_encode($query);
         if($query){
                echo json_encode("Tambah data berhasil!-".$id);
         }else{
                echo json_encode("Tambah data gagal!-".$id);
         }
    }
    
   /* while($result = mysql_fetch_assoc($query)){
        $arrayjson[] = $result;
    }
    echo json_encode($arrayjson);*/
?>