<?php
	if (isset($_SESSION['user'])) {
		$username=$_SESSION['user'];
		$sql=mysql_query("select * from user where username='$username'");
		$data=mysql_fetch_array($sql);
		$level=$data['level'];
?>

<div style="width: 700px; float: left; margin: 17px 0 0 10px;">
<div id="box-success">
<b>Pesan:</b><br />Anda sudah berhasil login!
</div>
</div>
<meta http-equiv="refresh" content="2;url=?page=<?php echo $level; ?>" />

<?php
	} else {
?>

<div style="width: 700px; float: left; margin: 15px 0 0 15px;">

<?php
	include "inc/breadcrumbs.php";
?>

<div align="center" style="margin-top: 20px;">
<h3>Login Area</h3>
<form name="login" action="pages/exec_login.php" method="post">
<table bgcolor="#C0DEFE" width="400px" border="0" align="center" cellpadding="3" style="padding-top: 10px; padding-bottom: 5px; border: 1px solid #3366FF; -moz-border-radius: 7px; -webkit-border-radius: 7px; -o-border-radius: 7px; border-radius: 7px; margin: 15px;">
      <tr>
        <td colspan="3" align="center"></td>
      </tr>
      <tr>
        <td width="114" align="right" style="padding-top: 5px;">Username</td>
        <td width="3" align="center">:</td>
        <td width="230" style="padding-top: 5px;">
		<span id="sprytextfield1">
		<input type="text" name="username" class="input-login" size="23" />
		<span class="tooltips">Silahkan isi field ini sesuai dengan username Anda!<span class="tooltips-pointer"></span>		</span>		</span>		</td>
      </tr>
      <tr>
        <td align="right">Password</td>
        <td align="center">:</td>
        <td>
		<span id="sprytextfield2">
		<input type="password" name="password" class="input-login" size="23" />
		<span class="tooltips">Silahkan isi field ini sesuai dengan password Anda!<span class="tooltips-pointer"></span></span>		</span>		</td>
      </tr>
	  <tr>
	    <td align="right">Hak Akses </td>
	    <td align="center">:</td>
	    <td>
		<span id="spryselect1">
		<select name="akses">
			<option value="">- Plih Satu -</option>
			<option value="user">Administrator</option>
			<option value="du_di">Perusahaan</option>
			<option value="guru">Guru</option>
			<option value="siswa">Siswa</option>
		</select>
		</span>
		</td>
	    </tr>
	  <tr>
        <td align="right"></td>
        <td align="center"></td>
        <td><input type="submit" name="login" value="Login" class="button-style" /> <input type="reset" name="batal_input" value="Batal" class="button-style" /></td>
      </tr>
      <tr>
        <td colspan="3" align="center" valign="middle" style="padding-bottom: 15px; padding-top: 10px;"><?php include "inc/notif.php"; ?></td>
      </tr>
  </table>
</form>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>

<?php
	}
?>