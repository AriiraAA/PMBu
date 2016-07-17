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
  				'<div class="col-md-3">' +
			  		'<label for="prestasi">Nama Prestasi</label>' +
			  		'<input class="form-control" type="text" name="riwayat_prestasi[' + i + ']"/>' +
			  	'</div>' +
			  	'<div class="col-md-3">' +
			  		'<label for="tingkat">Tingkat Prestasi</label>' +
			  		'<input class="form-control" type="text" name="tingkat_prestasi[' + i + ']" />' +
			  	'</div>' +
			  	'<div class="col-md-3">' +
			  		'<label for="tahun">Tahun Prestasi</label>' +
			  		'<input class="form-control" type="text" name="tahun_prestasi[' + i + ']" />' +
			  	'</div>' +
			  	'<div class="col-md-3">' +
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
			  		'<input class="form-control" type="text" name="pendidikan_sekolah[' + j + ']"/>' +
			  	'</div>' +
			  	'<div class="col-md-6">' +
			  		'<label for="tahun">Tahun Lulus</label>' +
			  		'<input class="form-control" type="text" name="pendidikan_tahun[' + j + ']" />' +
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