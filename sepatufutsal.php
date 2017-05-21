<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<title>Sepatu Futsal Anonymous</title>
		<link rel = "stylesheet" type = "text/css" href = "css/css.css">
		<script src="jquery/jquery-1.11.0.js"></script>
		<script src="jquery/jquery.js"></script>
		<script src="jquery/menu.js"></script>
		<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="themes/1/js-image-slider.js" type="text/javascript"></script>
	</head>

	<body>
		<div class = "area" style = "height:2800px;">
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
						
			<div style = "position:absolute; margin-top:100px; margin-left:20px;">
				<div style = "position:absolute;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/1.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link">
				<?php
					include('config.php');
					$query = mysql_query("select * from sepatu_futsal where id = 1");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga");
					}
				?>
				</span></a><hr></div>
				<div style = "position:absolute; margin-left:300px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/2.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 2");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:600px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/3.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 3");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:900px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/4.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 4");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
			</div>
			
			<div style = "position:absolute; margin-top:400px; margin-left:20px;">
				<div style = "position:absolute;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/5.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 5");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:300px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/6.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 6");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:600px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/7.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 7");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:900px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/8.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 8");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
			</div>
			
			<div style = "position:absolute; margin-top:700px; margin-left:20px;">
				<div style = "position:absolute;"><a hre = "#" class = "a"><img src = "images/Sepatu Futsal/9.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 9");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:300px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/10.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 10");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:600px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/11.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 11");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:900px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/12.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 12");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
			</div>
			
			<div style = "position:absolute; margin-top:1000px; margin-left:20px;">
				<div style = "position:absolute;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/13.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 13");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:300px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/14.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 14");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:600px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/15.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 15");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:900px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/16.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 16");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
			</div>
			
			<div style = "position:absolute; margin-top:1300px; margin-left:20px;">
				<div style = "position:absolute;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/17.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 17");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:300px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/18.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 18");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:600px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/19.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 19");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:900px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/20.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 20");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
			</div>
			
			<div style = "position:absolute; margin-top:1600px; margin-left:20px;">
				<div style = "position:absolute;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/21.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 21");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:300px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/22.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 22");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:600px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/23.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 23");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:900px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/24.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 24");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
			</div>
			
			<div style = "position:absolute; margin-top:1900px; margin-left:20px;">
				<div style = "position:absolute;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/25.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 25");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:300px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/26.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 26");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:600px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/27.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 27");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
				<div style = "position:absolute; margin-left:900px;"><a href = "#" class = "a"><img src = "images/Sepatu Futsal/28.jpg" alt = "" width = "280px" height = "180px" class = "glow"><span class = "link"><?php $query = mysql_query("select * from sepatu_futsal where id = 28");
					while ($row = mysql_fetch_array($query)) {
						$nama = $row['nama'];
						$harga = $row['harga'];
						print("$nama<br>");
						print("$harga"); }?></span></a><hr></div>
			</div>
		</div>
		
		<div class = "copyright" style = "margin-top:2460px;">
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