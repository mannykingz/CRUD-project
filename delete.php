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

// sql to delete a record
    $sql = "DELETE FROM tbl_users1 WHERE course_2='English'";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>