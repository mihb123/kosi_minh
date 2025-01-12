<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php require 'layout/banner.php' ?>

<div class="container-fluid products">

    <!-- Shop by Popular Parts Section -->
    <div class="text-center mt-5">
        <h2>Shop by Popular Parts</h2>
    </div>
    <div class="row justify-content-center">

        <?php foreach ($categories as $category) {
            $category_id = $category->getId();
            $Products = $productRepo->getByCategory($category_id);
            $count = count($Products);
        ?>
        <div class="col-lg-2 d-flex flex-column align-items-center">

            <div class="image__inner mb-4">
                <a href="?c=product&category_id=<?= $category->getId() ?>">
                    <img src="image/<?= $Products[0]->getFeaturedImage() ?>" class="" alt="<?= $category->getName() ?>">
                </a>
            </div>

            <a href="?c=product&category_id=<?= $category->getId() ?>">
                <h5><?= $category->getName() ?></h5>
            </a>
            <p><?= $count ?> Products</p>
            </a>
        </div>
        <?php } ?>
    </div>

    <div class=" row justify-content-center pt-5 pb-5">
        <!-- Sidebar -->
        <div class="col-lg-3 d-none d-lg-block sideBar" style="max-width: 350px;">
            <div class="p-3">
                <div class="product-categories">
                    <h5>Product Categories</h5>
                    <ul>
                        <?php foreach ($categories as $category) {
                            $category_id = $category->getId();
                            $Products = $productRepo->getByCategory($category_id);
                            $count = count($Products);
                        ?>
                        <a href="?c=product&category_id=<?= $category->getId() ?>">
                            <li>
                                <span><?= $category->getName() ?></span>
                                <span class="badge bg-dark rounded-pill"><?= $count ?></span>
                            </li>
                        </a>
                        <?php } ?>

                    </ul>
                </div>
                <div class="filter-section">

                    <!-- filter price -->
                    <h5>Price Filter</h5>
                    <div id="price-slider" class="slider-container"></div>
                    <div class="price-labels">

                        <span class="price-label" id="minPriceLabel">$<?= $minPrice ?? 0 ?></span>
                        <span class="price-label" id="maxPriceLabel">$<?= $maxPrice ?? 500 ?></span>
                    </div>

                    <!-- filter color -->
                    <h5>Color</h5>
                    <ul>
                        <?php foreach ($colors as $color) { ?>
                        <li>
                            <label for="<?= $color->getName() ?>"><?= $color->getName() ?>
                                (<?= $color->countColor() ?>)</label>

                            <input type="checkbox" id="<?= $color->getName() ?>" value="<?= $color->getId() ?>"
                                <?= $colorId == $color->getId() ? 'checked' : '' ?> class="color_filter ">
                        </li>
                        <?php } ?>
                    </ul>

                    <!-- filter material -->
                    <h5>Material</h5>
                    <ul>
                        <?php foreach ($materials as $material) { ?>
                        <li>
                            <label for="<?= $material->getId() ?>"><?= $material->getName() ?>
                                (<?= $material->count() ?>)</label>
                            <input type="checkbox" id="<?= $material->getId() ?>" class="material_filter "
                                value="<?= $material->getId() ?>"
                                <?= $materialId == $material->getId() ? 'checked' : '' ?>>
                        </li>
                        <?php } ?>

                    </ul>

                </div>

                <!-- best seller -->
                <h5>Best Seller</h5>
                <ul class="list-unstyled">
                    <li>
                        <div class="d-flex align-items-center mb-2 best_seller">
                            <img src="image/Product-IMG-10_360x.webp" alt="Best Seller 1"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <div class="ms-2">
                                <h6 class="mb-0">Wicked lounge rattan</h6>
                                <small>$120.00</small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center mb-2">
                            <img src="image/Product-IMG-11_360x.webp" alt="Best Seller 2"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <div class="ms-2">
                                <h6 class="mb-0">Wicked lounge rattan</h6>
                                <small>$282.00</small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center mb-2">
                            <img src="image/Product-IMG-13_360x.webp" alt="Best Seller 3" class="image_thumbnail">
                            <div class="ms-2">
                                <h6 class="mb-0">Alex lounge chair</h6>
                                <small>$140.00 <span class="text-decoration-line-through">$180.00</span></small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center mb-2">
                            <img src="image/Product-IMG-10_360x.webp" alt="Best Seller 4" class="image_thumbnail">
                            <div class="ms-2">
                                <h6 class="mb-0">Alex lounge chair</h6>
                                <small>$180.00</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <div class="col-lg-9 ">
            <!-- Thanh tìm kiếm & kết quả -->
            <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded mb-4">
                <!-- Thanh tìm kiếm -->
                <form action="?c=product" method="post" class="d-flex flex-grow-1 me-3">
                    <input id="search-bar" type="search" name="search" class="form-control me-2 search-input"
                        placeholder="Search for products">
                    <button type="submit" class="btn btn-outline-secondary search_icon">
                        <i class="bi bi-search"></i>
                    </button>
                </form>

                <!-- Hiển thị sắp xếp -->
                <div class="d-flex align-items-center">
                    <select class="form-select form-select-sm w-auto">
                        <option selected>Alphabetically, A-Z</option>
                        <option value="1">Alphabetically, Z-A</option>
                        <option value="2">Price, Low to High</option>
                        <option value="3">Price, High to Low</option>
                    </select>
                </div>
            </div>

            <!-- Hiển thị kết quả -->
            <?php $count = count($products) ?>
            <div id="result-info" class="text-muted mb-4 d-none <?= $count == 0 ? '' : 'd-md-block' ?>">
                Showing 1<?= $count == 1 ? '' : "-$count" ?> of <?= $count ?> Results
            </div>

            <!-- Hiển thị sản phẩm -->
            <div class="row" id="result">
                <?php foreach ($products as $product) {
                ?>
                <?php require 'layout/product.php' ?>
                <?php }  ?>
            </div>
        </div>
    </div>


    <?php require 'layout/footer.php' ?>