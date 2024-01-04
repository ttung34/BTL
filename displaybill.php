<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./displaybill.css">
    <title>List Bill</title>

      <style>
        table{
            align-items: center;
            justify-content: center;
        }
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

        <div>

            <div class="insert"><a href="./insertbill.php" id="insert">Insert</a></div>
            <div class="search"><a href="./searchBill.php" id="insert">Search</a></div>
            <div class="search"><a href="./deleteCheckBoxBill.php" id="insert">Delete</a></div>
            <div class="search"><a href="./homepage.php" id="insert">Home</a></div>

        </div>



    <?php
        require ("connect.php");
        $sql = "SELECT * FROM bill";
        $result = mysqli_query($conn, $sql);
    ?>

    <table border="1px solid black"
    width=50%
    align='center'>
        <caption><p>List Bill</p></caption>
        <?php
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Start Time</th>";
        echo "<th>End Time</th>";
        echo "<th>Date</th>";
        echo "<th>Note</th>";
        echo "<th>ID Client</th>";
        echo "<th>ID Room</th>";
        echo "<th>Function</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["STIME"] . "</td>";
            echo "<td>" . $row["ETIME"] . "</td>";
            echo "<td>" . $row["SDATE"] . "</td>";
            echo "<td>" . $row["NOTE"] . "</td>";
            echo "<td>" . $row["ID_CLIENT"] . "</td>";
            echo "<td>" . $row["ID_ROOM"] . "</td>";
             echo "<td>
            <a href='updatebill.php?id=".$row["ID"]."'>Sửa</a>
            </td>";
            echo "</tr>";
        };
        ?>
    </table><br><br>
</body>
</html>