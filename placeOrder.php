<?php
include 'BusinessAccessLayer.php';
session_start();

$custId = $_SESSION['sCustId'];

placeOrder($custId);


?>
