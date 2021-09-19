<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 <?php
$name=" Rami Suwayyed ";
$bref=" software application developer";

echo $name .",". $bref;

$info=$name .",". $bref;
echo "<br/>";
echo "To upper:". strtoupper($info);
echo "<br/>";
echo "To lower:". strtolower($info);
echo "<br/>";
echo "Trim:". trim("  new york city "). " best city" ;
echo "<br/>";
echo "replace:". str_replace("application", "web ", $info);
 ?>


</body>
</html>