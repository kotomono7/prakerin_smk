<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$level=$_SESSION['level'];
	
	if ($level=="superuser" || $level=="admin") {
		$id=$_GET['id'];
		$sql=mysql_query("select * from pembimbing where id_pembimbing='$id'");
		$data=mysql_fetch_array($sql);
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Edit Data Pembimbing</h3></div>
<form enctype="multipart/form-data" name="edit" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">ID Pembimbing<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input name="id_pembimbing" type="text" id="id_pembimbing" maxlength="5" style="width: 103px;" value="<?php echo $data['id_pembimbing']; ?>" disabled="disabled" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>ID Guru<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<?php
		$x=$data['id_guru'];
		
		$k=mysql_query("select * from guru where id_guru='$x' order by id_guru");
		$l=mysql_fetch_array($k);
		$m=mysql_query("select * from guru where id_guru!='$x' order by id_guru");
	?>
	<span id="spryselect1">
		<select name="id_guru">
        <option>- Silahkan Pilih ID Guru -</option>
       <option value="<?php echo $l['id_guru']; ?>" selected="selected"><?php echo $l['id_guru']." - ".$l['nama']; ?></option>
          <?php
		  	while ($n=mysql_fetch_array($m)) {
		  ?>
		  <option value="<?php echo $n['id_guru']; ?>"><?php echo $n['id_guru']." - ".$n['nama']; ?></option>
		<?php
			}
		?>
		</select>
	<span class="selectRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
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
			echo "<div id='box-success'>Perubahan berhasil disimpan<br />Klik <a href='?page=data_pembimbing'>disini</a> untuk melihat</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>	 </td>
    </tr>
</table>
<input type="hidden" name="edit" value="pembimbing" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>

<?php
	if (isset($_POST['edit']) and $_POST['edit']=="pembimbing") {
		$id_pembimbing=$data['id_pembimbing'];
		$id_guru=$_POST['id_guru'];
		
		$ubah=mysql_query("update pembimbing set id_guru='$id_guru' where id_pembimbing='$id_pembimbing'");
		
		if ($ubah) {
			direct("?page=edit_pembimbing&id=$id_pembimbing&notif=edited");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>