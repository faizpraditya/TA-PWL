<div class="container">
	<a href="<?php echo base_url('login/tambah_motor') ?>" class="btn btn-primary">+ Add</a>
	<hr>
	<p>
		<?php
			$i=1; echo $this->session->flashdata('tambah');
			function rupiah($angka)
		 	{
				$hasil_rupiah = "Rp " . number_format($angka,0,',','.') . ",-";
				return $hasil_rupiah;
			}
		?>
	</p>
	<table class="table table-border table-hover">
	  <thead>
		<tr>
			<th>NO</th>
			<th>MERK</th>
			<th>TIPE</th>
			<th>BAHAN BAKAR</th>
			<th>HARGA SEWA/HARI</th>
			<th>AKSI</th>
		</tr>
	  </thead>
			<?php foreach ($motor as $motors) : ?>
	  <tbody>
		<tr>
				<td><?php echo "$i"; $i++; ?></td>
				<td><?php echo $motors['merk'] ?></td>
				<td><?php echo $motors['tipe'] ?></td>
				<td><?php echo $motors['bbm'] ?></td>
				<td><?php echo rupiah($motors['harga']) ?></td>
				<td>
					<a href="<?php echo base_url() ?>login/lihatMotor/<?php echo $motors['id_motor'] ?>" class="btn btn-info btn-sm">Detail</a>
					<a href="<?php echo base_url() ?>login/edit/<?php echo $motors['id_motor'] ?>" class="btn btn-link btn-sm">Edit</a>
					<a onclick="return confirm('Yakin mau menghapus data ini???')" href="<?php echo base_url() ?>login/hapus_motor/<?php echo $motors['id_motor'] ?>" class="btn btn-danger btn-sm">Delete</a>
				</td>		
		</tr>
	  </tbody>
			<?php endforeach ?>
	</table>
</div>