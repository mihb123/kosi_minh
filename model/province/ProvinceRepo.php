<?php
class ProvinceRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $provinces = array();
        $sql = "SELECT * FROM province"; // Assuming the table name is 'province'
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $province = new Province(
                    $row["id"],
                    $row["name"],
                    $row["type"]
                );
                $provinces[] = $province;
            }
        }
        return $provinces;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $provinces = $this->fetchAll($condition);
        $province = current($provinces);
        return $province;
    }
}