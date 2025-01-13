<?php
class ProductRepo
{
    protected function fetchAll($condition = null, $sort = null, $limit = null)
    {
        global $conn;
        $products = [];
        $sql = "SELECT * FROM view_product";

        if ($condition) {
            $sql .= " WHERE $condition"; //SELECT * FROM view_product WHERE name LIKE '%abc%'  AND create_date='2020-08-07'
        }

        if ($sort) {
            //SELECT * FROM view_product WHERE name LIKE '%abc%'  AND create_date='2020-08-07' ORDER BY name asc, created_date desc
            $sql .= " $sort";
        }

        if ($limit) {
            $sql .= " $limit";
            //SELECT * FROM view_product WHERE name LIKE '%abc%'  AND create_date='2020-08-07' ORDER BY name asc, created_date desc LIMIT 20, 10
        }
        // echo $sql;
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
                    $row['discount_id'],
                    $row['sale_price']
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

    function getByCategory($id)
    {
        $condition = "category_id = $id";
        return $this->fetchAll($condition);
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
        $sale_price = $data["sale_price"];

        $sql = "INSERT INTO product (name, price, description, qty, created_date, category_id, featured_image, discount_id) VALUES ('$name', $price, '$description', $qty, '$created_date', $category_id, '$featured_image', $discount_id,$sale_price)";
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
        $sale_price = $product->getSalePrice();

        $sql = "UPDATE product SET 
            name='$name', 
            price=$price, 
            description='$description', 
            qty=$qty, 
            created_date='$created_date', 
            category_id=$category_id, 
            featured_image='$featured_image', 
            discount_id=$discount_id,
            sale_price=$sale_price 
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

    function getBy($array_conds = array(), $array_sorts = array(), $page = null, $qty_per_page = null)
    {
        if ($page) {
            $page_index = $page - 1;
        }

        $temp = array();
        foreach ($array_conds as $column => $cond) {
            $type = $cond['type'];
            $val = $cond['val'];
            $str = "$column $type ";
            if (in_array($type, array("BETWEEN", "LIKE"))) {
                $str .= "$val"; //name LIKE '%abc%'
            } else {
                $str .= "'$val'";
            }
            $temp[] = $str;
        }
        $condition = null;

        if (count($array_conds)) {
            //name LIKE '%abc%' 
            //create_date='2020-08-07'
            // => name LIKE '%abc%'  AND create_date='2020-08-07'
            $condition = implode(" AND ", $temp);
        }

        $temp = array();
        foreach ($array_sorts as $key => $sort) {
            $temp[] = "$key $sort";
        }
        $sort = null;

        if (count($array_sorts)) {
            //name asc
            //created_date desc 
            //=> ORDER BY name asc, created_date desc 
            $sort = "ORDER BY " . implode(" , ", $temp);
        }

        $limit = null;
        //Trang 3, lấy 10 phần tử
        //LIMIT 20, 10
        if ($qty_per_page) {
            $start = $page_index * $qty_per_page;
            $limit = "LIMIT $start, $qty_per_page";
        }


        return $this->fetchAll($condition, $sort, $limit);
    }
}