<?php
class WishlistRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $wishlists = array();
        $sql = "SELECT * FROM wishlist"; // Assuming the table name is 'wishlist'
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $wishlist = new Wishlist(
                    $row["id"],
                    $row["customer_id"], // Corrected property name
                    $row["product_id"], // Corrected property name
                    $row["created_time"] // Corrected property name
                );
                $wishlists[] = $wishlist;
            }
        }
        return $wishlists;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $wishlists = $this->fetchAll($condition);
        $wishlist = current($wishlists);
        return $wishlist;
    }

    function save($data)
    {
        global $conn;
        $customer_id = $data["customer_id"];
        $product_id = $data["product_id"];
        $created_time = $data["created_time"];

        $sql = "INSERT INTO wishlist (customer_id, product_id, created_time) VALUES ($customer_id, $product_id, '$created_time')";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($wishlist)
    {
        global $conn;
        $id = $wishlist->getId();
        $customer_id = $wishlist->getCustomerId();
        $product_id = $wishlist->getProductId();
        $created_time = $wishlist->getCreatedTime();

        $sql = "UPDATE wishlist SET 
            customer_id=$customer_id, 
            product_id=$product_id, 
            created_time='$created_time' 
            WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($wishlist)
    {
        global $conn;
        $id = $wishlist->getId();
        $sql = "DELETE FROM wishlist WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }
}
