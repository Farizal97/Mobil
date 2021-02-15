<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
$id2=$id;
$sql = "SELECT * FROM `mobil` WHERE `idmobil`='".$id2."'"; 
$result = mysql_query($sql);
$row=mysql_fetch_array($result);
if ($row['gambar']!="")
	 {
		$gmb=$domain.$row['gambar'];
	  }else{		  
		$gmb=$domain."no-photo.jpg";
	 }
echo '
<strong>'.$row['nama'].'</strong>
<table width="200" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td align="left" valign="top" scope="col"><img src="'.$gmb.'"/></td>
  </tr>
  <tr>
    <td align="left" valign="top" scope="col">
	<tr>
    <td>Tahun Pembuatan <b>'.$row['tahun'].'</b></td>
  </tr>
  <tr>
    <td>Warna <b>'.$row['warna'].'</b></td>
  </tr>
  <tr>
    <td>Jenis <b>'.$row['jenis'].'</b></td>
  </tr>
	</td>
  </tr>
  <tr>
    <td align="left" valign="top" scope="col">'.$row['catatan'].'</td>
  </tr>
</table>';

?>