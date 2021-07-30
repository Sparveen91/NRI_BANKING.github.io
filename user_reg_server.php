<?php              
// initializing variables
$DEPARTMENT_ID  = "";
$FIRST_NAME = "";
$LAST_NAME = "";
$DOB = "";
$email  = "";
$DEPARTMENT  = "";
$PHONE_NO = "";
$ADDRESS = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');
// REGISTER USER
 if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $DEPARTMENT_ID = mysqli_real_escape_string($db, $_POST['DEPARTMENT_ID']);
  $FIRST_NAME  = mysqli_real_escape_string($db, $_POST['FIRST_NAME']);
  $LAST_NAME  = mysqli_real_escape_string($db, $_POST['LAST_NAME']);
  $DOB = mysqli_real_escape_string($db, $_POST['DOB']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $DEPARTMENT = mysqli_real_escape_string($db, $_POST['DEPARTMENT']);
  $PHONE_NO = mysqli_real_escape_string($db, $_POST['PHONE_NO']);
  $ADDRESS = mysqli_real_escape_string($db, $_POST['ADDRESS']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($DEPARTMENT_ID)) { array_push($errors, "department id. is required"); }
  if (empty($FIRST_NAME)) { array_push($errors, "first name is required"); }
  if (empty($LAST_NAME)) { array_push($errors, "last name is required"); }
  if (empty($DOB)) { array_push($errors, "DOB  is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
   if (empty($DEPARTMENT)) { array_push($errors, "department is required"); }
 if (empty($PHONE_NO)) { array_push($errors, "phone no. is required"); }
   if (empty($ADDRESS)) { array_push($errors, "address is required"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT *FROM fac_detail WHERE DEPARTMENT_ID='$DEPARTMENT_ID' OR FIRST_NAME='$FIRST_NAME' OR LAST_NAME='$LAST_NAME' OR DOB='$DOB' OR email='$email' OR DEPARTMENT='$DEPARTMENT' OR PHONE_NO='$PHONE_NO' OR ADDRESS='$ADDRESS' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
 
  if ($user) { // if user exists
   
   if ($user['DEPARTMENT_ID'] === $DEPARTMENT_ID) {
      array_push($errors, "department id is  already exists");
    }
	
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
	
  if ($user['PHONE_NO'] === $PHONE_NO) {
      array_push($errors, "PHONE NO. already exists");
  }
  
  
  }
  // Finally, register user if there are no errors in the form


  	$query = "INSERT INTO fac_detail(DEPARTMENT_ID, FIRST_NAME, LAST_NAME, DOB, email, DEPARTMENT, PHONE_NO, ADDRESS) 
  			  VALUES('$DEPARTMENT_ID', '$FIRST_NAME', '$LAST_NAME', '$DOB', '$email', '$DEPARTMENT', '$PHONE_NO', '$ADDRESS')";
       mysqli_query($db, $query);
  	
  	  header('location: datasubmit.php');
  	
  	
  
 }
  ?>