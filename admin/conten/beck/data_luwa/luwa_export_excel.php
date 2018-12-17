<?php 

ob_start();

ob_flush();

include '../../lib/config.php';

date_default_timezone_set("Asia/Jakarta");

$di_daf = mysql_real_escape_string($_POST['di_daf']);

$di_daf = trim($di_daf);



$sql = mysql_query(

"SELECT

a.nama,

a.nin,

a.bidang_keahlian,

a.program_studi,

a.kls,

a.tempat,

a.tgl_la,

a.alamat,

a.kec,

a.kab,

a.prov,

a.pemil_rek,

a.no_rek,

a.nama_bank,

a.cabang,

b.nama_sekolah,

b.npsn,

b.alamat,

b.kec,

b.kab,

b.prov,

b.kode_pos,

b.telp,

b.fax,

b.email,

c.nama,

c.pekerjaan,

c.alamat,

c.kec,

c.kab,

c.prov,

c.telp,

a.nilai_ak,

a.nilai_ket,

a.nilai_jpa,

a.nilai_jpna,

a.esai1,

a.esai2,

a.esai3,

a.nilai_wa1,

a.nilai_wa2,

a.nilai_wa3,

a.nilai_wa4,

a.nilai_wa5

FROM

data_pendaftar AS a ,

data_sekolah AS b ,

data_ortu AS c

WHERE

a.nin = b.nin AND

a.st_admis = 'Y' AND

a.st_wawan ='Y' AND

b.nin = c.nin AND

c.nin = '".$di_daf."'

");



require_once '../../lib/phpexcel/PHPExcel.php';

 $object = new PHPExcel();



// Set properties

$object->getProperties()->setCreator("Admin")

               ->setLastModifiedBy("Admin")

               ->setCategory("Download by Admin")

               ->setTitle('Data Calon Penerima');

			   

// Add some data

$object->getActiveSheet()->getColumnDimension('A')->setWidth(10);

$object->getActiveSheet()->getColumnDimension('B')->setWidth(30);

$object->getActiveSheet()->getColumnDimension('C')->setWidth(26);

$object->getActiveSheet()->getColumnDimension('D')->setWidth(25);

$object->getActiveSheet()->getColumnDimension('E')->setWidth(20);

$object->getActiveSheet()->getColumnDimension('F')->setWidth(20);

$object->getActiveSheet()->getColumnDimension('G')->setWidth(20);

$object->getActiveSheet()->getColumnDimension('H')->setWidth(20);

$object->getActiveSheet()->getColumnDimension('I')->setWidth(20);

$object->getActiveSheet()->getColumnDimension('J')->setWidth(20);

$object->getActiveSheet()->getColumnDimension('K')->setWidth(20);

$object->getActiveSheet()->getColumnDimension('L')->setWidth(20);

$object->getActiveSheet()->getColumnDimension('M')->setWidth(30);

$object->getActiveSheet()->getColumnDimension('N')->setWidth(30);

$object->getActiveSheet()->getColumnDimension('O')->setWidth(20);

$object->getActiveSheet()->getColumnDimension('P')->setWidth(30);

$object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);

$object->getActiveSheet()->getColumnDimension('R')->setWidth(30);

$object->getActiveSheet()->getColumnDimension('S')->setWidth(35);

$object->getActiveSheet()->getColumnDimension('T')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('U')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('V')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('W')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('X')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('Y')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('Z')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('AA')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('AB')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('AC')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('AD')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('AE')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('AF')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('AG')->setWidth(28);

$object->getActiveSheet()->getColumnDimension('AH')->setWidth(35);

$object->getActiveSheet()->getColumnDimension('AI')->setWidth(35);

$object->getActiveSheet()->getColumnDimension('AJ')->setWidth(35);

$object->getActiveSheet()->getColumnDimension('AK')->setWidth(35);

$object->getActiveSheet()->getColumnDimension('AL')->setWidth(90);

$object->getActiveSheet()->getColumnDimension('AM')->setWidth(90);

$object->getActiveSheet()->getColumnDimension('AN')->setWidth(105);

$object->getActiveSheet()->getColumnDimension('AO')->setWidth(35);

$object->getActiveSheet()->getColumnDimension('AP')->setWidth(35);

$object->getActiveSheet()->getColumnDimension('AQ')->setWidth(35);

$object->getActiveSheet()->getColumnDimension('AR')->setWidth(35);

$object->getActiveSheet()->getColumnDimension('AS')->setWidth(35);





