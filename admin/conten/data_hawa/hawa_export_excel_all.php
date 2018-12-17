<?php 
ob_start();
ob_flush();
include '../../lib/config.php';
date_default_timezone_set("Asia/Jakarta");

$sql = mysql_query(
"SELECT
a.nama,
a.nin,
d.nama_tingkat,
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
data_ortu AS c,
tingkat AS d
WHERE
a.nin = b.nin AND
a.st_admis = 'Y' AND
a.st_wawan ='N' AND
b.nin = c.nin AND 
a.program_studi = d.id_tingkat ORDER BY  a.nama");

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
$object->getActiveSheet()->getColumnDimension('C')->setWidth(25);
$object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
$object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
$object->getActiveSheet()->getColumnDimension('F')->setWidth(20);
$object->getActiveSheet()->getColumnDimension('G')->setWidth(20);
$object->getActiveSheet()->getColumnDimension('H')->setWidth(20);
$object->getActiveSheet()->getColumnDimension('I')->setWidth(20);
$object->getActiveSheet()->getColumnDimension('J')->setWidth(20);
$object->getActiveSheet()->getColumnDimension('K')->setWidth(20);
$object->getActiveSheet()->getColumnDimension('L')->setWidth(30);
$object->getActiveSheet()->getColumnDimension('M')->setWidth(30);
$object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
$object->getActiveSheet()->getColumnDimension('O')->setWidth(30);
$object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
$object->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
$object->getActiveSheet()->getColumnDimension('R')->setWidth(35);
$object->getActiveSheet()->getColumnDimension('S')->setWidth(28);
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
$object->getActiveSheet()->getColumnDimension('AG')->setWidth(35);
$object->getActiveSheet()->getColumnDimension('AH')->setWidth(35);
$object->getActiveSheet()->getColumnDimension('AI')->setWidth(35);
$object->getActiveSheet()->getColumnDimension('AJ')->setWidth(35);
$object->getActiveSheet()->getColumnDimension('AK')->setWidth(90);
$object->getActiveSheet()->getColumnDimension('AL')->setWidth(90);
$object->getActiveSheet()->getColumnDimension('AM')->setWidth(105);
$object->getActiveSheet()->getColumnDimension('AN')->setWidth(35);
$object->getActiveSheet()->getColumnDimension('AO')->setWidth(35);
$object->getActiveSheet()->getColumnDimension('AP')->setWidth(35);
$object->getActiveSheet()->getColumnDimension('AQ')->setWidth(35);
$object->getActiveSheet()->getColumnDimension('AR')->setWidth(35);


$object->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No.')
            ->setCellValue('B1', 'Nama Lengkap')
			->setCellValue('C1', 'Nomer Induk Siswa Nasional')
            ->setCellValue('D1', 'Program Keahlian')
			->setCellValue('E1', 'Kelas')
            ->setCellValue('F1', 'Tempat Lahir')
            ->setCellValue('G1', 'Tanggal Lahir')
            ->setCellValue('H1', 'Alamat Tinggal Siswa')
			->setCellValue('I1', 'Kecamatan')
            ->setCellValue('J1', 'Kabupaten')
            ->setCellValue('K1', 'Provinsi')
			->setCellValue('L1', 'Nama Pemilik Rekening')
			->setCellValue('M1', 'Nomer Rekening bank')
			->setCellValue('N1', 'Nama Bank')
			->setCellValue('O1', 'Cabang')
			->setCellValue('P1', 'Nama Sekolah')
			->setCellValue('Q1', 'No Pokok Statistik Nasional')
			->setCellValue('R1', 'Alamat Sekolah')
			->setCellValue('S1', 'Kecamatan')
			->setCellValue('T1', 'Kabupaten')
			->setCellValue('U1', 'Provinsi')
			->setCellValue('V1', 'Kode Pos')
			->setCellValue('W1', 'Telepon Sekolah')
			->setCellValue('X1', 'Fax Sekolah')
			->setCellValue('Y1', 'Email Sekolah')
			->setCellValue('Z1', 'Nama Orang Tua')
			->setCellValue('AA1', 'Pekerjaan Orang Tua')
			->setCellValue('AB1', 'Alamat Tinggal Orang Tua')
			->setCellValue('AC1', 'Kecamatan')
			->setCellValue('AD1', 'Kabupaten')
			->setCellValue('AE1', 'Provinsi')
			->setCellValue('AF1', 'Telepon Orang Tua')
			->setCellValue('AG1', 'Nilai Rata - Rata Angka Raport Pengetahuan')
			->setCellValue('AH1', 'Nilai Rata - Rata Angka Raport Ketrampilan')
			->setCellValue('AI1', 'Nilai Rata - Rata Jumlah Prestasi Akademik')
			->setCellValue('AJ1', 'Nilai Rata - Rata Jumlah Prestasi Non Akademik')
			->setCellValue('AK1', '1. Ceritakan secara singkat latar belakang keluarga Anda.')
			->setCellValue('AL1', '2. Mengapa Anda tertarik untuk mengikuti Program Beasiswa Prestasi JAPFA Foundation - SMK?')
			->setCellValue('AM1', '3. Mengapa Anda memilih untuk bersekolah di Sekolah Menegah Kejuruan di bidang Agribisnis dan Agroteknologi?')
			->setCellValue('AN1', 'Nilai Wawancara 1')
			->setCellValue('AO1', 'Nilai Wawancara 2')
			->setCellValue('AP1', 'Nilai Wawancara 3')
			->setCellValue('AQ1', 'Nilai Wawancara 4')
			->setCellValue('AR1', 'Nilai Wawancara 5');
			
 
//add data
$counter=2;
$ex = $object->setActiveSheetIndex(0);
	while($d=mysql_fetch_array($sql)){      
          $ex->setCellValue("A".$counter,$counter-1);
          $ex->setCellValueExplicit("B".$counter,$d['0'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValueExplicit("C".$counter,$d['1'],PHPExcel_Cell_DataType::TYPE_STRING);
          $ex->setCellValue("D".$counter,$d['2']);
		  $ex->setCellValueExplicit("E".$counter,$d['3'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValue("F".$counter,$d['4']);
		  $ex->setCellValueExplicit("G".$counter,$d['5'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValue("H".$counter,$d['6']);
		  $ex->setCellValue("I".$counter,$d['7']);
		  $ex->setCellValue("J".$counter,$d['8']);
		  $ex->setCellValue("K".$counter,$d['9']);
		  $ex->setCellValue("L".$counter,$d['10']);
		  $ex->setCellValueExplicit("M".$counter,$d['11'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValue("N".$counter,$d['12']);
		  $ex->setCellValue("O".$counter,$d['13']);
		  $ex->setCellValue("P".$counter,$d['14']);
		  $ex->setCellValueExplicit("Q".$counter,$d['15'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValue("R".$counter,$d['16']);
		  $ex->setCellValue("S".$counter,$d['17']);
		  $ex->setCellValue("T".$counter,$d['18']);
		  $ex->setCellValue("U".$counter,$d['19']);
		  $ex->setCellValueExplicit("V".$counter,$d['20'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValueExplicit("W".$counter,$d['21'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValueExplicit("X".$counter,$d['22'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValue("Y".$counter,$d['23']);
		  $ex->setCellValue("Z".$counter,$d['24']);
		  $ex->setCellValue("AA".$counter,$d['25']);
		  $ex->setCellValue("AB".$counter,$d['26']);
		  $ex->setCellValue("AC".$counter,$d['27']);
		  $ex->setCellValue("AD".$counter,$d['28']);
		  $ex->setCellValue("AE".$counter,$d['29']);
		  $ex->setCellValueExplicit("AF".$counter,$d['30'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValueExplicit("AG".$counter,$d['31'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValueExplicit("AH".$counter,$d['32'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValueExplicit("AI".$counter,$d['33'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValueExplicit("AJ".$counter,$d['34'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValue("AK".$counter,$d['35']);
		  $ex->setCellValue("AL".$counter,$d['36']);
		  $ex->setCellValue("AM".$counter,$d['37']);
		  $ex->setCellValueExplicit("AN".$counter,$d['38'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValueExplicit("AO".$counter,$d['39'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValueExplicit("AP".$counter,$d['40'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValueExplicit("AQ".$counter,$d['41'],PHPExcel_Cell_DataType::TYPE_STRING);
		  $ex->setCellValueExplicit("AR".$counter,$d['42'],PHPExcel_Cell_DataType::TYPE_STRING);


          $counter++;           
}   


$object->getActiveSheet()->setTitle('Data Hasil Wawancara');
 
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$object->setActiveSheetIndex(0);
// Redirect output to a client’s web browser (Excel5) 
header('Content-Type: application/vnd.ms-excel'); 
$date = date('Ymd H:i:s');
header('Content-Disposition: attachment;filename="Data Hasil Wawancara All-'.$date.'.xls"'); 
$objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel5'); 
$objWriter->save('php://output');
ob_end_flush();

?>
<script type="text/javascript">
	alert("message?: DOMString");
</script>