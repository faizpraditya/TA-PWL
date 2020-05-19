<div class="container">
	<?php echo form_open_multipart('Login/do_persewaan') ?>
		<div class="form-group">
			<label>Nama Petugas</label>
			<select name="admin" class="form-control">
				<?php foreach ($admin as $admins): ?>
					<option value="<?php echo $admins['id_admin'] ?>"><?php echo $admins['namaa'] ?></option>
				<?php endforeach ?>			
			</select>
		</div>
		<div class="form-group">
			<label>Nama Penyewa</label>
			<select name="pelanggan" class="form-control">
				<?php foreach ($pelanggan as $pelanggans): ?>
					<option value="<?php echo $pelanggans['id_pelanggan'] ?>"><?php echo $pelanggans['nama'] ?></option>
				<?php endforeach ?>			
			</select>
		</div>
		<div class="form-group">
			<label>Tipe Motor</label>
			<select name="motor" class="form-control">
				<?php foreach ($motor as $motors): ?>
					<option value="<?php echo $motors['id_motor'] ?>"><?php echo $motors['tipe'] ?></option>
				<?php endforeach ?>	
			</select>
		</div>
		<div class="form-group">
			<label>Tanggal Kembali</label>
			<input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d') ?>">
		</div>
		<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info">
</div>