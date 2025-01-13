<?php
define('ABSPATH', dirname(__FILE__) . '/');

// Import all model files
require_once ABSPATH . 'model/blog/Blog.php';
require_once ABSPATH . 'model/category/Category.php';
require_once ABSPATH . 'model/color/Color.php';
require_once ABSPATH . 'model/customer/Customer.php';
require_once ABSPATH . 'model/discount/Discount.php';
require_once ABSPATH . 'model/district/District.php';
require_once ABSPATH . 'model/image/Image.php';
require_once ABSPATH . 'model/material/Material.php';
require_once ABSPATH . 'model/order/Order.php';
require_once ABSPATH . 'model/order_item/OrderItem.php';
require_once ABSPATH . 'model/order_status/OrderStatus.php';
require_once ABSPATH . 'model/product/Product.php';
require_once ABSPATH . 'model/province/Province.php';
require_once ABSPATH . 'model/review/Review.php';
require_once ABSPATH . 'model/shipping_cost/ShippingCost.php';
require_once ABSPATH . 'model/sku/Sku.php';
require_once ABSPATH . 'model/view_sku/viewSku.php';
require_once ABSPATH . 'model/ward/Ward.php';
require_once ABSPATH . 'model/wishlist/Wishlist.php';
require_once ABSPATH . 'model/cart/Cart.php';

// Import all repository files
require_once ABSPATH . 'model/category/CategoryRepo.php';
require_once ABSPATH . 'model/color/ColorRepo.php';
require_once ABSPATH . 'model/customer/CustomerRepo.php';
require_once ABSPATH . 'model/discount/DiscountRepo.php';
require_once ABSPATH . 'model/district/DistrictRepo.php';
require_once ABSPATH . 'model/image/ImageRepo.php';
require_once ABSPATH . 'model/material/MaterialRepo.php';
require_once ABSPATH . 'model/order/OrderRepo.php';
require_once ABSPATH . 'model/order_item/OrderItemRepo.php';
require_once ABSPATH . 'model/order_status/OrderStatusRepo.php';
require_once ABSPATH . 'model/product/ProductRepo.php';
require_once ABSPATH . 'model/province/ProvinceRepo.php';
require_once ABSPATH . 'model/review/ReviewRepo.php';
require_once ABSPATH . 'model/shipping_cost/ShippingCostRepo.php';
require_once ABSPATH . 'model/sku/SkuRepo.php';
require_once ABSPATH . 'model/view_sku/viewSkuRepo.php';
require_once ABSPATH . 'model/ward/WardRepo.php';
require_once ABSPATH . 'model/wishlist/WishlistRepo.php';