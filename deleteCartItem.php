<?php
include 'BusinessAccessLayer.php';
$sn = $_POST['sn'];
$result = delCartItem($sn);

if($result > 0)
{
	echo '<script> window.location.href="cart.php"</script>';
}
else
{
	echo '<script> alert("Something went Wrong!!"); 
							   window.location.href="cart.php";
				</script>';
}


?>