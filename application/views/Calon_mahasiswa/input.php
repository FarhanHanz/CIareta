<?php echo form_open('calon_mahasiswa/save') ?>
<?php echo $judul ?>
<table width="325" border="1">
	<tr>
		<td>No Pendaftaran</td>
		<td><input type="text" name="no_pendaftaran" value="<?php echo date('YmdHis')?>"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" placeholder="Nama Pendaftar"></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td><input type="text" name="tempat_lahir"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type="date" name="tgl_lahir"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" value="P" name="jk" id="jk"> Perepmuan<input type="radio" value="L" name="jk" id="jk"> Laki-laki</td>	
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"></textarea>></td>
	</tr>
	<tr>
		<td>Telpon</td>
		<td><input type="text" name="no_telp"></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td><select name="id_agama">
			<option value="">== Pilih Agama ==</option><?php foreach ($agama as $key => $value) { ?><option value="<?php echo $value->id_agama ?>"><?php echo $value->nama_agama ?></option><?php } ?></select>></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td><select name="kode_jurusan"><option value="">== Pilih Jurusan ==</option><?php foreach ($jurusan as $key => $value) { ?><option value="<?php echo $value->kode_jurusan ?>"><?php echo $value->nama_jurusan ?></option><?php } ?></select>></td>
	</tr>
	<tr>
		<td><input type="submit" name="button" id="button" value="Simpan"></td>
		<td><input type="reset" name="button2" id="button2" value="Batal"></td>
	</tr>
</table>
<?php echo form_close() ?>