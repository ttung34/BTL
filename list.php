<?php
    require ("connect.php");
$sql = "CREATE TABLE list (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    HSD varchar(50) NOT NULL,
    NXS DATE NOT NULL,
    NAMELIST VARCHAR(50) NOT NULL,
    PRICE VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "create table list successfully";
}else{
    echo "Error: " . $conn->error;
}

?>
