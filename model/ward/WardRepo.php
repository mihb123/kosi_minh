<?php
class WardRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $wards = array();
        $sql = "SELECT * FROM ward"; // Assuming the table name is 'ward'
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ward = new Ward(
                    $row["id"],
                    $row["name"],
                    $row["type"],
                    $row["district_id"] // Corrected property name
                );
                $wards[] = $ward;
            }
        }
        return $wards;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $wards = $this->fetchAll($condition);
        $ward = current($wards);
        return $ward;
    }

    function getByDistrict($id)
    {
        global $conn;
        $condition = "district_id = $id";
        $wards = $this->fetchAll($condition);
        return $wards;
    }
}