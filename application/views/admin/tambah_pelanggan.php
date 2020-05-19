<div class="container">
	<?php echo form_open_multipart('Login/do_pelanggan') ?>
		<div class="form-group">
			<label>Masukkan Nama</label>
			<input type="text" name="nama" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan Nomor HP</label>
			<input type="text" name="no_hp" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan Alamat</label>
			<textarea name="alamat" class="form-control" rows="5"></textarea>
		</div>
		<div class="form-group">
			<label>Masukkan Email</label>
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan Foto</label>
			<input type="file" name="foto" class="form-control">
		</div>
		<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
</div>