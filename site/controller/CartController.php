<?php
class CartController
{
    function display()
    {
        $cartRepo = new CartRepo;
        $cart = $cartRepo->fetch();
        $cartRepo->store($cart);
        $json = json_encode($cart->convertToArray());
        echo $json;
    }

    function add()
    {
        $cartRepo = new CartRepo;
        $cart = $cartRepo->fetch();

        $product_id = $_GET['product_id'] ?? '';
        $qty = $_GET['qty'] ?? '';

        $cart->addItem($product_id, $qty);
        $cartRepo->store($cart);

        $json = json_encode($cart->convertToArray());
        echo $json;
    }

    function minus()
    {
        $cartRepo = new CartRepo;
        $cart = $cartRepo->fetch();

        $product_id = $_GET['product_id'] ?? '';
        $number = $_GET['product_id'] ?? 0;
        $item = $cart->getItems();
        $qty = $item[$product_id]['qty'];
        if ($qty <= $number) {
            $cart->removeItem($product_id);
        } else {
            $qty = $qty - $number;
            $cart->updateItem($product_id, $qty);
        }

        $cartRepo->store($cart);

        $json = json_encode($cart->convertToArray());
        echo $json;
    }

    function show()
    {
        $cartRepo = new CartRepo;
        $cart = $cartRepo->fetch();
        $items = $cart->getItems();
        $Qty = $cart->getQty();
        $Total = $cart->getTotal();

        require 'view/viewCart.php';
    }
}
