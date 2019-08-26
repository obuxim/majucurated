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
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <!-- Including Google Font (Lato) -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <!-- Including FontAwesome Kit -->
    <script src="https://kit.fontawesome.com/1c781ab882.js"></script>
    <!-- Including Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header class="card bg-white pl-2 pr-3 text-dark text-uppercase px-18">
        <div class="container-fluid d-flex align-items-center justify-content-around">
            <a href="index.php" class="navbar-brand"><img src="img/logo-dark.png" alt="Maju Curated" /></a>
            <ul class="nav d-none d-md-flex">
                <li class="nav-item"><a class="nav-link text-dark" href="index.php">home</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="photography.php">photography</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="videography.php">videography</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="design.php">design</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="shop.php">shop</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="about.php">about us</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="blog.php">blog</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="blog-single.php">blog single</a></li>
            </ul>
            <a onclick=toggleNav() id="navToggle"><img src="img/menu-dark.png" alt="Menu" /></a>
        </div>
    </header>
    <div id="menu" class="fixed-top p-5 w-100 h-100 bg-white text-dark d-none flex-column justify-content-between">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between p-2">
                <a href="index.php" class="navbar-brand"><img src="img/logo-dark.png" alt="Maju Curated" /></a>
                <a onclick=toggleNav() id="navToggle"><i class="fas fa-times fa-2x" ></i></a>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 d-flex justify-content-md-center">
                        <div class="d-flex flex-column">
                            <a class="menu-header text-uppercase">home</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-md-center">
                        <div class="d-flex flex-column">
                            <a class="menu-header text-uppercase">production</a>
                            <a class="menu-item pl-4 text-capitalize">photography</a>
                            <a class="menu-item pl-4 text-capitalize">videography</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-md-center">
                        <div class="d-flex flex-column">
                            <a class="menu-header text-uppercase">design</a>
                            <a class="menu-item pl-4 text-capitalize">digital design</a>
                            <a class="menu-item pl-4 text-capitalize">branding</a>
                            <a class="menu-item pl-4 text-capitalize">marketing strategy</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-md-center">
                        <div class="d-flex flex-column">
                            <a class="menu-header text-uppercase">about us</a>
                            <a class="menu-item pl-4 text-capitalize">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container border-top border-dark d-flex justify-content-center py-4 py-md-0">
                <a href="https://instagram.com/majucurated" class="mx-2 mt-md-5 mx-md-5"><img src="img/social/instagram.png" class="img-fluid" /></a>
                <a href="https://facebook.com/majucurated" class="mx-2 mt-md-5 mx-md-5"><img src="img/social/facebook.png" class="img-fluid" /></a>
                <a href="https://pinterest.com/majucurated" class="mx-2 mt-md-5 mx-md-5"><img src="img/social/pinterest.png" class="img-fluid" /></a>
                <a href="https://youtube.com/majucurated" class="mx-2 mt-md-5 mx-md-5"><img src="img/social/youtube.png" class="img-fluid"></a>
            </div>
        </div>
    </div>