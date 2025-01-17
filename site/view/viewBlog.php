<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php require 'layout/banner.php' ?>
<div class="container-lg mt-5">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-9 px-4">
            <?php foreach ($blogs as $blog) { ?>
                <!-- Blog Post 1 -->
                <div class="row mb-5">
                    <div class="col-3">
                        <a href="?c=blog&a=detail&id=<?= $blog->getId() ?>">
                            <img src="image/blog-<?= $blog->getId() ?>_540x.webp" alt="<?= $blog->getTitle() ?>" class="me-3 img-fluid">
                        </a>
                    </div>
                    <div class="col-9">
                        <h4>
                            <a href="?c=blog&a=detail&id=<?= $blog->getId() ?>">
                                <?= $blog->getTitle() ?>
                            </a>
                        </h4>
                        <p class="text-muted">By <?= $blog->getAuthor() ?> - April 15, 2024</p>
                        <p class="content-limit"><?= $blog->getContent() ?></p>
                        <a href="?c=blog&a=detail&id=<?= $blog->getId() ?>" class="btn btn-outline-dark ">Read more</a>
                    </div>
                </div>
            <?php } ?>
            <!-- Sidebar Offcanvas -->
            <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasSidebar"
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
            <div class="sidebar_btn d-lg-none">
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