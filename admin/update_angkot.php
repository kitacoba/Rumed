<?php
	include '../config/koneksi.php';
	$angkot = new Angkot($koneksi);

	$kode = $_POST['kode'];
	$nomor = $_POST['nomor'];
	$warna = $_POST['warna'];
	$trayek = $_POST['trayek'];
	$id = $_POST['id'];

	echo "$kode , $nomor , $warna , $trayek , $id <br>";
	$update_angkot = $angkot->update($kode,$nomor,$trayek,$warna,$id);
?>