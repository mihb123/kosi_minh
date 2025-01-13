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