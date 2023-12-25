<?php
require ("connect.php");

$sql = "CREATE TABLE client (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    PHONE INT NOT NULL,
    NAMECLIENT VARChAR(50) NOT NULL,
    DATEOFBRITH DATE NOT NULL,
    CARD VARCHAR(50) NOT NULL,
    ADDRESS VARCHAR(100) NOT NULL
)";

if ($conn->query($sql) === TRUE){
    echo "create table client successfully ";
}else{
    echo "Error: " . $conn->error;
}

?>