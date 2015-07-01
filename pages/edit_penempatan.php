<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$level=$_SESSION['level'];
	
	if ($level=="superuser" || $level=="admin") {
		$id=$_GET['id'];
		$sql=mysql_query("select * from penempatan where no_id='$id'");
		$data=mysql_fetch_array($sql);
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Edit Data Penempatan</h3></div>
<form enctype="multipart/form-data" name="add" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">NIS<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<?php
		$x=$data['nis'];
		
		$a=mysql_query("select * from siswa where nis='$x' order by nis");
		$b=mysql_fetch_array($a);
		$c=mysql_query("select * from siswa where nis!='$x' order by nis");
	?>
	<span id="spryselect1">
		<select name="nis">
        <option>- Silahkan Pilih NIS -</option>
       	<option value="<?php echo $b['nis']; ?>" selected="selected"><?php echo $b['nis']." - ".$b['nama']; ?></option>
          <?php
		  	while ($d=mysql_fetch_array($c)) {
		  ?>
		  <option value="<?php echo $d['nis']; ?>"><?php echo $d['nis']." - ".$d['nama']; ?></option>
		  <?php
			}
		  ?>
		</select> <span class="selectRequiredMsg">Mohon isi field ini!</span>	</span></td>
  </tr>
  <tr>
    <td>ID Pembimbing<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<?php
		$y=$data['id_pembimbing'];
		
		$e=mysql_query("select * from view_pembimbing where id_pembimbing='$y' order by id_pembimbing");
		$f=mysql_fetch_array($e);
		$g=mysql_query("select * from view_pembimbing where id_pembimbing!='$y' order by id_pembimbing");
	?>
	<span id="spryselect2">
		<select name="id_pembimbing">
        <option>- Silahkan Pilih ID Pembimbing -</option>
       	<option value="<?php echo $f['id_pembimbing']; ?>" selected="selected"><?php echo $f['id_pembimbing']." - ".$f['nama']; ?></option>
          <?php
		  	while ($h=mysql_fetch_array($g)) {
		  ?>
		  <option value="<?php echo $h['id_pembimbing']; ?>"><?php echo $h['id_pembimbing']." - ".$h['nama']; ?></option>
		  <?php
			}
		  ?>
		</select> <span class="selectRequiredMsg">Mohon isi field ini!</span>	</span></td>
  </tr>
  <tr>
    <td>ID DU/DI<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<?php
		$z=$data['id_dudi'];
		
		$i=mysql_query("select * from du_di where id_dudi='$z' order by id_dudi");
		$j=mysql_fetch_array($i);
		$k=mysql_query("select * from du_di where id_dudi!='$z' order by id_dudi");
	?>
	<span id="spryselect3">
		<select name="id_dudi">
		<option>- Silahkan Pilih ID DU/DI -</option>
        <option value="<?php echo $j['id_dudi']; ?>" selected="selected"><?php echo $j['id_dudi']." - ".$j['nama_dudi']; ?></option>
          <?php
		  	while ($l=mysql_fetch_array($k)) {
		  ?>
		  <option value="<?php echo $l['id_dudi']; ?>"><?php echo $l['id_dudi']." - ".$l['nama_dudi']; ?></option>
		  <?php
			}
		  ?>
		</select> <span class="selectRequiredMsg">Mohon isi field ini!</span>	</span></td>
  </tr>
  <tr>
    <td>ID Periode<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<?php
		$q=$data['id_periode'];
		
		$m=mysql_query("select * from periode where id_periode='$q' order by id_periode");
		$n=mysql_fetch_array($m);
		$o=mysql_query("select * from periode where id_periode!='$q' order by id_periode");
	?>
	<span id="spryselect4">
		<select name="id_periode">
		<option>- Silahkan Pilih ID Periode -</option>
        <option value="<?php echo $n['id_periode']; ?>" selected="selected"><?php echo $n['id_periode']." - ".$n['nama_periode']; ?></option>
          <?php
		  	while ($p=mysql_fetch_array($o)) {
		  ?>
		  <option value="<?php echo $p['id_periode']; ?>"><?php echo $p['id_periode']." - ".$p['nama_periode']; ?></option>
		  <?php
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
			case "edited":
			echo "<div id='box-success'>Perubahan berhasil disimpan<br />Klik <a href='?page=data_penempatan'>disini</a> untuk melihat</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>	 </td>
    </tr>
</table>
<input type="hidden" name="edit" value="penempatan" />
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
	if (isset($_POST['edit']) and $_POST['edit']=="penempatan") {
		$no_id=$data['no_id'];
		$nis=$_POST['nis'];
		$id_pembimbing=$_POST['id_pembimbing'];
		$id_dudi=$_POST['id_dudi'];
		$id_periode=$_POST['id_periode'];
		
		$ubah=mysql_query("update penempatan set nis='$nis', id_pembimbing='$id_pembimbing', id_dudi='$id_dudi', id_periode='$id_periode' where no_id='$no_id'");
		
		if ($ubah) {
			direct("?page=edit_penempatan&id=$no_id&notif=edited");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>
