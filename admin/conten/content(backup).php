<?php

include("../../dbconnect.php");
if(isset($_GET['conten']))
{
	$conten=$_GET['conten'];
}
else
{
	$conten='home';
}
if ($conten=='home')
{
	
}
else if ($conten=='data_bea')
{
		include"data_beasiswa/data_beasiswa.php";
}
else if ($conten=='edit_bea')
{
		include"data_beasiswa/edit_data_beasiswa.php";
}
else if ($conten=='proses_edit_bea')
{
		include"data_beasiswa/proses_edit_data_beasiswa.php";
}
else if ($conten=='view_bea')
{
		include"data_beasiswa/view_data_beasiswa.php";
}
else if ($conten=='delete_bea')
{
		include"data_beasiswa/delete_data_beasiswa.php";
}
else if ($conten=='cari_bea')
{
		include"data_beasiswa/cari_data_beasiswa.php";
}
else if ($conten=='data_pendaftar')
{
		include"data_pendaftar/data_pendaftar.php";
}
else if ($conten=='data_lusad')
{
		include"data_lusad/data_lusad.php";
}
else if ($conten=='penguad')
{
		include"pengumuman_admis/pengumuman_admis.php";
}
else if ($conten=='in_hawa')
{
		include"in_hawa/in_hawa.php";
}
else if ($conten=='data_hawa')
{
		include"data_hawa/data_hawa.php";
}
else if ($conten=='data_luwa')
{
		include"data_luwa/data_luwa.php";
}
else if ($conten=='penguwa')
{
		include"penguwa/penguwa.php";
}
else if ($conten=='data_rekap')
{
		include"data_rekap/data_rekap.php";
}
else if ($conten=='data_penbe')
{
		include"data_penbe/data_penbe.php";
}
else if ($conten=='pengube')
{
		include"pengube/pengube.php";
}
else if ($conten=='input_bea')
{
		include"input_bea/input_bea.php";
}
else if ($conten=='proses_bea')
{
		include"input_bea/proses_input_bea.php";
}
else  
{
	echo "Tidak Ada Modul Yang Anda Pilih";
}

?>
