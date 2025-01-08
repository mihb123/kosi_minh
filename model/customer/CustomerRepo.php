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

    function save($data)
    {
        global $conn;
        $name = $data["name"];
        $email = $data["email"];
        $phone = $data["phone"];
        $birthday = $data["birthday"];
        $verified = $data["verified"];
        $password = $data["password"];

        $sql = "INSERT INTO customer (name, email, phone, birthday, verified, password) VALUES ('$name', '$email', '$phone', '$birthday', $verified, '$password')";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($customer)
    {
        global $conn;
        $id = $customer->getId();
        $name = $customer->getName();
        $email = $customer->getEmail();
        $phone = $customer->getPhone();
        $birthday = $customer->getBirthday();
        $verified = $customer->getVerified();
        $password = $customer->getPassword();

        $sql = "UPDATE customer SET 
            name='$name', 
            email='$email', 
            phone='$phone', 
            birthday='$birthday', 
            verified=$verified, 
            password='$password' 
            WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($customer)
    {
        global $conn;
        $id = $customer->getId();
        $sql = "DELETE FROM customer WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }
}
