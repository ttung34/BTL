<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./searchBill.css">
    <title>Search Client</title>

</head>
<body>
        <div class="list"><a href="./displayclient.php" id="list">Danh sách</a></div>
    <h1>Search Client</h1>
    <form action="" method="GET">
        <span>Phone:</span>
        <input type="number" name="phone" id="phone"><br><br>
        <input type="submit" value="Search" id="submit">
    </form>

    <?php
        if(isset($_GET['phone']))
        {
            $phone = $_GET['phone'];

            require ("connect.php");

            mysqli_set_charset($conn, 'UTF-8');

            $sql = "SELECT * FROM client WHERE PHONE = '$phone'";

            $result = $conn->query($sql);

            require('detailClient.php');

            $conn->close();
        }
    ?>
</body>
</html>