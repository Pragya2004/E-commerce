<?php
include 'BusinessAccessLayer.php';
session_start();

	$prodId = $_GET['prodId'];
	$qty = $_GET['qty'];
	$color = $_GET['color'];
	
	if(!(isset($_SESSION["sCustId"])))
	{
		
		echo '<script> alert("Please Login to Add in Cart!!"); 
							   window.location.href="productRedirect.php?prodId='.$prodId.'";
			 </script>';
	}
	else
	{
		$result = addCart( $_SESSION["sCustId"],$prodId,$color,$qty);
		
		if($result>0)
		{
			echo '<script> alert("Added to Cart!!"); 
					window.location.href="productRedirect.php?prodId='.$prodId.'";
				</script>';
		}
		else
		{
		}	
	}
?>

