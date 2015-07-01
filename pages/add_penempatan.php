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
<div align="center"><h3>Tambah Data Penempatan</h3></div>
<form enctype="multipart/form-data" name="add" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">NIS<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="spryselect1">
		<select name="nis">
        <option>- Silahkan Pilih NIS -</option>
        <?php
			$x=mysql_query("select * from siswa order by nis");
			while($a=mysql_fetch_array($x)){
				echo "<option value='".$a['nis']."'>".$a['nis']." - ".$a['nama']."</option>";
			}
		?>
      </select> <span class="selectRequiredMsg">Mohon isi field ini!</span>	</span></td>
  </tr>
  <tr>
    <td>ID Pembimbing<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="spryselect2">
		<select name="id_pembimbing">
        <option>- Silahkan Pilih ID Pembimbing -</option>
        <?php
			$y=mysql_query("select * from view_pembimbing order by id_pembimbing");
			while($b=mysql_fetch_array($y)){
				echo "<option value='".$b['id_pembimbing']."'>".$b['id_pembimbing']." - ".$b['nama']."</option>";
			}
		?>
      </select> <span class="selectRequiredMsg">Mohon isi field ini!</span>	</span></td>
  </tr>
  <tr>
    <td>ID DU/DI<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="spryselect3">
		<select name="id_dudi">
        <option>- Silahkan Pilih ID DU/DI -</option>
        <?php
			$z=mysql_query("select * from du_di order by id_dudi");
			while($c=mysql_fetch_array($z)){
				echo "<option value='".$c['id_dudi']."'>".$c['id_dudi']." - ".$c['nama_dudi']."</option>";
			}
		?>
      </select> <span class="selectRequiredMsg">Mohon isi field ini!</span>	</span></td>
  </tr>
  <tr>
    <td>ID Periode<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="spryselect4">
		<select name="id_periode">
        <option>- Silahkan Pilih ID Periode -</option>
        <?php
			$d=mysql_query("select * from periode order by id_periode");
			while($e=mysql_fetch_array($d)){
				echo "<option value='".$e['id_periode']."'>".$e['id_periode']." - ".$e['nama_periode']."</option>";
			}
		?>
      </select> <span class="selectRequiredMsg">Mohon isi field ini!</span>	</span></td>
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
			echo "<div id='box-success'>Data berhasil disimpan<br />Klik <a href='?page=data_penempatan'>disini</a> untuk melihat</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>	 </td>
    </tr>
</table>
<input type="hidden" name="tambah" value="penempatan" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
</script>

<?php
	if (isset($_POST['tambah']) and $_POST['tambah']=="penempatan") {
		$nis=$_POST['nis'];
		$id_pembimbing=$_POST['id_pembimbing'];
		$id_dudi=$_POST['id_dudi'];
		$id_periode=$_POST['id_periode'];
		
		$tambah=mysql_query("insert into penempatan values('default','$nis','$id_pembimbing','$id_dudi','$id_periode')");
		
		if ($tambah) {
			direct("?page=add_penempatan&notif=added");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>i