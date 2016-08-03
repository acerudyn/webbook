<?php 
include('koneksi.php');
include('session.php');
$username = $_SESSION['login'];
$idbuku=$_GET['id'];
$koneksidb=include('koneksi.php');

$cekSql = "SELECT * FROM keranjang WHERE id_buku='$idbuku' AND id_session='$username'";
$cekQry = mysql_query($cekSql, $konek) or die ("Cek data barang".mysql_error());
	if(mysql_num_rows($cekQry) >=1) {
		// Jika barang sudah pernah dipilih, maka update saja jumlah barangnya (+1)
		$mySql = "UPDATE keranjang SET jumlah=jumlah + 1 WHERE id_buku='$idbuku' AND id_session='$username'";
	}
	else {
		// Jika barang belum pernah dipilih, maka tambahkan baris baru ke keranjang
		$mySql = "SELECT * FROM barang WHERE id_buku='$idbuku'";
		$myQry = mysql_query($mySql, $konek) or die ("Gagal ambil data barang".mysql_error());
		$myData = mysql_fetch_array($myQry);
		
// Membaca data dari tabel Barang, untuk diinput ke tabel TMP
$harga	= $myData['harga'];
$gambar	= $myData['gambar'];
$judul	= $myData['nama'];

		
// Simpan data ke TMP (Keranjang Belanja)
$mySql	= "INSERT INTO keranjang (id_buku, id_session, jumlah, gambar, judul, harga) 
					VALUES('$idbuku', '$username', '1','$gambar','$judul','$harga')";
}
$myQry = mysql_query($mySql, $konek) or die ("Error".mysql_error());
	if ($myQry)  { ?>
		 <script type="text/javascript">
    	alert('Data Berhasil Disimpan')
		document.location='keranjang.php';
    </script>
    
	<?php }

?>
