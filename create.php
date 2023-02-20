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

echo "Connected successfully";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Prepare an SQL statement to insert data into the database
$sql = "INSERT INTO curd (name, email, phone) VALUES ('$name', '$email', '$phone')";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
