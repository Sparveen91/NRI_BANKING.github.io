<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: faclogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: faclogin.php");
  }
?>

<?php

$var = mysqli_connect("localhost","root","","nri");
$query1 = mysqli_query($var, "select * from user_detail");
$rowcount= mysqli_num_rows($query1);
?>
<table border="1">
<tr>
<td>ADHAR_NUMBER</td>
<td>FIRST_NAME</td>
<td>LAST_NAME</td>
<td>DOB</td>
<td>EMAIL</td>
<td>PHONE_NO</td>
<td>FOREIGN_COUNTRY</td>
<td>ADDRESS_OF_INDIA</td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysqli_fetch_array($query1);
	/*print r()*/
	?>
<tr>
<td><?php echo $row["ADHAR_NUMBER"]?></td>
<td><?php echo $row["FIRST_NAME"]?></td>
<td><?php echo $row["LAST_NAME"]?></td>
<td><?php echo $row["DOB"]?></td>
<td><?php echo $row["EMAIL"]?></td>
<td><?php echo $row["PHONE_NO"]?></td>
<td><?php echo $row["FOREIGN_COUNTRY"]?></td>
<td><?php echo $row["ADDRESS_OF_INDIA"]?></td>
</tr>
<?php
}
?>
</table>