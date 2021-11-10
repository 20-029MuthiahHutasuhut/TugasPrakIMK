<div class="container mt-5">
	<form action="" method="post">
		<div class="row">
			<div class="col-12">
				<input type="text" name="nama" placeholder="Masukkan Nama Mahasiswa" class="form-control mb-3">
			</div>
			<div class="col-12">
				<input type="text" name="nim" placeholder="Masukkan NIM Mahasiswa" class="form-control mb-3">
			</div>
			<div class="col-12">
				<input type="submit" name="kirim" class="btn btn-success">
			</div>
		</div>
	</form>
</div>
<?php
if (isset($_POST['kirim'])) {
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$koneksi -> query("INSERT INTO mahasiswa(nama, nim) VALUES ('$nama', '$nim')");
	header("location: index.php");
}
?>