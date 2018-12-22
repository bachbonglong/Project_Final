<?php
$host = ‘localhost’;
$username = ‘root’;
$password = ”;
$dbname = ‘test’;
@mysql_connect($host,$username,$password) or die(“Please check username or password”);
@mysql_select_db($dbname) or die(“Not connected to database”);
?>

