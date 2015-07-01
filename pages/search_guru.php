<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
	
	$key=$_POST['key'];
	$sql=mysql_query("select * from guru where nama like '%$key%' order by id_guru");
	$rows=mysql_num_rows($sql);
?>

<div style="margin-top: 20px;">
<h3>Pencarian Data Guru</h3>

<?php
if ($rows > 0) {
?>

<div style="margin-bottom: 5px;">
Hasil pencarian data guru dengan keyword <i><b>"<?php echo $key; ?>"</b></i> :
</div>
<table class="table" width="100%" border="0">
  <tr>
  	<th>NO.</th>
    <th>NIP</th>
	<th>NAMA GURU</th>
	<th>L/P</th>
	<th>NO. TELP.</th>
	<th>OPTION</th>
  </tr>
 
<?php
	$number=1;
		while ($data=mysql_fetch_array($sql)) {
			$id_guru=$data['id_guru'];
			$nip=$data['nip'];
			$nama=$data['nama'];
			$no_telp=$data['no_telpon'];
			$lp=$data['id_jenisklm'];

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
    <td align="center"><?php echo $number; ?></td>
    <td align="center"><?php echo $nip; ?></td>
    <td align="left"><?php echo $nama; ?></td>
	<td align="center"><?php echo $lp; ?></td>
    <td align="center"><?php echo $no_telp; ?></td>
	<td align="center">
	<a href="?page=detail_guru&id=<?php echo $id_guru; ?>"><img src="images/detail.png" width="13px" height="auto" title="Lihat detail" style="margin-right: 5px;" /></a>
	<a href="?page=edit_guru&id=<?php echo $id_guru; ?>"><img src="images/edit.png" width="13px" height="auto" title="Edit data" style="margin-right: 5px;" /></a>
	<a href="?page=data_guru&menu=hapus&id=<?php echo $id_guru; ?>" <?php hapus(); ?>><img src="images/delete.png" width="13px" height="auto" title="Hapus data" /></a>
	</td>
  </tr>
		
<?php
				} else if ($level=='perusahaan' || $level=='guru' || $level=='siswa') {
?>

  <tr bgcolor="<?php echo $color; ?>">
    <td align="center"><?php echo $number; ?></td>
    <td align="center"><?php echo $nip; ?></td>
    <td align="left"><?php echo $nama; ?></td>
	<td align="center"><?php echo $lp; ?></td>
    <td align="center"><?php echo $no_telp; ?></td>
	<td align="center">
	<a href="?page=detail_guru&id=<?php echo $id_guru; ?>"><img src="images/detail.png" width="13px" height="auto" title="Lihat detail" style="margin-right: 5px;" /></a>
	</td>
  </tr>

<?php
				}
			} else {
?>

  <tr bgcolor="<?php echo $color; ?>">
    <td align="center"><?php echo $number; ?></td>
    <td align="center"><?php echo $nip; ?></td>
    <td align="left"><?php echo $nama; ?></td>
	<td align="center"><?php echo $lp; ?></td>
    <td align="center"><?php echo $no_telp; ?></td>
	<td align="center">
	<a href="?page=detail_guru&id=<?php echo $id_guru; ?>"><img src="images/detail.png" width="13px" height="auto" title="Lihat detail" style="margin-right: 5px;" /></a>
	</td>
  </tr>

<?php
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
	<td width="25%" align="right" valign="top">Jumlah: <b><?php echo $rows; ?></b> guru</td>
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
		$hapus=mysql_query("delete from guru where id_guru='$id'");
		echo "<script>alert('Data berhasil dihapus')</script>";
		direct("?page=data_guru");
	}
?>