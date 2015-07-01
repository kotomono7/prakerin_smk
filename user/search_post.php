<script type="text/javascript">
function pilihan(){
var jumKomponen = document.data.length;
  if (document.data[0].checked == true){
	for (i=1; i<=jumKomponen; i++)
	{
		if (document.data[i].type == "checkbox") document.data[i].checked = true;
	}
}
  else if (document.data[0].checked == false){
		for (i=1; i<=jumKomponen; i++)
		{
		if (document.data[i].type == "checkbox") document.data[i].checked = false;
		}
	}
}
</script>

<?php
$menu=isset($_GET['menu'])? $_GET['menu']:'';
$id=isset($_GET['id'])? $_GET['id']:'';

	if ($menu=="hapus") {
		$hapus=mysql_query("delete from post_data where id_post='$id'");
		direct("?page=data_post");
	}
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
	
	$key=isset($_POST['key'])? $_POST['key']:"";
	$sql=mysql_query("select * from view_post where judul_post like '%$key%' order by id_post");
	$rows=mysql_num_rows($sql);
?>

<div style="margin-top: 20px;">
<h3>Pencarian Data Postingan</h3>

<?php
if ($rows > 0) {
?>

<div style="margin-bottom: 5px;">
Hasil pencarian data postingan dengan keyword <i><b>"<?php echo $key; ?>"</b></i> :
</div>
<form method="post" name="data">
<table class="table" width="100%" border="0">
  <tr>
    <th width="5%"><input type="checkbox" name="pilih" onClick="pilihan()"/></th>
    <th width="30%">JUDUL POST</th>
    <th width="13%">KATEGORI</th>
    <th width="12%">OLEH</th>
    <th width="29%">DIPOST PADA</th>
	<th width="11%">OPTION</th>
  </tr>
<?php
	
	$no=0;
	while ($data=mysql_fetch_array($sql)) {
		if ($no%2==1) {
			$color='#eee';
		} else {
			$color='#fff';
		}
?>
  <tr bgcolor="<?php echo $color; ?>">
    <td align="center"><input type="checkbox" name="id<?php echo $no; ?>" value="<?php echo $data['id_post']?>" /></td>
    <td id="left"><?php echo $data['judul_post']?></td>
    <td id="left"><?php echo $data['nama_kategori']?></td>
    <td id="left"><?php echo $data['oleh'];?></td>
    <td id="left"><?php echo $data['waktu']?></td>
	<td align="center">
	<a href="./?page=full_post&id=<?php echo $data['id_post'];?>" target="_blank"><img src="images/detail.png" width="13px" height="auto" title="Lihat post" style="margin-right: 5px;" /></a>
	<a href="?page=edit_post&id=<?php echo $data['id_post'];?>"><img src="images/edit.png" width="13px" height="auto" title="Edit post" style="margin-right: 5px;" /></a>
	<a href="?page=data_post&menu=hapus&id=<?php echo $data['id_post'];?>" <?php hapus()?>><img src="images/delete.png" width="13px" height="auto" title="Hapus post" /></a>
	</td>
  </tr>
<?php
		$no++;
	}
?>
</table>
<input type="hidden" value="<?php echo $no;?>" name="jumlah" />
<div style="width: 50%; float: left; margin-left: -2px; margin-top: 5px; margin-bottom: 15px;">
	<img src="images/arrow.png" style="margin-left: 12px;" />
	<input class="button-style" name="hapus" type="submit" id="hapus" value="Hapus" <?php hapus(); ?>/>
</div>
</form>
<div style="width: 50%; font-size: 12px; float: right; margin-top: 5px; margin-bottom: 15px; text-align: right;">
Jumlah: <b><?php echo $rows; ?></b> postingan
</div>
</table>
<table width="100%" border="0" style="font-size: 12px; margin-top: 3px; margin-bottom: 15px;">
  <tr>
    <td width="75%" align="left">
	<button class="button-style" type="submit" name="back" onclick="history.back()" style="margin-left: -3px;">Kembali</button>
	</td>
	<td width="25%" align="right"></td>
  </tr>
</table>

<?php
} else {
?>

Tidak ditemukan data dengan keyword <i><b>"<?php echo $key; ?>"</b></i>. Silahkan ulangi pencarian dengan keyword yang lain!
<div style="margin-top: 5px;">
<button class="button-style" type="submit" name="back" onclick="history.back()">Kembali</button>
</div>

<?php
}
?>

</div>

</div>
</div>

<?php
if(isset($_POST['hapus']) and $_POST['hapus']=="Hapus"){
	$jumlah=$_POST['jumlah'];
	for ($jum=0; $jum<=$jumlah-1; $jum++){
		if (isset($_POST['id'.$jum])){
			$id = $_POST['id'.$jum];
			$hapus=mysql_query("delete from post_data where id_post='$id'");
			echo "<script>alert('Data berhasil dihapus')</script>";
			direct("?page=data_post");
		}
	}
}
?>