<?php 
require("config.php");
error_reporting(0);
include"session.php";

if(empty($user)) 
{

header("location:index.php");

}
?>
<html>
<head>
<title> Administration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style3 {
	font-family: "Trebuchet MS";
	font-size: 16px;
	color: #000000;
	line-height:30px;
	font-weight:bold;
}
.style8 {font-size: large}
.style13 {color: #FF0000; font-weight: bold; }
.style12 {	font-family: "Trebuchet MS";
	font-size: 16px;
	color: #000000;
	line-height:30px;
}
.style16 {color: #FF0033}
.style17 {
	font-size: 16px;
	font-weight: bold;
}
-->
</style>

 

</head>
 <link href="style.css" type="text/css" rel="stylesheet">
<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EBEBEB">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><span class="headline">
    </span></td>
  </tr>
  <tr>
    <td align="center"><span class="style8">Admin Panel </span></td>
  </tr>
  <tr>
    <td align="right"><a href="../index.php" target="_blank" class="red">View Website</a></td>
  </tr>
  <tr>
    <td><table width="900"  height="162" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="21%" height="27" align="center" bgcolor="#B1B1B1" class="style3"><a href="admin.php" class="codefont">Index</a></td>
        <td colspan="2" align="center" bgcolor="#5A5A5A" class="Subheader"></td>
      </tr>
      <tr>
        <td height="108" align="center" valign="top" bgcolor="#AFAFAF" class="style3"><table width="96%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" class="codefont"><a href="admin.php?page=mobil">Data Mobil</a></td>
          </tr>
          <tr>
            <td align="center" class="codefont"><a href="admin.php?page=pengguna">My Account</a></td>
          </tr>
          <tr>
            <td align="center" class="codefont"><a href="logout.php" class="red">Log Out</a></td>
          </tr>
        </table></td>
        <td width="1%" align="left" bgcolor="#535353">&nbsp;</td>
        <td width="78%" align="left"><table width="100%" height="134" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="70">
             <?php
        if ($page !="")
		{
			require($page.".php");
		}
        ?>
            </td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="right" valign="top"> &nbsp;&nbsp;&nbsp;</td>
          </tr>
        </table>
              <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="27" align="center" bgcolor="#AFAFAF" class="style3">&nbsp;</td>
        <td colspan="2" align="right" bgcolor="#AFAFAF">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<br><br>
<br>


<center>
</center>

</body>
</html>