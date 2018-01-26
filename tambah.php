<!DOCTYPE html>
<html>
<head>
	<title>Akademik</title>
</head>
<body style="padding-left:160px;padding-top:50px">

<h2>Tambah Mahasiswa</h2> 
	<form method="post" action="proses_tambah.php" enctype="multipart/form-data">
	
	<table>
	
	<tr>
		<td>NIM</td> <td>:</td>
		<td><input type="text" name="nim" required /></td>
	</tr>
	<tr>
		<td>Nama</td> <td>:</td>
		<td><input type="text" name="nama" required /></td>
	</tr>
	<tr>
		<td>Alamat</td> <td>:</td>
		<td><input type="text" name="alamat" required /></td>
	</tr>
	
	
	</table> <br/>
	
		<input type="reset" value="Batal">
		<input type="submit" value="Simpan">
		
</form>
</body>
</html>