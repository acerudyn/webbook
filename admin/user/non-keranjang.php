<!doctype html>
 <html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width intial-scale=1.0">
<link rel="stylesheet" type="text/css" href="Style.css"/>
<title>Keranjang Beanja</title>
</head>

<body>



<!--Wrapper--> 
<div id="wrapper">

<!-- header-->
<div id="header">
	<div class="search">
   <form method="post" name="search" action="pencarian.php">
	<input type="text" name="cari" size="31" placeholder="Nama Pengarang atau judul buku">
    <input type="submit" name="pencarian"  value="cari">
    </form></div>
</div>

<!--menu atas--> 
<div id="nav">
<ul class="dropmenu">
<li><a href="index.php">Halaman Utama</a></li>
<li><a href="#">Anggota</a>
    <ul>
    <li><a href="pendaftaran.php">Pendaftaran</a></li>
    <li><a href="lupapwd.php">Lupa Password</a></li>
    <li><a href="lihat-profil.php">Lihat Profil</a></li>
    </ul>
</li>
<li><a href="#2">Lihat Buku</a>
    <ul>
    <li><a href="non-buku-baru.php">Buku Baru</a></li>
    <li><a href="non-buku-terlaris.php">Buku Terlaris</a></li>
    <li><a href="non-buku-promo.php">Buku Promo</a></li>
    </ul>
</li>
<li><a href="#3">Transaksi</a>
    <ul>
    <li><a href="non-keranjang.php">Keranjang Belanja</a></li>
    <li><a href="pembayaran.php">Konfirmasi Pembayaran</a></li>
    </ul>
</li>
<li><a href="#2">Cek Status</a>
    <ul>
    <li><a href="pembayaran.php">Status Pembayran</a></li>
    <li><a href="pembayaran.php">Status Pengiriman</a></li>
    </ul>
</li>
<li><a href="#2">Berita</a>
    <ul>
    <li><a href="testimonial.php">Testimonial</a></li>
    <li><a href="#22">Tentang Kami</a></li>
    </ul>
</li>
<li><a href="#2">Follow Us</a>
    <ul>
    <li><a href="#21">Facebook</a></li>
    <li><a href="#22">Twitter</a></li>
    <li><a href="#23">Email</a></li>
    </ul>
</li>
</ul>
</div>
        
<!--slider-->
<div id="slider">
   <img src="slider.jpg">
 </div>      

<table width="1014" border="0" id="tabel">
  <tr>
    <td height="27" colspan="5" bgcolor="#0099FF"><marquee>Selamat Berbelanja</marquee></td>
    </tr>
  <tr>
    <td width="196" rowspan="2" align="center" valign="top"><div id="login">
    	<div class="login-block">
    	  <h1>Login</h1>
    	  <input type="text" value="" placeholder="Username" id="username" />
    	  <input type="password" value="" placeholder="Password" id="password" >
    	  <button>Submit</button>
</div></td>
    <td height="24">&nbsp;</td>
    <td width="556" rowspan="14" align="center" valign="top" ><table width="548" border="0">
      <tr>
        <td height="29" colspan="5" align="center" bgcolor="#0000FF"><strong>Keranjang Belanja</strong></td>
        </tr>
      <tr>
        <td width="119" height="28" align="center" bgcolor="#CCCCCC">sampul</td>
        <td width="154" align="center" bgcolor="#CCCCCC">judul</td>
        <td width="72" align="center" bgcolor="#CCCCCC">jumlah</td>
        <td width="86" align="center" bgcolor="#CCCCCC">harga</td>
        <td width="83" align="center" bgcolor="#CCCCCC">total</td>
      </tr>
      <tr>
       <?php include "koneksi.php"; 
	   
$tampil=mysql_query("SELECT barang.gambar,barang.judul,barang.harga,keranjang.jumlah,keranjang.id_session FROM barang full outer join keranjang on barang.id_buku=keranjang.id_buku");
while($data=mysql_fetch_array($tampil)){
?>  
        <td height="100" align="center" valign="top"><?php echo $data['gambar']; ?></td>
        <td align="center" valign="top"><?php echo $data['nama']; ?></td>
        <td align="center" valign="top"><?php echo $data['jumlah']; ?></td>
        <td align="center" valign="top"><?php echo $data['harga']; ?></td>
        <td align="center" valign="top"><?php echo $data['total']; ?></td>
      </tr>
      <tr>
        <td height="30" colspan="2" align="left" bgcolor="#CCCCCC"><a href="index.php">Kembali ke katalog</a> | <a href="#">Edit</a> |<a href="hapus-keranjang.php? hapus=<?php echo $data['id_buku']?>" > Hapus</a></td>
        <td colspan="3" align="right" bgcolor="#CCCCCC">Lanjut ke - <a href="pembayaran.php">Pembayaran</a>      </td>
        
  <tr>
        </tr>
         <?php } ?>  
    </table></td>
    <td>&nbsp;</td>
    <td align="center" id="baris"><strong>keranjang belanja</strong></td>
  </tr>
  <tr>
    <td width="17" height="137">&nbsp;</td>
    <td width="15">&nbsp;</td>
    <td width="196" align="center" valign="top" id="anggota"></td>
  </tr>
  <tr>
    <td align="center" id="baris"><strong>member</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2" align="center" valign="top" id="anggota">
    
    <table width="182" border="0">
      <tr>
      
      <?php include "koneksi.php";
