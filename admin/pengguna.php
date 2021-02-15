<?php
session_start();
$user=$_SESSION["user"];
?>
<?php
if(isset($_POST['Submit']))  
 {
	 $userid = $user;

     $pass = md5($_POST[pass1]);
	 
	 $query = "SELECT usernames, passwords FROM admin_rs where usernames='".$user."' and passwords='".$pass."'";
	 $line = mysql_fetch_row($query);
		
		
       if ( $line >= 0)
		{
		$sql2="Update admin_rs Set passwords='".md5($pass2)."'  WHERE `usernames`='".$user."'";
		mysql_query($sql2) or die(mysql_error());
		echo "password diupdate<br>";
		{ 
		}
		}
 }
?>
Ubah Password :
<form name="form1" method="post" action="">
  <table width="365" border="0" cellspacing="3" cellpadding="3">
    <tr>
      <td align="left" valign="top" scope="col">Password</td>
      <td align="left" valign="top" scope="col"><label for="pass1"></label>
      <input type="password" name="pass1" id="pass1"></td>
    </tr>
    <tr>
      <td align="left" valign="top">Ulangi Password</td>
      <td align="left" valign="top"><input type="password" name="pass2" id="pass2"></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><label for="pass2">
        <input type="submit" name="Submit" id="Submit" value="Submit">
      </label></td>
    </tr>
  </table>
</form>

