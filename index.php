<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	.span8{
		margin-left: -40px;
	}
	.input-large{
		border-radius: 5px;
		width: 200px;
		padding: 5px;		
		border: 2px solid blue;
		margin: 2px 0 ; 
	}
	.btn{
		border-radius: 5px;
		width: 210px;
		padding: 5px;		
		margin:5px 0;
		border: 2px solid blue	
	}  
	

</style>
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
<body>
<?php
	include 'config/koneksi.php';	
?>
<div id="container">
	<header>
		<ul class="menu">
			<li class="icon-kiri"><a href="menu_button" class="menu-nav" onclick="toggleMenu(); return false;"><img src="image/menu2.png" class="gambar-menu"></a></li>
			<li class="icon-tengah"><center><img src="image/home.png" class="gambar-menu"></center></li>
			<li class="icon-kanan"><a href="user_login.php"><img src="image/user.png" class="gambar"style="float:right" ></a></li>
		</ul>
		<ul id="navigasi_list">
          <li><a href="kendaraan.php">Kendaraan</a></li>        
          <li><a href="#footer_nav1">Wistata</a></li>
          <li><a href="#footer_nav1">Oleh-oleh</a></li>          
        </ul>   
	</header>
	<div class="content">	
	<center>
      <form class="form-inline" action='index.php' method="POST">
        <input type="text" name='asal' class="input-large" placeholder="Alamat asal">
        <input type="text"  name='tujuan'class="input-large" placeholder="Alamat Yang dituju">              
        <input type="submit" class="btn btn-warning" name="kirim" value="kirim" >       	
      </form>      
      <p class='lead'>
      	Rute  Google maps      
      </p>      		
      <div class="span8">
      	<?php
	       if(isset($_POST['kirim'])) {
	          $asal = $_POST['asal'];
	          $tujuan = $_POST['tujuan'];  
	          echo "<a href=\"daftar-kendaraan.php?asal=$asal&tujuan=$tujuan\">Kendaraan</a>";
	          include ('direction.php');      		 
	        }    
      		
        ?>
      </div>
    </center>
	</div>
	<footer>
		<ul class="menu">
			<li class="icon-kiri"><a href=""><img src="image/home.png" class="gambar active"></a></li >
			<li class="icon-tengah"><a href="informasi.php"><center><img src="image/info.png" class="gambar" ></center></a></li>
			<li class="icon-kanan"><a href=""><img src="image/setting.png" class="gambar"style="float:right"></a></li>
		</ul>
	</footer>
</div>

</body>
</html>