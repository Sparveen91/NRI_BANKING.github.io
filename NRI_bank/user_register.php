<?php include('user_server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
<style>
body
  {
	  background-image:url("login1.jpeg");
	  
  }
  </style>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="user_register.php">
  	<?php include('errors.php'); ?>
  
  	  
	<div class="input-group">
  	  <label>ADHAR_NUMBER</label>
  	  <input type="data" name="ADHAR_NUMBER" value="<?php echo $ADHAR_NUMBER; ?>">
  	</div>
	<div class="input-group">
	<label>USERNAME</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>EMAIL</label>
  	  <input type="email" name="EMAIL" value="<?php echo $EMAIL; ?>">
  	</div>
  	<div class="input-group">
  	  <label>PASSWORD</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>CONFIRM_PASSWORD</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	
  </form>
</body>
</html>