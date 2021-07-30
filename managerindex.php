<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: managerlogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: managerlogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<style>
/* Header/logo Title */
.header1
{
padding: 20px;
text-align: center;
background: #1abc9c;
color: white;
}
/* Increase the font size of the heading */
.header1 h1 
{
font-size: 40px;
}
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
img
{
width:120px;
height:120px;
border-radius:70px;
}

footer  
{
margin: 0;
padding: 0;
font-family: Arial, Helvetica, Sans-serif;
background-color: #070617;
}
.footer_page {
height: 50px;
width: 100%;
background-color: #f0f0f0;
text-align: center;
box-sizing: border-box;
padding: 60px 0px;
}
/* STYLES SPECIFIC TO FOOTER  */
.footer 
{
width: 100%;
position: relative;
height: auto;
background-color: #070617;
}
.footer .col 
{
width: 190px;
height: auto;
float: left;
box-sizing: border-box;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
padding: 0px 20px 20px 20px;
}
.footer .col h1 
{
margin: 0;
padding: 0;
text-align: right;
font-family: inherit;
font-size: 16px;
line-height: 17px;
padding: 20px 0px 5px 0px;
color: rgba(255,51,51,1.0);
font-weight: normal;
text-transform: uppercase;
letter-spacing: 0.150em;
}
.footer .col ul 
{
list-style-type: none;
margin: 0;
padding: 0;
}
.footer .col ul li 
{
color: #999999;
font-size: 14px;
text-align: right;
font-family: inherit;
font-weight: bold;
padding: 5px 0px 5px 0px;
cursor: pointer;
transition: .2s;
-webkit-transition: .2s;
-moz-transition: .2s;
}
.social ul li 
{
display: inline-block;
padding-right: 5px !important;
}
.footer .col ul li:hover 
{
color: #ffffff;
transition: .1s;
-webkit-transition: .1s;
-moz-transition: .1s;
}
.clearfix 
{
  clear: both;
  }
@media only screen and (min-width: 1280px) 
{
.contain 
{
width: 1200px;
margin: 0 auto;
}
}
@media only screen and (max-width: 1139px) 
{
.contain .social 
{
width: 1000px;
display: block;
}
.social h1 
{
margin: 0px;
}
}
@media only screen and (max-width: 950px) 
{
.footer .col {
width: 33%;}
.footer .col h1 {
font-size: 14px;}
.footer .col ul li 
{
font-size: 13px;
}
}
@media only screen and (max-width: 500px)
 {
.footer .col 
{
width: 50%;
}
.footer .col h1 
{
font-size: 14px;
}
.footer .col ul li 
{
font-size: 13px;
}
}
@media only screen and (max-width: 340px) 
{
.footer .col 
{
width: 100%;
}
}
.p
{
color: #999999;
font-size: 14px;
text-align: right;
font-family: inherit;}
.h1
{
color:blue;
}



#detail
{
	width:500px;
	margin-left:530px;	
}

body
{
	background-image:url('photo db.jfif');
	background-size:cover;
}

</style>
		
</head>
<body>

<div class="navbar">

  <a href="home.html">HOME</a>
  <div class="dropdown">
  <button id="dropbtn"><b>USER</b>
    <i class="fa fa-caret-down"></i>
    </button>
  <div class="dropdown-content">
      <a href="viewrecord.php">USER_DETAIL</a>
  
      
    </div>
	
  </div> 
  
  <a href="about.html"> ABOUT</a>
  <a href="contact_us.html"> CONTACT US</a>
  <a href="indexx.php">CHATBOT</a>
  
   <a href="index.php?logout='1'" class="right" style="color: red;">LOGOUT</a> 
  
</div>
<div id="hii">
<div class="header">

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
$query1 = mysqli_query($var, "select * from managerusers where username ='$user' ");
$row1=mysqli_fetch_array($query1);
$email=$row1["email"];
$query= mysqli_query($var, "select * from manager_detail where email='$email' ");
$rowcount= mysqli_num_rows($query);

?>
<?php
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysqli_fetch_array($query);
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
<td><?php echo $row["email"]?></td>
</tr>
<tr>
<td>PHONE NO-</td>
<td><?php echo $row["PHONE_NO"]?></td>
</tr>
<tr>
<td>ADDRESS-</td>
<td><?php echo $row["ADDRESS"]?></td>
</tr>
</table>
</div>


</div>
</body>
</html>