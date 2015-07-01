<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$level=$_SESSION['level'];
	
	if ($level=="superuser" || $level=="admin") {
		$id=$_GET['id'];
		$sql=mysql_query("select * from du_di where id_dudi='$id'");
		$data=mysql_fetch_array($sql);
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Edit Data Perusahaan (DU/DI)</h3></div>
<form enctype="multipart/form-data" name="edit" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">ID DU/DI<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input name="id" type="text" id="id" size="10" maxlength="5" value="<?php echo $data['id_dudi']; ?>" disabled="disabled" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Nama DU/DI<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield2">
	<input name="nama" type="text" id="nama" size="40" maxlength="50" value="<?php echo $data['nama_dudi']; ?>" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td align="center">:</td>
    <td><input name="alamat" type="text" id="alamat" size="40" value="<?php echo $data['alamat']; ?>" /></td>
  </tr>
  <tr>
    <td>Jurusan<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<?php
		$x=$data['id_jurusan'];
		
		$k=mysql_query("select * from jurusan where id_jurusan='$x' order by id_jurusan");
		$l=mysql_fetch_array($k);
		$m=mysql_query("select * from jurusan where id_jurusan!='$x' order by id_jurusan");
	?>
	<span id="spryselect1">
		<select name="jurusan">
        	<option>- Pilih Jurusan/Program Keahlian -</option>
       		<option value="<?php echo $l['id_jurusan']; ?>" selected="selected"><?php echo $l['nm_jurusan']; ?></option>
          	<?php
		  		while ($n=mysql_fetch_array($m)) {
		  	?>
		  	<option value="<?php echo $n['id_jurusan']; ?>"><?php echo $n['nm_jurusan']; ?></option>
			<?php
				}
			?>
		</select>
	<span class="selectRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Username<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield3">
	<input type="text" name="username" maxlength="30" size="30" value="<?php echo $data['username']; ?>" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Password<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield4">
	<input name="password" type="password" id="password" size="30" maxlength="30" value="<?php echo $data['password']; ?>" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td>:</td>
    <td>
	<input name="email" type="email" id="email" size="30" maxlength="50" value="<?php echo $data['email']; ?>" />	</td>
  </tr>
  <tr>
    <td valign="top">Tentang</td>
    <td valign="top">:</td>
    <td><textarea name="tentang" id="tentang" cols="50" rows="10"><?php echo $data['tentang']; ?></textarea></td>
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
			case "edited":
			echo "<div id='box-success'>Perubahan berhasil disimpan<br />Klik <a href='?page=data_dudi'>disini</a> untuk melihat</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>	 </td>
    </tr>
</table>
<input type="hidden" name="edit" value="perusahaan" />
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
	if (isset($_POST['edit']) and $_POST['edit']=="perusahaan") {
		$id_dudi=$data['id_dudi'];
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$jurusan=$_POST['jurusan'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$tentang=$_POST['tentang'];
		
		$ubah=mysql_query("update du_di set nama_dudi='$nama', alamat='$alamat', id_jurusan='$jurusan', username='$username', password='$password', email='$email', tentang='$tentang' where id_dudi='$id_dudi'");
		
		if ($ubah) {
			direct("?page=edit_dudi&id=$id_dudi&notif=edited");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>