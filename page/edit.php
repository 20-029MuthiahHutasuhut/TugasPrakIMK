<?php 
$id = $_GET['id'];
$ambil = $koneksi -> query("SELECT * FROM mahasiswa WHERE id = $id");
$pecah = $ambil -> fetch_assoc(); 
?>
<div class="container mt-5">
	<form action="" method="post">
		<div class="row">
			<div class="col-12">
				<input type="text" value="<?php echo $pecah['nama']; ?>" name="nama" placeholder="Masukkan Nama Mahasiswa" class="form-control mb-3">
			</div>
			<div class="col-12">
				<input type="text" value="<?php echo $pecah['nim']; ?>" name="nim" placeholder="Masukkan NIM Mahasiswa" class="form-control mb-3">
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
	$sql = "UPDATE mahasiswa SET nama='$nama',nim=$nim WHERE id = $id";
	$koneksi -> query($sql);
	header("location: index.php");
}
?>