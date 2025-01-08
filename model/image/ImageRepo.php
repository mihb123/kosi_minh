<?php
class ImageRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $images = array();
        $sql = "SELECT * FROM image";
        if ($condition) {
            $sql .= " WHERE  $condition";
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
}