<?php require 'layout/header.php' ?>
<!-- Banner Section -->
<?php $sectionName = 'Contact'; ?>
<?php require 'layout/banner.php' ?>
<!-- Contact Section -->
<div class="container my-5">
    <div class="row gy-5">
        <!-- Left Section -->
        <div class="col-lg-6">
            <h3 class="mb-4">Find us here.</h3>
            <ul class="list-unstyled">
                <li class="mb-3 d-flex align-items-start">
                    <i class="bi bi-geo-alt fs-4 me-3"></i>
                    <div>
                        <strong>Address:</strong><br>
                        1234 Heaven Stress, Beverly Hill, Melbourne, USA.
                    </div>
                </li>
                <li class="mb-3 d-flex align-items-start">
                    <i class="bi bi-telephone fs-4 me-3"></i>
                    <div>
                        <strong>Phone Number:</strong><br>
                        (800) 123 456 789, (800) 987 654 321
                    </div>
                </li>
                <li class="mb-3 d-flex align-items-start">
                    <i class="bi bi-envelope fs-4 me-3"></i>
                    <div>
                        <strong>Email:</strong><br>
                        Contact@erentheme.com
                    </div>
                </li>
            </ul>
            <p>
                Canymix is a premium Templates theme with advanced admin module. It's extremely customizable, easy
                to use, and fully responsive and retina ready.
            </p>
        </div>

        <!-- Right Section -->
        <div class="col-lg-6">
            <h3 class="mb-4">Contact us</h3>
            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" id="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                        <textarea id="message" rows="5" class="form-control" placeholder="Message" required></textarea>
                    </div>
                </div>

                <button type="submit" class=" btn btn-dark px-5" style="margin-left: 8px;">Submit</button>
            </form>
        </div>
    </div>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.097617494552!2d105.8497951406306!3d21.028779737856727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab953357c995%3A0x1babf6bb4f9a20e!2zSG_DoG4gS2nhur9tIExha2U!5e0!3m2!1sen!2s!4v1735928483685!5m2!1sen!2s"
        width="100%" height="450" style="border:0; margin-top: 20px;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php require 'layout/footer.php' ?>