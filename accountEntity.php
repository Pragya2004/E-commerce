<?php
include 'BusinessAccessLayer.php';
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$pass = $_POST['password'];
$email = $_POST['email'];

$result = customerRegistration($fname,$lname,$email,$pass);

if ($result == NULL)
{
	echo '<script> alert("User with same Email ID already exists"); 
					window.location.href="account.php";	
		  </script>';
}	
else
{
echo '<script> alert("Account Created Successfully!!"); 
					window.location.href="login.php";	
		  </script>';	
}
?>