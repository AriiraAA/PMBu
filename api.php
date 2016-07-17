<?php 
	session_start(); 
	require_once "connect.php";

	if ($_SESSION['fakultas'] == "ilkom") {
		$fakultas = "Ilmu Komputer";
	} else if ($_SESSION['fakultas'] == "kedokteran") {
		$fakultas = "Kedokteran";
	} else if ($_SESSION['fakultas'] == "kesmas") {
		$fakultas = "Kesehatan Masyarakat";
	} else if ($_SESSION['fakultas'] == "teknik") {
		$fakultas = "Teknik";
	} else if ($_SESSION['fakultas'] == "mipa") {
		$fakultas = "Matematika dan Ilmu Pengetahuan Alam";
	} else if ($_SESSION['fakultas'] == "pertanian") {
		$fakultas = "Pertanian";
	} else if ($_SESSION['fakultas'] == "kip") {
		$fakultas = "Keguruan dan Ilmu Pendidikan";
	} else if ($_SESSION['fakultas'] == "ekonomi") {
		$fakultas = "Ekonomi";
	} else if ($_SESSION['fakultas'] == "hukum") {
		$fakultas = "Hukum";
	} else if ($_SESSION['fakultas'] == "isip") {
		$fakultas = "Ilmu Sosial dan Ilmu Politik";
	} else {
		$fakultas = "Dak tau hehe";
	}

	if (isset($_SESSION['fakultas'], $_SESSION['jurusan'])) {
		if (isset($_SESSION['page']) && $_SESSION['page'] != 1) {
			$query = mysqli_query($connection, "SELECT nim, nama, fakultas, jurusan, ukt, agama, riwayat_pendidikan, tahun_pendidikan, riwayat_prestasi, pemberi_prestasi, tahun_prestasi, tempat_lahir, tanggal_lahir, alamat_asal, alamat_sekarang, no_hp, facebook FROM maba WHERE fakultas='".$fakultas."' AND jurusan='".$_SESSION['jurusan']."' LIMIT ".mysqli_real_escape_string($connection, (string)(($_SESSION['page'] - 1) * 60)).", 60");
		} else {
			$query = mysqli_query($connection, "SELECT nim, nama, fakultas, jurusan, ukt, agama, riwayat_pendidikan, tahun_pendidikan, riwayat_prestasi, pemberi_prestasi, tahun_prestasi, tempat_lahir, tanggal_lahir, alamat_asal, alamat_sekarang, no_hp, facebook FROM maba WHERE fakultas='".$fakultas."' AND jurusan='".$_SESSION['jurusan']."' LIMIT 0, 60");
		}
	} else {
		if (isset($_SESSION['page']) && $_SESSION['page'] != 1) {
			$query = mysqli_query($connection, "SELECT nim, nama, fakultas, jurusan, ukt, agama, riwayat_pendidikan, tahun_pendidikan, riwayat_prestasi, pemberi_prestasi, tahun_prestasi, tempat_lahir, tanggal_lahir, alamat_asal, alamat_sekarang, no_hp, facebook FROM maba WHERE fakultas='".$fakultas."' LIMIT ".mysqli_real_escape_string($connection, (string)(($_SESSION['page'] - 1) * 60)).", 60");
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
	unset($_SESSION['jurusan']);
	unset($_SESSION['page']);
?>