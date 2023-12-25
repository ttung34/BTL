<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./insertclient.css">
    <title>Add Client</title>
</head>
<body>
    <form method="POST">
        <h1>Thêm khách hàng</h1>
        <label for="">ID
            <input type="number" name="id" id="id">
        </label><br><br>
         <label for="">Phone
            <input type="number" name="phone" id="phone">
        </label><br><br>
         <label for="">Name
            <input type="text" name="name" id="name">
        </label><br><br>
         <label for="">Date
            <input type="number" name="date" id="date">
        </label><br><br>
         <label for="">Card
            <input type="number" name="card" id="card">
        </label><br><br>
         <label for="">Address
            <input type="number" name="address" id="address">
        </label><br><br>
        <button name="add">Add Client</button>
    </form>

    <?php
        require ("connect.php");
        if(isset($_POST['add'])){
            $id = $_POST['id'];
            $phone = $_POST['phone'];
            $name = $_POST['name'];
            $date = $_POST['date'];
            $card = $_POST['card'];
            $address = $_POST['address'];


            if(!empty($id) && !empty($phone) && !empty($name) && !empty($date) && !empty($card) && !empty($address)){
                $sql = "INSERT INTO client(ID,PHONE,NAMECLIENT,DATEOFBRITH,CARD,ADDRESS)
                VALUES ('$id','$phone','$name','$date','$card','$address')";

                if ($conn->query($sql) === TRUE){
                    echo "Successfully";
                }else{
                    echo "Error";
                }
            }else{
                echo "Cần nhập đủ dữ liệu để tiếp tục";
            }
        }
    ?>
</body>
</html>