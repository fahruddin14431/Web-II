<?php 

// inisialisasi koneksi
$server = "localhost";
$user = "root";
$pass ="";
$db= "db_portal_berita";

// cek koneksi
$koneksi = new mysqli($server, $user, $pass, $db);

if($koneksi->connect_errno){
	die("koneksi error".$koneksi->connect_errno);
}

 ?>