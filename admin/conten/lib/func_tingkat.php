<?php
//Function untuk tabel retail
require_once('../../lib/config.php');

function caritingkat($kunci, $kategori) {
        $sql="SELECT * FROM tingkat where $kategori LIKE '%$kunci%' ORDER BY nama_tingkat ASC";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}
function alltingkat() {
        $sql="SELECT * FROM tingkat ORDER BY nama_tingkat ASC";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}

function editTingkat($nisn_data, $nama_data, $st_data, $lv_data) {
        $sql2="UPDATE tingkat SET  nama_tingkat = '".$nama_data."', st = '".$st_data."', level = '".$lv_data."'  where  id_tingkat = '".$nisn_data."' ";
        $qry2=mysql_query($sql2) or die(mysql_error());
	return $qry2;
}
function deltingkat($nisn_data_del) {
        $sql="DELETE FROM tingkat   where  id_tingkat = '".$nisn_data_del."' ";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}

function tingnilmax() {
        $sql_id="SELECT max(id_tingkat) FROM tingkat";
        $qry_id=mysql_query($sql_id) or die(mysql_error());
        $tingkat_id = mysql_fetch_array($qry_id);
        $max_tingkat_id = $tingkat_id[0];
        $tambah_id = $max_tingkat_id + 1 ;
        $tata_lokasi_id = "";
        if(strlen($tambah_id)==1){
                $tata_lokasi_id="000".$tambah_id."";
        }else if(strlen($tambah_id)==2){
                $tata_lokasi_id="00".$tambah_id."";        
        }else if(strlen($tambah_id)==3){
                $tata_lokasi_id="0".$tambah_id."";
        }else{ 
                $tata_lokasi_id=$tambah_id;
        } 
        
	return $tata_lokasi_id;
}
function inputTingkat($nama_data_in, $st_data_in, $lv_data_in) {

        $tata_lokasi = tingnilmax();

        $sql2="INSERT INTO  tingkat (id_tingkat, nama_tingkat, level, st) VALUES ('".$tata_lokasi."', '".$nama_data_in."', '".$lv_data_in."','".$st_data_in."')";
        $qry2=mysql_query($sql2) or die(mysql_error());
	return $qry2;
}
?>
