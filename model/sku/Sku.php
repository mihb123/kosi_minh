<?php

class Sku
{
    protected $sku_id;
    protected $product_id;
    protected $product_name;
    protected $featured_image;
    protected $price;
    protected $sku_price;
    protected $color_name;
    protected $color_code;
    protected $sale_price;
    protected $discount_percent;

    // Constructor
    function __construct($sku_id, $product_id, $product_name, $featured_image, $price, $sku_price, $color_name, $color_code, $sale_price, $discount_percent)
    {
        $this->sku_id = $sku_id;
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->featured_image = $featured_image;
        $this->price = $price;
        $this->sku_price = $sku_price;
        $this->color_name = $color_name;
        $this->color_code = $color_code;
        $this->sale_price = $sale_price;
        $this->discount_percent = $discount_percent;
    }

    // Getter methods
    function getSkuId()
    {
        return $this->sku_id;
    }

    function getProductId()
    {
        return $this->product_id;
    }

    function getProductName()
    {
        return $this->product_name;
    }

    function getFeaturedImage()
    {
        return $this->featured_image;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getSkuPrice()
    {
        return $this->sku_price;
    }

    function getColorName()
    {
        return $this->color_name;
    }

    function getColorCode()
    {
        return $this->color_code;
    }

    function getSalePrice()
    {
        return $this->sale_price;
    }

    function getDiscountPercent()
    {
        return $this->discount_percent;
    }

    // Setter methods
    function setProductId($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }

    function setProductName($product_name)
    {
        $this->product_name = $product_name;
        return $this;
    }

    function setFeaturedImage($featured_image)
    {
        $this->featured_image = $featured_image;
        return $this;
    }

    function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    function setSkuPrice($sku_price)
    {
        $this->sku_price = $sku_price;
        return $this;
    }

    function setColorName($color_name)
    {
        $this->color_name = $color_name;
        return $this;
    }

    function setColorCode($color_code)
    {
        $this->color_code = $color_code;
        return $this;
    }

    function setSalePrice($sale_price)
    {
        $this->sale_price = $sale_price;
        return $this;
    }

    function setDiscountPercent($discount_percent)
    {
        $this->discount_percent = $discount_percent;
        return $this;
    }

    function convertToArray()
    {
        $a = array();
        $a["sku_id"] = $this->sku_id;
        $a["product_id"] = $this->product_id;
        $a["product_name"] = $this->product_name;
        $a["featured_image"] = $this->featured_image;
        $a["price"] = $this->price;
        $a["sku_price"] = $this->sku_price;
        $a["color_name"] = $this->color_name;
        $a["color_code"] = $this->color_code;
        $a["sale_price"] = $this->sale_price;
        $a["discount_percent"] = $this->discount_percent;
        return $a;
    }
}
