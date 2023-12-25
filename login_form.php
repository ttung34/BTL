
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./login_form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Login</h1>
        <div class="container_user">
            <label>
                <p>User</p>
                <input type="text" name="user" id="user" placeholder="User">
                <i class="fa-regular fa-user" id="icon_user"></i>
            </label><br><br>
        </div>
        <div class="container_pass">
             <label>
                <p>Password</p>
                <input type="password" name="pass" id="pass" placeholder="Password"> 
                <i class="fa-solid fa-key" id="icon_key"></i>
            </label><br><br>
        </div>
        
        <input type="submit" value="Login" name="login" id="login">
    </form>

    <?php
        require ("connect.php");

        if(isset($_POST['login'])){
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $sql = "SELECT * FROM user WHERE user = '$user' AND pass ='$pass'";

            $result = $conn->query($sql);
            if($result -> num_rows == 0){
                echo "<a href ='javascript: history.go(-1)'>Come back</a>";
                exit;
            }

            $row = $result->fetch_assoc();

            if($pass != $row['PASS']){
                echo "<a href ='javascript: history.go(-1)'>Come back</a>";
                exit;
            }
            
        session_start();
        $_SESSION['USER'] = $user;
        echo "<a href='homepage.php'>Home</a>";

        }
    ?>
</body>
</html>