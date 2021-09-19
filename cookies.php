<?php
 $name="userid";
 $value="11";
 $exp=time()+(60*60*24*30);

 setcookie($name,$value,$exp);


if (isset($_COOKIE['userid'])) {
echo  $_COOKIE['userid'] ;
}


//delete
 //setcookie($name,NULL);
 //setcookie($name,NULL,time()-600);
?>