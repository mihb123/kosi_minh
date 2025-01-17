<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php $sectionName = 'Blog'; ?>
<?php require 'layout/banner.php' ?>

<div class="container-lg mt-5">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-9 px-4">
            <img src="image/blog-<?= $blog->getId() ?>_540x.webp" alt="" class="mb-3 img-fluid"
                style="max-height: 500px;">
            <h2 class="mb-3"><?= $blog->getTitle() ?></h2>
            <p class="text-muted">By <?= $blog->getAuthor() ?> • April 15, 2024</p>
            <p>
                <?= $blog->getContent() ?>
            </p>

            <blockquote class="blockquote bg-light p-4 my-4 border-start border-5 border-warning">
                <p class="mb-3">
                    Sed libero enim sed faucibus. Elit duis tristique sollicitudin nibh sit amet commodo. Diam
                    sollicitudin tempor id eu nisl. Ornare arcu odio ut sem nulla pharetra.
                </p>
                <p class="blockquote-footer">
                    Netus et malesuada fames ac turpis egestas.
                </p>
            </blockquote>

            <p>
                Mauris vitae ultricies leo integer malesuada nunc vel risus commodo. Eget nunc scelerisque viverra
                mauris in aliquam sem fringilla ut. Etiam non quam lacus suspendisse faucibus interdum.
            </p>
            <p>
                Enim facilisis gravida neque convallis. Vestibulum lorem sed risus ultricies tristique nulla aliquet.
                Amet volutpat consequat mauris nunc congue nisi.
            </p>
            <div class="d-flex justify-content-between ">
                <p class="mt-4">
                    <strong>Tags:</strong>
                    <a href="#" class="badge text-decoration-none">Desserts</a>
                    <a href="#" class="badge bg-secondary text-decoration-none">Fresh</a>
                    <a href="#" class="badge bg-secondary text-decoration-none">Healthy</a>
                </p>

                <div class="mt-4">
                    <span class="me-2">Share:</span>
                    <a href="#" class="text-decoration-none me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-decoration-none me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-decoration-none"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
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