<?php
	include('crudMhs.php');
	$sql  = "select * from mahasiswa";
	$data = tampil($sql);
?>
<style>
table {
    width: 80%;
    border-collapse: collapse;
}
table, td, th {
    border: 1px solid black;
    padding: 9px;
}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Akademik</title>
</head>
<body>
	<h1 style="padding-left:160px;padding-top:50px">Data Mahasiswa</h1>
	<table align='center'>
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Proses</th>
	</tr>

	<?php
	if($data != null)
	foreach($data as $baris){
		$nim = $baris['nim'];
		$nama = $baris['nama'];
		$alamat = $baris['alamat'];
		
		echo "
		<tr>
			<td align='center'>$nim</td>		
			<td>$nama</td>
			<td>$alamat</td>
			<td align='center'> 
				<a href='edit.php?nim={$baris['nim']}'>Edit</a>
				<a href='proses_hapus.php?nim={$baris['nim']}'>Hapus</a>
			</td>
		</tr>
		";	
	}
	?>
</table>
<div style="padding-left:160px;padding-top:10px"><a href="tambah.php">Tambah Mahasiswa</a></div>
</body>
</html>