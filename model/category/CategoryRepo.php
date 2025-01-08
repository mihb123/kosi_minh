<?php
class CategoryRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $categories = array();
        $sql = "SELECT * FROM category";
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $category = new Category($row["id"], $row["name"]);
                $categories[] = $category;
            }
        }
        return $categories;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $categories = $this->fetchAll($condition);
        $category = current($categories);
        return $category;
    }
}