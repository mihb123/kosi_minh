<!-- Offcanvas Cart -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Your cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between position-relative">
        <div class="cartSideBar">

        </div>


        <!-- Phần dưới -->
        <div class="align-items-end ">
            <!-- Options -->
            <div id="cartOptions">
                <button class="btn btn-outline-secondary w-100 mb-2" id="estimateShippingBtn">Estimate
                    shipping-cost</button>
                <button class="btn btn-outline-secondary w-100 mb-2" id="addNoteBtn">Add a note</button>
                <button class="btn btn-outline-secondary w-100 mb-2" id="addCouponBtn">Add a coupon</button>
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