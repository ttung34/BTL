<?php
require("connect.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM client WHERE ID = $id";
    if($conn->query($sql) === TRUE){
        echo "Xoá thành công";
    }else{
        echo "Error";
    }
}else{
    echo "Không nhận được id";
}

?>