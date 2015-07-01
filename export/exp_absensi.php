<?php
error_reporting(E_ALL);

require_once '../plugins/excel/PHPExcel.php';
require_once '../config/config.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

$query="select * from view_absensi";
$hasil=mysql_query($query);
 
// Set properties
$objPHPExcel->getProperties()->setCreator("Muhammad Khoirul Umam")
      ->setLastModifiedBy("Muhammad Khoirul Umam")
      ->setTitle("Backup Data Absensi Siswa")
      ->setSubject("Backup Data Absensi Siswa")
       ->setDescription("Data Absensi Siswa")
       ->setKeywords("Data Absensi Siswa")
       ->setCategory("Absensi Siswa");
 
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
       ->setCellValue('A1', 'No.')
       ->setCellValue('B1', 'Nama DU/DI')
       ->setCellValue('C1', 'NIS')
	   ->setCellValue('D1', 'Nama Siswa')
	   ->setCellValue('E1', 'Tanggal')
	   ->setCellValue('F1', 'Masuk')
	   ->setCellValue('G1', 'Keterangan');
 
$baris=2;
$no=0;
$nomer=1;			
while($row=mysql_fetch_array($hasil)){
$no=$no+1;
$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris", $nomer)
     ->setCellValue("B$baris", $row['nama_dudi'])
     ->setCellValue("C$baris", $row['nis'])
	 ->setCellValue("D$baris", $row['nama'])
	 ->setCellValue("E$baris", $row['tgl'])
	 ->setCellValue("F$baris", $row['masuk'])
	 ->setCellValue("G$baris", $row['keterangan']);
$baris = $baris + 1;
$nomer++;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Absensi Siswa');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Data Absensi Siswa.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>