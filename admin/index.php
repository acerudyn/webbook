<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Admin</title>
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
<center><div id="welcome"><marquee id="marque">Silahkan melakukan login</marquee></div></center>
<table width="507" border="0" align="center" id="tabel">
  <tr>
    <th width="518" height="21" align="center">&nbsp;</th>
  </tr>
  <tr>
    <th height="32" align="center" bgcolor="#CCCCCC">Silahkan Melakukan Login</th>
  </tr>
  <tr>
    <td align="center" nowrap="nowrap" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="login-admin.php">
      <table width="457" border="0">
        <tr>
          <td width="129">Username</td>
          <td width="15" align="center">:</td>
          <td width="291">
            <input type="text" name="username" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td align="center">:</td>
          <td>
            <input type="password" name="password"/></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td><input type="submit" name="login" value="Login" />
            <input type="reset" name="batal" value="Cancel" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
  </tr>
</table>

<div id="footer" align="center"><img src="footer.png"/></div>
</body>
</html>