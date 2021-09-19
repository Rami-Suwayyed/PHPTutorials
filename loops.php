<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 <h1> For -loop </h1>

<h2>Number from 1 to 10 setp 1</h2>
<UL> 
 <?php

for ($i=1; $i <= 10; $i++) 
{ 
echo "<li>Count {$i}</li>";
}
 ?>

 <h2>Number from 1 to 10 only even</h2>
<UL> 
 <?php

for ($i=2; $i <= 10; $i=$i+2) 
{ 
echo "<li>Count {$i}</li>";
}
 ?>
</UL>


 <h1> while -loop </h1>
 <h2>Number from 1 to 10 setp 1</h2>
<UL> 
 <?php

//for ($i=1; $i <= 10; $i++) 
 $i=1;
while($i <= 10)
{ 
echo "<li>Count {$i}</li>";
$i++;
}
 ?>
</body>
</html>