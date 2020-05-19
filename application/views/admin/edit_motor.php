<div class="container">
	<?php echo form_open_multipart('login/do_edit') ?>
		<div class="form-group">
			<label>Masukkan Judul</label>
			<input type="hidden" name="id" class="form-control" value="<?php echo $motor['id_motor'] ?>">
			<input type="text" name="merk" class="form-control" value="<?php echo $motor['merk'] ?>">
		</div>
		<div class="form-group">
			<label>Masukkan Tipe</label>
			<input type="text" name="tipe" class="form-control" value="<?php echo $motor['tipe'] ?>">
		</div>
		<div class="form-group">
			<label>Masukkan Bahan Bakar</label>
			<input type="text" name="bbm" class="form-control" value="<?php echo $motor['bbm'] ?>">
		</div>
		<div class="form-group">
			<label>Masukkan Harga</label>
			<input type="text" name="harga" class="form-control" value="<?php echo $motor['harga'] ?>">
		</div>
		<div class="form-group">
			<img style="height: 100px" src="<?php echo base_url() ?>asset/foto/<?php echo $motor['foto'] ?>">
			<br>
			<label>Masukkan Foto</label>
			<input type="file" name="foto" class="form-control">
		</div>
		<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
</div>