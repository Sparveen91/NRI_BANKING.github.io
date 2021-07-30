<?php include('user_server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="stylish.css">
  <style>
  body
  {
	  background-image:url("login.jpeg");
	  
  }
  </style>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="user_login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>USERNAME</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>PASSWORD</label>
  		<input type="password" name="PASSWORD">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="user_register.php">Sign up</a>
  	</p>
  </form>
  
</body>
</html>