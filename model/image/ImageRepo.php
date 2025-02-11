<?php
class ImageRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $images = array();
        $sql = "SELECT * FROM image";
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $image = new Image($row["id"], $row["product_id"], $row["url"]);
                $images[] = $image;
            }
        }

        return $images;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $images = $this->fetchAll($condition);
        $image = current($images);
        return $image;
    }

    function save($data)
    {
        global $conn;
        $product_id = $data["product_id"];
        $url = $data["url"];

        $sql = "INSERT INTO image (product_id, url) VALUES ($product_id, '$url')";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($image)
    {
        global $conn;
        $id = $image->getId();
        $product_id = $image->getproduct_id();
        $url = $image->getUrl();

        $sql = "UPDATE image SET 
            product_id=$product_id, 
            url='$url' 
            WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($image)
    {
        global $conn;
        $id = $image->getId();
        $sql = "DELETE FROM image WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }
}
