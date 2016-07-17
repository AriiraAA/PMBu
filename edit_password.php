<?php  
	session_start(); 
	require_once "connect.php";
	if (!isset($_SESSION['nim']) || !isset($_SESSION['nama']) || !isset($_SESSION['role'])) {
		header("Location: login_admin.php");
		exit;
	}
?>

<?php include "template/header.php"; ?>

<body>
	<?php include "template/navbar.php"; ?>

	<div class="container">
		<center>
			<h1>Ubah Password</h1>
		</center>
		<form action="edit_profile.php" method="POST" style="width: 55%; margin: 0 auto;">
			<?php if (isset($_SESSION['status']) && $_SESSION['status'] == "Success"): ?>
				<div style="margin: 0 auto;" class="alert alert-success">
					<div class="ui success message">
				  		<div class="header"><b>Sukses</b></div>
				  		<p>Anda berhasil mengubah password</p>
				  		<p><a href="logout.php">Logout</a></p>
				  	</div>
				</div>
			<?php elseif (isset($_SESSION['status']) && $_SESSION['status'] == "Failed"): ?>
				<div style="margin: 0 auto;" class="alert alert-danger">
					<div class="ui success message">
				  		<div class="header"><b>Gagal</b></div>
				  		<p>Anda gagal mengubah password</p>
				  	</div>
				</div>
			<?php endif; ?>
			<div class="form-group">
				<label for="old_password">Old Password</label>
				<input class="form-control" type="password" name="old_password">
			</div>
			<div class="form-group">
				<label for="new_password">New Password</label>
				<input class="form-control" type="password" name="new_password">
			</div>
			<div class="form-group">
				<label for="confirm_password">Confirm Password</label>
				<input class="form-control" type="password" name="confirm_password">
			</div>
			<center>
				<input class="btn btn-success" type="submit" value="Ubah Password">
			</center>
		</form>
	</div>

	<?php include "template/footer.php"; ?>
</body>
</html>

<?php unset($_SESSION['status']); ?>