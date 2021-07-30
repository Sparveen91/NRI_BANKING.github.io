<?php              
// initializing variables
$ADHAR_NUMBER  = "";
$FIRST_NAME = "";
$LAST_NAME = "";
$DOB = "";
$EMAIL  = "";
$FOREIGN_COUNTRY  = "";
$PHONE_NO = "";
$ADDRESS_OF_INDIA = "";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'nri');
// REGISTER USER
 if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $ADHAR_NUMBER = mysqli_real_escape_string($db, $_POST['ADHAR_NUMBER']);
  $FIRST_NAME  = mysqli_real_escape_string($db, $_POST['FIRST_NAME']);
  $LAST_NAME  = mysqli_real_escape_string($db, $_POST['LAST_NAME']);
  $DOB = mysqli_real_escape_string($db, $_POST['DOB']);
  $EMAIL = mysqli_real_escape_string($db, $_POST['EMAIL']);
  $FOREIGN_COUNTRY = mysqli_real_escape_string($db, $_POST['FOREIGN_COUNTRY']);
  $PHONE_NO = mysqli_real_escape_string($db, $_POST['PHONE_NO']);
   $ADDRESS_OF_INDIA = mysqli_real_escape_string($db, $_POST['ADDRESS_OF_INDIA']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($ADHAR_NUMBER)) { array_push($errors, "Adhar number  is required"); }
  if (empty($FIRST_NAME )) { array_push($errors, "first name is required"); }
  if (empty($LAST_NAME )) { array_push($errors, "last name is required"); }
  if (empty($DOB )) { array_push($errors, "DOB  is required"); }
  if (empty($EMAIL)) { array_push($errors, "Email is required"); }
   if (empty($FOREIGN_COUNTRY)) { array_push($errors, "FOREIGN_COUNTRY name is required"); }
 if (empty($PHONE_NO)) { array_push($errors, "phone no. is required"); }
   if (empty($ADDRESS_OF_INDIA)) { array_push($errors, "address of india is required"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_detail WHERE ADHAR_NUMBER='$ADHAR_NUMBER' OR FIRST_NAME='$FIRST_NAME' OR LAST_NAME='$LAST_NAME' OR DOB='$DOB' OR EMAIL='$EMAIL' OR FOREIGN_COUNTRY='$FOREIGN_COUNTRY' OR PHONE_NO='$PHONE_NO' OR ADDRESS_OF_INDIA='$ADDRESS_OF_INDIA' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
 
  if ($user) { // if user exists
   
	
	
    if ($user['EMAIL'] === $EMAIL) {
      array_push($errors, "email already exists");
    }
	
  if ($user['PHONE_NO'] === $PHONE_NO) {
      array_push($errors, "PHONE NO. already exists");
  }
  
  
  }
  // Finally, register user if there are no errors in the form


  	$query = "INSERT INTO user_detail (ADHAR_NUMBER, FIRST_NAME, LAST_NAME, DOB, EMAIL, FOREIGN_COUNTRY, PHONE_NO, ADDRESS_OF_INDIA) 
  			  VALUES('$ADHAR_NUMBER', '$FIRST_NAME', '$LAST_NAME', '$DOB', '$EMAIL', '$FOREIGN_COUNTRY', '$PHONE_NO', '$ADDRESS_OF_INDIA' )";
  	$results=mysqli_query($db, $query);
  	if(mysqli_num_rows($results)==0) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: datasubmit.php');
	}
 }
  ?>