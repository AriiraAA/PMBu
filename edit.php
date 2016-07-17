<?php  
	session_start();
	require_once "connect.php";

	if (!isset($_GET['nim']) || !isset($_SESSION['role'])) {
		header("Location: admin.php");
		exit;
	} else {
		if ($_SESSION['role'] == "Super Admin") {
			$sql	= "SELECT * FROM maba WHERE nim='".$_GET['nim']."' LIMIT 1";
		} else {
			$sql	= "SELECT * FROM maba WHERE nim='".$_GET['nim']."' AND fakultas='".$_SESSION['role']."' LIMIT 1";
		}

		$run 	= mysqli_query($connection, $sql);
		while ($row = mysqli_fetch_array($run)) {
			$nim 					= $row['nim'];
			$password 				= $row['password'];
			$nama 					= $row['nama'];
			$jenis_kelamin			= $row['jenis_kelamin'];
			$golongan_darah			= $row['golongan_darah'];
			$riwayat_penyakit		= $row['riwayat_penyakit'];
			$jurusan				= $row['jurusan'];
			$fakultas				= $row['fakultas'];
			$ukt					= $row['ukt'];
			$agama					= $row['agama'];
			$tempat_lahir			= $row['tempat_lahir'];
			$tanggal_lahir			= $row['tanggal_lahir'];
			$alamat_asal			= $row['alamat_asal'];
			$alamat_sekarang		= $row['alamat_sekarang'];
			$alamat_domisili		= $row['alamat_domisili'];
			$asal_daerah			= $row['asal_daerah'];
			$hobi					= $row['hobi'];
			$skill 					= $row['skill'];
			$cita_cita				= $row['cita_cita'];
			$motto					= $row['motto'];
			$tokoh_idola			= $row['tokoh_idola'];
			$bacaan_favorit			= $row['bacaan_favorit'];
			$nama_ayah				= $row['nama_ayah'];
			$alamat_ayah			= $row['alamat_ayah'];
			$pekerjaan_ayah			= $row['pekerjaan_ayah'];
			$penghasilan_ayah		= $row['penghasilan_ayah'];
			$no_hp_ayah				= $row['no_hp_ayah'];
			$nama_ibu				= $row['nama_ibu'];
			$alamat_ibu				= $row['alamat_ibu'];
			$pekerjaan_ibu			= $row['pekerjaan_ibu'];
			$penghasilan_ibu		= $row['penghasilan_ibu'];
			$no_hp_ibu				= $row['no_hp_ibu'];
			$nama_wali				= $row['nama_wali'];
			$alamat_wali			= $row['alamat_wali'];
			$pekerjaan_wali			= $row['pekerjaan_wali'];
			$penghasilan_wali		= $row['penghasilan_wali'];
			$no_hp_wali				= $row['no_hp_wali'];
			$jumlah_tanggungan 		= $row['jumlah_tanggungan'];
			$kepemilikan_rumah		= $row['kepemilikan_rumah'];
			$jumlah_tanggungan 		= $row['jumlah_tanggungan'];
			$kepemilikan_rumah		= $row['kepemilikan_rumah'];
			$no_hp					= $row['no_hp'];
			$email 					= $row['email'];
			$facebook				= $row['facebook'];
			$line					= $row['line'];
			$pin_bb					= $row['pin_bb'];
			$blog 					= $row['blog'];
			$isu 					= $row['isu'];
			$keagamaan_pernah		= $row['keagamaan_pernah'];
			$keagamaan_kapan		= $row['keagamaan_kapan'];
			$keagamaan_vakum		= $row['keagamaan_vakum'];
			$keagamaan_kajian		= $row['keagamaan_kajian'];
			$anak_ke 							= explode(',', $row['anak_ke']);
			$riwayat_pendidikan					= explode(',', $row['riwayat_pendidikan']);
			$tahun_pendidikan					= explode(',', $row['tahun_pendidikan']);
			$riwayat_pendidikan_nonformal		= explode(',', $row['riwayat_pendidikan_nonformal']);
			$tahun_pendidikan_nonformal			= explode(',', $row['tahun_pendidikan_nonformal']);
			$riwayat_prestasi					= explode(',', $row['riwayat_prestasi']);
			$tingkat_prestasi					= explode(',', $row['tingkat_prestasi']);
			$pemberi_prestasi					= explode(',', $row['pemberi_prestasi']);
			$tahun_prestasi						= explode(',', $row['tahun_prestasi']);
			$riwayat_organisasi					= explode(',', $row['riwayat_organisasi']);
			$tahun_organisasi					= explode(',', $row['tahun_organisasi']);
			$jabatan_organisasi					= explode(',', $row['jabatan_organisasi']);
		}
	}
?>

