<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<h3>Tambah Kategori Baru</h3>
<form method="post">
<table width="100%" border="0">
  <tr>
    <td width="20%">Nama Kategori<sup><span style="color: red;"> * </span></sup></td>
    <td width="5%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input name="nama_kategori" type="text" id="nama_kategori" size="50" maxlength="50" />
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
<input type="hidden" name="tambah" value="kategori" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>

<?php
if(isset($_POST['tambah']) and $_POST['tambah']=="kategori"){
	$nama_kategori=ucwords(mysql_real_escape_string($_POST['nama_kategori']));
	$jumlah=mysql_num_rows(mysql_query("select * from post_kategori where nama_kategori='$nama_kategori'"));
	
	if($jumlah==0){
		mysql_query("insert into post_kategori values('default','$nama_kategori')");
		echo "<script>alert('Kategori baru berhasil disimpan')</script>";
		direct("?page=data_kategori");
	} else{
		echo "<script>alert('Kategori yang Anda inginkan sudah ada')</script>";
		direct("?page=add_kategori");
	}
}
?>