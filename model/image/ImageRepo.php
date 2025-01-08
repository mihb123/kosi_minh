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
                $image = new Image($row["id"], $row["productId"], $row["url"]);
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
        $productId = $data["productId"];
        $url = $data["url"];

        $sql = "INSERT INTO image (productId, url) VALUES ($productId, '$url')";
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
        $productId = $image->getProductId();
        $url = $image->getUrl();

        $sql = "UPDATE image SET 
            productId=$productId, 
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
