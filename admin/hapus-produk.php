<?php
include "koneksi.php";
$del = "delete from barang where id_buku = $_GET[hapus]";
$ok = mysql_query($del);
if ($ok) {
?>
  <script type="text/javascript">
    	alert('Data Telah dihapus')
		document.location='produk.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus')
	document.location='produk.php';
	</script>
    
    <?php } 
?>