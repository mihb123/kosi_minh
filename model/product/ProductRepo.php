<?php
class ProductRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $products = [];
        $sql = "SELECT * FROM product";
        if ($condition) {
            $sql .= " WHERE $condition";
        }
        $result = $conn->query($sql);
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

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        $condition = "id = $id";
        $products = $this->fetchAll($condition);
        return current($products);
    }

    function save($data)
    {
        global $conn;
        $name = $data["name"];
        $price = $data["price"];
        $description = $data["description"];
        $qty = $data["qty"];
        $created_date = $data["created_date"];
        $category_id = $data["category_id"];
        $featured_image = $data["featured_image"];
        $discount_id = $data["discount_id"];

        $sql = "INSERT INTO product (name, price, description, qty, created_date, category_id, featured_image, discount_id) VALUES ('$name', $price, '$description', $qty, '$created_date', $category_id, '$featured_image', $discount_id)";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($product)
    {
        global $conn;
        $id = $product->getId();
        $name = $product->getName();
        $price = $product->getPrice();
        $description = $product->getDescription();
        $qty = $product->getQty();
        $created_date = $product->getCreatedDate();
        $category_id = $product->getCategoryId();
        $featured_image = $product->getFeaturedImage();
        $discount_id = $product->getDiscountId();

        $sql = "UPDATE product SET 
            name='$name', 
            price=$price, 
            description='$description', 
            qty=$qty, 
            created_date='$created_date', 
            category_id=$category_id, 
            featured_image='$featured_image', 
            discount_id=$discount_id 
            WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($product)
    {
        global $conn;
        $id = $product->getId();
        $sql = "DELETE FROM product WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }
}
