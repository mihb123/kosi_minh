<?php
class CustomerRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $customers = array();
        $sql = "SELECT * FROM customer";
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $customer = new Customer($row["id"], $row["name"], $row["email"], $row["phone"], $row["birthday"], $row["verified"], $row["password"]);
                $customers[] = $customer;
            }
        }
        return $customers;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $customers = $this->fetchAll($condition);
        $customer = current($customers);
        return $customer;
    }
}