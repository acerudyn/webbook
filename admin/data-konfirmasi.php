<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Konfirmasi Pembayaran</title>
<style type="text/css">
#welcome{
		width:1000px;
		height:30px;
		background-color:#09C;
		margin-left:7px;
		border-radius:7px;
		background-position:center;	
}

#marque{
		font-family:Arial;
		font-size:17px;
		font-stretch:condensed;
		color:#000;	
		margin-top:5px;
}

#tabel{
		font-family:Arial;
		font-size:13px;
		font-stretch:wider;
		color:#03F;
}

</style>
</head>

<body>
<div id="header" align="center"><img src="header.png"/></div>
<center><div id="welcome"><marquee id="marque">
<strong>Harap Mengupdate data dengan benar dan teliti</strong>
</marquee></div></center>
<table width="1006" height="448" border="0"  bordercolor="#FFFFFF" id="tabel" align="center">
  <tr>
    <td height="7">&nbsp;</td>
    <td colspan="2" rowspan="15" align="right" valign="top">
      <table width="809" height="117" border="0">
        <tr>
        <td colspan="7">&nbsp;</td>
        </tr>
      <tr>
        <td height="27" colspan="7" align="center" bgcolor="#000000"><strong>Data Konfirmasi Pembayaran</strong></td>
        </tr>
      <tr>
        <td width="112" height="27" align="center" bgcolor="#CCCCCC">Nomor Transaksi</td>
        <td width="85" height="27" align="center" bgcolor="#CCCCCC">Username</td>
        <td width="125" height="27" align="center" bgcolor="#CCCCCC">Nama</td>
        <td width="177" align="center" bgcolor="#CCCCCC">Aamat</td>
        <td width="128" height="27" align="center" bgcolor="#CCCCCC">Telepon</td>
        <td width="88" align="center" bgcolor="#CCCCCC">Total</td>
        <td width="64" height="27" align="center" bgcolor="#CCCCCC">Aksi</td>
      </tr>
<?php include "koneksi.php";
$no=1;
$tampil=mysql_query("select * from transaksi_rinci");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
?> 
      <tr>
        <td height="31" align="center"><?php echo $data['notrans']; ?></td>
        <td align="center"><?php echo $data['username']; ?></td>
        <td align="center"><?php echo $data['nama']; ?></td>
        <td align="center"><?php echo $data['alamat']; ?></td>
        <td align="center"><?php echo $data['telepon']; ?></td>
        <td align="center"><?php echo $data['total']; ?></td>
        <td align="center"><a href="hapus-pembayaran.php?hapus=<?php echo $data['notrans']; ?>">-hapus-</a></td>
      </tr>
      <?php $no++; } ?>
  <tr>
 <?php } ?>
  </table></td>
  </tr>
  <tr>
 
    <td width="158" height="33" bgcolor="#CCCCCC"><ul>
      <li><a href="menu-admin.php">Admin</a></li>
    </ul></td>
 <td width="10"></a>
  </tr>
  <tr bgcolor="#00CCFF">
    <td bgcolor="#CCCCCC"><ul>
      <li><a href="data-member.php">Data Member</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td bgcolor="#CCCCCC"><ul>
      <li><a href="produk.php">Katalog Produk</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td bgcolor="#CCCCCC"><ul>
      <li><a href="data-kategori.php">Kategori</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td bgcolor="#CCCCCC"><ul>
      <li><a href="data-provinsi.php">Data Provinsi</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td bgcolor="#CCCCCC"><ul>
      <li><a href="data-berita.php">Berita</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td bgcolor="#CCCCCC"><ul>
      <li><a href="data-testimonial.php">Data Testimonial</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td bgcolor="#CCCCCC"><ul>
      <li><a href="data-konfirmasi.php">Data Konfirmasi</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td bgcolor="#CCCCCC"><ul>
      <li><a href="buku-baru.php">Buku Terbaru</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td bgcolor="#CCCCCC"><ul>
      <li><a href="buku-promo.php">Buku Promo</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td bgcolor="#CCCCCC"><ul>
      <li><a href="buku-terlaris.php">Buku Terlaris</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td height="30" bgcolor="#CCCCCC"><ul>
      <li><a href="data-laporan.php">Laporan</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td height="30" bgcolor="#CCCCCC"><ul>
      <li><a href="login.php">Logout</a></li>
    </ul></td>
  </tr>
  <tr bgcolor="#00CCFF">
    <td height="7
    " bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>

<div id="footer" align="center"><img src="footer.png"/></div>
</body>
</html>