<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Bill</title>
</head>
<body>
    <form method="POST">
        <label>
            Start time
            <input type="time" name="start" id="start">
        </label><br><br>
        <label>
            End time
            <input type="time" name="end" id="end">
        </label><br><br>
        <label>
            Date
            <input type="date" name="dates" id="dates">
        </label><br><br>
        <label>
            Note
            <input type="text" name="note" id="note">
        </label><br><br>
        <label>
            ID Client
            <input type="number" name="client" id="client">
        </label><br><br>
        <label>
            ID Room
            <input type="number" name="room" id="room">
        </label><br><br>
        <button name="update">Update Bill</button>
    </form>

    <?php

        require("connect.php");

        if(isset($_POST['update']) && isset($_GET['id'])){
            $id = $_GET['id'];
            $start = $_POST['start'];
            $end = $_POST['end'];
            $dates = $_POST['dates'];
            $note = $_POST['note'];
            $client = $_POST['client'];
            $room = $_POST['room'];

            if(!empty($id) && !empty($start) && !empty($end) && !empty($dates) && !empty($note) && !empty($client) && !empty($room)){
                $sql = "UPDATE bill SET
                STIME = '$start',
                ETIME = '$end',
                SDATE = '$dates',
                NOTE = '$note',
                ID_CLIENT = '$client',
                ID_ROOM = '$room'
                WHERE ID = '$id'";

                if($conn->query($sql) === TRUE){
                    echo "Successfully";
                }else{
                    echo "Error: " . $conn->error;
                }
            }else{
                echo "Not enough data";
            }
        }

    ?>

</body>
</html>