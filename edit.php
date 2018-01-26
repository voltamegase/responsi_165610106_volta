<?php
	include ('crudMhs.php');
	$nim = $_GET['nim'];
	$data = cari($nim);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Akademik</title>
</head>
<body>
		
<h2>Edit Pelamar</h2> 
	<form method="post" action="proses_edit.php">
	
	<table>
	<input type="hidden" name="nim" value="<?php echo $data['nim'];?>">
	
	<tr>
		<td>NIM</td> 
		<td><input type="text" name="nim" value="<?php echo $data['nim'];?> " /></td>
	</tr>
	<tr>
		<td>Nama</td> 
		<td><input type="text" name="nama" value="<?php echo $data['nama'];?> " /></td>
	</tr>
	<tr>
		<td>Alamat</td> 
		<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?> " /></td>
	</tr>
	
	
	</table> <br/>
	
		<input type="reset" value="Batal">
		<input type="submit" name='edit' value="Edit">
		
</form>
</body>
</html>