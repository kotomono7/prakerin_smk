<?php
	include "inc/class_paging.php";
	
	$x="select * from guestbook";
	$y=mysql_query($x);
	$rows=mysql_num_rows($y);
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div id="top-corner"><?php echo $rows;?> Komentar</div>

<?php
	$limit=10;
	$query=new CnnNav($limit,'guestbook','*','no_id');
	$result=$query ->getResult();
	
	while ($data=mysql_fetch_array($result)) {
		if (preg_match('/http:/',$data['website'])) {
			$website=$data['website'];
		} else {
			$website="http://".$data['website'];
		}
		
		echo '<div id="guestbook">';
		echo "<a href='".$website."' target='_blank'>".$data['nama']."</a><br>";
		echo "<span style='color: #666; font-size: 12px;'>".$data['waktu']."</span><br>";
		echo $data['komentar'];
		echo "</div>";
	}
	
	$x="select * from guestbook";
	$y=mysql_query($x);
	$rows=mysql_num_rows($y);
	
	if ($rows > $limit) {
?>

<div id="pagination">
Halaman: <?php $query->printNav(); ?>
</div>

<?php
	}
?>

<div style="margin-top: 10px;">
<div align="center" id="top-corner" style="margin-bottom: 5px;">Tinggalkan Komentar Anda</div>
<form enctype="multipart/form-data" name="add" method="post">
<table width="100%" border="0" cellspacing="0">
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
	<span id="sprytextfield3">
	<input name="website" type="text" size="40" maxlength="100" placeholder="Isikan Alamat Website Anda" style="margin-left: -1px;" /><sup><span style="color: red;"> * </span></sup>
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>
	</span>
	</td>
  </tr>
  <tr>
    <td>
	<textarea name="komentar" id="komentar" style="width: 75%; height: 175px;"></textarea>
	</td>
  </tr>
  <tr>
    <td><input type="submit" name="submit" class="button-style" value="Kirim Komentar" style="margin-left: -1px;" /></td>
  </tr>
</table>
<input type="hidden" name="tambah" value="komentar" />
</form>
</div>
</div>
</div>

<script>
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
bkLib.onDomLoaded(function() {
	new nicEditor({maxHeight : 200}).panelInstance('komentar');
});
</script>

<?php
if (isset($_POST['tambah']) and $_POST['tambah']=="komentar") {
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	$isi=$_POST['komentar'];
	if (empty($isi)) {
		$komentar="(Tanpa Komentar)";
	} else {
		$komentar=$isi;
	}
	$tgl=new datenow;
	$waktu=$tgl->hariini.", ".$tgl->tgl." ".$tgl->bulanini." ".$tgl->thn." | ".$tgl->jam;
	$waktu=mysql_real_escape_string($waktu);
	
	$tambah=mysql_query("insert into guestbook values('default','$nama','$email','$website','$komentar','$waktu')");
	echo "<script>alert('Komentar berhasil dikirim. Terima kasih atas kunjungannya!')</script>";
	direct("?page=guestbook");
}
?>