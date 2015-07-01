<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
	$user=$_SESSION['user'];
	$table=$_SESSION['table'];
	$sql=mysql_query("select * from $table where username='$user'");
	$data=mysql_fetch_array($sql);
	$rows=mysql_num_rows($sql);
	
	if (isset($_POST['edit']) and $_POST['edit']=="password") {
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
			
			$newpass=mysql_real_escape_string($_POST['newpass']);
			$ubah=mysql_query("update $table set password='$newpass' where $primary='$key'");
			lokasi("ganti_password&notif=success");
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
<div align="center"><h3>Ganti Password</h3></div>
<?php
	if ($rows==1) {
		$password=$data['password'];
	}
?>
<form method="post">
<table width="100%" align="center" cellpadding="3" cellspacing="3">
  <tr>
    <td width="30%">Password Lama</td>
    <td width="2%" align="center">:</td>
    <td width="68%">
	<span id="sprypassword1">
    	<input name="oldpass" type="password" id="oldpass" value="<?php echo $password; ?>" size="30" maxlength="30" disabled="disabled" />
    </span></td>
  </tr>
  <tr>
    <td>Ulangi Password Lama<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="spryconfirm1">
		<input name="oldpass2" type="password" id="oldpass2" size="30" maxlength="30" />
	<span class="confirmRequiredMsg">Mohon isi field ini!</span><span class="confirmInvalidMsg">Password lama tidak cocok!</span>
	</span>
	</td>
  </tr>
  <tr>
    <td>Password Baru<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprypassword2">
        <input name="newpass" type="password" id="newpass" size="30" maxlength="30" />
    <span class="passwordRequiredMsg">Mohon isi field ini!</span>
	</span>
	</td>
  </tr>
  <tr>
    <td>Ulangi Password Baru<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="spryconfirm2">
        <input name="newpass2" type="password" id="newpass2" size="30" maxlength="30" />
    <span class="confirmRequiredMsg">Mohon isi field ini!</span><span class="confirmInvalidMsg">Password baru tidak cocok!</span>
	</span>
	</td>
  </tr>
  <tr><input name="edit" type="hidden" value="password">
    <td colspan="2">&nbsp;</td>
    <td><input name="simpan" type="submit" id="simpan" class="button-style" value="Simpan"></td>
  </tr>
  <tr>
    <td colspan="3"><span style="color: red;"><sup> * </sup>Data tidak boleh kosong!</span></td>
    </tr>
  <tr>
    <td colspan="3" align="center">
	<?php
	  	$note=(isset($_GET['notif']))? $_GET['notif']: "blank";
		switch ($note) {
			case "success":
			echo "<div id='box-success'>Password baru berhasil disimpan</div>";
			break;
			case "blank": default:
			echo "";
		}
	  ?>
	 </td>
    </tr>
</table>
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprypassword1=new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm1=new Spry.Widget.ValidationConfirm("spryconfirm1", "oldpass");
var sprypassword2=new Spry.Widget.ValidationPassword("sprypassword2");
var spryconfirm2=new Spry.Widget.ValidationConfirm("spryconfirm2", "newpass");
</script>

<?php
} else {
	lokasi("login");
}
?>