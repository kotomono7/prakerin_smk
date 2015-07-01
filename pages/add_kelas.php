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
<div align="center"><h3>Tambah Data Kelas</h3></div>
<form enctype="multipart/form-data" name="add" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">ID Kelas<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input name="id_kelas" type="text" id="id_kelas" maxlength="5" style="width: 103px;" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Nama Kelas<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield2">
	<input name="nama_kls" type="text" id="nama_kls" maxlength="10" style="width: 103px;" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>
	</td>
  </tr>
  <tr>
    <td>Jumlah Siswa<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield3">
	<input name="jml_siswa" type="text" id="jml_siswa" maxlength="5" style="width: 103px;" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>
	</td>
  </tr>
  <tr>
    <td>ID Jurusan<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="spryselect1">
		<select name="jurusan">
        <option>- Pilih Jurusan/Program Keahlian -</option>
        <?php
			$sql=mysql_query("select * from jurusan");
			while($jrs=mysql_fetch_array($sql)){
				echo "<option value='".$jrs['id_jurusan']."'>".$jrs['nm_jurusan']."</option>";
			}
		?>
      </select> <span class="selectRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
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
			case "added":
			echo "<div id='box-success'>Data berhasil disimpan<br />Klik <a href='?page=data_kelas'>disini</a> untuk melihat</div>";
			break;
			break;
			case "failed":
			echo "<div id='box-error' style='width: 350px;'>Data gagal disimpan<br /><i>ID Kelas</i> yang Anda masukkan sudah ada</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>	 </td>
    </tr>
</table>
<input type="hidden" name="tambah" value="kelas" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>

<?php
	if (isset($_POST['tambah']) and $_POST['tambah']=="kelas") {
		$id_kelas=$_POST['id_kelas'];
		$nama_kls=$_POST['nama_kls'];
		$jml_siswa=$_POST['jml_siswa'];
		$jurusan=$_POST['jurusan'];
		
		$tambah=mysql_query("insert into kelas values('$id_kelas','$nama_kls','$jurusan','$jml_siswa')");
		
		if ($tambah) {
			direct("?page=add_kelas&notif=added");
		} else {
			direct("?page=add_kelas&notif=failed");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>i