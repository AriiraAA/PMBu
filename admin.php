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

	if (isset($_GET['page'])) {
		$_SESSION['page'] = $_GET['page'];
	} else {
		$_SESSION['page'] = 1;
	}

	if ($role == "Super Admin") {
		$sql = "SELECT COUNT(*) AS jumlah_data FROM maba";	
	} else {
		$sql = "SELECT COUNT(*) AS jumlah_data FROM maba WHERE fakultas='".$role."'";
	}
	
	$run = mysqli_query($connection, $sql);
	while ($row = mysqli_fetch_array($run))
		$jumlah_data = $row['jumlah_data'];

	if (isset($_GET['search'])) {
		if ($role == "Super Admin") {
			$sql = "SELECT * FROM maba WHERE nim='".mysqli_real_escape_string($connection, $_GET['search'])."'";
		} else {
			$sql = "SELECT * FROM maba WHERE nim='".mysqli_real_escape_string($connection, $_GET['search'])."' AND fakultas='".$role."'";
		}
		$run 	= mysqli_query($connection, $sql);
		$count 	= mysqli_num_rows($run);
		while ($row = mysqli_fetch_array($run)) {
			$nama_maba 	= $row['nama']; 
			$nim_maba 	= $row['nim']; 
			$jurusan 	= $row['jurusan']; 
			$fakultas 	= $row['fakultas'];
			$no_hp		= $row['no_hp'];
		}
	}
?>

<?php include "template/header.php"; ?>

