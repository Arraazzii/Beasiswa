<?php
//Function untuk tabel retail
require_once('../../lib/config.php');

function cariprov($kunci, $kategori) {
        $sql="SELECT lokasi_ID, lokasi_kode, lokasi_nama, st, lokasi_propinsi   FROM inf_lokasi where lokasi_kabupatenkota = 0 AND lokasi_kecamatan = 0 AND lokasi_kelurahan = 0 AND $kategori LIKE '%$kunci%' ORDER BY lokasi_nama ASC";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}
function allprov() {
        $sql="SELECT lokasi_ID, lokasi_kode, lokasi_nama, st, lokasi_propinsi  FROM inf_lokasi where lokasi_kabupatenkota = 0 AND lokasi_kecamatan = 0 AND lokasi_kelurahan = 0  ORDER BY lokasi_nama ASC";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}

function editprov($nisn_data, $nama_data, $st_data) {
        $sql="UPDATE inf_lokasi SET  lokasi_nama = '".$nama_data."', st = '".$st_data."'  where  lokasi_kode = '".$nisn_data."' AND lokasi_kabupatenkota = 0 AND lokasi_kecamatan = 0 AND lokasi_kelurahan = 0 ";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}
function delprov($nisn_data_del) {
        $sql="DELETE FROM inf_lokasi   where  lokasi_kode = '".$nisn_data_del."' AND lokasi_kabupatenkota = 0 AND lokasi_kecamatan = 0 AND lokasi_kelurahan = 0 ";
        $qry=mysql_query($sql) or die(mysql_error());
	return $qry;
}

function provnilmax() {
        $sql_id="SELECT max(lokasi_propinsi) FROM inf_lokasi where lokasi_kabupatenkota = 0 AND lokasi_kecamatan = 0 AND lokasi_kelurahan = 0";
        $qry_id=mysql_query($sql_id) or die(mysql_error());
        $lokasi_id = mysql_fetch_array($qry_id);
        $max_lokasi_id = $lokasi_id[0];
        $tata_lokasi_id = $max_lokasi_id.".00.00.0000";
	return $tata_lokasi_id;
}
function inputprov($nama_data_in, $st_data_in) {
        $sql="SELECT max(lokasi_propinsi) FROM inf_lokasi where lokasi_kabupatenkota = 0 AND lokasi_kecamatan = 0 AND lokasi_kelurahan = 0";
        $qry=mysql_query($sql) or die(mysql_error());
        $lokasi = mysql_fetch_array($qry);
        $max_lokasi = $lokasi[0]+1;
        $tata_lokasi = $max_lokasi.".00.00.0000";

        $sql2="INSERT INTO  inf_lokasi (lokasi_kode, lokasi_nama, lokasi_propinsi, lokasi_kabupatenkota, lokasi_kecamatan, lokasi_kelurahan, st) VALUES ('".$tata_lokasi."', '".$nama_data_in."', '".$max_lokasi."', 0, 0, 0, '".$st_data_in."')";
        $qry2=mysql_query($sql2) or die(mysql_error());
	return $qry2;
}
?>
