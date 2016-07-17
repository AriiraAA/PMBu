<?php 
	session_start();
	require_once "connect.php";

	if (!empty($_POST["nim"]) && !empty($_POST["nama"]) && !empty($_POST["fakultas"]) && !empty($_POST["jurusan"]) && !empty($_POST["prestasi"]) && !empty($_POST["instansi"]) && !empty($_POST["tahun"]) && !empty($_POST["tempat_lahir"]) && !empty($_POST["tanggal_lahir"]) && !empty($_POST["alamat_asal"]) && !empty($_POST["alamat_sekarang"]) && !empty($_POST["agama"]) && !empty($_POST["ukt"]) && !empty($_POST["golongan_darah"]) && !empty($_POST["no_hp"]) && (!empty($_POST['facebook']) || !empty($_POST['twitter']) || !empty($_POST['id_line']) || !empty($_POST['instagram']) || !empty($_POST['pin_bbm'])) && isset($_FILES["foto"])) {
		$allowed_exts	= array("jpg", "jpeg", "png");
		$ext 			= strtolower(substr($_FILES["foto"]["name"], strrpos($_FILES["foto"]["name"], '.') + 1));
		if (in_array($ext, $allowed_exts)) {
			$nim				= $_POST["nim"];
			$nama 				= $_POST["nama"];
			$fakultas			= $_POST["fakultas"];
			$jurusan			= $_POST["jurusan"];
			$tempat_lahir		= $_POST["tempat_lahir"];
			$tanggal_lahir		= $_POST["tanggal_lahir"];
			$alamat_asal		= $_POST["alamat_asal"];
			$alamat_sekarang	= $_POST["alamat_sekarang"];
			$agama				= $_POST["agama"];
			$ukt				= $_POST["ukt"];
			$golongan_darah		= $_POST["golongan_darah"];
			$no_hp				= $_POST["no_hp"];
			$facebook			= $_POST["facebook"];
			$twitter			= $_POST["twitter"];
			$id_line			= $_POST["id_line"];
			$instagram			= $_POST["instagram"];
			$pin_bbm			= $_POST["pin_bbm"];
			$pendidikan_sekolah	= implode(',', $_POST["pendidikan_sekolah"]);
			$pendidikan_tahun	= implode(',', $_POST["pendidikan_tahun"]);
			$prestasi			= implode(',', $_POST["prestasi"]);
			$instansi			= implode(',', $_POST["instansi"]);
			$tahun				= implode(',', $_POST["tahun"]);

			$password 			= '';

			$sql				= sprintf("INSERT INTO maba VALUES('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')", mysqli_real_escape_string($connection, $nim), mysqli_real_escape_string($connection, $nama), mysqli_real_escape_string($connection, $fakultas), mysqli_real_escape_string($connection, $jurusan), mysqli_real_escape_string($connection, $password), mysqli_real_escape_string($connection, $ukt), mysqli_real_escape_string($connection, $agama), mysqli_real_escape_string($connection, $pendidikan_sekolah), mysqli_real_escape_string($connection, $pendidikan_tahun), mysqli_real_escape_string($connection, $prestasi), mysqli_real_escape_string($connection, $tahun), mysqli_real_escape_string($connection, $instansi), mysqli_real_escape_string($connection, $golongan_darah), mysqli_real_escape_string($connection, $tempat_lahir), mysqli_real_escape_string($connection, $tanggal_lahir), mysqli_real_escape_string($connection, $alamat_asal), mysqli_real_escape_string($connection, $alamat_sekarang), mysqli_real_escape_string($connection, $no_hp), mysqli_real_escape_string($connection, $facebook), mysqli_real_escape_string($connection, $twitter), mysqli_real_escape_string($connection, $id_line), mysqli_real_escape_string($connection, $instagram), mysqli_real_escape_string($connection, $pin_bbm));
			mysqli_query($connection, $sql);

			move_uploaded_file($_FILES["foto"]["tmp_name"], "foto/". $nim . ".png");

			$_SESSION["status"] = "Success";
		} else {
			$_SESSION["status"] = "Forbidden";
		}
	} else {
		$_SESSION["status"] = "Failed";
	}

	header("Location: input.php");
?>

