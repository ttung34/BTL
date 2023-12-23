<?php
require("connect.php");

$sql = "CREATE TABLE bill (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    STIME TIME NOT NULL,
    ETIME TIME NOT NULL,
    SDATE DATE NOT NULL,
    NOTE VARCHAR(100) NOT NULL,
    ID_CLIENT INT NOT NULL UNIQUE,
    ID_ROOM INT NOT NULL UNIQUE,
    FOREIGN KEY (ID_CLIENT ) REFERENCES client(ID),
    FOREIGN KEY (ID_ROOM ) REFERENCES room(ID)

)";

if ($conn->query($sql) === TRUE) {
    echo "create table bill successfully";
} else {
    echo "error: " . $conn->error;
}
?>