<?php
include 'BusinessAccessLayer.php';
$prodId = $_GET['prodId'];

$result = productDetails($prodId);
$row = $result->fetch_assoc();

setcookie('prodId', $row['productId'], time() +3600, "/");
setcookie('prodName', $row['productName'], time() +3600, "/");
setcookie('prodBasePrice', $row['productBasePrice'], time() +3600, "/");
setcookie("prodDes", $row['productDescription'], time() +3600, "/");
setcookie("prodImg", $row['productDefaultImage'], time() +3600, "/");

echo '<script> window.location.href="product.php"; </script>';

?>