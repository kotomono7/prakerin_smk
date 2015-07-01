<?php
	include "inc/class_paging.php";
?>

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
<?php
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$level=$_SESSION['level'];

		if ($level=='superuser' || $level=='admin') {
?>
	<a href="?page=add_dudi" title="Tambah data du/di">
	<button type="submit" name="tambah_data" class="button-style" style="margin-left: -3px; margin-right: 3px;">Tambah Data</button>
	</a>
<?php
		}
?>
	<a href="export/exp_dudi.php" target="_blank" title="Download Data">
	<button type="submit" name="tambah_data" class="button-style" style="margin-left: -3px; margin-right: 3px;">Download</button>
	</a>
<?php
	}
?>
	<a href="?page=data_dudi_perjurusan" title="Lihat data du/di per jurusan">
	<button type="submit" name="tampil_data_perkelas" class="button-style" style="margin-left: -3px;">Lihat Sesuai Jurusan</button>
	</a>
	</td>
    <td width="40%" align="right">
	<form action="?page=search_dudi" method="post" class="form-wrapper cf" style="margin-right: -2px;">
		<input name="key" id="input" type="text" placeholder="Ketik nama du/di..." required="required" />
		<button id="button" type="submit" style="padding-right: 0;"><font style="padding-right: 3px;">Search</font></button>
	</form>
	</td>
  </tr>
</table>
<table class="table" width="100%" border="0">
  <tr>
  	<th>NO.</th>
	<th>NAMA DU/DI</th>
	<th>ALAMAT</th>
	<th>OPTION</th>
  </tr>

<?php
	$limit=20;
	$query=new CnnNav($limit,'du_di','*','id_dudi');
	$result=$query ->getResult();
	
	if (isset($_GET['offset'])) {
		$number=($limit*$_GET['offset'])+1; 
	} else {
		$number=1;
	}
		while ($data=mysql_fetch_array($result)) {
			$nm_dudi=$data['nama_dudi'];
			$alamat=$data['alamat'];

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
    <td align="left"><?php echo $nm_dudi; ?></td>
    <td align="left"><?php echo $alamat; ?></td>
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
    <td align="left"><?php echo $nm_dudi; ?></td>
    <td align="left"><?php echo $alamat; ?></td>
	<td align="center">
	<a href="?page=detail_dudi&id=<?php echo $data['id_dudi']; ?>"><img src="images/detail.png" width="13px" height="auto" title="Lihat detail" style="margin-right: 5px;" /></a></td>
  </tr>			
				
<?php			
				}
			} else {
?>

  <tr bgcolor="<?php echo $color; ?>">
    <td align="center"><?php echo $number; ?></td>
    <td align="left"><?php echo $nm_dudi; ?></td>
    <td align="left"><?php echo $alamat; ?></td>
	<td align="center">
	<a href="?page=detail_dudi&id=<?php echo $data['id_dudi']; ?>"><img src="images/detail.png" width="13px" height="auto" title="Lihat detail" style="margin-right: 5px;" /></a></td>
  </tr>

<?php
			}
		$number++;
	}
	
	$x="select * from du_di";
	$y=mysql_query($x);
	$rows=mysql_num_rows($y);
?>

</table>
<table width="100%" border="0" style="font-size: 12px; margin-top: 3px; margin-bottom: 15px;">
  <tr>
    <td width="75%" align="left">
	<?php
		if ($rows > $limit) {
	?>
	Halaman: <?php $query->printNav(); ?>
	<?php
		}
	?>
	</td>
	<td width="25%" align="right">Jumlah: <b><?php echo $rows; ?></b> perusahaan</td>
  </tr>
</table>
</div>

</div>
</div>

<?php
$menu=isset($_GET['menu'])? $_GET['menu']:'';
$id=isset($_GET['id'])? $_GET['id']:'';

	if ($menu=="hapus") {
		$hapus=mysql_query("delete from du_di where id_dudi='$id'");
		echo "<script>alert('Data berhasil dihapus')</script>";
		direct("?page=data_dudi");
	}
?>