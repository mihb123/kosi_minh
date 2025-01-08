<?php
class ProductRepo
{
    function fetch()
    {
        global $conn;
        $products = [];

        $query = "SELECT * FROM product";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $product = new Product(
                    $row['id'],
                    $row['name'],
                    $row['price'],
                    $row['description'],
                    $row['qty'],
                    $row['created_date'],
                    $row['category_id'],
                    $row['featured_image'],
                    $row['discount_id']
                );
                $products[] = $product;
            }
        }
        return $products;
    }

    function getBy() {}
}
