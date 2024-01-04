<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./displayroom.css">
    <title>List Room</title>

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

    <div class="insert"><a href="./insertroom.php" id="insert">Insert</a></div>
    <div class="search"><a href="" id="insert">Search</a></div>
        <div class="search"><a href="./deleteCheckBoxRoom.php" id="insert">Delete</a></div>
            <div class="search"><a href="./homepage.php" id="insert">Home</a></div>

    <?php
        require ("connect.php");
        $sql = "SELECT * FROM room";
        $result = mysqli_query($conn, $sql);
    ?>

    <table border="1px solid black"
    width=50%
    align='center'>
        <caption><p>Thông tin phòng</p></caption>
        <?php
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>PRICE</th>";
        echo "<th>TYPEROOM</th>";
        echo "<th>KIND</th>";
        echo "<th>Tuỳ chọn</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["PRICE"] . "</td>";
            echo "<td>" . $row["TYPEROOM"] . "</td>";
            echo "<td>" . $row["KIND"] . "</td>";
            echo "<td>
            <a href='updateroom.php?id=".$row["ID"]."'>Sửa</a>
            </td>";
            echo "</tr>";
        };
        ?>
    </table><br><br>
</body>
</html>