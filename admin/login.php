
<?php 

include "config.php";
?>

<html>
<head>
<title>Administration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style4 {color: #9999FF;
text-decoration:none;}
.style5 {font-size: 18px}
-->
</style>
</head>
<link href="style.css" type="text/css" rel="stylesheet">
<script language="javascript" >
 function FieldBlank()
{ 	 
		
		if(faq.userid.value =="")
	  {	alert("Enter User Name");
		document.faq.userid.focus();
		return false;}
		
		if(faq.pass.value =="")
	  {	alert("Enter Password");
		document.faq.pass.focus();
		return false;}
	
		
}
</script>




<body>

<form action="pass.php" method="post" name="faq" onSubmit="return FieldBlank()">
<center><br><br><br><br><br><br><br>
  <TABLE width="367" >
    <tr>
      <td height='38' colspan='2' align='center' valign="bottom" background="../images/Untitl.gif" class="style2 style5"> Admin Login </td>
    </tr>
    <tr>
      <td height='24' colspan="2" align="center"><strong>
        <?php

			 

				$action=$_GET[action];

				if($action == 'error'){

				?>
        <span class="link2">Sorry your ID or Password didn't match!</span>
        <?php } ?>
      </strong></td>
    </tr>
    <tr>
      <td width="124" height='24' align="right"> User Name :</td>
      <td width="231" align="left" ><input name='userid' type='text' maxlength='28' size='30' >
      </td>
    </tr>
    <tr>
      <td height='24' align="right"> Password :</td>
      <td align="left"><input name='pass' type='password' maxlength='28' size='30' >
      </td>
    </tr>
    <tr>
      <td height='18' colspan='2' align='center' ><input name='Submit' type='submit' class="link"  id='Submit' value='Submit' >
      </td>
    </tr>
    <tr>
      <td height='18' colspan='2' align='left' >&nbsp;</td>
    </tr>
  </TABLE>
  <br>
</center>
</form>
<center><br><br><br>
  <br>
</center>

</body>
</html>
