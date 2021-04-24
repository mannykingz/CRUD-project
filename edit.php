<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "register";

  // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

  // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE tbl_users1 SET course_4='Chemistry' WHERE course_2='English'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>