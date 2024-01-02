<?php
    require ("connect.php");

    $sql = "CREATE TABLE user (
        ID INT AUTO_INCREMENT PRIMARY KEY,
        FULL_NAME VARCHAR(50) NOT NULL,
        USER VARCHAR(50) NOT NULL UNIQUE,
        GMAIL VARCHAR(50) UNIQUE,
        PASS VARCHAR(50) NOT NULL,
        regDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
    echo "create table user successfully";
    } else {
        echo "error: " . $conn->error;
    }
?>