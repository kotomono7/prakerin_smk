<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
	
	$key=$_POST['key'];
	
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$level=$_SESSION['level'];

		if ($level=='admin') {
			$x="admin";
			$sql=mysql_query("select * from user where level='$x' and nama_dpn like '%$key%' order by nama_dpn");
		} else if ($level=="superuser") {
			$sql=mysql_query("select * from user where nama_dpn like '%$key%' order by nama_dpn");
		}
	}
	
	$rows=mysql_num_rows($sql);
?>

<div style="margin-top: 20px;">
<h3>Pencarian Data Kelas</h3>

<?php
if ($rows > 0) {
?>

<div style="margin-bottom: 5px;">
Hasil pencarian data kelas dengan keyword <i><b>"<?php echo $key; ?>"</b></i> :
</div>
<table class="table" width="100%" border="0">
  	<th>NO.</th>
	<th>NAMA LENGKAP</th>
	<th>L/P</th>
	<th>E-MAIL</th>
	<th>USERNAME</th>
	<th>PASSWORD</th>
<?php
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$level=$_SESSION['level'];

		if ($level=='superuser') {
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
				
				if ($level=='superuser') {
?>

  <tr bgcolor="<?php echo $color; ?>">
    <td align="center"><?php echo $number; ?></td>
    <td align="left"><?php echo $data['nama_dpn']." ".$data['nama_blkng']; ?></td>
    <td align="center"><?php echo $data['id_jenisklm']; ?></td>
	<td align="left"><a href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a></td>
	<td align="left"><?php echo $data['username']; ?></td>
	<td align="center"><strong title="<?php echo $data['password']; ?>">::::::::::</strong></td>
	<td align="center" valign="middle">
	<a href="?page=edit_user&id=<?php echo $data['username']; ?>"><img src="images/edit.png" width="13px" height="auto" title="Edit data" style="margin-right: 5px;" /></a>
	<a href="?page=data_user&menu=hapus&id=<?php echo $data['username']; ?>" <?php hapus(); ?>><img src="images/delete.png" width="13px" height="auto" title="Hapus data" /></a>
	</td>
  </tr>
  
<?php
				} else if ($level=='admin') {
?>

 <tr bgcolor="<?php echo $color; ?>">
    <td align="center"><?php echo $number; ?></td>
    <td align="left"><?php echo $data['nama_dpn']." ".$data['nama_blkng']; ?></td>
    <td align="center"><?php echo $data['id_jenisklm']; ?></td>
	<td align="left"><a href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a></td>
	<td align="left"><?php echo $data['username']; ?></td>
	<td align="center"><strong>::::::::::</strong></td>
  </tr>		
				
<?php			
				}
			} else {
?>

  <tr bgcolor="<?php echo $color; ?>">
    <td align="center"><?php echo $number; ?></td>
    <td align="left"><?php echo $data['nama_depan']." ".$data['nama_blkng']; ?></td>
    <td align="center"><?php echo $data['id_jenisklm']; ?></td>
	<td align="left"><a href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a></td>
	<td align="left"><?php echo $data['username']; ?></td>
	<td align="center"><strong>::::::::::</strong></td>
  </tr>	

<?php
			}
		$number++;
	}
	
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$level=$_SESSION['level'];
		
		if ($level=='superuser') {
			$jumlah=$rows;
		} else if ($level=='admin') {
			$jumlah=$rows-1;
		}
	}
?>
</table>
<table width="100%" border="0" style="font-size: 12px; margin-top: 3px; margin-bottom: 15px;">
  <tr>
    <td width="75%" align="left">
	<button class="button-style" type="submit" name="back" onclick="history.back()" style="margin-left: -3px;">Kembali</button>
	</td>
	<td width="25%" align="right" valign="top">Jumlah: <b><?php echo $jumlah; ?></b> user</td>
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
		$hapus=mysql_query("delete from user where username='$id'");
		echo "<script>alert('Data berhasil dihapus')</script>";
		direct("?page=data_user");
	}
?>