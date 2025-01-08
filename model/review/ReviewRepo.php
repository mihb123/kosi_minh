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

    function save($data)
    {
        global $conn;
        $customer_id = $data["customer_id"];
        $product_id = $data["product_id"];
        $created_date = $data["created_date"];
        $content = $data["content"];
        $star = $data["star"];

        $sql = "INSERT INTO review (customer_id, product_id, created_date, content, star) VALUES ($customer_id, $product_id, '$created_date', '$content', $star)";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($review)
    {
        global $conn;
        $id = $review->getId();
        $customer_id = $review->getCustomerId();
        $product_id = $review->getProductId();
        $created_date = $review->getCreatedDate();
        $content = $review->getContent();
        $star = $review->getStar();

        $sql = "UPDATE review SET 
            customer_id=$customer_id, 
            product_id=$product_id, 
            created_date='$created_date', 
            content='$content', 
            star=$star 
            WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($review)
    {
        global $conn;
        $id = $review->getId();
        $sql = "DELETE FROM review WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }
}
