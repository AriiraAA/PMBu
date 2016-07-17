<?php 
	session_start(); 
	require_once "connect.php";
	if (!isset($_SESSION['nim']) || !isset($_SESSION['nama']) || !isset($_SESSION['role'])) {
		header("Location: login_admin.php");
		exit;
	}

	if ($_SESSION['role'] != "Super Admin") {
		header("Location: admin.php");
		exit;
	}

	if (!isset($_GET['nim'])) {
		header("Location: admin.php");
		exit;
	}

	mysqli_query($connection, "DELETE FROM maba WHERE nim='".mysqli_real_escape_string($connection, $_GET['nim'])."'");
	header("Location: admin.php");
?>