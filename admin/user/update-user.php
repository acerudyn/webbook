<?php
include "koneksi.php";

$a=$_POST['id_pelanggan'];
$b=$_POST['nama'];
$c=$_POST['alamat'];
$d=$_POST['provinsi'];
$e=$_POST['email'];
$f=$_POST['telepon'];
$g=$_POST['username'];
$h=$_POST['password'];
$i=$_POST['konfirmasi_pwd'];
$j=$_POST['jenis_kelamin'];

$update=mysql_query("update pelanggan SET
                     nama=		'".$b."',
                     alamat=	'".$c."',
                     provinsi=	'".$d."',
                     email=		'".$e."',
                     telepon=	'".$f."',
					 username=	'".$g."',
                     password=	'".$h."',
                     konfirmasi_pwd=		'".$i."',
					 jenis_kelamin=			'".$j."'
                     WHERE id_pelanggan=	'".$a."'");

if($update){
	?>
    <script type="text/javascript">
    	alert('Data Terupdate')
		document.location='lihat-profil.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal terupdate')
	document.location='edit-user.php';
	</script>
    
    <?php } ?>