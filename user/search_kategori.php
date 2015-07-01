<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$level=$_SESSION['level'];
		
	if ($level=='superuser' || $level=='admin') {
	
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
	
	$key=$_POST['key'];
	$sql=mysql_query("select * from post_kategori where nama_kategori like '%$key%' order by id_kategori");
	$rows=mysql_num_rows($sql);
?>

<div style="margin-top: 20px;">
<h3>Pencarian Data Kategori</h3>

<?php
if ($rows > 0) {
?>

<div style="margin-bottom: 5px;">
Hasil pencarian data kategori dengan keyword <i><b>"<?php echo $key; ?>"</b></i> :
</div>
<table class="table" width="100%" border="0">
  <tr>
  	<th>NO.</th>
	<th>NAMA KATEGORI</th>
	<th>OPTION</th>
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
				
				if ($level=='superuser' || $level=='admin') {
?>

  <tr bgcolor="<?php echo $color; ?>">
    <td align="center" width="10%"><?php echo $number; ?></td>
    <td align="left"><?php echo $data['nama_kategori']; ?></td>
	<td align="center">
	<a href="?page=edit_kategori&id=<?php echo $data['id_kategori']; ?>"><img src="images/edit.png" width="13px" height="auto" title="Edit data" style="margin-right: 5px;" /></a>
	<a href="?page=data_kategori&menu=hapus&id=<?php echo $data['id_kategori'];?>" <?php hapus(); ?>><img src="images/delete.png" width="13px" height="auto" title="Hapus data" /></a>
	</td>
  </tr>

<?php
			}
		$number++;
		}
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
		$hapus=mysql_query("delete from kelas where id_kelas='$id'");
		echo "<script>alert('Data berhasil dihapus')</script>";
		direct("?page=data_kelas");
	}
	
	}
}
?>