<?php
$servername = "85.10.205.173:3306";
$database = "dev_web";
$username = "dev_web2015";
$password = "computacao2015";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);



?>