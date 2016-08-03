<?php
include "koneksi.php";

$a="15120";
$b=$_POST['nama'];
$c=$_POST['pengarang'];
$d=$_POST['deskripsi'];
$e=$_POST['kategori'];
$f=$_POST['harga'];
$g=$_POST['stok'];
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "user/$nama_file";

  if (!empty($lokasi_file)) {
  move_uploaded_file($lokasi_file,$direktori);
  
   $simpan = mysql_query("INSERT INTO barang 
		VALUES('','$b','$c','$d','$e','$f','$g','$nama_file')");
		
  if ($simpan) {
	  ?>
  <script type="text/javascript">
    	alert('Data Tersimpan')
		document.location='produk.php';
    </script>
    
    <?php }else{ ?>
    <script type="text/javascript">
	alert('Data Gagal Disimpan')
	document.location='produk.php';
	</script>
   <?php }?>

<?php }else{
  echo "terjadi kesalahan";  
  } 
?>