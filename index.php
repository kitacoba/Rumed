<<<<<<< HEAD

<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</style>
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
=======
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
>>>>>>> 6bff890290ca1410a22208c720c929a9c5b710b8
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
<<<<<<< HEAD
</head>
<body>
<?php
	include 'config/koneksi.php';
=======
<body>
<?php
	include 'config/koneksi.php';	
>>>>>>> 6bff890290ca1410a22208c720c929a9c5b710b8
?>
<div id="container">
	<header>
		<ul class="menu">
			<li class="icon-kiri"><a href="menu_button" class="menu-nav" onclick="toggleMenu(); return false;"><img src="image/menu2.png" class="gambar-menu"></a></li>
<<<<<<< HEAD
			<li class="icon-tengah"><center><img src="image/user.png" class="gambar-menu"></center></li>
			<li class="icon-kanan"><a href="user.php"><img src="image/user.png" class="gambar"style="float:right" ></a></li>
		</ul>
		<ul id="navigasi_list" style="border-top:2px solid black">
          <li><a href="kendaraan.php">Kendaraan</a></li>        
          <li><a href="wisata.php">Wistata</a></li>
          <li><a href="#footer_nav1">Oleh-oleh</a></li>          
        </ul>   
	</header>
	<div class="content">
	<center>	
		<form method="POST" action="cek_login_user.php">
			<div class="login">
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" name="password"></td>
					</tr>								
					<tr>
						<td colspan="2" class="submit"><input type="submit" value="Login"></td>
					</tr>
					<tr>
						<td colspan="2"><a href="daftar_user.php">Daftar disini</a></td>
					</tr>
				</table>	
			</div>
		</form>
	</center>	
	</div>
	<footer>
		<ul class="menu">
			<li class="icon-kiri"><a href="index.php"><img src="image/home.png" class="gambar"></a></li >
=======
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
>>>>>>> 6bff890290ca1410a22208c720c929a9c5b710b8
			<li class="icon-tengah"><a href="informasi.php"><center><img src="image/info.png" class="gambar" ></center></a></li>
			<li class="icon-kanan"><a href=""><img src="image/setting.png" class="gambar"style="float:right"></a></li>
		</ul>
	</footer>
</div>

<<<<<<< HEAD

</body>
</html>

=======
</body>
</html>
>>>>>>> 6bff890290ca1410a22208c720c929a9c5b710b8
