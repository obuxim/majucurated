<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- Essential Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- SEO Meta Tags -->
    <title>Maju Curated</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Zubair Hasan">
    <meta copyright="Octoriz Private Limited">
    <!-- Including Favicons -->
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#9f00a7">
    <meta name="theme-color" content="#ffffff">
    <!-- Including Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Including Google Font (Lato) -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <!-- Including FontAwesome Kit -->
    <script src="https://kit.fontawesome.com/1c781ab882.js"></script>
    <!-- Including Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header class="d-flex align-items-center justify-content-around position-absolute bg-transparent p-2 text-light text-uppercase border-bottom border-white">
        <a href="index.php" class="navbar-brand"><img src="img/logo-light.png" alt="Maju Curated" /></a>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link text-light" href="index.php">home</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="photography.php">photography</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="videography.php">videography</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="design.php">design</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="shop.php">shop</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="about.php">about us</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="blog.php">blog</a></li>
        </ul>
        <a onclick=toggleNav() id="navToggle"><img src="img/menu-light.png" alt="Menu" /></a>
        <div id="menu" class="fixed-top w-100 h-100 bg-white text-dark d-none flex-column">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between p-2">
                    <a href="index.php" class="navbar-brand"><img src="img/logo-dark.png" alt="Maju Curated" /></a>
                    <a onclick=toggleNav() id="navToggle"><i class="fas fa-times fa-2x" ></i></a>
                </div>
            </div>
        </div>
    </header>
    <section id="home-slider" class="carousel slide align-itmes-center d-flex" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home-slider" data-slide-to="0" class="active"></li>
            <li data-target="#home-slider" data-slide-to="1"></li>
            <li data-target="#home-slider" data-slide-to="2"></li>
            <li data-target="#home-slider" data-slide-to="3"></li>
            <li data-target="#home-slider" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/home/slider/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/slider/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/slider/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/slider/4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/slider/5.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#home-slider" role="button" data-slide="prev">
            <img src="img/home/arrow_left.png" alt="Previous" />
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home-slider" role="button" data-slide="next">
            <img src="img/home/arrow_right.png" alt="Next" />
            <span class="sr-only">Next</span>
        </a>
    </section>