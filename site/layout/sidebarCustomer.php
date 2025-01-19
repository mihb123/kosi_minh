<div class="sidebar col-sm-3 col-lg-4 me-2 justify-content-end d-flex">
    <ul class="text-start d-block-inline">
        <?php global $a; ?>
        <li><a href="?c=customer&a=show" class="<?= $a == 'show' ? 'active' : '' ?>">Thông tin tài khoản</a></li>
        <li><a href="?c=customer&a=address" class="<?= $a == 'address' ? 'active' : '' ?>">Địa chỉ giao hàng mặc
                định</a></li>
        <li><a href=" ?c=customer&a=orders" class="<?= $a == 'orders' ? 'active' : '' ?>">Đơn hàng của tôi</a></li>
    </ul>
</div>