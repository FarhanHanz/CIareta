<?php echo form_open('jurusan/update') ?>
<!-- <?php echo $judul ?>
<table width="325" border="1">
	<tr>
		<td>Nama Jurusan</td>
		<td><input type="text"value="<?php echo $edit['nama_jurusan']?>" name="nama_jurusan" id="nama_jurusan"></td>
	</tr>
	<tr>
		<td>Kode Jurusan</td>
		<td><input type="text"value="<?php echo $edit['kode_jurusan']?>" name="kode_jurusan" id="kode_jurusan"></td>
	</tr>
	<tr>
		<td><input type="submit" name="button" id="button" value="Update"></td>
		<td><input type="reset" name="button2" id="button2" value="Batal"></td>
	</tr>
</table>
<?php echo form_close() ?> -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                <div class="mdc-card p-0">
                  <div class="table-responsive">
                  	<?php echo $judul ?>
                  	<table class="table table-bordered">
                  		<thead>
                  			<tr>
								<td>Nama Jurusan</td>
								<td><input type="text"value="<?php echo $edit['nama_jurusan']?>" name="nama_jurusan" id="nama_jurusan"></td>
							</tr>
							<tr>
								<td>Kode Jurusan</td>
								<td><input type="text"value="<?php echo $edit['kode_jurusan']?>" name="kode_jurusan" id="kode_jurusan"></td>
							</tr>
							<tr>
								<td><button class="mdc-button mdc-button--raised filled-button--success">Simpan<button class="mdc-button mdc-button--raised filled-button--danger" style="margin-left: 10px">Batal</td>
								<!-- <td><input type="reset" name="button2" id="button2" value="Batal"></td> -->
							</tr>
						</thead>
					    </tbody>
						</table>
						<?php echo form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>