<?php
include "koneksi.php";
$del = "delete from admin where id_user = $_GET[hapus]";
$ok = mysql_query($del);
if ($ok) {
?>
  <script type="text/javascript">
    	alert('Data Telah dihapus')
		document.location='menu-admin.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus')
	document.location='menu-admin.php';
	</script>
    
    <?php } 
?>