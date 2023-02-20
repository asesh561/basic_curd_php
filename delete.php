<?php


// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_POST['id'];
$sql = "DELETE FROM curd WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}