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
	$sql = "SELECT * FROM angkot";
	$hasil = $koneksi->query($sql);	
?>
	<form method="POST" action="tambah_angkot.php">
	<table>
		<tr>
			<td>Nomor</td><td>:</td>
			<td><input type="text" name="nomor"></td>
		</tr>
		<tr>
			<td>Trayek</td><td>:</td>
			<td><input type="text" name="trayek"></td>
		</tr>
		<tr>
			<td>Warna</td><td>:</td>
			<td><input type="text" name="warna"></td>
		</tr>
		<tr>
			<td>Nama Angkot</td><td>:</td>				
			<td><select name="kode">
				<option value="0" >-Pilih-</option>"
				<?php
				        while($r=$hasil->fetch_assoc()){
				           echo "<option value=\"$r[id]\">$r[nama]</option>";
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
