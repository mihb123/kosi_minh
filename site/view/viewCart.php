<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php $sectionName = 'Your Shopping Cart'; ?>
<?php require 'layout/banner.php' ?>
<div class="container-lg mt-5">
    <div class="row">
        <!-- Shopping Cart Section -->
        <div class="col-md-8 shopping_cart py-2" style="overflow-x: auto; padding-right: 2rem;">

            <table class="table">
                <thead>
                    <tr>
                        <th class="product_img">Product</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    for ($i; $i <= 4; $i++) { ?>
                        <tr>
                            <td width="20%">
                                <img src="image/Product-IMG-<?= $i ?>_360x.webp" alt="Alex lounge chair"
                                    class="product_img">
                            </td>
                            <td width="70%">

                                <div class="mb-4">
                                    <strong>Alex lounge chair</strong><br>
                                    <span>Color: LightBlue</span><br>
                                    <span>Material: Any</span><br>
                                    <span>$150.00</span><br>
                                </div>

                                <div class="">
                                    <button class="btn btn-outline-secondary btn-sm minus-<?= $i ?>">-</button>
                                    <span class="mx-2 equal-<?= $i ?>">3</span>
                                    <button class="btn btn-outline-secondary btn-sm plus-<?= $i ?>">+</button>
                                </div>

                            </td>
                            <td width="10%">
                                <div class="text-sm-end">
                                    <i class="bi bi-trash fs-5 i"></i>
                                    <span>$150.00</span><br>

                                </div>
                            </td>
                        </tr>
                    <?php } ?>
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
            <!-- Estimate Shipping -->
            <!-- <h5>Estimate Shipping</h5>
            <div class="mb-3">
                <label class="form-label">Country/region</label>
                <select class="form-select">
                    <option>United States</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Province</label>
                <select class="form-select">
                    <option>Alabama</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Postal/ZIP code</label>
                <input type="text" class="form-control">
            </div>
            <button class="btn btn-dark w-100 mb-5">Estimate</button> -->

            <!-- add note -->
            <h5>Add a Note</h5>
            <textarea type="text" rows="3" class="form-control mb-3" placeholder="Enter your note here..."></textarea>

            <!-- Add Coupon -->
            <h5>Add Coupon</h5>
            <input type="text" class="form-control mb-3" placeholder="Coupon code">

            <!-- Subtotal and Checkout -->
            <h5>Subtotal: <strong>$720.00</strong></h5>
            <p>Taxes and shipping calculated at checkout</p>
            <button class="btn btn-warning w-100">CHECK OUT</button>
        </div>
    </div>
</div>

<?php require 'layout/footer.php' ?>