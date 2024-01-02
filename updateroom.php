<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./updateroom.css">

    <title>Sửa Room</title>
</head>
<body>
    <form method="POST">
        <h1>Update Room</h1>
        <label>
            Price:
            <input type="text" name="price" id="price">
        </label><br><br>
        <label>Type:
            <input type="text" name="type" id="type">
        </label><br><br>
        <label>Kind:
            <input type="text" name="kind" id="kind">
        </label><br><br>
        <button name="updateRoom">Update</button>
    </form>

    <?php
        require ("connect.php");

        if (isset($_POST['updateRoom']) && isset($_GET['id'])){
            $id = $_GET['id'];
            $price = $_POST['price'];
            $type = $_POST['type'];
            $kind = $_POST['kind'];

            if(!empty($id) && !empty($price) && !empty($type) && !empty($kind)){
                $sql = "UPDATE room SET
                PRICE = '$price',
                TYPEROOM = '$type',
                KIND = '$kind'
                WHERE ID = '$id'";
                if ($conn->query($sql) === TRUE) {
                    echo "Sửa dữ liệu thành công";
                    header("refresh:1;url=displayroom.php");
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