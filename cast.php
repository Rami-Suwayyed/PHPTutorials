<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 $var1 is:
<?php
$var1 ="4 months";
echo gettype($var1);
?> <br/>
$var1 is:
<?php

$var1=$var1+5;
echo gettype($var1);
?>

<br/>
$var2 is:
<?php

$var2=(string)$var1;
echo gettype($var2);
?>
<br/>
$var3 is:
<?php

 $var3=(integer)$var2;
//$var3=settype($var2, "integer");
echo gettype($var3);
?>
</body>
</html>
