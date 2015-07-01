<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
	$user=$_SESSION['user'];
	$level=$_SESSION['level'];
		
	if ($level=='superuser' || $level=='admin' || $level=='guru') {
	
		$x=mysql_query("select * from guru where username='$user'");
		$y=mysql_fetch_array($x);
		$id_guru=$y['id_guru'];
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
	
	$key=$_POST['key'];
	$sql=mysql_query("select * from view_monitoring where id_guru='$id_guru' and jns_keg like '%$key%' order by id_monitoring");
	$rows=mysql_num_rows($sql);
?>

<div style="margin-top: 20px;">
<h3>Pencarian Data Monitoring</h3>

<?php
if ($rows > 0) {
?>

<div style="margin-bottom: 5px;">
Hasil pencarian data monitoring dengan keyword <i><b>"<?php echo $key; ?>"</b></i> :
</div>
<table class="table" width="100%" border="0">
  <tr>
  	<th>NO.</th>
	<th>TANGGAL</th>
	<th>DU/DI</th>
	<th>KEGIATAN SISWA</th>
	<th>KRITIK & SARAN</th>
<?php
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$level=$_SESSION['level'];

		if ($level=='superuser' || $level=='admin' || $level=='guru') {
?>
	<th>OPTION</th>
<?php
		}
	}
?>
  </tr>

<?php
	$number=1;
		while ($data=mysql_fetch_array($sql)) {
			if ($number%2==1) {
				$color='#fff';
			} else {
				$color='#eee';
			}
			
			if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
				$user=$_SESSION['user'];
				$level=$_SESSION['level'];
				
				if ($level=='superuser' || $level=='admin' || $level=='guru') {
?>

  <tr bgcolor="<?php echo $color; ?>">
    <td align="center"><?php echo $number; ?></td>
    <td align="center"><?php echo $data['tgl']; ?></td>
	<td align="left"><?php echo $data['nama_dudi']; ?></td>
	<td align="left"><?php echo $data['jns_keg']; ?></td>
	<td align="left"><?php echo $data['kritik_saran']; ?></td>
	<td align="center">
	<a href="?page=edit_monitoring&id=<?php echo $data['id_monitoring']; ?>"><img src="images/edit.png" width="13px" height="auto" title="Edit data" style="margin-right: 5px;" /></a>
	<a href="?page=data_monitoring&menu=hapus&id=<?php echo $data['id_monitoring']; ?>" <?php hapus(); ?>><img src="images/delete.png" width="13px" height="auto" title="Hapus data" /></a>
	</td>
  </tr>				

<?php
				}
			}
		$number++;
	}
?>

</table>
<table width="100%" border="0" style="font-size: 12px; margin-top: 3px; margin-bottom: 15px;">
  <tr>
    <td width="75%" align="left">
	<button class="button-style" type="submit" name="back" onclick="history.back()" style="margin-left: -3px;">Kembali</button>
	</td>
	<td width="25%" align="right" valign="top">Jumlah: <b><?php echo $rows; ?></b> kegiatan</td>
  </tr>
</table>

<?php
} else {
?>

Tidak ditemukan data dengan keyword <i><b>"<?php echo $key; ?>"</b></i>. Silahkan ulangi pencarian dengan keyword yang lain!
<div style="margin-top: 5px;">
<button class="button-style" type="submit" name="back" onclick="history.back()">Kembali</button>
</div>

<?php
}
?>

</div>

</div>
</div>

<?php
$menu=isset($_GET['menu'])? $_GET['menu']:'';
$id=isset($_GET['id'])? $_GET['id']:'';

	if ($menu=="hapus") {
		$hapus=mysql_query("delete from monitoring where id_monitoring='$id'");
		echo "<script>alert('Data berhasil dihapus')</script>";
		direct("?page=data_monitoring");
	}
	
	}
}
?>