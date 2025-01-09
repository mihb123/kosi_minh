<?php
class SkuRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $skus = array();
        $sql = "SELECT * FROM view_sku"; // Assuming the table name is 'sku'
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $sku = new Sku(
                    $row["sku_id"], // Assuming the field name is 'sku_id'
                    $row["product_id"], // Assuming the field name is 'product_id'
                    $row["product_name"], // Assuming the field name is 'product_name'
                    $row["featured_image"], // Assuming the field name is 'featured_image'
                    $row["price"], // Assuming the field name is 'price'
                    $row["sku_price"], // Assuming the field name is 'sku_price'
                    $row["color_name"], // Assuming the field name is 'color_name'
                    $row["color_code"], // Assuming the field name is 'color_code'
                    $row["sale_price"], // Assuming the field name is 'sale_price'
                    $row["discount_percent"] // Assuming the field name is 'discount_percent'
                );
                $skus[] = $sku;
            }
        }
        return $skus;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function findSkuId($id)
    {
        global $conn;
        $condition = "sku_id = $id";
        $skus = $this->fetchAll($condition);

        return $skus;
    }

    function findProductId($id)
    {
        global $conn;
        $condition = "product_id = $id";
        $products = $this->fetchAll($condition);
        return $products;
    }

    function save($data)
    {
        global $conn;
        $product_id = $data["product_id"];
        $sku_id = $data["sku_id"];
        $product_name = $data["product_name"];
        $featured_image = $data["featured_image"];
        $price = $data["price"];
        $sku_price = $data["sku_price"];
        $color_name = $data["color_name"];
        $color_code = $data["color_code"];
        $sale_price = $data["sale_price"];
        $discount_percent = $data["discount_percent"];

        $sql = "INSERT INTO view_sku (product_id, sku_id, product_name, featured_image, price, sku_price, color_name, color_code, sale_price, discount_percent) VALUES ($product_id, '$sku_id', '$product_name', '$featured_image', $price, $sku_price, '$color_name', '$color_code', $sale_price, $discount_percent)";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($sku)
    {
        global $conn;
        $sku_id = $sku->getSkuId();
        $product_id = $sku->getProductId();
        $product_name = $sku->getProductName();
        $featured_image = $sku->getFeaturedImage();
        $price = $sku->getPrice();
        $sku_price = $sku->getSkuPrice();
        $color_name = $sku->getColorName();
        $color_code = $sku->getColorCode();
        $sale_price = $sku->getSalePrice();
        $discount_percent = $sku->getDiscountPercent();

        $sql = "UPDATE view_sku SET 
            product_id=$product_id, 
            product_name='$product_name', 
            featured_image='$featured_image', 
            price=$price, 
            sku_price=$sku_price, 
            color_name='$color_name', 
            color_code='$color_code', 
            sale_price=$sale_price, 
            discount_percent=$discount_percent 
            WHERE sku_id='$sku_id'";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($sku)
    {
        global $conn;
        $sku_id = $sku->getSkuId();
        $sql = "DELETE FROM view_sku WHERE sku_id='$sku_id'";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function getBy($array_conds = array())
    {
        $temp = array();
        foreach ($array_conds as $column => $cond) {
            // VD: $array_conds = [
            // name => [
            //     'type' = 'LIKE';
            //     'val' = 'abc'
            // ]
            // create_date => [
            //     'type' => 'BETWEEN',
            //     'val' => ['2020-01-01', '2020-10-01]
            // ]

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
        $skus = $this->fetchAll($condition);
        return $skus;
    }
}
