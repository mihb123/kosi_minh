<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php require 'layout/banner.php' ?>
<div class="account-info-container row ">
    <?php require 'layout/sidebarCustomer.php' ?>

    <div class="account-section col-md-9 text-start">
        <h2>Địa chỉ giao hàng mặc định</h2>
        <form action="?c=customer&a=updateShippingAddress" method="post">
            <div class="row mt-3">
                <?php require 'layout/address.php' ?>
                <div class="col-4 justify-content-end mt-3">
                    <button type="submit" class="btn btn-dark">Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require 'layout/footer.php' ?>