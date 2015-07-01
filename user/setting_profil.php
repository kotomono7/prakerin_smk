<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
	$user=$_SESSION['user'];
	$table=$_SESSION['table'];
	$sql=mysql_query("select * from $table where username='$user'");
	$rows=mysql_num_rows($sql);
	
	if ($rows==1) {
		$data=mysql_fetch_array($sql);
	}
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Setting Profil</h3></div>

<?php
	if ($table=="user") {
		include "user/setting_profil_user.php";
	} else if ($table=="guru") {
		include "user/setting_profil_guru.php";	
	} else if ($table=="du_di") {
		include "user/setting_profil_perusahaan.php";
	} else if ($table=="siswa") {
		include "user/setting_profil_siswa.php";
	}
?>

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
	if (isset($_POST['simpan']) and $_POST['simpan']=="profil") {
		if ($table=="user") {
			$nama_dpn=$_POST['nama_dpn'];
			$nama_blkng=$_POST['nama_blkng'];
			$jenisklm=$_POST['jenisklm'];
			$tgl_lahir=$_POST['tgl_lahir'];
			$email=$_POST['email'];
			$tentang=$_POST['tentang'];
			$primary="username";
			$key=$data['username'];
			$ubah=mysql_query("update $table set nama_dpn='$nama_dpn', nama_blkng='$nama_blkng', id_jenisklm='$jenisklm', tgl_lahir='$tgl_lahir', email='$email', tentang='$tentang' where $primary='$key'") or die (mysql_error());
			direct("?page=setting_profil&notif=success");
		} else if ($table=="guru") {
			$nip=$_POST['nip'];
			$nama=$_POST['nama'];
			$jenisklm=$_POST['jenisklm'];
			$tmp_lahir=$_POST['tmp_lahir'];
			$tgl_lahir=$_POST['tgl_lahir'];
			$alamat=$_POST['alamat'];
			$email=$_POST['email'];
			$no_telp=$_POST['no_telp'];
			$primary="id_guru";
			$key=$data['id_guru'];
			$ubah=mysql_query("update $table set nip='$nip', nama='$nama', id_jenisklm='$jenisklm', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', email='$email', no_telpon='$no_telp' where $primary='$key'") or die (mysql_error());
			direct("?page=setting_profil&notif=success");
		} else if ($table=="du_di") {
			$nama_dudi=$_POST['nama_dudi'];
			$alamat=$_POST['alamat'];
			$email=$_POST['email'];
			$tentang=$_POST['tentang'];
			$primary="id_dudi";
			$key=$data['id_dudi'];
			$ubah=mysql_query("update $table set nama_dudi='$nama_dudi', alamat='$alamat', email='$email', tentang='$tentang' where $primary='$key'") or die (mysql_error());
			direct("?page=setting_profil&notif=success");
		} else if ($table=="siswa") {
			$nama=$_POST['nama'];
			$jenisklm=$_POST['jenisklm'];
			$tmp_lahir=$_POST['tmp_lahir'];
			$tgl_lahir=$_POST['tgl_lahir'];
			$email=$_POST['email'];
			$no_telp=$_POST['no_telp'];
			$primary="nis";
			$key=$data['nis'];
			$ubah=mysql_query("update $table set nama='$nama', id_jenisklm='$jenisklm', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', no_telpon='$no_telp', email='$email' where $primary='$key'") or die (mysql_error());
			direct("?page=setting_profil&notif=success");
		}
	}
	
} else {
	lokasi("login");
}
?>