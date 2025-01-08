<?php
class BlogRepo
{
    protected function fetchAll($condition = null)
    {
        global $conn;
        $blogs = array();
        $sql = "SELECT * FROM blog";
        if ($condition) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $blog = new Blog($row["id"], $row["title"], $row["content"], $row['created_date'], $row["author"], $row['product_id']);
                $blogs[] = $blog;
            }
        }
        return $blogs;
    }

    function getAll()
    {
        return $this->fetchAll();
    }

    function find($id)
    {
        global $conn;
        $condition = "id = $id";
        $blogs = $this->fetchAll($condition);
        $blog = current($blogs);
        return $blog;
    }
}