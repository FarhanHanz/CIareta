<?php echo anchor('dosen/input','Tambah Baru'); ?>
<table border="1">
	<tr>
		<td>Nik</td>
		<td>Kode</td>
		<td>Nama Dosen</td>
		<td>Jenis Kelamin</td>
		<td>Email</td>
		<td>Status</td>
		<td>Aksi</td>
		<td colspan="2" style="text-align: center;">Aksi</td>
	</tr>
	<?php foreach ($tampil as $key => $value) { ?>
	<tr>
		<td><?php echo $value->nik ?></td>
		<td><?php echo $value->kode_dosen ?></td>
		<td><?php echo $value->nama_dosen ?></td>
		<td><?php echo $value->jk ?></td>
		<td><?php echo $value->email ?></td>
		<td><?php echo $value->status ?></td>
		<td><?php echo anchor('jurusan/delete/'.$value->kode_jurusan,'Hapus'); ?></td>
		<td><?php echo anchor('jurusan/edit/'.$value->kode_jurusan,'Edit'); ?></td>
	</tr>
	<?php } ?>
</table>