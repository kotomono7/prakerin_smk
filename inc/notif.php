<?php
	$notif=(isset($_GET['notif']))? $_GET['notif']: "main";
	switch ($notif) {
		case 'error01':
?>

<div id="box-error">
<b>Peringatan:</b><br />Ma'af, username dan/atau password yang Anda masukkan salah!
</div>

<?php
		break;
		case 'logout': default:
?>

<div id="box-notice">
<b>Perhatian:</b><br />Anda baru saja logout. Terima kasih atas kunjungannya!
</div>

<?php
		break;
		case 'main': default:
?>

<div id="box-notice">
<b>Perhatian:</b><br />Pastikan username dan password sudah di isi dengan benar!
</div>
		
<?php
	}
?>