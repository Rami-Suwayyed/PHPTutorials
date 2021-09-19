<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h6>Array elements:</h6>
 <?php
$numbers = array(1,10,5,20,15,60,8,27);
echo print_r($numbers );
 ?>
<br>
 Max number: <?php    echo max($numbers );   ?>
 <br>
 Min number: <?php    echo min($numbers );   ?>
 <br>
 Count number: <?php    echo count($numbers );   ?>
  <br>
  Arry order sort <?php sort($numbers ); echo print_r($numbers );   ?>
  <br>
  Arry rever sort <?php rsort($numbers ); echo print_r($numbers );   ?>
  <br>
  Is 10 in array <?php echo in_array(10, $numbers );     ?>
  <br>
  Is 12 in array <?php echo in_array(12, $numbers );     ?>
</body>
</html>
