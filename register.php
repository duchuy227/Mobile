

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <h4>Register to become a customer</h4>
        <form action="" method="post">
            <label>Username</label>
            <input type="text" name="userName" placeholder="" required>
            <label>Password</label>
            <input type="password" name="UserPassword" placeholder="" required minlength="6">
            <label>Confirm Password</label>
            <input type="password" name="cPassword" placeholder="" required minlength="6">
            <label>Email</label>
            <input type="email" name="Email" placeholder="" required>
            <label>Date of Birth</label>
            <input type="date" name="birthday" placeholder="" required>
            <label>Phone number</label>
            <input type="text" name="PhoneNumber" placeholder="" required minlength="10">

            <button type="submit" value="submit" name="submit"> Register</button>
        </form>

        <p>By clicking Sign up button, you're customer <br>
        <a href="">Term and Conditional</a> and <a href="">Policy Privacy</a></p>


        <?php 
            include_once("db.php");
            if (isset($_POST['submit'])){
                header('location:user.php');
                echo "<script>'Regiter Successfully'</script>";
                $userName = $_POST['userName'];
                $Email = $_POST['Email'];
                $PhoneNumber = $_POST['PhoneNumber'];
                $birthday = $_POST['birthday'];
                $UserPassword = $_POST['UserPassword'];
                $cPassword = $_POST['cPassword'];
                $sql = "INSERT INTO `account`( `username`, `password`, `email`, `Date_of_birth`, `phone_number`)
                VALUES ('$userName','$UserPassword','$Email','$birthday','$PhoneNumber')";
                query($sql);
                
            }
        ?>
    </div>
</body>
</html>