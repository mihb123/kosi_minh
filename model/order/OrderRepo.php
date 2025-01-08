<?php
class OrderRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $orders = array();
        $sql = "SELECT * FROM order"; // Assuming the table name is 'orders'
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $order = new Order(
                    $row["id"],
                    $row["customer_id"], // Corrected property name
                    $row["created_date"], // Corrected property name
                    $row["recipient"],
                    $row["phone_no"], // Corrected property name
                    $row["ward_id"], // Corrected property name
                    $row["shipping_address"], // Corrected property name
                    $row["status_id"], // Corrected property name
                    $row["shipping_cost"], // Corrected property name
                    $row["received_date"] // Corrected property name
                );
                $orders[] = $order;
            }
        }
        return $orders;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $orders = $this->fetchAll($condition);
        $order = current($orders);
        return $order;
    }
}