<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./insertroom.css">
    <title>Add room</title>
</head>
<body>
    
    <form action="" method="POST">
        <h1>Thêm Phòng</h1>
        <label for="">ID:
            <input type="number" name="id" id="id">
        </label><br><br>
        <label for="">Rates Room:
            <input type="text" name="price" id="price">
        </label><br><br>
        <label for="">Type Room:
            <input type="text" name="type" id="type">
        </label><br><br>
        <label for="">Kind:
            <input type="text" name="kind" id="kind">
        </label><br><br>
        <button name="addroom">Add Room</button>
    </form>
    
    <?php
       require ("connect.php");
        if(isset($_POST['addroom'])){
            $id = $_POST['id'];
            $price = $_POST['price'];
            $type = $_POST['type'];
            $kind = $_POST['kind'];
            
            if(!empty($id) && !empty($price)  && !empty($type) && !empty($kind)){
                $sql = "INSERT INTO room(ID,PRICE,TYPEROOM,KIND) VALUES ('$id','$price','$type','$kind')";

                if ($conn->query($sql) === TRUE){
                    echo "Thêm dữ liệu thành công";
                    header("refresh:1;url=displayroom.php");
                }else{
                    echo "Sai dữ liệu";
                }
            }else{
                echo "Cần nhập đủ dữ liệu để tiếp tục";
            }
        }
    ?>
</body>
</html>