<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php require 'layout/banner.php' ?>
<div class="account-info-container row ">
    <?php require 'layout/sidebarCustomer.php' ?>
    <div class=" account-section col-md-9 text-start">
        <h2>Thông tin tài khoản</h2>
        <ul>
            <li>
                <span>Họ và tên</span>
                <span><?= $customer->getName() ?></span>
            </li>
            <li>
                <span>Email</span>
                <span><?= $customer->getEmail() ?? 'Chưa cập nhật' ?></span>
            </li>
            <li>
                <span>Số điện thoại</span>
                <span><?= $customer->getPhone() == null ? 'Chưa cập nhật' : $customer->getPhone() ?></span>
            </li>
            <li>
                <span>Ngày sinh (ngày/tháng/năm)</span>
                <span><?= $customer->getBirthday() == null ? 'Chưa cập nhật' : $customer->getBirthday() ?></span>
            </li>
            <li>
                <span>Mật khẩu</span>
                <span>***************</span>
            </li>
            <li class="mt-3">
                <a class="btn btn-outline-dark mt-1">CẬP NHẬT</a>
                <a class="logout-btn btn btn-dark mt-1">ĐĂNG XUẤT</a>
            </li>
        </ul>

    </div>
</div>

<?php require 'layout/footer.php' ?>