<?php
class SkuRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $skus = array();
        $sql = "SELECT * FROM sku";
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $sku = new Sku($row["id"], $row["product_id"], $row["color_id"], $row["material_id"], $row["price"]);
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

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $skus = $this->fetchAll($condition);
        $sku = current($skus);
        return $sku;
    }

    function save($data)
    {
        global $conn;
        $product_id = $data["product_id"];
        $color_id = $data["color_id"];
        $material_id = $data["material_id"];
        $price = $data["price"];

        $sql = "INSERT INTO sku (product_id, color_id, material_id, price) VALUES ('$product_id', '$color_id', '$material_id', '$price')";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($sku)
    {
        global $conn;
        $id = $sku->getId();
        $product_id = $sku->getProductId();
        $color_id = $sku->getColorId();
        $material_id = $sku->getMaterialId();
        $price = $sku->getPrice();

        $sql = "UPDATE sku SET 
            product_id='$product_id', 
            color_id='$color_id', 
            material_id='$material_id', 
            price='$price' 
            WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($sku)
    {
        global $conn;
        $id = $sku->getId();
        $sql = "DELETE FROM sku WHERE id=$id";

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