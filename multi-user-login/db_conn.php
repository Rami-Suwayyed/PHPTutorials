<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "multi_login";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}