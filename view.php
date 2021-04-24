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

//$sql = "SELECT course_1, course_2 FROM tbl_users1";
//$result = $conn->query($sql);

  //  if ($result->num_rows > 0) {
   // output data of each row
    //while($row = $result->fetch_assoc()) {
    //echo  " - Name: " . $row["course_1"]. " " . $row["course_2"]. "<br>";
 // }
//} else {
  //      echo "0 results";
//}
  //      $conn->close();

  $sql = "SELECT course_1, course_2 FROM tbl_users1 WHERE course_2='English'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " - Name: " . $row["course_1"]. " " . $row["course_2"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>