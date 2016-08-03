<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Produk</title>
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
    <td colspan="2" rowspan="15" align="center" valign="top"><form name="form1" method="post" action="simpan-produk.php" enctype="multipart/form-data">
      <table width="628" height="296" border="0" align="center">
        <tr>
          <td height="34" colspan="3" align="center" bgcolor="#000000"><strong>Input Data Produk</strong></td>
          </tr>
        <tr>
          <td height="18">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="131">Nama Buku</td>
          <td width="26" align="center"><strong>:</strong></td>
          <td width="449">
            <input type="text" name="nama" /></td>
        </tr>
        <tr>
          <td><p>Deskripsi</p></td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input type="text" name="deskripsi" /></td>
        </tr>
        <tr>
          <td>Pengarang</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input type="text" name="pengarang" /></td>
        </tr>
        <tr>
          <td>kategori</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <select name="kategori">
            <option value="">Silahkan Pilih</option>  
             <option value="prg">Pemrograman</option>  
             <option value="dsn">Desain</option>  
             <option value="ntw">Networking</option>  
             <option value="prm">Promo</option>  
            </select></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input type="text" name="harga"/></td>
        </tr>
        <tr>
          <td>Stok</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input type="text" name="stok" /></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td align="center"><strong>:</strong></td>
          <td>
            <input type="file" name="gambar" /></td>
        </tr>
        <tr>
          <td colspan="3" align="center"><input type="submit" name="Simpan" value="Simpan" />
            <input type="reset" name="batal" value="Batal" /></td>
          </tr>
      </table>
    </form>
    
      <table width="814" height="108" border="0">
        <tr>
        <td height="7" colspan="9">&nbsp;</td>
        </tr>
      <tr>
        <td height="27" colspan="9" align="center" bgcolor="#000000"><strong>Menu Data Produk</strong></td>
        </tr>
      <tr>
        <td height="27" align="center" bgcolor="#CCCCCC">ID</td>
        <td height="27" align="center" bgcolor="#CCCCCC">Nama Produk</td>
        <td height="27" align="center" bgcolor="#CCCCCC">Deskripsi</td>
        <td height="27" align="center" bgcolor="#CCCCCC">Kategori</td>
        <td height="27" align="center" bgcolor="#CCCCCC">Harga</td>
        <td height="27" align="center" bgcolor="#CCCCCC">Pengarang</td>
        <td height="27" align="center" bgcolor="#CCCCCC">Stok</td>
        <td height="27" align="center" bgcolor="#CCCCCC">Gambar</td>
        <td height="27" align="center" bgcolor="#CCCCCC">Aksi</td>
      </tr>
      <tr>
      
<?php
	include "koneksi.php";
	$per_hal=3;
	$jumlah_record=mysql_query("SELECT COUNT(*) from barang");
	$jum=mysql_result($jumlah_record, 0);
	$halaman=ceil($jum / $per_hal);
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start = ($page - 1) * $per_hal;
?>
      
      <?php 
	  include "koneksi.php";
	$query=mysql_query("select * from barang order by id_buku desc limit $start, $per_hal");
	while($data=mysql_fetch_array($query)){
?>      
      
        <td height="27" align="left"><?php echo $data['id_buku']; ?> </td>
        <td height="27" align="left"><?php echo $data['nama']; ?></td>
        <td height="27" align="left"><?php echo $data['deskripsi']; ?></td>
        <td height="27" align="left"><?php echo $data['id_kategori']; ?></td>
        <td height="27" align="left"><?php echo $data['harga']; ?></td>
        <td height="27" align="left"><?php echo $data['pengarang']; ?></td>
        <td height="27" align="left"><?php echo $data['stok']; ?></td>
        <td height="27" align="center"><img src="user/<?php echo $data['gambar']; ?>" border="0" width="80" height="100"/> </td>
        <td height="27" align="center">
<a href="produk.php? id=<?php echo $data['id_buku']?>">Edit</a> | <a href="hapus-produk.php? hapus=<?php echo $data['id_buku']?>">Hapus</a></td>  
      </tr>
<?php
	}
?>   
  </table>
<span id="page">
<a href="?page=<?php echo $page -1 ?>"> < </a>
<?php 
 
for($x=1;$x<=$halaman;$x++){
	?>
	<a href="?page=<?php echo $x ?>"><?php echo $x ?> </a> 
	<?php 
}
?> >
	</span>
   </td>
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