<?php
	function koneksi_db(){
		$server   = "localhost";
		$username = "root";
		$pass     = "";
		$dbname   = "akademik";
		
		//menciptakan koneksi
		$koneksi = mysqli_connect($server, $username, $pass, $dbname);
		
		//cek koneksi		
		if(!$koneksi){
			die("Koneksi database loker gagal : ".mysqli_connect_error());
		}
		return $koneksi;
	}
?>

