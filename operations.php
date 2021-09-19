<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 <?php
$n1=5;
$n2=10;

echo "sum:".($n1+$n2);

echo "<br/>";
$sum=$n1+$n2;
echo "sum:".$sum;
echo "<br/>";
$mul=$n1*$n2;
echo "mul:".$mul;
echo "<br/>";
$div=$n1/$n2;
echo "div:".$mul;

$results=($n1+$n2)*10;
echo "<br/>";
echo "reuslts:".$results;

//$n1=$n1+10;
$n1+=10;
echo "<br/>";
echo "n1:".$n1;


//$n1=$n1+1;
 $n1++;
echo "<br/>";
echo "n1:".$n1;

//$n1=$n1-1;
 $n1--;
echo "<br/>";
echo "n1:".$n1;
echo "<br/>";
echo "n2:".$n2;
$results=($n1+++$n2)*10;
echo "<br/>";
echo "reuslts:".$results;
echo "<br/>";
echo "n1:".$n1;
 ?>
 
</body>
</html>