$no=1;
$tampil=mysql_query("select * from pelanggan order by id_pelanggan desc limit 5");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
?>
        <td align="center"><?php echo $data['username']; ?>
        </td>
      </tr>
      <?php  $no++; } ?> 
      <tr>
      <?php } ?>
        <td width="172" height="3" align="center">
        </td>
      </tr>
    </table>
    </td>
    <td height="22">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" id="baris2"><strong>buku terlaris</strong></td>
  </tr>
  <tr>
    <td height="177">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="top" id="anggota">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="26" align="center" id="baris2"><strong>kategori</strong>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" id="baris"><strong>buku baru</strong>
    </td>
  </tr>
  <tr>
    <td rowspan="2" align="left" valign="top" id="anggota">
    <p>&nbsp;</p>
     <a href="non-pemrograman.php"><p>+ Pemrograman</p></a>
      <a href="non-desain.php"><p>+ Desain</p></a>
       <a href="non-networking.php"><p>+ Networking</p></a></td>
    <td height="268">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="top" id="anggota">
    
    <marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount',
3, 0);" direction="up">
    <table width="163" border="0">
      <tr>
      
      <?php include "koneksi.php";
$no=1;
$tampil=mysql_query("select * from barang order by id_buku desc limit 5");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
?>  
        <td width="153" height="150" align="center"><img src="<?php echo $data['gambar']; ?>" border="0" width="130" height="160"/></td>
      </tr>
      <tr>
        <td align="center"><?php echo $data['nama']; ?></td>
      </tr>
      <tr>
        <td height="20" align="center"><input type="submit" value="Beli"></td>
      </tr>
      <tr>
        <td height="7" align="center"></td>
      </tr>
       <?php  $no++; } ?> 
      <?php } ?>
    </table></marquee>
    </td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" id="baris"><strong>testimonial</strong>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" id="baris2"><strong>buku promo</strong></td>
  </tr>
  <tr>
    <td height="189" align="center" valign="top" id="anggota">
<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount',
3, 0);" direction="up">
    <table width="160" height="162" border="0">
  <tr>
<?php include "koneksi.php";
$no=1;
$tampil=mysql_query("select * from testimonial order by id_testimonial desc limit 5");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
?> 
    <td width="143" height="26" align="center" bgcolor="#9933FF"><strong><?php echo $data['nama']; ?> :</strong></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><?php echo $data['testimonial']; ?></td>
  </tr>
   <?php  $no++; } ?> 
      <?php } ?>
</table></marquee>
   
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td rowspan="2" align="center" id="anggota">
    <marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount',
3, 0);" direction="up">
    <table width="163" border="0">
      <tr>
      
      <?php include "koneksi.php";
$no=1;
$tampil=mysql_query("select * from barang where id_kategori='prm'");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
?>  
        <td width="153" height="150" align="center"><img src="<?php echo $data['gambar']; ?>" border="0" width="130" height="160"/></td>
      </tr>
      <tr>
        <td align="center"><?php echo $data['nama']; ?></td>
      </tr>
      <tr>
        <td height="20" align="center"><input type="submit" value="Beli"></td>
      </tr>
      <tr>
        <td height="7" align="center"></td>
      </tr>
       <?php  $no++; } ?> 
      <?php } ?>
    </table></marquee>
    
    </td>
  </tr>
  <tr>
    <td height="20"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>


<div id="footer">
		<img src="footer.png">
Kantor Pusat: JL. Topaz Raya C2 No.12 Permata Puri Media, Jakarta Barat.<br>
Layanan Bantuan: 021-91977730 (Telp Saja) | SMS Saja : 083870009010 | Fax: 021-58350075 | Hubungi Kami <br>
Jam Layanan: Senin - Jumat: 09.00 WIB - 16.00 WIB | Sabtu: 09.00 WIB - 12.00 WIB (Hari Kerja)<br>
©2015 verticalbook.com </div>
</div>

</body>
   </html>
