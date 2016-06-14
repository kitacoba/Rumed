<!DOCTYPE html>
<html>
<head>
    <title>user</title>
</head>
<body>
<?php
include "../config/koneksi.php";
error_reporting(0);
function antiinjection($data){
    $filter_sql = mysqli_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
    return $filter_sql;
}
$adminame	=  mysql_real_escape_string(strtolower(trim(isset($_POST['adminame'])? $_POST['adminame'] : '')));
$adminpass	= $_POST['adminpass'];
$query = "SELECT * FROM admin WHERE lower(adminame)='$adminame' AND adminpass='$adminpass' ";
$login = $koneksi->query($query);
$row = $login->num_rows;
$data = $login->fetch_assoc();
if($row > 0){
	session_start();
	$_SESSION['kunci'] = md5(time());
    $_SESSION['adminame']=$data['adminame'];
    $_SESSION['nama']=$data['nama'];
    header('location:dashboard.php');
}
else{
	header('location:index.php');	
}
?>
</body>
</html>