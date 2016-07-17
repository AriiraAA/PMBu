<?php 
	session_start();
	require_once "connect.php";

	if (!empty($_POST["nim"]) && !empty($_POST["nama"]) && !empty($_POST["jurusan"]) && !empty($_POST["no_hp"])) {
		$nim				= $_POST["nim"];
		$nama 				= $_POST["nama"];
		$fakultas			= $_POST["fakultas"];
		$jurusan			= $_POST["jurusan"];
		$no_hp				= $_POST["no_hp"];
		
		$password 			= randString(8);

		$sql				= sprintf("INSERT INTO maba(nim, nama, fakultas, jurusan, password, no_hp) VALUES('%s', '%s', '%s', '%s', '%s', '%s')", mysqli_real_escape_string($connection, $nim), mysqli_real_escape_string($connection, $nama), mysqli_real_escape_string($connection, $fakultas), mysqli_real_escape_string($connection, $jurusan), mysqli_real_escape_string($connection, $password), mysqli_real_escape_string($connection, $no_hp));

		mysqli_query($connection, $sql);

		$_SESSION['nim_maba'] 	= $nim;
		$_SESSION['password'] 	= $password;

		$_SESSION["status"] 	= "Success";
	} else {
		$_SESSION["status"] 	= "Failed";
	}

	header("Location: input.php");

	function randString($length) {
	    $char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	    $char = str_shuffle($char);
	    for($i = 0, $rand = '', $l = strlen($char) - 1; $i < $length; $i ++) {
	        $rand .= $char{mt_rand(0, $l)};
	    }
	    return $rand;
	}
?>

