<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Current Time</title>
		<script type="text/javascript"> 
			// 1 detik = 1000 
			window.setTimeout('jam()',1000); 
			function jam() {    
				var tanggal = new Date();   
				setTimeout('jam()',1000);   
				document.getElementById('output').innerHTML = tanggal.getHours()+':'+tanggal.getMinutes()+':'+tanggal.getSeconds();
			}
   		</script>
    </head>
<body onLoad="jam()">
<div align="center" style="font: 14px Verdana, Arial, Helvetica, sans-serif; padding-top: 10px;">
<?php echo date('l, j F Y'); ?>
</div>
<font size="6px" style="text-align: center;">
<div id="output" style="padding-bottom: 10px;"></div></font>
</body>
</html>
