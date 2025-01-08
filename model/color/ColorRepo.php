<?php
class ColorRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $colors = array();
        $sql = "SELECT * FROM color";
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $color = new Color($row["id"], $row["name"], $row["code"]);
                $colors[] = $color;
            }
        }
        return $colors;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $colors = $this->fetchAll($condition);
        $color = current($colors);
        return $color;
    }
}