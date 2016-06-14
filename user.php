
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

<div id="container">
	<header>
		<ul class="menu">
			<li class="icon-kiri"><a href="menu_button" class="menu-nav" onclick="toggleMenu(); return false;"><img src="image/menu2.png" class="gambar-menu"></a></li>
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
	<?php
	session_start();
	if (!empty($_SESSION['username'])) {
		echo $_SESSION['nama'];	
	}
	else
	{
		header('location:index.php');
	}
	?>
		<h2><a href="user_logout.php"><img src="image/logout.png"></a></h2>		
	</center>	
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

