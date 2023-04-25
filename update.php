<?php
    include_once('db.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Update</title>
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

    <h1>Update Product</h1>
    <?php
        if (isset($_GET['updateid'])) {
        $id = $_GET['updateid'];
        $sql = "select * from product where productID = '" . $id . "'";
        $update = query($sql);
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group" style="margin-left: 200px; margin-top: 50px">
            <label class="font-weight-bold" for="id"
            style="color: rgb(255,71,91); font-size: 30px">Product ID </label>
            <input type="text" class ="insertForm" name ="iddisplay" value ="<?= $update[0][0] ?>" disabled>
            <input type="hidden" id="id" name="id" value="<?= $update[0][0] ?>">
        </div>
        <div class="form-group" style="margin-left: 200px; margin-right: 300px">
            <label class="font-weight-bold" for="name"
            style="color: rgb(255,71,91); font-size: 30px">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $update[0][1] ?>">
        </div>

        <div class="form-group" style="margin-left: 200px; margin-right: 300px">
            <label class="font-weight-bold" for="imageold"
            style="color: rgb(255,71,91); font-size: 30px">Image</label>
            <input type="text" class="form-control" id="imageold" name="imageold" value="<?= $update[0][2] ?>">
            <input type="file" name="image" value="" id="image" style="margin-top:10px">
        </div>

        <div class="form-group" style="margin-left: 200px; margin-right: 300px">
            <label class="font-weight-bold" for="price"
            style="color: rgb(255,71,91); font-size: 30px">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="<?= $update[0][3] ?>">
        </div>

        <div class="form-group"style="margin-left: 200px; margin-right: 300px">
            <label class="font-weight-bold" for="description"
            style="color: rgb(255,71,91); font-size: 30px">Description</label>
            <textarea type="text" class="form-control" id="description" name="description" value="<?= $update[0][4] ?>"><?= $update[0][4] ?></textarea>
        </div>

        <div class="form-group" style="margin-left: 200px">
            <label  class="font-weight-bold"for="brand"
            style="color: rgb(255,71,91); font-size: 30px">Brand</label> <br>
            <select name="brand" id="brand">
                <?php
                    $sql = "select * from brand";
                    $brand = query($sql);
                    for ($i = 0; $i < count($brand); $i++){
                        if($update[0][5] == $brand[$i][1]){
                ?>
                            <option value="<?= $brand[$i][0] ?>" selected><?= $brand[$i][1] ?></option>
                        <?php
                        } else {
                        ?>
                            <option value="<?= $brand[$i][0] ?>"><?= $brand[$i][1] ?></option>
                        <?php
                        }
                        ?>
                <?php
                    }
                ?>
            </select>
        </div>

        <div class="form-group" style="margin-left: 200px; margin-right: 300px">
            <label class="font-weight-bold" for="specificDescription" 
            style="color: rgb(255,71,91); font-size: 30px">
            Specific Description</label>

            <input type="text" class="form-control" id="specificDescription" 
            name="specificDescription" value="<?= $update[0][6] ?>">
        </div>

        <button type="submit" class="btn btn-success" 
        name="update" style="margin-bottom: 30px; margin-left: 200px; font-size: 20px; text-transform:uppercase;">
        Update</button>

        <h4>Please click All Product after <br> click Update to view product</h4>
    </form> 
    

    <?php 
        }
    ?>


    <?php 
        if (isset($_POST['update'])) {      
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $brand = $_POST['brand'];
            $specificDescription = $_POST['specificDescription'];
            $path = $_POST['imageold'];
            if ($_FILES) {
                $image = $_FILES['image']['name'];
                $path = "./image/" . $image;
                move_uploaded_file($_FILES['image']['tmp_name'], $path);
            }
            
            $sql = "UPDATE `product` SET `productName`='$name', `productIMG`='$path', `productPrice`='$price', `description`='$description', `brandid`='$brand', `specific_description`='$specificDescription' WHERE `productID`='$id'";
            query($sql);
            
            // header('location: http://localhost/Mobile/all.php');
        }
    ?>

    

    <?php 
        include_once("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>