<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<h3>List Data Siswa/Siswi</h3>
<table width="100%" border="0">
  <tr>
	<td width="50%" align="left">
<form method="post">
<span id="spryselect1">
	<select name="kelas" style="margin-left: -3px;">
		<option value="">- Pilih Kelas -</option>
<?php
	$kls=mysql_query("select * from kelas order by nama_kelas");
		while ($kelas=mysql_fetch_array($kls)) {
?>
		<option value="<?php echo $kelas['nama_kelas']; ?>"><?php echo $kelas['nama_kelas']; ?></option>
<?php
	}
?>
	</select>
	<button type="submit" name="tampil_perkelas" class="button-style" style="margin-left: -3px;">Tampilkan</button>
</span>
</form>
	</td>
	<td width="50%" align="right">
<?php
if (isset($_POST['kelas'])) {
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$level=$_SESSION['level'];

		if ($level=='superuser' || $level=='admin') {
?>
	<a href="?page=add_siswa" title="Tambah data siswa">
	<button type="submit" name="tambah_data" class="button-style" style="margin-right: -3px;">Tambah Data</button>
	</a>
<?php
		}
	}
}
?>
	</td>
  </tr>
</table>

<?php
	if (isset($_POST['kelas'])) {
?>

<table class="table" width="100%" border="0">
  <tr>
  	<th>NO.</th>
    <th>NIS</th>
	<th>NAMA SISWA</th>
	<th>L/P</th>
	<th>KELAS</th>
	<th>OPTION</th>
  </tr>
 
<?php
	$number=1;
	$kelas=$_POST['kelas'];
	$result=mysql_query("select * from view_siswa where nama_kelas='$kelas' order by nis");
	$rows=mysql_num_rows($result);
		while ($data=mysql_fetch_array($result)) {
			$nis=$data['nis'];
			$nama=$data['nama'];
			$kelas=$data['nama_kelas'];
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
    <td align="center"><?php echo $nis; ?></td>
    <td align="left"><?php echo $nama; ?></td>
	<td align="center"><?php echo $lp; ?></td>
    <td align="center"><?php echo $kelas; ?></td>
	<td align="center">
	<a href="?page=detail_siswa&id=<?php echo $nis; ?>"><img src="images/detail.png" width="13px" height="auto" title="Lihat detail" style="margin-right: 5px;" /></a>
	<a href="?page=edit_siswa&id=<?php echo $nis; ?>"><img src="images/edit.png" width="13px" height="auto" title="Edit data" style="margin-right: 5px;" /></a>
	<a href="?page=data_siswa_perkelas&menu=hapus&id=<?php echo $nis; ?>" <?php hapus(); ?>><img src="images/delete.png" width="13px" height="auto" title="Hapus data" /></a>
	</td>
  </tr>
		
<?php
				} else if ($level=='perusahaan' || $level=='guru' || $level=='siswa') {
?>

  <tr bgcolor="<?php echo $color; ?>">
    <td align="center"><?php echo $number; ?></td>
    <td align="center"><?php echo $nis; ?></td>
    <td align="left"><?php echo $nama; ?></td>
	<td align="center"><?php echo $lp; ?></td>
    <td align="center"><?php echo $kelas; ?></td>
	<td align="center">
	<a href="?page=detail_siswa&id=<?php echo $nis; ?>"><img src="images/detail.png" width="13px" height="auto" title="Lihat detail" style="margin-right: 5px;" /></a>
	</td>
  </tr>

<?php
				}
			} else {
?>

  <tr bgcolor="<?php echo $color; ?>">
    <td align="center"><?php echo $number; ?></td>
    <td align="center"><?php echo $nis; ?></td>
    <td align="left"><?php echo $nama; ?></td>
	<td align="center"><?php echo $lp; ?></td>
    <td align="center"><?php echo $kelas; ?></td>
	<td align="center">
	<a href="?page=detail_siswa&id=<?php echo $nis; ?>"><img src="images/detail.png" width="13px" height="auto" title="Lihat detail" style="margin-right: 5px;" /></a>
	</td>
  </tr>

<?php
			}
		$number++;
	}
?>

</table>
</table>
<table width="100%" border="0" style="font-size: 12px; margin-top: 3px; margin-bottom: 15px; margin-bottom: 15px;">
  <tr>
    <td width="75%" align="left">
	</td>
	<td width="25%" align="right">Jumlah: <b><?php echo $rows; ?></b> siswa</td>
  </tr>
</table>

<?php
	}
?>

</div>

</div>
</div>

<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>

<?php
$menu=isset($_GET['menu'])? $_GET['menu']:'';
$id=isset($_GET['id'])? $_GET['id']:'';

	if ($menu=="hapus") {
		$hapus=mysql_query("delete from siswa where nis='$id'");
		echo "<script>alert('Data berhasil dihapus')</script>";
		direct("?page=data_siswa_perkelas");
	}
?>