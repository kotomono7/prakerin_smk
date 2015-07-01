<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<h3>Contact Us</h3>
Punya Keluhan? Belum sempat menyampaikan keluhan tersebut secara langsung kepada guru yang bersangkutan? Selesaikan masalah Anda dengan segera, silahkan kirim pesan keluhan Anda kepada kami melalui form yang tersedia dibawah ini, kami ada untuk membantu Anda!
<form enctype="multipart/form-data" name="add" method="post">
<table width="100%" border="0" cellspacing="0" style="margin-top: 5px;">
  <tr>
    <td>
	<span id="sprytextfield1">
	<input name="nama" type="text" size="40" maxlength="50" placeholder="Isikan Nama Anda" style="margin-left: -1px;" /><sup><span style="color: red;"> * </span></sup>
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>
	</span>
	</td>
  </tr>
  <tr>
    <td>
	<span id="sprytextfield2">
	<input name="email" type="email" size="40" maxlength="100" placeholder="Isikan E-mail Anda" style="margin-left: -1px;" /><sup><span style="color: red;"> * </span></sup>
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>
	</span>
	</td>
  </tr>
  <tr>
    <td>
	<textarea name="pesan" id="pesan" style="width: 75%; height: 175px;"></textarea>
	</td>
  </tr>
  <tr>
    <td><input type="submit" name="submit" class="button-style" value="Kirim Pesan" style="margin-left: -1px;" /></td>
  </tr>
</table>
<input type="hidden" name="tambah" value="pesan" />
</form> 
</div>

</div>
</div>

<script>
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
bkLib.onDomLoaded(function() {
	new nicEditor({maxHeight : 200}).panelInstance('pesan');
});
</script>

<?php
if (isset($_POST['tambah']) and $_POST['tambah']=="pesan") {
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$isi=$_POST['pesan'];
	if (empty($isi)) {
		$pesan="(Tanpa Komentar)";
	} else {
		$pesan=$isi;
	}
	$tgl=new datenow;
	$waktu=$tgl->hariini.", ".$tgl->tgl." ".$tgl->bulanini." ".$tgl->thn." | ".$tgl->jam;
	$waktu=mysql_real_escape_string($waktu);
	
	$tambah=mysql_query("insert into keluhan values('default','$nama','$email','$pesan','$waktu')");
	echo "<script>alert('Pesan berhasil dikirim. Terima kasih atas kejujuran Anda!')</script>";
	direct("?page=contact");
}
?>