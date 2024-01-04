<?php
    require("connect.php");
    if(isset($_POST["delete"]) && isset($_POST["deleteId"])){
  foreach($_POST["deleteId"] as $deleteId){
    $delete = "DELETE FROM bill WHERE ID = $deleteId";
    mysqli_query($conn, $delete);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./deleteCheckBoxBill.css">
    <title>Delete Checkbox</title>
</head>
<body>
    <div class="list"><a href="./displaybill.php" id="list">Danh sách</a></div>
    <table border="1px solid black"
    width=50%
    align='center'>
        <form method="post">

            <tr>
                <th><button name="delete" type="submit">Delete</button></th>
                <th>ID</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Date</th>
                <th>Note</th>
                <th>ID Client</th>
                <th>ID Room</th>
            </tr>
            <?php
                $rows = mysqli_query($conn, "SELECT * FROM bill");
               
                foreach($rows as $row) :
                     $i = $row["ID"];
            ?>

            <tr>
                <td align = center><input type="checkbox" name="deleteId[]" value="<?php echo $row['ID']; ?>"> </td>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["STIME"]?></td>
                <td><?php echo $row["ETIME"]?></td>
                <td><?php echo $row["SDATE"]?></td>
                <td><?php echo $row["NOTE"]?></td>
                <td><?php echo $row["ID_CLIENT"]?></td>
                <td><?php echo $row["ID_ROOM"]?></td>
            </tr>
            <?php endforeach; ?>
        </form>
    </table>
</body>
</html>