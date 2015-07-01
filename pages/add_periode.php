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
<div align="center"><h3>Tambah Data Periode</h3></div>
<form name="add" method="post">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="22%">ID Periode<sup><span style="color: red;"> * </span></sup></td>
    <td width="3%" align="center">:</td>
    <td width="75%">
	<span id="sprytextfield1">
	<input type="text" name="id_pr" maxlength="5" size="10" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>
	</span>
	</td>
  </tr>
  <tr>
    <td>Nama Periode<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield2">
	<input type="text" name="nama_pr" maxlength="30" size="29" />
    <span class="textfieldRequiredMsg">Mohon isi field ini!</span>
	</span>
	</td>
  </tr>
  <tr>
    <td>Tanggal Berangkat<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield3">
	<input type="text" name="tgl_on" size="22" />
	<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.add.tgl_on); return false;">
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
	<input type="text" name="tgl_off" size="22" />
	<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.add.tgl_off); return false;">
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
	<span id="spryselect1">
		<select name="thn1">
			<option>- Tahun -</option>
            <?php 
				$kunci=date("Y");
				$awal=1945;
				for ($thn=$awal; $thn<=$kunci; $thn++) {
					echo"<option value='$thn'>$thn</option>";
				}
			?>
		</select>
	</span>
	<span>/</span>
	<span id="spryselect2">
		<select name="thn2">
			<option>- Tahun -</option>
            <?php 
				$kunci=date("Y");
				$awal=1945;
				for ($thn=$awal; $thn<=$kunci; $thn++) {
					echo"<option value='$thn'>$thn</option>";
				}
			?>
		</select> <span class="selectRequiredMsg">Mohon isi field ini!</span>
	</span>
	</td>
  </tr>
  <tr>
    <td>Junlah Kelas<sup><span style="color: red;"> * </span></sup></td>
    <td align="center">:</td>
    <td>
	<span id="sprytextfield4">
	<input type="text" name="jml_kls" maxlength="4" size="29" />
	<span class="textfieldRequiredMsg">Mohon isi field ini!</span>
	</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
	<input type="submit" name="submit" class="button-style" value="Simpan Data" />
	</td>
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
			echo "<div id='box-success'>Data berhasil disimpan<br />Klik <a href='?page=data_periode'>disini</a> untuk melihat</div>";
			break;
			case "failed":
			echo "<div id='box-error' style='width: 350px;'>Data gagal disimpan<br /><i>ID Periode</i> yang Anda masukkan sudah ada</div>";
			break;
			case "blank": default:
			echo "";
		}
	?>
	 </td>
    </tr>
</table>
<input type="hidden" name="tambah" value="periode" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
</script>

<?php
	if (isset($_POST['tambah']) and $_POST['tambah']=="periode") {
		$id=$_POST['id_pr'];
		$nama=$_POST['nama_pr'];
		$tgl_on=$_POST['tgl_on'];
		$tgl_off=$_POST['tgl_off'];
		$angkatan=$_POST['thn1']."/".$_POST['thn2'];
		$jml_kls=$_POST['jml_kls'];
		
		$tambah=mysql_query("insert into periode values('$id','$nama','$tgl_on','$tgl_off','$angkatan','$jml_kls')");
		
		if ($tambah) {
			direct("?page=add_periode&notif=added");
		} else {
			direct("?page=add_periode&notif=failed");
		}
	}
	
	} else {
		echo "<br /><center>ERROR 404<br />Page Not Found!</center>";
	}
	
} else {
	lokasi("login");
}
?>