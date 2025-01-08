<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php $sectionName = 'Wishlist'; ?>
<?php require 'layout/banner.php' ?>
<section class="container my-5">
    <div class="row gy-4 ">
        <?php
        $i = 0;
        for ($i; $i < 5; $i++) { ?>
        <?php require 'layout/product.php' ?>
        <?php } ?>
    </div>
</section>

<?php require 'layout/footer.php' ?>