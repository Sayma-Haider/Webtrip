<?php
  $connect=mysqli_connect("localhost","root","","practice");
  if(!$connect){
  	echo("Error connection:");

    }

    if(isset($_POST['submit'])){
    	$name=$_POST['name'];
    	$username=$_POST['username'];
    	$password=$_POST['password'];
    	$email=$_POST['email'];

    	$sql="insert into registration(id,name,username,password,email) values('','$name','$username','$password',
         '$email')";

         $result=mysqli_query($connect,$sql);

         if ($result) {
         	echo "Registration complete";
         }
         else{
         	echo "Please try again";
         }
    	


    }

?>
