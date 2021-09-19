
<?php
// 1- connect to db
$host="127.0.0.1";
$user="root";
$password="";
$database="admins";
$connect=  mysqli_connect($host, $user, $password, $database);
 
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //2- read from database
        $query="select * from logins";
        $result=  mysqli_query($connect, $query);
        if(! $result){
            die("Error in query");
        }
        ?>
       
        <?php
        // 3- write or display data
     $arr=  array();
        while($row=  mysqli_fetch_assoc($result)){
        $arr[]=$row;
           // echo '<li>id:'.$row['id']  .', username:' .$row['username'].', password:' .$row['password'] ."</li>";
        }
     echo json_encode( $arr);
        ?>
      
        <?php
        // 4 clear
        mysqli_free_result($result);
        
        ?>
        
    </body>
</html>
<?php
//5 close connection
mysqli_close($connect);
?>