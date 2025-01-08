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
}