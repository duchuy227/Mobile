<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>User Page</title>
    <link rel="stylesheet" href="user.css">
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

    <section class="middle">
        <div class="container">
            <h1 class="title text-centre">Why choose Shop</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p class="title">Why we are different</p>
                    <ul>
                        <li><i class="bi bi-info-circle-fill"></i> &nbsp;Believe in doing business with honesty</li>
                        <li><i class="bi bi-info-circle-fill"></i> &nbsp;Believe in doing business with honesty</li>
                        <li><i class="bi bi-info-circle-fill"></i> &nbsp;Believe in doing business with honesty</li>
                        <li><i class="bi bi-info-circle-fill"></i> &nbsp;Believe in doing business with honesty</li>
                        <li><i class="bi bi-info-circle-fill"></i> &nbsp;Believe in doing business with honesty</li>
                        <li><i class="bi bi-info-circle-fill"></i> &nbsp;Believe in doing business with honesty</li>
                        <li><i class="bi bi-info-circle-fill"></i> &nbsp;Believe in doing business with honesty</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="image/network.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="image/banner4.jpeg" class="d-block w-100" alt="..." width="500px" height="400px">
                </div>
                <div class="carousel-item">
                <img src="image/banner5.jpeg" class="d-block w-100" alt="..." width="500px" height="400px">
                </div>
                <div class="carousel-item">
                <img src="image/banner6.jpeg" class="d-block w-100" alt="..." width="500px" height="400px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>

    <?php
        include_once("footer.php");
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>