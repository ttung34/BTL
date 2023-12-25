<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./searchBill.css">
    <title>Search Client</title>

</head>
<body>
    <h1>Search Client</h1>
    <form action="" method="GET">
        <span>Card:</span>
        <input type="number" name="card" id="card"><br><br>
        <input type="submit" value="Search" id="submit">
    </form>

    <?php
        if(isset($_GET['card']))
        {
            $card = $_GET['card'];

            require ("connect.php");

            mysqli_set_charset($conn, 'UTF-8');

            $sql = "SELECT * FROM client WHERE CARD = '$card'";

            $result = $conn->query($sql);

            require('detailClient.php');

            $conn->close();
        }
    ?>
</body>
</html>