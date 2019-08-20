<?php include "header.php"; ?>

<section id="photography-slider " class="h-75">
    <div class="row no-gutters h-100">
        <div class="col-md-3 flex-column h-100 overflow-auto bg-dark">
            <img src="img/photography/1.png" class="img-fluid opacity05" />
            <img src="img/photography/2.png" class="img-fluid" />
            <img src="img/photography/3.png" class="img-fluid opacity05" />
            <img src="img/photography/4.png" class="img-fluid opacity05" />
        </div>
        <div class="col-md-9 h-100 d-flex overflow-hidden align-items-center">
            <div id="photography-slider" class="carousel slide align-itmes-center d-flex  w-100" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#photography-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#photography-slider" data-slide-to="1"></li>
                    <li data-target="#photography-slider" data-slide-to="2"></li>
                    <li data-target="#photography-slider" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/photography/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/photography/2-full.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/photography/3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/photography/4.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#photography-slider" role="button" data-slide="prev">
                    <img src="img/home/arrow_left.png" alt="Previous" />
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#photography-slider" role="button" data-slide="next">
                    <img src="img/home/arrow_right.png" alt="Next" />
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="view-services" class="p-3 bg-dark text-light">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <p class="text-uppercase mb-0">view services</p>
        <i class="fas fa-caret-down"></i>
    </div>
</section>

<section id="photography-blocks">
    
</section>

<?php include "footer.php"; ?>