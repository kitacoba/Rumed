<?php
session_start();
if (!empty($_SESSION['username'])) {
	echo "Welcome ".$_SESSION['nama'];
	echo "<a href=\"../user_logout.php\">Logout</a>";
}
else
{
	header('location:../index.php');
}
?>