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
		echo "Welcome ".$_SESSION['nama'];
		include '../config/koneksi.php';
		
		//$tambah_angkot = $angkot->tambah("mb","12", "pelaminan","jingga");
		$daftar_admin = $admin->tampil();
		$daftar_angkot = $angkot->tampil();		

		?>	
		<a href="form_tambah_admin.php">Tambah Admin</a>
		<table border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($daftar_admin as $nomor => $data):?>
					<tr>
						<td><?php echo $nomor +1 ?></td>
						<td><?php echo $data['nama']?></td>
						<td><?php echo $data['email']?></td>						
					</tr>
				<?php endforeach?>
			</tbody>
		</table>

		<a href="form_tambah_angkot.php">Tambah Angkot</a>
		<table border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>No. Angkot</th>
					<th>Trayek</th>
					<th>Warna</th>
					<th colspan="2">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($daftar_angkot as $nomor => $data):?>
					<tr>
						<td><?php echo $nomor +1 ?></td>
						<td><?php echo $data['nama']?></td>
						<td><?php echo $data['nomor']?></td>						
						<td><?php echo $data['trayek']?></td>						
						<td><?php echo $data['warna']?></td>
						<td><?php echo "<a href=\"hapus_detail_angkot.php?id=".$data['id']."\"> Hapus</a>" ?></td>
						<td><?php echo "<a href=\"edit_detail_angkot.php?id=".$data['id']."\"> Edit</a>" ?></td>						
					</tr>
				<?php endforeach?>
			</tbody>
		</table>


	<?php
	}
	else {
		header('location:index.php');		
	}
?>
<br>
<a href="logout.php">Logout</a>
</body>
</html>
