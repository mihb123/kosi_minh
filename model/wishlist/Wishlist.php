<?php
class Wishlist
{
    protected $id;
    protected $customerId;
    protected $productId;
    protected $createdTime;

    public function __construct($id, $customerId, $productId, $createdTime)
    {
        $this->id = $id;
        $this->customerId = $customerId;
        $this->productId = $productId;
        $this->createdTime = $createdTime;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    // Setters
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
        return $this;
    }
}