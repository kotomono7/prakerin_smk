<?php
session_start();
error_reporting(E_ALL);

require_once '../plugins/excel/PHPExcel.php';
require_once '../config/config.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
	$level=$_SESSION['level'];

	if ($level=='admin') {
		$key="admin";
		$query="select * from user where level='$key' order by nama_dpn";
	} else if ($level=="superuser") {
		$query="select * from user order by nama_dpn";
	}
}

$hasil=mysql_query($query);
 
// Set properties
$objPHPExcel->getProperties()->setCreator("Muhammad Khoirul Umam")
      ->setLastModifiedBy("Muhammad Khoirul Umam")
      ->setTitle("Backup Data Administrator")
      ->setSubject("Backup Data Administrator")
       ->setDescription("Data Administrator")
       ->setKeywords("Data Administrator")
       ->setCategory("Administrator");
 
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
       ->setCellValue('A1', 'No.')
       ->setCellValue('B1', 'Nama Lengkap')
       ->setCellValue('C1', 'L/P')
	   ->setCellValue('D1', 'Tanggal Lahir')
	   ->setCellValue('E1', 'Username')
	   ->setCellValue('F1', 'Password')
	   ->setCellValue('G1', 'E-mail');
 
$baris=2;
$no=0;
$nomer=1;			
while($row=mysql_fetch_array($hasil)){
$no=$no+1;
$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris", $nomer)
     ->setCellValue("B$baris", $row['nama_dpn']." ".$row['nama_blkng'])
     ->setCellValue("C$baris", $row['id_jenisklm'])
	 ->setCellValue("D$baris", $row['tgl_lahir'])
	 ->setCellValue("E$baris", $row['username'])
	 ->setCellValue("F$baris", $row['password'])
	 ->setCellValue("G$baris", $row['email']);
$baris = $baris + 1;
$nomer++;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Administrator');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Data Administrator.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>