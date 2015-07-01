<form name="setting_profil_perusahaan" method="post">
  <table width="100%" align="center" cellpadding="3" cellspacing="3">
    <tr>
      <td width="21%">Nama Perusahaan<sup><span style="color: red;"> * </span></sup></td>
      <td width="3%" align="center">:</td>
      <td width="76%"><span id="sprytextfield1">
        <input name="nama_dudi" type="text" id="nama_dudi" value="<?php echo $data['nama_dudi']?>" size="40" maxlength="50" />
      <span class="textfieldRequiredMsg">Mohon isi field ini!</span></span></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>Isi field <i>Nama Perusahaan</i> dengan benar </td>
    </tr>
	<tr>
      <td width="21%">Alamat Lengkap<sup><span style="color: red;"> * </span></sup></td>
      <td width="3%" align="center">:</td>
      <td width="76%"><span id="sprytextfield2">
        <input name="alamat" type="text" id="alamat" value="<?php echo $data['alamat']?>" size="40" />
      <span class="textfieldRequiredMsg">Mohon isi field ini!</span></span></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>Isi field <i>Alamat Lengkap</i> dengan benar </td>
    </tr>
    <tr>
      <td>E-mail<sup><span style="color: red;"> * </span></sup></td>
      <td align="center">:</td>
      <td><span id="sprytextfield3">
        <input name="email" type="email" size="40" maxlength="50" value="<?php echo $data['email']?>" />
      <span class="textfieldRequiredMsg">Mohon isi field ini!</span></span></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>Isi dengan e-mail yang masih aktif</td>
    </tr>
    <tr>
      <td valign="top">Tentang</td>
      <td align="center" valign="top">:</td>
      <td><textarea name="tentang" id="tentang" cols="50" rows="10"><?php echo $data['tentang']?></textarea></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>Tulis sesuatu mengenai perusahaan</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td><input type="submit" name="submit" class="button-style" value="Simpan Profil" /></td>
    </tr>
    <tr>
      <td colspan="3"><span style="color: red;"><sup> * </sup>Data tidak boleh kosong!</span></td>
      </tr>
    <tr>
      <td colspan="3" align="center">
	  <?php
	  	$note=(isset($_GET['notif']))? $_GET['notif']: "blank";
		switch ($note) {
			case "success":
			echo "<div id='box-success'>Perubahan berhasil disimpan<br />Klik <a href='?page=profil_saya'>disini</a> untuk melihat</div>";
			break;
			case "blank": default:
			echo "";
		}
	  ?>
	 </td>
    </tr>
  </table>
  <input type="hidden" name="simpan" value="profil" />
</form>