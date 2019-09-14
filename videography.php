<?php include "header.php"; ?>

<section id="videography-slider" class="d-none d-md-block h-75">
    <div class="row no-gutters h-100">
        <div class="col-12 col-md-9 h-100">
            <div id="videography-carousel" class="carousel slide h-100" data-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item h-100 w-100 active" data-interval="60000">
                        <video class="h-100 w-100" controls>
                            <source src="videos/video01.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <div class="carousel-item h-100 w-100" data-interval="60000">
                        <video class="h-100 w-100" controls>
                            <source src="videos/video02.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <div class="carousel-item h-100 w-100" data-interval="60000">
                        <video class="h-100 w-100" controls>
                            <source src="videos/video01.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <div class="carousel-item h-100 w-100" data-interval="60000">
                        <video class="h-100 w-100" controls>
                            <source src="videos/video02.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 flex-column h-100 overflow-auto">
            <div class="dropdown">
                <button class="p-3 text-light btn-videography w-100 dropdown-toggle text-uppercase" type="button" id="videoDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All Videos
                </button>
                <div class="dropdown-menu w-100" aria-labelledby="videoDropDown">
                    <a class="dropdown-item" href="#">Category 1</a>
                    <a class="dropdown-item" href="#">Category 2</a>
                    <a class="dropdown-item" href="#">Category 3</a>
                </div>
            </div>
            <div class="w-100">
                <div class="videography-carousel-overlay active position-absolute"  data-target="#videography-carousel" data-slide-to="0">
                    <video src="videos/video01.mp4" class="embed-responsive"></video>
                </div>
                <video src="videos/video01.mp4" class="embed-responsive"></video>
            </div>
            <div class="w-100">
                <div class="videography-carousel-overlay position-absolute"  data-target="#videography-carousel" data-slide-to="1">
                    <video src="videos/video02.mp4" class="embed-responsive"></video>
                </div>
                <video src="videos/video02.mp4" class="embed-responsive"></video>
            </div>
            <div class="w-100">
                <div class="videography-carousel-overlay position-absolute"  data-target="#videography-carousel" data-slide-to="2">
                    <video src="videos/video01.mp4" class="embed-responsive"></video>
                </div>
                <video src="videos/video01.mp4" class="embed-responsive"></video>
            </div>
            <div class="w-100">
                <div class="videography-carousel-overlay position-absolute"  data-target="#videography-carousel" data-slide-to="3">
                    <video src="videos/video02.mp4" class="embed-responsive"></video>
                </div>
                <video src="videos/video02.mp4" class="embed-responsive"></video>
            </div>
        </div>
    </div>
</section>

<section id="videography-slider-mobile" class="d-block d-md-none">
    <div class="row no-gutters">
        <div class="col-12">
            <div class="dropdown">
                <button class="p-3 text-light btn-videography w-100 dropdown-toggle text-uppercase" type="button" id="videoDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All Videos
                </button>
                <div class="dropdown-menu w-100" aria-labelledby="videoDropDown">
                    <a class="dropdown-item" href="#">Category 1</a>
                    <a class="dropdown-item" href="#">Category 2</a>
                    <a class="dropdown-item" href="#">Category 3</a>
                </div>
            </div>
            <div id="videography-carousel-mobile" class="carousel slide w-100 h-100" data-ride="carousel">
                <div class="carousel-inner w-100 h-100">
                    <div class="carousel-item w-100 h-100 active" data-interval="60000">
                        <video class=" w-100 h-100" controls>
                            <source src="videos/video01.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <div class="carousel-item w-100 h-100" data-interval="60000">
                        <video class=" w-100 h-100" controls>
                            <source src="videos/video01.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <div class="carousel-item w-100 h-100" data-interval="60000">
                        <video class=" w-100 h-100" controls>
                            <source src="videos/video01.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <div class="carousel-item w-100 h-100" data-interval="60000">
                        <video class=" w-100 h-100" controls>
                            <source src="videos/video02.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex flex-row overflow-auto no-gutters">
            <div class="col-4">
                <div class="position-absolute w-100 h-100 videography-carousel-overlay active" data-target="#videography-carousel-mobile" data-slide-to="0"></div>
                <video class="w-100 h-100">
                    <source src="videos/video01.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
            <div class="col-4">
                <div class="position-absolute w-100 h-100 videography-carousel-overlay" data-target="#videography-carousel-mobile" data-slide-to="1"></div>
                <video class="w-100 h-100">
                    <source src="videos/video02.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
            <div class="col-4">
                <div class="position-absolute w-100 h-100 videography-carousel-overlay" data-target="#videography-carousel-mobile" data-slide-to="2"></div>
                <video class="w-100 h-100">
                    <source src="videos/video01.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
            <div class="col-4">
                <div class="position-absolute w-100 h-100 videography-carousel-overlay" data-target="#videography-carousel-mobile" data-slide-to="3"></div>
                <video class="w-100 h-100">
                    <source src="videos/video02.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
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
                <img src="img/videography/photo01.jpg" alt="" class="img-fluid w-100"/>
            </div>
            <div class="col-12 col-md-5 h-100 text-light">
                <h2 class="text-uppercase my-4">fashion productions</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa distinctio dolor eligendi eum, hic, id minima molestiae necessitatibus nihil obcaecati omnis, perferendis placeat recusandae reiciendis rerum vitae. Sapiente, tempora.</p>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-12 order-1 order-md-0 col-md-5 offset-md-1 h-100 text-light d-flex flex-column align-items-md-end">
                <h2 class="text-uppercase text-left text-md-right my-4">creative director</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa distinctio dolor eligendi eum, hic, id minima molestiae necessitatibus nihil obcaecati omnis, perferendis placeat recusandae reiciendis rerum vitae. Sapiente, tempora.</p>
            </div>
            <div class="col-12 col-md-6 order-0 order-md-1">
                <img src="img/videography/photo02.jpg" alt="" class="img-fluid w-100"/>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-12 col-md-6">
                <img src="img/videography/photo03.jpg" alt="" class="img-fluid w-100"/>
            </div>
            <div class="col-12 col-md-5 h-100 text-light">
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