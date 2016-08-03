<?php
include "koneksi.php";
$del = "delete from pelanggan where id_pelanggan = $_GET[hapus]";
$ok = mysql_query($del);
if ($ok) {
?>
  <script type="text/javascript">
    	alert('Data Telah dihapus')
		document.location='data-member.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus')
	document.location='data-member.php';
	</script>
    
    <?php } 
?>