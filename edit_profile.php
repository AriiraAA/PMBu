<?php 
	session_start();
	$_SESSION['status'] = "Failed";
	if (isset($_SESSION['nim'], $_SESSION['nama'], $_SESSION['role'], $_POST['old_password'], $_POST['new_password'], $_POST['confirm_password'])) {

		require_once "connect.php";

		$query = mysqli_query($connection, "SELECT password FROM admin WHERE nama='".$_SESSION['nama']."' AND nim='".$_SESSION['nim']."' AND role='".$_SESSION['role']."' LIMIT 1");

		while ($row = mysqli_fetch_array($query)) {
			$old_password = $row['password'];
		}

		if (md5($_POST['old_password']) == $old_password) {
			if ($_POST['new_password'] == $_POST['confirm_password']) {
				$sql = sprintf("UPDATE admin SET password='%s' WHERE nim='%s' AND nama='%s' AND role='%s'", md5(mysqli_real_escape_string($connection, $_POST['new_password'])), mysqli_real_escape_string($connection, $_SESSION['nim']), mysqli_real_escape_string($connection, $_SESSION['nama']), mysqli_real_escape_string($connection, $_SESSION['role']));
				mysqli_query($connection, $sql);

				$_SESSION['status'] = "Success";
			}
		}
	}

	header("Location: edit_password.php");
	exit;
?>