<?php
class ReviewRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $reviews = array();
        $sql = "SELECT * FROM review"; // Assuming the table name is 'review'
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $review = new Review(
                    $row["id"],
                    $row["customer_id"], // Corrected property name
                    $row["product_id"], // Corrected property name
                    $row["created_date"], // Corrected property name
                    $row["content"],
                    $row["star"]
                );
                $reviews[] = $review;
            }
        }
        return $reviews;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $reviews = $this->fetchAll($condition);
        $review = current($reviews);
        return $review;
    }
}