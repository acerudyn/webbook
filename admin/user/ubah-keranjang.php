<?php
include "koneksi.php";

$a=$_POST['id_buku'];
$b=$_POST['jml'];

$update=mysql_query("update keranjang SET
                     jumlah=		'".$b."'
                     WHERE id_buku=	'".$a."'");

if($update){
	?>
    <script type="text/javascript">
    	alert('Data Terupdate')
		document.location='keranjang.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal terupdate')
	document.location='keranjang.php';
	</script>
    
    <?php } ?>