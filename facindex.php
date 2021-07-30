<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: user_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header('location:home.html');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<style>

/* Style the top navigation bar */
.navbar 
{
overflow: hidden;
background-color: #333;
}
/* Style the navigation bar links */
.navbar a 
{
float: left;
display: block;
color: white;
text-align: center;
padding: 14px 20px;
text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
 #dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}
/* Add background color to navbar links on hover */
.navbar a:hover, .dropdown:hover #dropbtn {
  background-color: #bbb;;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #1abc9c;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.9);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
  
}


/* Right-aligned link */
.navbar a.right 
{
float: right;
}
/* Change color on hover */
.navbar a:hover 
{
background-color: #ddd;
color: black;
}
p
{
margin-left:25px;
margin-right:15px;
}

.b1
{
font-weight:bold;
width:200px;
height:200px;
margin:80px;
margin-left:300px;
background-color:white;
border-color:black;
border-width:5px;
border-radius:10px;
}
.b1:hover
{
background-color:#1abc9c;
}
/*img
{
width:120px;
height:120px;
border-radius:70px;
}*/

.container{
	top:50px;
background-color:yellow;
position:absolute;
width:1370px;
height:600px;
margin:0 auto;
}




.choose
{
	background-color:blue;
	width:451px;
	height:350px;
	position:absolute;
	left:458px;
	text-align:center;
	
	background:rgb(0,0,0,);
background:rgba(0,0,0,0.5);
color:#f1f1f1;/*grey text*/
bottom:150px;
}


.head
{
	position:absolute;
	width: 30%;
  margin: 10px auto 0px;
  color:white;
  background: black;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
  bottom:500px;
  left:458px;
}


a
{
	color:white;
	text-decoration:none;
}
a:hover
{
	color:red;
}
#detail
{
position:absolute;	
 bottom:400px;
 color:white;
 left:20px;

}
</style>		
</head>
<body>
<div class="navbar">
  <a href="home.html">HOME</a>
  <a href="index.php?logout='1'" class="right" style="color: red;">LOGOUT</a>  
</div>
<br/>
<br/>
<div class="container">
<img src="home.jpeg" width="1370" height="600">
<div class="head">

  	<!-- notification message -->
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
    <?php endif ?>
	
<?php



$user=$_SESSION["username"];

$var = mysqli_connect("localhost","root","","nri");
$query1 = mysqli_query($var, "select * from user_login WHERE username ='$user' ");
$row1=mysqli_fetch_array($query1);
$EMAIL=$row1["EMAIL"];
$query2= mysqli_query($var, "select * from user_detail where EMAIL='$EMAIL' ");
$rowcount= mysqli_num_rows($query2);

?>
<?php
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysqli_fetch_array($query2);
	/*print r()*/
}

?>
<div id="detail">
<table>
<tr>
<td>ADHAR_NUMBER-</td>
<td><?php echo $row["ADHAR_NUMBER"]?></td>
</tr>

<tr>
<td>FIRST_NAME-</td>
<td><?php echo $row["FIRST_NAME"]?></td>
</tr>
<tr>
<td>LAST_NAME-</td>
<td><?php echo $row["LAST_NAME"]?></td>
</tr>
<tr>
<td>DOB-</td>
<td><?php echo $row["DOB"]?></td>
</tr>
<tr>
<td>EMAIL-</td>
<td><?php echo $row["EMAIL"]?></td>
</tr>
<tr>
<td>PHONE NO-</td>
<td><?php echo $row["PHONE_NO"]?></td>

</tr>
<tr>
<td>FOREIGN_COUNTRY-</td>
<td><?php echo $row["FOREIGN_COUNTRY"]?></td>
</tr>
<tr>
<td>ADDRESS_OF_INDIA-</td>
<td><?php echo $row["ADDRESS_OF_INDIA"]?></td>
</tr>
</table>
</div>
	<div class="choose">
	</br>
	<a href="apply.html"><h2>apply</h2></a>
	</br>
	<a href="indexx.php"><h2>chatbot</h2></a>
	</br>
	<a href="bnk.html"><h2>banks</h2></a>
	</div>
	
	</div>



</body>
</html>