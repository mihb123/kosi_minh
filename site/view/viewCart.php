<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php $sectionName = 'Your Shopping Cart'; ?>
<?php require 'layout/banner.php' ?>
<div class="container-lg mt-5">
    <div class="row">
        <!-- Shopping Cart Section -->
        <div class="col-md-8 shopping_cart py-2" style="overflow-x: auto; padding-right: 2rem;">
            <table class="table cartDetail">
                <thead>
                    <tr>
                        <th class="product_img">Product</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($items) {
                        foreach ($items as $item) { ?>
                    <tr id="product_id_<?= $item['product_id'] ?>">
                        <td width="20%">
                            <img src="image/<?= $item['img'] ?>" alt="<?= $item['name'] ?>" class="product_img">
                        </td>
                        <td width="70%">
                            <div class="mb-4">
                                <strong><?= $item['name'] ?></strong><br>
                                <span>Color: LightBlue</span><br>
                                <span>Material: Any</span><br>
                                <span><?= $item['unit_price'] ?></span><br>
                            </div>
                            <div class="productQty">
                                <button class="btn btn-outline-secondary btn-sm minus"
                                    onclick="minusItemDetail(this, <?= $item['product_id'] ?>)">- </button>
                                <span class=" mx-2 equal"><?= $item['qty'] ?>
                                </span>
                                <button class="btn btn-outline-secondary btn-sm plus"
                                    onclick="addItemDetail (this, <?= $item['product_id'] ?>)"> + </button>
                            </div>

                        </td>
                        <td width=" 10%">
                            <div class="text-sm-end total_of_product">
                                <i class="bi bi-trash fs-5 i" onclick="removeItem(<?= $item['product_id'] ?>)"></i>
                                <span>$<?= $item['total'] ?></span><br>
                            </div>
                        </td>
                    </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
            <div class="py-2">
                <form action="">
                    <h6>Order special instructions</h6>
                    <textarea name="" id="" cols="30" rows="4" placeholder="Order special instructions"
                        class="form-control"></textarea>
                </form>
            </div>
        </div>
        <!-- Sidebar Section -->
        <div class="col-md-4 py-3">
            <!-- add note -->
            <h5>Add a Note</h5>
            <textarea type="text" rows="3" class="form-control mb-3" placeholder="Enter your note here..."></textarea>

            <!-- Add Coupon -->
            <h5>Add Coupon</h5>
            <input type="text" class="form-control mb-3" placeholder="Coupon code">

            <!-- Subtotal and Checkout -->
            <h5>Subtotal: <strong id="subtotal"><?= $Total ?></strong></h5>
            <p>Taxes and shipping calculated at checkout</p>
            <a href="?c=payment" class="btn btn-warning w-100">CHECK OUT</a>
        </div>
    </div>
</div>

<?php require 'layout/footer.php' ?>