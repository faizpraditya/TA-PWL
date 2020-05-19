<div class="container">
	<?php echo form_open_multipart('Login/do_edit_pelanggan') ?>
		<div class="form-group">
			<label>Masukkan Nama</label>
			<input type="hidden" name="id" class="form-control" value="<?php echo $pelanggan['id_pelanggan'] ?>">
			<input type="text" name="nama" class="form-control" value="<?php echo $pelanggan['nama'] ?>">
		</div>
		<div class="form-group">
			<label>Masukkan Nomor HP</label>
			<input type="text" name="no_hp" class="form-control" value="<?php echo $pelanggan['no_hp'] ?>">
		</div>
		<div class="form-group">
			<label>Masukkan Alamat</label>
			<textarea name="alamat" class="form-control" rows="5"><?php echo $pelanggan['alamat'] ?></textarea>
		</div>
		<div class="form-group">
			<label>Masukkan Email</label>
			<input type="text" name="email" class="form-control" value="<?php echo $pelanggan['email'] ?>">
		</div>
		<div class="form-group">
			<img style="height: 100px" src="<?php echo base_url() ?>asset/foto/<?php echo $pelanggan['foto'] ?>">
			<br>
			<label>Masukkan Foto</label>
			<input type="file" name="foto" class="form-control">
		</div>
		<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
</div>