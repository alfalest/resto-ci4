<?= $this->extend('user/layout') ?>
<?= $this->section('page-content') ?>
<?= $this->include('user/component/navbar') ?>

<style>
    /* body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-image: url('<?= base_url() ?>/assets/img/bg.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(75%) blur(5px);
    } */
</style>

<!-- Jumbotron -->
<div class="jumbotron text-center">
    <h1 class="display-4">Ssayoresto by Ssayomart</h1>
    <p class="lead">Coming Soon!</p>
    <a class="btn btn-danger btn-lg" href="#" role="button">Order Now</a>
</div>

<!-- Featured Items -->
<div class="container">
    <!-- KOREAN FOOD -->
    <div class="row">
        <div class="col text-start mt-4 mb-0">
            <h3>KOREAN FOOD</h3>
        </div>
    </div>
    <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row text-center row-cols-2 mt-4">
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-1.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-2.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row text-center row-cols-2 mt-4">
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-3.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-1.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="row text-center row-cols-2 mt-4">
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-2.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-3.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Add more slides as needed -->

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- JAPANESE FOOD -->
    <div class="row">
        <div class="col text-start mt-2">
            <h3>JAPANESE FOOD</h3>
        </div>
    </div>
    <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row text-center row-cols-2 mt-4">
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-1.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-2.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row text-center row-cols-2 mt-4">
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-3.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-1.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="row text-center row-cols-2 mt-4">
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-2.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-3.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Add more slides as needed -->

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- INDONESIAN FOOD -->
    <div class="row">
        <div class="col text-start mt-2">
            <h3>INDONESIAN FOOD</h3>
        </div>
    </div>
    <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row text-center row-cols-2 mt-4">
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-1.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-2.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row text-center row-cols-2 mt-4">
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-3.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-1.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="row text-center row-cols-2 mt-4">
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-2.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url() ?>">
                            <div class="text-bg-light mb-3 bg-white border-0 shadow-sm rounded-3">
                                <div class="px-0 py-0 mx-0 my-0">
                                    <img src="<?= base_url() ?>assets/img/menu/menu-3.png" alt="Kategori" class="card-img-top">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Add more slides as needed -->

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row">
        <div class="col pb-3">
        </div>
    </div>
</div>
<?= $this->endSection(); ?>