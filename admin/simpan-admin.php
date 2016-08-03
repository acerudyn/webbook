<?php
include "koneksi.php";
$a=0116;
$b=$_POST['username'];
$c=$_POST['password'];

$simpan=mysql_query("insert into admin values('','$b','$c')");

if($simpan){
	
	?>
    <script type="text/javascript">
    	alert('Data Berhasil Disimpan')
		document.location='menu-admin.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Disimpan')
	document.location='menu-admin.php';
	</script>
    
    <?php } ?>