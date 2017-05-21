<!DOCTYPE html>
<?php
session_start();
?>
<html>
	<head>
		<title>Beranda Anonymous</title>
		<link rel = "stylesheet" type = "text/css" href = "css/css.css">
		<script src="jquery/jquery-1.11.0.js"></script>
		<script src="jquery/jquery.js"></script>
		<script src="jquery/menu.js"></script>
		<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="themes/1/js-image-slider.js" type="text/javascript"></script>
	</head>

	<body>
		<div class = "area">
			<div class = "logo">
				<div class = "posisiLogo">
					<a href = "index.html"><img src = "images/skoy.jpg" height = "100px" width = "350px;"></a>
				</div>
			</div>
			
			<div style = "position:absolute; margin-left:1090px; margin-top:20px;">
				<?php
					
					if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
				?>
						<a href = "login.php" class = "link2">Login</a>|<a href = "register.php"  class = "link2">Register</a>
				<?php
					}
					else{
				?>
						<a href = "logout.php" class = "link2">Logout</a>
						<div style = "position:absolute; margin-top:80px; margin-left:-420px;"><p style = "color:#009966;">
						<?php
							echo $_SESSION['email'];
						?>
						</p></div>
				<?php
					}
				?>
			</div>
			
			<div id='cssmenu'>
				<ul>
				   <li class='active'><a href='index.php'><span>Beranda</span></a></li>
				   <li><a href="profil.php">Profil</a></li>
				   <li class='has-sub'><a href='#'><span>Produk</span></a>
					  <ul>
						 <li class='has-sub'><a href='#'><span>Kaos</span></a>
							<ul>
							   <li><a href="kaospolo.php"><span>Kaos Polo</span></a></li>
							   <li class='last'><a href="kaospolos.php"><span>Kaos Polos</span></a></li>
							</ul>
						 </li>
						 <li class='has-sub'><a href='#'><span>Sepatu</span></a>
							<ul>
							   <li><a href="sepatucasual.php"><span>Sepatu Casual</span></a></li>
							   <li class='last'><a href="sepatufutsal.php"><span>Sepatu Futsal</span></a></li>
							</ul>
						 </li>
					  </ul>
				   </li>
				   <li><a href="galeri.php"><span>Galeri</span></a></li>
				   <li class='last'><a href="kontak.php"><span>Kontak Kami</span></a></li>
				</ul>
			</div>
			
			<div class = "garis"><hr></div>
			
			<div id="sliderFrame">
				<div id="slider">
					<a href="#">
						<img src="images/1.jpg" alt = "Anonymous"/>
					</a>
					<a href="#">
						<img src="images/2.jpg" alt = "Anonymous"/>
					</a>
					<a href="#">
						<img src="images/3.jpg" alt = "Anonymous"/>
					</a>
					<a href="#">
						<img src="images/4.jpg" alt = "Anonymous"/>
					</a>
					<a href="#">
						<img src="images/5.png" alt = "Anonymous"/>
					</a>
					<a href="#">
						<img src="images/6.jpg" alt = "Anonymous"/>
					</a>
					<a href="#">
						<img src="images/7.jpg" alt = "Anonymous"/>
					</a>
					<a href="#">
						<img src="images/8.jpg" alt = "Anonymous"/>
					</a>
				</div>
			</div>
			
			<div style = "position:absolute; margin-top:500px; margin-left:300px;">
				<div style = "position:absolute;"><a href = "#" class = "a"><img src = "images/Kaos Polos/1.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Kaos Polos Vespa Desain 3d</span></a></div>
				<div style = "position:absolute; margin-left:300px;"><a href = "#" class = "a"><img src = "images/Kaos Polos/2.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Kaos Polos Burung Desain 3d</span></a></div>
				<div style = "position:absolute; margin-left:600px;"><a href = "#" class = "a"><img src = "images/Kaos Polos/3.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Kaos Polos Serigala Desain 3d</span></a></div>
			</div>
			
			<div style = "position:absolute; margin-top:770px; margin-left:300px;">
				<div style = "position:absolute;"><a href = "#" class = "a"><img src = "images/Kaos Polo/1.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Kaos Polo National Geographic</span></a><hr></div>
				<div style = "position:absolute; margin-left:300px;"><a href = "#" class = "a"><img src = "images/Kaos Polo/2.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Kaos Polo Dae</span></a><hr></div>
				<div style = "position:absolute; margin-left:600px;"><a href = "#" class = "a"><img src = "images/Kaos Polo/3.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Kaos Polo Abu-abu</span></a><hr></div>
			</div>
			
			<div style = "position:absolute; margin-top:1040px; margin-left:300px;">
				<div style = "position:absolute;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/1.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Sepatu Futsal Nike CR7 Desain</span></a><hr></div>
				<div style = "position:absolute; margin-left:300px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/2.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Sepatu Futsal Adidas</span></a><hr></div>
				<div style = "position:absolute; margin-left:600px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/3.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Sepatu Futsal Specs</span></a><hr></div>
			</div>
			
			<div style = "position:absolute; margin-top:1320px; margin-left:300px;">
				<div style = "position:absolute;"><a href = "#" class = "a"><img src = "images/Sepatu Casual/1.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Sepatu Casual Joey</span></a><hr></div>
				<div style = "position:absolute; margin-left:300px;"><a href = "#" class = "a"><img src = "images/Sepatu Casual/2.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Sepatu Casual JambieThnic</span></a><hr></div>
				<div style = "position:absolute; margin-left:600px;"><a href = "#" class = "a"><img src = "images/Sepatu Casual/3.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">Sepatu Casual Coklat</span></a><hr></div>
				
			</div>
				
			
		</div>

		<div class = "copyright">
			<div style = "position:absolute; margin-top:20px; margin-left:20px; text-align:center; width:1200px; overflow:scroll; border:1px solid black; height: 260px">Tanggapan Pengunjung :
				<?php
					include('config.php');
					$query = mysql_query("select * from umpanbalik");
					while ($row = mysql_fetch_array($query)) {
						$data = $row['tanggapan'];
						$nama = $row['nama_awal'];
						print("<p style = 'font-size:14px; text-align:left; margin-left:10px;'> $nama : $data </p>");
					}
				?>
			</div>
			<div style = "position:absolute; margin-top:280px; margin-left:50px; width:1120px;"><hr><h4>&#169; Anonymous &#153; All Rights Reserved</h4></div>
			
						<script type="text/javascript">
		
		jQuery(document).ready(function() {
			var offset = 1020;
			var duration = 5000;
			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop() > offset) {
					jQuery('.back-to-top').fadeIn(duration);
				} else {
					jQuery('.back-to-top').fadeOut(duration);
				}
				});
				
				jQuery('.back-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
					})
				});
				</script>
				<img class="back-to-top" src="images/back to top.png" width="40px" height="40px" style="margin-top:290px; margin-left:1070px; position:absolute; cursor:pointer;">
				<a class="back-to-top" style="margin-top:330px; margin-left:1030px; position:absolute; cursor:pointer;"> Kembali ke atas </a>

		</div>
	</body>
</html>