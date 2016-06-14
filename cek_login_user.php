<!DOCTYPE html>
<html>
<head>
    <title>user</title>
</head>
<body>
<?php
include "config/koneksi.php";
error_reporting(0);
function antiinjection($data){
    $filter_sql = mysqli_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
    return $filter_sql;
}
$username	=  mysql_real_escape_string(strtolower(trim(isset($_POST['username'])? $_POST['username'] : '')));
$password	= isset($_POST['password']) ? md5($_POST['password']) : '';
$query = "SELECT * FROM users WHERE lower(username)='$username' AND userpass='$password' ";

$login = $koneksi->query($query);
$row = $login->num_rows;
$data = $login->fetch_assoc();

if($row > 0){
	session_start();
	$_SESSION['kunci'] = md5(time());
    $_SESSION['username']=$data['username'];
    $_SESSION['nama']=$data['nama'];
<<<<<<< HEAD
    header('location:home.php');
}
else{
	header('location:index.php');	
=======
    header('location:users/index.php');
}
else{
	header('location:user_login.php');	
>>>>>>> 6bff890290ca1410a22208c720c929a9c5b710b8
}
?>
</body>
</html>