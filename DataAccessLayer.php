<?php


function crConn()
{
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password);
		
	return $conn; 
}

function test1()
{
	$conn = crConn();	
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";

	mysqli_select_db($conn,"WebDB");

	$sql = "SELECT customerId, firstName, emailId FROM customerLogin where emailId = 'sp@gmail.com'";
	//$result = $conn->query($sql);
	$result = exeQuery($sql);
	if ($result->num_rows > 0) 
	{
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
			echo "id: " . $row["customerId"]. " - Name: " . $row["firstName"]. "Email " . $row["emailId"]. "<br>";
		}
	} 
	else 
	{
		echo "0 results";
	}
	$conn->close();
}

function exeQuery($sql)
{
	$conn = crConn();	
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	mysqli_select_db($conn,"WebDB");
	$result = $conn->query($sql);
	$conn->close();
	return $result;
}

/**************************************************SELECTION FUNCTIONS*************************************************************************/

// Get Max Order number from Order

function getMaxOrderNumber()
{
	$sql = "SELECT max(orderNumber) AS orderNumber FROM `order`";
	$result = exeQuery($sql);
	while($row = $result->fetch_assoc())
	{
		echo  $row["orderNumber"];
	}
}

// Get First Name, Last Name, Email, Password, CustomerID from customerlogin`

function getCustomerLoginInfo($email)
{
	$sql = "SELECT * FROM customerlogin WHERE emailId = '$email'";
	$result = exeQuery($sql);
	return $result;
}


function getAdminLoginInfo($adminId)
{
	$sql = "SELECT * FROM adminlogin WHERE adminId = '$adminId'";
	$result = exeQuery($sql);
	return $result;
}

// Get productId, productName, productBasePrice, productDescription, productDefaultImage from productdetails

function getProductDetails($prodId)
{
	$sql = "SELECT * FROM productdetails WHERE productId = '$prodId'";
	$result = exeQuery($sql);
	return $result;
}

function getCat($catName)
{
	$sql = "SELECT prodCat FROM productcategory WHERE categoryName= '$catName'";
	$result = exeQuery($sql);
	return $result;
}

// Get all products for catalog

function getCatalog()
{
	$sql = "SELECT productId, productName, productBasePrice, productDefaultImage FROM productdetails";
	$result = exeQuery($sql);
	return $result;
}

function getFilterCatalog($catId)
{
	$sql = "SELECT productId, productName, productBasePrice, productDefaultImage FROM productdetails WHERE prodCat = '$catId'";
	$result = exeQuery($sql);
	return $result;
}

function loadRelatedProd($prodId)
{
	$sql = "SELECT productId, productName, productBasePrice, productDefaultImage FROM productdetails WHERE productId NOT IN ('$prodId') ";
	$result = exeQuery($sql);
	return $result;
}

function getCart($custId)
{
	$sql = "SELECT sn, productId, qty, color, netPrice FROM cart WHERE customerId = '$custId'";
	$result = exeQuery($sql);
	return $result;
}

function getCartItems($custId)
{
	$sql = "SELECT sn, customerId, productId, color, qty, netPrice FROM cart WHERE customerId = '$custId'";
	$result = exeQuery($sql);
	return $result;
}


function cartValue($custId)
{
	$sql = "SELECT netPrice FROM cart WHERE customerId = '$custId'";
	$result = exeQuery($sql);
	return $result;
}

function getMaxOrderNo()
{
	$sql = "SELECT MAX(orderNumber) AS mOrderNo FROM `order`";
	$result = exeQuery($sql);
	return $result;
}

function getCustOrder($custId)
{
	$sql = "SELECT orderNumber, customerId, productId, color, qty, netPrice, orderDate, orderConfirm FROM `order` WHERE customerId = '$custId'";
	$result = exeQuery($sql);
	return $result;
}

function getOrderAdmin()
{
	$sql = "SELECT sn,orderNumber, customerId, productId, color, qty, netPrice, orderDate, orderConfirm, orderConfirmAdmin FROM `order` WHERE orderConfirm IS NULL";
	$result = exeQuery($sql);
	return $result;
}

function getApprovedOrder()
{
	$sql = "SELECT sn, orderNumber, customerId, productId, color, qty, netPrice, orderDate, orderConfirm, orderConfirmAdmin FROM `order` WHERE orderConfirm = 1 ";
	$result = exeQuery($sql);
	return $result;
}

function getRejectedOrder()
{
	$sql = "SELECT sn, orderNumber, customerId, productId, color, qty, netPrice, orderDate, orderConfirm, orderConfirmAdmin FROM `order` WHERE orderConfirm = 0 ";
	$result = exeQuery($sql);
	return $result;
}




/**************************************************INSERTION FUNCTIONS*************************************************************************/

function customerLoginRegistration($fname,$lname,$email,$pass)
{
	$sql = "INSERT INTO `customerlogin` (`customerId`, `firstName`, `lastName`, `emailId`, `password`) VALUES (NULL, '$fname','$lname','$email','$pass')";
	$result = exeQuery($sql);
	return $result;
}

function setAddCart($custId,$prodId,$color,$qty,$nPrice)
{
	$sql = "INSERT INTO `cart` (`customerId`, `productId`, `color`, `qty`, `netPrice`) VALUES ('$custId','$prodId','$color','$qty','$nPrice')";
	$result = exeQuery($sql);
	return $result;
}

function setOrder($orderNo,$custId,$prodId,$color,$qty,$netPrice)
{
	$sql = "INSERT INTO `order` (`sn`,`orderNumber`, `customerId`, `productId`, `color`, `qty`, `netPrice`, `orderDate`, `orderConfirm`, `OrderConfirmAdmin`) VALUES ( NULL,'$orderNo','$custId','$prodId','$color','$qty','$netPrice', now(), NULL, NULL)";
	$result = exeQuery($sql);
	return $result;
	
	
}








/**************************************************DELETION FUNCTIONS*************************************************************************/


function setItemCartDelete($sn)
{
	$sql = "DELETE FROM cart WHERE sn = '$sn'";
	$result = exeQuery($sql);
	return $result;
}



/*************************************************UPDATION FUNCTIONS*************************************************************************/

function setApproveOrder($sn,$adminName)
{
	$sql = "UPDATE `order` SET `orderConfirm` = b'1', `OrderConfirmAdmin` = '$adminName' WHERE `order`.`sn` = '$sn'";
	$result = exeQuery($sql);
	return $result;
}

function setRejectOrder($sn,$adminName)
{
	$sql = "UPDATE `order` SET `orderConfirm` = b'0', `OrderConfirmAdmin` = '$adminName' WHERE `order`.`sn` = '$sn'";
	$result = exeQuery($sql);
	return $result;
}




?>
