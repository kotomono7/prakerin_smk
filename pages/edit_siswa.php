<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$level=$_SESSION['level'];
	
	if ($level=="superuser" || $level=="admin" || $level=="guru") {
		$id=$_GET['id'];
		$sql=mysql_query("select * from siswa where nis='$id'");
		$data=mysql_fetch_array($sql);
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Edit Data Siswa</h3></div>
<form enctype="multipart/form-data" name="edit" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">NIS<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input name="nis" type="text" id="nis" maxlength="4" style="width: 103px;" value="<?php echo $data['nis']; ?>" disabled="disabled" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Nama Siswa<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield2">
	<input name="nama" type="text" id="nama" size="40" maxlength="50" value="<?php echo $data['nama']; ?>" />
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
	</span>
	</td>
  </tr>
  <tr>
    <td>Kelas<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<?php
		$q=$data['id_kelas'];
		
		$a=mysql_query("select * from kelas where id_kelas='$q' order by id_kelas");
		$b=mysql_fetch_array($a);
		$c=mysql_query("select * from kelas where id_kelas!='$q' order by id_kelas");
	?>
	<span id="spryselect2">
		<select name="kelas">
          <option>- Pilih Satu -</option>
          <option value="<?php echo $b['id_kelas']; ?>" selected="selected"><?php echo $b['nama_kelas']; ?></option>
          <?php
		  	while ($d=mysql_fetch_array($c)) {
		  ?>
		  <option value="<?php echo $d['id_kelas']; ?>"><?php echo $d['nama_kelas']; ?></option>
		<?php
			}
		?>
		</select>
	<span class="selectRequiredMsg">Mohon isi field ini!</span>
	</span>	</td>
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
	<span id="spryselect3">
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
	<span class="selectRequiredMsg">Mohon isi field ini!</span>	</span> </td>
  </tr>
  <tr>
    <td>Tempat, Tgl Lahir<sup><span style="color: red;"> * </span></sup></td>
    <td align="center"><span style="margin-bottom: 5px;">:</span></td>
    <td>
	<span id="sprytextfield3">
		<input type="text" name="tmp_lahir" maxlength="50" size="18" value="<?php echo $data['tmp_lahir']; ?>" />
	</span>, 
	<span id="sprytextfield4">
	<input name="tgl_lahir" type="text" id="tgl_lahir" style="width: 88px;" value="<?php echo $data['tgl_lahir']; ?>" />
	<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.edit.tgl_lahir); return false;">
	<img name="popcal" align="absmiddle" style="border:none" src="date/calender.jpeg" width="34" height="30" border="0" alt="calender.jpeg">	</a>
		
	<!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
	<iframe width="100" height="200" name="gToday:normal:date/agenda.js" id="gToday:normal:date/agenda.js" src="date/ipopeng.htm" 
	scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:fixed; top:-500px; left:-500px;">	</iframe>
	<span class="textfieldRequiredMsg">Mohon isi field ini!</span></span></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td align="center">:</td>
    <td><input name="alamat" type="text" size="40" value="<?php echo $data['alamat']; ?>" /></td>
  </tr>
  <tr>
    <td>No. HP/Telp.</td>
    <td align="center">:</td>
    <td><input type="text" name="no_telp" maxlength="12" size="18" value="<?php echo $data['no_telpon']; ?>" /></td>
  </tr>
  <tr>
    <td>Username<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield5">
	<input type="text" name="username" maxlength="30" size="30" value="<?php echo $data['username']; ?>" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Password<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield6">
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
			echo "<div id='box-success'>Perubahan berhasil disimpan<br />Klik <a href='?page=data_siswa'>disini</a> untuk melihat</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>	 </td>
    </tr>
</table>
<input type="hidden" name="edit" value="siswa" />
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
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
bkLib.onDomLoaded(function(){
	new nicEditor({buttonList : ['link','unlink',]}).panelInstance('tentang');
});
</script>

<?php
	if (isset($_POST['edit']) and $_POST['edit']=="siswa") {
		$nis=$data['nis'];
		$nama=$_POST['nama'];
		$jenisklm=$_POST['jenkel'];
		$kelas=$_POST['kelas'];
		$jurusan=$_POST['jurusan'];
		$tmp_lahir=$_POST['tmp_lahir'];
		$tgl_lahir=$_POST['tgl_lahir'];
		$alamat=$_POST['alamat'];
		$no_telp=$_POST['no_telp'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		
		$ubah=mysql_query("update siswa set nama='$nama', id_jenisklm='$jenisklm', id_kelas='$kelas', id_jurusan='$jurusan', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', no_telpon='$no_telp', username='$username', password='$password', email='$email' where nis='$nis'");
		
		if ($ubah) {
			direct("?page=edit_siswa&id=$nis&notif=edited");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>