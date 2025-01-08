<?php
class Review
{
    protected $id;
    protected $customerId;
    protected $productId;
    protected $createdDate;
    protected $content;
    protected $star;

    public function __construct(
        $id,
        $customerId,
        $productId,
        $createdDate,
        $content,
        $star
    ) {
        $this->id = $id;
        $this->customerId = $customerId;
        $this->productId = $productId;
        $this->createdDate = $createdDate;
        $this->content = $content;
        $this->star = $star;
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

    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getStar()
    {
        return $this->star;
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

    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function setStar($star)
    {
        $this->star = $star;
        return $this;
    }
}