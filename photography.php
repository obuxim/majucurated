<?php include "header.php"; ?>

<section id="photography-slider" class="d-none d-md-block h-75">
        <div class="row no-gutters h-100">
            <div class="col-3 flex-column h-100 overflow-auto">
                <div>
                    <div class="photography-slider-overlay position-absolute" data-target="#photography-carousel" data-slide-to="0">
                        <img src="img/photography/1.png" class="photography-slider-overlay-inner img-fluid" alt=""/>
                    </div>
                    <img src="img/photography/1.png" class="img-fluid" alt="" />
                </div>
                <div>
                    <div class="photography-slider-overlay active position-absolute" data-target="#photography-carousel" data-slide-to="1">
                        <img src="img/photography/2.png" class="photography-slider-overlay-inner img-fluid" alt="" />
                    </div>
                    <img src="img/photography/2.png" class="img-fluid" alt=""/>
                </div>
                <div>
                    <div class="photography-slider-overlay position-absolute" data-target="#photography-carousel" data-slide-to="2">
                        <img src="img/photography/3.png" class="photography-slider-overlay-inner img-fluid" alt=""/>
                    </div>
                    <img src="img/photography/3.png" class="img-fluid" alt=""/>
                </div>
                <div>
                    <div class="photography-slider-overlay position-absolute" data-target="#photography-carousel" data-slide-to="3">
                        <img src="img/photography/4.png" class="photography-slider-overlay-inner img-fluid" alt=""/>
                    </div>
                    <img src="img/photography/4.png" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="col-9 h-100 overflow-hidden justify-content-center align-content-center">
                <div id="photography-slider-menu" class="row no-gutters h-100 w-100 position-absolute text-light text-uppercase">
                    <div class="col-6">
                        <a id="photography-categories" class="d-flex justify-content-center align-items-center p-3" onclick="toggleCategory()">
                            <span class="pr-4">all categories</span>
                            <i class="pl-4 fas fa-caret-down"></i>
                        </a>
                        <div id="photography-categories-menu" class="d-none h-100 w-100 photography-slider-menu-inner justify-content-center">
                            <ul class="nav d-flex flex-column">
                                <li class="nav-item"><a class="nav-link text-light" href="#">category 1</a></li>
                                <li class="nav-item"><a class="nav-link text-light" href="#">category 2</a></li>
                                <li class="nav-item"><a class="nav-link text-light" href="#">category 3</a></li>
                                <li class="nav-item"><a class="nav-link text-light" href="#">category 4</a></li>
                                <li class="nav-item"><a class="nav-link text-light" href="#">category 5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <a id="photography-galleries" class="d-flex justify-content-center align-items-center p-3" onclick="toggleGallery()">
                            <span class="pr-4">galleries</span>
                            <i class="pl-4 fas fa-caret-down"></i>
                        </a>
                        <div id="photography-galleries-menu" class="d-none h-100 w-100 photography-slider-menu-inner justify-content-center">
                            <ul class="nav d-flex flex-column">
                                <li class="nav-item"><a class="nav-link text-light" href="#">gallery 1</a></li>
                                <li class="nav-item"><a class="nav-link text-light" href="#">gallery 2</a></li>
                                <li class="nav-item"><a class="nav-link text-light" href="#">gallery 3</a></li>
                                <li class="nav-item"><a class="nav-link text-light" href="#">gallery 4</a></li>
                                <li class="nav-item"><a class="nav-link text-light" href="#">gallery 5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="photography-carousel" class="carousel slide carousel-fade h-100" data-ride="carousel">
                    <div class="photography-carousel-footer text-light w-100 position-absolute d-flex align-items-center justify-content-between py-4 px-5">
                        <span class="text-uppercase">gallery 03</span>
                        <ol class="carousel-indicators">
                            <li data-target="#photography-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#photography-carousel" data-slide-to="1"></li>
                            <li data-target="#photography-carousel" data-slide-to="2"></li>
                            <li data-target="#photography-carousel" data-slide-to="3"></li>
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
                        <div class="carousel-item h-100" data-interval="10000">
                            <img src="img/photography/4.png" class="d-block h-100 w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="photography-slider" class="d-block d-md-none">
    <div class="row no-gutters">
        <div class="col-12 overflow-hidden justify-content-center align-content-center">
            <div id="photography-slider-menu" class="row no-gutters h-100 w-100 position-absolute text-light text-uppercase">
                <div class="col-12">
                    <a id="photography-categories" class="d-flex justify-content-center align-items-center py-2" onclick="toggleCategory()">
                        <span class="pr-2">all categories</span>
                        <i class="pl-2 fas fa-caret-down"></i>
                    </a>

                    <a id="photography-galleries" class="d-flex justify-content-center align-items-center py-2" onclick="toggleGallery()">
                        <span class="pr-2">galleries</span>
                        <i class="pl-2 fas fa-caret-down"></i>
                    </a>

                </div>
                <div class="col-12 h-100">
                    <div id="photography-categories-mobile-menu" class="d-none h-100 w-100 photography-slider-menu-inner justify-content-center">
                        <ul class="nav d-flex flex-column">
                            <li class="nav-item"><a class="nav-link text-light" href="#">category 1</a></li>
                            <li class="nav-item"><a class="nav-link text-light" href="#">category 2</a></li>
                            <li class="nav-item"><a class="nav-link text-light" href="#">category 3</a></li>
                            <li class="nav-item"><a class="nav-link text-light" href="#">category 4</a></li>
                            <li class="nav-item"><a class="nav-link text-light" href="#">category 5</a></li>
                        </ul>
                    </div>
                    <div id="photography-galleries-mobile-menu" class="d-none h-100 w-100 photography-slider-menu-inner justify-content-center">
                        <ul class="nav d-flex flex-column">
                            <li class="nav-item"><a class="nav-link text-light" href="#">gallery 1</a></li>
                            <li class="nav-item"><a class="nav-link text-light" href="#">gallery 2</a></li>
                            <li class="nav-item"><a class="nav-link text-light" href="#">gallery 3</a></li>
                            <li class="nav-item"><a class="nav-link text-light" href="#">gallery 4</a></li>
                            <li class="nav-item"><a class="nav-link text-light" href="#">gallery 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="photography-carousel-mobile" class="carousel slide carousel-fade h-100" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="position-absolute carousel-overlay h-100 w-100"></div>
                    <div class="carousel-item active" data-interval="10000">
                        <img src="img/photography/1.png" class="img-fluid" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="10000">
                        <img src="img/photography/2-full.png" class="img-fluid" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="10000">
                        <img src="img/photography/3.png" class="img-fluid" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="10000">
                        <img src="img/photography/4.png" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex overflow-auto no-gutters">
            <div class="col-4">
                <div class="photography-slider-overlay position-absolute w-100 h-100" data-target="#photography-carousel-mobile" data-slide-to="0"></div>
                <img src="img/photography/1.png" class="img-fluid" alt=""/>
            </div>
            <div class="col-4">
                <div class="photography-slider-overlay-active position-absolute w-100 h-100" data-target="#photography-carousel-mobile" data-slide-to="1"></div>
                <img src="img/photography/2.png" class="img-fluid" alt="" />
            </div>
            <div class="col-4">
                <div class="photography-slider-overlay position-absolute w-100 h-100" data-target="#photography-carousel-mobile" data-slide-to="2"></div>
                <img src="img/photography/3.png" class="img-fluid" alt=""/>
            </div>
            <div class="col-4">
                <div class="photography-slider-overlay position-absolute w-100 h-100" data-target="#photography-carousel-mobile" data-slide-to="3"></div>
                <img src="img/photography/4.png" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
