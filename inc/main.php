<table width="100%" border="0" align="center">
  <tr>
    <td width="70%" align="left" valign="top">
	<fieldset id="news">
	<legend>ARTIKEL, BERITA DAN INFORMASI</legend>
	
	<?php
	include "inc/class_paging.php";
	
	$limit=7;
	$query=new CnnNav($limit,'post_data','*','id_post');
	$result=$query ->getResult();
	
	if (isset($_GET['offset'])) {
		$number=($limit*$_GET['offset'])+1; 
	} else {
		$number=1;
	}
	
	while ($data=mysql_fetch_array($result)) {
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
      <td style="color: #666; font-size: 12px;"><div style="margin-top: -3px;"><img src="images/main/date.png" alt="date.png" width="16" height="16" style="margin-bottom: -2px;" /> <?php echo $data['waktu']; ?> <img src="images/main/user.png" alt="user.png" width="16" height="16" style="margin-bottom: -2px;" /> Oleh: <?php echo $data['oleh']; ?></div></td>
   </tr>
</table>
<div style="border-bottom: 1px solid #ccc; margin-bottom: 7px;"></div>

<?php
	$number++;
	}
	
	$x="select * from post_data";
	$y=mysql_query($x);
	$rows=mysql_num_rows($y);
?>

<table width="100%" style="margin: 0; padding-bottom: 0;">
   <tr>
      <td align="left" width="60%">
	<?php
		if ($rows > $limit) {
	?>
Halaman: <?php $query->printNav(); ?>
	<?php
		}
	?>
	  </td>
	  <td align="right" width="40%">
Jumlah: <b><?php echo $rows; ?></b> postingan
	  </td>
   </tr>
</table>
	
	</fieldset>
	</td>
    <td width="30%" align="left" valign="top">
	<fieldset id="album">
	<legend>ALBUM FOTO</legend>
	   <table width="100%" style="height: 350px;">
	      <tr>
	         <td>
<marquee behavior="alternate" direction="up" width="100%" height="425px" align="top" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="3" scrolldelay="3">
<a href="images/gallery/1.jpg" target="_blank">
<img src="images/gallery/1.jpg" />
</a>
<a href="images/gallery/2.jpg" target="_blank">
<img src="images/gallery/2.jpg" />
</a>
<a href="images/gallery/3.jpg" target="_blank">
<img src="images/gallery/3.jpg" />
</a>
<a href="images/gallery/4.jpg" target="_blank">
<img src="images/gallery/4.jpg" />
</a>
<a href="images/gallery/5.jpg" target="_blank">
<img src="images/gallery/5.jpg" />
</a>
<a href="images/gallery/6.jpg" target="_blank">
<img src="images/gallery/6.jpg" />
</a>
<a href="images/gallery/7.jpg" target="_blank">
<img src="images/gallery/7.jpg" />
</a>
<a href="images/gallery/8.jpg" target="_blank">
<img src="images/gallery/8.jpg" />
</a>
<a href="images/gallery/9.jpg" target="_blank">
<img src="images/gallery/9.jpg" />
</a>
</marquee>
			 </td>
	      </tr>
	   </table>
	</fieldset>
	</td>
  </tr>
</table>
