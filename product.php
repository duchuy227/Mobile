<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="product.css">
    <title>Mobile</title>
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
    <?php include_once("header.php"); ?>
    <?php
        include_once("db.php");
        $sql = "select * from product";

        if(isset($_GET['search'])){
            $search = $_GET['search'];
            $sql = "Select * From `product` WHERE `productName` like '%$search%'";
        }

        if (isset($_GET['brandid'])) {
            $sql = "Select * From `product` WHERE `brandid` = '" . $_GET['brandid'] . "' ";
        }
        $product = query($sql);
    ?>
    <h1 style="text-align: center; font-size: 50px; color: darkorchid; margin-top: 20px">All Mobile</h1>
    <hr style="margin-left: 500px; width: 280px; height: 3px; background-color: rgb(182, 52, 205);">
    <?php
        include_once("brand.php");
    ?>
    <form action="" method="post" class="product"> 
            <?php foreach($product as $p){ ?>
                <div class="card">
                    <a href="product_detail.php?productID=<?= $p[0] ?>"style="text-decoration:none">
                    <div class="image"><img src="<?= $p[2] ?>" alt="" class="img-fluid"></div></a>
                    <div class="caption">
                        <p class="rate">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </p>
                        <p class="product-name"><?= $p[1] ?></p>
                        <input type="hidden" name="product_name" value="<?= $p[1] ?>">
                        <p class="price"><?= $p[3] ?>$</p>
                        <input type="hidden" name="product_price" value="<?= $p[3] ?>">
                    </div>
                    <button name="addCart" type="submit" class="add">Add to Cart</button>
                </div>
            <?php
                }
            ?>
    </form>
    
    <?php
        if (isset($_POST['addCart'])) {
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $sql = "INSERT INTO `cart`(`name`, `price`) VALUES ('$product_name','$product_price')";
            query($sql);
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <?php
        include_once("footer.php");
    ?>
</body>
</html>