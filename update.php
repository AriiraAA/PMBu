<?php
	session_start(); 
	require_once "connect.php";

	if (!isset($_POST['update'])) {
		header("Location: edit2.php");
		$_SESSION['status'] = "Failed";
		exit;
	}

	if (isset($_SESSION['nim'])) {
		if (!empty($_POST['nim'])) {
			$nim = $_POST['nim'];
		} else {
			$nim = '';
		}

		if (!empty($_POST['password'])) {
			$password = $_POST['password'];
		} else {
			$password = '';
		}

		if (!empty($_POST['nama'])) {
			$nama = $_POST['nama'];
		} else {
			$nama = '';
		}

		if (!empty($_POST['jenis_kelamin'])) {
			$jenis_kelamin = $_POST['jenis_kelamin'];
		} else {
			$jenis_kelamin = '';
		}

		if (!empty($_POST['golongan_darah'])) {
			$golongan_darah = $_POST['golongan_darah'];
		} else {
			$golongan_darah = '';
		}

		if (!empty($_POST['riwayat_penyakit'])) {
			$riwayat_penyakit = $_POST['riwayat_penyakit'];
		} else {
			$riwayat_penyakit = '';
		}

		if (!empty($_POST['fakultas'])) {
			$fakultas = $_POST['fakultas'];
		} else {
			$fakultas = '';
		}

		if (!empty($_POST['jurusan'])) {
			$jurusan = $_POST['jurusan'];
		} else {
			$jurusan = '';
		}

		if (!empty($_POST['ukt'])) {
			$ukt = $_POST['ukt'];
		} else {
			$ukt = '';
		}

		if (!empty($_POST['agama'])) {
			$agama = $_POST['agama'];
		} else {
			$agama = '';
		}

		if (!empty($_POST['tempat_lahir'])) {
			$tempat_lahir = $_POST['tempat_lahir'];
		} else {
			$tempat_lahir = '';
		}

		if (!empty($_POST['tanggal_lahir'])) {
			$tanggal_lahir = $_POST['tanggal_lahir'];
		} else {
			$tanggal_lahir = '';
		}

		if (!empty($_POST['alamat_asal'])) {
			$alamat_asal = $_POST['alamat_asal'];
		} else {
			$alamat_asal = '';
		}

		if (!empty($_POST['alamat_sekarang'])) {
			$alamat_sekarang = $_POST['alamat_sekarang'];
		} else {
			$alamat_sekarang = '';
		}

		if (!empty($_POST['asal_daerah'])) {
			$asal_daerah = $_POST['asal_daerah'];
		} else {
			$asal_daerah = '';
		}

		if (!empty($_POST['hobi'])) {
			$hobi = $_POST['hobi'];
		} else {
			$hobi = '';
		}

		if (!empty($_POST['cita_cita'])) {
			$cita_cita = $_POST['cita_cita'];
		} else {
			$cita_cita = '';
		}

		if (!empty($_POST['motto'])) {
			$motto = $_POST['motto'];
		} else {
			$motto = '';
		}

		if (!empty($_POST['skill'])) {
			$skill = $_POST['skill'];
		} else {
			$skill = '';
		}

		if (!empty($_POST['tokoh_idola'])) {
			$tokoh_idola = $_POST['tokoh_idola'];
		} else {
			$tokoh_idola = '';
		}

		if (!empty($_POST['bacaan_favorit'])) {
			$bacaan_favorit = $_POST['bacaan_favorit'];
		} else {
			$bacaan_favorit = '';
		}

		if (!empty($_POST['blog'])) {
			$blog = $_POST['blog'];
		} else {
			$blog = '';
		}

		if (!empty($_POST['nama_ayah'])) {
			$nama_ayah = $_POST['nama_ayah'];
		} else {
			$nama_ayah = '';
		}

		if (!empty($_POST['alamat_ayah'])) {
			$alamat_ayah = $_POST['alamat_ayah'];
		} else {
			$alamat_ayah = '';
		}

		if (!empty($_POST['pekerjaan_ayah'])) {
			$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
		} else {
			$pekerjaan_ayah = '';
		}

		if (!empty($_POST['penghasilan_ayah'])) {
			$penghasilan_ayah = $_POST['penghasilan_ayah'];
		} else {
			$penghasilan_ayah = '';
		}

		if (!empty($_POST['no_hp_ayah'])) {
			$no_hp_ayah = $_POST['no_hp_ayah'];
		} else {
			$no_hp_ayah = '';
		}

		if (!empty($_POST['nama_ibu'])) {
			$nama_ibu = $_POST['nama_ibu'];
		} else {
			$nama_ibu = '';
		}

		if (!empty($_POST['alamat_ibu'])) {
			$alamat_ibu = $_POST['alamat_ibu'];
		} else {
			$alamat_ibu = '';
		}

		if (!empty($_POST['pekerjaan_ibu'])) {
			$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
		} else {
			$pekerjaan_ibu = '';
		}

		if (!empty($_POST['penghasilan_ibu'])) {
			$penghasilan_ibu = $_POST['penghasilan_ibu'];
		} else {
			$penghasilan_ibu = '';
		}

		if (!empty($_POST['no_hp_ibu'])) {
			$no_hp_ibu = $_POST['no_hp_ibu'];
		} else {
			$no_hp_ibu = '';
		}

		if (!empty($_POST['nama_wali'])) {
			$nama_wali = $_POST['nama_wali'];
		} else {
			$nama_wali = '';
		}

		if (!empty($_POST['alamat_wali'])) {
			$alamat_wali = $_POST['alamat_wali'];
		} else {
			$alamat_wali = '';
		}

		if (!empty($_POST['pekerjaan_wali'])) {
			$pekerjaan_wali = $_POST['pekerjaan_wali'];
		} else {
			$pekerjaan_wali = '';
		}

		if (!empty($_POST['penghasilan_wali'])) {
			$penghasilan_wali = $_POST['penghasilan_wali'];
		} else {
			$penghasilan_wali = '';
		}

		if (!empty($_POST['no_hp_wali'])) {
			$no_hp_wali = $_POST['no_hp_wali'];
		} else {
			$no_hp_wali = '';
		}

		if (!empty($_POST['anak_ke']) && !empty($_POST['saudara'])) {
			$anak_ke = array($_POST['anak_ke'], $_POST['saudara']);
			$anak_ke = implode(',', $anak_ke);
		} else {
			$anak_ke = '';
		}

		if (!empty($_POST['jumlah_tanggungan'])) {
			$jumlah_tanggungan = $_POST['jumlah_tanggungan'];
		} else {
			$jumlah_tanggungan = '';
		}

		if (!empty($_POST['kepemilikan_rumah'])) {
			$kepemilikan_rumah = $_POST['kepemilikan_rumah'];
		} else {
			$kepemilikan_rumah = '';
		}

		if (!empty($_POST['no_hp'])) {
			$no_hp = $_POST['no_hp'];
		} else {
			$no_hp = '';
		}

		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
		} else {
			$email = '';
		}

		if (!empty($_POST['facebook'])) {
			$facebook = $_POST['facebook'];
		} else {
			$facebook = '';
		}

		if (!empty($_POST['line'])) {
			$line = $_POST['line'];
		} else {
			$line = '';
		}

		if (!empty($_POST['pin_bb'])) {
			$pin_bb = $_POST['pin_bb'];
		} else {
			$pin_bb = '';
		}

		if (!empty($_POST['keagamaan_pernah'])) {
			$keagamaan_pernah = $_POST['keagamaan_pernah'];
		} else {
			$keagamaan_pernah = '';
		}

		if (!empty($_POST['keagamaan_kapan'])) {
			$keagamaan_kapan = $_POST['keagamaan_kapan'];
		} else {
			$keagamaan_kapan = '';
		}

		if (!empty($_POST['keagamaan_vakum'])) {
			$keagamaan_vakum = $_POST['keagamaan_vakum'];
		} else {
			$keagamaan_vakum = 0;
		}

		if (!empty($_POST['keagamaan_kajian'])) {
			$keagamaan_kajian = $_POST['keagamaan_kajian'];
		} else {
			$keagamaan_kajian = '';
		}


		if (isset($_POST['riwayat_pendidikan'])) {
			$riwayat_pendidikan = $_POST['riwayat_pendidikan'];
			$riwayat_pendidikan = implode(",", $riwayat_pendidikan);
		} else {
			$riwayat_pendidikan = array();
			$riwayat_pendidikan = implode(",", $riwayat_pendidikan);
		}

		if (isset($_POST['tahun_pendidikan'])) {
			$tahun_pendidikan = $_POST['tahun_pendidikan'];
			$tahun_pendidikan = implode(",", $tahun_pendidikan);
		} else {
			$tahun_pendidikan = array();
			$tahun_pendidikan = implode(",", $tahun_pendidikan);
		}

		if (isset($_POST['riwayat_pendidikan_nonformal'])) {
			$riwayat_pendidikan_nonformal = $_POST['riwayat_pendidikan_nonformal'];
			$riwayat_pendidikan_nonformal = implode(",", $riwayat_pendidikan_nonformal);
		} else {
			$riwayat_pendidikan_nonformal = array();
			$riwayat_pendidikan_nonformal = implode(",", $riwayat_pendidikan_nonformal);
		}

		if (isset($_POST['tahun_pendidikan_nonformal'])) {
			$tahun_pendidikan_nonformal = $_POST['tahun_pendidikan_nonformal'];
			$tahun_pendidikan_nonformal = implode(",", $tahun_pendidikan_nonformal);
		} else {
			$tahun_pendidikan_nonformal = array();
			$tahun_pendidikan_nonformal = implode(",", $tahun_pendidikan_nonformal);
		}

		if (isset($_POST['riwayat_prestasi'])) {
			$riwayat_prestasi = $_POST['riwayat_prestasi'];
			$riwayat_prestasi = implode(",", $riwayat_prestasi);
		} else {
			$riwayat_prestasi = array();
			$riwayat_prestasi = implode(",", $riwayat_prestasi);
		}

		if (isset($_POST['tingkat_prestasi'])) {
			$tingkat_prestasi = $_POST['tingkat_prestasi'];
			$tingkat_prestasi = implode(",", $tingkat_prestasi);
		} else {
			$tingkat_prestasi = array();
			$tingkat_prestasi = implode(",", $tingkat_prestasi);
		}			

		if (isset($_POST['pemberi_prestasi'])) {
			$pemberi_prestasi = $_POST['pemberi_prestasi'];
			$pemberi_prestasi = implode(",", $pemberi_prestasi);
		} else {
			$pemberi_prestasi = array();
			$pemberi_prestasi = implode(",", $pemberi_prestasi);
		}

		if (isset($_POST['tahun_prestasi'])) {
			$tahun_prestasi = $_POST['tahun_prestasi'];
			$tahun_prestasi = implode(",", $tahun_prestasi);
		} else {
			$tahun_prestasi = array();
			$tahun_prestasi = implode(",", $tahun_prestasi);
		}

		if (isset($_POST['riwayat_organisasi'])) {
			$riwayat_organisasi = $_POST['riwayat_organisasi'];
			$riwayat_organisasi = implode(",", $riwayat_organisasi);
		} else {
			$riwayat_organisasi = array();
			$riwayat_organisasi = implode(",", $riwayat_organisasi);
		}		

		if (isset($_POST['jabatan_organisasi'])) {
			$jabatan_organisasi = $_POST['jabatan_organisasi'];
			$jabatan_organisasi = implode(",", $jabatan_organisasi);
		} else {
			$jabatan_organisasi = array();
			$jabatan_organisasi = implode(",", $jabatan_organisasi);
		}

		if (isset($_POST['tahun_organisasi'])) {
			$tahun_organisasi = $_POST['tahun_organisasi'];
			$tahun_organisasi = implode(",", $tahun_organisasi);
		} else {
			$tahun_organisasi = array();
			$tahun_organisasi = implode(",", $tahun_organisasi);
		}

		if (isset($_POST['isu'])) {
			$isu = $_POST['isu'];
		} else {
			header("Location: edit2.php");
			exit;
		}
