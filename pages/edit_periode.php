<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {	
	$level=$_SESSION['level'];
	
	if ($level=="superuser" || $level=="admin") {
		$id=$_GET['id'];
		$sql=mysql_query("select * from periode where id_periode='$id'");
		$data=mysql_fetch_array($sql);
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Edit Data Periode</h3></div>
<form name="edit" method="post">
<table width="100%" border="0">
  <tr>
    <td width="23%">ID Periode<sup><span style="color: red;"> * </span></sup></td>
    <td width="1%" align="center">:</td>
    <td width="76%">
	<span id="sprytextfield1">
	<input type="text" name="id_pr" maxlength="5" size="28" value="<?php echo $data['id_periode']; ?>" disabled="disabled" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>
	</span>
	</td>
  </tr>
  <tr>
    <td>Nama Periode<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield2">
	<input type="text" name="nama_pr" maxlength="30" size="28" value="<?php echo $data['nama_periode']; ?>" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>
	</span>
	</td>
  </tr>
  <tr>
    <td>Tanggal Berangkat<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield3">
	<input type="text" name="tgl_on" size="22" value="<?php echo $data['tgl_berangkat']; ?>" />
	<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.edit.tgl_on); return false;">
	<img name="popcal" align="absmiddle" style="border:none" src="date/calender.jpeg" width="34" height="30" border="0" alt="calender.jpeg">
	</a>
		
	<!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
	<iframe width="100" height="200" name="gToday:normal:date/agenda.js" id="gToday:normal:date/agenda.js" src="date/ipopeng.htm" 
	scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:fixed; top:-500px; left:-500px;">
	</iframe>
	<span class="textfieldRequiredMsg">Mohon isi field ini!</span></span>
	</td>
  </tr>
  <tr>
    <td>Tanggal Kembali</td>
    <td align="center">:</td>
    <td>
	<input type="text" name="tgl_off" size="22" value="<?php echo $data['tgl_kembali']; ?>" />
	<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.edit.tgl_off); return false;">
	<img name="popcal" align="absmiddle" style="border:none" src="date/calender.jpeg" width="34" height="30" border="0" alt="calender.jpeg">
	</a>

	<!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
	<iframe width="100" height="200" name="gToday:normal:date/agenda.js" id="gToday:normal:date/agenda.js" src="date/ipopeng.htm" 
	scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:fixed; top:-500px; left:-500px;">
	</iframe>
	</td>
  </tr>
  <tr>
    <td>Tahun Angkatan<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<?php
		$thn1=substr($data['thn_angkatan'],0,4);
		$thn2=substr($data['thn_angkatan'],5,4);
	?>
	<span id="sprytextfield4">
	<input type="text" name="thn1" maxlength="4" size="9" value="<?php echo $thn1; ?>" />
	</span>
	<span style="margin: 4px;">/</span>
	<span id="sprytextfield5">
	<input type="text" name="thn2" maxlength="4" size="9" value="<?php echo $thn2; ?>" />
	<span class="textfieldRequiredMsg">Mohon isi field ini!</span>
	</span>
	</td>
  </tr>
  <tr>
    <td>Junlah Kelas<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield6">
	<input type="text" name="jml_kls" maxlength="4" size="28" value="<?php echo $data['jml_kelas']; ?>" />
	<span class="textfieldRequiredMsg">Mohon isi field ini!</span>
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
			echo "<div id='box-success'>Perubahan berhasil disimpan<br />Klik <a href='?page=data_periode'>disini</a> untuk melihat</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>
	 </td>
    </tr>
</table>
<input type="hidden" name="edit" value="periode" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
</script>

<?php
	if (isset($_POST['edit']) and $_POST['edit']=="periode") {
		$id_pr=$data['id_periode'];
		$nama=$_POST['nama_pr'];
		$tgl_on=$_POST['tgl_on'];
		$tgl_off=$_POST['tgl_off'];
		$angkatan=$_POST['thn1']."/".$_POST['thn2'];
		$jml_kls=$_POST['jml_kls'];
		
		$ubah=mysql_query("update periode set nama_periode='$nama', tgl_berangkat='$tgl_on', tgl_kembali='$tgl_off', thn_angkatan='$angkatan', jml_kelas='$jml_kls' where id_periode='$id_pr'");
		if ($ubah) {
			direct("?page=edit_periode&id=$id_pr&notif=edited");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>