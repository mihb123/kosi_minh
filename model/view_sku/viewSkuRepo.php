<?php
class viewSkuRepo
{
    protected function fetchAll($condition = array())
    {
        global $conn;
        $skus = array();
        $sql = "SELECT * FROM view_sku";

        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $sku = new Sku(
                    $row["sku_id"],
                    $row["product_id"],
                    $row["product_name"],
                    $row["product_description"],
                    $row["product_qty"],
                    $row["product_created_date"],
                    $row["category_id"],
                    $row["discount_id"],
                    $row["product_featured_image"],
                    $row["product_price"],
                    $row["sku_price"],
                    $row["discount_percent"],
                    $row["discount_name"],
                    $row["discount_start_date"],
                    $row["discount_end_date"],
                    $row["color_id"],
                    $row["color_name"],
                    $row["color_code"],
                    $row["material_id"],
                    $row["material_name"],
                    $row["material_description"],
                    $row["sale_price"]
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
        $featured_image = $data["product_featured_image"];
        $price = $data["product_price"];
        $sku_price = $data["sku_price"];
        $color_id = $data["color_id"]; // Ensure this variable is defined
        $color_name = $data["color_name"];
        $color_code = $data["color_code"];
        $sale_price = $data["sale_price"];
        $discount_percent = $data["discount_percent"];
        $product_description = $data["product_description"];
        $product_qty = $data["product_qty"];
        $product_created_date = $data["product_created_date"];
        $category_id = $data["category_id"];
        $discount_id = $data["discount_id"];
        $discount_name = $data["discount_name"];
        $discount_start_date = $data["discount_start_date"];
        $discount_end_date = $data["discount_end_date"];
        $material_id = $data["material_id"];
        $material_name = $data["material_name"];
        $material_description = $data["material_description"];

        $sql = "INSERT INTO view_sku (product_id, sku_id, product_name, product_description, product_qty, product_created_date, category_id, discount_id, product_featured_image, product_price, sku_price, color_id, color_name, color_code, material_id, material_name, material_description, sale_price, discount_percent) VALUES ($product_id, '$sku_id', '$product_name', '$product_description', $product_qty, '$product_created_date', $category_id, $discount_id, '$featured_image', $price, $sku_price, $color_id, '$color_name', '$color_code', $material_id, '$material_name', '$material_description', $sale_price, $discount_percent)";
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
        $featured_image = $sku->getProductFeaturedImage();
        $price = $sku->getProductPrice();
        $sku_price = $sku->getSkuPrice();
        $color_id = $sku->getColorId(); // Ensure this variable is defined
        $color_name = $sku->getColorName();
        $color_code = $sku->getColorCode();
        $sale_price = $sku->getSalePrice();
        $discount_percent = $sku->getDiscountPercent();
        $product_description = $sku->getProductDescription();
        $product_qty = $sku->getProductQty();
        $product_created_date = $sku->getProductCreatedDate();
        $category_id = $sku->getCategoryId();
        $discount_id = $sku->getDiscountId();
        $material_id = $sku->getMaterialId();
        $material_name = $sku->getMaterialName();
        $material_description = $sku->getMaterialDescription();

        $sql = "UPDATE view_sku SET 
            product_id=$product_id, 
            product_name='$product_name', 
            product_description='$product_description', 
            product_qty=$product_qty, 
            product_created_date='$product_created_date', 
            category_id=$category_id, 
            discount_id=$discount_id, 
            product_featured_image='$featured_image', 
            product_price=$price, 
            sku_price=$sku_price, 
            color_id=$color_id, 
            color_name='$color_name', 
            color_code='$color_code', 
            material_id=$material_id, 
            material_name='$material_name', 
            material_description='$material_description', 
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

    function getBy($array_cond = array())
    {
        $temp = array();
        $condition = null;
        if ($array_cond) {
            foreach ($array_cond as $column => $cond) {
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


            if (count($array_cond)) {
                $condition = implode(" AND ", $temp);
            }
        }
        $skus = $this->fetchAll($condition);
        return $skus;
    }

    function removeDup($products)
    {
        $uniqueProducts = array();
        $productIds = [];
        foreach ($products as $product) {
            $productId = $product->getProductId();
            if (!in_array($productId, $productIds)) {
                $productIds[] = $productId;
                $uniqueProducts[] = $product;
            }
        }
        return $uniqueProducts;
    }

    function getByConds($array_conds = array())
    {
        if (count($array_conds) > 1) {
            $conditions = [];
            foreach ($array_conds as $array_cond) {
                foreach ($array_cond as $column => $cond) {
                    $temp = array();
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
                    $condition = implode(" AND ", $temp);
                }
                $conditions[] = $condition;
            }
            $sql = implode(" AND ", $conditions);
            $skus = $this->fetchAll($sql);
            return $skus;
        } else {
            $skus = $this->getBy(current($array_conds));
            return $skus;
        }
    }
}