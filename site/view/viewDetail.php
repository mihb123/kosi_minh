<?php require 'layout/header.php' ?>

<!-- product detail -->
<?php require 'layout/productDetail.php' ?>

<!-- Reviews Section -->
<div class="container py-5">
    <div class="mt-5">
        <ul class="nav nav-tabs" id="review-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description"
                    type="button" role="tab">Description</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="additional-tab" data-bs-toggle="tab" data-bs-target="#additional"
                    type="button" role="tab">Additional</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
                    role="tab">Reviews</button>
            </li>
        </ul>
        <div class="tab-content p-3 border-top-0" id="review-tabs-content">

            <!-- Description -->
            <div class="tab-pane fade show active " id="description" role="tabpanel">
                <div class="container mt-1">
                    <h3>Description</h3>
                    <p style="font-family: kosi-body; font-weight:400;">Designed by Hans J. Wegner in 1949 as one of
                        the first models created especially for Carl
                        Hansen & Son, and produced since 1950. The last of a series of chairs Wegner designed based
                        on inspiration from antique Chinese armchairs. The gently rounded top together with the back
                        and seat offers a variety of comfortable seating positions, ideal for both long visits to
                        the dining table and relaxed lounging.</p>

                    <p>
                        <img src="image/01_Detail.webp" alt="">
                    </p>
                    <p>&nbsp;</p>
                    <p style="font-family: kosi-body; font-weight:400;">The top that goes with everything. Sleek and
                        simple, this sleeveless shell has a relaxed fit
                        and classic round neckline. Plus—it's made of our eco-conscious Clean Silk, for more beauty
                        and less waste. Here's how.</p>
                </div>
            </div>

            <!-- Additional -->
            <div class="tab-pane fade" id="additional" role="tabpanel">
                <div class="container mt-1">
                    <h3>Additional</h3>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Weight (w/o wheels)</th>
                                <td>20 LBS</td>
                            </tr>
                            <tr>
                                <th scope="row">Weight Capacity</th>
                                <td>60 LBS</td>
                            </tr>
                            <tr>
                                <th scope="row">Folded (w/o wheels)</th>
                                <td>32.5"L x 18.5"W x 16.5"H</td>
                            </tr>
                            <tr>
                                <th scope="row">Folded (w/ wheels)</th>
                                <td>32.5"L x 24"W x 18.5"H</td>
                            </tr>
                            <tr>
                                <th scope="row">Door Pass Through</th>
                                <td>24"</td>
                            </tr>
                            <tr>
                                <th scope="row">Frame</th>
                                <td>Aluminum</td>
                            </tr>
                            <tr>
                                <th scope="row">Stand Up</th>
                                <td>35"L x 24"W x 37-45"H (front to back wheel)</td>
                            </tr>
                            <tr>
                                <th scope="row">Size</th>
                                <td>S, XL, XS</td>
                            </tr>
                            <tr>
                                <th scope="row">Color</th>
                                <td>Gray 2, Green 2, Orange 1, Orange 2, Violet</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Review -->
            <div class="tab-pane fade container " id="reviews" role="tabpanel">
                <h3 class="mb-3 mt-1">Customer Reviews</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="review-summary d-flex flex-column align-items-start">
                            <div class="review-stars mb-2">
                                &#9733;&#9733;&#9733;&#9733;&#9733;
                            </div>
                            <p class="text-muted mb-1">5.00 out of 5</p>
                            <p class="text-muted">Based on 1 review</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">5 stars</span>
                            <div class="progress w-50">
                                <div class="progress-bar bg-success" style="width: 100%;"></div>
                            </div>
                            <span class="ms-2">1</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">4 stars</span>
                            <div class="progress w-50">
                                <div class="progress-bar bg-secondary" style="width: 0%;"></div>
                            </div>
                            <span class="ms-2">0</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">3 stars</span>
                            <div class="progress w-50">
                                <div class="progress-bar bg-secondary" style="width: 0%;"></div>
                            </div>
                            <span class="ms-2">0</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">2 stars</span>
                            <div class="progress w-50">
                                <div class="progress-bar bg-secondary" style="width: 0%;"></div>
                            </div>
                            <span class="ms-2">0</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">1 star</span>
                            <div class="progress w-50">
                                <div class="progress-bar bg-secondary" style="width: 0%;"></div>
                            </div>
                            <span class="ms-2">0</span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-dark mt-4 mb-3" onclick="toggleReviewForm()">Write a review</button>
                <div id="review-form" class="border p-3 mt-3 mb-3 border-bottom ">
                    <h5 class="mb-3">Write a Review</h5>
                    <form>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <select id="rating" class="form-select">
                                <option value="5">5 - Excellent</option>
                                <option value="4">4 - Good</option>
                                <option value="3">3 - Average</option>
                                <option value="2">2 - Poor</option>
                                <option value="1">1 - Terrible</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="review-title" class="form-label">Review Title</label>
                            <input type="text" id="review-title" class="form-control" maxlength="100">
                        </div>
                        <div class="mb-3">
                            <label for="review" class="form-label">Review</label>
                            <textarea id="review" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-2"
                                onclick="toggleReviewForm()">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                        </div>
                    </form>
                </div>
                <hr>
                <!-- Review 1 -->
                <div class="review-item border-bottom pb-3 mb-3">
                    <div class="d-flex align-items-center mb-2">
                        <p class="text-warning mb-0 me-2">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                        <span class="text-muted small">John Doe - January 1, 2025</span>
                    </div>
                    <h6 class="fw-bold">Excellent Quality!</h6>
                    <p class="mb-0">I love this chair! It's very comfortable and the design fits perfectly in my
                        living room. Highly recommend.</p>
                </div>
                <!-- Review 2 -->
                <div class="review-item border-bottom pb-3 mb-3">
                    <div class="d-flex align-items-center mb-2">
                        <p class="text-warning mb-0 me-2">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                        <span class="text-muted small">Jane Smith - December 20, 2024</span>
                    </div>
                    <h6 class="fw-bold">Very good but a bit pricey</h6>
                    <p class="mb-0">The chair looks great and feels sturdy. However, I think the price is a bit high
                        compared to other similar products.</p>
                </div>
                <!-- Review 3 -->
                <div class="review-item border-bottom pb-3 mb-3">
                    <div class="d-flex align-items-center mb-2">
                        <p class="text-warning mb-0 me-2">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                        <span class="text-muted small">Alice Johnson - November 15, 2024</span>
                    </div>
                    <h6 class="fw-bold">Good but needs improvement</h6>
                    <p class="mb-0">The design is beautiful, but the assembly process was quite complicated. Took me
                        over an hour to put it together.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Maybe you like -->
<div class="container mb-3">
    <h2 class="text-center">Maybe you like</h2>
    <div class="row">
        <?php
        $i = 0;
        for ($i; $i < 5; $i++) { ?>
            <?php require 'layout/product.php' ?>
        <?php } ?>
    </div>
</div>

<?php require 'layout/footer.php' ?>