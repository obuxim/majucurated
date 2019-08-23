<?php include "header.php"; ?>

<section id="photography-slider" class="d-none d-md-block h-75">
        <div class="row no-gutters h-100">
            <div class="col-3 flex-column h-100 overflow-auto">
                <div>
                    <img src="img/photography/1.png" class="img-fluid" />
                </div>
                <div>
                    <img src="img/photography/2.png" class="img-fluid" />
                </div>
                <div>
                    <img src="img/photography/3.png" class="img-fluid" />
                </div>
                <div>
                    <img src="img/photography/4.png" class="img-fluid" />
                </div>
            </div>
            <div class="col-9 h-100 overflow-hidden justify-content-center align-content-center">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade h-100" data-ride="carousel">
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
<section id="photography-slider" class="d-block d-md-none">
    <div class="row no-gutters">
        <div class="col-12 overflow-hidden justify-content-center align-content-center">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade h-100" data-ride="carousel">
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
        <div class="col-12 d-flex overflow-auto" style="height: 100px">
                <img src="img/photography/1.png" class="h-100 w-auto" />
                <img src="img/photography/2.png" class="h-100 w-auto" />
                <img src="img/photography/3.png" class="h-100 w-auto" />
                <img src="img/photography/4.png" class="h-100 w-auto" />
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
