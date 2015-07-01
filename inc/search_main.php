<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
	
	$key=$_POST['key'];
	$sql=mysql_query("select * from post_data where judul_post like '%$key%' order by id_post");
	$rows=mysql_num_rows($sql);
?>

<div style="margin-top: 20px;">
<h3>Pencarian Artikel, Berita dan Informasi</h3>

<?php
if ($rows > 0) {
?>

<div style="margin-bottom: 5px;">
Hasil pencarian artikel, berita dan informasi dengan keyword <i><b>"<?php echo $key; ?>"</b></i> :
</div>

<?php
$number=1;
	while ($data=mysql_fetch_array($sql)) {
		$konten=substr($data['konten'],0,250);
		if ($number%2==1) {
			$color="AADDFF";
		} else {
			$color="#EEE";
		}
?>

<table bgcolor="<?php echo $color; ?>" width="100%" style="text-align: left; padding: 3px;">
   <tr>
      <td style="font-weight: bold; size: 16px;"><a href="?page=full_post&id=<?php echo $data['id_post']; ?>"><?php echo $data['judul_post']; ?></a></td>
   </tr>
   <tr>
      <td style="font-size: 12px;"><img src="images/main/date.png" alt="date.png" width="16" height="16" style="margin-bottom: -2px;" /> <?php echo $data['waktu']; ?> <img src="images/main/user.png" alt="user.png" width="16" height="16" style="margin-bottom: -2px;" /> Oleh: <?php echo $data['oleh']; ?></td>
   </tr>
</table>
<div style="border-bottom: 1px solid #ccc; margin-bottom: 7px;"></div>

<?php
	$number++;
	}
?>

<table width="100%" style="margin: 0; padding-bottom: 0;">
   <tr>
      <td align="left" width="60%">
	  </td>
	  <td align="right" width="40%">
Jumlah: <b><?php echo $rows; ?></b> postingan
	  </td>
   </tr>
</table>

<?php
} else {
?>

Tidak ditemukan artikel, berita, atau informasi dengan keyword <i><b>"<?php echo $key; ?>"</b></i>. Silahkan ulangi pencarian dengan keyword yang lain!

<?php
}
?>

</div>

</div>
</div>