<div class="container"> 
	<h1>Detail Pelanggan</h1>
	<br>
	<hr>
	<p><b>Nama</b> : <?php echo $pelanggan['nama'] ?></p>
	<p><b>Nomor HP</b> : <?php echo $pelanggan['no_hp'] ?></p>
	<p><b>Alamat</b> : <?php echo $pelanggan['alamat'] ?></p>
	<p><b>Email</b> : <?php echo $pelanggan['email'] ?></p>
	<img style="height: 300px" src="<?php echo base_url() ?>asset/foto/<?php echo $pelanggan['foto'] ?>">
	<br>
	<br>
	<a href="<?php echo base_url('login/pelanggan') ?>" class="btn btn-info">KEMBALI</a>
</div>
