<?php
session_start(); // Memulai Session
include 'koneksi.php';

if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
			echo 'Username or Password is invalid';
	}
	else
	{
		// Variabel username dan password
		$username=$_POST['username'];
		$password=$_POST['password'];
		// Membangun koneksi ke database
		// Mencegah MySQL injection 
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = mysql_query("select * from pelanggan where password='$password' AND username='$username'");
		$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login']=$username;
				$_SESSION['daftar']=$user; // Membuat Sesi/session
				header("location: lihat-profil.php"); // Mengarahkan ke halaman profil
				} else {	
				echo 'Username atau Password belum terdaftar';
				}
				mysql_close(); // Menutup koneksi
	}
}
?>