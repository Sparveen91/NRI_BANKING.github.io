<?php
session_start();

// initializing variables
$username = "";
$ADHAR_NUMBER = "";
$EMAIL    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'nri');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $ADHAR_NUMBER= mysqli_real_escape_string($db, $_POST['ADHAR_NUMBER']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $EMAIL = mysqli_real_escape_string($db, $_POST['EMAIL']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($ADHAR_NUMBER )) { array_push($errors, "DEPARTMENT ID is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($EMAIL)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_login WHERE username='$username' OR EMAIL='$EMAIL' OR ADHAR_NUMBER='$ADHAR_NUMBER' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
	if ($user['ADHAR_NUMBER'] === $ADHAR_NUMBER) {
      array_push($errors, "ADHAR_NUMBER IS already exists");
    }

    if ($user['EMAIL'] === $EMAIL) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$PASSWORD = $password_1;//encrypt the password before saving in the database

  	$query = "INSERT INTO user_login(ADHAR_NUMBER, username, EMAIL, PASSWORD) 
  			  VALUES('$ADHAR_NUMBER', '$username', '$EMAIL', '$PASSWORD')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index11.php');
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $PASSWORD = mysqli_real_escape_string($db, $_POST['PASSWORD']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($PASSWORD)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$PASSWORD = $PASSWORD;
  	$query = "SELECT * FROM user_login WHERE username='$username' AND PASSWORD='$PASSWORD'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: facindex.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>