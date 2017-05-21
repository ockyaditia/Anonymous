<?php
	include('config.php');

	$nama_awal = $_POST['firstname'];
	$nama_akhir = $_POST['lastname'];
	$email = $_POST['email'];
	$tanggapan = $_POST['tanggapan'];

	//simpan data ke database
	$query = mysql_query("insert into umpanbalik(nama_awal, nama_akhir, email, tanggapan) values('$nama_awal','$nama_akhir','$email','$tanggapan')") or die(mysql_error());
	if ($query) {
	header('location:kontak.php?message=success');
}
?>