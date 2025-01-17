<?php
class OrderItemRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $orderItems = array();
        $sql = "SELECT * FROM `order_item`"; // Assuming the table name is 'order_item'
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $orderItem = new OrderItem(
                    $row["order_id"], // Corrected to order_id
                    $row["product_id"], // Assuming there's a product_id
                    $row["qty"],
                    $row["unit_price"], // Assuming there's a price field
                    $row["total"],
                    $row["product_name"],
                    $row["product_image"]
                );
                $orderItems[] = $orderItem;
            }
        }
        return $orderItems;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "order_id = $id";
        $orderItems = $this->fetchAll($condition);

        return $orderItems;
    }

    function save($data)
    {
        global $conn;
        $order_id = $data["order_id"];
        $product_id = $data["product_id"];
        $qty = $data["qty"];
        $unit_price = $data["unit_price"];
        $total = $data["total"];
        $product_name = $data["product_name"];
        $product_image = $data["product_image"];
        $sql = "INSERT INTO `order_item` (product_id, order_id, qty, unit_price, total, product_name, product_image) VALUES ($product_id, $order_id, $qty, $unit_price, $total, '$product_name', '$product_image')";

        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    // function update($orderItem)
    // {
    //     global $conn;
    //     $order_id = $orderItem->getOrderId();
    //     $product_id = $orderItem->getProductId();
    //     $qty = $orderItem->getQty(); // Changed to qty
    //     $price = $orderItem->getUnitPrice(); // Get unit price
    //     $total = $qty * $price; // Calculate total

    //     $sql = "UPDATE `order_item` SET 
    //         order_id=$order_id, 
    //         product_id=$product_id, 
    //         qty=$qty, // Changed to qty
    //         unit_price=$price, 
    //         total=$total 
    //         WHERE id=$id";

    //     if ($conn->query($sql) === TRUE) {
    //         return true;
    //     }
    //     echo "Error: " . $sql . PHP_EOL . $conn->error;
    //     return false;
    // }

    function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `order_item` WHERE order_id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }
}