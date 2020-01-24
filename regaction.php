<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="webtutorial"; // Database name
$tbl_name="admin"; // Table name



// Connect to server and select databse.
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($con,"$db_name")or die("cannot select DB");

echo "Server Connection ";


// username and password sent from form
$myusername=$_POST['name'];
$myemail=$_POST['email'];
$myphone=$_POST['phone'];
$mypassword=$_POST['password'];


$sql="INSERT INTO user (name,email,phone,password) 
		VALUES ('$myusername', '$myemail', '$myphone', '$mypassword') ";

mysqli_query($con,$sql);

header("location:registration_success.php");
?>