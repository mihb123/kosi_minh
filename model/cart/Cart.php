<?php
class Cart
{
    protected $items;
    protected $qty;
    protected $total;

    function __construct($items = array(), $qty = 0, $total = 0)
    {
        $this->items = $items;
        $this->qty = $qty;
        $this->total = $total;
    }

    function getItems()
    {
        return $this->items;
    }

    function getQty()
    {
        return $this->qty;
    }

    function getTotal()
    {
        return $this->total;
    }

    function addItem($product_id, $qty)
    {
        $productRepo = new ProductRepo();
        $product = $productRepo->find($product_id);

        if (!array_key_exists($product_id, $this->items)) {
            $this->items[$product_id] = [
                "product_id" => $product_id,
                "name" => $product->getName(),
                "qty" => $qty,
                "unit_price" => $product->getSalePrice(),
                "img" => $product->getFeaturedImage(),
                "total" => $qty * $product->getSalePrice()
            ];
        } else {
            $this->items[$product_id]["qty"] += $qty;
            $this->items[$product_id]["total"] += $qty * $product->getSalePrice();
        }
        $this->qty += $qty;
        $this->total += $qty * $product->getSalePrice();
    }

    function convertToArray()
    {
        $a = array();
        $a['items'] = $this->items;
        $a['qty'] = $this->qty;
        $a['total'] = $this->total;
        return $a;
    }
}