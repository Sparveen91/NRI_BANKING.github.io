<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 4px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}
/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
 .dropbtn {
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
.navbar a:hover, .dropdown:hover .dropbtn {
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




/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}


.container{
background-color:yellow;
position:relative;
width:1360px;
height:600px;
margin:0 auto;
}
.container .content{
left:400px;
bottom:50px;
position:absolute;


background:rgb(0,0,0,);
background:rgba(0,0,0,0.5);
color:#f1f1f1;/*grey text*/
width:600px;
height:500px;
padding:90px;
}



</style>
</head>
<body>

<div class="navbar">

  <a href="HOME.html">HOME</a>
  
  <a href="about.html"> ABOUT</a>
  <a href="contactus.html"> CONTACT US</a>
  <a href="contactus.html"> BANKS</a> 
   <a href="contactus.html">APPLY</a>
  <a href="chooselogin.html" class="right">CHATBOT</a>
</div>
<div class="container">
<img src="note.jpg" width="1350" height="600">
<div class="content">


</div>
</div>
</body>
</html>







