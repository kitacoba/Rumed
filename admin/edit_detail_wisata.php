<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	session_start();
	if(!empty($_SESSION['nama']))
	{
	include '../config/koneksi.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM detail_wisata WHERE id='$id' ";
	$hasil = $koneksi->query($sql);	
	$data = $hasil->fetch_assoc();
?>
	<form method="POST" action="update_wisata.php">		
	<table>
		<tr>
			<?php echo "<td><input type=\"hidden\" name=\"id\" value=\"$data[id]\"></td>"?>
		</tr>
		<tr>
			<td>Nama</td><td>:</td>
			<?php echo "<td><input type=\"text\" name=\"nama\" value=\"$data[nama]\"></td>"?>
		</tr>
		<tr>
			<td>Lokasi</td><td>:</td>
			<?php echo "<td><input type=\"text\" name=\"lokasi\" value=\"$data[lokasi]\"></td>"?>
		</tr>
		<tr>
			<td>Biaya</td><td>:</td>
			<?php echo "<td><input type=\"text\" name=\"biaya\" value=\"$data[biaya_masuk]\"></td>"?>
		</tr>
		<tr>
			<td>Jenis Wisata</td><td>:</td>				
			<td><select name="jenis">
				<option value="0" >-Pilih-</option>
				<?php 
				$query = "SELECT * FROM wisata ";
				$hasil = $koneksi->query($query);					
		        while($r=$hasil->fetch_assoc()){
		           echo "<option value=\"$r[id]\">$r[nama_wisata]</option>";
		        }
			?></select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" value="Update"></td>
		</tr>
		
	</form>
<?php 
	}
	else
	{
		header('location:index.php');	
	}

?>

</body>
</html>
