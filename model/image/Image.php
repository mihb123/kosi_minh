<?php
class Image
{
    protected $id;
    protected $product_id;
    protected $url;

    public function __construct($id, $product_id, $url)
    {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->url = $url;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getProductId()
    {
        return $this->product_id;
    }

    public function getUrl()
    {
        return $this->url;
    }

    // Setters
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}