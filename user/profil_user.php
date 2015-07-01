<div align="center"><h3>Profil User</h3></div>
<table width="100%" cellpadding="3">
  <tr>
    <td width="37%" rowspan="6" align="center" valign="top"><img alt="<?php echo $foto; ?>" title="<?php echo $data['nama_dpn']." ".$data['nama_blkng']; ?>" src="images/user/<?php echo $foto; ?>" width="99%" height="auto" style="border: 1px solid #ccc;"></td>
    <td width="20%" valign="top">Nama Lengkap</td>
    <td align="center" valign="top">:</td>
    <td width="46%" valign="top"><?php echo $data['nama_dpn']." ".$data['nama_blkng']; ?></td>
  </tr>
  <tr>
    <td valign="top">Jenis Kelamin</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><?php echo $jenkel; ?></td>
  </tr>
  <tr>
    <td valign="top">Tanggal Lahir</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><?php echo $data['tgl_lahir']; ?></td>
  </tr>
  <tr>
    <td valign="top">E-mail</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></td>
  </tr>
  <tr>
    <td valign="top">Tentang</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><?php echo $tentang; ?></td>
  </tr>
</table>