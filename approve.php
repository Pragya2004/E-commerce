<?php

include 'BusinessAccessLayer.php';
session_start();

$sn = $_POST['sn'];

$result = approveOrder($sn,$_SESSION['sAdminFname']);

if($result > 0)
{
	echo '<script> alert("Order Approved Successfully!!"); 
						window.location.href="officeOrder.php";	
			  </script>';
}
else
{
	echo '<script> alert("Something went wrong!! Please try again.."); 
						window.location.href="officeOrder.php";	
			  </script>';
}


?>