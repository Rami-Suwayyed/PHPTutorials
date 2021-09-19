<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 <?php
 $arr= array(23,232,313,43,54);

echo "arr[2]:". $arr[2];

echo "<br/>";
echo "arr". print_r($arr);

echo "<br/>";
$arr[2]=314;
echo "arr[2]:". $arr[2];
$arr[]=555;
echo "<br/>";
echo "arr". print_r($arr);

$items= array(1,"Rami",3.4 );
echo "<br/>";
echo "items[1]:". $items[1];

$itemsarray= array(1,"Rami",array(1,44,32,43 ) );
echo "<br/>";
echo "itemsarray[0]:". $itemsarray[1];
echo "<br/>";
echo "itemsarray[2][1]:". $itemsarray[2][1];
echo "<br/>";
 print_r($itemsarray[2]);
 ?>

</body>
</html>