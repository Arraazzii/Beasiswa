<?php
		require_once "../admin/lib/config.php";

	if(isset($_GET['indi2'])){
        $indi2 = $_GET['indi2'];
    }else{
        $indi2='';
    }

    if(isset($_GET['no_bea'])){
        $no_bea = $_GET['no_bea'];
    }else{
        $no_bea='';
    }

	 if($indi2=="T"){
			$query=mysql_query("SELECT a.no_beasiswa AS no_beasiswa, a.index0 AS index0, a.spd0 AS spd0, a.index1 AS index1, a.spd1 AS spd1, a.index2 AS index2, a.spd2 AS spd2, a.index3 AS index3, a.spd3 AS spd3, a.poin1 AS poin1, a.poin2 AS poin2, a.poin3 AS poin3, a.poin4 AS poin4  FROM admis_nilai_ipk AS a, info_beasiswa AS b where b.st= 'Y' AND a.no_beasiswa = b.no_beasiswa AND a.no_beasiswa = '".$no_bea."'");
         while($result = mysql_fetch_assoc($query)){
                $arrayjson[] = $result;
        }
			echo json_encode($arrayjson);
    }else{
    	$query=mysql_query("SELECT a.no_beasiswa AS no_beasiswa, a.index0 AS index0, a.spd0 AS spd0, a.index1 AS index1, a.spd1 AS spd1, a.index2 AS index2, a.spd2 AS spd2, a.index3 AS index3, a.spd3 AS spd3, a.poin1 AS poin1, a.poin2 AS poin2, a.poin3 AS poin3, a.poin4 AS poin4  FROM admis_nilai_raport AS a, info_beasiswa AS b where b.st= 'Y' AND a.no_beasiswa = b.no_beasiswa AND a.no_beasiswa = '".$no_bea."'");
         while($result = mysql_fetch_assoc($query)){
                $arrayjson[] = $result;
        }
			echo json_encode($arrayjson);
    }
?>
