<?php
include "koneksi.php";

$a=$_POST['notrans'];
$b=$_POST['username'];
$c=$_POST['nama'];
$d=$_POST['alamat'];
$e=$_POST['telepon'];
$f=$_POST['total'];

$simpan=mysql_query("insert into transaksi_rinci values('$a','$b','$c','$d','$e','$f')");

if($simpan){
	
	?>
    <script type="text/javascript">
    	alert('Data Berhasil Disimpan')
		document.location='pembayaran-sukses.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Disimpan')
	document.location='pembayaran.php';
	</script>
    
    <?php } ?>
     