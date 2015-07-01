<?php
error_reporting(E_ALL);

require_once '../plugins/excel/PHPExcel.php';
require_once '../config/config.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

$query="select * from view_siswa";
$hasil=mysql_query($query);
 
// Set properties
$objPHPExcel->getProperties()->setCreator("Muhammad Khoirul Umam")
      ->setLastModifiedBy("Muhammad Khoirul Umam")
      ->setTitle("Backup Data Siswa")
      ->setSubject("Backup Data Siswa")
       ->setDescription("Data Siswa")
       ->setKeywords("Data Siswa")
       ->setCategory("Siswa");
 
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
       ->setCellValue('A1', 'No.')
       ->setCellValue('B1', 'NIS')
       ->setCellValue('C1', 'Nama Siswa')
	   ->setCellValue('D1', 'L/P')
	   ->setCellValue('E1', 'Kelas')
	   ->setCellValue('F1', 'Jurusan')
	   ->setCellValue('G1', 'No. HP/Telp.')
	   ->setCellValue('H1', 'Alamat');
 
$baris=2;
$no=0;
$nomer=1;			
while($row=mysql_fetch_array($hasil)){
$no=$no+1;
$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris", $nomer)
     ->setCellValue("B$baris", $row['nis'])
     ->setCellValue("C$baris", $row['nama'])
	 ->setCellValue("D$baris", $row['id_jenisklm'])
	 ->setCellValue("E$baris", $row['nama_kelas'])
	 ->setCellValue("F$baris", $row['nm_jurusan'])
	 ->setCellValue("G$baris", $row['no_telpon'])
	 ->setCellValue("H$baris", $row['alamat']);
$baris = $baris + 1;
$nomer++;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Siswa');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Data Siswa.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
 