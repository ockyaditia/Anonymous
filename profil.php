<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<title>Profil Anonymous</title>
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
		<div class = "posisiTulisan">
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saat ini kita seringkali mendengar kata tiga dimensi atau 3D. Seperti film 3D, TV 3D, ponsel 3D, permainan 3D atau perangkat lain dengan teknologi 3D yang ada di rumah atau di sekitar Anda. Menurut kamus, kata 3D atau tiga dimensi adalah suatu bentuk dari benda yang memiliki panjang, lebar dan tinggi. Untuk menampilkan efek 3D pada suatu objek maka suatu gambar atau film akan terlihat memiliki kedalaman dan perbedaan ruang antara suatu objek dengan objek yang lain.
		Asal mula T-Shirt tidak diketahui secara pasti. Teori yang paling umum adalah nama T-Shirt berasal dari bentuknya yang menyerupai huruf "T", atau di karenakan pasukan militer sering menggunakan pakaian jenis ini sebagai "Training Shirt".
		<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Polo Shirt atau Kaos Polo yang dikenal juga sebagai kaos kerah, kini penggunaannya telah dipakai oleh berbagai banyak kalangan. Kaos kerah pun sering digunakan untuk promosi oleh berbagai perusahaan dengan berbagai bidang untuk menyampaikan pesan bagi para konsumen. Tidak seperti perkembangan sekarang, dimana kaos polo telah merambah dunia fashion dan digunakan dalam berbagai kesempatan termasuk waktu santai.
		Jika dua komponen tersebut digabungkan, maka akan membentuk suatu seni yang menarik yang dinamakan kaos 3D. Untuk membentuk kaos dengan efek 3D membutuhkan sebuah kaos dengan berbagai jenis warna, macam-macam desain dengan efek 3D dan alat sablon yang berkualitas. Selain kaos dengan efek gambar 3D, kami membuat produk kaos polo dengan desain bordir yang menarik. Dengan membuat produk kaos 3D dan kaos polo, diharapkan semua pembeli dari berbagai kalangan dapat membeli produk dalam negeri. 
		<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Produk yang kami tawarkan adalah sepatu casual dan sepatu futsal berbagai merek ternama yang kami jual via online. Banyak sepatu-sepatu dengan merek ternama yang sedang tren di kalangan anak muda masa kini. Bentuk-bentuk dari sepatunya pun bermacam-macam. Begitu juga dengan desain sepatu yang kami tawarankan ada berbagai macam desain baik buat kalangan anak kecil, remaja sampai orang dewasa pun tersedia di produk kami. Warnanya pun bervariasi dengan kombinasi warna-warna yang indah membuat sepatu produk kami lebih bagus dan menarik dari produk sepatu yang lainnya.Produk yang kami tawarkan adalah sepatu casual dan sepatu futsal berbagai merek ternama yang kami jual via online. Banyak sepatu-sepatu dengan merek ternama yang sedang tren di kalangan anak muda masa kini. Bentuk-bentuk dari sepatunya pun bermacam-macam. Begitu juga dengan desain sepatu yang kami tawarankan ada berbagai macam desain baik buat kalangan anak kecil, remaja sampai orang dewasa pun tersedia di produk kami. Warnanya pun bervariasi dengan kombinasi warna-warna yang indah membuat sepatu produk kami lebih bagus dan menarik dari produk sepatu yang lainnya.
		</p>
		<table>
			<tr>
			<td><img src="images/fauzi.jpg" width="250px" height="250px"></td>
			<td><img src="images/heru.jpg" width="250px" height="250px"></td>
			<td><img src="images/ocky.jpg" width="250px" height="250px"></td>
			<td><img src="images/topik.jpg" width="250px" height="250px"></td>
				
			</tr>
			<tr>
			<td align="center"><h4> Fauzi Makarim </h4></td>
			<td align="center"><h4> Heru Setiadi </h4></td>
			<td align="center"><h4> Ocky Aditia Saputra </h4></td>
			<td align="center"><h4> Taufik Hidayat Raharjo </h4></td>
			</tr>
		</table>
	</div>
		
		<div class = "copyright" style = "margin-top:1680px; margin-left:0px">
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