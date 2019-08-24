<?php include "header.php"; ?>

<section id="photography-slider" class="d-none d-md-block h-75">
        <div class="row no-gutters h-100">
            <div class="col-3 flex-column h-100 overflow-auto">
                <div>
                    <div class="photography-slider-overlay position-absolute">
                        <img src="img/photography/1.png" class="photography-slider-overlay-inner img-fluid" />
                    </div>
                    <img src="img/photography/1.png" class="img-fluid" />
                </div>
                <div>
                    <div class="photography-slider-overlay-active position-absolute">
                        <img src="img/photography/2.png" class="photography-slider-overlay-inner img-fluid" />
                    </div>
                    <img src="img/photography/2.png" class="img-fluid" />
                </div>
                <div>
                    <div class="photography-slider-overlay position-absolute">
                        <img src="img/photography/3.png" class="photography-slider-overlay-inner img-fluid" />
                    </div>
                    <img src="img/photography/3.png" class="img-fluid" />
                </div>
                <div>
                    <div class="photography-slider-overlay position-absolute">
                        <img src="img/photography/4.png" class="photography-slider-overlay-inner img-fluid" />
                    </div>
                    <img src="img/photography/4.png" class="img-fluid" />
                </div>
            </div>
            <div class="col-9 h-100 overflow-hidden justify-content-center align-content-center">
                <div id="photography-slider-menu">

                </div>
                <div id="photography-carousel" class="carousel slide carousel-fade h-100" data-ride="carousel">
                    <div class="photography-carousel-footer text-light w-100 position-absolute d-flex align-items-center justify-content-between py-4 px-5">
                        <span class="text-uppercase">gallery 03</span>
                        <ol class="carousel-indicators">
                            <li data-target="#photography-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#photography-carousel" data-slide-to="1"></li>
                            <li data-target="#photography-carousel" data-slide-to="2"></li>
                        </ol>
                        <span class="text-uppercase">01/03</span>
                    </div>
                    <div class="carousel-inner h-100">
                        <div class="position-absolute carousel-overlay h-100 w-100"></div>
                        <div class="carousel-item active h-100" data-interval="10000">
                            <img src="img/photography/1.png" class="d-block h-100 w-100" alt="...">
                        </div>
                        <div class="carousel-item h-100" data-interval="10000">
                            <img src="img/photography/2-full.png" class="d-block h-100 w-100" alt="...">
                        </div>
                        <div class="carousel-item h-100" data-interval="10000">
                            <img src="img/photography/3.png" class="d-block h-100 w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="photography-slider" class="d-block d-md-none">
    <div class="row no-gutters">
        <div class="col-12 overflow-hidden justify-content-center align-content-center">
            <div id="photography-carousel" class="carousel slide carousel-fade h-100" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="position-absolute carousel-overlay h-100 w-100"></div>
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
        <div class="col-12 d-flex overflow-auto no-gutters">
            <div class="col-4">
                <div class="photography-slider-overlay position-absolute w-100 h-100"></div>
                <img src="img/photography/1.png" class="img-fluid" />
            </div>
            <div class="col-4">
                <div class="photography-slider-overlay-active position-absolute w-100 h-100"></div>
                <img src="img/photography/2.png" class="img-fluid" />
            </div>
            <div class="col-4">
                <div class="photography-slider-overlay position-absolute w-100 h-100"></div>
                <img src="img/photography/3.png" class="img-fluid" />
            </div>
            <div class="col-4">
                <div class="photography-slider-overlay position-absolute w-100 h-100"></div>
                <img src="img/photography/4.png" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
