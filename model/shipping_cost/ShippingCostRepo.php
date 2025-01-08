<?php
class ShippingCostRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $shippingCosts = array();
        $sql = "SELECT * FROM shipping_cost"; // Assuming the table name is 'shipping_cost'
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $shippingCost = new ShippingCost(
                    $row["id"],
                    $row["province_id"], // Corrected property name
                    $row["price"]
                );
                $shippingCosts[] = $shippingCost;
            }
        }
        return $shippingCosts;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $shippingCosts = $this->fetchAll($condition);
        $shippingCost = current($shippingCosts);
        return $shippingCost;
    }
}