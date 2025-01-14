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

$.ajax({
    type: "GET",
    url: "?c=cart&a=display",
    success: function (response) {
        displayCart(response)
    },
    error: function (xhr, status, error) {
        console.log(xhr.responseText);
    }
});

$('.addToCart').on('click', function () {
    let product_id = $(this).attr('product_id')
    $.ajax({
        type: "GET",
        url: "?c=cart&a=add",
        data: { product_id: product_id, qty: 1 }
    }).done(function (response) {
        // let json = JSON.parse(response);
        // let Qty = json.qty;
        // $('.countCart').html(Qty);
        displayCart(response);
    })

});

function displayCart(data) {
    try {
        let json = JSON.parse(data);
        let rows = "";
        let items = json.items;
        let total = json.total;
        let Qty = json.qty;
        for (let i in items) {
            let item = items[i];
            let id = item.product_id;
            let name = item.name;
            let price = item.unit_price;
            let img = item.img;
            let qty = item.qty;
            let total = item.total;
            let row =
                `<div class="d-flex align-items-center mb-3" id = "${id}">
            <img src="image/${img}" alt="${name}" class="img-thumbnail"
                style="width: 50px; height: 50px;">
            <div class="ms-3">
                <p class="mb-0">${name}</p>
                <strong>$</strong>
                <strong class="priceInCart">${price}</strong>
            </div>
            <div class="ms-auto d-flex align-items-center">
                <button class="btn btn-outline-secondary btn-sm minus" onclick = "minusItem(this, ${id} )">-</button>
                <span class="mx-2 equal">${qty}</span>
                <button class="btn btn-outline-secondary btn-sm" onclick = "addItem(this, ${id} )">+</button>
            </div>
        </div>`
            rows += row;
        }
        $('.cartSideBar').html(rows);
        $('#subtotalSection .subtotal').html(Number(total.toFixed(2)));
        $('.countCart').html(Qty);

    } catch (e) {
        console.error("Error parsing JSON:", e);
    }
}

function addItem(self, id) {
    $.ajax({
        type: "get",
        url: "?c=cart&a=add",
        data: { product_id: id, qty: 1 },
        success: function (response) {
            displayCart(response);
        }
    });
}

function minusItem(self, id) {
    $.ajax({
        type: "get",
        url: "?c=cart&a=minus",
        data: { product_id: id },
        success: function (response) {
            displayCart(response);
        }
    });
}

// wishlist
function addWishlist(self, id) {
    $('.bs-tooltip-auto').remove();
    $(self).attr('class', 'removeWishlist')
    $(self).attr('onclick', 'removeWishlist(this, ' + id + ')')
    $(self).html(
        `<i class="bi bi-heart" title="Remove to Wishlist" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-delay='{"show": 100, "hide": 100}'></i> `
    )
    $('[data-bs-toggle="tooltip"]').tooltip();

    $.ajax({
        type: "get",
        url: "?c=wishlist&a=add",
        data: { product_id: id },
        success: function (response) {
            let wishlist = JSON.parse(response);
            let count = wishlist.length
            $('.count').html(count);
            alert('Thêm vào wishlist thành công');
        }
    });
}

function removeWishlist(self, id) {
    $('.bs-tooltip-auto').remove();
    $(self).attr('class', 'addWishlist')
    $(self).attr('onclick', 'addWishlist(this, ' + id + ')')
    $(self).html(
        `<i class="bi bi-heart" title="Add to Wishlist" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-delay='{"show": 100, "hide": 100}'></i> `
    )
    $('[data-bs-toggle="tooltip"]').tooltip();


    $.ajax({
        type: "get",
        url: "?c=wishlist&a=remove",
        data: { product_id: id },
        success: function (response) {
            let wishlist = JSON.parse(response);
            let count = wishlist.length
            $('.count').html(count);
            $(`.kosiProduct_${id}`).remove();
            $('.bs-tooltip-auto').remove();
            alert('Đã loại bỏ ra khỏi wishlist');
        }
    });
}

$('.removeWishlist>i').attr('title', 'Remove to wishlist');

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