<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$user=$_SESSION['user'];
	$table=$_SESSION['table'];
	$sql=mysql_query("select * from $table where username='$user'");
	$data=mysql_fetch_array($sql);
?>

<script type="text/javascript">
function redirect(){
	window.location="?page=add_kategori";
}
</script>

<?php
if (isset($_POST['tambah']) and $_POST['tambah']=="post") {
	$judul=ucwords(mysql_real_escape_string($_POST['judul_post']));
	$konten=stripslashes($_POST['konten']);
	$konten=mysql_real_escape_string($konten);
	$kategori=$_POST['kategori'];
	$oleh=$data['nama_dpn']." ".$data['nama_blkng'];
	$tgl=new datenow;
	$tanggal=$tgl->hariini.", ".$tgl->tgl." ".$tgl->bulanini." ".$tgl->thn." | ".$tgl->jam;
	$tanggal=mysql_real_escape_string($tanggal);
	$tambah=mysql_query("insert into post_data values ('default','$judul','$konten','$kategori','$oleh','$tanggal')");
	if ($tambah) {
		echo "<script>alert('Postingan berhasil ditambahkan')</script>";
		direct("?page=data_post");
	}
}
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">
<h3>Tambah Postingan Baru</h3>
<form method="post">
<table width="100%" cellpadding="3">
  <tr>
    <td colspan="3">
		<span id="sprytextfield1">
      	<input type="text" name="judul_post" id="judul_post" placeholder="Judul Postingan" size="75" />
		<span class="textfieldRequiredMsg">Mohon isi field ini!</span>
     	</span>
	</td>
  </tr>
  <tr>
    <td colspan="3">
	<?php
		include "ckeditor/ckeditor.php";
		$CKEditor = new CKEditor();
		$CKEditor->returnOutput = true;
		$CKEditor->basePath = 'ckeditor/';
		$CKEditor->config['width'] = "100%";
		$CKEditor->textareaAttributes = array("cols" => 80, "rows" => 20);
		$initialValue = '';
		$config['toolbar'] = array(
			array( 'NumberedList', 'BulletedList','-','Bold', 'Italic', 'Underline','-','JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock','-','TextColor', 'BGColor' ),
			array( 'Cut', 'Copy', 'Paste','-','Undo', 'Redo'),
			array( 'Link', 'Unlink', 'Anchor','-','Find', 'Replace'),
			array( 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar' ),
			array( 'Source', '-', 'Maximize'),
			array('Styles', 'Format', 'Font', 'FontSize')
		);

		$config['skin'] = 'office2003';
		echo $CKEditor->editor("konten", $initialValue, $config);	
	?>
	</td>
  </tr>
  <tr>
    <td width="50%" align="left">
    <span id="spryselect1" style="margin-left: -1px;">
      <select name="kategori">
        <option>- Pilih Kategori -</option>
        <?php
		$sql=mysql_query("select * from post_kategori");
		while($kategori=mysql_fetch_array($sql)){
			echo "<option value='".$kategori['id_kategori']."'>".$kategori['nama_kategori']."</option>";
		}
		?>
        <option value="0" onclick="redirect()">Buat Kategori Baru</option>
      </select>
	  <span class="selectRequiredMsg">Mohon isi field ini!</span>
    </span>
	</td>
    <td width="50%" align="right"><input class="button-style" type="submit" value="Simpan Postingan" /></td>
  </tr>
</table>
<input type="hidden" name="tambah" value="post" />
</form>
</div>
</div>
</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>

<?php
} else {
	lokasi("login");
}
?>