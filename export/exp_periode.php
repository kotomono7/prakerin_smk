<?php
error_reporting(E_ALL);

require_once '../plugins/excel/PHPExcel.php';
require_once '../config/config.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

$query="select * from periode";
$hasil=mysql_query($query);
 
// Set properties
$objPHPExcel->getProperties()->setCreator("Muhammad Khoirul Umam")
      ->setLastModifiedBy("Muhammad Khoirul Umam")
      ->setTitle("Backup Data Periode")
      ->setSubject("Backup Data Periode")
       ->setDescription("Data Periode")
       ->setKeywords("Data Periode")
       ->setCategory("Periode");
 
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
       ->setCellValue('A1', 'No.')
       ->setCellValue('B1', 'Nama Periode')
       ->setCellValue('C1', 'Tgl Berangkat')
	   ->setCellValue('D1', 'Tgl Kembali')
	   ->setCellValue('E1', 'Thn Angkatan')
	   ->setCellValue('F1', 'Jumlah Kelas');
 
$baris=2;
$no=0;
$nomer=1;			
while($row=mysql_fetch_array($hasil)){
$no=$no+1;
$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris", $nomer)
     ->setCellValue("B$baris", $row['nama_periode'])
     ->setCellValue("C$baris", $row['tgl_berangkat'])
	 ->setCellValue("D$baris", $row['tgl_kembali'])
	 ->setCellValue("E$baris", $row['thn_angkatan'])
	 ->setCellValue("F$baris", $row['jml_kelas']);
$baris = $baris + 1;
$nomer++;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Periode');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Data Periode.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
 