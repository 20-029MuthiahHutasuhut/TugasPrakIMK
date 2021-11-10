<?php include 'koneksi.php'; ?>
<?php include 'layouts/header.php'; ?>
<?php include 'elements/navbar.php'; ?>

<?php 
if (isset($_GET['page'])) {
	$page = $_GET['page'];
	switch ($page) {
	  case 'home':
	    include 'page/home.php';
	    break;
	  case 'edit':
	    include 'page/edit.php';
	    break;
	  case 'tambahdata':
	    include 'page/tambahdata.php';
	    break;
	  default:
	    include 'page/home.php';
	}
}else{
	include 'page/home.php';
}
 ?>

<?php include 'layouts/footer.php'; ?>
