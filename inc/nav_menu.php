<ul id="menu">
	<li><a href="index.php">Home</a></li>
	<li class="subs"><a href="#about">About</a>
    	<ul>
			<li><a href="?page=developer">Developer</a></li>
			<li><a href="?page=profil">SMK Moedikal</a></li>
        </ul>
    </li>
    <li><a href="?page=contact">Contact</a></li>
	<li><a href="?page=gallery">Gallery</a></li>
    <li class="subs"><a href="#course">Course</a>
        <ul>
			<li><a href="?page=titl">Teknik Instalasi Tenaga Listrik</a></li>
			<li><a href="?page=tkr">Teknik Kendaraan Ringan</a></li>
			<li><a href="?page=pbo">Teknik Perbaikan Bodi Otomotif</a></li>
			<li><a href="?page=tp">Teknik Pemesinan</a></li>
            <li><a href="?page=rpl">Teknik Rekayasa Perangkat Lunak</a></li>
        </ul>
    </li>
	<li class="subs"><a href="#others">Others</a>
    	<ul>
			<li><a href="?page=guestbook">Buku Tamu</a></li>
			<li><a href="?page=bkk">Bursa Kerja Khusus</a></li>
			<li><a href="?page=prestasi">Prestasi Sekolah</a></li>
			<li><a href="?page=factory">Teaching Factory</a></li>
        </ul>
    </li>
	
<?php
	if (isset($_SESSION['user'])) {
?>

	<li><a href="pages/logout.php" <?php logout(); ?>>Logout</a></li>
	
<?php
	} else {
?>

   	<li><a href="?page=login">Login</a></li>

<?php
	}
?>

	<!-- searchbox block -->
	<span style="float: right;">
		<form action="?page=search_main" method="post" class="form-wrapper cf">
		<input name="key" type="text" placeholder="Cari artikel disini..." required="required" />
		<button type="submit"><font style="padding-right: 3px;">Search</font></button>
		</form>
	</span>
</ul>