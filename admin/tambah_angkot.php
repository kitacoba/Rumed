<?php
	include '../config/koneksi.php';
	$angkot = new Angkot($koneksi);

	$kode = $_POST['kode'];
	$nomor = $_POST['nomor'];
	$warna = $_POST['warna'];
	$trayek = $_POST['trayek'];

	$tambah_angkot = $angkot->tambah($kode,$nomor,$trayek,$warna);
?>
<a href="dashboard.php">Lihat Hasil</a>