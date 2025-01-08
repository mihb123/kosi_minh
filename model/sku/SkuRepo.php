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
}
