<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['USER'])){
            unset($_SESSION['USER']);
        }
    ?>
    <a href='homepage.php'>Home</a>
</body>
</html>