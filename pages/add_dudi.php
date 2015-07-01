<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$level=$_SESSION['level'];
	
	if ($level=="superuser" || $level=="admin") {
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Tambah Data Perusahaan (DU/DI)</h3></div>
<form enctype="multipart/form-data" name="add" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">ID DU/DI<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input name="id" type="text" id="id" size="10" maxlength="5" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Nama DU/DI<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield2">
	<input name="nama" type="text" id="nama" size="40" maxlength="50" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td align="center">:</td>
    <td><input name="alamat" type="text" id="alamat" size="40" /></td>
  </tr>
  <tr>
    <td>Jurusan<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="spryselect1">
		<select name="jurusan">
        <option>- Pilih Jurusan/Program Keahlian -</option>
        <?php
			$sql=mysql_query("select * from jurusan");
			while($jrs=mysql_fetch_array($sql)){
				echo "<option value='".$jrs['id_jurusan']."'>".$jrs['nm_jurusan']."</option>";
			}
		?>
      </select> <span class="selectRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Username<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield3">
	<input type="text" name="username" maxlength="30" size="30" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Password<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield4">
	<input name="password" type="password" id="password" size="30" maxlength="30" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td>:</td>
    <td>
	<input name="email" type="email" id="email" size="30" maxlength="50" />	</td>
  </tr>
  <tr>
    <td>Foto</td>
    <td>:</td>
    <td>
	<input type="file" name="foto" size="31" />	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>(Ukuran maks. 2048 Kb)</td>
  </tr>
  <tr>
    <td valign="top">Tentang</td>
    <td valign="top">:</td>
    <td><textarea name="tentang" id="tentang" cols="50" rows="10"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" class="button-style" value="Simpan Data" /></td>
  </tr>
  <tr>
    <td colspan="3"><span style="color: red;"><sup> * </sup>Data tidak boleh kosong!</span></td>
    </tr>
  <tr>
    <td colspan="3" align="center">
	<?php
	  	$note=(isset($_GET['notif']))? $_GET['notif']: "blank";
		switch ($note) {
			case "added":
			echo "<div id='box-success'>Data berhasil disimpan<br />Klik <a href='?page=data_dudi'>disini</a> untuk melihat</div>";
			break;
			case "failed":
			echo "<div id='box-error' style='width: 350px;'>Data gagal disimpan<br /><i>ID DU/DI</i> yang Anda masukkan sudah ada</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>	 </td>
    </tr>
</table>
<input type='hidden' name='MAX_FILE_SIZE' value='2000000' />
<input type="hidden" name="tambah" value="perusahaan" />
<input type="hidden" name="level" value="perusahaan" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
bkLib.onDomLoaded(function(){
	new nicEditor({buttonList : ['link','unlink',]}).panelInstance('tentang');
});
</script>

<?php
	if (isset($_POST['tambah']) and $_POST['tambah']=="perusahaan") {
		$id=$_POST['id'];
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$jurusan=$_POST['jurusan'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$tentang=$_POST['tentang'];
		$level=$_POST['level'];
		
		if (!empty($_FILES['foto'])) {
			$foto=$_FILES['foto']['name'];
			$tmp=$_FILES['foto']['tmp_name'];
			$type=$_FILES['foto']['type'];
			$path="images/user/".$foto;
		
			if ($type=="image/jpeg" || $type=="image/jpg" || $type=="image/gif" || $type=="image/x-png" || $type=="image/png") {
				$simpan=move_uploaded_file($tmp,$path);
			}
		} else {
			$foto="";
		}
		
		$tambah=mysql_query("insert into du_di values('$id','$nama','$alamat','$foto','$email','$tentang','$jurusan','$username','$password','$level')");
		
		if ($tambah) {
			direct("?page=add_dudi&notif=added");
		} else {
			direct("?page=add_dudi&notif=failed");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>