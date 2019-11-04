<?php echo form_open('dosen/save') ?>
<?php echo $judul ?>
<table width="325" border="1">
	<tr>
		<td>NIK</td>
		<td><input type="text" value="<?php echo $edit['nik']?>" name="nik" id="nik"></td>
	</tr>
	<tr>
		<td>Kode</td>
		<td><input type="text" value="<?php echo $edit['kode_dosen']?>" name="kode_dosen" id="kode_dosen"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" value="<?php echo $edit['nama_dosen']?>" name="nama_dosen" id="nama_dosen"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" value="P" name="jk" id="jk"> Perepmuan<input type="radio" value="L" name="jk" id="jk"> Laki-laki</td>	
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" value="<?php echo $edit['email']?>" name="email" id="email"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="radio" value="Aktif" name="status" id="status"> Aktif<input type="radio" value="Pasif" name="status" id="status">Pasif</td>
	</tr>
	<tr>
		<td><input type="submit" name="button" id="button" value="Simpan"></td>
		<td><input type="reset" name="button2" id="button2" value="Batal"></td>
	</tr>
</table>
<?php echo form_close() ?>