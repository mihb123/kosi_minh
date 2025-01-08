<?php
class OrderStatusRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $orderStatuses = array();
        $sql = "SELECT * FROM order_status"; // Assuming the table name is 'order_status'
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $orderStatus = new OrderStatus(
                    $row["id"],
                    $row["name"],
                    $row["description"]
                );
                $orderStatuses[] = $orderStatus;
            }
        }
        return $orderStatuses;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $orderStatuses = $this->fetchAll($condition);
        $orderStatus = current($orderStatuses);
        return $orderStatus;
    }
}