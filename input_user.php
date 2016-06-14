<?php
include 'config/koneksi.php';

$username 	= $_POST['username'];
$nama 		= $_POST['nama'];
$password 	= md5($_POST['password']);
$alamat 	= $_POST['alamat'];
$email 		= $_POST['email'];

$Daftar_User = $users->tambah($username,$nama,$password,$alamat,$email);

?>