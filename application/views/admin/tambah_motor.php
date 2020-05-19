<div class="container">
	<?php echo form_open_multipart('Login/do_tambah') ?>
		<div class="form-group">
			<label>Masukkan Merk</label>
			<input type="text" name="merk" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan Tipe</label>
			<input type="text" name="tipe" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan BBM</label>
			<input type="text" name="bbm" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan Harga</label>
			<input type="text" name="harga" class="form-control">
		</div>
		<div class="form-group">
			<label>Masukkan Foto</label>
			<input type="file" name="foto" class="form-control">
		</div>
		<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
</div>