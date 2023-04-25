<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Product Detail</title>
    <link rel="stylesheet" href="detail.css">
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

    <?php
        include_once("db.php");
        if (isset($_GET['productID'])) {
            $sql = "Select * From `product` WHERE `productID` = '" . $_GET['productID'] . "' ";
            $product = query($sql);
        }
    ?>

    <h1 style="text-align: center; font-size: 40px; color: darkorchid; margin-top: 20px">Mobile Detail</h1>
    <hr style="margin-left: 500px; width: 280px; height: 3px; background-color: rgb(182, 52, 205);">

    
    <div class="container">
        <div class="row">
            <?php
                foreach($product as $p){
            ?>
            
            <div class="col-md-5">
                <img src="<?= $p[2] ?>" alt="" width="450px" height="550px">
            </div>
            <div class="col-md-7">
            <form action="" method="post">
                <h2 style="margin-top: 30px;"><?= $p[1] ?></h2>
                <input type="hidden" name="product_name" value="<?= $p[1] ?>">
                <p style="font-size:18px"><b>Product code:</b> <?= $p[0] ?></p>
                <input type="hidden" name="product_id" value="<?= $p[0] ?>">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <p id="product_price" class="price"><?= $p[3] ?> $</p>
                <input type="hidden" name="product_price" value="<?= $p[3] ?>">
                <p style="font-size:18px"><b>Description: </b><?= $p[4] ?></p>
                <p style="font-size:18px"><b>Sepecific Description: </b><?= $p[6] ?></p>        
                <button type="submit" name="addCart" class="btn btn-success cart">Add to cart</button>
            </form>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    
    
    <?php
        if (isset($_POST['addCart'])) {
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $sql = "INSERT INTO `cart`(`name`, `price`) VALUES ('$product_name','$product_price')";
            query($sql);
        }
    ?>

    <?php
        include_once("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>