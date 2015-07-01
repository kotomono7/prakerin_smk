<?php
if (isset($_SESSION['login']) and $_SESSION['login']==1) {
	$user=$_SESSION['user'];
	$table=$_SESSION['table'];
	$level=$_SESSION['level'];
	
	if ($table=="siswa") {
		$sql=mysql_query("select * from view_siswa where username='$user'");
	} else {
		$sql=mysql_query("select * from $table where username='$user'");
	}
	
	$rows=mysql_num_rows($sql);
	$data=mysql_fetch_array($sql);
	
	if ($level!=="perusahaan") {
		if ($rows==1) {
			if ($data['id_jenisklm']=="L") {
				$jenkel="Laki-laki";
			} else if ($data['id_jenisklm']=="P") {
				$jenkel="Perempuan";
			}
		}
	}
	
	if ($level=="guru" || $level=="siswa") {
		if ($data['no_telpon']=="") {
			$no_telp="(masih kosong)";
		} else {
			$no_telp=$data['no_telpon'];
		}
	}
	
	if ($table!=="user") {
		if ($data['alamat']=="") {
			$alamat="(masih kosong)";
		} else {
			$alamat=$data['alamat'];
		}
	}
	
	if ($table=="user" || $table=="du_di") {
		if ($data['tentang']=="") {
			$tentang="(masih kosong)";
		} else {
			$tentang=$data['tentang'];
		}
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

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 20px;">

<?php
	if ($table=="user") {
		include "user/profil_user.php";
	} else if ($table=="du_di") {
		include "user/profil_perusahaan.php";
	} else if ($table=="guru") {
		include "user/profil_guru.php";
	} else if ($table=="siswa") {
		include "user/profil_siswa.php";
	}
?>

</div>
</div>
</div>

<?php
} else {
	lokasi("login");
}
?>