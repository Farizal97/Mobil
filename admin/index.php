<?php ob_start();

session_start();



if(!$_SESSION[admin]){

header("location:login.php");

}

?>