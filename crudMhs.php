<?php
	require_once 'koneksi_db.php';

	function tampil($sql){
		$data = array();
		$koneksi = koneksi_db();
		$hasil = mysqli_query($koneksi, $sql);

		if (mysqli_num_rows($hasil) == 0) {
			mysqli_close($koneksi);
			return null;  
		}
			$i=0;
			while($baris = mysqli_fetch_assoc($hasil)) {
			$data[$i]['nim'] = $baris['nim'];
			$data[$i]['nama'] = $baris['nama'];
			$data[$i]['alamat'] = $baris['alamat'];
			$i++;
		}
		mysqli_close($koneksi);
		return $data;
	}
	
	function tambah($nim,$nama,$alamat){
		$koneksi = koneksi_db();
		$sql = "insert into mahasiswa values('$nim','$nama','$alamat')";
		$hasil = 0;
		if(mysqli_query($koneksi, $sql))
		$hasil = 1;
		mysqli_close($koneksi);
		return $hasil;
	}

	function hapus($nim){
		$koneksi = koneksi_db();
		$sql = "delete from mahasiswa where nim='$nim'";
		if (!mysqli_query($koneksi, $sql)){
			die('Error: ' . mysqli_error());
		}
		$hasil = mysqli_affected_rows($koneksi);
		mysqli_close($koneksi);
		return $hasil; 	
	}

	function edit($nim,$nama,$alamat){
		$koneksi = koneksi_db();
		$sql = "UPDATE mahasiswa
			SET nim = '$nim',
			nama = '$nama',
			alamat = '$alamat',
			WHERE nim = '$nim'";

		if (mysqli_query($koneksi, $sql)) {
			$hasil = true;
		} else {
			$hasil = "Error mengubah record: " . mysqli_error($koneksi);
		}
		mysqli_close($koneksi);
		return $hasil;
	}
	
	function cari($nim){
		$koneksi = koneksi_db();
		$sql = "select * from mahasiswa where nim = '$nim'";
		$hasil = mysqli_query($koneksi, $sql);
		if(mysqli_num_rows($hasil)>0){
			$baris = mysqli_fetch_assoc($hasil);
			$data['nim'] = $baris['nim'];
			$data['nama'] = $baris['nama'];
			$data['alamat'] = $baris['alamat'];
			
		mysqli_close($koneksi);
		return $data;
		} else {
			mysqli_close($koneksi);
			return null;
		}
	}
?>