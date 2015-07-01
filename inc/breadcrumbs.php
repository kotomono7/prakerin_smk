<?php
		$index="<a href='index.php'>Home</a>";
		$page=(isset($_GET['page']))? $_GET['page']: "index";
		switch ($page) {
		case 'bkk':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Bursa Kerja Khusus
	</span>
	</div>
<?php
		break;
		case 'guestbook':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Buku Tamu
	</span>
	</div>
<?php
		break;
		case 'data_keluhan':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Keluhan
	</span>
	</div>
<?php
		break;
		case 'search_keluhan':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Keluhan
	</span>
	</div>
<?php
		break;
		case 'data_komentar':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Komentar
	</span>
	</div>
<?php
		break;
		case 'search_komentar':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Komentar
	</span>
	</div>
<?php
		break;
		case 'developer':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Developer
	</span>
	</div>
<?php
		break;
		case 'contact':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Contact Us
	</span>
	</div>
<?php
		break;
		case 'gallery':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Gallery
	</span>
	</div>
<?php
		break;
		case 'login':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; User Login
	</span>
	</div>
<?php
		break;
		case 'prestasi':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Prestasi Sekolah
	</span>
	</div>
<?php
		break;
		case 'profil':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Profil SMK Moedikal
	</span>
	</div>
<?php
		break;
		case 'titl':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Teknik Instalasi Tenaga Listrik
	</span>
	</div>
<?php
		break;
		case 'tkr':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Teknik Kendaraan Ringan
	</span>
	</div>
<?php
		break;
		case 'pbo':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Teknik Perbaikan Bodi Otomotif
	</span>
	</div>
<?php
		break;
		case 'tp':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Teknik Pemesinan
	</span>
	</div>
<?php
		break;
		case 'rpl':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Teknik Rekayasa Perangkat Lunak
	</span>
	</div>
<?php
		break;
		case 'factory':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Teaching Factory
	</span>
	</div>
<?php
		break;
		case 'data_kelas':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Kelas
	</span>
	</div>
<?php
		break;
		case 'add_kelas':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Kelas
	</span>
	</div>
<?php
		break;
		case 'edit_kelas':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Kelas
	</span>
	</div>
<?php
		break;
		case 'search_kelas':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Kelas
	</span>
	</div>
<?php
		break;
		case 'data_jurusan':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Jurusan
	</span>
	</div>
<?php
		break;
		case 'add_jurusan':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Jurusan
	</span>
	</div>
<?php
		break;
		case 'edit_jurusan':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Jurusan
	</span>
	</div>
<?php
		break;
		case 'search_jurusan':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Jurusan
	</span>
	</div>
<?php
		break;
		case 'data_dudi':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Perusahaan (DU/DI)
	</span>
	</div>
<?php
		break;
		case 'data_dudi_perjurusan':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Perusahaan (DU/DI) Perjurusan
	</span>
	</div>
<?php
		break;
		case 'add_dudi':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Perusahaan (DU/DI)
	</span>
	</div>
<?php
		break;
		case 'edit_dudi':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Perusahaan (DU/DI)
	</span>
	</div>
<?php
		break;
		case 'search_dudi':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Perusahaan (DU/DI)
	</span>
	</div>
<?php
		break;
		case 'detail_dudi':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Detail Perusahaan (DU/DI)
	</span>
	</div>
<?php
		break;
		case 'data_guru':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Guru
	</span>
	</div>
<?php
		break;
		case 'add_guru':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Guru
	</span>
	</div>
<?php
		break;
		case 'edit_guru':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Guru
	</span>
	</div>
<?php
		break;
		case 'search_guru':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Guru
	</span>
	</div>
<?php
		break;
		case 'detail_guru':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Detail Guru
	</span>
	</div>
<?php
		break;
		case 'data_siswa':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Siswa
	</span>
	</div>
<?php
		break;
		case 'data_siswa_perkelas':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Siswa Perkelas
	</span>
	</div>
<?php
		break;
		case 'add_siswa':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Siswa
	</span>
	</div>
<?php
		break;
		case 'edit_siswa':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Siswa
	</span>
	</div>
<?php
		break;
		case 'search_siswa':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Siswa
	</span>
	</div>
<?php
		break;
		case 'detail_siswa':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Detail Siswa
	</span>
	</div>
<?php
		break;
		case 'data_periode':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Periode
	</span>
	</div>
<?php
		break;
		case 'add_periode':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Periode
	</span>
	</div>
<?php
		break;
		case 'edit_periode':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Periode
	</span>
	</div>
<?php
		break;
		case 'search_periode':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Periode
	</span>
	</div>
<?php
		break;
		case 'data_pembimbing':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Pembimbing
	</span>
	</div>
<?php
		break;
		case 'add_pembimbing':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Pembimbing
	</span>
	</div>
<?php
		break;
		case 'edit_pembimbing':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Pembimbing
	</span>
	</div>
<?php
		break;
		case 'search_pembimbing':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Pembimbing
	</span>
	</div>
<?php
		break;
		case 'data_penempatan':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Penempatan
	</span>
	</div>
<?php
		break;
		case 'add_penempatan':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Penempatan
	</span>
	</div>
<?php
		break;
		case 'edit_penempatan':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Penempatan
	</span>
	</div>
<?php
		break;
		case 'search_penempatan':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Penempatan
	</span>
	</div>
<?php
		break;
		case 'data_jurnal':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Jurnal
	</span>
	</div>
<?php
		break;
		case 'add_jurnal':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Jurnal
	</span>
	</div>
<?php
		break;
		case 'edit_jurnal':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Jurnal
	</span>
	</div>
<?php
		break;
		case 'search_jurnal':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Jurnal
	</span>
	</div>
<?php
		break;
		case 'data_monitoring':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Monitoring
	</span>
	</div>
<?php
		break;
		case 'add_monitoring':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Monitoring
	</span>
	</div>
<?php
		break;
		case 'edit_monitoring':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Monitoring
	</span>
	</div>
<?php
		break;
		case 'search_monitoring':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Monitoring
	</span>
	</div>
<?php
		break;
		case 'data_absensi':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Absensi
	</span>
	</div>
<?php
		break;
		case 'add_absensi':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Absensi
	</span>
	</div>
<?php
		break;
		case 'edit_absensi':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Absensi
	</span>
	</div>
<?php
		break;
		case 'search_absensi':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Absensi
	</span>
	</div>
<?php
		break;
		case 'polling_line':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Polling Line
	</span>
	</div>
<?php
		break;
		case 'dashboard':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Dashboard
	</span>
	</div>
<?php
		break;
		case 'profil_saya':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Profil Saya
	</span>
	</div>
<?php
		break;
		case 'setting_profil':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Setting Profil
	</span>
	</div>
<?php
		break;
		case 'ganti_password':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Ganti Password
	</span>
	</div>
<?php
		break;
		case 'ganti_foto':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Ganti Foto
	</span>
	</div>
<?php
		break;
		case 'data_user':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Data User
	</span>
	</div>
<?php
		break;
		case 'data_user':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Administrator
	</span>
	</div>
<?php
		break;
		case 'add_user':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Administrator
	</span>
	</div>
<?php
		break;
		case 'edit_user':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Administrator
	</span>
	</div>
<?php
		break;
		case 'search_user':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Administrator
	</span>
	</div>
<?php
		break;
		case 'data_kategori':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Kategori
	</span>
	</div>
<?php
		break;
		case 'add_kategori':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Kategori
	</span>
	</div>
<?php
		break;
		case 'edit_kategori':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Kategori
	</span>
	</div>
<?php
		break;
		case 'search_kategori':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Kategori
	</span>
	</div>
<?php
		break;
		case 'data_post':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; List Data Postingan
	</span>
	</div>
<?php
		break;
		case 'add_post':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Tambah Data Postingan
	</span>
	</div>
<?php
		break;
		case 'edit_post':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Edit Data Postingan
	</span>
	</div>
<?php
		break;
		case 'search_post':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Data Postingan
	</span>
	</div>
<?php
		break;
		case 'full_post':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Artikel, Berita, dan Informasi
	</span>
	</div>
<?php
		break;
		case 'search_main':
?>
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?> &raquo; Pencarian Artikel, Berita, dan Informasi
	</span>
	</div>
<?php
		break;
		case 'index': default:
?>	
	<div align="left" style="border-bottom: 1px solid #ccc; padding: 0 5px 5px 5px;">
	<span style="font-size: 12px;">
	<?php echo $index; ?>
	</span>
	</div>
<?php
		}
?>