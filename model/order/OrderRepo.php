<?php
class OrderRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $orders = array();
        $sql = "SELECT * FROM `order`"; // Assuming the table name is 'orders'
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
                    $row["delivery_date"] // Corrected property name
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

    function save($data)
    {
        global $conn;
        $customer_id = $data["customer_id"];
        $created_date = $data["created_date"];
        $recipient = $data["recipient"];
        $phone_no = $data["phone_no"];
        $ward_id = $data["ward_id"];
        $shipping_address = $data["shipping_address"];
        $status_id = $data["status_id"];
        $shipping_cost = $data["shipping_cost"];
        $delivery_date = $data["delivery_date"];

        $sql = "INSERT INTO `order` (customer_id, created_date, recipient, phone_no, ward_id, shipping_address, status_id, shipping_cost, delivery_date) VALUES ($customer_id, '$created_date', '$recipient', '$phone_no', $ward_id, '$shipping_address', $status_id, $shipping_cost, '$delivery_date')";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($order)
    {
        global $conn;
        $id = $order->getId();
        $customer_id = $order->getCustomerId();
        $created_date = $order->getCreatedDate();
        $recipient = $order->getRecipient();
        $phone_no = $order->getPhoneNo();
        $ward_id = $order->getWardId();
        $shipping_address = $order->getShippingAddress();
        $status_id = $order->getStatusId();
        $shipping_cost = $order->getShippingCost();
        $delivery_date = $order->getReceivedDate();

        $sql = "UPDATE `order` SET 
            customer_id=$customer_id, 
            created_date='$created_date', 
            recipient='$recipient', 
            phone_no='$phone_no', 
            ward_id=$ward_id, 
            shipping_address='$shipping_address', 
            status_id=$status_id, 
            shipping_cost=$shipping_cost, 
            delivery_date='$delivery_date' 
            WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($order)
    {
        global $conn;
        $id = $order->getId();
        $sql = "DELETE FROM `order` WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }
}