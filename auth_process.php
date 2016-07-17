<?php
	session_start();  
	require_once "connect.php";

	$_SESSION['status'] = "gagal";

	if (isset($_POST['nim'], $_POST['password'])) {
		$nim		= mysqli_real_escape_string($connection, $_POST['nim']);
		$password	= mysqli_real_escape_string($connection, $_POST['password']);

		$sql		= "SELECT * FROM maba WHERE nim='". $nim ."' AND password='". $password ."'";
		$run		= mysqli_query($connection, $sql);
		if (mysqli_num_rows($run) == 1) {
			while ($row = mysqli_fetch_array($run)) {
				$_SESSION['nim']	= $row['nim'];
				$_SESSION['nama'] 	= $row['nama'];

				$_SESSION['status'] = "berhasil";

				header("Location: edit2.php");
				exit;
			}
		} else {
			$_SESSION['status'] = "gagal";
			header("Location: login_maba.php");
			exit;
		}

	} else {
		header("Location: login_maba.php");
		exit;
	}
?>