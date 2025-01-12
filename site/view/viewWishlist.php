<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php require 'layout/banner.php' ?>

<section class="container my-5">
    <div class="row gy-4 ">
        <?php foreach ($products as $product) { ?>
        <?php require 'layout/product.php' ?>
        <?php } ?>
    </div>
</section>

<?php require 'layout/footer.php' ?>