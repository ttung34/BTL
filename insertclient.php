<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
</head>
<body>
    <form method="post">
        <label for="">ID
            <input type="number" name="id" id="id">
        </label><br><br>
        <label for="">Name
            <input type="text" name="name" id="name">
        </label><br><br>
        <label for="">
            Date of brithday
            <input type="date" name="date" id="date">
        </label><br><br>
        <label for="">Card
            <input type="text" name="card" id="card">
        </label><br><br>
        <label for="">Address
            <input type="text" name="address" id="address">
        </label><br><br>
        <button name="addclient">Add Client</button>
    </form>
</body>
<?php
require("connect.php");
if (isset($_POST['addclient'])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $date = $_POST["date"];
    $card = $_POST["card"];
    $address = $_POST["address"];

    if(!empty($id) && !empty($name) && !empty($date) && !empty($card) && !empty($address)){
        $sql = "INSERT INTO client(ID,NAMECLIENT,DATEOFBRITH,CARD,ADDRESS) VALUES ('$id','$name','$date','$card','$address')";
        if ($conn->query($sql) === TRUE){
            echo "Thêm dữ liệu thành công";
        }else{
            echo "Sai dữ liệu";
        }
    }
    else{
    echo "Cần nhập đủ thông tin <br><br>";
}
}

?>
</html>