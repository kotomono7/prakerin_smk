<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$level=$_SESSION['level'];
	
	if ($level=="superuser" || $level=="admin") {
		$id=$_GET['id'];
		$sql=mysql_query("select * from post_kategori where id_kategori='$id'");
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
<form method="post">
<table width="100%" border="0">
  <tr>
    <td width="20%">Nama Kategori<sup><span style="color: red;"> * </span></sup></td>
    <td width="5%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input name="nama_kategori" type="text" id="nama_kategori" size="50" maxlength="50" value="<?php echo $data['nama_kategori']; ?>" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center"></td>
    <td>Masukkan <i>Nama Kategori</i> baru yang Anda inginkan </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td><input class="button-style" type="submit" value="Simpan Kategori" /></td>
  </tr>
  <tr>
    <td colspan="3"><span style="color: red;"><sup> * </sup>Data tidak boleh kosong!</span></td>
    </tr>
</table>
<input type="hidden" name="edit" value="kategori" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>

<?php
	if (isset($_POST['edit']) and $_POST['edit']=="kategori") {
		$id_kategori=$data['id_kategori'];
		$nama_kategori=ucwords(mysql_real_escape_string($_POST['nama_kategori']));
		
		$ubah=mysql_query("update post_kategori set nama_kategori='$nama_kategori' where id_kategori='$id_kategori'");
		
		if ($ubah) {
			echo "<script>alert('Perubahan kategori berhasil disimpan')</script>";
			direct("?page=data_kategori");
		}
	} 
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>