<?php
require("config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CV. ELEGANCE MOTOR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="images/cars-icon.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body><div id="content"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">&nbsp;</td>
    <td width="766" valign="top">
	<table width="766" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td class="top" height="69" valign="top">
		<div class="menu"><a href="index.php">Home</a><a href="?mod=cars">Showroom</a><a href="?mod=guestbook">Buku Tamu</a><a href="?mod=kontak">Kontak</a><a href="admin.php">Admin</a></div></td>		
	  </tr>
	  <tr>
	    <td valign="top" class="m2bg">&nbsp;</td>
	    </tr>
	  <tr>
	    <td valign="top" class="m2bg">
        <marquee align="left">Selamat Datang di website CV. ELEGANCE MOTOR</marquee>
        </td>
	    </tr>
	  <tr>
		<td valign="top" width="455" class="m2bg">
		  
		  <table width="100%" border="0" cellspacing="2" cellpadding="2">
		    <tr>
		      <td width="79%" align="left" valign="top" scope="col"><?php
        if ($mod !="")
		{
			require($mod.".php");
		}else{
			require("welcome.php");
		}
        ?></td>
		      <td width="21%" align="left" valign="top" scope="col"><img src="images/imgad.jpg" width="160" height="600"></td>
		      </tr>
		    </table>
		  <img src="images/banner_cars.jpg" width="765" height="154"><br /></td>
	  </tr>
	   <tr>
		<td valign="top"><center>
		  ELVIS 060510115261880
		                </center></td>		
	  </tr>
	  <tr>
		<td height="268" valign="top" class="bottom">&nbsp;</td>		
	  </tr>
	</table>
	</td>
    <td width="50%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
