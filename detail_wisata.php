<!DOCTYPE html>
<html>
<head>
	<title>Kendaraan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
        jQuery('.tabs .tab-links a').on('click', function(e)  {
            var currentAttrValue = jQuery(this).attr('href');
     
            // Show/Hide Tabs
            jQuery('.tabs ' + currentAttrValue).siblings().slideUp(400);
            jQuery('.tabs ' + currentAttrValue).delay(400).slideDown(400);
     
            // Change/remove current tab to active
            jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
     
            e.preventDefault();
        });
    });
    </script>
<script type="text/javascript">
	var originalNavClasses;

	function toggleMenu() {
	    var elem = document.getElementById('navigasi_list');
	    var classes = elem.className;
	    if (originalNavClasses === undefined) {
	        originalNavClasses = classes;
	    }
	    elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
}
</script>
</head>
<body>
<?php
	include 'config/koneksi.php';
	session_start();
	if (!empty($_SESSION['username'])) {		
	}
	else
	{
		header('location:index.php');
	}
?>
<div id="container">
	<header>
		<ul class="menu">
			<li class="icon-kiri"><a href="menu_button" class="menu-nav" onclick="toggleMenu(); return false;"><img src="image/menu2.png" class="gambar-menu"></a></li>
			<li class="icon-tengah"><center><img src="image/kendaraan.png" class="gambar-menu"></center></li>
			<li class="icon-kanan"><a href="user.php"><img src="image/user.png" class="gambar"style="float:right" ></a></li>
		</ul>
		<ul id="navigasi_list" style="border-top:2px solid black">
          <li><a href="kendaraan.php">Kendaraan</a></li>        
          <li><a href="wisata.php">Wistata</a></li>
          <li><a href="#footer_nav1">Oleh-oleh</a></li>          
        </ul>   
	</header>
	<div class="content">
		<div class="tabs">
		    <ul class="tab-links">
		    <center>
		        <li style="background-color:white;color:black; width:95%">WISATA</li>
		        <li class="active"><a href="#tab1">KULINER</a></li>
		        <li><a href="#tab2">BAHARI</a></li>
		        <li><a href="#tab3">BUDAYA</a></li>	        
		    </center>
		    </ul>

		    <div class="tab-content">
		    <center>

		        <?php		        
		        	$id = $_GET['id'];		        			        	
		        	$sql = "SELECT * FROM detail_wisata d INNER JOIN wisata w ON d.jenis = w.id WHERE $id=d.id";		        	
		        	$hasil = $koneksi->query($sql);
		        	$row = $hasil->fetch_assoc();
		        	echo "<h1>".$row['nama']."</h1><br>
		        		  <p><b>Nomor : ".$row['lokasi']."<b></p>
		        		  <p><b>Warna : ".$row['biaya_masuk']."<b></p>		        		  
		        		  <p><b>Trayek : ".$row['jenis']."<b></p>
		        		";
		        ?>
		        
		    </center>
		    </div>
		</div>
	</div>
	<footer>
		<ul class="menu">
			<li class="icon-kiri"><a href="index.php"><img src="image/home.png" class="gambar"></a></li >
			<li class="icon-tengah"><a href="informasi.php"><center><img src="image/info.png" class="gambar" ></center></a></li>
			<li class="icon-kanan"><a href=""><img src="image/setting.png" class="gambar"style="float:right"></a></li>
		</ul>
	</footer>
</div>


</body>
</html>