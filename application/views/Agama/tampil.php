<?php echo anchor('agama/input','Tambah Baru'); ?>
<table border="1">
	<tr>
		<td>Id</td>
		<td>Nama Agama</td>
		<td colspan="2" style="text-align: center;">Aksi</td>
	</tr>
	<?php foreach ($tampil as $key => $value) { ?>
	<tr>
		<td><?php echo $value->id_agama ?></td>
		<td><?php echo $value->nama_agama ?></td>
		<td><?php echo anchor('agama/delete/'.$value->id_agama,'Hapus'); ?></td>
		<td><?php echo anchor('agama/edit/'.$value->id_agama,'Edit'); ?></td>
	</tr>
	<?php } ?>
</table>