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
}
