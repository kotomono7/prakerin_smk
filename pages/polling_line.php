<?php
$cek=mysql_query("select * from polling");
$cek_hasil=mysql_fetch_array($cek);

if($cek_hasil['sangat_bagus']=="") { // karena pada saat pembuatan tabel polling, tiap field datanya masih kosong , maka kita isi tiap field dengan nilai 0.
	mysql_query("insert into polling values('0','0','0','0')"); // mengisi field dengan nilai 0
} else {
	$query=mysql_query("select * from polling");
	$data=mysql_fetch_array($query);
	$total=$data['sangat_bagus']+$data['bagus']+$data['sedang']+$data['tidak_tahu'];
	$suara_sb=$data['sangat_bagus'];
	$suara_b=$data['bagus'];
	$suara_s=$data['sedang'];
	$suara_th=$data['tidak_tahu'];
	
		if($total=='0') { //karena jumlah total = 0 , berarti masing2 field berisi data = '0'
			$sangat_bagus='0';
			$bagus='0';
			$sedang='0';
			$tidak_tahu='0';
		} else {
			$sangat_bagus=($data['sangat_bagus']/$total)*100;
			$bagus=($data['bagus']/$total)*100;
			$sedang=($data['sedang']/$total)*100;
			$tidak_tahu=($data['tidak_tahu']/$total)*100;
		}
}
?>

<div align="left" style="float: left; margin: 5px 0 0 10px;">
<!-- post content block -->
<div id="post">

<?php
	include "inc/breadcrumbs.php";
?>

<div style="margin-top: 15px;">
<h3>Polling Line (Vote Now)</h3>
<table align="left" border="0" cellspacing="0" cellpadding="3" style="font-size: 14px;">
<tr>
<td colspan="3">Hasil polling saat ini dengan pertanyaan:</td>
</tr>
<tr>
  <td colspan="3"><i>"Apa pendapat Anda mengenai website ini?"</i></td>
</tr>
<tr>
<td>Sangat bagus</td>
<td align="center">:</td>
<td><?php printf("%.02f\n",$sangat_bagus); ?> % (<?php echo $suara_sb." suara"; ?>)</td>
</tr>
<tr>
<td>Bagus</td>
<td align="center">:</td>
<td><?php printf("%.02f\n",$bagus); ?> % (<?php echo $suara_b." suara"; ?>)</td>
</tr>
<tr>
<td>Sedang</td>
<td align="center">:</td>
<td><?php printf("%.02f\n",$sedang); ?> % (<?php echo $suara_s." suara"; ?>)</td>
</tr>
<tr>
<td>Tidak tahu</td>
<td align="center">:</td>
<td><?php printf("%.02f\n",$tidak_tahu); ?> % (<?php echo $suara_th." suara"; ?>)</td>
</tr>
<tr>
  <td>Total suara </td>
  <td align="center">:</td>
  <td><?php echo $total." suara"; ?></td>
</tr>
</table>

</div>
</div>
</div>