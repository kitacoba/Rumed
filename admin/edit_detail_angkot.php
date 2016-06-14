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
	$angkot = new Angkot($koneksi);
	$id = $_GET['id'];
	$sql = "SELECT * FROM detail_angkot WHERE id='$id' ";
	$hasil = $koneksi->query($sql);	
	$data = $hasil->fetch_assoc();
?>
	<form method="POST" action="update_angkot.php">		
	<table>
		<tr>
			<?php echo "<td><input type=\"hidden\" name=\"id\" value=\"$data[id]\"></td>"?>
		</tr>
		<tr>
			<td>Nomor</td><td>:</td>
			<?php echo "<td><input type=\"text\" name=\"nomor\" value=\"$data[nomor]\"></td>"?>
		</tr>
		<tr>
			<td>Trayek</td><td>:</td>
			<?php echo "<td><input type=\"text\" name=\"trayek\" value=\"$data[trayek]\"></td>"?>
		</tr>
		<tr>
			<td>Warna</td><td>:</td>
			<?php echo "<td><input type=\"text\" name=\"warna\" value=\"$data[warna]\"></td>"?>
		</tr>
		<tr>
			<td>Nama Angkot</td><td>:</td>				
			<td><select name="kode">
				<option value="0" >-Pilih-</option>
				<?php 
				$query = "SELECT * FROM angkot ";
				$hasil = $koneksi->query($query);					
		        while($r=$hasil->fetch_assoc()){
		           echo "<option value=\"$r[id]\">$r[nama]</option>";
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
