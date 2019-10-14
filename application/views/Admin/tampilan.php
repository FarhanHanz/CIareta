<?php echo anchor('admin/input','Tambah Baru'); ?>
<table border="1">
	<tr>
		<td>Id</td>
		<td>Nama Admin</td>
		<td colspan="2">Aksi</td>
	</tr>
	<?php foreach ($tampil as $key => $value) { ?>
	<tr>
		<td><?php echo $value->id_admin ?></td>
		<td><?php echo $value->nama ?></td>
		<td><?php echo anchor('admin/delete/'.$value->id_admin,'Hapus'); ?></td>
		<td><?php echo anchor('admin/delete/'.$value->id_admin,'Edit'); ?></td>
	</tr>
	<?php } ?>
</table>