$object->setActiveSheetIndex(0)

            ->setCellValue('A1', 'No.')

            ->setCellValue('B1', 'Nama Lengkap')

			->setCellValue('C1', 'Nomer Induk Siswa Nasional')

            ->setCellValue('D1', 'Bidang Keahlian')

            ->setCellValue('E1', 'Program Keahlian')

			->setCellValue('F1', 'Kelas')

            ->setCellValue('G1', 'Tempat Lahir')

            ->setCellValue('H1', 'Tanggal Lahir')

            ->setCellValue('I1', 'Alamat Tinggal Siswa')

			->setCellValue('J1', 'Kecamatan')

            ->setCellValue('K1', 'Kabupaten')

            ->setCellValue('L1', 'Provinsi')

			->setCellValue('M1', 'Nama Pemilik Rekening')

			->setCellValue('N1', 'Nomer Rekening bank')

			->setCellValue('O1', 'Nama Bank')

			->setCellValue('P1', 'Cabang')

			->setCellValue('Q1', 'Nama Sekolah')

			->setCellValue('R1', 'No Pokok Statistik Nasional')

			->setCellValue('S1', 'Alamat Sekolah')

			->setCellValue('T1', 'Kecamatan')

			->setCellValue('U1', 'Kabupaten')

			->setCellValue('V1', 'Provinsi')

			->setCellValue('W1', 'Kode Pos')

			->setCellValue('X1', 'Telepon Sekolah')

			->setCellValue('Y1', 'Fax Sekolah')

			->setCellValue('Z1', 'Email Sekolah')

			->setCellValue('AA1', 'Nama Orang Tua')

			->setCellValue('AB1', 'Pekerjaan Orang Tua')

			->setCellValue('AC1', 'Alamat Tinggal Orang Tua')

			->setCellValue('AD1', 'Kecamatan')

			->setCellValue('AE1', 'Kabupaten')

			->setCellValue('AF1', 'Provinsi')

			->setCellValue('AG1', 'Telepon Orang Tua')

			->setCellValue('AH1', 'Nilai Rata - Rata Angka Raport Pengetahuan')

			->setCellValue('AI1', 'Nilai Rata - Rata Angka Raport Ketrampilan')

			->setCellValue('AJ1', 'Nilai Rata - Rata Jumlah Prestasi Akademik')

			->setCellValue('AK1', 'Nilai Rata - Rata Jumlah Prestasi Non Akademik')

			->setCellValue('AL1', '1. Ceritakan secara singkat latar belakang keluarga Anda.')

			->setCellValue('AM1', '2. Mengapa Anda tertarik untuk mengikuti Program Beasiswa Prestasi JAPFA Foundation - SMK?')

			->setCellValue('AN1', '3. Mengapa Anda memilih untuk bersekolah di Sekolah Menegah Kejuruan di bidang Agribisnis dan Agroteknologi?')

			->setCellValue('AO1', 'Nilai Wawancara 1')

			->setCellValue('AP1', 'Nilai Wawancara 2')

			->setCellValue('AQ1', 'Nilai Wawancara 3')

			->setCellValue('AR1', 'Nilai Wawancara 4')

			->setCellValue('AS1', 'Nilai Wawancara 5');

			

 

//add data

$counter=2;

$ex = $object->setActiveSheetIndex(0);

	while($d=mysql_fetch_array($sql)){      

          $ex->setCellValue("A".$counter,$counter-1);

          $ex->setCellValueExplicit("B".$counter,$d['0'],PHPExcel_Cell_DataType::TYPE_STRING);

		  $ex->setCellValueExplicit("C".$counter,$d['1'],PHPExcel_Cell_DataType::TYPE_STRING);

          $ex->setCellValue("D".$counter,$d['2']);

		  $ex->setCellValue("E".$counter,$d['3']);

		  $ex->setCellValue("F".$counter,$d['4']);

		  $ex->setCellValue("G".$counter,$d['5']);

		  $ex->setCellValue("H".$counter,$d['6']);

		  $ex->setCellValue("I".$counter,$d['7']);

		  $ex->setCellValue("J".$counter,$d['8']);

		  $ex->setCellValue("K".$counter,$d['9']);

		  $ex->setCellValue("L".$counter,$d['10']);

		  $ex->setCellValue("M".$counter,$d['11']);

		  $ex->setCellValue("N".$counter,$d['12']);

		  $ex->setCellValue("O".$counter,$d['13']);

		  $ex->setCellValue("P".$counter,$d['14']);

		  $ex->setCellValue("Q".$counter,$d['15']);

		  $ex->setCellValue("R".$counter,$d['16']);

		  $ex->setCellValue("S".$counter,$d['17']);

		  $ex->setCellValue("T".$counter,$d['18']);

		  $ex->setCellValue("U".$counter,$d['19']);

		  $ex->setCellValue("V".$counter,$d['20']);

		  $ex->setCellValue("W".$counter,$d['21']);

		  $ex->setCellValue("X".$counter,$d['22']);

		  $ex->setCellValue("Y".$counter,$d['23']);

		  $ex->setCellValue("Z".$counter,$d['24']);

		  $ex->setCellValue("AA".$counter,$d['25']);

		  $ex->setCellValue("AB".$counter,$d['26']);

		  $ex->setCellValue("AC".$counter,$d['27']);

		  $ex->setCellValue("AD".$counter,$d['28']);

		  $ex->setCellValue("AE".$counter,$d['29']);

		  $ex->setCellValue("AF".$counter,$d['30']);

		  $ex->setCellValue("AG".$counter,$d['31']);

		  $ex->setCellValue("AH".$counter,$d['32']);

		  $ex->setCellValue("AI".$counter,$d['33']);

		  $ex->setCellValue("AJ".$counter,$d['34']);

		  $ex->setCellValue("AK".$counter,$d['35']);

		  $ex->setCellValue("AL".$counter,$d['36']);

		  $ex->setCellValue("AM".$counter,$d['37']);

		  $ex->setCellValue("AN".$counter,$d['38']);

		  $ex->setCellValue("AO".$counter,$d['39']);

		  $ex->setCellValue("AP".$counter,$d['40']);

		  $ex->setCellValue("AQ".$counter,$d['41']);

		  $ex->setCellValue("AR".$counter,$d['42']);

		  $ex->setCellValue("AS".$counter,$d['43']);





          $counter++;           

}   





$object->getActiveSheet()->setTitle('Data Lulus Wawancara');

 

 

// Set active sheet index to the first sheet, so Excel opens this as the first sheet

$object->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Excel5) 

header('Content-Type: application/vnd.ms-excel'); 

$date = date('Ymd H:i:s');

header('Content-Disposition: attachment;filename="Data Lulus Wawancara-'.$date.'.xls"'); 

$objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel5'); 

$objWriter->save('php://output');

ob_end_flush();



?>

<script type="text/javascript">

	alert("message?: DOMString");

</script>