<?php 
session_start();  
if($_POST){  
	$b=	$_POST['nama'];
	$c=	$_POST['alamat'];
	$j=	$_POST['jenis_kelamin'];
	$d=	$_POST['provinsi'];
	$f=	$_POST['telepon'];
	$e=	$_POST['email'];
	$g=	$_POST['username'];
	$h=	$_POST['password'];
	$i=	$_POST['konfirmasi_pwd'];
	
	$error=array();
	if(empty($b)){
		$error['nama']='Nama Tidak Boleh Kosong';
	}if(empty($c)){
		$error['alamat']='Alamat Tidak Boleh Kosong';
	}if(empty($e)){
		$error['email']='Email Tidak Boleh Kosong';
	}if(empty($j)){
		$error['jenis_kelamin']='Pilih Jenis Kelamin';
	}if(empty($d)){
		$error['provinsi']='Pilih Provinsi';
	}if(empty($f)){
		$error['telepon']='Nomor Telepon Tidak Boleh Kosong';
	}if(empty($g)){
		$error['username']='Username Tidak Boleh Kosong';
	}if(empty($h)){
		$error['password']='Password Tidak Boleh Kosong';
	}if(empty($i)){
		$error['konfirmasi_pwd']='Konfirmasi Password Tidak Boleh Kosong';
	}if(empty($error)){ ?>
    
		<?php
include "koneksi.php";
$a=121510;
$b=$_POST['nama'];
$c=$_POST['alamat'];
$d=$_POST['provinsi'];
$e=$_POST['email'];
$f=$_POST['telepon'];
$g=$_POST['username'];
$h=$_POST['password'];
$i=$_POST['konfirmasi_pwd'];
$j=$_POST['jenis_kelamin'];

$simpan=mysql_query("insert into pelanggan values('','$b','$c','$d','$e','$f','$g','$h','$i','$j')");

if($simpan){
	
	?>
    <script type="text/javascript">
    	alert('Data Berhasil Disimpan')
		document.location='lihat-profil.php';
    </script>
    
    <?php } else {?>
    <script type="text/javascript">
	alert('Data Gagal Disimpan')
	document.location='pendaftaran.php';
	</script>
    
    <?php } ?>
    
	<?php 
	}else{  
        $_SESSION['error'] = $error;  
        $_SESSION['post'] = $_POST;  
        header("location: pendaftaran.php");  
}
}
?>    