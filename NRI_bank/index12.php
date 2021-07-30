<?php
  session_start(); 

  if (!isset($_SESSION['USENAME'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: user_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['USENAME']);
  	header("location: user_login.php");
  }
?>

<?php include('user_reg_server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="header">
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['USERNAME'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['USERNAME']; ?></strong></p>
</div>

  	<!-- notification message -->
  	
    	
		
    <?php endif ?>
	
	<h2> FILL YOUR PERSONAL DETAILS</h2>
	
	
	<div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="index12.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>DEPARTMENT ID</label>
  	  <input type="data" name="DEPARTMENT_ID" value="<?php echo $DEPARTMENT_ID; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>FIRST NAME </label>
  	  <input type="text" name="FIRST_NAME" value="<?php echo $FIRST_NAME; ?>">
  	</div>
  	<div class="input-group">
  	  <label>LAST NAME</label>
  	  <input type="text" name="LAST_NAME" value="<?php echo $LAST_NAME; ?>">
  	</div>
  	<div class="input-group">
  	  <label>D.O.B</label>
  	 <input type="date" name="DOB" value="<?php echo $DOB; ?>">
  	</div>
  	<div class="input-group">
  	  <label>EMAIL</label>
	   <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <label>DEPARTMENT</label>
  	  <input type="text" name="DEPARTMENT" value="<?php echo $DEPARTMENT; ?>">
  	</div>
	<div class="input-group">
  	  <label>PHONE NO.</label>
  	  <input type="number" name="PHONE_NO" value="<?php echo $PHONE_NO; ?>">
  	</div>
	<div class="input-group">
  	  <label>ADDRESS</label>
  	  <input type="data" name="ADDRESS" value="<?php echo $ADDRESS; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
	</form>
	</body>
	</html>
	