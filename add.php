<?php  
	session_start();
	require_once "connect.php";

	$_SESSION['error'] = true;

	if (isset($_SESSION['role'], $_POST['add']) && $_SESSION['role'] === "Super Admin" && !empty($_POST['nim']) && !empty($_POST['role']) && !empty($_POST['nama']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
		$nim				= $_POST['nim'];
		$role				= $_POST['role'];
		$nama				= $_POST['nama'];
		$password			= $_POST['password'];
		$confirm_password	= $_POST['confirm_password'];
		if ($password === $confirm_password) {
			$sql	= sprintf("INSERT INTO admin VALUES('%s', '%s', '%s', '%s')", mysqli_real_escape_string($connection, $nim), mysqli_real_escape_string($connection, md5($password)), mysqli_real_escape_string($connection, $nama), mysqli_real_escape_string($connection, $role));
			mysqli_query($connection, $sql);

			$_SESSION['error'] = false;
		} else {
			$_SESSION['error'] = true;
		}
	}

	header("Location: admin_list.php");
?>