<?php
if(isset($_POST['id'])){
        $id = $_POST['id'];
    }else{
        $id ='';
    }

    if(isset($_POST['nil_1'])){
        $nil_1 = $_POST['nil_1'];
    }else{
        $nil_1 ='';
    }
    if(isset($_POST['nil_2'])){
        $nil_2 = $_POST['nil_2'];
    }else{
        $nil_2 ='';
    }
    if(isset($_POST['nil_3'])){
        $nil_3 = $_POST['nil_3'];
    }else{
        $nil_3 ='';
    }
    if(isset($_POST['nil_4'])){
        $nil_4 = $_POST['nil_4'];
    }else{
        $nil_4 ='';
    }
    if(isset($_POST['nil_5'])){
        $nil_5 = $_POST['nil_5'];
    }else{
        $nil_5 ='';
    }
    $ponit_wa1 =0;
    $ponit_wa2 =0;
    $ponit_wa3 =0;
    $ponit_wa4 =0;
    $ponit_wa5 =0;
    $sql_nobea="SELECT * FROM info_beasiswa WHere st = 'Y'";
$qry_nobea=mysql_query($sql_nobea) or die(mysql_error());
$nilai_nobea = mysql_fetch_array($qry_nobea);

$sql_wa1="SELECT * FROM wawan_nilkat1 WHERE no_beasiswa = '".$nilai_nobea['no_beasiswa']."' " ;
$qry_wa1=mysql_query($sql_wa1) or die(mysql_error());
$nilai_wa1 = mysql_fetch_array($qry_wa1);

if ($nilai_wa1[1]<=$nil_1 &&  $nilai_wa1[2]>=$nil_1){
    $ponit_wa1 = 20; 
}
else if ($nilai_wa1[3]<=$nil_1 &&  $nilai_wa1[4]>=$nil_1){
    $ponit_wa1 = 40; 
}
else if ($nilai_wa1[5]<=$nil_1 &&  $nilai_wa1[6]>=$nil_1){
    $ponit_wa1 = 60; 
}
else {
    $ponit_wa1 = 80; 
}
//($nilai_wa1[7]<=$nil_1 &&  $nilai_wa1[8]>=$nil_1)

$sql_wa2="SELECT * FROM wawan_nilkat2 WHERE no_beasiswa = '".$nilai_nobea['no_beasiswa']."' " ;
$qry_wa2=mysql_query($sql_wa2) or die(mysql_error());
$nilai_wa2 = mysql_fetch_array($qry_wa2);

if ($nilai_wa2[1]<=$nil_2 &&  $nilai_wa2[2]>=$nil_2){
    $ponit_wa2 = 20; 
}
else if ($nilai_wa2[3]<=$nil_2 &&  $nilai_wa2[4]>=$nil_2){
    $ponit_wa2 = 40; 
}
else if ($nilai_wa2[5]<=$nil_2 &&  $nilai_wa2[6]>=$nil_2){
    $ponit_wa2 = 60; 
}
else {
    $ponit_wa2 = 80; 
}
//($nilai_wa2[7]<=$nil_2 &&  $nilai_wa2[8]>=$nil_2)

$sql_wa3="SELECT * FROM wawan_nilkat3 WHERE no_beasiswa = '".$nilai_nobea['no_beasiswa']."' " ;
$qry_wa3=mysql_query($sql_wa3) or die(mysql_error());
$nilai_wa3 = mysql_fetch_array($qry_wa3);

if ($nilai_wa3[1]<=$nil_3 &&  $nilai_wa3[2]>=$nil_3){
    $ponit_wa3 = 20; 
}
else if ($nilai_wa3[3]<=$nil_3 &&  $nilai_wa3[4]>=$nil_3){
    $ponit_wa3 = 40; 
}
else if ($nilai_wa3[5]<=$nil_3 &&  $nilai_wa3[6]>=$nil_3){
    $ponit_wa3 = 60; 
}
else {
    $ponit_wa3 = 80; 
}

//if ($nilai_wa3[7]<=$nil_3 &&  $nilai_wa3[8]>=$nil_3)

$sql_wa4="SELECT * FROM wawan_nilkat4 WHERE no_beasiswa = '".$nilai_nobea['no_beasiswa']."' " ;
$qry_wa4=mysql_query($sql_wa4) or die(mysql_error());
$nilai_wa4 = mysql_fetch_array($qry_wa4);

if ($nilai_wa4[1]<=$nil_4 &&  $nilai_wa4[2]>=$nil_4){
    $ponit_wa4 = 20; 
}
else if ($nilai_wa4[3]<=$nil_4 &&  $nilai_wa4[4]>=$nil_4){
    $ponit_wa4 = 40; 
}
else if ($nilai_wa4[5]<=$nil_4 &&  $nilai_wa4[6]>=$nil_4){
    $ponit_wa4 = 60; 
}
else {
    $ponit_wa4 = 80; 
}

//if ($nilai_wa4[7]<=$nil_4 &&  $nilai_wa4[8]>=$nil_4)
$sql_wa5="SELECT * FROM wawan_nilkat5 WHERE no_beasiswa = '".$nilai_nobea['no_beasiswa']."' " ;
$qry_wa5=mysql_query($sql_wa5) or die(mysql_error());
$nilai_wa5 = mysql_fetch_array($qry_wa5);

if ($nilai_wa5[1]<=$nil_5 &&  $nilai_wa5[2]>=$nil_5){
    $ponit_wa5 = 20; 
}
else if ($nilai_wa5[3]<=$nil_5 &&  $nilai_wa5[4]>=$nil_5){
    $ponit_wa5 = 40; 
}
else if ($nilai_wa5[5]<=$nil_5 && $nilai_wa5[6]>=$nil_5){
    $ponit_wa5 = 60; 
}
else {
    $ponit_wa5 = 80; 
}
//if ($nilai_wa5[7]<=$nil_5 &&  $nilai_wa5[8]>=$nil_5)

$total = $ponit_wa1 + $ponit_wa2 + $ponit_wa3 + $ponit_wa4 + $ponit_wa5; 

$sql3="SELECT * FROM nilai_minimum WHERE no_beasiswa = '".$nilai_nobea['no_beasiswa']."' ";
$qry3=mysql_query($sql3) or die(mysql_error());
$nilai2 = mysql_fetch_array($qry3);
$sta="";

if($total <= $nilai2[2]){
  $sta = "N";
}else{
  $sta = "Y";
}


     $sql="UPDATE data_pendaftar SET nilai_wa1 = '$ponit_wa1', nilai_wa2 = '$ponit_wa2', nilai_wa3 = '$ponit_wa3',  nilai_wa4 = '$ponit_wa4', nilai_wa5 = '$ponit_wa5', st_wawan =  '$sta'  WHERE nin = '$id' ";
    $exe_que=mysql_query($sql);
    $sql2="UPDATE nilai_wawancara SET nilai1 = '$nil_1', nilai2 = '$nil_2', nilai3 = '$nil_3',  nilai4 = '$nil_4', nilai5 = '$nil_5' WHERE nin = '$id' ";
    $exe_que2=mysql_query($sql2);
?>
  <script language="javascript"> 
    document.location.href='index.php?conten=in_hawa';
</script>
<?php 
?>