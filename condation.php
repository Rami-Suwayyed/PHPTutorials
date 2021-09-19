<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <h1>Simple if-else statement</h1>
 <?php
$var1=23;
$var2=20;

if( $var1>$var2)
{
	echo "number 1 is bigger than n2";
}
else
{

		echo "number 2 is bigger than n1";
}


 ?>
<h1>complex if-else statement</h1>
 <?php
$maxv=100;
$minv=1;
$input=101;
if( ($input>=$minv) && ($input<=$maxv)   )
{
	echo "input is in the range 1- to 100";
}
else
{

		echo "input is out the range 1- to 100";
}


 ?>
</body>
</html>