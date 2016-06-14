<?php
	include '../config/koneksi.php';
	$angkot = new Angkot($koneksi);

	$nama = $_POST['nama'];
	$lokasi = $_POST['lokasi'];
	$biaya = $_POST['biaya'];
	$jenis = $_POST['jenis'];
	$id = $_POST['id'];

	//echo "$kode , $nomor , $warna , $trayek , $id <br>";
	$update_wisata = $wisata->update($nama,$lokasi,$biaya,$jenis,$id);
?>