<?php
//Function untuk tabel retail
require_once('../../lib/config.php');

function carikec($lokasi_kab, $lokasi_propinsi, $kunci, $kategori) {
        $sql="SELECT lokasi_ID, lokasi_kode, lokasi_nama, st, lokasi_propinsi, lokasi_kabupatenkota FROM inf_lokasi where lokasi_propinsi = '".$lokasi_propinsi."' AND lokasi_kabupatenkota = '".$lokasi_kab."'  AND lokasi_kecamatan != 0 AND lokasi_kelurahan = 0 AND $kategori LIKE '%$kunci%' ORDER BY lokasi_nama ASC";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}
function allkec($lokasi_kab, $lokasi_propinsi) {
        $sql="SELECT lokasi_ID, lokasi_kode, lokasi_nama, st, lokasi_propinsi, lokasi_kabupatenkota FROM inf_lokasi where lokasi_propinsi = '".$lokasi_propinsi."' AND lokasi_kabupatenkota = '".$lokasi_kab."'  AND lokasi_kecamatan != 0 AND lokasi_kelurahan = 0 ORDER BY lokasi_nama";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}

function editkec($nisn_data, $nama_data, $st_data) {
        $sql="UPDATE inf_lokasi SET  lokasi_nama = '".$nama_data."', st = '".$st_data."'  where  lokasi_kode = '".$nisn_data."'";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}
function delkec($nisn_data_del) {
        $sql="DELETE FROM inf_lokasi   where  lokasi_kode = '".$nisn_data_del."' ";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}

function kecnilmax($lokasi_kab, $lokasi_propinsi) {
        $sql="SELECT max(lokasi_kecamatan) FROM inf_lokasi where  lokasi_propinsi = '".$lokasi_propinsi."' AND lokasi_kabupatenkota = '".$lokasi_kab."' AND lokasi_kelurahan = 0";
        $qry=mysql_query($sql) or die(mysql_error());
        $lokasi = mysql_fetch_array($qry);
        $max_lokasi = $lokasi[0];
        $tata_lokasi = $lokasi_propinsi.".".$lokasi_kab.".".$max_lokasi.".0000";
        return $tata_lokasi;
}
function inputkec($lokasi_kab, $lokasi_propinsi, $nama_data_in, $st_data_in) {
        $sql="SELECT max(lokasi_kecamatan) FROM inf_lokasi where  lokasi_propinsi = '".$lokasi_propinsi."' AND lokasi_kabupatenkota = '".$lokasi_kab."'  AND lokasi_kelurahan = 0";
        $qry=mysql_query($sql) or die(mysql_error());
        $lokasi = mysql_fetch_array($qry);
        $max_lokasi = $lokasi[0]+1;
        $tata_lokasi = $lokasi_propinsi.".".$lokasi_kab.".".$max_lokasi.".0000";

        $sql2="INSERT INTO  inf_lokasi (lokasi_kode, lokasi_nama, lokasi_propinsi, lokasi_kabupatenkota, lokasi_kecamatan, lokasi_kelurahan, st) VALUES ('".$tata_lokasi."', '".$nama_data_in."', ".$lokasi_propinsi.", ".$lokasi_kab.", ".$max_lokasi.", 0, '".$st_data_in."')";
        $qry2=mysql_query($sql2) or die(mysql_error());
	return $qry2;
}
?>
