<?php
    include_once('db.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
    <style>
        h1 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            color: #DC143C;
            font-weight: bold;
        }
        h4 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            color: #DC143C;
            font-weight: bold;
        }
    </style>
<body>
    <?php 
        include_once("headeradmin.php");
    ?>

    <h1>New Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group" style="margin-left: 200px; margin-top: 50px">
            <label class="font-weight-bold"style="color: rgb(255,71,91); font-size: 30px">Product ID </label><input type="text" name="id">
    </div>
    <div class="form-group" style="margin-left: 200px; margin-right: 300px">
            <label class="font-weight-bold"style="color: rgb(255,71,91); font-size: 30px">Name</label>
            <input type="text" class="form-control" name="name" value="">
    </div>

        <div class="form-group" style="margin-left: 200px; margin-right: 300px">
            <label class="font-weight-bold"style="color: rgb(255,71,91); font-size: 30px">Image</label>
            <input type="file" name="image" value="" style="margin-top:10px">
        </div>

        <div class="form-group" style="margin-left: 200px; margin-right: 300px">
            <label class="font-weight-bold"style="color: rgb(255,71,91); font-size: 30px">Price</label>
            <input type="text" class="form-control" name="price" value="">
        </div>

        <div class="form-group"style="margin-left: 200px; margin-right: 300px">
            <label class="font-weight-bold"tyle="color: rgb(255,71,91); font-size: 30px">Description</label>
            <textarea type="text" class="form-control" name="description"></textarea>
        </div>

        <div class="form-group" style="margin-left: 200px">
            <label  class="font-weight-bold"tyle="color: rgb(255,71,91); font-size: 30px">Brand</label> <br>
            <select name="brand">
                <?php
                    $sql = "select * from brand";
                    $brand = query($sql);
                    for ($i = 0; $i < count($brand); $i++){          
                ?>
                    <option value="<?= $brand[$i][0] ?>"><?= $brand[$i][1] ?></option>
                <?php
                }
                ?>        
            </select>
        </div>
        <div class="form-group" style="margin-left: 200px; margin-right: 300px">
            <label class="font-weight-bold" style="color: rgb(255,71,91); font-size: 30px">Specific Description</label>
            <input type="text" class="form-control" name="specificDescription" value="">
        </div>
        <button type="submit" class="btn btn-success" id="submitButton" name="submit" style="margin-bottom: 30px; margin-left: 200px; font-size: 20px; text-transform:uppercase;">Add</button>
        <h4>Please click All Product after <br> click Add to view product</h4>
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $brand = $_POST['brand'];
            $specificDescription = $_POST['specificDescription'];
            $path = $_POST['image'];
            if ($_FILES) {
                $image = $_FILES['image']['name'];
                $path = "./image/" . $image;
                move_uploaded_file($_FILES['image']['tmp_name'], $path);
            }

            $sql = "INSERT INTO `product`(`productID`, `productName`, `productIMG`, `productPrice`, `description`, `brandid`, `specific_description`) 
            VALUES ('$id','$name','$path','$price','$description','$brand','$specificDescription')";
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