<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <h1>Welcome to control panel</h1>

<h1>POST Results</h1>
<?php
 

?>
</br>
Usernmae:<?php echo $_POST['username'];?>
</br>
Password:<?php echo $_POST['password'];?>
</br>

<h1>GET Results</h1>
<?php

echo print_r($_GET);

?>
</body>
</html>