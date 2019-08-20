<?php include "header.php"; ?>

<section id="photography-slider">
        <div class="row no-gutters">
            <div class="col-12 col-md-3 order-1 order-md-0">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner d-flex flex-column">
                        <div class="carousel-item active">
                            <img src="img/photography/1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/photography/2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/photography/3.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9 order-0 order-md-1">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="10000">
                            <img src="img/photography/1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-interval="10000">
                            <img src="img/photography/2-full.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-interval="10000">
                            <img src="img/photography/3.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php include "footer.php"; ?>
