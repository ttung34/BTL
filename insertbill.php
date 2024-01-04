<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./insertbill.css">
    <title>Bill</title>
</head>
<body>

    <div class="list"><a href="./displaybill.php" id="list">Danh sách</a></div>

    <form method="POST">
        <h1>Thêm Bill</h1>
        <label >Start:
            <input type="time" name="start" id="start">
        </label><br><br>
        <label >End:
            <input type="time" name="end" id="end">
        </label><br><br>
        <label>Date:
            <input type="date" name="dates" id="dates">
        </label><br><br>
        <label>Note:
            <input type="text" name="note" id="note">
        </label><br><br>
        <label>ID Client:
            <input type="number" name="client" id="client">
        </label><br><br>
        <label >ID Room:
            <input type="number" name="room" id="room">
        </label><br><br>
        <button name="bill">Bill</button>
    </form>    

    <?php
        require ("connect.php");

        if(isset($_POST['bill'])){
            $start = $_POST['start'];
            $end = $_POST['end'];
            $dates = $_POST['dates'];
            $note = $_POST['note'];
            $id_client = $_POST['client'];
            $id_room = $_POST['room'];

            if( !empty($start) && !empty($end) && !empty($dates) && !empty($note) && !empty($id_client) && !empty($id_room)){
                $sql = "INSERT INTO bill(STIME,ETIME,SDATE,NOTE,ID_CLIENT,ID_ROOM)
                VALUES ('$start','$end','$dates','$note','$id_client','$id_room')";

                if($conn->query($sql) === TRUE){
                    echo "Successfully";
                    header("refresh:1;url=displaybill.php");
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