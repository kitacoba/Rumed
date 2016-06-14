<?php


class Database
{
	protected $dbHost = "localhost";
	protected $dbUser = "root";
	protected $dbPass = "";
<<<<<<< HEAD
	protected $dbName = "rumed";	
=======
	protected $dbName = "amed";	
>>>>>>> 6bff890290ca1410a22208c720c929a9c5b710b8

	function sambung()
	{
		$mysqli = mysqli_connect($this->dbHost,$this->dbUser,$this->dbPass,$this->dbName) or die("Database tidak konek");
		return $mysqli;
	}
}
class Admin
{
	function __construct($koneksinya)
	{
		$this->mysqli = $koneksinya;
	}
	function tampil()
	{
		$ambil = $this->mysqli->query("SELECT * FROM admin");
		$output = array();
		while ($data = $ambil->fetch_assoc()) {
			$output[] = $data;
		}
		return $output;
	}
	function tambah($adminame,$nama,$adminpass,$email)
	{
		$sql_cek	= "SELECT adminame FROM admin WHERE adminame='$adminame'";
		$hasil 		= $this->mysqli->query($sql_cek); 
		$baris 		= $hasil->num_rows;
		if($baris > 0)
		{
			echo "Pengguna sudah ada";
		}
		else
		{
			$sql = "INSERT INTO admin(adminame,nama,adminpass,email) VALUES('$adminame','$nama','$adminpass','$email')";
			$hasil = $this->mysqli->query($sql);
			if ($hasil) {
				//echo "Anda Telah Berhasil Mendaftar";
				header('location:../admin/index.php');
			}
			else
			{
				echo "Anda Gagal Mendaftar";
			}		
		}
	}
}
class Users
{
	function __construct($koneksinya)
	{
		$this->mysqli = $koneksinya;
	}
<<<<<<< HEAD
	function tampil()
	{
		$ambil = $this->mysqli->query("SELECT * FROM users");
		$output = array();
		while ($data = $ambil->fetch_assoc()) {
			$output[] = $data;
		}
		return $output;
	}
=======
>>>>>>> 6bff890290ca1410a22208c720c929a9c5b710b8
	function tambah($username,$nama,$password,$alamat,$email)
	{
		$sql_cek	= "SELECT username FROM users WHERE username='$username'";
		$hasil 		= $this->mysqli->query($sql_cek); 
		$baris 		= $hasil->num_rows;
		if($baris > 0)
		{
			echo "Pengguna sudah ada";
		}
		else
		{
			$sql = "INSERT INTO users(username,nama,userpass,alamat,email) VALUES('$username','$nama','$password','$alamat','$email')";
			$hasil = $this->mysqli->query($sql);
			if ($hasil) {
				//echo "Anda Telah Berhasil Mendaftar";
				header('location:users/index.php');
			}
			else
			{
				echo "Anda Gagal Mendaftar";
			}		
		}
	}
}
class Angkot
{
	
	function __construct($koneksinya)
	{
		$this->mysqli = $koneksinya;
	}
	function tampil()
	{
		$ambil = $this->mysqli->query("SELECT * FROM angkot a INNER JOIN detail_angkot d ON a.id = d.kode_angkot");
		$output = array();
		while ($data = $ambil->fetch_assoc()) {
			$output[] = $data;
		}
		return $output;
	}
	function tambah($kode_angkot, $nomor, $trayek, $warna)
	{
		
		$sql = "INSERT INTO detail_angkot(nomor,trayek,warna,kode_angkot) VALUES ('$nomor','$trayek','$warna','$kode_angkot')";
		$hasil = $this->mysqli->query($sql);
		if($hasil)
		{
			echo "Add Data Angkot Success";
		}
		else
			echo "Add Data Angkot Failed";
	}
	function update($kode_angkot, $nomor, $trayek, $warna, $id)
	{
		$sql = "UPDATE detail_angkot SET nomor='$nomor',trayek='$trayek',warna='$warna',kode_angkot='$kode_angkot' WHERE id='$id' ";
		$hasil = $this->mysqli->query($sql);
		if($hasil)
		{
			echo "Update Data Angkot Success";
		}
		else
			echo "Update Data Angkot Failed";
	}
	function kode()
	{
		$ambil = $this->mysqli->query("SELECT * FROM angkot ");
		$output = array();
		while ($data = $ambil->fetch_assoc()) {
			$output[] = $data;
		}
		return $output;
	}
	function hapus($id)
	{

		$hapus = $this->mysqli->query("DELETE FROM detail_angkot WHERE id='$id'");	
		if($hapus)
		{
			echo "Hapus Data Detail Angkot Sukses";
		}		
		else
		{
			echo "Gagal" ;			
		}
	}
}

<<<<<<< HEAD
class Wisata
{
	
	function __construct($koneksinya)
	{
		$this->mysqli = $koneksinya;
	}
	function tampil()
	{
		$ambil = $this->mysqli->query("SELECT * FROM wisata w INNER JOIN detail_wisata d ON w.id = d.jenis");
		$output = array();
		while ($data = $ambil->fetch_assoc()) {
			$output[] = $data;
		}
		return $output;
	}
	function tambah($nama, $lokasi, $biaya_masuk,$jenis)
	{
		
		$sql = "INSERT INTO detail_wisata(nama,lokasi,biaya_masuk, jenis) VALUES ('$nama', '$lokasi', '$biaya_masuk','$jenis')";
		$hasil = $this->mysqli->query($sql);
		if($hasil)
		{
			echo "Add Data Wisata Success";
		}
		else
			echo "Add Data Wisata Failed";
	}	
	function update($nama, $lokasi, $biaya_masuk,$jenis,$id)
	{
		$sql = "UPDATE detail_wisata SET nama='$nama',lokasi='$lokasi',biaya_masuk='$biaya_masuk',jenis='$jenis' WHERE id='$id' ";
		$hasil = $this->mysqli->query($sql);
		if($hasil)
		{
			echo "Update Data Wisata Success";
		}
		else
			echo "Update Data Wisata Failed";
	}
	function kode()
	{
		$ambil = $this->mysqli->query("SELECT * FROM wisata ");
		$output = array();
		while ($data = $ambil->fetch_assoc()) {
			$output[] = $data;
		}
		return $output;
	}
	function hapus($id)
	{

		$hapus = $this->mysqli->query("DELETE FROM detail_wisata WHERE id='$id'");	
		if($hapus)
		{
			echo "Hapus Data Detail Wisata Sukses";
		}		
		else
		{
			echo "Gagal" ;			
		}
	}
}

=======
>>>>>>> 6bff890290ca1410a22208c720c929a9c5b710b8

//untuk koneksi
$db = new Database();
$koneksi = $db->sambung();
$admin = new Admin($koneksi);
$angkot = new Angkot($koneksi);
$users = new Users($koneksi);
<<<<<<< HEAD
$wisata = new Wisata($koneksi);
=======
>>>>>>> 6bff890290ca1410a22208c720c929a9c5b710b8
/*$data_admin = $admin->tampil();

echo "<pre>";
print_r($data_admin);
echo "</pre>";
*/


	
?>