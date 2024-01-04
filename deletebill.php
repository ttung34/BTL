<?php
   require ("connect.php");

    if(isset($_GET['id'])){
        $id =$_GET['id'];

        $sql = "DELETE FROM bill WHERE ID = $id";
        if($conn->query($sql) === TRUE){
            echo "Successfully";
            header("refresh:1;url=displaybill.php");
        }else{
            echo "Error";
        }
    }else{
        echo "No enough data";
    }
?>