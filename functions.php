<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 <?php



$results=divv(10,5);


echo "Div:{$results}";

Display();





  function sum($n1,$n2)
 {
 $sum=$n1+$n2;
 echo "Sum:{$sum} <br/>";
 }


 function divv($n1,$n2)
 {
 $sum=$n1/$n2;
return  $sum;
 }

function Display(){
	echo "<br/>Welcome to void functios<br/>";
}

 ?>

 <?php
 sum(4,5);
 sum(43,25);
  sum(42,51);
 ?>

</body>
</html>
