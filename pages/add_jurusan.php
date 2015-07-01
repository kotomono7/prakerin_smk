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
<div align="center"><h3>Tambah Data Jurusan</h3></div>
<form name="add" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">ID Jurusan<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input type="text" name="id_jrs" maxlength="4" size="10" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Nama Jurusan<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield2">
	<input type="text" name="nama_jrs" maxlength="50" size="40" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
	<input type="submit" name="submit" class="button-style" value="Simpan Data" />	</td>
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
			echo "<div id='box-success'>Data berhasil disimpan<br />Klik <a href='?page=data_jurusan'>disini</a> untuk melihat</div>";
			break;
			case "failed":
			echo "<div id='box-error' style='width: 350px;'>Data gagal disimpan<br /><i>ID Jurusan</i> yang Anda masukkan sudah ada</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>	 </td>
    </tr>
</table>
<input type="hidden" name="tambah" value="jurusan" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>

<?php
	if (isset($_POST['tambah']) and $_POST['tambah']=="jurusan") {
		$id=$_POST['id_jrs'];
		$nama=$_POST['nama_jrs'];
		
		$tambah=mysql_query("insert into jurusan values('$id','$nama')");
		
		if ($tambah) {
			direct("?page=add_jurusan&notif=added");
		} else {
			direct("?page=add_jurusan&notif=failed");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>