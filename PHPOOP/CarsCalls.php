<?php

require 'cars.inc';

$mycar=new Cars();
$mycar->color="Red";
$mycar->Year=2015;
$mycar->Models="BMW";
echo $mycar->color;
echo '<br/>';
echo print_r( $mycar->GetOwners());
echo '<br/>';

$mycar2=new Cars();
$mycar2->color="Brown";
$mycar2->Year=2012;
$mycar2->Models="Toyota";
echo $mycar2->color;
echo '<br/>';
echo print_r( $mycar2->GetOwners());
echo '<br/>';


?>