<body ng-app="DBAlumni" ng-controller="MainController2">
	<script src="https://use.fontawesome.com/b24094c187.js"></script>
	<?php include "template/navbar.php";  ?>

	<div class="container">
		<center style="margin-top: 6%; margin-bottom: 3%;">
			<h1>Manage Data</h1>
		</center>
	  	<?php if (isset($_SESSION['status']) && $_SESSION['status'] == "berhasil"): ?>
			<div style="width: 40%; margin: 0 auto;" class="alert alert-success">
				<div class="ui success message">
			  		<div class="header"><b>Sukses</b></div>
			  		<p>Anda berhasil login sebagai admin</p>
			  	</div>
			</div>
		<?php endif; ?>
		<?php if (isset($_SESSION['error']) && $_SESSION['error'] == false): ?>
			<div style="width: 40%; margin: 0 auto;" class="alert alert-success">
				<div class="ui success message">
			  		<div class="header"><b>Sukses</b></div>
			  		<p>Anda berhasil menambahkan admin</p>
			  	</div>
			</div>
		<?php elseif (isset($_SESSION['error']) && $_SESSION['error'] == true): ?>
			<div style="width: 40%; margin: 0 auto;" class="alert alert-danger">
				<div class="ui error message">
			  		<div class="header"><b>Error</b></div>
			  		<p>Anda gagal menambahkan admin</p>
			  	</div>
			</div>
		<?php endif; ?>
		<form style="width: 30%;" action="admin.php" method="GET">
			<div class="input-group">
			  <input type="text" class="form-control" name="search" aria-label="Cari Maba" placeholder="Cari NIM">
			  <div class="input-group-btn">
			    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			  </div>
			</div>
		</form>
		<div class="btn-group" role="group">
			<a class="btn btn-success" href="download.php?fakultas=<?= $_SESSION['role'] ?>"><i class="glyphicon glyphicon-download-alt"></i> Download Data</a>
			<?php if ($nama != 'semiADMIN'): ?>
				<a class="btn btn-warning" href="input.php"><i class="fa fa-level-down"></i> Input Data</a>
			<?php endif; ?>
			<?php if ($role == "Super Admin"): ?>
				<a class="btn btn-primary" href="admin_list.php"><i class="fa fa-users"></i> List Admin</a>
			<?php endif; ?>
			<a class="btn btn-danger" href="edit_password.php"><i class="glyphicon glyphicon-edit"></i> Ubah Password</a>
			</div>
		<span class="pull-right">
			Jumlah data yang masuk: <?= $jumlah_data ?>
		</span>
		<table class="table table-bordered" style="text-align: center; width: 100%; margin: 0 auto;">
		  <thead>
		    <tr><th>No</th>
		    <th>Foto</th>
		    <th>Nama</th>
		    <th>NIM</th>
		    <th>Jurusan</th>
		    <th>Fakultas</th>
		    <th>No HP</th>
		    <th></th>
		  </tr></thead>
		  <?php if (isset($_GET['search'])): ?>
		  		<?php if ($count == 0): ?>
		  			<h2>Data tidak ditemukan</h2>
		  		<?php else: ?>
		  			<tbody>
					    <tr>
					    	<td>1</td>
					    	<td><img src="http://www.reg.unsri.ac.id/upload/foto/maba/2016/thumbnail/<?= $nim_maba ?>.jpg"></td>
					    	<td>
					    		<a href="detail.php?nim=<?= $nim_maba ?>"><?= $nama_maba ?></a>
					    	</td>
					    	<td>
					    		<?= $nim_maba ?>
					    	</td>
					    	<td>
					    		<?= $jurusan ?>
					    	</td>
					    	<td>
					    		<?= $fakultas ?>
					    	</td>
					    	<td>
					    		<?= $no_hp ?>
					    	</td>
					    	<td>
					    		<a class="btn btn-primary btn-sm" href="edit.php?nim=<?= $nim_maba ?>">
								  <i class="glyphicon glyphicon-pencil"></i> Edit
								</a>
								<?php if ($_SESSION['role'] == "Super Admin"): ?>
									<a class="btn btn-danger btn-sm" href="delete_maba.php?nim=<?= $nim_maba ?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
								<?php endif;  ?>
					    	</td>
					    </tr>
					  </tbody>
		  		<?php endif; ?>
		  <?php else: ?>
		  <tbody ng-repeat="maba in result | orderBy:order | searchFor:searchString">
		    <tr>
		    	<td>{{ $index + 1 }}</td>
		    	<td><img src="http://www.reg.unsri.ac.id/upload/foto/maba/2016/thumbnail/{{ maba.nim }}.jpg"></td>
		    	<td>
		    		<a href="detail.php?nim={{ maba.nim }}">{{ maba.nama }}</a>
		    	</td>
		    	<td>
		    		{{ maba.nim }}
		    	</td>
		    	<td>
		    		{{ maba.jurusan }}
		    	</td>
		    	<td>
		    		{{ maba.fakultas }}
		    	</td>
		    	<td>
		    		{{ maba.no_hp }}
		    	</td>
		    	<td>
		    		<?php if ($nama != 'semiADMIN'): ?>
			    		<a class="btn btn-primary btn-sm" href="edit.php?nim={{ maba.nim }}">
						  <i class="glyphicon glyphicon-pencil"></i> Edit
						</a>
						<?php if ($_SESSION['role'] == "Super Admin"): ?>
							<a class="btn btn-danger btn-sm" href="delete_maba.php?nim={{ maba.nim }}"><i class="glyphicon glyphicon-trash"></i> Delete</a>
						<?php endif;  ?>
					<?php endif; ?>
		    	</td>
		    </tr>
		  </tbody>
		<?php endif; ?>
		</table>
		<div class="row">
			<div class="col-md-6">
					<?php if (isset($_GET['page'])): ?>
						<a class="pull-left" href="admin.php?page=<?= $_GET['page'] - 1 ?>">&lt; Previous</a>
					<?php endif; ?>
			</div>
			<div class="col-md-6">
					<?php if (isset($_GET['page']) && $_GET['page'] != 1): ?>
						<a class="pull-right" href="admin.php?page=<?= $_GET['page'] + 1 ?>">Next &gt;</a>
					<?php else: ?>
						<a class="pull-right" href="admin.php?page=2">Next &gt;</a>
					<?php endif; ?>
			</div>
		</div>
	</div>

	<?php include "template/footer.php"; ?>
</body>
</html>
<?php 
	unset($_SESSION['status']);
	unset($_SESSION['error']);
?>