<!-- Offcanvas Cart -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Your cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between">
        <div class="d-flex align-items-center mb-3">
            <img src="image/Product-IMG-0_360x.webp" alt="Product 1" class="img-thumbnail"
                style="width: 50px; height: 50px;">
            <div class="ms-3">
                <p class="mb-0">Wicked lounge rattan</p>
                <strong>$</strong>
                <strong class="priceInCart">288.00</strong>
            </div>
            <div class="ms-auto d-flex align-items-center">
                <button class="btn btn-outline-secondary btn-sm minus">-</button>
                <span class="mx-2 equal">3</span>
                <button class="btn btn-outline-secondary btn-sm plus">+</button>
            </div>
        </div>

        <!-- Phần dưới -->
        <div class="align-items-end position-relative">
            <!-- Options -->
            <div id="cartOptions">
                <button class="btn btn-outline-secondary w-100 mb-2" id="estimateShippingBtn">Estimate
                    shipping-cost</button>
                <button class="btn btn-outline-secondary w-100 mb-2" id="addNoteBtn">Add a note</button>
                <button class="btn btn-outline-secondary w-100 mb-2" id="addCouponBtn">Add a coupon</button>
            </div>

            <!-- Shipping Estimate View -->
            <div id="shippingEstimate" class="position-absolute">
                <h6>Estimate Shipping</h6>
                <select class="form-select mb-2">
                    <option>United States</option>
                </select>
                <select class="form-select mb-2">
                    <option>Hawaii</option>
                </select>
                <input type="text" class="form-control mb-2" placeholder="Postal/ZIP code" value="96701">
                <div class="alert alert-success">
                    Shipping rate for 96701, Hawaii, United States.<br>
                    <strong>Standard: $19.62 USD</strong>
                </div>
                <button class="btn btn-dark w-100 mb-2">Estimate</button>
                <button class="btn btn-link w-100 text-danger cancel-btn">Cancel</button>
            </div>

            <!-- add note -->
            <div id="addNote" class="position-absolute">
                <h6>Add a Note</h6>
                <textarea class="form-control mb-2" placeholder="Enter your note here..."></textarea>
                <button class="btn btn-dark w-100 mb-2">Save</button>
                <button class="btn btn-link w-100 text-danger cancel-btn">Cancel</button>
            </div>

            <!-- add coupon -->
            <div id="addCoupon" class="position-absolute">
                <h6>Add a Coupon</h6>
                <input type="text" class="form-control mb-2" placeholder="Enter coupon code">
                <button class="btn btn-dark w-100 mb-2">Add</button>
                <button class="btn btn-link w-100 text-danger cancel-btn">Cancel</button>
            </div>

            <!-- Subtotal -->
            <div id="subtotalSection" class="mt-4 d-flex justify-content-between">
                <span>Subtotal</span>
                <span>
                    <strong>$</strong>
                    <strong class="subtotal">864.00</strong>
                </span>
            </div>
            <small class="text-muted">Taxes and shipping calculated at checkout</small>

            <!-- Buttons -->
            <div id="buttonsSection" class="mt-4 d-flex justify-content-between">
                <button class="btn btn-dark">VIEW CART</button>
                <button class="btn btn-warning">CHECK OUT</button>
            </div>
        </div>
    </div>
</div>