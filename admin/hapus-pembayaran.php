<?php
include "koneksi.php";
$del = "delete from transaksi_rinci where notrans = $_GET[hapus]";
$ok = mysql_query($del);
if ($ok) {
?>
  <script type="text/javascript">
    	alert('Data Telah dihapus')
		document.location='data-konfirmasi.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus')
	document.location='data-konfirmasi.php';
	</script>
    
    <?php } 
?>