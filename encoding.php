<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <h1>Welcome to encoding</h1>
<?php
$urltext=" <Open> Conact Page";
?>
<?php
$name="Rami & ahmed";

?>
<a href="contact.php?id=110&name=<?php echo urlencode($name)  ?> &age=27">
<?php echo  htmlspecialchars($urltext); ?>
  </a>
</body>
</html>