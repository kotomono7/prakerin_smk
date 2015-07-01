<?php
	class datenow {
		function __construct() {
			$this->hari=array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
			$this->bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
			$this->jam=date("H:i");
			$this->tgl=date("d");
			$this->thn=date("Y");
			$this->hariini=$this->hari[date("w")];
			$this->bulanini=$this->bulan[date("n")-1];
		}
	}
	
	function lokasi($lokasi) {
		header("location:?page=".$lokasi);
	}
	
	function direct($direct) {
		echo '<script type="text/javascript">window.location="'.$direct.'"</script>';
	}
	
	function logout() {
		echo"onclick=\"return confirm('Apakah anda yakin ingin logout?')\"";
	}
	
	function hapus() {
		echo"onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini?')\"";
	}
?>