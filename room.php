<?php
require("connect.php");

$sql = "CREATE TABLE room (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    PRICE VARCHAR(50) NOT NULL,
    TYPEROOM VARCHAR(50) NOT NULL,
    KIND VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE){
    echo "create table room successfully ";
}else{
    echo "Error: " . $conn->error;
}

?>