<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "portfolio";

$conn = new mysqli($servername, $username, $password,$db);

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}
echo "";
?>