<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php $sectionName = 'Blog'; ?>
<?php require 'layout/banner.php' ?>

<div class="container-lg mt-5">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-9 px-4">
            <?php $i = 1;
            for ($i; $i <= 5; $i++): ?>
                <!-- Blog Post 1 -->
                <div class="row mb-5">
                    <div class="col-3">
                        <a href="your_post_url.php?id=<?= $i ?>">
                            <img src="image/Product-IMG-<?= $i ?>_360x.webp" alt="Post Image" class="me-3 img-fluid">
                        </a>
                    </div>

                    <div class="col-9">
                        <h4>
                            <a href="your_post_url.php?id=<?= $i ?>">
                                Going all-in with millennial design
                            </a>
                        </h4>
                        <p class="text-muted">By Vela Admin - April 15, 2024</p>
                        <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Amet purus gravida quis blandit turpis
                            cursus in. Sapien
                            pellentesque habitant morbi tristique senectus et. Fames ac turpis egestas integer eget</p>
                        <a href="your_post_url.php?id=<?= $i ?>" class="btn btn-outline-dark ">Read more</a>
                    </div>
                </div>
            <?php endfor; ?>
            <!-- Sidebar Offcanvas -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasSidebar"
                aria-labelledby="offcanvasSidebarLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasSidebarLabel">Sidebar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- Sidebar Content -->
                    <?php require 'layout/sidebarBlog.php' ?>
                </div>
            </div>
            <!-- Sidebar Toggle Button -->
            <div class="sidebar_btn">
                <a class="" data-bs-toggle="offcanvas" href="#offcanvasSidebar" role="button"
                    aria-controls="offcanvasSidebar">
                    <span style="padding: 10px; background-color: black; border-radius: 4px; color: white;">
                        < </span>
                </a>
            </div>
        </div>

        <!-- Sidebar Blog-->
        <div class="col-lg-3 d-none d-lg-block">
            <?php require 'layout/sidebarBlog.php' ?>
        </div>

    </div>
</div>

<?php require 'layout/footer.php' ?>