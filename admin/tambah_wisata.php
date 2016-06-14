<?php
	include '../config/koneksi.php';
	//$angkot = new Angkot($koneksi);
	$wisata = new wisata($koneksi);

	$nama = $_POST['nama'];
	$lokasi = $_POST['lokasi'];
	$biaya = $_POST['biaya'];
	$jenis = $_POST['jenis'];

	$tambah_wisata = $wisata->tambah($nama ,$lokasi, $biaya, $jenis);
?>
<a href="dashboard.php">Lihat Hasil</a>