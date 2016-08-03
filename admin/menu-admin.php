<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<center><div id="welcome"><marquee id="marque">Harap Mengupdate data dengan benar dan teliti</marquee></div></center>
<table width="988" height="448" border="0"  bordercolor="#FFFFFF" id="tabel" align="center">
  <tr>
    <td height="7" align="center"><strong>-- Hello, <?php echo $login_session; ?> --</strong></td>
    <td colspan="2" rowspan="15" align="right" valign="top"><form name="form1" method="post" action="simpan-admin.php">
      <table width="530" height="169" border="0" align="center">
        <tr>
          <td colspan="3" align="center" bgcolor="#000000"><strong>Input Admin Baru</strong></td>
          </tr>
        <tr>
          <td width="118">ID</td>
          <td width="34" align="center"><strong>:</strong></td>
          <td width="356">
            <input name="id" type="text" readonly="readonly" /></td>
        </tr>
        <tr>
          <td>Username</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input type="text" name="username" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input type="password" name="password"  /></td>
        </tr>
        <tr>
          <td colspan="3" align="center"><input type="submit" name="simpan"  value="Save" />
            <input type="reset" name="batal" value="Cancel" /></td>
          </tr>
      </table>
    </form>
      <table width="786" height="130" border="0">
        <tr>
        <td height="18" colspan="3" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td height="33" colspan="3" align="center" bgcolor="#000000"><strong>Menu Admin</strong></td>
        </tr>
      <tr>
        <td width="63" height="31" align="center" bgcolor="#CCCCCC">ID</td>
        <td width="55" align="center" bgcolor="#CCCCCC">Username</td>
        <td width="60" align="center" bgcolor="#CCCCCC">Aksi</td>
      </tr>
<?php include "koneksi.php";
$no=1;
$tampil=mysql_query("select * from admin");
$jumlah=mysql_num_rows($tampil);
while($data=mysql_fetch_array($tampil)){
if($tampil){
?>   
      <tr>
        <td height="36" align="center" bgcolor="#FFFFFF"><?php echo $data['id_user']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $data['username']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><strong> <a href="#">Edit</a> | <a href="hapus-admin.php? hapus= <?php echo $data['id_user']?>" >Hapus</a></strong></td>
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