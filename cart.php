<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Cart</title>
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
        $sql = "Select sum(price) from cart";
        $total_money = query($sql);
    ?>

    <h1 style="text-align: center; font-size: 40px; color: darkorchid; margin-top: 20px;">Mobile Cart</h1>
    <hr style="margin-left: 500px; width: 280px; height: 3px; background-color: rgb(182, 52, 205);">
    <div class="container">
        <table class="table table-primary table-bordered border-bold" style="margin-top: 35px;">
            <thead class="thead-dark">
                <tr class="table-secondary border-info-bold">
                    <th>Name</th>
                    <th>Price</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <?php
                $sql = "Select * from cart";
                $cart = query($sql);
                foreach($cart as $c){
            ?>
                        <tr>
                            <td style="font-size:20px"><?= $c[1]?></td>
                            <input type="hidden" name="name" value="<?= $c[1]?>">
                            <td style="font-size:20px"><?= $c[2]?>$</td>
                            <input type="hidden" name="price" value="<?= $c[2]?>">
                            <td><a type="button" class="btn btn-danger btn-sm" href="cart.php?deleteid=<?= $c[0]?>"><b>Delete</b></a></td>
                        </tr>
                    <?php
                        }
                    ?>
                    <td colspan="1" style="font-size:20px">Total Price</td>
                        <td style="font-size:20px"> <?= $total_money[0][0] ?> $ </td>
                        <input type="hidden" name="total_money" value="<?= $total_money[0][0] ?>">
        </table>
        <a style="font-size: 20px; font-weight:bold; margin-bottom: 30px; margin-left: 900px" type="button" class="btn btn-warning btn-sm" href="success.php">Payment</a>
    </div>
    
    <?php
        include_once("footer.php");
    ?>

    <?php
    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];
        echo "<script> '" . $id . "' </script>";
        $sql = "delete from cart where id = '" . $id . "'";
        query($sql);
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>