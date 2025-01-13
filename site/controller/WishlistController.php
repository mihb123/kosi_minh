<?php
class WishlistController
{
    function get()
    {
        if (!empty($_COOKIE["wishlist"])) {
            $_SESSION["wishlist"] = $_COOKIE["wishlist"];
        }

        if (!empty($_SESSION["wishlist"])) {
            $wishlist = unserialize($_SESSION['wishlist']);
        } else {
            $wishlist = array();
        }
        return $wishlist;
    }

    function store($wishlist)
    {
        $_SESSION['wishlist'] = serialize($wishlist);
        setcookie('wishlist', serialize($wishlist), time() + 24 * 3600, '/');
    }

    function index()
    {
        $wishlists = $this->get();

        $products = [];
        if ($wishlists) {
            foreach ($wishlists as $list) {
                $productRepo = new ProductRepo;
                $products[] = $productRepo->find($list);
            }
        }

        require 'view/viewWishlist.php';
    }

    function add()
    {
        $product_id = $_GET['product_id'] ?? '';
        $wishlists = $this->get();
        if (!in_array($product_id, $wishlists)) {
            $wishlists[] = $product_id;
        }
        $this->store($wishlists);
        $json = json_encode($wishlists);
        echo $json;
    }

    function remove()
    {
        $product_id = $_GET['product_id'] ?? '';
        $wishlists = $this->get();
        if (in_array($product_id, $wishlists)) {
            $i = array_search($product_id, $wishlists);
            unset($wishlists[$i]);
            $new = array_values($wishlists);
        }
        $this->store($new);
        $json = json_encode($new);
        echo $json;
    }

    // function removeWishlist()
    // {
    //     $product_id = $_GET['product_id'] ?? '';
    //     $wishlists = $this->get();
    //     if (in_array($product_id, $wishlists)) {
    //         $i = array_search($product_id, $wishlists);
    //         unset($wishlists[$i]);
    //     }
    //     $this->store($wishlists);
    //     $products = [];
    //     foreach ($wishlists as $list) {
    //         $productRepo = new ProductRepo;
    //         $products[] = $productRepo->find($list);
    //     }
    //     $json = json_encode($products);
    //     echo $json;
    // }
}