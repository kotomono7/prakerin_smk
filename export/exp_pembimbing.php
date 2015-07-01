<?php
error_reporting(E_ALL);

require_once '../plugins/excel/PHPExcel.php';
require_once '../config/config.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

$query="select * from view_pembimbing";
$hasil=mysql_query($query);
 
// Set properties
$objPHPExcel->getProperties()->setCreator("Muhammad Khoirul Umam")
      ->setLastModifiedBy("Muhammad Khoirul Umam")
      ->setTitle("Backup Data Pembimbing")
      ->setSubject("Backup Data Pembimbing")
       ->setDescription("Data Pembimbing")
       ->setKeywords("Data Pembimbing")
       ->setCategory("Pembimbing");
 
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
       ->setCellValue('A1', 'No.')
       ->setCellValue('B1', 'ID Guru')
       ->setCellValue('C1', 'NIP')
	   ->setCellValue('D1', 'Nama Guru')
	   ->setCellValue('E1', 'L/P')
	   ->setCellValue('F1', 'No. HP/Telp.');
 
$baris=2;
$no=0;
$nomer=1;			
while($row=mysql_fetch_array($hasil)){
$no=$no+1;
$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris", $nomer)
     ->setCellValue("B$baris", $row['id_guru'])
     ->setCellValue("C$baris", $row['nip'])
	 ->setCellValue("D$baris", $row['nama'])
	 ->setCellValue("E$baris", $row['id_jenisklm'])
	 ->setCellValue("F$baris", $row['no_telpon']);
$baris = $baris + 1;
$nomer++;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Pembimbing');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Data Pembimbing.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
 