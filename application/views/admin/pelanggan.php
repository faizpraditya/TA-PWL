<div class="container">
	<a href="<?php echo base_url('login/tambah_pelanggan') ?>" class="btn btn-primary">+ Add</a>
	<hr>
	<p><?php $i=1; echo $this->session->flashdata('tambah') ?></p>
	<table class="table table-border table-hover">
	  <thead>
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>NOMOR HP</th>
			<th>ALAMAT</th>
			<th>EMAIL</th>
			<th>AKSI</th>
		</tr>
	  </thead>
			<?php foreach ($pelanggan as $pelanggans) : ?>
	  <tbody>
		<tr>
				<td><?php echo "$i"; $i++; ?></td>
				<td><?php echo $pelanggans['nama'] ?></td>
				<td><?php echo $pelanggans['no_hp'] ?></td>
				<td><?php echo $pelanggans['alamat'] ?></td>
				<td><?php echo $pelanggans['email'] ?></td>
				<td>
					<a href="<?php echo base_url() ?>login/lihat_pelanggan/<?php echo $pelanggans['id_pelanggan'] ?>" class="btn btn-info btn-sm">Info</a>
					<a href="<?php echo base_url() ?>login/edit_pelanggan/<?php echo $pelanggans['id_pelanggan'] ?>" class="btn btn-link btn-sm">Edit</a>
					<a onclick="return confirm('Yakin mau menghapus data ini???')" href="<?php echo base_url() ?>login/hapus_pelanggan/<?php echo $pelanggans['id_pelanggan'] ?>" class="btn btn-danger btn-sm">Delete</a>
				</td>		
		</tr>
	  </tbody>
			<?php endforeach ?>
	</table>
</div>