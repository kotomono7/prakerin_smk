<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
	
	$id=$_GET['id'];
	$sql=mysql_query("select * from post_data where id_post='$id'");
	$data=mysql_fetch_array($sql);
?>

<div style="margin-top: 20px;">
<h3><a href="?page=full_post&id=<?php echo $data['id_post']; ?>"><?php echo $data['judul_post']; ?></a></h3>
<div style="color: #666; font-size: 12px; margin-top: -10px;">
<img src="images/main/date.png" alt="date.png" width="16" height="16" style="margin-bottom: -2px;" /> <?php echo $data['waktu']; ?> <img src="images/main/user.png" alt="user.png" width="16" height="16" style="margin-bottom: -2px;" /> Oleh: <?php echo $data['oleh']; ?>
</div>
<?php echo $data['konten']; ?>
</div>

</div>
</div>