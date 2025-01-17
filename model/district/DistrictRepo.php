<?php
class DistrictRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $districts = array();
        $sql = "SELECT * FROM district";
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $district = new District($row["id"], $row["name"], $row["type"], $row["province_id"]);
                $districts[] = $district;
            }
        }
        return $districts;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $districts = $this->fetchAll($condition);
        $district = current($districts);
        return $district;
    }

    function getByProvince($id)
    {
        global $conn;
        $condition = "province_id = $id";
        $districts = $this->fetchAll($condition);
        return $districts;
    }
}
