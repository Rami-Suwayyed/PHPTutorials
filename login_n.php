<?php
//header("HTTP/1.1 404 Not Found");
// We'll be outputting a PDF
//header('Content-Type: application/pdf');
//header('Content-Disposition: attachment; filename="snapshoot.txt"');
?>

<!DOCTYPE html ">
<html lang="en">
<head>
</head>
<body>
 
<?php
 
  // button click  
if (isset($_POST['submit'])) { 
 $usename=$_POST['username'];
  $password=$_POST['password'];
  if (($usename=='Rami')&& ($password=="123")) {
  echo "Your information is correct";
   }
  else {
  	echo "user name or password isnot correct";
  }
}
?>
<form action='' method='POST'>

User Name:<input type='text' name='username'>
</br>
pssword:<input type='password' name='password'>
</br>
<input type='submit' name='submit' value='Log in'>
</form> 

</body>
</html>