</section>
<section id="call-to-action" class="py-2 bg-dark text-uppercase">
    <a href="#" class="d-flex flex-column align-items-center text-light">
        <span>view services</span>
        <i class="fas fa-chevron-down"></i>
    </a>
</section>
<section id="photography-reversed" class="py-5 services">
    <div class="container">
        <div class="row py-3 align-items-center">
            <div class="col-12 col-md-6">
                <img src="img/photography/photo01.png" alt="" class="img-fluid"/>
            </div>
            <div class="col-12 col-md-4 h-100 text-light">
                <h2 class="text-uppercase my-4">photographer</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa distinctio dolor eligendi eum, hic, id minima molestiae necessitatibus nihil obcaecati omnis, perferendis placeat recusandae reiciendis rerum vitae. Sapiente, tempora.</p>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-12 order-1 order-md-0 col-md-4 offset-md-2 h-100 text-light d-flex flex-column align-items-md-end">
                <h2 class="text-uppercase text-left text-md-right my-4">creative director</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa distinctio dolor eligendi eum, hic, id minima molestiae necessitatibus nihil obcaecati omnis, perferendis placeat recusandae reiciendis rerum vitae. Sapiente, tempora.</p>
            </div>
            <div class="col-12 col-md-6 order-0 order-md-1">
                <img src="img/photography/photo02.png" alt="" class="img-fluid"/>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-12 col-md-6">
                <img src="img/photography/photo03.png" alt="" class="img-fluid"/>
            </div>
            <div class="col-12 col-md-4 h-100 text-light">
                <h2 class="text-uppercase my-4">styling</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa distinctio dolor eligendi eum, hic, id minima molestiae necessitatibus nihil obcaecati omnis, perferendis placeat recusandae reiciendis rerum vitae. Sapiente, tempora.</p>
            </div>
        </div>
    </div>
</section>
<section id="start-project" class="text-center p-5 d-flex d-md-none flex-column align-items-center justify-content-center">
    <span class="text-uppercase font-weight-bold mb-3">start your new project</span>
    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a class="btn action-button text-uppercase rounded-lg text-light px-5">send</a>
</section>

<?php include "footer.php"; ?>
