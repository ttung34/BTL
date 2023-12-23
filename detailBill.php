<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Bill</title>

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
    <?php
        if($result->num_rows >0){
    ?>
    <table border="1px solid black"
    width=50%
    align='center'>
    <caption><p>Detail Bill</p></caption>
    <?php
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Start Time</th>";
        echo "<th>End Time</th>";
        echo "<th>Date</th>";
        echo "<th>Note</th>";
        echo "<th>ID Client</th>";
        echo "<th>ID Room</th>";
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
            echo "</tr>";
        };
        ?>
    </table><br><br>
    <?php
    }?>
</body>
</html>