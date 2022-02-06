<?php require_once('config.php') ?>
<?php


$connection = new PDO($dsn, $dbuser, $dbuserpassword, $options);
//Php DataBase Object (PDO)

$sql = "CREATE TABLE IF NOT EXISTS ideastable (
    id INT UNSIGNED AUTO_INCREMENT,
    title VARCHAR(40) Not Null,
    text TEXT Not Null,
    PRIMARY KEY(id)
);" ;

$connection-> exec($sql);


echo "You are connected to the database successfully";

 ?>