<?php
define ("MAX_SIZE","2000"); 

 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 
 $errors=0;
?>
<?php

 if(isset($_POST['Submit']))  
 {
 	
 	$image=$_FILES['image']['name'];
 	
 	if ($image) 
 	{
 	
 		$filename = stripslashes($_FILES['image']['name']);
 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		
 			echo '<h1>Unknown extension!</h1>';
 			$errors=1;
 		}
 		else
 		{

 $size=filesize($_FILES['image']['tmp_name']);


if ($size > MAX_SIZE*1024)
{
	echo '<h1>You have exceeded the size limit!</h1>';
	$errors=1;
}


$image_name=time().'.'.$extension;

$newname="../images/".$image_name;

$copied = copy($_FILES['image']['tmp_name'], $newname);
if (!$copied) 
{
	echo '<h1>Copy unsuccessfull!</h1>';
	$errors=1;
}}}}


  if(isset($_POST['Submit']) && !$errors) 
 {
	 $sql="Insert into mobil (idmobil,merek,nama,tahun,warna,jenis,gambar,catatan) values ('".$idmobil."','".$merek."','".$nama."','".$tahun."','".$warna."','".$jenis."','".$newname."','".$catatan."')";
	 mysql_query($sql) or die(mysql_error());
 	//echo "<h1>File Uploaded Successfully! Try again!</h1>";
 }

 ?>
 
 <?php
 $image=$_FILES['image']['name'];
 	
 	if ($image) 
 	{
 	
 		$filename = stripslashes($_FILES['image']['name']);
 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		
 			echo '<h1>Unknown extension!</h1>';
 			$errors=1;
 		}
 		else
 		{

 $size=filesize($_FILES['image']['tmp_name']);


if ($size > MAX_SIZE*1024)
{
	echo '<h1>You have exceeded the size limit!</h1>';
	$errors=1;
}


$image_name=time().'.'.$extension;

$newname="../images/".$image_name;

$copied = copy($_FILES['image']['tmp_name'], $newname);
if (!$copied) 
{
	echo '<h1>Copy unsuccessfull!</h1>';
	$errors=1;
}}}
 if(isset($_POST['USubmit'])  && !$errors)  
 {
	$id4=$id;
	$sqlupdate="Update mobil Set merek='".$merek."',nama='".$nama."',tahun='".$tahun."',warna='".$warna."',jenis='".$jenis."',gambar='".$newname."',catatan='".$catatan."' WHERE `idmobil`='".$id4."'";
	mysql_query($sqlupdate) or die(mysql_error());
	 echo "Data telah diupdate";
 }
 ?>
 <?php
 if(isset($_POST['DSubmit']))  
 {
	 $id3=$id;
$sqlhapus = "DELETE FROM `mobil` WHERE `idmobil`='".$id3."'"; 
	 mysql_query($sqlhapus) or die(mysql_error());
	 echo "Data telah dihapus";
 }
 ?>
