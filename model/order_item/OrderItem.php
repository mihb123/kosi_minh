<?php
class OrderItem
{
    protected $skuId;
    protected $orderId;
    protected $qty;
    protected $unitPrice;
    protected $total;

    public function __construct($skuId, $orderId, $qty, $unitPrice, $total)
    {
        $this->skuId = $skuId;
        $this->orderId = $orderId;
        $this->qty = $qty;
        $this->unitPrice = $unitPrice;
        $this->total = $total;
    }

    // Getters
    public function getSkuId()
    {
        return $this->skuId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function getTotal()
    {
        return $this->total;
    }

    // Setters
    public function setQty($qty)
    {
        $this->qty = $qty;
        return $this;
    }

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }
}