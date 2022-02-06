<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		a:link, a:visited {
	background-color: white;
	color: black;
	border: 2px solid #5F9EA0;
	padding: 10px 20px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
  }
  
  a:hover, a:active {
	background-color: #5F9EA0;
	color: white;
  }
	</style>
</head>
<body>

	<div class="header">		
		<h2>Login</h2>
	</div>	
	<form method="post" action="login.php">
	<a  href="http://localhost/PHPTutorials/">Back</a>
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>