/* keagamaan_pernah='%s', keagamaan_kapan='%s', keagamaan_vakum='%s', keagamaan_kajian='%s', */
		$sql = sprintf("UPDATE maba SET nim='%s', password='%s', nama='%s', fakultas='%s', jurusan='%s', ukt='%s', agama='%s', tempat_lahir='%s', tanggal_lahir='%s', alamat_asal='%s', alamat_sekarang='%s', no_hp='%s', facebook='%s', riwayat_pendidikan='%s', tahun_pendidikan='%s', riwayat_prestasi='%s', tahun_prestasi='%s', pemberi_prestasi='%s', isu='%s', asal_daerah='%s', skill='%s', nama_ayah='%s', alamat_ayah='%s', pekerjaan_ayah='%s', penghasilan_ayah='%s', no_hp_ayah='%s', nama_ibu='%s', alamat_ibu='%s', pekerjaan_ibu='%s', penghasilan_ibu='%s', no_hp_ibu='%s', anak_ke='%s', jumlah_tanggungan='%s', email='%s', riwayat_organisasi='%s', tahun_organisasi='%s', jabatan_organisasi='%s', jenis_kelamin='%s', golongan_darah='%s', riwayat_penyakit='%s', hobi='%s', cita_cita='%s', motto='%s', tokoh_idola='%s', bacaan_favorit='%s', blog='%s', kepemilikan_rumah='%s', line='%s', pin_bb='%s', tingkat_prestasi='%s', riwayat_pendidikan_nonformal='%s', tahun_pendidikan_nonformal='%s', nama_wali='%s', alamat_wali='%s', pekerjaan_wali='%s', penghasilan_wali='%s', no_hp_wali='%s', keagamaan_pernah='%s', keagamaan_kapan='%s', keagamaan_vakum='%s', keagamaan_kajian='%s' WHERE nim='%s'", mysqli_real_escape_string($connection, $nim), mysqli_real_escape_string($connection, $password), mysqli_real_escape_string($connection, $nama), mysqli_real_escape_string($connection, $fakultas), mysqli_real_escape_string($connection, $jurusan), mysqli_real_escape_string($connection, $ukt), mysqli_real_escape_string($connection, $agama), mysqli_real_escape_string($connection, $tempat_lahir), mysqli_real_escape_string($connection, $tanggal_lahir), mysqli_real_escape_string($connection, $alamat_asal), mysqli_real_escape_string($connection, $alamat_sekarang), mysqli_real_escape_string($connection, $no_hp), mysqli_real_escape_string($connection, $facebook), mysqli_real_escape_string($connection, $riwayat_pendidikan), mysqli_real_escape_string($connection, $tahun_pendidikan), mysqli_real_escape_string($connection, $riwayat_prestasi), mysqli_real_escape_string($connection, $tahun_prestasi), mysqli_real_escape_string($connection, $pemberi_prestasi), mysqli_real_escape_string($connection, $isu), mysqli_real_escape_string($connection, $asal_daerah), mysqli_real_escape_string($connection, $skill), mysqli_real_escape_string($connection, $nama_ayah), mysqli_real_escape_string($connection, $alamat_ayah), mysqli_real_escape_string($connection, $pekerjaan_ayah), mysqli_real_escape_string($connection, $penghasilan_ayah), mysqli_real_escape_string($connection, $no_hp_ayah), mysqli_real_escape_string($connection, $nama_ibu), mysqli_real_escape_string($connection, $alamat_ibu), mysqli_real_escape_string($connection, $pekerjaan_ibu), mysqli_real_escape_string($connection, $penghasilan_ibu), mysqli_real_escape_string($connection, $no_hp_ibu), mysqli_real_escape_string($connection, $anak_ke), mysqli_real_escape_string($connection, $jumlah_tanggungan), mysqli_real_escape_string($connection, $email), mysqli_real_escape_string($connection, $riwayat_organisasi), mysqli_real_escape_string($connection, $tahun_organisasi), mysqli_real_escape_string($connection, $jabatan_organisasi), mysqli_real_escape_string($connection, $jenis_kelamin), mysqli_real_escape_string($connection, $golongan_darah), mysqli_real_escape_string($connection, $riwayat_penyakit), mysqli_real_escape_string($connection, $hobi), mysqli_real_escape_string($connection, $cita_cita), mysqli_real_escape_string($connection, $motto), mysqli_real_escape_string($connection, $tokoh_idola), mysqli_real_escape_string($connection, $bacaan_favorit), mysqli_real_escape_string($connection, $blog), mysqli_real_escape_string($connection, $kepemilikan_rumah), mysqli_real_escape_string($connection, $line), mysqli_real_escape_string($connection, $pin_bb), mysqli_real_escape_string($connection, $tingkat_prestasi), mysqli_real_escape_string($connection, $riwayat_pendidikan_nonformal), mysqli_real_escape_string($connection, $tahun_pendidikan_nonformal), mysqli_real_escape_string($connection, $nama_wali), mysqli_real_escape_string($connection, $alamat_wali), mysqli_real_escape_string($connection, $pekerjaan_wali), mysqli_real_escape_string($connection, $penghasilan_wali), mysqli_real_escape_string($connection, $no_hp_wali), mysqli_real_escape_string($connection, $keagamaan_pernah), mysqli_real_escape_string($connection, $keagamaan_kapan), mysqli_real_escape_string($connection, $keagamaan_vakum), mysqli_real_escape_string($connection, $keagamaan_kajian), mysqli_real_escape_string($connection, $_SESSION['nim']));
		/* mysqli_real_escape_string($connection, $keagamaan_pernah), mysqli_real_escape_string($connection, $keagamaan_kapan), mysqli_real_escape_string($connection, $keagamaan_vakum), mysqli_real_escape_string($connection, $keagamaan_kajian), */

		mysqli_query($connection, $sql) or die(mysql_error());

		$_SESSION['status'] = "Success";
	}

	header("Location: edit2.php");

?>