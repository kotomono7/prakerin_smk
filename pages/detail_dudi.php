<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
	
	$id=$_GET['id'];
	$sql=mysql_query("select * from du_di where id_dudi='$id'");
	$data=mysql_fetch_array($sql);
	
		if ($data['alamat']=="") {
			$alamat="(masih kosong)";
		} else {
			$alamat=$data['alamat'];
		}
		
		if ($data['tentang']=="") {
			$tentang="(masih kosong)";
		} else {
			$tentang=$data['tentang'];
		}
		
		if ($data['email']=="") {
			$email="(masih kosong)";
		} else {
			$email=$data['email'];
		}
		
		if ($data['foto']=="") {
			$foto="default.jpg";
		} else {
			$foto=$data['foto'];
		}
?>

<div style="margin-top: 20px;">
<div align="center"><h3>Profil Perusahaan (DU/DI)</h3></div>
<table width="100%" cellpadding="3">
  <tr>
    <td width="37%" rowspan="5" align="center" valign="top"><img alt="<?php echo $foto; ?>" title="<?php echo $data['nama_dudi']; ?>" src="images/user/<?php echo $foto; ?>" width="99%" height="auto"></td>
    <td width="20%" valign="top">Nama DU/DI</td>
    <td align="center" valign="top">:</td>
    <td width="46%" valign="top"><?php echo $data['nama_dudi']; ?></td>
  </tr>
  <tr>
    <td valign="top">E-mail</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></td>
  </tr>
  <tr>
    <td valign="top">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><?php echo $alamat; ?></td>
  </tr>
  <tr>
    <td valign="top">Tentang</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><?php echo $tentang; ?></td>
  </tr>
</table>
</div>
</div>
</div>