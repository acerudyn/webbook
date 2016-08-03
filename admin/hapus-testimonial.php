<?php
include "koneksi.php";
$del = "delete from testimonial where id_testimonial = $_GET[hapus]";
$ok = mysql_query($del);
if ($ok) {
?>
  <script type="text/javascript">
    	alert('Data Telah dihapus')
		document.location='data-testimonial.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Dihapus')
	document.location='data-testimonial.php';
	</script>
    
    <?php } 
?>