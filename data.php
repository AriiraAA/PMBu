<?php 
	session_start();
	if (isset($_GET['fakultas'])) {
		$_SESSION['fakultas'] = $_GET['fakultas'];
		if (isset($_GET['jurusan'])) {
			$_SESSION['jurusan'] = $_GET['jurusan'];
		}
	} else {
		header("Location: fakultas.php");
		exit;
	}

	if (isset($_GET['page'])) {
		$_SESSION['page'] = $_GET['page'];
	} else {
		$_SESSION['page'] = 1;
	}

	$query_string = preg_split("/(=|&)/" ,$_SERVER['QUERY_STRING']);

	
?>

<?php include "template/header.php"; ?>

<body ng-app="DBAlumni" ng-controller="MainController">
	
	<?php include "template/navbar.php"; ?>
	
	<center style="margin-top: 6%; margin-bottom: 3%;">
		<h1>Data Mahasiswa Baru Universitas Sriwijaya</h1>
	</center>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<center>
					<h4>Jurusan</h4>
					<?php if ($_GET['fakultas'] == "kesmas"): ?>
						<ul style="list-style: none">
							<li><a href="data.php?fakultas=kesmas&jurusan=Ilmu Kesehatan Masyarakat">Ilmu Kesehatan Masyarakat</a></li>
						</ul>
					<?php elseif ($_GET['fakultas'] == "kedokteran"): ?>
						<ul style="list-style: none">
							<li><a href="data.php?fakultas=kedokteran&jurusan=Ilmu Keperawatan">Ilmu Keperawatan</a></li>
							<li><a href="data.php?fakultas=kedokteran&jurusan=Kedokteran Gigi">Kedokteran Gigi</a></li>
							<li><a href="data.php?fakultas=kedokteran&jurusan=Pendidikan Dokter">Pendidikan Dokter</a></li>
							<li><a href="data.php?fakultas=kedokteran&jurusan=Psikologi">Psikologi</a></li>
						</ul>
					<?php elseif ($_GET['fakultas'] == "teknik"): ?>
						<ul style="list-style: none">
							<li><a href="data.php?fakultas=teknik&jurusan=Teknik Geologi">Teknik Geologi</a></li>
							<li><a href="data.php?fakultas=teknik&jurusan=Teknik Arsitektur">Teknik Arsitektur</a></li>
							<li><a href="data.php?fakultas=teknik&jurusan=Teknik Elektro">Teknik Elektro</a></li>
							<li><a href="data.php?fakultas=teknik&jurusan=Teknik Kimia">Teknik Kimia</a></li>
							<li><a href="data.php?fakultas=teknik&jurusan=Teknik Mesin">Teknik Mesin</a></li>
							<li><a href="data.php?fakultas=teknik&jurusan=Teknik Pertambangan">Teknik Pertambangan</a></li>
							<li><a href="data.php?fakultas=teknik&jurusan=Teknik Sipil">Teknik Sipil</a></li>
						</ul>
					<?php elseif ($_GET['fakultas'] == "mipa"): ?>
						<ul style="list-style: none">
							<li><a href="data.php?fakultas=mipa&jurusan=Farmasi">Farmasi</a></li>
							<li><a href="data.php?fakultas=mipa&jurusan=Biologi">Biologi</a></li>
							<li><a href="data.php?fakultas=mipa&jurusan=Kimia">Kimia</a></li>
							<li><a href="data.php?fakultas=mipa&jurusan=Matematika">Matematika</a></li>
							<li><a href="data.php?fakultas=mipa&jurusan=Ilmu Kelautan">Ilmu Kelautan</a></li>
							<li><a href="data.php?fakultas=mipa&jurusan=Fisika">Fisika</a></li>
						</ul>
					<?php elseif ($_GET['fakultas'] == "pertanian"): ?>
						<ul style="list-style: none">
							<li><a href="data.php?fakultas=pertanian&jurusan=Ilmu Tanah">Ilmu Tanah</a></li>
							<li><a href="data.php?fakultas=pertanian&jurusan=Teknik Pertanian">Teknik Pertanian</a></li>
							<li><a href="data.php?fakultas=pertanian&jurusan=Teknologi Hasil Perikanan">Teknologi Hasil Perikanan</a></li>
							<li><a href="data.php?fakultas=pertanian&jurusan=Peternakan">Peternakan</a></li>
							<li><a href="data.php?fakultas=pertanian&jurusan=Teknologi Hasil Pertanian">Teknologi Hasil Pertanian</a></li>
							<li><a href="data.php?fakultas=pertanian&jurusan=Agroekoteknologi">Agroekoteknologi</a></li>
							<li><a href="data.php?fakultas=pertanian&jurusan=Agribisnis">Agribisnis</a></li>
							<li><a href="data.php?fakultas=pertanian&jurusan=Budidaya Perairan">Budidaya Perairan</a></li>
							<li><a href="data.php?fakultas=pertanian&jurusan=Agronomi">Agronomi</a></li>
							<li><a href="data.php?fakultas=pertanian&jurusan=Proteksi Tanaman">Proteksi Tanaman</a></li>
						</ul>
					<?php elseif ($_GET['fakultas'] == "kip"): ?>
						<ul style="list-style: none;">
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Jasmani dan Kesehatan">Pendidikan Jasmani dan Kesehatan</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Fisika">Pendidikan Fisika</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Kimia">Pendidikan Kimia</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Sejarah">Pendidikan Sejarah</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Matematika">Pendidikan Matematika</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Teknik Mesin">Pendidikan Teknik Mesin</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Anak Usia Dini">Pendidikan Anak Usia Dini</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Luar Sekolah">Pendidikan Luar Sekolah</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Bimbingan Konseling">Bimbingan Konseling</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Ekonomi">Pendidikan Ekonomi</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Bahasa, Sastra, dan Seni">Pendidikan Bahasa, Sastra, dan Seni</a></li>
							<li><a href="data.php?fakultas=kip&jurusan=Pendidikan Biologi">Pendidikan Biologi</a></li>
						</ul>
					<?php elseif ($_GET['fakultas'] == "ilkom"): ?>
						<ul style="list-style: none">
							<li><a href="data.php?fakultas=ilkom&jurusan=Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</a></li>
							<li><a href="data.php?fakultas=ilkom&jurusan=Manajemen Informatika (D3)">Manajemen Informatika (D3)</a></li>
							<li><a href="data.php?fakultas=ilkom&jurusan=Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</a></li>
							<li><a href="data.php?fakultas=ilkom&jurusan=Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</a></li>
							<li><a href="data.php?fakultas=ilkom&jurusan=Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</a></li>
							<li><a href="data.php?fakultas=ilkom&jurusan=Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</a></li>
							<li><a href="data.php?fakultas=ilkom&jurusan=Teknik Komputer (D3)">Teknik Komputer (D3)</a></li>
							<li><a href="data.php?fakultas=ilkom&jurusan=Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</a></li>
							<li><a href="data.php?fakultas=ilkom&jurusan=Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</a></li>
							<li><a href="data.php?fakultas=ilkom&jurusan=Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</a></li>
							<li><a href="data.php?fakultas=ilkom&jurusan=Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</a></li>
						</ul>
					<?php elseif ($_GET['fakultas'] == "ekonomi"): ?>
						<ul style="list-style: none">
							<li><a href="data.php?fakultas=ekonomi&jurusan=Manajemen">Manajemen</a></li>
							<li><a href="data.php?fakultas=ekonomi&jurusan=Akuntansi">Akuntansi</a></li>
							<li><a href="data.php?fakultas=ekonomi&jurusan=Ekonomi Pembangunan">Ekonomi Pembangunan</a></li>
							<li><a href="data.php?fakultas=ekonomi&jurusan=D3 Akuntansi">D3 Akuntansi</a></li>
							<li><a href="data.php?fakultas=ekonomi&jurusan=D3 Kesekretariatan">D3 Kesekretariatan</a></li>
						</ul>
					<?php elseif ($_GET['fakultas'] == "hukum"): ?>
						<ul style="list-style: none">
							<li><a href="data.php?fakultas=hukum&jurusan=Ilmu Hukum">Ilmu Hukum</a></li>
						</ul>
					<?php elseif ($_GET['fakultas'] == "isip"): ?>
						<ul style="list-style: none">
							<li><a href="data.php?fakultas=isip&jurusan=Ilmu Komunikasi">Ilmu Komunikasi</a></li>
							<li><a href="data.php?fakultas=isip&jurusan=Sosiologi">Sosiologi</a></li>
							<li><a href="data.php?fakultas=isip&jurusan=Ilmu Administrasi Negara">Ilmu Administrasi Negara</a></li>
							<li><a href="data.php?fakultas=isip&jurusan=Ilmu Hubungan Internasional">Ilmu Hubungan Internasional</a></li>
						</ul>
					<?php endif; ?>
				</center>
			</div>
			<div class="col-md-6">
				<div class="form-group pull-right" style="width: 50%;">
					<div class="input-group">
						<input class="form-control" placeholder="Cari nama..." type="text" ng-model="searchString">
				  		<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
					</div>
				</div>	
			</div>
		</div>
		<table class="table table-bordered" style="text-align: center; width: 90%; margin: 0 auto;">
		  <thead>
		    <tr><th>No</th>
		    <th>Foto</th>
		    <th>Nama</th>
		    <th>NIM</th>
		    <th>Jurusan</th>
		    <th>Fakultas</th>
		    <th>Facebook</th>
		  </tr></thead>
		  <tbody ng-repeat="maba in result | orderBy:'nama' | searchFor:searchString">
		    <tr>
		    	<td>{{ $index + 1 }}</td>
		    	<td><img src="http://www.reg.unsri.ac.id/upload/foto/maba/2016/thumbnail/{{ maba.nim }}.jpg"></td>
		    	<td>
		    		{{ maba.nama }}
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
		    		{{ maba.facebook }}
		    	</td>
		    </tr>
		  </tbody>
		</table>
		<div class="row">
			<div class="col-md-6">
				<?php if (in_array("jurusan", $query_string)): ?>
					<?php if (isset($_GET['page'])): ?>
						<a class="pull-left" href="data.php?fakultas=<?= $query_string[1] ?>&jurusan=<?= $query_string[3] ?>&page=<?= $_GET['page'] - 1 ?>">&lt; Previous</a>
					<?php endif; ?>
				<?php else: ?>
					<?php if (isset($_GET['page'])): ?>
						<a class="pull-left" href="data.php?fakultas=<?= $query_string[1] ?>&page=<?= $_GET['page'] - 1 ?>">&lt; Previous</a>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="col-md-6">
				<?php if (in_array("jurusan", $query_string)): ?>
					<?php if (isset($_GET['page']) && $_GET['page'] != 1): ?>
						<a class="pull-right" href="data.php?fakultas=<?= $query_string[1] ?>&jurusan=<?= $query_string[3] ?>&page=<?= $_GET['page'] + 1 ?>">Next &gt;</a>
					<?php else: ?>
						<a class="pull-right" href="data.php?fakultas=<?= $query_string[1] ?>&jurusan=<?= $query_string[3] ?>&page=2">Next &gt;</a>
					<?php endif; ?>
				<?php else: ?>
					<?php if (isset($_GET['page']) && $_GET['page'] != 1): ?>
						<a class="pull-right" href="data.php?fakultas=<?= $query_string[1] ?>&page=<?= $_GET['page'] + 1 ?>">Next &gt;</a>
					<?php else: ?>
						<a class="pull-right" href="data.php?fakultas=<?= $query_string[1] ?>&page=2">Next &gt;</a>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	

	<?php include "template/footer.php"; ?>

</body>
</html>