<?php include "template/header.php"; ?>
<body>
	<script src="https://use.fontawesome.com/b24094c187.js"></script>
	<?php include "template/navbar.php"; ?>

	<div class="container">
		<center>
			<h1 style="margin-top: 6%">Form Pengisian Data Mahasiswa Baru Universitas Sriwijaya</h1>
			<h4><i>Panel Aspirasi yang terletak di paling bawah harus diisi agar dapat menyimpan/mengubah data pada form ini</i></h4>		
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
		<form action="edit_process.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<input type="hidden" name="nim_maba" value="<?= $nim ?>">
				<div class="col-md-6">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Data Pribadi</h3>
					  </div>
					  <div class="panel-body">
					    <div class="form-group">
					    	<label for="nama">Nama</label>
					    	<input class="form-control" type="text" name="nama" value="<?= $nama ?>">
					    </div>
					    <div class="form-group">
					    	<label for="nim">NIM</label>
					    	<input class="form-control" type="text" name="nim" value="<?= $nim ?>">
					    </div>
					    <div class="form-group">
					    	<label for="password">Password</label>
					    	<input class="form-control" type="text" name="password" value="<?= $password ?>">
					    </div>
					    <div class="form-group">
					    	<div>
					    		<label for="nama">Jenis Kelamin</label>					    		
					    	</div>
					    	<?php if ($jenis_kelamin == "Laki-laki"): ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="jenis_kelamin" value="Laki-laki" checked>
						    		Laki-laki
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="jenis_kelamin" value="Perempuan">
						    		Perempuan
						    	</label>
					    	<?php elseif ($jenis_kelamin == "Perempuan"): ?>
					    		<label class="radio-inline">
						    		<input type="radio" name="jenis_kelamin" value="Laki-laki">
						    		Laki-laki
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="jenis_kelamin" value="Perempuan" checked>
						    		Perempuan
						    	</label>
						    <?php else: ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="jenis_kelamin" value="Laki-laki">
						    		Laki-laki
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="jenis_kelamin" value="Perempuan">
						    		Perempuan
						    	</label>
					    	<?php endif; ?>
					    </div>
					    <div class="form-group">
					    	<div>
					    		<label for="golongan_darah">Golongan Darah</label>	
					    	</div>
					    	<?php if ($golongan_darah == "A"): ?>
					    		<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="A" checked>
						    		A
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="B">
						    		B
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="AB">
						    		AB
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="O">
						    		O
						    	</label>
						    <?php elseif ($golongan_darah == "B"): ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="A">
						    		A
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="B" checked>
						    		B
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="AB">
						    		AB
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="O">
						    		O
						    	</label>
						    <?php elseif ($golongan_darah == "AB"): ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="A">
						    		A
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="B">
						    		B
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="AB" checked>
						    		AB
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="O">
						    		O
						    	</label>
						    <?php elseif ($golongan_darah == "O"): ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="A">
						    		A
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="B">
						    		B
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="AB">
						    		AB
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="O" checked>
						    		O
						    	</label>
						    <?php else: ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="A">
						    		A
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="B">
						    		B
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="AB">
						    		AB
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="golongan_darah" value="O">
						    		O
						    	</label>
					    	<?php endif; ?>
					    </div>
					    <div class="form-group">
					    	<label for="riwayat_penyakit">Riwayat Penyakit</label>
					    	<input class="form-control" type="text" name="riwayat_penyakit" value="<?= $riwayat_penyakit ?>">
					    </div>
					    <div class="form-group">
					    	<label for="fakultas">Fakultas</label>
					    	<select class="form-control" name="fakultas" id="fakultas">
								<?php if ($fakultas == "Kedokteran"): ?>
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
								<?php elseif ($fakultas == "Kesehatan Masyarakat"): ?>
									<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
									<option value="Kedokteran">Kedokteran</option>
									<option value="Teknik">Teknik</option>
						  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						  			<option value="Pertanian">Pertanian</option>
						  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						  			<option value="Ilmu Komputer">Ilmu Komputer</option>
						  			<option value="Ekonomi">Ekonomi</option>
						  			<option value="Hukum">Hukum</option>
						  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
						  		<?php elseif ($fakultas == "Teknik"): ?>
									<option value="Teknik">Teknik</option>
									<option value="Kedokteran">Kedokteran</option>
					  				<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
									<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						  			<option value="Pertanian">Pertanian</option>
						  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						  			<option value="Ilmu Komputer">Ilmu Komputer</option>
						  			<option value="Ekonomi">Ekonomi</option>
						  			<option value="Hukum">Hukum</option>
						  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
						  		<?php elseif ($fakultas == "Matematika dan Ilmu Pengetahuan Alam"): ?>
									<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
									<option value="Kedokteran">Kedokteran</option>
						  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						  			<option value="Teknik">Teknik</option>
						  			<option value="Pertanian">Pertanian</option>
						  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						  			<option value="Ilmu Komputer">Ilmu Komputer</option>
						  			<option value="Ekonomi">Ekonomi</option>
						  			<option value="Hukum">Hukum</option>
						  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
						  		<?php elseif ($fakultas == "Pertanian"): ?>
						  			<option value="Pertanian">Pertanian</option>
									<option value="Kedokteran">Kedokteran</option>
						  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						  			<option value="Teknik">Teknik</option>
						  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
									<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						  			<option value="Ilmu Komputer">Ilmu Komputer</option>
						  			<option value="Ekonomi">Ekonomi</option>
						  			<option value="Hukum">Hukum</option>
						  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
						  		<?php elseif ($fakultas == "Keguruan dan Ilmu Pendidikan"): ?>
									<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
									<option value="Kedokteran">Kedokteran</option>
						  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						  			<option value="Teknik">Teknik</option>
						  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						  			<option value="Pertanian">Pertanian</option>
						  			<option value="Ilmu Komputer">Ilmu Komputer</option>
						  			<option value="Ekonomi">Ekonomi</option>
						  			<option value="Hukum">Hukum</option>
						  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
						  		<?php elseif ($fakultas == "Ilmu Komputer"): ?>
						  			<option value="Ilmu Komputer">Ilmu Komputer</option>
									<option value="Kedokteran">Kedokteran</option>
						  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						  			<option value="Teknik">Teknik</option>
						  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						  			<option value="Pertanian">Pertanian</option>
						  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						  			<option value="Ekonomi">Ekonomi</option>
					  				<option value="Hukum">Hukum</option>
					  				<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
					  			<?php elseif ($fakultas == "Ekonomi"): ?>
					  				<option value="Ekonomi">Ekonomi</option>
					  				<option value="Kedokteran">Kedokteran</option>
						  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						  			<option value="Teknik">Teknik</option>
						  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						  			<option value="Pertanian">Pertanian</option>
						  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						  			<option value="Ilmu Komputer">Ilmu Komputer</option>
						  			<option value="Hukum">Hukum</option>
						  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
						  		<?php elseif ($fakultas == "Hukum"): ?>
						  			<option value="Hukum">Hukum</option>
						  			<option value="Kedokteran">Kedokteran</option>
						  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						  			<option value="Teknik">Teknik</option>
						  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						  			<option value="Pertanian">Pertanian</option>
						  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						  			<option value="Ilmu Komputer">Ilmu Komputer</option>
						  			<option value="Ekonomi">Ekonomi</option>
						  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
						  		<?php elseif ($fakultas == "Ilmu Sosial dan Ilmu Politik"): ?>
						  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
						  			<option value="Hukum">Hukum</option>
						  			<option value="Kedokteran">Kedokteran</option>
						  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
						  			<option value="Teknik">Teknik</option>
						  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
						  			<option value="Pertanian">Pertanian</option>
						  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
						  			<option value="Ilmu Komputer">Ilmu Komputer</option>
						  			<option value="Ekonomi">Ekonomi</option>
								<?php endif; ?>
							</select>
					    </div>
					    <div class="form-group">
					    	<label for="jurusan">Jurusan / Prodi</label>
					    	<input class="form-control" type="text" name="jurusan" value="<?= $jurusan ?>">
					    </div>
					    <div class="form-group">
					    	<label for="ukt">UKT</label>
					    	<input class="form-control" type="text" name="ukt" value="<?= $ukt ?>">
					    </div>
					    <div class="form-group">
					    	<label for="agama">Agama</label>
					    	<input class="form-control" type="text" name="agama" value="<?= $agama ?>">
					    </div>
					    <div class="form-group">
					    	<label for="tempat_lahir">Tempat Lahir</label>
					    	<input class="form-control" type="text" name="tempat_lahir" value="<?= $tempat_lahir ?>">
					    </div>
					    <div class="form-group">
					    	<label for="tanggal_lahir">Tanggal Lahir</label>
					    	<input class="form-control" type="text" name="tanggal_lahir" value="<?= $tanggal_lahir ?>">
					    </div>
					    <div class="form-group">
					    	<label for="alamat_asal">Alamat Asal</label>
					    	<input class="form-control" type="text" name="alamat_asal" value="<?= $alamat_asal ?>">
					    </div>
					    <div class="form-group">
					    	<label for="alamat_sekarang">Alamat Sekarang</label>
					    	<input class="form-control" type="text" name="alamat_sekarang" value="<?= $alamat_sekarang ?>">
					    </div>
					    <div class="form-group">
					    	<label for="asal_daerah">Asal Daerah</label>
					    	<input class="form-control" type="text" name="asal_daerah" value="<?= $asal_daerah ?>">
					    </div>
					    <div class="form-group">
					    	<label for="hobi">Hobi</label>
					    	<input class="form-control" type="text" name="hobi" value="<?= $hobi ?>">
					    </div>
					    <div class="form-group">
					    	<label for="skill">Skill</label>
					    	<input class="form-control" type="text" name="skill" value="<?= $skill ?>">
					    </div>
					    <div class="form-group">
					    	<label for="cita_cita">Cita-cita</label>
					    	<input class="form-control" type="text" name="cita_cita" value="<?= $cita_cita ?>">
					    </div>
					    <div class="form-group">
					    	<label for="motto">Motto</label>
					    	<input class="form-control" type="text" name="motto" value="<?= $motto ?>">
					    </div>
					    <div class="form-group">
					    	<label for="tokoh_idola">Tokoh Idola</label>
					    	<input class="form-control" type="text" name="tokoh_idola" value="<?= $tokoh_idola ?>">
					    </div>
					    <div class="form-group">
					    	<label for="bacaan_favorit">Bacaan Favorit</label>
					    	<input class="form-control" type="text" name="bacaan_favorit" value="<?= $bacaan_favorit ?>">
					    </div>
					    <div class="form-group">
					    	<label for="blog">Blog</label>
					    	<input class="form-control" type="text" name="blog" value="<?= $blog ?>">
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					 <div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><i class="fa fa-users"></i> Data Keluarga</h3>
					  </div>
					  <div class="panel-body">
					    <div class="panel panel-info">
						  <div class="panel-heading">
						    <h3 class="panel-title">Data Ayah</h3>
						  </div>
						  <div class="panel-body">
						    <div class="form-group">
						    	<label for="nama_ayah">Nama Ayah</label>
						    	<input class="form-control" type="text" name="nama_ayah" value="<?= $nama_ayah ?>">
						    </div>
						    <div class="form-group">
						    	<label for="alamat_ayah">Alamat Ayah</label>
						    	<input class="form-control" type="text" name="alamat_ayah" value="<?= $alamat_ayah ?>">
						    </div>
						    <div class="form-group">
						    	<label for="pekerjaan_ayah">Pekerjaan Ayah</label>
						    	<input class="form-control" type="text" name="pekerjaan_ayah" value="<?= $pekerjaan_ayah ?>">
						    </div>
						    <div class="form-group">
						    	<label for="penghasilan_ayah">Penghasilan Ayah (per bulan)</label>
						    	<input class="form-control" type="text" name="penghasilan_ayah" value="<?= $penghasilan_ayah ?>">
						    </div>
						    <div class="form-group">
						    	<label for="no_hp_ayah">No HP Ayah</label>
						    	<input class="form-control" type="text" name="no_hp_ayah" value="<?= $no_hp_ayah ?>">
						    </div>
						  </div>
						</div>
						<div class="panel panel-info">
						  <div class="panel-heading">
						    <h3 class="panel-title">Data Ibu</h3>
						  </div>
						  <div class="panel-body">
						    <div class="form-group">
						    	<label for="nama_ibu">Nama Ibu</label>
						    	<input class="form-control" type="text" name="nama_ibu" value="<?= $nama_ibu ?>">
						    </div>
						    <div class="form-group">
						    	<label for="alamat_ibu">Alamat Ibu</label>
						    	<input class="form-control" type="text" name="alamat_ibu" value="<?= $alamat_ibu ?>">
						    </div>
						    <div class="form-group">
						    	<label for="pekerjaan_ibu">Pekerjaan Ibu</label>
						    	<input class="form-control" type="text" name="pekerjaan_ibu" value="<?= $pekerjaan_ibu ?>">
						    </div>
						    <div class="form-group">
						    	<label for="penghasilan_ibu">Penghasilan Ibu (per bulan)</label>
						    	<input class="form-control" type="text" name="penghasilan_ibu" value="<?= $penghasilan_ibu ?>">
						    </div>
						    <div class="form-group">
						    	<label for="no_hp_ibu">No HP Ibu</label>
						    	<input class="form-control" type="text" name="no_hp_ibu" value="<?= $no_hp_ibu ?>">
						    </div>
						  </div>
						</div>
						<div class="panel panel-info">
						  <div class="panel-heading">
						    <h3 class="panel-title">Data Wali</h3>
						  </div>
						  <div class="panel-body">
						    <div class="form-group">
						    	<label for="nama_wali">Nama Wali</label>
						    	<input class="form-control" type="text" name="nama_wali" value="<?= $nama_wali ?>">
						    </div>
						    <div class="form-group">
						    	<label for="alamat_wali">Alamat Wali</label>
						    	<input class="form-control" type="text" name="alamat_wali" value="<?= $alamat_wali ?>">
						    </div>
						    <div class="form-group">
						    	<label for="pekerjaan_wali">Pekerjaan Wali</label>
						    	<input class="form-control" type="text" name="pekerjaan_wali" value="<?= $pekerjaan_wali ?>">
						    </div>
						    <div class="form-group">
						    	<label for="penghasilan_wali">Penghasilan Wali (per bulan)</label>
						    	<input class="form-control" type="text" name="penghasilan_wali" value="<?= $penghasilan_wali ?>">
						    </div>
						    <div class="form-group">
						    	<label for="no_hp_wali">No HP Wali</label>
						    	<input class="form-control" type="text" name="no_hp_wali" value="<?= $no_hp_wali ?>">
						    </div>
						  </div>
						</div>
						<label for="anak_ke">Anak Ke-</label>
						<div class="form-inline">
							<?php if (isset($anak_ke) && $anak_ke != ''): ?>
								<div class="form-group">
									<input class="form-control" type="text" name="anak_ke" value="<?php if (isset($anak_ke[0])) echo $anak_ke[0]; ?>" />
								</div>
								<div class="form-group">
									<label for="saudara"> dari </label>
									<input class="form-control" type="text" name="saudara" value="<?php if (isset($anak_ke[1])) echo $anak_ke[1]; ?>" />
									<label> bersaudara </label>
								</div>
							<?php elseif (isset($anak_ke) && ($anak_ke == '' || $anak_ke == null)): ?>
								<div class="form-group">
									<input class="form-control" type="text" name="anak_ke" />
								</div>
								<div class="form-group">
									<label for="saudara"> dari </label>
									<input class="form-control" type="text" name="saudara" />
									<label> bersaudara </label>
								</div>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="jumlah_tanggungan">Jumlah Tanggungan</label>
							<input class="form-control" type="text" name="jumlah_tanggungan" value="<?= $jumlah_tanggungan ?>">
						</div>
						<div class="form-group">
					    	<div>
					    		<label for="kepemilikan_rumah">Kepemilikan Rumah</label>	
					    	</div>
					    	<?php if ($kepemilikan_rumah == "Milik Sendiri"): ?>
					    		<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Milik Sendiri" checked>
						    		Milik Sendiri
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Mengontrak">
						    		Mengontrak
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Menumpang">
						    		Menumpang
						    	</label>
						    <?php elseif ($kepemilikan_rumah == "Mengontrak"): ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Milik Sendiri">
						    		Milik Sendiri
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Mengontrak" checked>
						    		Mengontrak
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Menumpang">
						    		Menumpang
						    	</label>
						    <?php elseif ($kepemilikan_rumah == "Menumpang"): ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Milik Sendiri">
						    		Milik Sendiri
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Mengontrak">
						    		Mengontrak
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Menumpang" checked>
						    		Menumpang
						    	</label>
						    <?php else: ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Milik Sendiri">
						    		Milik Sendiri
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Mengontrak">
						    		Mengontrak
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="kepemilikan_rumah" value="Menumpang">
						    		Menumpang
						    	</label>
					    	<?php endif; ?>
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><i class="fa fa-phone"></i> Kontak</h3>
					  </div>
					  <div class="panel-body">
					    <div class="form-group">
					    	<label for="no_hp">No HP / WhatsApp</label>
					    	<div class="input-group">
					    		<span class="input-group-addon"><i class="fa fa-whatsapp"></i></span>
					    		<input class="form-control" type="text" name="no_hp" value="<?= $no_hp ?>" />
					    	</div>
					    </div>
					    <div class="form-group">
					    	<label for="email">Email</label>
					    	<div class="input-group">
					    		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					    		<input class="form-control" type="email" name="email" value="<?= $email ?>" />
					    	</div>
					    </div>
					    <div class="form-group">
					    	<label for="facebook">Facebook</label>
					    	<div class="input-group">
					    		<span class="input-group-addon"><i class="fa fa-facebook"></i></span>
					    		<input class="form-control" type="text" name="facebook" value="<?= $facebook ?>" />
					    	</div>
					    </div>
					    <div class="form-group">
					    	<label for="line">Line</label>
					    	<div class="input-group">
					    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
					    		<input class="form-control" type="text" name="line" value="<?= $line ?>" />
					    	</div>
					    </div>
					    <div class="form-group">
					    	<label for="pin_bb">Pin BBM</label>
					    	<div class="input-group">
					    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
					    		<input class="form-control" type="text" name="pin_bb" value="<?= $pin_bb ?>" />
					    	</div>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-md-6">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><i class="fa fa-institution"></i> Riwayat Pendidikan</h3>
					    <span id="tambah_pendidikan" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-plus"></i> Tambah</span>
					  </div>
					  <div class="panel-body">
						<div id="pendidikan_wrapper" class="riwayat_pendidikan">
							<?php
								$jumlah_data_pendidikan = count($riwayat_pendidikan); 
								if (count($riwayat_pendidikan) > 0) {
									for ($i = 0; $i < count($riwayat_pendidikan); $i++) {
										echo '<div class="panel panel-default">
												<div class="panel-body">
													<div class="row">
										  				<div class="col-md-6">
													  		<label for="prestasi">Nama Sekolah</label>
													  		<input class="form-control" type="text" name="riwayat_pendidikan[' . $i . ']" value="'.$riwayat_pendidikan[$i].'" />
													  	</div>
													  	<div class="col-md-6">
													  		<label for="tahun">Tahun Lulus</label>
													  		<input class="form-control" type="text" name="tahun_pendidikan[' . $i . ']" value="'.$tahun_pendidikan[$i].'"/>
													  	</div>
										  			</div>
										  		</div>
										  	</div>';
									}
								} else {
									echo '<div class="panel panel-default">
												<div class="panel-body">
											<div class="row">
								  				<div class="col-md-6">
											  		<label for="prestasi">Nama Sekolah</label>
											  		<input class="form-control" type="text" name="riwayat_pendidikan[0]"/>
											  	</div>
											  	<div class="col-md-6">
											  		<label for="tahun">Tahun Lulus</label>
											  		<input class="form-control" type="text" name="tahun_pendidikan[0]"/>
											  	</div>
								  			</div>
								  		</div>
									</div>';
								}
							?>
						</div>
					  </div>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><i class="fa fa-users"></i> Riwayat Organisasi</h3>
					    <div id="tambah_organisasi" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-plus"></i> Tambah</div>
					  </div>
					  <div class="panel-body">
						<div id="organisasi_wrapper" class="riwayat_organisasi">
							<?php 
								$jumlah_data_organisasi = count($riwayat_organisasi); 
								if (count($riwayat_organisasi) > 0) {
									for ($i = 0; $i < count($riwayat_organisasi); $i++) {
										echo '<div class="panel panel-default">
												<div class="panel-body">
											<div class="row">
								  				<div class="col-md-4">
											  		<label for="organisasi">Nama Organisasi</label>
											  		<input class="form-control" type="text" name="riwayat_organisasi[' . $i . ']" value="'.$riwayat_organisasi[$i].'"/>
											  	</div>
											  	<div class="col-md-4">
											  		<label for="tahun">Tahun Organisasi</label>
											  		<input class="form-control" type="text" name="tahun_organisasi[' . $i . ']" value="'.$tahun_organisasi[$i].'"/>
											  	</div>
											  	<div class="col-md-4">
											  		<label for="jabatan">Jabatan</label>
											  		<input class="form-control" type="text" name="jabatan_organisasi[' . $i . ']" value="'.$jabatan_organisasi[$i].'"/>
											  	</div>
											  	</div>
											  	</div>
								  			</div>';
									}
								} else {
									echo '<div class="panel panel-default">
												<div class="panel-body">
										<div class="row">
								  				<div class="col-md-4">
											  		<label for="prestasi">Nama Prestasi</label>
											  		<input class="form-control" type="text" name="riwayat_pendidikan[0]"/>
											  	</div>
											  	<div class="col-md-4">
											  		<label for="instansi">Tahun Prestasi</label>
											  		<input class="form-control" type="text" name="tahun_prestasi[0]"/>
											  	</div>
											  	<div class="col-md-4">
											  		<label for="instansi">Instansi Pemberi</label>
											  		<input class="form-control" type="text" name="pemberi_prestasi[0]"/>
											  	</div>
											  	</div>
											  	</div>
								  			</div>';
								}
							?>
						</div>
					  </div>
					</div>
				</div>
					
				<div class="col-md-6">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><i class="fa fa-archive"></i> Riwayat Prestasi</h3>
					    <div id="tambah" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-plus"></i> Tambah</div>
					  </div>
					  <div class="panel-body">
						<div id="wrapper" class="riwayat_prestasi">
							<?php 
								$jumlah_data_prestasi = count($riwayat_prestasi); 
								if (count($riwayat_prestasi) > 0) {
									for ($i = 0; $i < count($riwayat_prestasi); $i++) {
										echo '<div class="panel panel-default">
												<div class="panel-body">
											<div class="row">
								  				<div class="col-md-4">
											  		<label for="prestasi">Nama Prestasi</label>
											  		<input class="form-control" type="text" name="riwayat_prestasi[' . $i . ']" value="'.$riwayat_prestasi[$i].'"/>
											  	</div>
											  	<div class="col-md-4">
											  		<label for="instansi">Tahun Prestasi</label>
											  		<input class="form-control" type="text" name="tahun_prestasi[' . $i . ']" value="'.$tahun_prestasi[$i].'"/>
											  	</div>
											  	<div class="col-md-4">
											  		<label for="instansi">Instansi Pemberi</label>
											  		<input class="form-control" type="text" name="pemberi_prestasi[' . $i . ']" value="'.$pemberi_prestasi[$i].'"/>
											  	</div>
											  	</div>
											  	</div>
								  			</div>';
									}
								} else {
									echo '<div class="panel panel-default">
												<div class="panel-body">
										<div class="row">
								  				<div class="col-md-4">
											  		<label for="prestasi">Nama Prestasi</label>
											  		<input class="form-control" type="text" name="riwayat_prestasi[0]"/>
											  	</div>
											  	<div class="col-md-4">
											  		<label for="instansi">Tahun Prestasi</label>
											  		<input class="form-control" type="text" name="tahun_prestasi[0]"/>
											  	</div>
											  	<div class="col-md-4">
											  		<label for="instansi">Instansi Pemberi</label>
											  		<input class="form-control" type="text" name="pemberi_prestasi[0]"/>
											  	</div>
											  	</div>
											  	</div>
								  			</div>';
								}
							?>
						</div>
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><i class="fa fa-institution"></i> Riwayat Pendidikan Nonformal</h3>
					    <span id="tambah_pendidikan_nonformal" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-plus"></i> Tambah</span>
					  </div>
					  <div class="panel-body">
						<div id="pendidikan_nonformal_wrapper" class="riwayat_pendidikan_nonformal">
							<?php
								$jumlah_data_pendidikan_nonformal = count($riwayat_pendidikan_nonformal); 
								if (count($riwayat_pendidikan_nonformal) > 0) {
									for ($i = 0; $i < count($riwayat_pendidikan_nonformal); $i++) {
										echo '<div class="panel panel-default">
												<div class="panel-body">
													<div class="row">
										  				<div class="col-md-6">
													  		<label for="prestasi">Nama Lembaga</label>
													  		<input class="form-control" type="text" name="riwayat_pendidikan_nonformal[' . $i . ']" value="'.$riwayat_pendidikan_nonformal[$i].'" />
													  	</div>
													  	<div class="col-md-6">
													  		<label for="tahun">Tahun Keanggotaan</label>
													  		<input class="form-control" type="text" name="tahun_pendidikan_nonformal[' . $i . ']" value="'.$tahun_pendidikan_nonformal[$i].'"/>
													  	</div>
										  			</div>
										  		</div>
										  	</div>';
									}
								} else {
									echo '<div class="panel panel-default">
												<div class="panel-body">
											<div class="row">
								  				<div class="col-md-6">
											  		<label for="prestasi">Nama Lembaga</label>
											  		<input class="form-control" type="text" name="riwayat_pendidikan_nonformal[0]"/>
											  	</div>
											  	<div class="col-md-6">
											  		<label for="tahun">Tahun Keanggotaan</label>
											  		<input class="form-control" type="text" name="tahun_pendidikan_nonformal[0]"/>
											  	</div>
								  			</div>
								  		</div>
									</div>';
								}
							?>
						</div>
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><i class="fa fa-comments"></i> Riwayat Keagamaan</h3>
					  </div>
					  <div class="panel-body">
					    <div class="form-group">
							<label for="keagamaan_pernah">Sudah pernah ikut kajian keislaman di sekolah?</label>
					    	<?php if ($keagamaan_pernah == "Ya"): ?>
					    		<label class="radio-inline">
						    		<input type="radio" name="keagamaan_pernah" value="Ya" checked>
						    		Ya
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_pernah" value="Tidak">
						    		Tidak
						    	</label>
						    <?php elseif ($keagamaan_pernah == "Tidak"): ?>
					    		<label class="radio-inline">
						    		<input type="radio" name="keagamaan_pernah" value="Ya">
						    		Ya
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_pernah" value="Tidak" checked>
						    		Tidak
						    	</label>
						    <?php else: ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_pernah" value="Ya">
						    		Ya
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_pernah" value="Tidak">
						    		Tidak
						    	</label>
					    	<?php endif;  ?>
						</div>
						<div class="form-group">
							<label for="keagamaan_kapan">Dimulai sejak kapan?</label>
					    	<?php if ($keagamaan_kapan == "Kelas 1"): ?>
					    		<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 1" checked>
						    		Kelas 1
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 2">
						    		Kelas 2
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 3">
						    		Kelas 3
						    	</label>
						    <?php elseif ($keagamaan_kapan == "Kelas 2"): ?>
					    		<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 1">
						    		Kelas 1
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 2" checked>
						    		Kelas 2
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 3">
						    		Kelas 3
						    	</label>
						    <?php elseif ($keagamaan_kapan == "Kelas 3"): ?>
					    		<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 1">
						    		Kelas 1
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 2">
						    		Kelas 2
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 3" checked>
						    		Kelas 3
						    	</label>
						    <?php else: ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 1">
						    		Kelas 1
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 2">
						    		Kelas 2
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kapan" value="Kelas 3">
						    		Kelas 3
						    	</label>
					    	<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="keagamaan_vakum">Pernah vakum berapa lama? (jika tidak, kosongkan)</label>
							<input class="form-control" type="text" name="keagamaan_vakum" value="<?= $keagamaan_vakum ?>" />
						</div>
						<div class="form-group">
							<label for="keagamaan_kajian">Frekuensi kajian yang diikuti?</label>
					    	<?php if ($keagamaan_kajian == "1 Minggu Sekali"): ?>
					    		<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Minggu Sekali" checked>
						    		1 Minggu Sekali
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Bulan Sekali">
						    		1 Bulan Sekali
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Tahun Sekali">
						    		1 Tahun Sekali
						    	</label>
						    <?php elseif ($keagamaan_kajian == "1 Bulan Sekali"): ?>
					    		<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Minggu Sekali">
						    		1 Minggu Sekali
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Bulan Sekali" checked>
						    		1 Bulan Sekali
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Tahun Sekali">
						    		1 Tahun Sekali
						    	</label>
						    <?php elseif ($keagamaan_kajian == "1 Tahun Sekali"): ?>
					    		<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Minggu Sekali">
						    		1 Minggu Sekali
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Bulan Sekali">
						    		1 Bulan Sekali
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Tahun Sekali" checked>
						    		1 Tahun Sekali
						    	</label>
						    <?php else: ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Minggu Sekali">
						    		1 Minggu Sekali
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Bulan Sekali">
						    		1 Bulan Sekali
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="keagamaan_kajian" value="1 Tahun Sekali">
						    		1 Tahun Sekali
						    	</label>
					    	<?php endif; ?>
					    	
						</div>
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><i class="fa fa-comments"></i> Panel Aspirasi</h3>
					  </div>
					  <div class="panel-body">
					    <div class="form-group">
					    	<div>
					    		<label for="isu">Apakah anda setuju dengan kuliah maksimal 5 tahun?</label>
					    	</div>
					    	<?php if ($isu == "Setuju"): ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="isu" value="Setuju" checked>
						    		Setuju
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="isu" value="Tidak Setuju">
						    		Tidak Setuju
						    	</label>
						    <?php elseif ($isu == "Tidak Setuju"): ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="isu" value="Setuju">
						    		Setuju
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="isu" value="Tidak Setuju" checked>
						    		Tidak Setuju
						    	</label>
						    <?php else: ?>
						    	<label class="radio-inline">
						    		<input type="radio" name="isu" value="Setuju">
						    		Setuju
						    	</label>
						    	<label class="radio-inline">
						    		<input type="radio" name="isu" value="Tidak Setuju">
						    		Tidak Setuju
						    	</label>
					    	<?php endif; ?>
					    	<br/>
					    	<br/>
					    	<i>nb: panel ini harus diisi ketika melengkapi data</i>
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<div>
				<center>
					<input class="btn btn-success" type="submit" name="update" value="Simpan Perubahan" />
				</center>
			</div>
		</form>
	</div>

	  <script type="text/javascript">
	  	$("#fakultas").on("change", function() {
  			var fakultas = $("#fakultas").val();

  			if (fakultas === 'Ilmu Komputer') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>' +
  			'<option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>' +
  			'<option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>' +
  			'<option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>' +
  			'<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>' +
  			'<option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>' +
  			'<option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>' +
  			'<option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>' +
  			'<option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>' +
  			'<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>' +
  			'<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>');
  			} else if (fakultas === 'Ekonomi') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Manajemen">Manajemen</option>' +
  			'<option value="Akuntansi">Akuntansi</option>' +
  			'<option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>' +
  			'<option value="Magister Manajemen">Magister Manajemen</option>');
  			} else if (fakultas === 'Pertanian') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Ilmu Tanah">Ilmu Tanah</option>' +
  			'<option value="Teknik Pertanian">Teknik Pertanian</option>' +
  			'<option value="Teknologi Hasil Perikanan">Teknologi Hasil Perikanan</option>' +
  			'<option value="Peternakan">Peternakan</option>' +
  			'<option value="Teknologi Hasil Pertanian">Teknologi Hasil Pertanian</option>' +
  			'<option value="Agroekoteknologi">Agroekoteknologi</option>' +
  			'<option value="Agribisnis">Agribisnis</option>' +
  			'<option value="Budidaya Perairan">Budidaya Perairan</option>');
  			} else if (fakultas === 'Kedokteran') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Teknik Gigi">Teknik Gigi</option>' +
  			'<option value="Kedokteran Gigi">Kedokteran Gigi</option>' +
  			'<option value="Ilmu Kesehatan Masyarakat">Ilmu Kesehatan Masyarakat</option>' +
  			'<option value="Pendidikan Dokter">Pendidikan Dokter</option>' +
  			'<option value="Psikologi">Psikologi</option>');
  			} else if (fakultas === 'Ilmu Sosial dan Ilmu Politik') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>' +
  			'<option value="Sosiologi">Sosiologi</option>' +
  			'<option value="Administrasi Negara">Administrasi Negara</option>');
  			} else if (fakultas === 'Hukum') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Ilmu Hukum">Ilmu Hukum</option>');
  			} else if (fakultas === 'Kesehatan Masyarakat') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Keselamatan dan Kesehatan Kerja">Keselamatan dan Kesehatan Kerja</option>');
  			} else if (fakultas === 'Matematika dan Ilmu Pengetahuan Alam') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Farmasi">Farmasi</option>' +
  			'<option value="Biologi">Biologi</option>' +
  			'<option value="Kimia">Kimia</option>' +
  			'<option value="Matematika">Matematika</option>' +
  			'<option value="Ilmu Kelautan">Ilmu Kelautan</option>' +
  			'<option value="Fisika">Fisika</option>');
  			} else if (fakultas === 'Keguruan dan Ilmu Pendidikan') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Pendidikan Jasmani dan Kesehatan">Pendidikan Jasmani dan Kesehatan</option>' +
  			'<option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>' +
  			'<option value="Pendidikan Fisika">Pendidikan Fisika</option>' +
  			'<option value="Pendidikan Kimia">Pendidikan Kimia</option>' +
  			'<option value="Pendidikan Sejarah">Pendidikan Sejarah</option>' +
  			'<option value="Pendidikan Matematika">Pendidikan Matematika</option>' +
  			'<option value="Pendidikan Teknik Mesin">Pendidikan Teknik Mesin</option>' +
  			'<option value="Pendidikan Anak Usia Dini">Pendidikan Anak Usia Dini</option>' +
  			'<option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>' +
  			'<option value="Bimbingan Konseling">Bimbingan Konseling</option>' +
  			'<option value="Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</option>' +
  			'<option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option>' +
  			'<option value="Pendidikan Bahasa, Sastra, dan Seni">Pendidikan Bahasa, Sastra, dan Seni</option>' +
  			'<option value="Pendidikan Biologi">Pendidikan Biologi</option>');
  			} else if (fakultas === 'Teknik') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Teknik Geologi">Teknik Geologi</option>' +
  			'<option value="Teknik Arsitektur">Teknik Arsitektur</option>' +
  			'<option value="Teknik Elektro">Teknik Elektro</option>' +
  			'<option value="Teknik Kimia">Teknik Kimia</option>' +
  			'<option value="Teknik Mesin">Teknik Mesin</option>' +
  			'<option value="Teknik Pertambangan">Teknik Pertambangan</option>' +
  			'<option value="Teknik Sipil">Teknik Sipil</option>');
  			} else {
  				$("#jurusan").html('<option>Not Available</option>');
  			}
  		});

		var i = <?= $jumlah_data_prestasi ?>;
		$("#tambah").click(function() {
			$("#wrapper").append('<div class="panel panel-default">' +
					'<div class="panel-body">' +
				'<div class="row">' +
  				'<div class="col-md-4">' +
			  		'<label for="prestasi">Nama Prestasi</label>' +
			  		'<input class="form-control" type="text" name="riwayat_prestasi[' + i + ']"/>' +
			  	'</div>' +
			  	'<div class="col-md-4">' +
			  		'<label for="tahun">Tahun Prestasi</label>' +
			  		'<input class="form-control" type="text" name="tahun_prestasi[' + i + ']" />' +
			  	'</div>' +
			  	'<div class="col-md-4">' +
			  		'<label for="instansi">Instansi Pemberi</label>' +
			  		'<input class="form-control" type="text" name="pemberi_prestasi[' + i + ']"/>' +
			  	'</div>' +
  			'</div>' +
  			'</div>' +
  			'</div>');
			i++;
		});

		var j = <?= $jumlah_data_pendidikan ?>;
		$("#tambah_pendidikan").click(function() {
			$("#pendidikan_wrapper").append('<div class="panel panel-default">' +
					'<div class="panel-body">' +'<div class="row">' +
  				'<div class="col-md-6">' +
			  		'<label for="prestasi">Nama Sekolah</label>' +
			  		'<input class="form-control" type="text" name="riwayat_pendidikan[' + j + ']"/>' +
			  	'</div>' +
			  	'<div class="col-md-6">' +
			  		'<label for="tahun">Tahun Lulus</label>' +
			  		'<input class="form-control" type="text" name="tahun_pendidikan[' + j + ']" />' +
			  	'</div>' +
			 '</div>' +
  			'</div>' +
  			'</div>');
			j++;
		});

		var k = <?= $jumlah_data_organisasi ?>;
		$("#tambah_organisasi").click(function() {
			$("#organisasi_wrapper").append('<div class="panel panel-default">' +
					'<div class="panel-body">' +
				'<div class="row">' +
  				'<div class="col-md-4">' +
			  		'<label for="organisasi">Nama Organisasi</label>' +
			  		'<input class="form-control" type="text" name="riwayat_organisasi[' + k + ']"/>' +
			  	'</div>' +
			  	'<div class="col-md-4">' +
			  		'<label for="tahun">Tahun Organisasi</label>' +
			  		'<input class="form-control" type="text" name="tahun_organisasi[' + k + ']" />' +
			  	'</div>' +
			  	'<div class="col-md-4">' +
			  		'<label for="jabatan">Jabatan</label>' +
			  		'<input class="form-control" type="text" name="jabatan_organisasi[' + k + ']"/>' +
			  	'</div>' +
  			'</div>' +
  			'</div>' +
  			'</div>');
			k++;
		});

		var l = <?= $jumlah_data_pendidikan_nonformal ?>;
		$("#tambah_pendidikan_nonformal").click(function() {
			$("#pendidikan_nonformal_wrapper").append('<div class="panel panel-default">' +
				'<div class="panel-body">' +
					'<div class="row">' +
		  				'<div class="col-md-6">' +
					  		'<label for="prestasi">Nama Lembaga</label>' +
					  		'<input class="form-control" type="text" name="riwayat_pendidikan_nonformal[' + l + ']" />' +
					  	'</div>' +
					  	'<div class="col-md-6">' +
					  		'<label for="tahun">Tahun Keanggotaan</label>' +
					  		'<input class="form-control" type="text" name="tahun_pendidikan_nonformal[' + l + ']" />' +
					  	'</div>' +
		  			'</div>' +
		  		'</div>' +
		  	'</div>');
			l++;
		});
	  </script>

	  <?php include "template/footer.php"; ?>
</body>
</html>
<?php 
	unset($_SESSION['status']);
?>