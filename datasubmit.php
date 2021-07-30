
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="header">
<?php echo "YOUR DATA HAS BEEN SUBMITED"; ?>
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
	<a href="user_login.php">login</a>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
</div>

  	<!-- notification message -->
  	
    	
		
    <?php endif ?>
	
	

</body>
</html>