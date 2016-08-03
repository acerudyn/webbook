<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Testimonial</title>
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
<?php
include('session.php');
?>
<div id="header" align="center"><img src="header.png"/></div>
<center><div id="welcome"><marquee id="marque">
<strong>Harap Mengupdate data dengan benar dan teliti</strong>
</marquee></div></center>
<table width="1006" height="448" border="0"  bordercolor="#FFFFFF" id="tabel" align="center">
  <tr>
    <td height="7" align="center"><strong>-- Hello, <?php echo $login_session; ?> --</strong></td>
    <td colspan="2" rowspan="15" align="right" valign="top"><table width="810" border="0">
      <tr>
        <td colspan="5">&nbsp;</td>
        </tr>
      <tr>
        <td height="27" colspan="5" align="center" bgcolor="#000000"><strong>Data Testimonial</strong></td>
        </tr>
      <tr>
        <td width="136" height="27" align="center" bgcolor="#CCCCCC">ID Testimonial</td>
        <td width="158" height="27" align="center" bgcolor="#CCCCCC">Nama Member</td>
        <td width="134" height="27" align="center" bgcolor="#CCCCCC">Tanggal</td>
        <td width="267" height="27" align="center" bgcolor="#CCCCCC">Isi Testimonial</td>
        <td width="93" height="27" align="center" bgcolor="#CCCCCC">Aksi</td>
      </tr>
<?php include "koneksi.php";
$no=1;
$tampil=mysql_query("select * from testimonial");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
?> 
      <tr>
        <td height="27" align="center"><?php echo $data['id_testimonial']; ?> </td>
        <td height="27" align="center"><?php echo $data['nama']; ?> </td>
        <td height="27" align="center"><?php echo $data['tanggal']; ?> </td>
        <td height="27" align="center"><?php echo $data['testimonial']; ?> </td>
        <td height="27" align="center"><a href="hapus-testimonial.php? hapus=<?php echo $data['id_testimonial']; ?>">Hapus</a></td>
<?php $no++; } ?>
  <tr>
 <?php } ?>   
      </tr>
    </table></td>
  </tr>
  <tr>
 
    <td width="171" height="33" bgcolor="#CCCCCC"><ul>
      <li><a href="menu-admin.php">Admin</a></li>
    </ul></td>
 </a>
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
      <li><a href="logout-admin.php">Logout</a></li>
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