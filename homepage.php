
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="./homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<body>
   <div class="container_header">
        <?php
            session_start();

            if(isset($_SESSION["USER"])){
                echo "<div><a href='logout.php'>Logout</a></div>";
        ?>

        <div class="container_header_room">
            <a href="pageroom.php" id="room">Room</a>
        </div>

        <div class="container_header_room">
            <a href="pageclient.php" id="room">Client</a>
        </div>

        <div class="container_header_room">
            <a href="pagebill.php" id="room">Bill</a>
        </div>


        <div class="container_header_icon">
            <i class="fa-brands fa-facebook" id="facebook"></i>
            <i class="fa-brands fa-instagram" id="instagram" ></i>
            <i class="fa-brands fa-youtube" id="youtube"></i>
            <i class="fa-brands fa-tiktok" id="tiktok"></i>
        </div>

        
        <?php
            }else{
                echo "<div><a href='login_form.php'>Login</a></div>";
            }
        ?>

      
   </div>
</body>
</html>