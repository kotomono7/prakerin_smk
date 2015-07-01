<form name="setting_profil_user" method="post">
  <table width="100%" align="center" cellpadding="3" cellspacing="3">
    <tr>
      <td width="21%">Nama Depan<sup><span style="color: red;"> * </span></sup></td>
      <td width="3%" align="center">:</td>
      <td width="76%"><span id="sprytextfield1">
        <input name="nama_dpn" type="text" id="nama_dpn" value="<?php echo $data['nama_dpn']?>" size="40" maxlength="50" />
      <span class="textfieldRequiredMsg">Mohon isi field ini!</span></span></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>Isi field <i>Nama Depan</i> dengan nama depan asli Anda</td>
    </tr>
	<tr>
      <td width="21%">Nama Belakang<sup><span style="color: red;"> * </span></sup></td>
      <td width="3%" align="center">:</td>
      <td width="76%"><span id="sprytextfield2">
        <input name="nama_blkng" type="text" id="nama_blkng" value="<?php echo $data['nama_blkng']?>" size="40" maxlength="50" />
      <span class="textfieldRequiredMsg">Mohon isi field ini!</span></span></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>Isi field <i>Nama Belakang</i> dengan nama belakang asli Anda</td>
    </tr>
    <tr>
      <td>Jenis Kelamin<sup><span style="color: red;"> * </span></sup></td>
      <td align="center">:</td>
      <td><span id="spryselect1">
        <select name="jenisklm">
          <option>- Pilih Satu -</option>
          <option value="L" <?php if($data['id_jenisklm']=="L") echo 'selected="selected"'; ?>>Laki-laki</option>
          <option value="P" <?php if($data['id_jenisklm']=="P") echo 'selected="selected"'; ?>>Perempuan</option>
        </select> <span class="selectRequiredMsg">Mohon isi field ini!</span>
		</span></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>Pilih Salah Satu</td>
    </tr>
    <tr>
      <td>Tanggal Lahir<sup><span style="color: red;"> * </span></sup></td>
      <td align="center">:</td>
      <td>
	  	<span id="sprytextfield3">
	  	<input type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir']?>" style="width: 99px;" />
		<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.setting_profil_user.tgl_lahir); return false;">
		<img name="popcal" align="absmiddle" style="border:none" src="date/calender.jpeg" width="34" height="30" border="0" alt="calender.jpeg">
		</a>
		
		<!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
		<iframe width="100" height="200" name="gToday:normal:date/agenda.js" id="gToday:normal:date/agenda.js" src="date/ipopeng.htm" 
		scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:fixed; top:-500px; left:-500px;">
		</iframe>
		<span class="textfieldRequiredMsg">Mohon isi field ini!</span>
		</span>
	  </td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>Klik icon untuk memilih tanggal lahir Anda</td>
    </tr>
    <tr>
      <td>E-mail<sup><span style="color: red;"> * </span></sup></td>
      <td align="center">:</td>
      <td><span id="sprytextfield4">
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
      <td>Tulis sesuatu mengenai diri anda</td>
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