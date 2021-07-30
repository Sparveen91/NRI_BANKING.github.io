<?php
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<?php include('stuserver.php') ?>
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
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
</div>

  	<!-- notification message -->
  	
    	
		
    <?php endif ?>
	
	<h2> FILL YOUR PERSONAL DETAILS</h2>
	
	
	<div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="index11.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>ADHAR_NUMBER</label>
  	  <input type="data" name="ADHAR_NUMBER" value="<?php echo $ADHAR_NUMBER; ?>">
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
  	  <label>DOB</label>
  	 <input type="date" name="DOB" value="<?php echo $DOB; ?>">
  	</div>
  	<div class="input-group">
  	  <label>EMAIL</label>
	   <input type="email" name="EMAIL" value="<?php echo $EMAIL; ?>">
  	</div>
	<div class="input-group">
  	  <label>PHONE_NO</label>
  	  <input type="number" name="PHONE_NO" value="<?php echo $PHONE_NO; ?>">
  	</div>
	<div class="input-group">
  	  <label>FOREIGN_COUNTRY</label>
  	  <input type="data" name="FOREIGN_COUNTRY" value="<?php echo $FOREIGN_COUNTRY; ?>">
  	</div>
	<div class="input-group">
  	  <label>ADDRESS_OF_INDIA</label>
  	  <input type="data" name="ADDRESS_OF_INDIA" value="<?php echo $ADDRESS_OF_INDIA; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
	</form>
	</body>
	</html>
	