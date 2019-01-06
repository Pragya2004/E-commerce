<?php
		include 'DataAccessLayer.php';
		
		function customerRegistration($fname,$lname,$email,$pass)
		{
			$result = customerLoginRegistration($fname,$lname,$email,$pass);
			return $result;
		}
		
		function customerLogin($email,$pass)
		{
			$result = getCustomerLoginInfo($email);
			
			if ($result->num_rows > 0)
			{
				//Fetch row from result
				$row = $result->fetch_assoc();
				
				//Store DB values in variables
				$custId = $row['customerId'];
				$fname = $row['firstName'];
				$lname = $row['lastName'];
				$email = $row['emailId'];
				$pass2 = $row['password'];
				
				//Password Authentication
				if( strcmp($pass,$pass2) == 0)
				{
					session_start();
					
					$_SESSION["sCustId"] = $custId;
					$_SESSION["sFname"] = $fname;
					$_SESSION["sLname"] = $lname;
					$_SESSION["sEmail"] = $email;
					
					return 1;
				}
				else
				{
					return 0;
				}
			}
			else
			{
				return 0;
			}
		}
		
		
		function adminLogin($adminId,$pass)
		{
			$result = getAdminLoginInfo($adminId);
			
			if ($result->num_rows > 0)
			{
				//Fetch row from result
				$row = $result->fetch_assoc();
				
				//Store DB values in variables
				$adminId = $row['adminId'];
				$fname = $row['adminFirstName'];
				$pass2 = $row['password'];
				
				//Password Authentication
				if( strcmp($pass,$pass2) == 0)
				{
					session_start();
					
					$_SESSION["sAdminId"] = $adminId;
					$_SESSION["sAdminFname"] = $fname;					
					return 1;
				}
				else
				{
					return 0;
				}
			}
			else
			{
				return 0;
			}
		}
		
		
		function productDetails($prodId)
		{
			return getProductDetails($prodId);
			
		}
		
		function getRelatedProd($prodId)
		{
			return loadRelatedProd($prodId);
		}
		
		function setCatalog($catName)
		{
			if (strcmp($catName,"all") == 0)
			{
				return getCatalog();
			}
			else
			{			
				$catIdResult = getCat($catName);
				$row = $catIdResult->fetch_assoc();
				$catId = $row['prodCat'];
				$result = getFilterCatalog($catId);
				return $result;
			}
		}
		
		function addCart($custId,$prodId,$color,$qty)
		{
			$result = getProductDetails($prodId);
			$row = $result->fetch_assoc();
			$prodPrice = $row['productBasePrice'];
			$netPrice = $qty * $prodPrice;
			return setAddCart($custId,$prodId,$color,$qty,$netPrice);
		}
		
		function getCartValue($custId)
		{
			$result = cartValue($custId);
			$cartValue = 0;
			if ($result->num_rows > 0) 
			{	
				while($row = $result->fetch_assoc()) 
				{
					$cartValue = $cartValue + $row['netPrice'];
				}
			}
			return $cartValue;
		}
		
		
		function loadCart($custId)
		{
			return getCart($custId);
		}
		
		function loadCustOrder($custId)
		{
			return getCustOrder($custId);
		}
		
		function loadOrder()
		{
			return getOrderAdmin();
		}

		function loadApprovedOrder()
		{
			return getApprovedOrder();
		}
		
		function loadRejectedOrder()
		{
			return getRejectedOrder();
		}
		
		function placeOrder($custId)
		{
			$result = getCartItems($custId);
			$orderNo = 0;
			$moRes = getMaxOrderNo();
			$maxOrderNumber = $moRes->fetch_assoc();
			if($maxOrderNumber['mOrderNo'] > 0)
			{
				$orderNo = $maxOrderNumber['mOrderNo'] + 1;
			}
			else
			{
				$orderNo = 1;
			}
			if ($result->num_rows > 0) 
			{	
				while($row = $result->fetch_assoc()) 
				{
					$insRes = setOrder($orderNo,$row['customerId'],$row['productId'],$row['color'],$row['qty'],$row['netPrice']);
					$delRes = setItemCartDelete($row['sn']);
				}
				
				echo '<script> alert("Order Placed Successfully!!"); 
							   window.location.href="cart.php";
				</script>';
			}
			else
			{
				echo '<script> alert("Your Cart is Empty!!"); 
							   window.location.href="Catalog.php";
				</script>';
			}
		}
		
		function delCartItem($sn)
		{
			return setItemCartDelete($sn);
		}
		
		function approveOrder($sn,$adminName)
		{
			return setApproveOrder($sn,$adminName);
		}
		
		function rejectOrder($sn,$adminName)
		{
			return setRejectOrder($sn,$adminName);
		}
?>