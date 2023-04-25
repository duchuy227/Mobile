<?php
    include_once("db.php");
    $sql = "select * from brand";
    $brand = query($sql);
?>

<?php
    foreach($brand as $b){
?>
    
        <button style="margin-left: 180px; font-size: 20px" name="brandid" class="btn btn-secondary">
        <a style="text-decoration:none; color:white" href="product.php?brandid=<?= $b[0] ?>">
        <?= $b[1] ?></a></button>
<?php
    }
?>