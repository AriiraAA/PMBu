<?php 
	session_start(); 
	require_once "connect.php";

	if ($_SESSION['role'] == "Ilmu Komputer") {
		$fakultas = "Ilmu Komputer";
	} else if ($_SESSION['role'] == "Kedokteran") {
		$fakultas = "Kedokteran";
	} else if ($_SESSION['role'] == "Kesehatan Masyarakat") {
		$fakultas = "Kesehatan Masyarakat";
	} else if ($_SESSION['role'] == "Teknik") {
		$fakultas = "Teknik";
	} else if ($_SESSION['role'] == "Matematika dan Ilmu Pengetahuan Alam") {
		$fakultas = "Matematika dan Ilmu Pengetahuan Alam";
	} else if ($_SESSION['role'] == "Pertanian") {
		$fakultas = "Pertanian";
	} else if ($_SESSION['role'] == "Keguruan dan Ilmu Pendidikan") {
		$fakultas = "Keguruan dan Ilmu Pendidikan";
	} else if ($_SESSION['role'] == "Ekonomi") {
		$fakultas = "Ekonomi";
	} else if ($_SESSION['role'] == "Hukum") {
		$fakultas = "Hukum";
	} else if ($_SESSION['role'] == "Ilmu Sosial dan Ilmu Politik") {
		$fakultas = "Ilmu Sosial dan Ilmu Politik";
	} else {
		$fakultas = "Dak tau hehe";
	}

	if ($_SESSION['role'] == "Super Admin") {
		if (isset($_SESSION['page']) && $_SESSION['page'] != 1) {
			$query = mysqli_query($connection, "SELECT nim, nama, fakultas, jurusan, ukt, agama, riwayat_pendidikan, tahun_pendidikan, riwayat_prestasi, pemberi_prestasi, tahun_prestasi, tempat_lahir, tanggal_lahir, alamat_asal, alamat_sekarang, no_hp, facebook FROM maba LIMIT ".(string)(($_SESSION['page'] - 1) * 60).", 60");
		} else {
			$query = mysqli_query($connection, "SELECT nim, nama, fakultas, jurusan, ukt, agama, riwayat_pendidikan, tahun_pendidikan, riwayat_prestasi, pemberi_prestasi, tahun_prestasi, tempat_lahir, tanggal_lahir, alamat_asal, alamat_sekarang, no_hp, facebook FROM maba LIMIT 0, 60");
		}		
	} else {
		if (isset($_SESSION['page']) && $_SESSION['page'] != 1) {
			$query = mysqli_query($connection, "SELECT nim, nama, fakultas, jurusan, ukt, agama, riwayat_pendidikan, tahun_pendidikan, riwayat_prestasi, pemberi_prestasi, tahun_prestasi, tempat_lahir, tanggal_lahir, alamat_asal, alamat_sekarang, no_hp, facebook FROM maba WHERE fakultas='".$fakultas."' LIMIT ".(string)(($_SESSION['page'] - 1) * 60).", 60");
		} else {
			$query = mysqli_query($connection, "SELECT nim, nama, fakultas, jurusan, ukt, agama, riwayat_pendidikan, tahun_pendidikan, riwayat_prestasi, pemberi_prestasi, tahun_prestasi, tempat_lahir, tanggal_lahir, alamat_asal, alamat_sekarang, no_hp, facebook FROM maba WHERE fakultas='".$fakultas."' LIMIT 0, 60");
		}	
	}

	$data = array();
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_array($query)) {
			$data []= $row;
		}
	} 
	echo json_encode($data);
	unset($_SESSION['fakultas']);
	unset($_SESSION['page']);
?>