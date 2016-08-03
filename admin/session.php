<?php
include 'koneksi.php';
session_start();// Memulai Session
// Menyimpan Session
$username=$_SESSION['login'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql=mysql_query("select username from admin where username='$username' ");
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];

if(!isset($login_session)) { 
	mysql_close(); // Menutup koneksi ?>
	<script type="text/javascript">
	alert('Silahkan Login atau Daftar Dahulu ')
	document.location='index.php';
	</script>
<?php } ?>