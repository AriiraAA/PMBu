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

	$sql = "SELECT * FROM admin";
	$query = mysqli_query($connection, $sql);
?>

<?php include "template/header.php"; ?>

<body ng-app="DBAlumni" ng-controller="MainController2">
	<script src="https://use.fontawesome.com/b24094c187.js"></script>
	<?php include "template/navbar.php"; ?>

	<div class="container">
		<center>
			<h1>Manage Admin</h1>
		</center>
		<button id="add_admin_btn" class="btn btn-primary"><i class="fa fa-user"></i> Add Admin</button>
		<div style="margin: 0 auto; text-align: left;" id="add_admin_wrapper">
			
		</div>
		<table class="table table-bordered" style="text-align: center;">
			<thead>
				<th>No</th>
				<th>Nim</th>
				<th>Nama</th>
				<th>Role / Fakultas</th>
			</thead>
			<tbody>
				<?php 
					$i = 0; 
					while ($row = mysqli_fetch_array($query)) {
						echo '<tr>
								<td>'.++$i.'</td>
								<td>'.$row['nim'].'</td>
								<td>'.$row['nama'].'</td>
								<td>'.$row['role'].'</td>
								<td><a class="btn btn-primary" href="edit_admin.php?admin_nim='.$row['nim'].'"><i class="glyphicon glyphicon-pencil"></i> Edit</a> <a class="btn btn-danger" href="delete_admin.php?admin_nim='.$row['nim'].'"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
							</tr>';
					}
				?>
			</tbody>
		</table>
	</div>

	<script type="text/javascript">
		$("#add_admin_btn").click(function() {
			$("#add_admin_wrapper").append('<form id="add_admin" action="add.php" method="POST">' +
				'<div class="row">' +
				'<div class="form-inline">' +
					'<div class="form-group">' +
						'<input class="form-control" type="text" name="nim" placeholder="NIM" />' +
					'</div>' +
					'<div class="form-group">' +
						'<input class="form-control" type="text" name="nama" placeholder="Nama" />' +
					'</div>' +
					'<div class="form-group">' +
						'<select class="form-control" name="role" placeholder="Role">' +
							'<option value="Super Admin">Super Admin</option>' +
							'<option value="Kedokteran">Kedokteran</option>' +
							'<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>' +
							'<option value="Teknik">Teknik</option>' +
							'<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>' +
							'<option value="Pertanian">Pertanian</option>' +
							'<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>' +
							'<option value="Ilmu Komputer">Ilmu Komputer</option>' +
							'<option value="Ekonomi">Ekonomi</option>' +
							'<option value="Hukum">Hukum</option>' +
							'<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>' +
						'</select>' +
					'</div>' +
					'<div class="form-group">' +
						'<input class="form-control" type="password" name="password" placeholder="Password" />' +
					'</div>' +
					'<div class="form-group">' +
						'<input class="form-control" type="password" name="confirm_password" placeholder="Password Again" />' +
					'</div>' +
					'<div class="form-group">' +
						'<input class="btn btn-success" name="add" type="submit" value="Add" />' +
					'</div>' +
				'</div>' +
				'</div>' +
			'</form>');
		});
	</script>

	<?php include "template/footer.php"; ?>
</body>
</html>