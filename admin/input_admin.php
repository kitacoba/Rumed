<?php
include '../config/koneksi.php';

$adminame 	= $_POST['adminame'];
$nama 		= $_POST['nama'];
$adminpass 	= md5($_POST['adminpass']);

$email 		= $_POST['email'];

$Daftar_Admin = $admin->tambah($adminame,$nama,$adminpass,$email);

?>