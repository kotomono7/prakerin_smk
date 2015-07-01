<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$level=$_SESSION['level'];
	
	if ($level=="superuser" || $level=="admin") {
		$id=$_GET['id'];
		$sql=mysql_query("select * from user where username='$id'");
		$data=mysql_fetch_array($sql);
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Tambah Admin Baru</h3></div>
<form enctype="multipart/form-data" name="add_user" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">Nama Depan<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input name="nama_dpn" type="text" id="nama_dpn" size="40" maxlength="50" value="<?php echo $data['nama_dpn']; ?>" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Nama Belakang<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield2">
	<input name="nama_blkng" type="text" id="nama_blkng" size="40" maxlength="50" value="<?php echo $data['nama_blkng']; ?>" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Jenis Kelamin<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="spryselect1">
		<select name="jenkel">
          <option>- Pilih Satu -</option>
          <option value="L" <?php if($data['id_jenisklm']=="L") echo 'selected="selected"'; ?>>Laki-laki</option>
          <option value="P" <?php if($data['id_jenisklm']=="P") echo 'selected="selected"'; ?>>Perempuan</option>
        </select> <span class="selectRequiredMsg">Mohon isi field ini!</span>
	</span>	</td>
  </tr>
  <tr>
    <td>Tanggal Lahir<sup><span style="color: red;"> * </span></sup></td>
    <td align="center"><span style="margin-bottom: 5px;">:</span></td>
    <td>
	<span id="sprytextfield3">
	<input name="tgl_lahir" type="text" id="tgl_lahir" style="width: 103px;" value="<?php echo $data['tgl_lahir']; ?>" />
	<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.add_user.tgl_lahir); return false;">
	<img name="popcal" align="absmiddle" style="border:none" src="date/calender.jpeg" width="34" height="30" border="0" alt="calender.jpeg">	</a>
		
	<!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
	<iframe width="100" height="200" name="gToday:normal:date/agenda.js" id="gToday:normal:date/agenda.js" src="date/ipopeng.htm" 
	scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:fixed; top:-500px; left:-500px;">	</iframe>
	<span class="textfieldRequiredMsg">Mohon isi field ini!</span></span>	</td>
  </tr>
  <tr>
    <td>Username<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield4">
	<input type="text" name="username" maxlength="30" size="30" value="<?php echo $data['username']; ?>" disabled="disabled" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Password<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield5">
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
    <td><textarea name="tentang" id="tentang" cols="50" rows="10" value="<?php echo $data['tentang']; ?>"></textarea></td>
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
			echo "<div id='box-success'>Perubahan berhasil disimpan<br />Klik <a href='?page=data_user'>disini</a> untuk melihat</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>
	</td>
    </tr>
</table>
<input type="hidden" name="edit" value="admin" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
bkLib.onDomLoaded(function(){
	new nicEditor({buttonList : ['link','unlink',]}).panelInstance('tentang');
});
</script>

<?php
	if (isset($_POST['edit']) and $_POST['edit']=="admin") {
		$nama_dpn=$_POST['nama_dpn'];
		$nama_blkng=$_POST['nama_blkng'];
		$jenisklm=$_POST['jenkel'];
		$tgl_lahir=$_POST['tgl_lahir'];
		$username=$data['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$tentang=$_POST['tentang'];
		
		$ubah=mysql_query("update user set nama_dpn='$nama_dpn', nama_blkng='$nama_blkng', id_jenisklm='$jenisklm', tgl_lahir='$tgl_lahir', tentang='$tentang', password='$password', email='$email' where username='$username'");
		
		if ($ubah) {
			direct("?page=edit_user&id=$username&notif=edited");
		}
		
	} else {
		echo "ERROR 404<br />Page Not Found!";
	}
	
	}
} else {
	lokasi("login");
}
?>