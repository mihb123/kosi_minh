<?php
class OrderItem
{
    protected $order_id;
    protected $product_id;
    protected $qty;
    protected $unit_price;
    protected $total;
    protected $product_name;
    protected $product_image;

    public function __construct($order_id, $product_id, $qty, $unit_price, $total, $product_name, $product_image)
    {
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->qty = $qty;
        $this->unit_price = $unit_price;
        $this->total = $total;
        $this->product_name = $product_name;
        $this->product_image = $product_image;
    }

    // Getters
    public function getOrderId()
    {
        return $this->order_id;
    }

    public function getProductId()
    {
        return $this->product_id;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getProductName()
    {
        return $this->product_name;
    }

    public function getProductImage()
    {
        return $this->product_image;
    }

    // Setters
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
        return $this;
    }

    public function setProductImage($product_image)
    {
        $this->product_image = $product_image;
        return $this;
    }
    public function setQty($qty)
    {
        $this->qty = $qty;
        return $this;
    }

    public function setUnitPrice($unit_price)
    {
        $this->unit_price = $unit_price;
        return $this;
    }

    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }
}