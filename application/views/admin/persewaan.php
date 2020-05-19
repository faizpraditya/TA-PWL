<div class="container">
	<a href="<?php echo base_url('login/tambah_persewaan') ?>" class="btn btn-primary">+ Add</a>
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
			<th>NAMA PELANGGAN</th>
			<th>NAMA PETUGAS</th>
			<th>TIPE MOTOR</th>
			<th>HARGA SEWA/HARI</th>
			<th>TANGGAL SEWA</th>
			<th>TANGGAL KEMBALI</th>
			<th>LAMA SEWA</th>
			<th>TOTAL BAYAR</th>
			<th>AKSI</th>
		</tr>
	  </thead>
		<?php foreach ($sewa as $sewas): ?>
	  <tbody>
		<tr>
			<td><?php echo "$i"; $i++; ?></td>
			<td><?php echo $sewas['nama'] ?></td>
			<td><?php echo $sewas['namaa'] ?></td>
			<td><?php echo $sewas['tipe'] ?></td>
			<td><?php echo rupiah($sewas['harga']) ?></td>
			<td><?php echo $sewas['tanggal_sewa'] ?></td>
			<td><?php echo $sewas['tanggal_kembali'] ?></td>
			<td><?php echo $sewas['lama_sewa'] ?> hari</td>
			<td><?php echo rupiah($sewas['lama_sewa']*$sewas['harga']) ?></td>
			<td>
				<a href="<?php echo base_url() ?>login/edit_sewa/<?php echo $sewas['id_persewaan'] ?>" class="btn btn-link btn-sm">Edit</a>
				<a onclick="return confirm('Apakah motor sudah dikembalikan???')" href="<?php echo base_url() ?>login/hapus_sewa/<?php echo $sewas['id_persewaan'] ?>" class="btn btn-success btn-sm">Kembali</a>
			</td>
		</tr>
	  </tbody>
		<?php endforeach ?>
	</table>
</div>