<?php 
	ini_set('memory_limit','16M');
	if (!isset($_GET['fakultas'])) {
		header("Location: admin.php");
		exit;
	}

	include "mpdf/mpdf60/mpdf.php";
	require_once "connect.php";

	$mpdf 		= new mPDF();
	$filename 	= $_GET['fakultas'] . " - Data Mahasiswa Baru Universitas Sriwijaya.pdf";
	//$mpdf->debug = true;
	if ($_GET['fakultas'] == "Super Admin") {
		$sql = "SELECT * FROM maba LIMIT 40";
		$html = "<h1>Data Mahasiswa Baru Universitas Sriwijaya 2016</h1><table border='1'>
				<thead>
					<th>No</th>
					<th>Nama</th>
					<th>NIM</th>
					<th>Jurusan</th>
					<th>No HP</th>
				</thead>
				<tbody>";
	} else {
		$sql = "SELECT * FROM maba WHERE fakultas='".$_GET['fakultas']."'";
		$html = "<h1>Data Mahasiswa Baru Fakultas ".$_GET['fakultas']." 2016</h1><table border='1'>
				<thead>
					<th>No</th>
					<th>Nama</th>
					<th>NIM</th>
					<th>Jurusan</th>
					<th>No HP</th>
				</thead>
				<tbody>";
	}

	$query = mysqli_query($connection, $sql);

	$i = 0;

	while ($row = mysqli_fetch_array($query)) {
		$html .= "<tr>
					<td>".++$i."</td>
					<td>".$row['nama']."</td>
					<td>".$row['nim']."</td>
					<td>".$row['jurusan']."</td>
					<td>".$row['no_hp']."</td>
				</tr>";
	}

	$html .= "</tbody></table>";
	
	$mpdf->WriteHTML($html);
	$mpdf->Output($filename, "D");
	header("Location: admin.php");
	exit;
?>