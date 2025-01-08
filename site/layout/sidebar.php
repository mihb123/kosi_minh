<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sidebar.css">
    <title>Product Sidebar</title>
</head>

<body>
    <div class="sidebar">
        <h5>Product Categories</h5>
        <ul class="list-unstyled">
            <li><a href="#">Decor (5)</a></li>
            <li><a href="#">Furniture (14)</a></li>
            <li><a href="#">Lighting (15)</a></li>
            <li><a href="#">Sofa (4)</a></li>
            <li><a href="#">Uncategorized (0)</a></li>
        </ul>
        <h5>Price</h5>
        <input type="range" class="form-control-range" min="0" max="500" step="10">
        <h5>Color</h5>
        <ul class="list-unstyled">
            <li><input type="checkbox"> AliceBlue (1)</li>
            <li><input type="checkbox"> Azure (1)</li>
            <li><input type="checkbox"> Bisque (1)</li>
            <li><input type="checkbox"> Black (4)</li>
            <li><input type="checkbox"> BlanchedAlmond (1)</li>
            <li><input type="checkbox"> Blue (1)</li>
            <li><input type="checkbox"> BlueViolet (1)</li>
            <li><input type="checkbox"> Brown (1)</li>
            <li><input type="checkbox"> BurlyWood (1)</li>
            <li><input type="checkbox"> Chocolate (1)</li>
        </ul>
        <h5>Material</h5>
        <ul class="list-unstyled">
            <li><input type="checkbox"> Any (1)</li>
            <li><input type="checkbox"> Ceramic (1)</li>
            <li><input type="checkbox"> Fabric (1)</li>
            <li><input type="checkbox"> Metal (1)</li>
            <li><input type="checkbox"> Wood (1)</li>
        </ul>
        <h5>Tags</h5>
        <ul class="list-unstyled">
            <li><input type="checkbox"> Any (5)</li>
            <li><input type="checkbox"> Ceramic (7)</li>
            <li><input type="checkbox"> Fabric (4)</li>
            <li><input type="checkbox"> Metal (6)</li>
            <li><input type="checkbox"> Wood (5)</li>
        </ul>
        <h5>Best Sellers</h5>
        <ul class="list-unstyled">
            <li><a href="#">Wicked lounge rattan - $120.00</a></li>
            <li><a href="#">Wicked lounge rattan - $282.00</a></li>
            <li><a href="#">Alex lounge chair - <del>$180.00</del> $140.00</a></li>
        </ul>
    </div>
    <div class="content">
        <!-- Nội dung sẽ được đặt ở đây -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>