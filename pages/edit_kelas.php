<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$level=$_SESSION['level'];
	
	if ($level=="superuser" || $level=="admin") {
		$id=$_GET['id'];
		$sql=mysql_query("select * from kelas where id_kelas='$id'");
		$data=mysql_fetch_array($sql);
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Edit Data Kelas</h3></div>
<form enctype="multipart/form-data" name="add" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">ID Kelas<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input name="id_kelas" type="text" id="id_kelas" maxlength="5" style="width: 103px;" value="<?php echo $data['id_kelas']; ?>" disabled="disabled" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Nama Kelas</td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield2">
	<input name="nama_kls" type="text" id="nama_kls" maxlength="10" style="width: 103px;" value="<?php echo $data['nama_kelas']; ?>" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>
	</td>
  </tr>
  <tr>
    <td>Jumlah Siswa</td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield3">
	<input name="jml_siswa" type="text" id="jml_siswa" maxlength="5" style="width: 103px;" value="<?php echo $data['jml_siswa']; ?>" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>
	</td>
  </tr>
  <tr>
    <td>ID Jurusan<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<?php
		$x=$data['id_jurusan'];
		
		$k=mysql_query("select * from jurusan where id_jurusan='$x' order by id_jurusan");
		$l=mysql_fetch_array($k);
		$m=mysql_query("select * from jurusan where id_jurusan!='$x' order by id_jurusan");
	?>
	<span id="spryselect1">
	<select name="jurusan">
        <option>- Pilih Jurusan/Program Keahlian -</option>
      	<option value="<?php echo $l['id_jurusan']; ?>" selected="selected"><?php echo $l['id_jurusan']." - ".$l['nm_jurusan']; ?></option>
        <?php
		  	while ($n=mysql_fetch_array($m)) {
		?>
   		<option value="<?php echo $n['id_jurusan']; ?>"><?php echo $n['id_jurusan']." - ".$n['nm_jurusan']; ?></option>
		<?php
			}
		?>
    </select>
	<span class="selectRequiredMsg">Mohon isi field ini!</span>
	</span></td>
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
			echo "<div id='box-success'>Perubahan berhasil disimpan<br />Klik <a href='?page=data_kelas'>disini</a> untuk melihat</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>	 </td>
    </tr>
</table>
<input type="hidden" name="edit" value="kelas" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>

<?php
	if (isset($_POST['edit']) and $_POST['edit']=="kelas") {
		$id_kelas=$data['id_kelas'];
		$nama_kls=$_POST['nama_kls'];
		$jml_siswa=$_POST['jml_siswa'];
		$jurusan=$_POST['jurusan'];
		
		$ubah=mysql_query("update kelas set nama_kelas='$nama_kls', id_jurusan='$jurusan', jml_siswa='$jml_siswa' where id_kelas='$id_kelas'");
		if ($ubah) {
			direct("?page=edit_kelas&id=$id_kelas&notif=edited");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>