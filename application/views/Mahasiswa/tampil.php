<?php echo anchor('mahasiswa/input','Tambah Baru'); ?>
<table border="1">
	<tr>
		<td>No Pendaftara</td>
		<td>Nama</td>
		<td>Tempat Lahir</td>
		<td>Tanggal Lahir</td>
		<td>Jenis Kelamin</td>
		<td>Alamat</td>
		<td>No Telpon</td>
		<td>ID Agama</td>
		<td>Email</td>
		<td>Kode Jurusan</td>
		<td>Aksi</td>
		<td colspan="2" style="text-align: center;">Aksi</td>
	</tr>
	<?php foreach ($tampil as $key => $value) { ?>
	<tr>
		<td><?php echo $value->no_pendaftaran ?></td>
		<td><?php echo $value->nama ?></td>
		<td><?php echo $value->tempat_lahir ?></td>
		<td><?php echo $value->tgl_lahir ?></td>
		<td><?php echo $value->jk ?></td>
		<td><?php echo $value->alamat ?></td>
		<td><?php echo $value->no_telp ?></td>
		<td><?php echo $value->id_agama ?></td>
		<td><?php echo $value->email ?></td>
		<td><?php echo $value->kode_jurusan ?></td>
		<td><?php echo anchor('mahasiswa/delete/'.$value->no_pendaftaran,'Hapus'); ?></td>
		<td><?php echo anchor('mahasiswa/edit/'.$value->no_pendaftaran,'Edit'); ?></td>
	</tr>
	<?php } ?>
</table>