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
	//$angkot = new Angkot($koneksi);
	$wisata = new Wisata($koneksi);
	$sql = "SELECT * FROM wisata";
	$hasil = $koneksi->query($sql);	
?>
	<form method="POST" action="tambah_wisata.php">
	<table>
		<tr>
			<td>Nama</td><td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Lokasi</td><td>:</td>
			<td><input type="text" name="lokasi"></td>
		</tr>
		<tr>
			<td>Biaya Masuk</td><td>:</td>
			<td><input type="text" name="biaya"></td>
		</tr>
		<tr>
			<td>Jenis Wisata</td><td>:</td>				
			<td><select name="jenis">
				<option value="0" >-Pilih-</option>"
				<?php
				        while($r=$hasil->fetch_assoc()){
				           echo "<option value=\"$r[id]\">$r[nama_wisata]</option>";
				        }
			?></select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" value="tambah"></td>	
		</tr>
		
	</table>
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
