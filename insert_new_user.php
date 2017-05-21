<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
//tangkap data dari form

$nama_depan = $_POST['namadepan'];
$nama_belakang = $_POST['namabelakang'];
$email = $_POST['email'];
$password = $_POST['password'];

//simpan data ke database
$query = mysql_query("insert into user(nama_depan, nama_belakang, email, password) values('$nama_depan','$nama_belakang','$email','$password')") or die(mysql_error());
if ($query) {

header('location:login.php?message=success');

} ?>