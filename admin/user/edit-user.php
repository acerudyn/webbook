  <!doctype html>
 <html lang="id">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width intial-scale=1.0">
<link rel="stylesheet" type="text/css" href="Style-member.css"/>
<title>Pendaftaran</title>
<script type=”text/javascript”>
window.onload = function () {
document.getElementById(“password1”).onchange = validatePassword;
document.getElementById(“password2”).onchange = validatePassword;
}
function validatePassword(){
var pass2=document.getElementById(“password2”).value;
var pass1=document.getElementById(“password1”).value;
if(pass1!=pass2)
document.getElementById(“password2”).setCustomValidity(“Passwords Tidak Sama”);
else
document.getElementById(“password2″).setCustomValidity(”);}
//VALIDASI PENDAFATRAN
function validTextbox()
{
 if (document.form1.nama.value == "") 
 {
  alert("Nama Tidak Boleh Kosong!");
 }
}

function validCombobox()
{
 if (document.latihan.combobox.value == "") 
 {
  alert("Combobox masih kosong");
 }
}


</script>
</head>

<body>
<?php
include('session.php');
?>
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
<li><a href="home.php">Halaman Utama</a></li>
<li><a href="#">Anggota</a>
    <ul>
       <li><a href="lupapwd.php">Lupa Password</a></li>
    <li><a href="lihat-profil.php">Lihat Profil</a></li>
    </ul>
</li>
<li><a href="#2">Lihat Buku</a>
    <ul>
    <li><a href="buku-baru.php">Buku Baru</a></li>
    <li><a href="buku-terlaris.php">Buku Terlaris</a></li>
    <li><a href="buku-promo.php">Buku Promo</a></li>
    </ul>
</li>
<li><a href="#3">Transaksi</a>
    <ul>
    <li><a href="keranjang.php">Keranjang Belanja</a></li>
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
<li><a href="logout-user.php">Log Out</a>
</ul>
</div>
        
<!--slider-->
<div id="slider">
   <img src="slider.jpg">
 </div>      

<table width="1014" border="0" id="tabel">
  <tr>
    <td colspan="5">&nbsp;</td>
    </tr>
  <tr>
    <td width="196" rowspan="2" align="center" valign="top"><div id="login">
    	<table width="200" height="128" border="0">
        <tr>
          <td height="73" align="center" valign="top" bgcolor="#E9E9E9"><img src="icon-user-default.png" width="80px" height="80"></td>
<?php
include "koneksi.php";
$tampil=mysql_query("SELECT * FROM pelanggan WHERE username= '".$_SESSION['login']."'");
$data=mysql_fetch_array($tampil);
?> 
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#E9E9E9">Hey... <strong><?php echo $data['nama']; ?> </strong></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#E9E9E9">Username : <strong><?php echo $data['username']; ?></strong></td>
        </tr>
       
      </table>
</div></td>
    <td height="33">&nbsp;</td>
<?php
include"koneksi.php";
$tampil=mysql_query("SELECT * FROM pelanggan WHERE username= '".$_SESSION['login']."'");
$data = mysql_fetch_array($tampil);
?>    
    <td width="556" rowspan="14" align="center" valign="top" >
        <form name="form1" id="form1" method="post" action="update-user.php">
          <table width="556" height="417" border="0">
        <tr>
          <td height="30" colspan="3" align="center" bgcolor="#CCCCCC"><strong>- - - Edit Profil - - -</strong></td>
          </tr>      
        <tr>
          <td>Nama</td>
          <td align="center"><strong>:</strong></td>
          <td><input type="hidden"  name="id_pelanggan" value="<?php echo $data['id_pelanggan']; ?>">
            <input name="nama" type="text"  value="<?php echo $data['nama']; ?>" size="35" maxlength="35">
            </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input name="alamat" type="text"  value="<?php echo $data['alamat']; ?>" size="50" maxlength="50" ></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <select name="jenis_kelamin" id="select">
            <option value="" selected="selected" name="provinsi">-Jenis Kelamin-</option>
          <option name="jenis_kelamin" value="Laki - Laki">Laki-Laki</option>
          <option name="jenis_kelamin" value="Perempuan">Perempuan</option>
            </select>          </tr>
        <tr>
          <td width="158">Provinsi</td>
          <td width="21" align="center"><strong>:</strong></td>
          <td width="355"><input name="provinsi" type="text"  value="<?php echo $data['provinsi']; ?>" ></td>
        </tr>
        <tr>
          <td>Telepon</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input name="telepon" type="text" id="telepon" value="<?php echo $data['telepon']; ?>" ></td>
        </tr>
        <tr>
          <td>Email</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input name="email" type="email"  value="<?php echo $data['email']; ?>" size="30" maxlength="30"></td>
        </tr>
        <tr>
          <td height="24" colspan="3" bgcolor="#CCCCCC">&nbsp;</td>
          </tr>
        <tr>
          <td>Username</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input name="username" type="text"  value="<?php echo $data['username']; ?>"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input name="password" type="text"  value="<?php echo $data['password']; ?>"></td>
        </tr>
        <tr>
          <td>Konfirmasi Password</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input name="konfirmasi_pwd" type="text"  value="<?php echo $data['konfirmasi_pwd']; ?>"></td>
        </tr>
        <tr>
          <td height="38" colspan="3">
          <input type="submit" name="simpan"  value="save">
              <input type="reset" name="batal"  value="cancel"></td>
          </tr>
      </table>
    </form>
    <td>&nbsp;</td>
    <td align="center" id="baris"><strong>keranjang belanja</strong></td>
  </tr>
  <tr>
    <td width="17" height="137">&nbsp;</td>
    <td width="15">&nbsp;</td>
    <td width="196" align="center" valign="top" id="anggota"></td>
  </tr>
  <tr>
    <td height="36" align="center" id="baris"><strong>member</strong></td>
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
$tampil=mysql_query("select * from pelanggan order by id_pelanggan limit 5");
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
      <a href="pemrograman.php"><p>+ Pemrograman</p></a>
      <a href="desain.php"><p>+ Desain</p></a>
       <a href="networking.php"><p>+ Networking</p></a>
    
    </td>
    <td height="268">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="top" id="anggota">
    <marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount',
3, 0);" direction="up">
    <table width="163" border="0">
      <tr>
      
      <?php include "koneksi.php";
$no=1;
$tampil=mysql_query("select * from barang order by id_buku limit 5");
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
$tampil=mysql_query("select * from testimonial order by id_testimonial limit 5");
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
