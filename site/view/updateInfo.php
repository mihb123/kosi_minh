<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php require 'layout/banner.php' ?>
<div class="account-info-container row ">
    <?php require 'layout/sidebarCustomer.php' ?>
    <div class=" account-section col-md-9 text-start">
        <h2>Thông tin tài khoản</h2>
        <form action="?c=customer&a=updateInfo" method="post">
            <div class="col mt-3">
                <label for="fullname" class="form-label">Họ tên</label>
                <input type="text" class="form-control" id="fullname" name="fullname"
                    value="<?= $customer->getName() ?? '' ?>">
            </div>
            <div class="col mt-3">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="phone" class="form-control" id="phone" name="phone"
                    value="<?= $customer->getPhone() ?? '' ?>">
            </div>
            <div class="col mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="<?= $customer->getEmail() ?? '' ?>">
            </div>
            <div class="col mt-3">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday" name="birthday"
                    value="<?= $customer->getBirthday() ?? '' ?>">
            </div>
            <div class="col mt-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="">
            </div>
            <div class="text-end mt-3">
                <button type="submit" class="btn btn-dark">Cập nhật</button>
            </div>
        </form>
    </div>
</div>

<?php require 'layout/footer.php' ?>