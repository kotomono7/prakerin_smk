<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
	$user=$_SESSION['user'];
	$table=$_SESSION['table'];
	
	if(isset($_POST['edit']) and $_POST['edit']=="foto"){
		$user=$_SESSION['user'];
		$name=$_FILES['foto']['name'];
		$tmp=$_FILES['foto']['tmp_name'];
		$type=$_FILES['foto']['type'];
		$path="images/user/".$name;
		
		if ($type=="image/jpeg" || $type=="image/jpg" || $type=="image/gif" || $type=="image/x-png" || $type=="image/png") {
			if (move_uploaded_file($tmp,$path)) {
				$sql=mysql_query("select * from $table where username='$user'");
				$data=mysql_fetch_array($sql);
				$rows=mysql_num_rows($sql);
				
				if ($rows==1) {
					if ($table=="user") {
						$primary="username";
						$key=$data['username'];
					} else if ($table=="guru") {
						$primary="id_guru";
						$key=$data['id_guru'];	
					} else if ($table=="du_di") {
						$primary="id_dudi";
						$key=$data['id_dudi'];
					} else if ($table=="siswa") {
						$primary="nis";
						$key=$data['nis'];
					}
					
					$ubah=mysql_query("update $table set foto='$name' where $primary='$key'") or die (mysql_error());
					lokasi("ganti_foto&notif=success");
				}
			} else {
				lokasi("ganti_foto&notif=error02");
			}
		} else {
			lokasi("ganti_foto&notif=error03");
		}
	}
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Ganti Foto</h3></div>

<?php
	$query=mysql_query("select * from $table where username='$user'");
	$src=mysql_fetch_array($query);
	$cek=mysql_num_rows($query);
	
	if ($cek==1) {
		if ($src['foto']=="") {
			$foto="default.jpg";
		} else {
			$foto=$src['foto'];
		}
		
		if ($table=="user") {
			$judul=$src['nama_dpn']." ".$src['nama_blkng'];
		} else if ($table=="du_di") {
			$judul=$src['nama_dudi'];
		} else if ($table=="guru" || $table=="siswa") {
			$judul=$src['nama'];
		}
	}
	
?>

<table width="100%" align="center" style="border: 2px dashed #ccc;">
  <tr>
    <td width="30%"><img alt="<?php echo $foto; ?>" title="<?php echo $judul; ?>" src="images/user/<?php echo $foto; ?>" width="100%" height="auto" style="border: none; margin: 8px;"></td>
    <td width="70%" align="center">
    <form enctype="multipart/form-data" method="post">
      <p><input type="hidden" name="edit" value="foto">
      	 <input type='hidden' name='MAX_FILE_SIZE' value='2000000' />
		 <b>Unggah Foto Baru</b>
	  </p>
      <p><input name="foto" type="file" size="25" required="required" />
      </p>
	  <p>(Ukuran maks. 2048 Kb)</p>
      <p><input class="button-style" type="submit" value="Simpan" /></p>
    </form>
    </td>
  </tr>
</table>

<div align="center" style="margin-top: 20px;">
	<?php
		$note=(isset($_GET['notif']))? $_GET['notif']: "blank";
		switch ($note) {
			case "success":
			echo "<div id='box-success'>Foto baru berhasil disimpan</div>";
			break;
			case "error02":
			echo "<div id='box-error'>File terlalu besar! Ukuran file maksimal 2 Mb (2048 Kb)</div>";
			break;
			case "error03":
			echo "<div id='box-error'>Format file yang diperbolehkan hanya .jpg, .png, dan .gif</div>";
			break;
			case "blank": default:
			echo "";
		}	
	?>
</div>
</div>
</div>
</div>

<?php
} else {
	lokasi("login");
}
?>