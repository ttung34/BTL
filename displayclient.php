<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./displayclient.css">
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
      
        a{
            color:white;
        }
        td {
            background-color: #f08d8f;
            color: #fff;
        }
        th{
            background-color: #8dd9f0;
            color: #fff;
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
    <div>
     <div class="insert"><a href="./insertclient.php" id="insert">Insert</a></div>
    <div class="search"><a href="./searchClient.php" id="insert">Search</a></div>
    <div class="search"><a href="./deleteCheckboxclient.php" id="insert">Delete</a></div>
    <div class="search"><a href="./homepage.php" id="insert">Home</a></div>
    </div>

    <?php
        require ("connect.php");
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
        echo "<th>Phone</th>";
        echo "<th>Name</th>";
        echo "<th>Date</th>";
        echo "<th>Card</th>";
        echo "<th>Address</th>";
        echo "<th>Tuỳ chọn</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["PHONE"] . "</td>";
            echo "<td>" . $row["NAMECLIENT"] . "</td>";
            echo "<td>" . $row["DATEOFBRITH"] . "</td>";
            echo "<td>" . $row["CARD"] . "</td>";
            echo "<td>" . $row["ADDRESS"] . "</td>";
            echo "<td>
            <a href='updateclient.php?id=".$row["ID"]."'>Sửa</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table><br>

</body>
</html>