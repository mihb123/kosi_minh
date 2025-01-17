<?php
class CartRepo
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
        setcookie('cart', serialize($cart), time() + 7 * 24 * 3600, '/');
    }

    function clear()
    {
        session_id() || session_start();
        unset($_SESSION["cart"]);

        setcookie('cart', '', time() + 7 * 24 * 3600, '/');
    }
}