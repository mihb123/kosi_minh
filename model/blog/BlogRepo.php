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

    function save($data)
    {
        global $conn;
        $title = $data["title"];
        $content = $data["content"];
        $created_date = $data["created_date"];
        $author = $data["author"];
        $product_id = $data["product_id"];

        $sql = "INSERT INTO blog (title, content, created_date, author, product_id) VALUES ('$title', '$content', '$created_date', '$author', $product_id)";
        if ($conn->query($sql) === TRUE) {
            return $conn->insert_id;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function update($blog)
    {
        global $conn;
        $id = $blog->getId();
        $title = $blog->getTitle();
        $content = $blog->getContent();
        $created_date = $blog->getCreatedDate();
        $author = $blog->getAuthor();
        $product_id = $blog->getProductId();

        $sql = "UPDATE blog SET 
            title='$title', 
            content='$content', 
            created_date='$created_date', 
            author='$author', 
            product_id=$product_id 
            WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }

    function delete($blog)
    {
        global $conn;
        $id = $blog->getId();
        $sql = "DELETE FROM blog WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            return true;
        }
        echo "Error: " . $sql . PHP_EOL . $conn->error;
        return false;
    }
}
