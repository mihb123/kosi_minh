// Your cart - sidebar

$(document).ready(function () {
    function toggleView(sectionId) {
        $('.position-absolute').removeClass('active');
        $('#cartOptions, #subtotalSection, #buttonsSection').addClass('d-none');
        $(sectionId).addClass('active');
    }

    $('.cancel-btn').click(function () {
        $('.position-absolute').removeClass('active');
        $('#cartOptions, #subtotalSection, #buttonsSection').removeClass('d-none');
    });

    $('#estimateShippingBtn').click(() => toggleView('#shippingEstimate'));
    $('#addNoteBtn').click(() => toggleView('#addNote'));
    $('#addCouponBtn').click(() => toggleView('#addCoupon'));

    // plus, minus product qty in cart

    $('.plus').click(function () {
        let equal = $('.equal').text();
        let price = $('.priceInCart').text();
        let newResult = Number(equal) + 1;
        $('.equal').text(newResult);
        equal = newResult;
        let subtotal = Number(equal) * Number(price);
        $('.subtotal').text(subtotal.toFixed(2));
    });

    $('.minus').click(function () {
        let equal = $('.equal').text();
        let price = $('.priceInCart').text();
        if (Number(equal)) {
            let newResult = Number(equal) - 1;
            equal = newResult;
            $('.equal').text(newResult);
            let subtotal = Number(equal) * Number(price);
            $('.subtotal').text(subtotal.toFixed(2));
        }

    });

})

// color filter
// Lắng nghe sự kiện "change" khi checkbox được chọn hoặc bỏ chọn
$('.filter-section .color_filter').on('change', function () {
    let currentUrl = new URL(window.location.href);

    if ($(this).is(':checked')) {
        // Nếu checkbox được chọn, thêm tham số "colorId" với giá trị mới
        let selectedColor = $(this).val();
        currentUrl.searchParams.set('colorId', selectedColor);
    } else {
        // Nếu checkbox bị bỏ chọn, xóa tham số "colorId"
        currentUrl.searchParams.delete('colorId');
    }

    // Reload trang với URL mới
    window.location.href = currentUrl.toString();
});

// material filter
$('.filter-section .material_filter').on('change', function () {
    let currentUrl = new URL(window.location.href);
    if ($(this).is(':checked')) {
        let selectedColor = $(this).val();
        currentUrl.searchParams.set('materialId', selectedColor);
    } else {
        currentUrl.searchParams.delete('materialId');
    }
    // Reload trang với URL mới
    window.location.href = currentUrl.toString();
});

// Scroll To Top Functionality
const scrollToTopButton = document.getElementById("scrollToTop");

if (scrollToTopButton) {
    window.addEventListener("scroll", () => {
        if (window.scrollY > 1000) {
            scrollToTopButton.classList.remove("d-none");
        } else {
            scrollToTopButton.classList.add("d-none");
        }
    });

    scrollToTopButton.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
}



function changeImage(element, imageUrl) {
    $(element).closest(".product-card").find("img").attr("src", imageUrl);
}

$(function () {
    $('[data-bs-toggle="tooltip"]').tooltip();
});

// Handle thumbnail clicks
document.querySelectorAll(".thumbnail").forEach((thumbnail) => {
    thumbnail.addEventListener("click", function () {
        // Update main image source
        document.getElementById("main-image").src = this.src;

        // Highlight selected thumbnail
        document
            .querySelectorAll(".thumbnail")
            .forEach((tn) => tn.classList.remove("selected"));
        this.classList.add("selected");
    });
});

// Hide/Show write a review
function toggleReviewForm() {
    const reviewForm = document.getElementById("review-form");
    reviewForm.style.display =
        reviewForm.style.display === "none" || reviewForm.style.display === ""
            ? "block"
            : "none";
}

// payment
// Lấy tất cả các thẻ `payment - option`
const paymentOptions = document.querySelectorAll(".payment-option");
if (paymentOptions.length > 0) {
    paymentOptions.forEach(option => {
        option.addEventListener("click", function () {
            paymentOptions.forEach(opt => opt.classList.remove("selected"));
            this.classList.add("selected");

            const radio = this.querySelector("input[type='radio']");
            if (radio) radio.checked = true;
        });
    });
}

// sidebar - price range
// Khởi tạo thanh trượt với noUiSlider - cần fix lại
const priceSlider = document.getElementById("price-slider");
noUiSlider.create(priceSlider, {

    start: [0, 500],
    connect: true,
    range: {
        min: 0,
        max: 500,
    },
    step: 1,
    tooltips: true,
    format: {
        to: (value) => `$${Math.round(value)} `,
        from: (value) => Number(value.replace("$", "")),
    },
});
// filter price range

// Gắn sự kiện hover để điều chỉnh hiển thị tooltip
const handles = document.querySelectorAll(".noUi-handle");
handles.forEach((handle) => {
    handle.addEventListener("mouseenter", () => {
        const tooltip = handle.querySelector(".noUi-tooltip");
        if (tooltip) tooltip.style.display = "block";
    });

    handle.addEventListener("mouseleave", () => {
        const tooltip = handle.querySelector(".noUi-tooltip");
        if (tooltip) tooltip.style.display = "none";
    });

    // update href de xu ly data tren backend
    handle.addEventListener("mouseup", () => {
        let currentUrl = new URL(window.location.href);
        const minLabel = document.getElementById("minPriceLabel").textContent.replace("$", '');
        const maxLabel = document.getElementById("maxPriceLabel").textContent.replace("$", '');

        currentUrl.searchParams.set('minPrice', minLabel.trim());
        currentUrl.searchParams.set('maxPrice', maxLabel.trim());
        window.location.href = currentUrl.toString();
    })
});

priceSlider.noUiSlider.on("update", (values) => {
    const minLabel = document.getElementById("minPriceLabel");
    const maxLabel = document.getElementById("maxPriceLabel");
    minLabel.textContent = values[0]; // Hiển thị giá trị min
    maxLabel.textContent = values[1]; // Hiển thị giá trị max
});

// search bar
$(document).ready(function () {
    const $searchInput = $("#search-bar");
    const $resultInfo = $("#result-info");

    // Mở rộng thanh tìm kiếm khi có nhiều ký tự
    $searchInput.on("input", function () {
        $(this).toggleClass("full-width", $(this).val().length > 25);
    });

});

