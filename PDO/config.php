<?php


$hostname= "localhost";
$dbname= "PDO";
$dbuser= "root";
$dbuserpassword= "";

$dsn = "mysql:host=$hostname;dbname=$dbname";
 //database sourse name

 $options = array(
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      //SILENT
      //WARNING
 );
 ?>