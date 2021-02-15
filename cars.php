
<?php /*?><?php
require("config.php");
?><?php */?>
<p>
<p>
<h1>
<?php
$query="select merek from mobil group by merek";
$result = mysql_query($query);
 echo '<form action="index.php?mod=cars" method="post">
  Merek Mobil 
  <label for="select"></label>
  <select name="select" id="select">';
     while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
           
echo ' <option value='. $row[0].'>'.$row[0].'</option>';
	 }
  echo '</select>';
  echo '<input type="submit" name="submit" id="button" value="Submit" />';
	echo '</form>';
?>

<?php
if(isset($_POST['submit'])) 
{

	$kategori=$_POST['select'];
	$sql = "SELECT * FROM `mobil` WHERE `merek`='".$kategori."'"; 
                 
      $result2 = mysql_query($sql) or die ('Error: '.mysql_error ());
	 while ($row2 = mysql_fetch_array($result2)) {       
	 if ($row2['gambar']!="")
	 {
		 $gmb=$domain.$row2['gambar'];
	  }else{		  
		$gmb=$domain."no-photo.jpg";
	 }
	 
        echo '<p><p><p><table width="200" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <th scope="col"><a href="index.php?mod=carslist&id='.$row2['idmobil'].'"><img src="'.$gmb.'" width="102" height="78" border="0"/></a></th>
  </tr>
  <tr>
    <td>Tahun Pembuatan <b>'.$row2['tahun'].'</b></td>
  </tr>
  <tr>
    <td>Warna <b>'.$row2['warna'].'</b></td>
  </tr>
  <tr>
    <td>Jenis <b>'.$row2['jenis'].'</b></td>
  </tr>
</table>';
       
      }
  
}
?>