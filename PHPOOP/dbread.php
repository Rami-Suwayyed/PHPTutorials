
<?php
// 1- connect to db
$host="127.0.0.1";
$user="root";
$password="";
$database="admins";
$connect=  mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno()){
    die("cannot connect to database field:". mysqli_connect_error());
    
}
 else {
    echo 'Database is connected';  
}
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
        <ul>
        <?php
        // 3- write or display data
     
        while($row=  mysqli_fetch_assoc($result)){
        
            echo '<li> id : '. $row['id']  .'  username : ' .$row['username'].' , password : ' .$row['password'] ."</li>";
        }
     
        ?>
        </ul>
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