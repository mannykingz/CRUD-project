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

$sql = "INSERT INTO tbl_users1 (course_1, course_2, course_3, course_4)
VALUES ('Mathematics', 'English', 'Physics', 'Chemistry')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "Connected successfully";
?>