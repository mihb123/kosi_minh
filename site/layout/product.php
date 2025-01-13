<div class="col-md-6 col-lg-4 col-xl-3 kosiProduct gy-4">
    <?php $colors = $product->getColors();
    if ($product->getDiscount()) {
        $discount = $product->getDiscount()->getPercent();
    } else {
        $discount = 0;
    } ?>
    <!-- xử lý ảnh -->
    <div class="image__inner d-flex position-relative mb-2">
        <a href="?c=product&a=detail&id=<?= $product->getId() ?>" class="w-100">
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
            <a href="javascript:void(0)" class="addToCart" product_id=<?= $product->getId() ?>>
                <i class="bi bi-cart" title="Add to cart" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-delay='{"show": 100, "hide": 100}'></i>
            </a>

            <a href="?c=wishlist">
                <i class="bi bi-heart" title="Add to wishlist" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-delay='{"show": 100, "hide": 100}'></i>
            </a>
            <a href="">
                <i class="bi bi-eye" title="Quick view" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-delay='{"show": 100, "hide": 100}'></i>
            </a>
        </div>
    </div>

    <!-- tên sp -->
    <a href="?c=product&a=detail&id=<?= $product->getId() ?>" class="productName line-title">
        <?= $product->getName() ?></a>

    <!-- color -->
    <div class="color-options">
        <?php foreach ($colors as $color) {
            $colorName = $color->getName();
            $colorCode = $color->getCode();
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
        <span
            class="d-inline original-price text-decoration-line-through">$<?= number_format($product->getPrice()) ?></span>
        <span class="fw-medium sale_price"
            sale_price=<?= $product->getPrice() * (1 - $discount / 100) ?>>$<?= $product->getPrice() * (1 - $discount / 100) ?></span>

        <?php } else { ?>
        <span class="fw-medium sale_price" sale_price=<?= $product->getPrice() ?>> $<?= $product->getPrice() ?></span>
        <?php } ?>
    </div>

</div>