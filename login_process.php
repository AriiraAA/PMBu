<?php
	session_start();  
	require_once "connect.php";

	$_SESSION['status'] = "gagal";

	if (isset($_POST['nim'], $_POST['password'])) {
		$nim		= mysqli_real_escape_string($connection, $_POST['nim']);
		$password	= md5(mysqli_real_escape_string($connection, $_POST['password']));

		$sql		= "SELECT * FROM admin WHERE nim='". $nim ."' AND password='". $password ."'";
		$run		= mysqli_query($connection, $sql);
		if (mysqli_num_rows($run) == 1) {
			while ($row = mysqli_fetch_array($run)) {
				$_SESSION['nim']	= $row['nim'];
				$_SESSION['nama']	= $row['nama'];
				$_SESSION['role']	= $row['role'];

				$_SESSION['status'] = "berhasil";

				header("Location: admin.php");
				exit;
			}
		} else {
			$_SESSION['status'] = "gagal";
			header("Location: login_admin.php");
			exit;
		}

	} else {
		header("Location: login_admin.php");
		exit;
	}
?>