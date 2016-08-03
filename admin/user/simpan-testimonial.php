<?php
include "koneksi.php";

$b=$_POST['id_user'];
$c=$_POST['nama'];
$d=$_POST['email'];
$e=$_POST['tanggal'];
$f=$_POST['isi'];

$simpan=mysql_query("insert into testimonial values('','$c','$d','$e','$f','$b')");

if($simpan){
	
	?>
    <script type="text/javascript">
    	alert('Testimonail Berhasil Disimpan')
		document.location='index.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Testimonail  Gagal Disimpan')
	document.location='testimonial.php';
	</script>
    
    <?php } ?>