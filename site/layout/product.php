<div class="col-md-6 col-lg-4 col-xl-3 kosiProduct gy-4">

    <!-- xử lý ảnh -->
    <div class="image__inner d-flex position-relative mb-2">
        <a href="#" class="w-100">
            <img src="image/<?= $product->getFeaturedImage() ?>" alt="">
        </a>
        <?php if ($discount) { ?>
            <div class="d-flex position-absolute align-items-center discount">
                <span>-<?= $discount ?>%</span>
            </div>
        <?php } else { ?>
            <div d-none></div>
        <?php } ?>

        <!-- icons -->
        <div class="icons">
            <i class="bi bi-cart" title="Add to cart" data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-delay='{"show": 100, "hide": 100}'></i>
            <i class="bi bi-heart" title="Add to wishlist" data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-delay='{"show": 100, "hide": 100}'></i>
            <i class="bi bi-eye" title="Quick view" data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-delay='{"show": 100, "hide": 100}'></i>
        </div>
    </div>

    <!-- tên sp -->
    <a href="#" class="productName "> <?= $product->getName() ?></a>

    <!-- color -->
    <div class="color-options">
        <?php foreach ($colors as $color) {
            $colorCode = $color->getColorCode();
            $colorName = $color->getColorName();
        ?>
            <span style="background-color: <?= $colorCode ?>;" title="<?= $colorName ?>" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-delay='{"show": 100, "hide": 100}'
                onclick="changeImage(this, '<?= $colorName ?>')">
            </span>
        <?php } ?>
    </div>

    <!-- price -->
    <div class="price">
        <?php if ($discount) { ?>
            <p class="d-inline original-price text-decoration-line-through">$<?= number_format($product->getPrice()) ?></p>
            <p class="d-inline sale-price fw-medium">$<?= number_format($product->getPrice() * (1 - $discount / 100)) ?></p>

        <?php } else { ?>
            <span class="fw-medium original-price">$<?= number_format($product->getPrice()) ?></span>
        <?php } ?>
    </div>

</div>