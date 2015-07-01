<?php
	$file='counter.txt';
	
	if (file_exists($file)) {
		$file_open=fopen($file,'r');
		$cek=trim(fgets($file_open,1024));
		$cek++;
	} else {
		$cek=1;
	}
	
	$file_open=fopen($file,'w');
	fwrite($file_open,$cek);
	fclose($file_open);
	
	$tgl=new datenow;
	$tanggal=$tgl->hariini.", ".$tgl->tgl." ".$tgl->bulanini." ".$tgl->thn;
	echo "<div>Hari ini: <br />".$tanggal."</div><div style='margin-top: 3px;'>Total: ".$cek." hits</div>";
?>