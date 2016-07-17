<?php 
	session_start();
	if (isset($_SESSION['nim'])) {
		header("Location: edit2.php");
		exit;
	}
?>

<?php include "template/header.php"; ?>

<body ng-app="DBAlumni" ng-controller="MainController">

	<?php include "template/navbar.php"; ?>

	<div class="container">
		<center style="margin-top: 6%; margin-bottom: 3%;">
			<h1>Login Maba</h1>
		</center>
		<form action="auth_process.php" method="POST" style="width: 30%; margin: 0 auto;">
	  		<div class="form-group">
	  			<label for="nim">NIM <span class="required">*</span></label>
	  			<input class="form-control" type="text" name="nim" id="nim" />
	  		</div>
		  	<div class="form-group">
		  		<label for="password">Password <span class="required">*</span></label>
		  		<input class="form-control" type="password" name="password" id="password" />
		  	</div>
		  	<input class="btn btn-primary" type="submit" value="Login" />
	  	</form>
		<?php if (isset($_SESSION["status"]) && $_SESSION["status"] == "gagal"): ?>
			<div class="alert alert-danger" style="width: 30%; margin: 0 auto;">
				<div class="ui error message">
			  		<div class="header"><b>Login Gagal!</b></div>
			  		<p>NIM/Password anda salah</p>
			  	</div>
			</div>
		<?php endif; ?>
	</div>

	<?php include "template/footer.php"; ?>

</body>
</html>
<?php 
	unset($_SESSION['status']); 
?>