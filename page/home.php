<div class="container mt-5">
	<a href="index.php?page=tambahdata" class="btn btn-primary mb-3">Tambah Data</a>
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nama</th>
	      <th scope="col">NIM</th>
	      <th scope="col">Aksi</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
		$ambil = $koneksi -> query("SELECT * FROM mahasiswa");
		$no = 1;
		while ($pecah = $ambil -> fetch_assoc()) {
		?>
	    <tr>
	      <th scope="row"><?php echo $no; ?></th>
	      <td><?php echo $pecah['nama']; ?></td>
	      <td><?php echo $pecah['nim']; ?></td>
	      <td>
	      	<a href="index.php?page=edit&id=<?php echo $pecah['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
	      	<a href="model/delete.php?id=<?php echo $pecah['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
	      </td>
	    </tr>
	    <?php $no++; ?>
		<?php } ?>
	  </tbody>
	</table>
</div>