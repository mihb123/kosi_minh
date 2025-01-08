<?php
class ShippingCost
{
    protected $id;
    protected $provinceId;
    protected $price;

    public function __construct($id, $provinceId, $price)
    {
        $this->id = $id;
        $this->provinceId = $provinceId;
        $this->price = $price;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    public function getPrice()
    {
        return $this->price;
    }

    // Setters
    public function setProvinceId($provinceId)
    {
        $this->provinceId = $provinceId;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}