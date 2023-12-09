<section class="main">
    <nav class="navbar navbar-expand-lg" style="background-color:blanchedalmond;">
        <a class="navbar-brand" href="#"><img src="Image/logo.jpeg" width="70" height="70" alt="" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active" style="margin-left: 60px;">
            <a class="nav-link" href="user.php" style="color:black; font-size: 18px; font-weight:bold">Home</a>
        </li>
        <li class="nav-item active" style="margin-left: 30px;">
            <a class="nav-link" href="product.php" style="color:black; font-size: 18px; font-weight:bold" >All Mobile</a>
        </li>
        <li class="nav-item active" style="margin-left: 30px;">
            <a class="nav-link" href="#" style="color:black; font-size: 18px; font-weight:bold">About Shop</a>
        </li>
        <li class="nav-item active" style="margin-left: 30px;">
            <a class="nav-link" href="#" style="color:black; font-size: 18px; font-weight:bold">Contact us</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" style="margin-right: 100px;" method="GET">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-3 my-sm-0" type="submit">Search</button>
        </form>
        <button><a href="home.php"><i class="bi bi-box-arrow-left" style="font-size: 30px; color:#606060"></i></a></button>
        <button><a href="cart.php"><i class="bi bi-cart-fill" style="font-size: 30px; color:#606060"></i></a></button>
    </div>
</nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 20px;">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="image/banner2.jpeg" class="d-block w-100" alt="..." width="500px" height="300px">
        </div>
        <div class="carousel-item">
        <img src="image/banner.jpeg" class="d-block w-100" alt="..." width="500px" height="300px">
        </div>
        <div class="carousel-item">
        <img src="image/banner1.jpeg" class="d-block w-100" alt="..." width="500px" height="300px">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
    </div>
    </section>