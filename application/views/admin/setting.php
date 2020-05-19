<div class="container">
	<h1>UBAH PASSWORD</h1>
	<br>
	
	<p><?php echo $this->session->flashdata('ubah') ?></p>
	<p style="color: red"><?php echo $this->session->flashdata('gagal') ?></p>
	<div class="col-md-5">
		<?php echo form_open_multipart('login/do_setting') ?>
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="user" class="form-control" value="<?php echo $user ?>" readonly>
		</div>
		<div class="form-group">
			<label>Masukkan Password Baru</label>
			<input type="password" name="psw" class="form-control">
		</div>
		<div class="form-group">
			<label>Ulangi Password Baru</label>
			<input type="password" name="psw2" class="form-control">
		</div>
		<input type="submit" name="simpan" value="UBAH" class="btn btn-info">
	</form>
	</div>
</div>