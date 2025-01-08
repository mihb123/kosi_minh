<?php
class OrderItemRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $orderItems = array();
        $sql = "SELECT * FROM order_item"; // Assuming the table name is 'order_item'
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $orderItem = new OrderItem(
                    $row["sku_id"],
                    $row["order_id"],
                    $row["qty"],
                    $row["unit_price"],
                    $row["total"]
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
        $condition = "order_id = $id"; // Assuming order_id is the identifier
        $orderItems = $this->fetchAll($condition);
        $orderItem = current($orderItems);
        return $orderItem;
    }
}