<?php
class Sku
{
    protected $id;
    protected $product_id;
    protected $color_id;
    protected $material_id;
    protected $price;

    public function __construct($id, $product_id, $color_id, $material_id, $price)
    {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->color_id = $color_id;
        $this->material_id = $material_id;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getProductId()
    {
        return $this->product_id;
    }

    public function getColorId()
    {
        return $this->color_id;
    }

    public function getMaterialId()
    {
        return $this->material_id;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }

    public function setColorId($color_id)
    {
        $this->color_id = $color_id;
        return $this;
    }

    public function setMaterialId($material_id)
    {
        $this->material_id = $material_id;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}