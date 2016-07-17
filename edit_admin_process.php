<?php 
	session_start(); 
	require_once "connect.php";

	$_SESSION['status'] = "Failed";

	if (!isset($_SESSION['nim']) || !isset($_SESSION['nama']) || !isset($_SESSION['role'])) {
		header("Location: login_admin.php");
		exit;
	} else {
		$nim	= $_SESSION['nim'];
		$nama	= $_SESSION['nama'];
		$role	= $_SESSION['role'];
	}

	if ($_SESSION['role'] != "Super Admin") {
		header("Location: admin.php");
		exit;
	}

	$sql = sprintf("UPDATE admin SET nim='%s', nama='%s', role='%s' WHERE nim='%s'", mysqli_real_escape_string($connection, $_POST['nim']), mysqli_real_escape_string($connection, $_POST['nama']), mysqli_real_escape_string($connection, $_POST['role']), mysqli_real_escape_string($connection, $_POST['nim']));
	mysqli_query($connection, $sql);
	$_SESSION['status'] = "Success";
	header("Location: edit_admin.php?admin_nim=".$_POST['nim']);
	exit;
?>