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

    function save($data)
    {
        global $conn;
        $name = $data["name"];
        $code = $data["code"];

        $sql = "INSERT INTO color (name, code) VALUES ('$name', '$code')";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($color)
    {
        global $conn;
        $id = $color->getId();
        $name = $color->getName();
        $code = $color->getCode();

        $sql = "UPDATE color SET 
            name='$name', 
            code='$code' 
            WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($color)
    {
        global $conn;
        $id = $color->getId();
        $sql = "DELETE FROM color WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }
}
