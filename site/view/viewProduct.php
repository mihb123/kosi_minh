<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php $sectionName = 'Products'; ?>
<?php require 'layout/banner.php' ?>

<div class="container-fluid products">



    <!-- Shop by Popular Parts Section -->
    <div class="text-center mt-5">
        <h2>Shop by Popular Parts</h2>
    </div>
    <div class="row text-center row-cols-md-3 row-cols-lg-6 row-cols-1 header_image mt-2">
        <?php $i = 1;
        for ($i; $i <= 6; $i++):
            $j = rand(1, 14); ?>
        <div class="col d-flex flex-column align-items-center">
            <div class="image__inner mb-4">
                <img src="image/Product-IMG-<?= $j ?>_360x.webp" class="" alt="Chairs">
            </div>
            <h5>Chairs</h5>
            <p><?= $j ?> Products</p>
        </div>
        <?php endfor; ?>
    </div>

    <div class="row justify-content-center pt-5 pb-5">
        <!-- Sidebar -->
        <div class="col-lg-3 d-none d-lg-block sideBar" style="max-width: 350px;">
            <div class="p-3">
                <div class="product-categories">
                    <h5>Product Categories</h5>
                    <ul>
                        <li>
                            <span>Chairs</span>
                            <span class="badge bg-dark rounded-pill">10</span>
                        </li>
                        <li>
                            <span>Decor</span>
                            <span class="badge bg-dark rounded-pill">14</span>
                        </li>
                        <li>
                            <span>Furnitures</span>
                            <span class="badge bg-dark rounded-pill">14</span>
                        </li>
                        <li>
                            <span>Lighting</span>
                            <span class="badge bg-dark rounded-pill">15</span>
                        </li>
                        <li>
                            <span>Sofas</span>
                            <span class="badge bg-dark rounded-pill">15</span>
                        </li>
                        <li>
                            <span>Stools</span>
                            <span class="badge bg-dark rounded-pill">10</span>
                        </li>
                        <li>
                            <span>Uncategorized</span>
                            <span class="badge bg-dark rounded-pill">10</span>
                        </li>
                    </ul>
                </div>
                <div class="filter-section">

                    <!-- filter price -->
                    <h5>Price Filter</h5>
                    <div id="price-slider" class="slider-container"></div>
                    <div class="price-labels">
                        <span class="price-label" id="minPriceLabel">$0</span>
                        <span class="price-label" id="maxPriceLabel">$300</span>
                    </div>

                    <!-- filter color -->
                    <h5>Color</h5>
                    <ul>
                        <li>
                            <label for="aliceBlue">AliceBlue (1)</label>
                            <input type="checkbox" id="aliceBlue">
                        </li>
                        <li>
                            <label for="azure">Azure (1)</label>
                            <input type="checkbox" id="azure">
                        </li>
                        <li>
                            <label for="bisque">Bisque (3)</label>
                            <input type="checkbox" id="bisque">
                        </li>
                        <li>
                            <label for="black">Black (4)</label>
                            <input type="checkbox" id="black">
                        </li>
                        <li>
                            <label for="burlyWood">BurlyWood (9)</label>
                            <input type="checkbox" id="burlyWood">
                        </li>
                        <li>
                            <label for="chocolate">Chocolate (1)</label>
                            <input type="checkbox" id="chocolate">
                        </li>
                    </ul>

                    <!-- filter material -->
                    <h5>Material</h5>
                    <ul>
                        <li>
                            <label for="materialAny">Any (1)</label>
                            <input type="checkbox" id="materialAny">
                        </li>
                        <li>
                            <label for="ceramic">Ceramic (1)</label>
                            <input type="checkbox" id="ceramic">
                        </li>
                        <li>
                            <label for="fabric">Fabric (1)</label>
                            <input type="checkbox" id="fabric">
                        </li>
                        <li>
                            <label for="metal">Metal (1)</label>
                            <input type="checkbox" id="metal">
                        </li>
                        <li>
                            <label for="wood">Wood (1)</label>
                            <input type="checkbox" id="wood">
                        </li>
                    </ul>

                    <!-- filter tags -->
                    <h5>Tags</h5>
                    <ul>
                        <li>
                            <label for="tagAny">Any (5)</label>
                            <input type="checkbox" id="tagAny">
                        </li>
                        <li>
                            <label for="tagCeramic">Ceramic (1)</label>
                            <input type="checkbox" id="tagCeramic">
                        </li>
                        <li>
                            <label for="tagFabric">Fabric (1)</label>
                            <input type="checkbox" id="tagFabric">
                        </li>
                        <li>
                            <label for="tagMetal">Metal (3)</label>
                            <input type="checkbox" id="tagMetal">
                        </li>
                        <li>
                            <label for="tagWood">Wood (4)</label>
                            <input type="checkbox" id="tagWood">
                        </li>
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
                <form action="" method="get" class="d-flex flex-grow-1 me-3">
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
            <div id="result-info" class="text-muted mb-4" style="display: none;">
                Showing 1–15 of 15 Results
            </div>

            <!-- Hiển thị sản phẩm -->
            <div class="row">
                <?php
                $i = 0;
                for ($i; $i < 14; $i++) { ?>
                <?php require 'layout/product.php' ?>
                <?php } ?>
            </div>
        </div>
    </div>


    <?php require 'layout/footer.php' ?>