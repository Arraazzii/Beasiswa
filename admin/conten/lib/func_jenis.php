<?php
//Function untuk tabel retail
require_once('../../lib/config.php');

function check($id, $id_jenis) {
        $sql="INSERT INTO  jenis_det (id_jenis,id_tingkat) VALUES ('".$id_jenis."', '".$id."')";
        $qry=mysql_query($sql) or die(mysql_error());
        return $qry;
}

function uncheck($id, $id_jenis) {
        $sql="DELETE FROM jenis_det WHERE id_jenis = '".$id_jenis."' AND id_tingkat = '".$id."'";
        $qry=mysql_query($sql) or die(mysql_error());
        return $qry;
}function caritingkat($kunci, $kategori,$id_jenis) {
        $sql="SELECT a.id_tingkat AS id_tingkat, a.nama_tingkat AS nama_tingkat, a.level AS level, a.st AS st, (SELECT COUNT(*) FROM jenis_det AS b WHERE b.id_jenis = '".$id_jenis."' AND b.id_tingkat = a.id_tingkat) AS jum FROM tingkat AS a  where $kategori LIKE '%$kunci%' ORDER BY a.nama_tingkat ASC";
        $qry=mysql_query($sql) or die(mysql_error());
        return $qry;
}function alltingkat($id_jenis) {
        $sql="SELECT a.id_tingkat AS id_tingkat, a.nama_tingkat AS nama_tingkat, a.level AS level, a.st AS st, (SELECT COUNT(*) FROM jenis_det AS b WHERE b.id_jenis = '".$id_jenis."' AND b.id_tingkat = a.id_tingkat) AS jum FROM tingkat AS a  ORDER BY a.nama_tingkat ASC";
        $qry=mysql_query($sql) or die(mysql_error());
        return $qry;
}function cariJenis($kunci, $kategori) {
        $sql="SELECT * FROM jenis  where $kategori LIKE '%$kunci%' ORDER BY nama_jenis ASC";
        $qry=mysql_query($sql) or die(mysql_error());
        return $qry;
}function alljenis() {
        $sql="SELECT * FROM jenis ORDER BY nama_jenis ASC";
        $qry=mysql_query($sql) or die(mysql_error());
        return $qry;
}function jenismax() {
        $sql_id="SELECT max(id_jenis) FROM jenis";
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
function inputJenis($nama_data_in, $st_data_in) {

        $tata_lokasi = jenismax();

        $sql2="INSERT INTO  jenis (id_jenis, nama_jenis, st) VALUES ('".$tata_lokasi."', '".$nama_data_in."', '".$st_data_in."')";
        $qry2=mysql_query($sql2) or die(mysql_error());
        return $qry2;
}
function editJenis($nisn_data, $nama_data, $st_data) {
        $sql2="UPDATE jenis SET  nama_jenis = '".$nama_data."', st = '".$st_data."'  where  id_jenis = '".$nisn_data."' ";
        $qry2=mysql_query($sql2) or die(mysql_error());
        return $qry2;
}function delJenis($nisn_data_del) {
        $sql="DELETE FROM jenis   where  id_jenis = '".$nisn_data_del."' ";
        $qry=mysql_query($sql) or die(mysql_error());
        return $qry;
}
/*function caritingkat($kunci, $kategori) {
        $sql="SELECT * FROM tingkat where $kategori LIKE '%$kunci%' ORDER BY nama_tingkat ASC";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}
function alltingkat() {
        $sql="SELECT * FROM tingkat ORDER BY nama_tingkat ASC";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}*/
?>
