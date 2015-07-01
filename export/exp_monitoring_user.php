<?php
session_start();
error_reporting(E_ALL);

require_once '../plugins/excel/PHPExcel.php';
require_once '../config/config.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$x=mysql_query("select * from guru where username='$user'");
		$y=mysql_fetch_array($x);
		$id_guru=$y['id_guru'];
}

$query="select * from view_monitoring where id_guru='$id_guru' order by id_monitoring";
$hasil=mysql_query($query);
 
// Set properties
$objPHPExcel->getProperties()->setCreator("Muhammad Khoirul Umam")
      ->setLastModifiedBy("Muhammad Khoirul Umam")
      ->setTitle("Backup Data Monitoring")
      ->setSubject("Backup Data Monitoring")
       ->setDescription("Data Monitoring")
       ->setKeywords("Data Monitoring")
       ->setCategory("Monitoring");
 
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
       ->setCellValue('A1', 'No.')
       ->setCellValue('B1', 'Tanggal')
       ->setCellValue('C1', 'ID Guru')
	   ->setCellValue('D1', 'Nama DU/DI')
	   ->setCellValue('E1', 'Alamat')
	   ->setCellValue('F1', 'Jenis Kegiatan')
	   ->setCellValue('G1', 'Krtik & Saran');
 
$baris=2;
$no=0;
$nomer=1;			
while($row=mysql_fetch_array($hasil)){
$no=$no+1;
$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris", $nomer)
     ->setCellValue("B$baris", $row['tgl'])
     ->setCellValue("C$baris", $row['id_guru'])
	 ->setCellValue("D$baris", $row['nama_dudi'])
	 ->setCellValue("E$baris", $row['alamat'])
	 ->setCellValue("F$baris", $row['jns_keg'])
	 ->setCellValue("G$baris", $row['kritik_saran']);
$baris = $baris + 1;
$nomer++;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Monitoring');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Data Monitoring Perguru.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>