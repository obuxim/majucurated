<?php include "header.php"; ?>

<section id="blog-hero" class="d-none d-md-flex h-50 w-100 overflow-hidden align-items-start">
    <img src="img/blog/blog-hero-bg.jpg" alt="" class="img-fluid">
</section>
<section id="blog-hero" class="d-block d-md-none">
    <img src="img/blog/blog-hero-bg.jpg" alt="" class="img-fluid">
</section>

<section id="blog" class="pt-md-5">
    <div class="row no-gutters d-flex">
        <div class="col-12 col-md-8">
            <div class="row no-gutters" id="blog-filter-container">
                <div class="d-none d-md-flex col-md-6 p-3 bg-white justify-content-center align-items-center">
                    <span class="text-uppercase">filter by category <i class="fas fa-arrow-right ml-3"></i></span>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center dropdown">
                    <button class="btn dropdown-toggle align-items-center w-100 d-flex justify-content-md-between justify-content-around" type="button" id="blog-filter-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="d-none d-md-block"></div><span class="text-uppercase d-none d-md-inline">all</span><span class="d-inline d-md-none text-uppercase">filter by category</span><i class="fas fa-caret-down"></i>
                    </button>
                    <div class="dropdown-menu w-100" aria-labelledby="blog-filter-dropdown">
                        <div class="dropdown-item">Category 1</div>
                        <div class="dropdown-item">Category 2</div>
                        <div class="dropdown-item">Category 3</div>
                        <div class="dropdown-item">Category 4</div>
                        <div class="dropdown-item">Category 5</div>
                        <div class="dropdown-item">Category 6</div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters bg-white p-md-5">
                <div class="col-12 mb-3 col-md-6 d-flex flex-column p-3">
                    <h3>Blog Title</h3>
                    <span>07-May-2019</span>
                    <img src="img/blog/blog-post-bg.jpg" class="img-fluid mt-3" alt=""/>
                </div>
                <div class="col-12 mb-3 col-md-6 d-flex flex-column p-3">
                    <h3>Blog Title</h3>
                    <span>07-May-2019</span>
                    <img src="img/blog/blog-post-bg.jpg" class="img-fluid mt-3" alt=""/>
                </div>
                <div class="col-12 mb-3 col-md-6 d-flex flex-column p-3">
                    <h3>Blog Title</h3>
                    <span>07-May-2019</span>
                    <img src="img/blog/blog-post-bg.jpg" class="img-fluid mt-3" alt=""/>
                </div>
                <div class="col-12 mb-3 col-md-6 d-flex flex-column p-3">
                    <h3>Blog Title</h3>
                    <span>07-May-2019</span>
                    <img src="img/blog/blog-post-bg.jpg" class="img-fluid mt-3" alt=""/>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="row no-gutters mx-md-5 px-5">
                <div class="col-12 d-flex align-items-center py-3 text-uppercase">about me</div>
            </div>
            <div class="row no-gutters mx-md-5 px-5">
                <div class="col-12">
                    <img src="img/blog/blog-post-bg.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row no-gutters mx-md-5 px-5">
                <div class="col-12 d-flex align-items-center py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi at debitis delectus doloremque ea eius illo illum, libero maiores nemo nobis pariatur, provident quos repudiandae similique tempore, ullam veritatis!</div>
            </div>
            <div class="row no-gutters mx-md-5 px-5 pb-5 pb-md-0">
                <div class="col-12 d-flex align-items-center py-3 text-uppercase">follow me @majusandino</div>
                <div class="col-12 d-flex align-items-center">
                    <a href=""><i class="fab fa-2x mr-3 fa-instagram"></i></a>
                    <a href=""><i class="fab fa-2x mr-3 fa-instagram"></i></a>
                    <a href=""><i class="fab fa-2x mr-3 fa-instagram"></i></a>
                    <a href=""><i class="fab fa-2x mr-3 fa-instagram"></i></a>
                </div>
            </div>
            <div class="d-none d-md-block row no-gutters mx-md-5 p-5">
                <div class="w-100 border-top border-dark"></div>
            </div>
            <div class="d-none d-md-flex row no-gutters mx-md-5 px-5">
                <div class="col-12 d-flex align-items-center py-3 text-uppercase">popular posts</div>
                <div class="col-6 py-2">
                    <img src="img/blog/blog-post-bg.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 py-2">
                    <div class="p-3">
                        <div class="text-uppercase font-weight-bold">post title</div>
                        <div class="small">07-Aug-2019</div>
                    </div>
                </div>
                <div class="col-6 py-2">
                    <img src="img/blog/blog-post-bg.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 py-2">
                    <div class="p-3">
                        <div class="text-uppercase font-weight-bold">post title</div>
                        <div class="small">07-Aug-2019</div>
                    </div>
                </div>
                <div class="col-6 py-2">
                    <img src="img/blog/blog-post-bg.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 py-2">
                    <div class="p-3">
                        <div class="text-uppercase font-weight-bold">post title</div>
                        <div class="small">07-Aug-2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>