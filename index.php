<?php
	require "config/config.php";
	include "inc/functions.php";
	session_start();
?>

<!-- The new doctype of HTML5 -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Sistem Informasi Prakerin | SMK Muhammadiyah Pekalongan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta charset="utf-8">
	<link rel="shortcut icon" href="images/fav.png" />
	<link rel="icon" href="images/fav.png" />
    <!-- Linking styles -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/jquery.lightbox-0.5.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/navigation.css" type="text/css" />
	<link rel="stylesheet" href="SpryAssets/SpryValidationTextField.css" type="text/css" />
	<link rel="stylesheet" href="SpryAssets/SpryValidationSelect.css" type="text/css" />
	<link rel="stylesheet" href="SpryAssets/SpryValidationPassword.css" type="text/css" />
	<link rel="stylesheet" href="SpryAssets/SpryValidationConfirm.css" type="text/css" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.lightbox-0.5.min.js" type="text/javascript"></script>
	<script src="js/nicEdit.js" type="text/javascript"></script>
	<script src="js/tooltips.js" type="text/javascript"></script>
	<!-- another js -->
	<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(function() {
		$('#gallery a').lightBox();
	});
	</script>
</head>
<body>

<!-- Defining the header section of the page -->
<div align="center">

<?php
	include "inc/header.php";
?>

</div>

<div align="center">
<div align="center" id="nav">

<?php
	include "inc/nav_menu.php";
?>

</div>
</div>

<!-- Defining the main content section -->
<div align="center">
<section id="main">
	<div id="content">
		
		<!-- content post block -->
		<div id="content-wrapper">

<?php
	include "inc/content.php"; 
?>

		<!-- sidebar block -->
		<div id="sidebar-main">

<?php
	include "inc/sidebar.php";
?>
		</div>
		</div>
		
	</div>
</section>
</div>

<!-- Defining the footer section of the page -->
<div align="center">

<?php
	include "inc/footer.php";
?>

</div>
</body>
</html>