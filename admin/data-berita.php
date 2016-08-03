<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Berita</title>
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
    <td colspan="2" rowspan="15" align="right" valign="top"><table width="810" border="0">
<form action="" method="post">
      <tr>
        <td colspan="3">&nbsp;</td>
        </tr>
      <tr>
        <td width="252" height="26" align="center" bgcolor="#000000"><strong>Menu Berita</strong></td>
        <td colspan="2" align="center" bgcolor="#CCCCCC"><strong>Tambah Berita</strong></td>
        </tr>
      <tr>
        <td height="31">Judul</td>
        <td width="321" valign="middle">
          <input name="judul" type="text" id="judul" size="50" maxlength="50" />
        </td>
        <td width="215">&nbsp;</td>
      </tr>
      <tr>
        <td height="29" valign="top">Berita</td>
        <td height="31">
          <textarea name="berita" id="berita" cols="47" rows="5"></textarea>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="26">&nbsp;</td>
        <td>
          <input type="submit" name="simpan" value="save" />
          <input type="reset" value="cancel" />
      </td>
</form>
        <td>&nbsp;</td>
      </tr>
    </table>
      <table width="810" border="0">
        <tr>
          <td height="31" colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td height="25" align="center" bgcolor="#CCCCCC"><strong>Tanggal </strong></td>
          <td align="center" bgcolor="#CCCCCC"><strong>Judul</strong></td>
          <td align="center" bgcolor="#CCCCCC">Berita</td>
          <td align="center" bgcolor="#CCCCCC">Aksi</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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