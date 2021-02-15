<?php
require("config.php");
$host=$hostname; 
$username=$username; 
$password=$password; 
$db_name=$database; 
$tbl_name="guestbook"; 

if(isset($_POST['Submit']))
{
error_reporting(0);


$name =  strtoupper(trim($_REQUEST['name']));
$work = strtoupper(trim($_REQUEST['work']));
$email = strtolower(trim($_REQUEST['email']));
$comment =$_REQUEST['comment'];


$datetime=date("y-m-d h:i:s"); 

$sql="INSERT INTO $tbl_name(name,telepon,email, comment, datetime)VALUES('$name','$work', '$email', '$comment', '$datetime')";
$result=mysql_query($sql) or die(mysql_error());


if($result){
echo "<h2>Comment is Successfully saved in the Database.</h2>";
echo "<BR>";
echo "<a href='view.php'>View guestbook</a>"; 
}

else {
echo "ERROR";
}
}

?>
<style type="text/css">
<!--
.style2 {
	color:#000;
	font-weight: bold;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color:#000; }
.style5 {font-family: Arial, Helvetica, sans-serif}
.style6 {color: #000}
.style7 {font-family: Arial, Helvetica, sans-serif; color: #000; }
-->
</style>
<table width="455" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td><div align="center" class="style1 style2">BUKU TAMU </div></td>
</tr>
</table>
<table width="455" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="?mod=guestbook">
<td bgcolor="#FFFFFF">
<table width="425" border="0" cellpadding="3" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
<tr>
<td width="110" bgcolor="#FFFFFF"><span class="style2">Nama</span></td>
<td width="6" bgcolor="#FFFFFF"><span class="style2"><strong>:</strong></span></td>
<td width="287" bgcolor="#FFFFFF"><input name="name" type="text" id="name" size="40" /></td>
</tr>
<tr>
<td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="style2">Telepon</span></td>
<td bgcolor="#FFFFFF"><span class="style2"><strong>:</strong></span></td>
<td bgcolor="#FFFFFF"><input name="work" type="text" id="work" size="40" /></td>
</tr>

<tr>
<td bgcolor="#FFFFFF"><span class="style2">Email</span></td>
<td bgcolor="#FFFFFF"><span class="style2"><strong>:</strong></span></td>
<td bgcolor="#FFFFFF"><input name="email" type="text" id="email" size="40" /></td>
</tr>
<tr>
<td valign="top" bgcolor="#FFFFFF"><span class="style2">Pesan</span></td>
<td valign="top" bgcolor="#FFFFFF"><span class="style2"><strong>:</strong></span></td>
<td bgcolor="#FFFFFF"><textarea name="comment" cols="40" rows="3" id="comment"></textarea></td>
</tr>
<tr>
<td bordercolor="#0000FF" bgcolor="#FFFFFF">&nbsp;</td>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td bordercolor="#0000FF" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<table width="455" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td></td>
</tr>
</table>

<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td></td>
</tr>
</table>
<br>
<?php
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

while($rows=mysql_fetch_array($result)){
?>
<table width="460" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="460" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr><br>

<td bgcolor="#FFFFFF"><span class="style4">ID</span></td>
<td bgcolor="#FFFFFF"><div align="center" class="style4">:</div></td>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
</tr>
<tr>
<td width="117" bgcolor="#FFFFFF"><span class="style4">Name</span></td>
<td width="14" bgcolor="#FFFFFF"><div align="center" class="style2">:</div></td>
<td width="357" bgcolor="#FFFFFF">
<?php echo "<b>".$rows['name']."</b>";?></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><span class="style4">Work</span></td>
<td bgcolor="#FFFFFF"><div align="center" class="style2">:</div></td>
<td bgcolor="#FFFFFF">
<?php echo "<b>".$rows['telepon']."</b>"; ?></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><span class="style4">Email Address</span></td>
<td bgcolor="#FFFFFF"><div align="center" class="style2">:</div></td>
<td bgcolor="#FFFFFF"><?php echo $rows['email']; ?></td>
</tr>
<tr>
<td valign="top" bgcolor="#FFFFFF"><span class="style4">Comments</span></td>
<td valign="top" bgcolor="#FFFFFF"><div align="center" class="style2">:</div></td>
<td bgcolor="#FFFFFF"><?php echo $rows['comment']; ?></td>
</tr>
<tr>
<td valign="top" bgcolor="#FFFFFF"><span class="style4">Date/Time </span></td>
<td valign="top" bgcolor="#FFFFFF"><div align="center" class="style2">:</div></td>
<td bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>
<?php
}
?>

