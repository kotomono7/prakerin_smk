<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$level=$_SESSION['level'];
	
	if ($level=="superuser" || $level=="admin" || $level=="guru") {
		$id=$_GET['id'];
		$sql=mysql_query("select * from monitoring where id_monitoring='$id'");
		$data=mysql_fetch_array($sql);
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Edit Data Perusahaan (DU/DI)</h3></div>
<form enctype="multipart/form-data" name="add" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">ID Pembimbing<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input name="id_pmb" type="text" id="id_pmb" size="10" maxlength="5" value="<?php echo $data['id_pembimbing']; ?>" disabled="disabled" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Tanggal<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield2">
	<input type="text" name="tgl" size="10" value="<?php echo $data['tgl']; ?>" />
	<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.add.tgl); return false;">
	<img name="popcal" align="absmiddle" style="border:none" src="date/calender.jpeg" width="34" height="30" border="0" alt="calender.jpeg">	</a>
		
	<!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
	<iframe width="100" height="200" name="gToday:normal:date/agenda.js" id="gToday:normal:date/agenda.js" src="date/ipopeng.htm" 
	scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:fixed; top:-500px; left:-500px;">	</iframe>
	<span class="textfieldRequiredMsg">Mohon isi field ini!</span></span>	</td>
  </tr>
  <tr>
    <td width="22%">ID DU/DI<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<?php
		$x=$data['id_dudi'];
		
		$i=mysql_query("select * from du_di where id_dudi='$x' order by id_dudi");
		$j=mysql_fetch_array($i);
		$k=mysql_query("select * from du_di where id_dudi!='$x' order by id_dudi");
	?>
	<span id="spryselect1">
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
		</select>
    <span class="selectRequiredMsg">Mohon isi field ini!</span>	</span>	</td>
  </tr>
  <tr>
    <td>Kegiatan Siswa<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td><span id="sprytextfield3">
	<input name="kegiatan" type="text" id="kegiatan" style="width: 327px;" value="<?php echo $data['jns_keg']; ?>" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>	</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>Tulis <i>Kegiatan Siswa</i> yang bersangkutan</td>
  </tr>
  <tr>
    <td valign="top">Kritik & Saran</td>
    <td align="center" valign="top">:</td>
    <td><textarea name="kritik_saran" id="kritik_saran" cols="50" rows="10"><?php echo $data['kritik_saran']; ?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Tulis <i>Kritik & Saran</i> tentang kegiatan yang siswa kerjakan</td>
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
			echo "<div id='box-success'>Perubahan berhasil disimpan<br />Klik <a href='?page=data_monitoring'>disini</a> untuk melihat</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>	 </td>
    </tr>
</table>
<input type="hidden" name="edit" value="monitoring" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
bkLib.onDomLoaded(function(){
	new nicEditor({buttonList : ['link','unlink',]}).panelInstance('kritik_saran');
});
</script>

<?php
	if (isset($_POST['edit']) and $_POST['edit']=="monitoring") {
		$id_monitoring=$data['id_monitoring'];
		$tgl=$_POST['tgl'];
		$id_dudi=$_POST['id_dudi'];
		$kegiatan=$_POST['kegiatan'];
		$kritik_saran=$_POST['kritik_saran'];
		
		$ubah=mysql_query("update monitoring set tgl='$tgl', id_dudi='$id_dudi', jns_keg='$kegiatan', kritik_saran='$kritik_saran' where id_monitoring='$id_monitoring'");
		
		if ($ubah) {
			direct("?page=edit_monitoring&id=$id_monitoring&notif=edited");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>