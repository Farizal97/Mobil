<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "elvisdb";
$domain = "http://localhost/elvis/images/";

$connection = mysql_connect($hostname,$username,$password);
mysql_select_db($database,$connection);
?>
