<?php
include 'BusinessAccessLayer.php';
if (isset($_POST['user']))
{
	$adminId = $_POST['adminId'];
	$pass = $_POST['pass'];

	$result = adminLogin($adminId,$pass);

	if($result == 0)
	{
		echo '<script> alert("Please Enter Valid Email ID or Password"); 
						window.location.href="admin.php";	
			  </script>';
	}
	else if ($result == 1)
	{
			echo '<script> alert("Logged In Successfully!!"); 
						window.location.href="officeOrder.php";	
			  </script>';
	}
}
else
{
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$result = customerLogin($email,$pass);

	if($result == 0)
	{
		echo '<script> alert("Please Enter Valid Email ID or Password"); 
						window.location.href="login.php";	
			  </script>';
	}
	else if ($result == 1)
	{
			echo '<script> alert("Logged In Successfully!!"); 
						window.location.href="index.php";	
			  </script>';
	}
}
?>