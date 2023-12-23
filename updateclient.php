<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa khách hàng</title>
</head>
<body>
    <form  method="POST">
        <label>
            Name
            <input type="text" name="name" id="name">
        </label><br><br>
        <label>Date
            <input type="date" name="date" id="date">
        </label><br><br>
        <label>Card
            <input type="text" name="card" id="card">
        </label><br><br>
        <label>Address
            <input type="text" name="address" id="address">
        </label><br><br>
        <button name="updateclient">Update</button>
    </form>

    <?php
        require("connect.php");

        if (isset($_POST['updateclient']) && isset($_GET['id'])){
            $id = $_GET['id'];
            $name = $_POST['name'];
            $date = $_POST['date'];
            $card = $_POST['card'];
            $address = $_POST['address'];

            if(!empty($id) && !empty($name) && !empty($date) && !empty($card) && !empty($address)){
                $sql = "UPDATE client SET
                NAMECLIENT = '$name',
                DATEOFBRITH = '$date',
                CARD = '$card',
                ADDRESS = '$address' 
                WHERE ID = '$id'";
                if ($conn->query($sql) === TRUE) {
                    echo "Sửa dữ liệu thành công";
                } else {
                    echo " Lỗi: " .$conn->error;
                }
            }else{
                echo "Điền đầy đủ dữ liệu";
            }
        }
    ?>
</body>
</html>