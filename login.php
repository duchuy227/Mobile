<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<?php 
    include_once("db.php");
    $sql = "select * from account";
    $accounts = query($sql);
?>
<body>
    <div class="login" style="margin-top: 10%;">
        <h1>Login</h1>
        <form action="" method="post">
            <label>Username</label>
            <input type="text" name="username" placeholder="" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="" required>

            <button type="submit" value="login" name="login">Login</button>
        </form>

        <p>If you're customer. <span>Please </span><a href="register.php">Register</a></p>

        <?php
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                for ($i = 0; $i < count($accounts); $i++) {
                if ($accounts[$i][1] == $username && $accounts[$i][2] == $password) {
                    header('location:admin.php');
                }
                }
                echo "<script>alert('username or password incorrect')</script>";
            }
        ?>
    </div>
</body>
</html>