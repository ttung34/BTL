<?php
    require("connect.php");
    if(isset($_POST["delete"]) && isset($_POST["deleteId"])){
  foreach($_POST["deleteId"] as $deleteId){
    $delete = "DELETE FROM client WHERE ID = $deleteId";
    mysqli_query($conn, $delete);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./deletecheckboxclient.css">
    <title>Delete Checkbox</title>
</head>
<body>
    <div class="list"><a href="./displayclient.php" id="list">Danh sách</a></div>
    <table border="1px solid black"
    width=50%
    align='center'>
        <form method="post">

            <tr>
                <th><button name="delete" type="submit">Delete</button></th>
                <th>ID</th>
                <th>Phone</th>
                <th>Name</th>
                <th>Date</th>
                <th>Card</th>
                <th>Address</th>
            </tr>
            <?php
                $rows = mysqli_query($conn, "SELECT * FROM client");
                $i = 1;
                foreach($rows as $row) :
            ?>

            <tr>
                <td align = center><input type="checkbox" name="deleteId[]" value="<?php echo $row['ID']; ?>"> </td>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["PHONE"]?></td>
                <td><?php echo $row["NAMECLIENT"]?></td>
                <td><?php echo $row["DATEOFBRITH"]?></td>
                <td><?php echo $row["CARD"]?></td>
                <td><?php echo $row["ADDRESS"]?></td>
            </tr>
            <?php endforeach; ?>
        </form>
    </table>
</body>
</html>