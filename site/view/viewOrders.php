<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php require 'layout/banner.php' ?>
<div class="account-info-container row ">
    <?php require 'layout/sidebarCustomer.php' ?>
    <div class="account-section col-md-9 text-start">
        <h2>Đơn hàng của bạn</h2>
        <?php foreach ($orders as $order) { ?>
        <table class="table cartDetail">
            <thead class="mb-2">

                <a href="?c=customer&a=detail&id=<?= $order->getId() ?>" class="d-block">
                    Đơn hàng
                    #<?= $order->getId() ?>
                </a>
                <span class="date text-muted">
                    Đặt hàng ngày <?= $order->getCreatedDate() ?>
                </span>

            </thead>
            <tbody>
                <?php
                    $orderItemRepo = new OrderItemRepo;
                    $items = $orderItemRepo->find($order->getId());
                    if ($items) {
                        foreach ($items as $item) { ?>
                <tr>
                    <td width="20%">
                        <a href="?c=product&a=detail&id=<?= $item->getProductId() ?>">
                            <img src="image/<?= $item->getProductImage() ?>" alt="<?= $item->getProductName() ?>"
                                class="product_img">
                        </a>
                    </td>
                    <td width="70%" class="d-flex flex-column">

                        <div class="align-items-start mb-4">
                            <a href="?c=product&a=detail&id=<?= $item->getProductId() ?>">
                                <strong><?= $item->getProductName() ?></strong>
                            </a>
                        </div>
                        <div class="align-items-end">
                            <span>Số lượng: <?= $item->getQty() ?>
                            </span><br>
                            <span>Đơn giá: $<?= $item->getUnitPrice() ?></span><br>
                            <span>Tổng tiền: <strong>$<?= $item->getTotal() ?></strong></span>
                        </div>

                    </td>
                </tr>
                <?php }
                    } ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
    <?php require 'layout/footer.php' ?>