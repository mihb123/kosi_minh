<?php
class DiscountRepo
{
    function fetch($condition = null)
    {
        global $conn;
        $discounts = [];

        $query = "SELECT * FROM discount";
        if ($condition) {
            $query .= " WHERE $condition";
        }

        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $discount = new Discount(
                    $row['id'],
                    $row['name'],
                    $row['percent'],
                    $row['start_date'],
                    $row['end_date']
                );
                $discounts[] = $discount;
            }
        }
        return $discounts;
    }

    function find($id)
    {
        if ($id) {
            $condition = "id = $id";
            $discounts = $this->fetch($condition);
            $discount = current($discounts);
            return $discount;
        }
        return null;
    }

    function save($data)
    {
        global $conn;
        $name = $data["name"];
        $percent = $data["percent"];
        $start_date = $data["start_date"];
        $end_date = $data["end_date"];

        $sql = "INSERT INTO discount (name, percent, start_date, end_date) VALUES ('$name', $percent, '$start_date', '$end_date')";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($discount)
    {
        global $conn;
        $id = $discount->getId();
        $name = $discount->getName();
        $percent = $discount->getPercent();
        $start_date = $discount->getStartDate();
        $end_date = $discount->getEndDate();

        $sql = "UPDATE discount SET 
            name='$name', 
            percent=$percent, 
            start_date='$start_date', 
            end_date='$end_date' 
            WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($discount)
    {
        global $conn;
        $id = $discount->getId();
        $sql = "DELETE FROM discount WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }
}
