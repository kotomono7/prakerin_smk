<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<h3>List Data Perusahaan (DU/DI)</h3>
<table width="100%" border="0">
  <tr>
	<td width="60%" align="left">
<form method="post">
<span id="spryselect1">
	<select name="jurusan" style="margin-left: -3px;">
		<option value="">- Pilih Jurusan -</option>
<?php
	$jrs=mysql_query("select * from jurusan order by id_jurusan");
		while ($jurusan=mysql_fetch_array($jrs)) {
?>
		<option value="<?php echo $jurusan['nm_jurusan']; ?>"><?php echo $jurusan['nm_jurusan']; ?></option>
<?php
	}
?>
	</select>
	<button type="submit" name="tampil_perjurusan" class="button-style" style="margin-left: -3px;">Tampilkan</button>
</span>
</form>
	</td>
	<td width="40%" align="right">
<?php
if (isset($_POST['jurusan'])) {
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$level=$_SESSION['level'];

		if ($level=='superuser' || $level=='admin') {
?>
	<a href="?page=add_dudi" title="Tambah data du/di">
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
	if (isset($_POST['jurusan'])) {
?>

<table class="table" width="100%" border="0">
  <tr>
  	<th>NO.</th>
	<th>NAMA DU/DI</th>
	<th>ALAMAT</th>
	<th>JURUSAN</th>
	<th>OPTION</th>
  </tr>
 
<?php
	$number=1;
	$nm_jurusan=$_POST['jurusan'];
	$result=mysql_query("select * from view_dudi where nm_jurusan='$nm_jurusan' order by id_dudi");
	$rows=mysql_num_rows($result);
		while ($data=mysql_fetch_array($result)) {

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
    <td align="left"><?php echo $data['nama_dudi']; ?></td>
    <td align="left"><?php echo $data['alamat']; ?></td>
	<td align="left"><?php echo $data['nm_jurusan']; ?></td>
	<td align="center">
	<a href="?page=detail_dudi&id=<?php echo $data['id_dudi']; ?>"><img src="images/detail.png" width="13px" height="auto" title="Lihat detail" style="margin-right: 5px;" /></a>
	<a href="?page=edit_dudi&id=<?php echo $data['id_dudi']; ?>"><img src="images/edit.png" width="13px" height="auto" title="Edit data" style="margin-right: 5px;" /></a>
	<a href="?page=data_dudi&menu=hapus&id=<?php echo $data['id_dudi'];?>" <?php hapus(); ?>><img src="images/delete.png" width="13px" height="auto" title="Hapus data" /></a>
	</td>
  </tr>
		
<?php
				} else if ($level=='perusahaan' || $level=='guru' || $level=='siswa') {
?>

  <tr bgcolor="<?php echo $color; ?>">
   	<td align="center"><?php echo $number; ?></td>
    <td align="left"><?php echo $data['nama_dudi']; ?></td>
    <td align="left"><?php echo $data['alamat']; ?></td>
	<td align="left"><?php echo $data['nm_jurusan']; ?></td>
	<td align="center">
	<a href="?page=detail_dudi&id=<?php echo $data['id_dudi']; ?>"><img src="images/detail.png" width="13px" height="auto" title="Lihat detail" style="margin-right: 5px;" /></a>
	</td>
  </tr>

<?php
				}
			} else {
?>

  <tr bgcolor="<?php echo $color; ?>">
  	<td align="center"><?php echo $number; ?></td>
    <td align="left"><?php echo $data['nama_dudi']; ?></td>
    <td align="left"><?php echo $data['alamat']; ?></td>
	<td align="left"><?php echo $data['nm_jurusan']; ?></td>
	<td align="center">
	<a href="?page=detail_dudi&id=<?php echo $data['id_dudi']; ?>"><img src="images/detail.png" width="13px" height="auto" title="Lihat detail" style="margin-right: 5px;" /></a>
	</td>
  </tr>

<?php
			}
		$number++;
	}
?>

</table>
<table width="100%" border="0" style="font-size: 12px; margin-top: 3px; margin-bottom: 15px; margin-bottom: 15px;">
  <tr>
    <td width="75%" align="left">
	</td>
	<td width="25%" align="right">Jumlah: <b><?php echo $rows; ?></b> perusahaan</td>
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
		$hapus=mysql_query("delete from du_di where id_dudi='$id'");
		echo "<script>alert('Data berhasil dihapus')</script>";
		direct("?page=data_dudi_perjurusan");
	}
?>