<?php
class CartController
{
    function fetch()
    {
        if (!empty($_COOKIE["cart"])) {
            $_SESSION["cart"] = $_COOKIE["cart"];
        }

        if (!empty($_SESSION["cart"])) {
            $cart = unserialize($_SESSION['cart']);
        } else {
            $cart = new Cart;
        }

        return $cart;
    }

    function store($cart)
    {
        $_SESSION['cart'] = serialize($cart);
        setcookie('cart', serialize($cart), time() + 24 * 3600, '/');
    }

    function display()
    {
        $cart = $this->fetch();
        $this->store($cart);
        $json = json_encode($cart->convertToArray());
        echo $json;
    }

    function add()
    {
        $cart = $this->fetch();

        $product_id = $_GET['product_id'] ?? '';
        $qty = $_GET['qty'] ?? '';

        $cart->addItem($product_id, $qty);
        $this->store($cart);

        $json = json_encode($cart->convertToArray());
        echo $json;
    }
}