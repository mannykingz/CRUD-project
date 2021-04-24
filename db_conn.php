<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name ="work_db";

try {
    $conn = new PDO("mysql:host=$sName;dbName=$db_name",
                     $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);                 
}catch(PDOException $e){
    echo "connection failed : ". $e->getMessage();
}

?>