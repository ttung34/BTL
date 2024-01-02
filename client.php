<?php
require ("connect.php");

$sql = "CREATE TABLE client (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    PHONE INT NOT NULL UNIQUE,
    NAMECLIENT VARChAR(50) NOT NULL,
    DATEOFBRITH DATE NOT NULL,
    CARD VARCHAR(50) NOT NULL UNIQUE,
    ADDRESS VARCHAR(100) NOT NULL
)";

if ($conn->query($sql) === TRUE){
    echo "create table client successfully ";
}else{
    echo "Error: " . $conn->error;
}

?>