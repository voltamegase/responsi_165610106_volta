<?php
	include('crudMhs.php');

	$nim  = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	$hasil = tambah($nim,$nama,$alamat,);
			
	header("Location: tampil.php");
?>

