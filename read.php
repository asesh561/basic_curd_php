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
$id = $_GET['id'];

$sql = "SELECT * FROM curd WHERE id = $id"; 
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "Name: " . $row["name"] . "<br>";
      echo "Email: " . $row["email"] . "<br><br>";
      echo "PHONE: " . $row["phone"] . "<br><br>";
    }
  } else {
    echo "No results found.";
  }
 
  ?>