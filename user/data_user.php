<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<h3>List Data User</h3>
<table width="100%" border="0">
  <tr>
    <td width="50%" align="left">
<?php
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$level=$_SESSION['level'];

		if ($level=='superuser' || $level=='admin') {
?>
	<a href="?page=add_user" title="Tambah data administrator">
	<button type="submit" name="tambah_data" class="button-style" style="margin-left: -3px; margin-right: 3px;">Tambah Data</button>
	</a>
<?php
		}
?>
	<a href="export/exp_administrator.php" target="_blank" title="Download Data">
	<button type="submit" name="tambah_data" class="button-style" style="margin-left: -3px; margin-right: 3px;">Download</button>
	</a>
<?php
	}
?>

	</td>
    <td width="50%" align="right">
	<form action="?page=search_user" method="post" class="form-wrapper cf" style="margin-right: -2px;">
		<input name="key" id="input" type="text" placeholder="Ketik nama administrator..." required="required" />
		<button id="button" type="submit" style="padding-right: 0;"><font style="padding-right: 3px;">Search</font></button>
	</form>
	</td>
  </tr>
</table>
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
	
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$level=$_SESSION['level'];

		if ($level=='admin') {
			$key="admin";
			$result=mysql_query("select * from user where level='$key' order by nama_dpn");
		} else if ($level=="superuser") {
			$result=mysql_query("select * from user order by nama_dpn");
		}
	}
	
		while ($data=mysql_fetch_array($result)) {
			
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
	
	$x="select * from user";
	$y=mysql_query($x);
	$rows=mysql_num_rows($y);
	
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
	</td>
	<td width="25%" align="right">Jumlah: <b><?php echo $jumlah; ?></b> user</td>
  </tr>
</table>
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