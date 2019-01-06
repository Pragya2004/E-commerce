<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

mysqli_select_db($conn,"WebDB");

$sql = "SELECT customerId, firstName, emailId FROM customerLogin where emailId = 'sp@gmail.com'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["customerId"]. " - Name: " . $row["firstName"]. "Email " . $row["emailId"]. "<br>";
    }
} else {
    echo "0 results";
}



$conn->close();

?>
