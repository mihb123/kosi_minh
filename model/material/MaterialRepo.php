<?php
class MaterialRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $materials = array();
        $sql = "SELECT * FROM material";
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $material = new Material($row["id"], $row["name"], $row["description"]);
                $materials[] = $material;
            }
        }
        return $materials;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $materials = $this->fetchAll($condition);
        $material = current($materials);
        return $material;
    }

    function save($data)
    {
        global $conn;
        $name = $data["name"];
        $description = $data["description"];

        $sql = "INSERT INTO material (name, description) VALUES ('$name', '$description')";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($material)
    {
        global $conn;
        $id = $material->getId();
        $name = $material->getName();
        $description = $material->getDescription();

        $sql = "UPDATE material SET 
            name='$name', 
            description='$description' 
            WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($material)
    {
        global $conn;
        $id = $material->getId();
        $sql = "DELETE FROM material WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }
}
