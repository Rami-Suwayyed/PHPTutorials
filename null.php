<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <h1> Null part </h1>
 <?php
$var1="Rami";
$var2=null;
$var3="";
 ?>

var 1 is null <?php echo is_null($var1) ; ?> <br/>
var 2 is null <?php echo is_null($var2) ; ?> <br/>
var 3 is null <?php echo is_null($var3) ; ?> <br/>


var 1 is set <?php echo isset($var1) ; ?> <br/>
var 2 is set <?php echo isset($var2) ; ?> <br/>
var 3 is set <?php echo isset($var3) ; ?> <br/>
var 4 is set <?php echo isset($var4) ; ?> <br/>

<h1> Boolean part </h1>
is Married booles?
<?php
$is_married=false;
echo is_bool($is_married);
?>
<h1> float part </h1>
is pi float?
<?php
$pi=3.14;
echo is_float($pi);
?>
</br>
is married float?
<?php
echo is_float($is_married);
?>

</body>
</html>