<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
</head>
<body>
    <form method="POST">
        <label>ID
            <input type="number" name="id" id="id">
        </label><br><br>
        <label >Start
            <input type="time" name="start" id="start">
        </label><br><br>
        <label >End
            <input type="time" name="end" id="end">
        </label><br><br>
        <label>Date
            <input type="date" name="dates" id="dates">
        </label><br><br>
        <label>Note
            <input type="text" name="note" id="note">
        </label><br><br>
        <label>ID_Client
            <input type="number" name="client" id="client">
        </label><br><br>
        <label >ID_Room
            <input type="number" name="room" id="room">
        </label><br><br>
        <button name="bill">Bill</button>
    </form>    

    <?php
        require("connect.php");

        if(isset($_POST['bill'])){
            $id = $_POST['id'];
            $start = $_POST['start'];
            $end = $_POST['end'];
            $dates = $_POST['dates'];
            $note = $_POST['note'];
            $id_client = $_POST['client'];
            $id_room = $_POST['room'];

            if(!empty($id) && !empty($start) && !empty($end) && !empty($dates) && !empty($note) && !empty($id_client) && !empty($id_room)){
                $sql = "INSERT INTO bill(ID,STIME,ETIME,SDATE,NOTE,ID_CLIENT,ID_ROOM)
                VALUES ('$id','$start','$end','$dates','$note','$id_client','$id_room')";

                if($conn->query($sql) === TRUE){
                    echo "Successfully";
                }else{
                    echo "Error";
                }
            }else{
                echo "No enough data";           
            }
        }
    ?>
    
</body>
</html>