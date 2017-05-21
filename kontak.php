<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<title>Kontak Anonymous</title>
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
			
		<div class = "garis"><hr></div></br>
			<div style = "position:absolute; margin-top:20px; margin-left:50px; width:500px;">Kontak Penjualan:
				<ul>
					<li><a>Admin Heru Setiadi</a></li>
						<p>Kontak (08568844173) PIN BB (2A2E8AD0)</p>
					<li><a>Admin Ocky Aditia Saputra</a></li>
						<p>Kontak (083871757552) PIN BB (2976338F)</p>
					<li><a>Admin Fauzi Makarim</a></li>
						<p>Kontak (089651520354) PIN BB (21423A65)</p>
					<li><a>Admin Taufik Hidayat Raharjo</a></li>
						<p>Kontak (081314320485) PIN BB (7698EF27)</p>
					</li>
				</ul>
			</div>
			
			<?php
					
					if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
					
					}
					else {
			?>
				<div style = "position:absolute; margin-top:400px; margin-left:100px;">
					<hr>
					<h1>Umpan Balik</h1>
						<form method = "post" autocomplete = "on" action = "insert_umpanbalik.php">
						<table class = "fontFeedback">
							<tr>
								<td style = "width:200px;">
									<script type = "text/javascript">
										
										var current = new Date();
										var date = current.getUTCDate();
										var month = current.getUTCMonth()+1;
										var year = current.getUTCFullYear();
										
										document.write("<p> " + date + "-" + month + "-" + year + "</p>");
									</script>
								</td>
								<td style = "width:20px;"></td>
								<td> </td>
							</tr>
							<tr>
								<td style = "width:200px;">Nama </td>
								<td style = "width:20px;">:</td>
								<td>
									<input type = "text" name = "firstname" placeholder = "Nama awal" class = "textFieldNama" style = "width:200px" required/>&nbsp;
									<input type = "text" name = "lastname" placeholder = "Nama akhir" class = "textFieldNama" style = "width:200px" />
								</td>
							</tr>
							<tr>
								<td style = "width:200px;">Email </td>
								<td style = "width:20px;">:</td>
								<td>
									<input type = "email" name = "email" placeholder = "nama@domain.com atau nama@domain.co.id" class = "textFieldEmail" style = "width:400px" required />
								</td>
							</tr>
							<tr>
								<td style = "width:200px;">Tanggapan </td>
								<td style = "width:20px;">:</td>
								<td>
									<textarea name = "tanggapan" placeholder = "kritik atau saran" required   cols = "70" rows = "15" ></textarea>
								</td>
							</tr>
							<tr>
								<td> </td>
								<td> </td>
								<td>
									<input style = "width:150px; height:50px; font-size:18pt; font-family: arcena;" type = "submit" value = "Kirim"/>
									<input style = "width:150px; height:50px; font-size:18pt; font-family: arcena;" type = "reset" value = "Hapus"/>
								</td>
							</tr>
						</table>
					</form>
				</div>
			<?php
				}
			?>
		
			<div class = "copyright" style = "margin-top:1680px; margin-left:0px;">
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