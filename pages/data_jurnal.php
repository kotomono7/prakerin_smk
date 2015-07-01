<?php
	include "inc/class_paging.php";
	
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$x=mysql_query("select * from siswa where username='$user'");
		$y=mysql_fetch_array($x);
		$nis=$y['nis'];
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<h3>List Data Jurnal Harian</h3>
<table width="100%" border="0">
  <tr>
    <td width="50%" align="left">
<?php
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$level=$_SESSION['level'];

		if ($level=='superuser' || $level=='admin' || $level=='siswa') {
?>
	<a href="?page=add_jurnal" title="Tambah data jurnal">
	<button type="submit" name="tambah_data" class="button-style" style="margin-left: -3px; margin-right: 3px;">Tambah Data</button>
	</a>
<?php
		}
?>
	<a href="export/exp_jurnal_user.php" target="_blank" title="Download Data">
	<button type="submit" name="tambah_data" class="button-style" style="margin-left: -3px; margin-right: 3px;">Download</button>
	</a>
<?php
	}
?>
	</td>
    <td width="50%" align="right">
	<form action="?page=search_jurnal" method="post" class="form-wrapper cf" style="margin-right: -2px;">
		<input name="key" id="input" type="text" placeholder="Ketik nama kegiatan..." required="required" />
		<button id="button" type="submit" style="padding-right: 0;"><font style="padding-right: 3px;">Search</font></button>
	</form>
	</td>
  </tr>
</table>
<table class="table" width="100%" border="0">
  <tr>
  	<th>NO.</th>
	<th>TANGGAl</th>
	<th>NAMA KEGIATAN</th>
	<th>URAIAN</th>
<?php
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$level=$_SESSION['level'];

		if ($level=='superuser' || $level=='admin' || $level=='siswa') {
?>
	<th>OPTION</th>
<?php
		}
	}
?>
  </tr>

<?php
	$number=1;
	$sql=mysql_query("select * from jurnal_harian where nis='$nis' order by no_id limit 0,20");
		while ($data=mysql_fetch_array($sql)) {
			if ($number%2==1) {
				$color='#fff';
			} else {
				$color='#eee';
			}
			
			if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
				$user=$_SESSION['user'];
				$level=$_SESSION['level'];
				
				if ($level=='superuser' || $level=='admin' || $level=='siswa') {
?>

  <tr bgcolor="<?php echo $color; ?>">
    <td align="center"><?php echo $number; ?></td>
    <td align="center" width="15%"><?php echo $data['tgl']; ?></td>
    <td align="left"><?php echo $data['nama_keg']; ?></td>
	<td align="left"><?php echo $data['uraian']; ?></td>
	<td align="center">
	<a href="?page=edit_jurnal&id=<?php echo $data['no_id']; ?>"><img src="images/edit.png" width="13px" height="auto" title="Edit data" style="margin-right: 5px;" /></a>
	<a href="?page=data_jurnal&menu=hapus&id=<?php echo $data['no_id']; ?>" <?php hapus(); ?>><img src="images/delete.png" width="13px" height="auto" title="Hapus data" /></a>
	</td>
  </tr>				

<?php
				}
			} else {
				echo "ERROR 404<br />Page Not Found!";
			}
		$number++;
	}
	
	$abc=mysql_query("select * from jurnal_harian where nis='$nis'");
	$rows=mysql_num_rows($abc);
?>

</table>
<table width="100%" border="0" style="font-size: 12px; margin-top: 3px; margin-bottom: 15px;">
  <tr>
    <td width="75%" align="left">
	</td>
	<td width="25%" align="right">Jumlah: <b><?php echo $rows; ?></b> kegiatan</td>
  </tr>
</table>
</div>

</div>
</div>

<?php
$menu=isset($_GET['menu'])? $_GET['menu']:'';
$id=isset($_GET['id'])? $_GET['id']:'';

	if ($menu=="hapus") {
		$hapus=mysql_query("delete from jurnal_harian where no_id='$id'");
		echo "<script>alert('Data berhasil dihapus')</script>";
		direct("?page=data_jurnal");
	}
	
	}
?>