<!DOCTYPE html>
<html>
<head>
</head>
<body>
 


<?php

$results=operations(3,7);
  print_r($results);
 echo "<br/>Sum:{$results[0]}";
  echo "<br/>sub:{$results[1]}";
   echo "<br/>div:{$results[2]}";
    echo "<br/>mul:{$results[3]}";
 
  function operations($n1,$n2)
{
	$arr=array();
	 $arr[]=$n1+$n2;
	 $arr[]=$n1-$n2;
	 $arr[]=$n1/$n2;
	 $arr[]=$n1*$n2;

	    return $arr ;
	 
}

?>
</body>
</html>