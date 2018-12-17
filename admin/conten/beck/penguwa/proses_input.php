<?php
    if(isset($_POST['nomer'])){
    	$nomer = $_POST['nomer'];
    }else{
    	$nomer = "";
    }
    if(isset($_POST['tahun'])){
    	$tahun = $_POST['tahun'];
    }else{
    	$tahun = "";
    }
    if(isset($_POST['judul'])){
    	$judul = $_POST['judul'];
    }else{
    	$judul = "";
    }
    if(isset($_POST['tgl'])){
    	$tgl = $_POST['tgl'];
    }else{
    	$tgl = "";
    }

if (isset($_GET['add'])) {

    //upload
$folder = "../file/wawancara/";
$temp = explode(".", $_FILES["file"]["name"]);
$newfilename = date('dmYHis').'.'. end($temp);
$db_path ="$folder".$newfilename  ;
$listtype = array(
'.doc'=>'application/msword',
'.docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
'.rtf'=>'application/rtf',
'.pdf'=>'application/pdf'); 
if ( is_uploaded_file( $_FILES['file']['tmp_name'] ) )
{
if($key = array_search($_FILES['file']['type'],$listtype))
{
    if (move_uploaded_file($_FILES['file']  ['tmp_name'],"$folder".$newfilename))
{
$file_name="$newfilename";
//POST DATA
    $qry="INSERT INTO `pengumuman_wawan` (`no_beasiswa`, `tahun`, `judul`, `tgl`, `file`) VALUES ('$nomer', '$tahun', '$judul', '$tgl', '$file_name')";
    $data=mysql_query($qry) or die(mysql_error());
    if($data) {
        ?>
        <script language="javascript"> alert('Data Berhasil Ditambahkan');
  document.location.href='?conten=penguwa'</script>
  <?php
    } else {
               ?>
        <script language="javascript"> alert('Data Gagal Ditambahkan');
  document.location.href='?conten=penguwa'</script>
  <?php
    }
}
}else{
echo "File Type Should Be .Docx or .Pdf or .Rtf Or .Doc";
}

}
}

?>