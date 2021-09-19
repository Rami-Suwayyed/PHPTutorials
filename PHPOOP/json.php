<?php

//1- simple array
$names=  array('hussein','ahmed','jasim');

//echo print_r($names);
//echo json_encode($names);

//2 complex arra
$items=  array('name'=>'ahmed','age'=>26,'birth'=>'Ammman');
//echo json_encode($items);


//- 3 class
class info{
    public $name;
    public $age;
    public $brith;
}

$namesclass=new info();
$namesclass->age=26;
$namesclass->name="Rami Suwayyed";
$namesclass->brith="Jordan";
echo json_encode($namesclass);
?>

