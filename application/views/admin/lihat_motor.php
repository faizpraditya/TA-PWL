<?php
	function rupiah($angka)
 	{
		$hasil_rupiah = "Rp " . number_format($angka,0,',','.') . ",-";
		return $hasil_rupiah;
	}
?>
<div class="container"> 
	<h1>Detail Motor</h1>
	<br>
	<hr>
	<p><b>Merk</b> : <?php echo $motor['merk'] ?></p>
	<p><b>Tipe</b> : <?php echo $motor['tipe'] ?></p>
	<p><b>Bahan Bakar</b> : <?php echo $motor['bbm'] ?></p>
	<p><b>Harga Sewa</b> : <?php echo rupiah($motor['harga']) ?>/hari</p>
	<img style="height: 300px" src="<?php echo base_url() ?>asset/foto/<?php echo $motor['foto'] ?>">
	<br><br>
	<a href="<?php echo base_url('login/motor') ?>" class="btn btn-info">KEMBALI</a>
	<br>
</div>
