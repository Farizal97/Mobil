<?
error_reporting(0);
ob_start();
session_start();
$user=$_SESSION["user"];
//echo($user);
if(empty($num_rows)) 
{

}
else
{
Session_register("user");
$_SESSION["user"] = $user; 
header('location:index.php');
}
?>