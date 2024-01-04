<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./insertclient.css">
    <title>Add Client</title>
    <style>

    </style>
</head>
<body>

    <div class="list"><a href="./displayclient.php" id="list">Danh sách</a></div>

    <form method="POST">
        <h1>Thêm khách hàng</h1>
         <label for="">Phone
            <input type="number" name="phone" id="phone">
        </label><br><br>
         <label for="">Name
            <input type="text" name="name" id="name">
        </label><br><br>
         <label for="">Date
            <input type="date" name="dates" id="dates">
        </label><br><br>
         <label for="">Card
            <input type="number" name="card" id="card">
        </label><br><br>
         <label for="">Address
            <input type="text" name="address" id="address">
        </label><br><br>
        <button name="add">Add Client</button>
    </form>

    <?php
        require ("connect.php");
        if(isset($_POST['add'])){
            $phone = $_POST['phone'];
            $name = $_POST['name'];
            $dates = $_POST['dates'];
            $card = $_POST['card'];
            $address = $_POST['address'];


            if(!empty($phone) && !empty($name) && !empty($dates) && !empty($card) && !empty($address)){
                $sql = "INSERT INTO client(PHONE,NAMECLIENT,DATEOFBRITH,CARD,ADDRESS)
                VALUES ('$phone','$name','$dates','$card','$address')";

                if ($conn->query($sql) === TRUE){
                    echo "<p>Successfully</p>";
                    header("refresh:1;url=displayclient.php");
                }else{
                    echo "<p>Tài khoản đã tồn tại</p>";
                }
            }else{
                echo "<p>Cần nhập đủ dữ liệu để tiếp tục</p>";
            }
        }
    ?>
</body>
</html>