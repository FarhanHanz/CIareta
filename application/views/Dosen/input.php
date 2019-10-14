<?php echo form_open('dosen/save') ?>
<?php echo $judul ?>
<table width="325" border="1">
	<tr>
		<td>NIK</td>
		<td><input type="text" name="nik" id="nik"></td>
	</tr>
	<tr>
		<td>Kode</td>
		<td><input type="text" name="kode_dosen" id="kode_dosen"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama_dosen" id="nama_dosen"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="button" value="Laki-laki" value="Perempuan" name="jk" id="jk"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" id="email"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="button" value="Aktif" value="Pasif" name="status" id="status"></td>
	</tr>
	<tr>
		<td><input type="submit" name="button" id="button" value="Simpan"></td>
		<td><input type="reset" name="button2" id="button2" value="Batal"></td>
	</tr>
</table>
<?php echo form_close() ?>