<?php
class Product
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $qty;
    private $created_date;
    private $category_id;
    private $featured_image;
    private $discount_id;

    public function __construct($id, $name, $price, $description, $qty, $created_date, $category_id, $featured_image, $discount_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->qty = $qty;
        $this->created_date = $created_date;
        $this->category_id = $category_id;
        $this->featured_image = $featured_image;
        $this->discount_id = $discount_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
        return $this;
    }

    public function getCreatedDate()
    {
        return $this->created_date;
    }

    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;
        return $this;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
        return $this;
    }

    public function getFeaturedImage()
    {
        return $this->featured_image;
    }

    public function setFeaturedImage($featured_image)
    {
        $this->featured_image = $featured_image;
        return $this;
    }

    public function getDiscountId()
    {
        return $this->discount_id;
    }

    public function setDiscountId($discount_id)
    {
        $this->discount_id = $discount_id;
        return $this;
    }

    function getColor()
    {
        $skuRepo = new SkuRepo();
        $colorCodes = [];
        $colors = $skuRepo->findProductId($this->getId());
        return $colors;
    }

    function getDiscount()
    {
        $discountRepo = new DiscountRepo();
        $discount = $discountRepo->find($this->getDiscountId());
        return $discount;
    }
}