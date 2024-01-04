<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./searchBill.css">
    <title>Search Bill</title>

</head>
<body>
        <div class="list"><a href="./displaybill.php" id="list">Danh sách</a></div>
    <h1>Search Bill</h1>
    <form action="" method="GET">
        <span>ID Client:</span>
        <input type="number" name="client" id="client"><br><br>
        <input type="submit" value="Search" id="submit">
    </form>

    <?php
        if(isset($_GET['client']))
        {
            $client = $_GET['client'];

            require ("connect.php");

            mysqli_set_charset($conn, 'UTF-8');

            $sql = "SELECT * FROM bill WHERE ID_CLIENT = '$client'";

            $result = $conn->query($sql);

            require('detailBill.php');

            $conn->close();
        }
    ?>
</body>
</html>