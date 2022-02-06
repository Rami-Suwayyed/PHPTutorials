 
<?php
// 1- connect to db
$host="127.0.0.1";
$user="root";
$password="";
$database="PHPTutorials";
$connect=  mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno()){
    die("cannot connect to database field:". mysqli_connect_error());
    
}
 else {
    echo 'Database is connected';  
}
?>
 
   <?php
        //2- delete from database
        $query="delete from logins where id=". $_GET['id'];
        $result=  mysqli_query($connect, $query);
        if( $result)
            echo 'record is deleted';
        else {
           die("Error in query");    
}
         
        
        ?>

<?php
//5 close connection
mysqli_close($connect);
?>