<script language="javascript" >
 
	  function Blank_TextField_Validator()
{ 	 
            var checkChar=/^[\w \'\-.]+$/
        if(style.style_name.value =="")
	  {	alert("Data tidak benar");
		document.style.style_name.focus();
		return false;}	
      
	  if(style.style_name.value =="")
	  {	alert("Data tidak benar");
		document.style.style_name.focus();
		return false;}	
		
		if(style.style_name.value =="")
	  {	alert("Data tidak benar");
		document.style.style_name.focus();
		return false;}	
		
		if(style.style_name.value =="")
	  {	alert("Data tidak benar");
		document.style.style_name.focus();
		return false;}	
		
}		



</script>
<?php
if (!isset($act) && ($scr!="add"))
{
	echo '
<form name="style" action="admin.php?page=mobil&scr=add" method="post" enctype="multipart/form-data" onSubmit="return Blank_TextField_Validator()">
              <table width="85%" border="0" align="center" cellpadding="2" cellspacing="0">
                <tr>
                  <td align="right" class="codefont">&nbsp;</td>
                  <td align="center" class="headline">&nbsp;</td>
                  <td class="codefont">&nbsp;</td>
                </tr>
				<tr>
                  <td width="21%" align="right" class="codefont">ID Mobil </td>
                  <td width="1%" align="center" class="headline">:</td>
                  <td width="78%" class="codefont"><input type="text" name="idmobil" size="20" id="idmobil" >
                  </td>
                </tr>
                <tr>
                  <td width="21%" align="right" class="codefont">Merek </td>
                  <td width="1%" align="center" class="headline">:</td>
                  <td width="78%" class="codefont"><input type="text" name="merek" size="20" id="merek" >
                  </td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Nama</td>
                  <td align="center" class="headline">:</td>
                  <td class="codefont"><input name="nama" type="text" id="nama" size="40"></td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Tahun</td>
                  <td align="center" class="headline">:</td>
                  <td class="codefont"><input name="tahun" type="text" id="tahun" size="10"></td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Warna</td>
                  <td align="center" class="headline">:</td>
                  <td class="codefont"><input name="warna" type="text" id="warna" size="15"></td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Jenis</td>
                  <td align="center" class="headline">:</td>
                  <td class="codefont"><input name="jenis" type="text" id="jenis" size="20"></td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Keterangan</td>
                  <td align="center" class="headline">:</td>
                  <td class="codefont"><textarea name="catatan" cols="50" id="catatan"></textarea></td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Image</td>
                  <td align="center" class="headline">: </td>
                  <td class="codefont"><input name="image" type="file" size="40"></td>
                </tr>
                <tr>
                  <td class="codefont">&nbsp;</td>
                  <td align="center" class="headline">&nbsp;</td>
                  <td class="codefont"><span class="style16"><?php echo  $msg; ?></span></td>
                </tr>
                <tr>
                  <td colspan="3" align="center" class="codefont">
                          
							 
                            <input name="Submit" type="submit" class="button" id="Submit2" value="Add" >
                           </td>
                </tr>
              </table>
            </form>';

		

}else{
$id2=$id;
$sql = "SELECT * FROM `mobil` WHERE `idmobil`='".$id2."'"; 
$result = mysql_query($sql);
$row=mysql_fetch_array($result);
	echo '
<form name="style" action="admin.php?page=mobil&id='.$id2.'&act=fit&scr=edt" method="post" enctype="multipart/form-data" onSubmit="return Blank_TextField_Validator()">
              <table width="85%" border="0" align="center" cellpadding="2" cellspacing="0">
                <tr>
                  <td align="right" class="codefont">&nbsp;</td>
                  <td align="center" class="headline">&nbsp;</td>
                  <td class="codefont">&nbsp;</td>
                </tr>
                <tr>
                  <td width="21%" align="right" class="codefont">Merek </td>
                  <td width="1%" align="center" class="headline">:</td>
                  <td width="78%" class="codefont"><input type="text" name="merek" size="20" id="merek" value="'.$row['merek'].'" >
                  </td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Nama</td>
                  <td align="center" class="headline">:</td>
                  <td class="codefont"><input name="nama" type="text" id="nama" size="40" value="'.$row['nama'].'"></td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Tahun</td>
                  <td align="center" class="headline">:</td>
                  <td class="codefont"><input name="tahun" type="text" id="tahun" size="10" value="'.$row['tahun'].'"></td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Warna</td>
                  <td align="center" class="headline">:</td>
                  <td class="codefont"><input name="warna" type="text" id="warna" size="15" value="'.$row[warna].'"></td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Jenis</td>
                  <td align="center" class="headline">:</td>
                  <td class="codefont"><input name="jenis" type="text" id="jenis" size="20" value="'.$row['jenis'].'"></td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Keterangan</td>
                  <td align="center" class="headline">:</td>
                  <td class="codefont"><textarea name="catatan" cols="50" id="catatan" >'.$row['catatan'].'</textarea></td>
                </tr>
                <tr>
                  <td align="right" class="codefont">Image</td>
                  <td align="center" class="headline">: </td>
                  <td class="codefont"><input name="image" type="file" size="40"></td>
                </tr>
                <tr>
                  <td class="codefont">&nbsp;</td>
                  <td align="center" class="headline">&nbsp;</td>
                  <td class="codefont"><span class="style16"><?php echo  $msg; ?></span></td>
                </tr>
                <tr>
                  <td colspan="3" align="center" class="codefont"><input name="USubmit" type="submit" class="button" value="Update" >
							
                            <input name="DSubmit" type="submit" class="button" value="Delete" >                          							                           
                           </td>
                </tr>
              </table>
            </form>';
}

?>
<?php
$sql = "SELECT * FROM `mobil`"; 
   
   echo '<table width="200" border="0" cellspacing="2" cellpadding="2">';
      $result2 = mysql_query($sql) or die ('Error: '.mysql_error ());
	 while ($row2 = mysql_fetch_array($result2)) {       
	 if ($row2['gambar']!="")
	 {
		 $gmb=$domain.$row2['gambar'];
	  }else{		  
		$gmb=$domain."no-photo.jpg";
	 }
	 
        echo '<p><p><p>
  <tr>
    <th scope="col"><a href="admin.php?page=mobil&id='.$row2['idmobil'].'&act=fit"><img src="'.$gmb.'" width="102" height="78" border="0"/></a></th>
  </tr>
  <tr>
    <td>Tahun Pembuatan <b>'.$row2['tahun'].'</b></td>
  </tr>
  <tr>
    <td>Warna <b>'.$row2['warna'].'</b></td>
  </tr>
  <tr>
    <td>Jenis <b>'.$row2['jenis'].'</b></td>
  </tr>';
	 }
	 echo '</table>';
?>

