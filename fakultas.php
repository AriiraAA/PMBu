<?php include "template/header.php";  ?>

<body ng-app="DBAlumni" ng-controller="MainController">
	
	<?php include "template/navbar.php"; ?>
	
	<div class="container">
		<center style="margin-top: 6%; margin-bottom: 3%;">
			<h1>Data Mahasiswa Baru Universitas Sriwijaya</h1>
		</center>
		<table class="table table-bordered" style="text-align: center; width: 90%; margin: 0 auto;">
		  <thead>
		    <tr><th class="text-center">Fakultas</th>
		  </tr></thead>
		  <tbody>
		    <tr>
		    	<td><a href="data.php?fakultas=kesmas">Kesehatan Masyarakat</a></td>
		    </tr>
		    <tr>
		    	<td><a href="data.php?fakultas=kedokteran">Kedokteran</a></td>
		    </tr>
		    <tr>
		    	<td><a href="data.php?fakultas=teknik">Teknik</a></td>
		    </tr>
		    <tr>
		    	<td><a href="data.php?fakultas=mipa">Matematika dan Ilmu Pengetahuan Alam</a></td>
		    </tr>
		    <tr>
		    	<td><a href="data.php?fakultas=pertanian">Pertanian</a></td>
		    </tr>
		    <tr>
		    	<td><a href="data.php?fakultas=kip">Keguruan dan Ilmu Pendidikan</a></td>
		    </tr>
		    <tr>
		    	<td><a href="data.php?fakultas=ilkom">Ilmu Komputer</a></td>
		    </tr>
		    <tr>
		    	<td><a href="data.php?fakultas=ekonomi">Ekonomi</a></td>
		    </tr>
		    <tr>
		    	<td><a href="data.php?fakultas=hukum">Hukum</a></td>
		    </tr>
		    <tr>
		    	<td><a href="data.php?fakultas=isip">Ilmu Sosial dan Ilmu Politik</a></td>
		    </tr>
		  </tbody>
		</table>	
	</div>

	<?php include "template/footer.php"; ?>

</body>
</html>