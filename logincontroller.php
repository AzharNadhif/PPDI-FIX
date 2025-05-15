<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
require 'function.php';
 
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($conn,"SELECT * FROM tbl_admin where nama ='$nama' and password ='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['nama'] = $nama;
	// $_SESSION['nama'] = $data['nama'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['id_login'] = $data['id'];
	header("location:tabelartikel.php");
} else {
	header("location:login.php?pesan=gagal login data tidak ditemukan.");
}
?>