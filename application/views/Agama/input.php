<?php echo form_open('agama/save') ?>
<?php echo $judul ?>
<table width="325" border="1">
	<tr>
		<td>Nama Agama</td>
		<td><input type="text" name="nama_agama" id="nama_agama"></td>
	</tr>
	<tr>
		<td>Id Agama</td>
		<td><input type="text" name="id_agama" id="id_agama"></td>
	<tr>
		<td><input type="submit" name="button" id="button" value="Simpan"></td>
		<td><input type="reset" name="button2" id="button2" value="Batal"></td>
	</tr>
</table>
<?php echo form_close() ?>