<?php
class Image
{
    protected $id;
    protected $productId;
    protected $url;

    public function __construct($id, $productId, $url)
    {
        $this->id = $id;
        $this->productId = $productId;
        $this->url = $url;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function getUrl()
    {
        return $this->url;
    }

    // Setters
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}