<?php
/*    if(isset($_POST['nomer'])){
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
    if(isset($_POST['dokumen'])){
        $dokumen = $_POST['dokumen'];
    }else{
        $dokumen = "";
    }

if (isset($_GET['add'])) {*/

    //upload
/*$folder = "../file/administrasi/";
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
//POST DATA*/
 /*   $qry="INSERT INTO `pengumuman_admis` (`no_beasiswa`, `tahun`, `judul`, `tgl`, `file`) VALUES ('$nomer', '$tahun', '$judul', '$tgl', '$dokumen')";
    $data=mysql_query($qry) or die(mysql_error());
    if($data) {
        ?>
        <script language="javascript"> alert('Data Berhasil Ditambahkan');
  document.location.href='?conten=penguad'</script>
  <?php
    } else {
               ?>
        <script language="javascript"> alert('Data Gagal Ditambahkan');
  document.location.href='?conten=penguad'</script>
  <?php
    }
*//*}
}else{
echo "File Type Should Be .Docx or .Pdf or .Rtf Or .Doc";
}

}*/
//}

?>

<?php
require_once ('../../mail/PHPMailerAutoload.php');
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
        $pecah_tgl = explode('/', $_POST['tgl']);
        $tgl = $pecah_tgl[2]."-".$pecah_tgl[1]."-".$pecah_tgl[0];
    }else{
        $tgl = "";
    }
    if(isset($_POST['dokumen'])){
        $dokumen = $_POST['dokumen'];
    }else{
        $dokumen = "";
    }



date_default_timezone_set("Asia/Jakarta");
$tanggal = date("Y-m-d");
$waktu = date("h:i:sa");

//$data = $email."-".$pass1;
$mail = new PHPMailer;
$mail->isSMTP();
//$mail->SMTPDebug = 1;
$mail->SMTPSecure = 'ssl';
//$mail->Debugoutput = 'html';
$mail->Host = "japfafoundation.org";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "beasiswa@japfafoundation.org";
$mail->Password = "langitbiru123456";
$mail->setFrom('beasiswa@japfafoundation.org','japfafoundation.org');
//tujuan
$q = mysql_query("SELECT nin,email FROM data_pendaftar WHERE st_admis = 'Y'  AND YEAR(tgl_daftar) = '$tahun' AND no_beasiswa = '$nomer'");

while ($qq= mysql_fetch_array($q)) {
    $mail->addAddress($qq[1],$qq[0]);
    }
$mail->Subject = "$judul";
$mail->msgHTML("<b>$dokumen</b>");
if (!$mail->send()) { ?>
    <script language="javascript"> 
    alert("Pengiriman gagal;");
    document.location.href="?conten=penguad";
</script>
<?php  } else { 
 $qry="INSERT INTO `pengumuman_admis` (`no_beasiswa`, `tahun`, `judul`, `tgl`, `file`) VALUES ('$nomer', '$tahun', '$judul', '$tgl', '$dokumen')";
    $data=mysql_query($qry) or die(mysql_error());
    ?>
    <script language="javascript"> 
    document.location.href="?conten=penguad";
</script><?php  
  }
?>
