<?php require 'layout/header.php' ?>

<div class="row">
    <!-- Left Section -->
    <div class="col-lg-6 justify-content-end info_payment row">
        <div class="info col-10" style="max-width:700px">
            <form class="payment" action="?c=payment&a=order" method="POST">
                <h4 class="mt-4">Liên hệ</h4>
                <div class="mt-3">
                    <label for="contact" class="form-label">Email</label>
                    <?php if ($email != 'khvl@gmail.com') { ?>
                    <input type="text" class="form-control" name="email" id="contact"
                        value="<?= $customer->getEmail() ?>">
                    <?php } else { ?>
                    <input type="hidden" class="form-control" name="email" id="contact" value="khvl@gmail.com">
                    <input type="text" class="form-control" name="emailContact" id="contact"
                        placeholder="Nhập địa chỉ email">
                    <?php } ?>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="subscribe">
                        <label class="form-check-label" for="subscribe">
                            Gửi cho tôi tin tức và ưu đãi qua email
                        </label>
                    </div>
                </div>

                <h4 class="mt-4">Giao hàng</h4>
                <div class="row mt-3">
                    <?php require 'layout/address.php' ?>
                </div>

                <div class="mt-3">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="saveInfo">
                        <label class="form-check-label" for="saveInfo">
                            Lưu lại thông tin này cho lần sau
                        </label>
                    </div>
                </div>
                <div class="payment_method w-100">
                    <h5 class="mt-4">Thanh toán</h5>
                    <p class="small text-muted">Toàn bộ các giao dịch được bảo mật và mã hóa.</p>
                    <div class="form-check payment-option selected" id="codOption">
                        <input class="" type="radio" name="paymentMethod" id="cod" value="cod" checked>
                        <label class="form-check-label" for="cod">
                            Thanh toán khi nhận hàng (COD)
                        </label>
                        <div class="extra-info">
                            <p class="mb-0">Nhân viên giao hàng sẽ liên lạc bạn trước khi giao hàng.</p>
                            <p>Tiền COD sẽ được thu khi nhận hàng.</p>
                        </div>
                    </div>
                    <div class="form-check payment-option" id="onePayOption">
                        <input class="" type="radio" name="paymentMethod" id="onePay" value="onePay">
                        <label class="form-check-label" for="onePay">
                            OnePay - Thanh toán trực tuyến
                            <img src="https://img.icons8.com/color/48/000000/visa.png" alt="Visa" style="width: 24px">
                            <img src="https://img.icons8.com/color/48/000000/mastercard.png" alt="MasterCard"
                                style="width: 24px">
                        </label>
                        <div class="extra-info">
                            <p>Khi click "Thanh toán ngay", bạn sẽ được chuyển hướng tới OnePay để hoàn tất thanh toán
                                một
                                cách bảo mật.</p>

                        </div>
                    </div>
                    <div class="form-check payment-option" id="bankTransferOption">
                        <input class="" type="radio" name="paymentMethod" id="bankTransfer" value="bankTransfer">
                        <label class="form-check-label" for="bankTransfer">
                            Chuyển khoản
                        </label>
                        <div class="extra-info">
                            <p class="mt-2">Chuyển tiền đến:</p>
                            <p>Chủ tài khoản: Công Ty TNHH ABC VIET NAM</p>
                            <p>Số tài khoản: 09291029921</p>
                            <p>Ngân hàng: Ngân hàng Quân Đội (MB Bank)</p>
                            <p>Sau khi chuyển tiền, vui lòng gửi ảnh chụp màn hình đến công ty qua Facebook, Instagram
                                hoặc
                                Email.</p>
                        </div>
                    </div>
                </div>

                <h5 class="mt-4">Bạn biết tới chúng tôi qua kênh nào?</h5>
                <select class="form-select">
                    <option selected>Chọn...</option>
                    <!-- Options -->
                </select>

                <button type="submit" class="btn btn-dark mt-4 w-100">Hoàn tất đơn hàng</button>
                <hr>
                <div class="mb-4 text-center">
                    <a href="#" class="text-decoration-none me-3 small">Chính sách Bảo hành</a>
                    <a href="#" class="text-decoration-none me-3 small">Chính sách vận chuyển</a>

                    <a href="#" class="text-decoration-none me-3 small">Chính sách quyền riêng tư</a>
                    <a href="#" class="text-decoration-none small">Điều khoản dịch vụ</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Section -->
    <div class="col-lg-6 justify-content-start row cart">
        <div class="cart_side col-auto">
            <h4 class="mt-4">Thanh toán</h4>
            <!-- Cart Items -->
            <ul class="list-group mb-3 ul-cart">
                <?php foreach ($items as $item) { ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="">
                        <div class="d-flex align-items-center">
                            <div class="position-relative">
                                <img src="image/<?= $item['img'] ?>" alt="Product 1" class="image_thumbnail mr-3">
                                <span class="badge bg-dark text-white position-absolute rounded-pill"
                                    style=" margin: 0px; transform: translate(-70%, -30%) !important;"><?= $item['qty'] ?>
                                </span>
                            </div>
                            <span><?= $item['name'] ?></span>
                        </div>
                    </a>
                    <span class="price">$<?= $item['total'] ?></span>
                </li>
                <?php } ?>
            </ul>

            <!-- Discount Code -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Mã giảm giá">
                <button class="btn btn-dark" type="button">Áp dụng</button>
            </div>

            <!-- Summary -->
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>Tạm tính • <span>2 mặt hàng</span> </span>
                    <span>$<?= $Total ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>Phí giao hàng</span>
                    <span>Miễn phí</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>Tổng tiền</span>
                    <strong>$<?= $Total ?></strong>
                </li>
            </ul>
        </div>
    </div>


</div>


<?php require 'layout/footer.php' ?>