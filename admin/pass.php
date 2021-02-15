<? ob_start();

session_start();



include("config.php");



$userid = $_POST[userid];

$pass = md5($_POST[pass]);


 if (isset($userid) and ($userid <> "") and isset($pass) and ($pass <> "")) 
 { 
		
		$query = "SELECT usernames, passwords FROM admin_rs where usernames='$userid' and passwords='$pass'";
		$result = mysql_query($query) or die("Query failed1");

		$line = mysql_fetch_array($result);
		
		
        if ( ($line[0] == $userid) && ($line[1] == $pass) )
		{ 
		     $date = date("Y-m-d h:i:s");
           
           
                          Session_register("user");
                         $_SESSION["user"] = $userid; 
                        

           header("location:admin.php");

             } 
	     else
          {

         header("location:../admin.php?action=error");

            }

}

?>