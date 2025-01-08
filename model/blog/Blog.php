<?php

class Blog
{
    protected $id;
    protected $title;
    protected $content;
    protected $created_date;
    protected $author;
    protected $product_id;

    function __construct($id, $title, $content, $created_date, $author, $product_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->created_date = $created_date;
        $this->author = $author;
        $this->product_id = $product_id;
    }

    function getId()
    {
        return $this->id;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getContent()
    {
        return $this->content;
    }

    function getCreatedDate()
    {
        return $this->created_date;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getProductId()
    {
        return $this->product_id;
    }

    function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;
        return $this;
    }

    function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    function setProductId($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }
}
