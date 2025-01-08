<?php require 'layout/header.php' ?>

<!-- kosiCarousel -->
<?php require 'layout/carousel.php' ?>

<!-- mainCategory -->
<section class="mainCategory container-lg my-5">
    <div class="row gy-4">
        <?php
        $i = 0;
        for ($i; $i < 2; $i++) { ?>
        <div class="col-md-6 ">
            <div class="card text-dark ">
                <a href="#">
                    <img src="image/slide1<?= $i ?>_1296x.webp" class="card-img" alt="abc">
                </a>
                <div class="card-img-overlay">
                    <h3 class="card-title" style="font-weight: 600; font-size:34px;">Lighthouse</h3>
                    <a href="#" class="text-decoration-underline fw-medium">View all</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<!-- show Product -->
<section class="suggestProduct container-lg ">
    <div class="text-center textPart">
        <h2>Top Picks For You</h2>
        <p>Find a bright ideal to suit your taste with our great selection of suspension, floor and table lights.
        </p>
    </div>

    <div class="row gy-4 ">
        <?php foreach ($products as $product) {
            $colors = $product->getColor();
            if ($product->getDiscount()) {
                $discount = $product->getDiscount()->getPercent();
            } else {
                $discount = 0;
            }
        ?>
        <?php require 'layout/product.php' ?>
        <?php }  ?>

        <div class="text-center mb-5">
            <a type="button" class="btn btn-dark">View More</a>
        </div>
    </div>
</section>

<!-- newArrival -->
<section class="newArrival container text-center">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/h1_banner-3_1296x.webp" class="d-block w-100" alt="banner 2">
            <div class="carousel-caption content__inner text-black align-content-center">
                <h2>NEW ARRIVALS</h2>
                <p>lassical Decors</p>
                <a type="button" class="btn btn-outline-dark">Order now</a>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<!-- Blog Section -->
<section class="py-5">
    <div class="container text-center">
        <!-- Section Title -->
        <h2 class="fw-bold">Our Blogs</h2>
        <p class="text-muted">Find a bright idea to suit your taste with our great selection</p>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php $i = 1;
            for ($i; $i < 5; $i++) { ?>
            <!-- Blog Card <?= $i ?> -->

            <div class="col">
                <div class="card border-0">
                    <img src="image/blog-<?= $i ?>_540x.webp" class="card-img-top" alt="Blog Image <?= $i ?>">
                    <div class="card-body text-center">
                        <p class="text-muted mb-2">
                            <i class="bi bi-person"></i> Vela Admin -
                            <i class="bi bi-calendar"></i> April 15, 2024
                        </p>
                        <h6 class="card-title">Going all-in with millennial design</h6>
                        <a href="#" class="btn btn-link text-decoration-none ">Read more</a>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
        <div class="text-center">
            <a type="button" class="btn btn-dark">View All Post</a>
        </div>
    </div>
</section>

<!-- followUs -->
<section class="followUs container text-center mb-5">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/h1_banner-4.webp" class="d-block w-100" alt="banner 2">
            <div class="carousel-caption content__inner text-black align-content-center" style="top: 0.5rem;">
                <h2>Our Instagram</h2>
                <p>Follow our latest updates and trends on Instagram</p>
                <a type="button" class="btn btn-outline-dark">Follow Us</a>
            </div>
        </div>
    </div>
</section>

<?php require 'layout/footer.php' ?>