<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Admin Page</title>
</head>
<style>
    .main h1
    {
            text-align: center;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
            margin-bottom: 40px;
            margin-top: 1rem;
            color: 	#FF6347;
            text-transform: uppercase;
            letter-spacing: 5px;
    }
    .main img
    {
        text-align: center;
        margin-bottom: 2rem;
        width: 900px;
        height: 400px;
        margin-left: 180px;
    }
</style>
<body>
    <?php 
    include_once("headeradmin.php");
    ?>

    <div class="main" style="background-color: #F0FFFF;">
        <h1>Welcome to Admin Page</h1>
        <img src="Image/image.jpeg" >
    </div>
    
    <?php 
    include_once("footer.php");
    ?>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>