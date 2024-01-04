<?php
require ("connect.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM room WHERE ID = $id";
    if($conn->query($sql) === TRUE){
        echo "Successfully";
        header("refresh:1;url=displayroom.php");
    }else{
        echo "Error";
    }
}else{
    echo "Không nhận được id";
}
?>