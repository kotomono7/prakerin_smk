<?php
	if (isset($_SESSION['login']) and $_SESSION['login']==1) {		
		$user=$_SESSION['user'];
		$level=$_SESSION['level'];
?>

			<div align="left" id="sidebar">
				<div class="ribbon">CONTROL MENU</div>
				<div style="margin: 10px 10px 0 13px; font-size: 14px;">Apa kabar, <b><i><?php echo $user; ?>!</i></b></div>
<?php
			if ($level=='superuser' || $level=="admin") {
?>				
				<ul>
					<?php
						if ($level=='superuser') {
							$menu="Control Panel";
						} else {
							$menu="Panel Admin";
						}
					?>
					<li><a href="?page=dashboard"><?php echo $menu; ?></a></li>
					<li><a href="?page=profil_saya">Profil Saya</a></li>
					<li><a href="?page=ganti_foto">Ganti Foto</a></li>
					<li><a href="?page=ganti_password">Ganti Password</a></li>
					<li><a href="?page=setting_profil">Setting Profil</a></li>
				</ul>
<?php
			} else if ($level=="perusahaan") {
?>
				<ul>
					<li><a href="?page=data_absensi">Data Absensi</a></li>
					<li><a href="?page=profil_saya">Profil Saya</a></li>
					<li><a href="?page=ganti_foto">Ganti Foto</a></li>
					<li><a href="?page=ganti_password">Ganti Password</a></li>
					<li><a href="?page=setting_profil">Setting Profil</a></li>
				</ul>
<?php
			} else if ($level=="guru") {
?>
				<ul>
					<li><a href="?page=data_monitoring">Monitoring</a></li>
					<li><a href="?page=profil_saya">Profil Saya</a></li>
					<li><a href="?page=ganti_foto">Ganti Foto</a></li>
					<li><a href="?page=ganti_password">Ganti Password</a></li>
					<li><a href="?page=setting_profil">Setting Profil</a></li>
				</ul>
<?php
			} else if ($level=='siswa') {
?>
				<ul>
					<li><a href="?page=data_jurnal">Jurnal Harian</a></li>
					<li><a href="?page=profil_saya">Profil Saya</a></li>
					<li><a href="?page=ganti_foto">Ganti Foto</a></li>
					<li><a href="?page=ganti_password">Ganti Password</a></li>
					<li><a href="?page=setting_profil">Setting Profil</a></li>
				</ul>
<?php
			}
?>

			</div>
				
<?php
	}
?>
	
			<div align="left" id="sidebar">
				<div class="ribbon">NAVIGATION</div>
				<ul>
					<li><a href="?page=data_jurusan">List Data Jurusan</a></li>
					<li><a href="?page=data_guru">List Data Guru</a></li>
					<li><a href="?page=data_siswa">List Data Siswa</a></li>
					<li><a href="?page=data_kelas">List Data Kelas</a></li>
					<li><a href="?page=data_dudi">List Data Perusahaan</a></li>
					<li><a href="?page=data_pembimbing">List Data Pembimbing</a></li>
					<li><a href="?page=data_periode">List Data Periode</a></li>
					<li><a href="?page=data_penempatan">List Data Penempatan</a></li>
				</ul>
			</div>

			<div align="left" id="sidebar">
				<div class="ribbon">POLLING LINE</div>
				<?php include "inc/polling.php"; ?>
			</div>
			
			<div align="left" id="sidebar" style="margin-bottom: 20px;">
				<div class="ribbon">HIT COUNTER</div>
				<div align="center" style="font-size: 14px; padding: 5px; margin-bottom: 8px;">
				<?php include "inc/hit_counter.php"; ?>
				</div>
			</div>