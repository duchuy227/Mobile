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
    <title>All Product</title>
</head>
<style>
    h1 {
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
    <h1>All Product</h1>
    <div class="container">
    <table class="table table-primary table-bordered border-bold">
        <thead class="thead-dark">
            <tr class="table-primary border-info-bold">
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Specific Description</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>
    <?php 
        $conditions = "1 = 1";
        $sql = "select * from product where $conditions";
        if (isset($_GET['brandid'])) {
            $sql = "Select * From `product` WHERE `brandid` = '" . $_GET['brandid'] . "' ";
            $conditions = "brandid = " . $_GET['brandid'];
        }
        $product = query($sql);
        for ($i = 0; $i < count($product); $i++) {
        ?>
        <thead>
            <tr>
                <th><?= $product[$i][1] ?></th>
                <th> <img style="width: 150px" src="<?= $product[$i][2] ?>"></th>
                <th> <?= $product[$i][3] ?>$</th>
                <th> <?= $product[$i][4] ?> </th>
                <th> <?= $product[$i][6] ?> </th>
                <th>
                    <a type="button" class="btn btn-danger btn-sm" href="update.php?updateid=<?= $product[$i][0] ?>"><b>Edit</b></a>
                </th>
                <th>
                    <a type="button" class="btn btn-danger btn-sm" href="all.php?deleteid=<?= $product[$i][0] ?>"><b>Delete</b></a>
                </th>
            </tr>
        </thead>
            <?php 
            } 
            ?>
    </table>
    </div>
    <?php
    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];
        echo "<script> '" . $id . "' </script>";
        $sql = "delete from product where productId = '" . $id . "'";
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