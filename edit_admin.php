<?php 
	session_start(); 
	require_once "connect.php";
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

	if (!isset($_GET['admin_nim'])) {
		header("Location: admin.php");
		exit;
	}

	$sql = "SELECT * FROM admin WHERE nim='".$_GET['admin_nim']."' LIMIT 1";
	$query = mysqli_query($connection, $sql);
	while ($row = mysqli_fetch_array($query)) {
		$nim 	= $row['nim'];
		$nama 	= $row['nama'];
		$role	= $row['role']; 
	}
?>
<?php include "template/header.php"; ?>
<body ng-app="DBAlumni" ng-controller="MainController2">
	<script src="https://use.fontawesome.com/b24094c187.js"></script>
	<?php include "template/navbar.php"; ?>
	<div class="container">
		<center>
			<h1>Edit Admin</h1>
		</center>
		<?php if (isset($_SESSION["status"]) && $_SESSION["status"] === "Success"): ?>
	  		<div class="alert alert-success">
	  			<p><b>Sukses</b></p>
	  			<p>Data anda berhasil diedit</p>
	  		</div>
		<?php elseif (isset($_SESSION["status"]) && $_SESSION["status"] === "Failed"): ?>
			<div class="alert alert-danger">
	  			<p><b>Gagal</b></p>
	  			<p>Data anda gagal diedit</p>
	  		</div>
		<?php endif; ?>
		<form action="edit_admin_process.php" method="POST">
			<div class="form-group">
				<label for="nim">NIM</label>
				<input class="form-control" type="hidden" name="nim" value="<?= $nim ?>">
				<input class="form-control" type="text" value="<?= $nim ?>" disabled>
			</div>
			<div class="form-group">
				<label for="nim">Nama</label>
				<input class="form-control" type="text" name="nama" value="<?= $nama ?>">
			</div>
			<div class="form-group">
				<label for="role">Role</label>
				<select name="role" class="form-control">
					<?php if ($role == "Super Admin"): ?>
						<option value="<?= $role ?>"><?= $role ?></option>
						<option value="Kedokteran">Kedokteran</option>
						<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						<option value="Teknik">Teknik</option>
						<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						<option value="Pertanian">Pertanian</option>
						<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Ekonomi">Ekonomi</option>
						<option value="Hukum">Hukum</option>
						<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
					<?php elseif ($role == "Kedokteran"): ?>
						<option value="<?= $role ?>"><?= $role ?></option>
						<option value="Super Admin">Super Admin</option>
						<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						<option value="Teknik">Teknik</option>
						<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						<option value="Pertanian">Pertanian</option>
						<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Ekonomi">Ekonomi</option>
						<option value="Hukum">Hukum</option>
						<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
					<?php elseif ($role == "Kesehatan Masyarakat"): ?>
						<option value="<?= $role ?>"><?= $role ?></option>
						<option value="Super Admin">Super Admin</option>
						<option value="Kedokteran">Kedokteran</option>
						<option value="Teknik">Teknik</option>
						<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						<option value="Pertanian">Pertanian</option>
						<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Ekonomi">Ekonomi</option>
						<option value="Hukum">Hukum</option>
						<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
					<?php elseif ($role == "Teknik"): ?>
						<option value="<?= $role ?>"><?= $role ?></option>
						<option value="Super Admin">Super Admin</option>
						<option value="Kedokteran">Kedokteran</option>
						<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						<option value="Pertanian">Pertanian</option>
						<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Ekonomi">Ekonomi</option>
						<option value="Hukum">Hukum</option>
						<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
					<?php elseif ($role == "Matematika dan Ilmu Pengetahuan Alam"): ?>
						<option value="<?= $role ?>"><?= $role ?></option>
						<option value="Super Admin">Super Admin</option>
						<option value="Kedokteran">Kedokteran</option>
						<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						<option value="Teknik">Teknik</option>
						<option value="Pertanian">Pertanian</option>
						<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Ekonomi">Ekonomi</option>
						<option value="Hukum">Hukum</option>
						<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
					<?php elseif ($role == "Pertanian"): ?>
						<option value="<?= $role ?>"><?= $role ?></option>
						<option value="Super Admin">Super Admin</option>
						<option value="Kedokteran">Kedokteran</option>
						<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						<option value="Teknik">Teknik</option>
						<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Ekonomi">Ekonomi</option>
						<option value="Hukum">Hukum</option>
						<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
					<?php elseif ($role == "Keguruan dan Ilmu Pendidikan"): ?>
						<option value="<?= $role ?>"><?= $role ?></option>
						<option value="Super Admin">Super Admin</option>
						<option value="Kedokteran">Kedokteran</option>
						<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						<option value="Teknik">Teknik</option>
						<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						<option value="Pertanian">Pertanian</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Ekonomi">Ekonomi</option>
						<option value="Hukum">Hukum</option>
						<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
					<?php elseif ($role == "Ilmu Komputer"): ?>
						<option value="<?= $role ?>"><?= $role ?></option>
						<option value="Super Admin">Super Admin</option>
						<option value="Kedokteran">Kedokteran</option>
						<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						<option value="Teknik">Teknik</option>
						<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						<option value="Pertanian">Pertanian</option>
						<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						<option value="Ekonomi">Ekonomi</option>
						<option value="Hukum">Hukum</option>
						<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
					<?php elseif ($role == "Ekonomi"): ?>
						<option value="<?= $role ?>"><?= $role ?></option>
						<option value="Super Admin">Super Admin</option>
						<option value="Kedokteran">Kedokteran</option>
						<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						<option value="Teknik">Teknik</option>
						<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						<option value="Pertanian">Pertanian</option>
						<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Hukum">Hukum</option>
						<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
					<?php elseif ($role == "Hukum"): ?>
						<option value="<?= $role ?>"><?= $role ?></option>
						<option value="Super Admin">Super Admin</option>
						<option value="Kedokteran">Kedokteran</option>
						<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						<option value="Teknik">Teknik</option>
						<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						<option value="Pertanian">Pertanian</option>
						<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Ekonomi">Ekonomi</option>
						<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
					<?php elseif ($role == "Ilmu Sosial dan Ilmu Politik"): ?>
						<option value="<?= $role ?>"><?= $role ?></option>
						<option value="Super Admin">Super Admin</option>
						<option value="Kedokteran">Kedokteran</option>
						<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						<option value="Teknik">Teknik</option>
						<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						<option value="Pertanian">Pertanian</option>
						<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Ekonomi">Ekonomi</option>
						<option value="Hukum">Hukum</option>
					<?php endif; ?>
				</select>
			</div>
			<center>
				<input class="btn btn-success" type="submit" value="Simpan Perubahan">
			</center>
		</form>
	</div>

	<?php include "template/footer.php"; ?>
</body>
</html>