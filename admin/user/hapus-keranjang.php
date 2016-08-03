<?php
include "koneksi.php";
$del = "delete from keranjang where id_buku= $_GET[hapus]";
$ok = mysql_query($del);
if ($ok) {
?>
  <script type="text/javascript">
    	alert('Data Telah dihapus')
		document.location='keranjang.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus')
	document.location='keranjang.php';
	</script>
    
    <?php } 
?>