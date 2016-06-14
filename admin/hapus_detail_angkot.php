<?php
	include '../config/koneksi.php';
	$angkot = new Angkot($koneksi);
	$id = $_GET['id'];
	$hapus_angkot = $angkot->hapus($id);
?>