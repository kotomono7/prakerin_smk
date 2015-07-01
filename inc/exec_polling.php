<?php
ob_start();

$polling=$_POST['polling'];
$query=mysql_query("select * from polling");
$data=mysql_fetch_array($query);

if($polling=='sangat_bagus') {
	$nilai=$data['sangat_bagus']+1;
	mysql_query("update polling set sangat_bagus='$nilai'");
	echo "<script>alert('Terima kasih atas jawaban Anda')</script>";
	echo '<script type="text/javascript">window.location="?page=polling_line"</script>';
} else if($polling=='bagus') {
	$nilai=$data['bagus']+1;
	mysql_query("update polling set bagus='$nilai'");
	echo "<script>alert('Terima kasih atas jawaban Anda')</script>";
	echo '<script type="text/javascript">window.location="?page=polling_line"</script>';
} else if($polling=='sedang') {
	$nilai=$data['sedang']+1;
	mysql_query("update polling set sedang='$nilai'");
	echo "<script>alert('Terima kasih atas jawaban Anda')</script>";
	echo '<script type="text/javascript">window.location="?page=polling_line"</script>';
} else {
	$nilai=$data['tidak_tahu']+1;
	mysql_query("update polling set tidak_tahu='$nilai'");
	echo "<script>alert('Terima kasih atas jawaban Anda')</script>";
	echo '<script type="text/javascript">window.location="?page=polling_line"</script>';
}

ob_end_flush();
?>