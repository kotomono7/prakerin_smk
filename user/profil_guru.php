<div align="center"><h3>Profil Guru</h3></div>
<table width="100%" cellpadding="3">
  <tr>
    <td width="37%" rowspan="7" align="center" valign="top"><img alt="<?php echo $foto; ?>" title="<?php echo $data['nama']; ?>" src="images/user/<?php echo $foto; ?>" width="99%" height="auto" style="border: 1px solid #ccc;"></td>
    <td width="20%" valign="top">NIP</td>
    <td align="center" valign="top">:</td>
    <td width="46%" valign="top"><?php echo $data['nip']; ?></td>
  </tr>
  <tr>
    <td valign="top">Nama Lengkap</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><?php echo $data['nama']; ?></td>
  </tr>
  <tr>
  <tr>
    <td valign="top">Jenis Kelamin</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><?php echo $jenkel; ?></td>
  </tr>
  <tr>
    <td valign="top">E-mail</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></td>
  </tr>
  <tr>
    <td valign="top">No. HP/Telp.</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><?php echo $no_telp; ?></td>
  </tr>
  <tr>
    <td valign="top">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="top"><?php echo $alamat; ?></td>
  </tr>
</table>
