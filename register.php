<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./register.css">
    <title>Register</title>
        <style>
            p{
                color:#de4e55;
                margin-left: 45%;

            }
        </style>
</head>
<body>
    <div class="form_register">
        <form method="post">
            <h1>Đăng ký tài khoản </h1>
            <div class="container_user">
                <label for="">
                    <p>Full Name:</p>
                    <input type="text" name="name" id="name">
                </label><br><br>
            </div>
            <div class="container_user">
                <label for="">
                    <p>User_login:</p>
                    <input type="text" name="user" id="user">
                </label><br><br>
            </div>
            <div class="container_user">
                <label for="">
                    <p>Gmail:</p>
                    <input type="text" name="email" id="email">
                </label><br><br>
            </div>
            <div class="container_pass">
                <label for="">
                    <p>Pass:</p>
                    <input type="password" name="pass" id="pass">
                </label><br><br> 
            </div>
            <button name="add">Register</button>
        </form>
    </div>
    

    <?php
        require ("connect.php");
     
        if(isset($_POST['add'])){
            $name = $_POST['name'];
            $user = $_POST['user'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            if(!empty($name) && !empty($user) && !empty($email) && !empty($pass)){
                $sql = "INSERT INTO user(FULL_NAME, USER, GMAIL, PASS)
                VALUES ('$name','$user','$email','$pass')";

                 if ($conn->query($sql) === TRUE){
                    echo "<p>Successfully</p>";
                    header("refresh:2;url=login_form.php");
                }else{
                    echo "<p>Tài khoản này đã có</p>";
                }
            }else{
                echo "<p>Cần nhập đủ dữ liệu để tiếp tục</p>";
            }
        };

    ?>
</body>
</html>