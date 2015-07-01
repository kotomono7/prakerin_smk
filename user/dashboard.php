<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$user=$_SESSION['user'];
	$level=$_SESSION['level'];
?>

<div style="width: 700px; float: left; margin: 15px 0 0 15px;">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center">
<?php
	if ($level=='superuser') {
?>
<h2>Control Panel</h2>
<?php
	} else {
?>
<h2>Panel Admin</h2>
<?php
	}
?>
<fieldset id="control">
<legend align="center"><span style="font-size: 14px;">MENU ADMINISTRATOR</b></i></span></legend>
<div id="frame">
<div id="panel">
<a href="?page=data_post" title="Lihat data postingan">Data Postingan</a>
<a href="?page=data_guru" title="Lihat data guru">Data Guru</a>
<a href="?page=data_kelas" title="Lihat data kelas">Data Kelas</a>
<a href="?page=data_pembimbing" title="Lihat data pembimbing">Data Pembimbing</a>
<a href="?page=data_periode" title="Lihat data periode">Data Periode</a>
<a href="?page=data_user" title="Lihat data administrator">Data Administrator</a>
</div>

<div id="panel">
<a href="?page=data_kategori" title="Lihat data kategori">Data Kategori</a>
<a href="?page=data_siswa" title="Lihat data siswa">Data Siswa</a>
<a href="?page=data_jurusan" title="Lihat data jurusan">Data Jurusan</a>
<a href="?page=data_dudi" title="Lihat data perusahaan">Data Perusahaan</a>
<a href="?page=data_penempatan" title="Lihat data penempatan">Data Penempatan</a>
<a href="?page=data_komentar" title="Lihat data komentar">Data Komentar</a>
</div>
</div>
</fieldset>

<fieldset id="control" style="margin-top: 10px;">
<legend align="center"><span style="font-size: 14px;">BACKUP DATA USER</b></i></span></legend>
<div id="frame">
<div id="panel">
<a href="export/exp_absensi.php" title="Backup data absensi" target="_blank">Data Absensi</a>
<a href="export/exp_jurnal.php" title="Backup data jurnal" target="_blank">Data Jurnal</a>
</div>

<div id="panel">
<a href="export/exp_monitoring.php" title="Backup data monitoring" target="_blank">Data Monitoring</a>
<a href="?page=data_keluhan" title="Lihat data Keluhan">Data Keluhan</a>
</div>
</div>
</fieldset>

</div>

</div>
</div>

<?php
	} else {
		lokasi("login");
	}
?>