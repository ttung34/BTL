<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Client</title>

    <style>
        td a {
            text-decoration: none;
            border: 1px solid black;
            padding: 3px;
        } 
        td{
            height: 30px;
            text-align:center;
        }
        a:hover {
            background-color: yellow;
        }
        td {
            background-color: #f08d8f;
        }
        th{
            background-color: #8dd9f0;
        }
        table{
            margin-top:250px;
        }
        p{
            color:#c43151;
            font-size:20px;
            font-weight:600;
        }
    </style>
</head>
<body>
    <?php
        require "connect.php";
        $sql = "SELECT *FROM client";
        $result = mysqli_query($conn, $sql); 
    ?>
    <table border="1px solid black"
    width=50%
    align='center'>
        <caption><p>Thông tin khách hàng</p></caption>
        <?php
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Date</th>";
        echo "<th>Card</th>";
        echo "<th>Addres</th>";
        echo "<th>Tuỳ chọn</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["NAMECLIENT"] . "</td>";
            echo "<td>" . $row["DATEOFBRITH"] . "</td>";
            echo "<td>" . $row["CARD"] . "</td>";
            echo "<td>" . $row["ADDRESS"] . "</td>";
            echo "<td>
            <a href='updateclient.php?id=".$row["ID"]."'>Sửa</a>
            <a href='deleteclient.php?id=".$row["ID"]."'>Xoá</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table><br>
</body>
</html>