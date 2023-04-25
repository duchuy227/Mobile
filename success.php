<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Succesful</title>
</head>
    <style>
        nav button {
                background: transparent;
                display: inline-block;
                border: none;
                font-size: 1.2rem;
                text-transform: uppercase;
                margin-right: 20px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .main {
            background-color: #F5F5DC;
        }
    </style>
<body>
    <?php
        include_once("header.php");
    ?>

    <div class="container">
        <h1 style="text-align:center; color:deepskyblue; font-size: 50px; margin-top: 30px">Payment success</h1>
        <h2 style="text-align:center; color:deepskyblue; font-size: 50px; margin-top: 30px">Your order will be delivered to your home</h2>
        <i style="font-size: 100px; margin-left: 370px" class="bi bi-bell"> </i>
        <i style="font-size: 100px" class="bi bi-box2-heart"> </i>
        <i style="font-size: 100px" class="bi bi-truck"></i>
        <img src="image/payment.png" width="100%" height="auto" alt="">
    </div>

    <?php
        include_once("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>