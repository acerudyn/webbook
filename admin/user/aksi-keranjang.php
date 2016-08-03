<?php 
session_start();
include('koneksi.php');
include('session.php');
$username = $_SESSION['login'];
$idbuku=$_GET['id'];
 
//di cek dulu apakah barang yang di beli sudah ada di tabel keranjang
$sql = mysql_query("SELECT id_buku FROM keranjang WHERE id_buku='$idbuku' AND id_session='$username'");
    $ketemu=mysql_num_rows($sql);
    if ($ketemu==0){
        // kalau barang belum ada, maka di jalankan perintah insert
        mysql_query("INSERT INTO keranjang VALUES 
					('$idbuku','$username',1)");
					
					?>
    <script type="text/javascript">
    	alert('Data Berhasil Disimpan')
		document.location='keranjang.php';
    </script>
    
    <?php
					
    } else {
        //  kalau barang ada, maka di jalankan perintah update
        mysql_query("UPDATE keranjang
                SET jumlah = jumlah + 1
                WHERE id_session ='$username' AND id_buku='$idbuku'");    
		
		?>
    <script type="text/javascript">
	alert('Data Gagal Disimpan')
	document.location='keranjang.php';
	</script>		
				   
   <?php }   
    header('Location:keranjang.php');
 
?>