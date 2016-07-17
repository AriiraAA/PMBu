<?php
	session_start();  
	if (empty($_GET['nim']) || !isset($_SESSION['role'])) {
		header("Location: index.php");
		exit;
	}

	require_once "connect.php";
	$query = mysqli_query($connection, "SELECT * FROM maba WHERE nim='".$_GET['nim']."'");
	while ($row = mysqli_fetch_array($query)) {
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
?>

<?php include "template/header.php"; ?>

<body>
	<script src="https://use.fontawesome.com/b24094c187.js"></script>
	<?php include "template/navbar.php"; ?>

	<div class="container">
		<center style="margin-top: 6%">
			<h1>Data Mahasiswa Baru Universitas Sriwijaya</h1>
		</center>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Data Pribadi</h3>
				  </div>
				  <div class="panel-body">
				    <table class="table">
				    	<tr>
				    		<td><b>Nama</b></td>
				    		<td><?= $nama ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>NIM</b></td>
				    		<td><?= $nim ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Fakultas</b></td>
				    		<td><?= $fakultas ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Jurusan / Prodi</b></td>
				    		<td><?= $jurusan ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Jenis Kelamin</b></td>
				    		<td><?= $jenis_kelamin ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Golongan Darah</b></td>
				    		<td><?= $golongan_darah ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Riwayat Penyakit</b></td>
				    		<td><?= $riwayat_penyakit ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>UKT</b></td>
				    		<td><?= 'Rp. ' . number_format( $ukt, 0 , '' , '.' ) . ',-' ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Agama</b></td>
				    		<td><?= $agama ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Tempat Lahir</b></td>
				    		<td><?= $tempat_lahir ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Tanggal Lahir</b></td>
				    		<td><?= $tanggal_lahir ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Alamat Asal</b></td>
				    		<td><?= $alamat_asal ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Alamat Sekarang</b></td>
				    		<td><?= $alamat_sekarang ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Asal Daerah</b></td>
				    		<td><?= $asal_daerah ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Hobi</b></td>
				    		<td><?= $hobi ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Skill</b></td>
				    		<td><?= $skill ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Cita-cita</b></td>
				    		<td><?= $cita_cita ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Motto</b></td>
				    		<td><?= $motto ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Tokoh Idola</b></td>
				    		<td><?= $tokoh_idola ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Bacaan Favorit</b></td>
				    		<td><?= $bacaan_favorit ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Blog</b></td>
				    		<td><?= $blog ?></td>
				    	</tr>
				    </table>
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
					    <table class="table">
					    	<tr>
					    		<td><b>Nama Ayah</b></td>
					    		<td><?= $nama_ayah ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Alamat Ayah</b></td>
					    		<td><?= $alamat_ayah ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Pekerjaan Ayah</b></td>
					    		<td><?= $pekerjaan_ayah ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Penghasilan Ayah</b></td>
					    		<td><?= 'Rp. ' . number_format( $penghasilan_ayah, 0 , '' , '.' ) . ',-' ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>No HP Ayah / Wali</b></td>
					    		<td><?= $no_hp_ayah ?></td>
					    	</tr>
					    </table>
					  </div>
					</div>
					<div class="panel panel-info">
					  <div class="panel-heading">
					    <h3 class="panel-title">Data Ibu</h3>
					  </div>
					  <div class="panel-body">
					    <table class="table">
					    	<tr>
					    		<td><b>Nama Ibu</b></td>
					    		<td><?= $nama_ibu ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Alamat Ibu</b></td>
					    		<td><?= $alamat_ibu ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Pekerjaan Ibu</b></td>
					    		<td><?= $pekerjaan_ibu ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Penghasilan Ibu</b></td>
					    		<td><?= 'Rp. ' . number_format($penghasilan_ibu, 0 , '' , '.' ) . ',-' ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>No HP Ibu</b></td>
					    		<td><?= $no_hp_ibu ?></td>
					    	</tr>
					    </table>
					  </div>
					</div>
					<div class="panel panel-info">
					  <div class="panel-heading">
					    <h3 class="panel-title">Data Wali</h3>
					  </div>
					  <div class="panel-body">
					    <table class="table">
					    	<tr>
					    		<td><b>Nama Wali</b></td>
					    		<td><?= $nama_wali ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Alamat Wali</b></td>
					    		<td><?= $alamat_wali ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Pekerjaan Wali</b></td>
					    		<td><?= $pekerjaan_wali ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Penghasilan Wali</b></td>
					    		<td><?= 'Rp. ' . number_format($penghasilan_wali, 0 , '' , '.' ) . ',-' ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>No HP Wali</b></td>
					    		<td><?= $no_hp_wali ?></td>
					    	</tr>
					    </table>
					  </div>
					</div>
					<table class="table">
						<tr>
							<td><b>Anak-ke</b></td>
							<td><?php if (isset($anak_ke[0])) echo $anak_ke[0]; ?> dari <?php if (isset($anak_ke[1])) echo $anak_ke[1]; ?> bersaudara</td>
						</tr>
						<tr>
							<td><b>Jumlah Tanggungan</b></td>
							<td><?= $jumlah_tanggungan ?></td>
						</tr>
						<tr>
							<td><b>Kepemilikan Rumah</b></td>
							<td><?= $kepemilikan_rumah ?></td>
						</tr>
					</table>
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
				    <table class="table">
				    	<tr>
				    		<td><b>No HP / WhatsApp</b></td>
				    		<td><?= $no_hp ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Email</b></td>
				    		<td><?= $email ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Facebook</b></td>
				    		<td><?= $facebook ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Line</b></td>
				    		<td><?= $line ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Pin BBM</b></td>
				    		<td><?= $pin_bb ?></td>
				    	</tr>
				    </table>
				  </div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-institution"></i> Riwayat Pendidikan</h3>
				  </div>
				  <div class="panel-body">
				  	<table class="table">
				  		<thead>
				  			<th>Nama Sekolah</th>
				  			<th>Tahun Lulus</th>
				  		</thead>
				  		<tbody>
				  			<?php
						    	$i = 0; 
						    	foreach ($riwayat_pendidikan as $pend) {
						    		echo '<tr>
						    				<td>'.$riwayat_pendidikan[$i].'</td>
						    				<td>'.$tahun_pendidikan[$i++].'</td>
						    			</tr>';
						    	}
						    ?>
				  		</tbody>
				  	</table>
				  </div>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-users"></i> Riwayat Organisasi</h3>
				  </div>
				  <div class="panel-body">
				    <table class="table">
				  		<thead>
				  			<th>Nama Organisasi</th>
				  			<th>Jabatan</th>
				  			<th>Tahun Kepengurusan</th>
				  		</thead>
				  		<tbody>
				  			<?php
						    	$i = 0; 
						    	foreach ($riwayat_organisasi as $org) {
						    		echo '<tr>
						    				<td>'.$riwayat_organisasi[$i].'</td>
						    				<td>'.$jabatan_organisasi[$i].'</td>
						    				<td>'.$tahun_organisasi[$i++].'</td>
						    			</tr>';
						    	}
						    ?>
				  		</tbody>
				  	</table>
				  </div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-archive"></i> Riwayat Prestasi</h3>
				  </div>
				  <div class="panel-body">
				    <table class="table">
				  		<thead>
				  			<th>Nama Prestasi</th>
				  			<th>Tingkat</th>
				  			<th>Instansi Pemberi</th>
				  			<th>Tahun</th>
				  		</thead>
				  		<tbody>
				  			<?php
						    	$i = 0; 
						    	foreach ($riwayat_prestasi as $pres) {
						    		echo '<tr>
						    				<td>'.$riwayat_prestasi[$i].'</td>
						    				<td>'.$tingkat_prestasi[$i].'</td>
						    				<td>'.$pemberi_prestasi[$i].'</td>
						    				<td>'.$tahun_prestasi[$i++].'</td>
						    			</tr>';
						    	}
						    ?>
				  		</tbody>
				  	</table>
				  </div>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-institution"></i> Riwayat Keagamaan</h3>
				  </div>
				  <div class="panel-body">
				  	<table class="table">
				  		<tbody>
				  			<tr>
				  				<td><b>Sudah pernah ikut kajian keislaman di sekolah?</b></td>
				  				<td><?= $keagamaan_pernah ?></td>
				  			</tr>
				  			<tr>
				  				<td><b>Dimulai sejak kapan?</b></td>
				  				<td><?= $keagamaan_kapan ?></td>
				  			</tr>
				  			<tr>
				  				<td><b>Pernah vakum berapa lama?</b></td>
				  				<td><?= $keagamaan_vakum ?></td>
				  			</tr>
				  			<tr>
				  				<td><b>Frekuensi kajian yang diikuti?</b></td>
				  				<td><?= $keagamaan_kajian ?></td>
				  			</tr>
				  		</tbody>
				  	</table>
				  </div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-institution"></i> Riwayat Pendidikan Nonformal</h3>
				  </div>
				  <div class="panel-body">
				  	<table class="table">
				  		<thead>
				  			<th>Nama Lembaga</th>
				  			<th>Tahun Keanggotaan</th>
				  		</thead>
				  		<tbody>
				  			<?php
						    	$i = 0; 
						    	foreach ($riwayat_pendidikan_nonformal as $pend) {
						    		echo '<tr>
						    				<td>'.$riwayat_pendidikan_nonformal[$i].'</td>
						    				<td>'.$tahun_pendidikan_nonformal[$i++].'</td>
						    			</tr>';
						    	}
						    ?>
				  		</tbody>
				  	</table>
				  </div>
				</div>	
			</div>
		</div>
	</div>
	<center>
		<button class="btn btn-danger" onclick="window.history.back();"><i class="glyphicon glyphicon-arrow-left"></i> Back</button>
	</center>


	<?php include "template/footer.php" ?>
</body>
</html>