<?= $this->extend('user/layout') ?>
<?= $this->section('page-content') ?>
<?= $this->include('user/component/navbar') ?>

<style>
    body {
        background-color: #f8f9fa;
    }

    .best-seller-container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        background-color: #fff;
    }

    .best-seller-title {
        font-size: 24px;
        font-weight: bold;
        color: #343a40;
    }

    .best-seller-item {
        border: 1px solid #dee2e6;
        margin-top: 20px;
        border-radius: 10px;
        overflow: hidden;
    }

    .best-seller-item img {
        width: 100%;
        border-bottom: 1px solid #dee2e6;
    }

    .best-seller-item .item-details {
        padding: 15px;
    }

    .best-seller-item .item-title {
        font-size: 18px;
        font-weight: bold;
        color: #343a40;
    }

    .best-seller-item .item-description {
        font-size: 14px;
        color: #6c757d;
    }

    .best-seller-item .item-price {
        font-size: 18px;
        font-weight: bold;
        color: #28a745;
        margin-top: 10px;
    }

    .promotion-carousel-container {
        max-width: 800px;
        margin: auto;
        background-color: #fff;
    }
</style>

<!-- Featured Items with Carousel -->
<div class="container">
    <div class="promotion-carousel-container my-3 shadow-sm rounded-3">
        <div id="promotionCarousel" class="carousel slide rounded-3" data-bs-ride="carousel">
            <div class="carousel-inner rounded-3">
                <!-- Slide 1 -->
                <div class="carousel-item active rounded-3">
                    <img src="<?= base_url() ?>assets/img/restobanner.jpg" class="d-block w-100" alt="Promotion Image 1">
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item rounded-3">
                    <img src="<?= base_url() ?>assets/img/restobanner.jpg" class="d-block w-100" alt="Promotion Image 2">
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item rounded-3">
                    <img src="<?= base_url() ?>assets/img/restobanner.jpg" class="d-block w-100" alt="Promotion Image 3">
                </div>
                <!-- Add more slides as needed -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#promotionCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#promotionCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="best-seller-container mt-1 border-0 shadow-sm rounded-3">
        <div class="best-seller-title text-center">BEST SELLER SSAYORESTO</div>

        <!-- Carousel Component -->
        <div id="bestSellerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="best-seller-item">
                        <img src="<?= base_url() ?>assets/img/menu/menu-1.png" alt="Product Image">
                        <div class="item-details">
                            <div class="item-title">Ramen Pedas</div>
                            <div class="item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="item-price">$19.99</div>
                                <button class="btn btn-warning btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="best-seller-item">
                        <img src="<?= base_url() ?>assets/img/menu/menu-2.png" alt="Product Image">
                        <div class="item-details">
                            <div class="item-title">Sushi Cicak</div>
                            <div class="item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="item-price">$19.99</div>
                                <button class="btn btn-warning btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="best-seller-item">
                        <img src="<?= base_url() ?>assets/img/menu/menu-3.png" alt="Product Image">
                        <div class="item-details">
                            <div class="item-title">Nori Sudah Di Sterika</div>
                            <div class="item-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="item-price">$19.99</div>
                                <button class="btn btn-warning btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#bestSellerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bestSellerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- End Carousel Component -->

    </div>
    <div class="row">
        <div class="col pb-3">
        </div>
    </div>
</div>

<?= $this->endSection(); ?>