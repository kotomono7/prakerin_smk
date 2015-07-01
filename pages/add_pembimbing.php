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
<div align="center"><h3>Tambah Data Pembimbing</h3></div>
<form enctype="multipart/form-data" name="add" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">ID Pembimbing<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input name="id_pembimbing" type="text" id="id_pembimbing" maxlength="5" style="width: 103px;" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>ID Guru<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="spryselect1">
		<select name="id_guru">
        <option>- Silahkan Pilih ID Guru -</option>
        <?php
			$sql=mysql_query("select * from guru order by id_guru");
			while($guru=mysql_fetch_array($sql)){
				echo "<option value='".$guru['id_guru']."'>".$guru['id_guru']." - ".$guru['nama']."</option>";
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
			echo "<div id='box-success'>Data berhasil disimpan<br />Klik <a href='?page=data_pembimbing'>disini</a> untuk melihat</div>";
			break;
			break;
			case "failed":
			echo "<div id='box-error' style='width: 350px;'>Data gagal disimpan<br /><i>ID Pembimbing</i> yang Anda masukkan sudah ada</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>	 </td>
    </tr>
</table>
<input type="hidden" name="tambah" value="pembimbing" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>

<?php
	if (isset($_POST['tambah']) and $_POST['tambah']=="pembimbing") {
		$id_pembimbing=$_POST['id_pembimbing'];
		$id_guru=$_POST['id_guru'];
		
		$tambah=mysql_query("insert into pembimbing values('$id_pembimbing','$id_guru')");
		
		if ($tambah) {
			direct("?page=add_pembimbing&notif=added");
		} else {
			direct("?page=add_pembimbing&notif=failed");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>i